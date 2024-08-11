<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Synthetiq"; ?></title>
    <link rel="stylesheet" href="../public/assets/css/header.css"> 
    <link rel="stylesheet" href="../public/assets/css/footer.css">
    <link rel="icon" href="../public/assets/img/favicon.png" type="image/jpeg">
</head>

<body>
    <div class="container">
        <header>
            <div class="header-wrapper">
                <div class="logo">
                    <img src="../public/assets/img/navbar-logo.png" alt="site-Logo">
                </div>
                <nav>
                    <ul>
                        <li><a href="../public/index.php">Home</a></li>
                        <?php
                        session_start();
                        if (isset($_SESSION['role'])) {
                            switch ($_SESSION['role']) {
                                case 'student':
                                    echo '<li><a href="../public/student-d.php">Dashboard</a></li>';
                                    echo '<li class="notification-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/notification.png" alt="Notification Icon" class="notification-img">
                                            </a>
                                            <div class="popup">
                                                <p>Notification Content 1</p>
                                                <p>Notification Content 2</p>
                                                <p>Notification Content 3</p>
                                            </div>
                                          </li>';
                                    echo '<li class="profile-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/profile.png" alt="Profile Icon" class="profile-img">
                                            </a>
                                            <div class="popup">
                                                <a href="../public/profile.php">Profile</a>
                                                <a href="../public/application-status.php">Application Status</a>
                                                <a href="../public/job-details.php">Job Details</a>
                                                <a href="../public/logout.php">Log out</a>
                                            </div>
                                          </li>';
                                    break;
                                case 'admin':
                                    echo '<li><a href="../public/admin-d.php">Dashboard</a></li>';
                                    echo '<li class="notification-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/notification.png" alt="Notification Icon" class="notification-img">
                                            </a>
                                            <div class="popup">
                                                <p>Notification Content 1</p>
                                                <p>Notification Content 2</p>
                                                <p>Notification Content 3</p>
                                            </div>
                                          </li>';
                                    echo '<li class="profile-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/profile.png" alt="Profile Icon" class="profile-img">
                                            </a>
                                            <div class="popup">
                                                <a href="../public/profile.php">Profile</a>
                                                <a href="../public/reports.php">Reports</a>
                                                <a href="../public/logout.php">Log out</a>
                                            </div>
                                          </li>';
                                    break;
                                case 'company':
                                    echo '<li><a href="../public/company-d.php">Dashboard</a></li>';
                                    echo '<li class="notification-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/notification.png" alt="Notification Icon" class="notification-img">
                                            </a>
                                            <div class="popup">
                                                <p>Notification Content 1</p>
                                                <p>Notification Content 2</p>
                                                <p>Notification Content 3</p>
                                            </div>
                                          </li>';
                                    echo '<li class="profile-icon icons">
                                            <a href="#">
                                                <img src="../public/assets/img/profile.png" alt="Profile Icon" class="profile-img">
                                            </a>
                                            <div class="popup">
                                                <a href="../public/profile.php">Profile</a>
                                                <a href="../public/job-details.php">Job Details</a>
                                                <a href="../public/job-posting.php">Job Posting</a>
                                                <a href="../public/logout.php">Log out</a>
                                            </div>
                                          </li>';
                                    break;
                            }
                        } else {
                            echo '<li><a href="../public/about.php">About Us</a></li>';
                            echo '<li><a href="../public/signin.php">Sign In</a></li>';
                            echo '<li><a href="../public/register.php">Register</a></li>';
                        }
                        ?>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="content">
            <!-- Main content of the page goes here -->
