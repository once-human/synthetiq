<?php
require '../config/db.php';

// synthetiq - github.com/once-human

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check if username or email already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username OR email = :email");
    $stmt->execute(['username' => $username, 'email' => $email]);
    $existing_user = $stmt->fetch();

    if ($existing_user) {
        echo "Username or Email already taken. Please choose a different one.";
    } else {
        // Hash the password before saving it to the database
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert new user into the database
        $stmt = $pdo->prepare("INSERT INTO users (username, email, password, role) VALUES (:username, :email, :password, :role)");
        $stmt->execute([
            'username' => $username,
            'email' => $email,
            'password' => $hashed_password,
            'role' => $role
        ]);

        // Redirect to login page or relevant dashboard
        header("Location: login.php");
        exit();
    }
}
?>
