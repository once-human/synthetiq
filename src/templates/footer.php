<footer class="footer">
    <div class="left">
        <div class="logo">
            <img src="../public/assets/img/footer-logo.png" alt="Logo" style="width: 200px;">
        </div>
        <div class="nav">
            <ul>
                <?php if ($user_role === 'admin' || $user_role === 'company'): ?>
                    <li><a href="/public/application-status.php">Application Status</a></li>
                <?php endif; ?>
                <?php if ($user_role === 'student'): ?>
                    <li><a href="/public/profile.php">Profile</a></li>
                <?php endif; ?>
                <?php if ($user_role === 'guest'): ?>
                    <li><a href="/public/login.php">Login</a></li>
                    <li><a href="/public/register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </div>
        <div class="nav">
            <ul>
                <li><a href="/public/job-details.php">Job Details</a></li>
                <li><a href="/public/notifications.php">Notifications</a></li>
                <li><a href="/public/reports.php">Reports</a></li>
            </ul>
        </div>
    </div>
    <div class="right">
        <p>&copy; <?php echo date('Y'); ?> Synthetiq. All rights reserved.<br>
        Your Address Line 1, City, State, ZIP Code.</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
        </div>
        <p>Built with PHP and your tech stack</p>
    </div>
</footer>
</div> <!-- Close container div -->
</body>
</html>
