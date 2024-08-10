<?php
require '../config/db.php';
// synthetiq - github.com/once-human

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_username = $_POST['email_username'];
    $password = $_POST['password'];

    // Fetch user by email/username
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :email_username OR email = :email_username");
    $stmt->execute(['email_username' => $email_username]);
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {
        // Start session and redirect to the dashboard
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        // Redirect based on role
        if ($user['role'] == 'student') {
            header("Location: student_dashboard.php");
        } elseif ($user['role'] == 'company') {
            header("Location: company_dashboard.php");
        } elseif ($user['role'] == 'admin') {
            header("Location: admin_dashboard.php");
        }
        exit();
    } else {
        // Invalid credentials
        echo "Invalid email/username or password!";
    }
}
?>
