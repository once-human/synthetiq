<?php include('../src/templates/header.php'); ?>
<!-- // synthetiq - github.com/once-human -->
<head>
    <link rel="stylesheet" href="../public/assets/css/login.css">
</head>
<main>
    <div class="login-container">
        <form action="../src/controllers/login_process.php" method="POST">
            <div class="input-group">
                <label for="email_username">Email/Username</label>
                <input type="text" id="email_username" name="email_username" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="input-group">
                <button type="submit">Login</button>
            </div>
            <div class="register-link">
                <a href="register.php">New user? Register here</a>
            </div>
        </form>
    </div>
</main>

<?php include('../src/templates/footer.php'); ?>
