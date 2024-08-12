<?php
// Start the session
session_start();

// Check if the user is already logged in
if (isset($_SESSION['role'])) {
    // Redirect to the respective dashboard based on the user role
    switch ($_SESSION['role']) {
        case 'student':
            header("Location: ../public/student-d.php");
            exit();
        case 'company':
            header("Location: ../company-d.php");
            exit();
        case 'admin':
            header("Location: ../admin-d.php");
            exit();
    }
}
    
// Include the header
include('../src/templates/header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../public/assets/css/register.css">
</head>
<body>
    <main>
        <div class="register-container">
            <h1>Create an Account</h1>
            <form action="../src/controllers/register_process.php" method="POST">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="role">Role</label>
                    <select id="role" name="role" required>
                        <option value="student">Student</option>
                        <option value="company">Company</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>
                <div class="input-group">
                    <button type="submit">Register</button>
                </div>
                <div class="login-link">
                    <a href="login.php">Already have an account? Login here</a>
                </div>
            </form>
        </div>
    </main>
    <?php include('../src/templates/footer.php'); ?>
</body>
</html>
