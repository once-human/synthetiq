<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Synthetiq"; ?></title> <!-- Dynamic title -->
    <link rel="stylesheet" href="../public/assets/css/header.css"> 
    <link rel="icon" href="../public/assets/img/favicon.png" type="image/jpeg"> <!-- Favicon -->
</head>

<body>
    <header>
        <div class="logo">
            <img src="../public/assets/img/navbar-logo.png" alt="site-Logo">
        </div>
        <nav>
            <ul>
                <li><a href="../public/index.php">Home</a></li>
                <li><a href="../public/logout.php">Log out</a></li>
                <li class="notification-icon icons">
                    <a href="#">
                        <img src="../public/assets/img/notification.png" alt="Notification Icon" class="notification-img">
                    </a>
                    <div class="popup">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                    </div>
                </li>
            </ul>
        </nav>
    </header>