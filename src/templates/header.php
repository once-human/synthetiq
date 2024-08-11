<head>
    <!-- <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        nav ul li a {
            text-decoration: none;
            color: black;
            margin: 0 auto;

        }

        .logo img {
            width: 200px;
            height: 60px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin: 0;
        }

        nav ul li {
            margin-right: 10px;
        }

        .notification-icon {
            position: relative;
            display: inline-block;
        }

        .icons {
            background-color: transparent;
            border: 1px solid #ccc;
            border-radius: 50%;
            padding: 5px;
            width: 24px;
            height: 24px;
        }

        .notification-img {
            width: 100%;
            height: 100%;
        }

        .notification-icon .popup {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .notification-icon:hover .popup {
            display: block;
        }
    </style>
</head>
<header>
    <div class="logo">
        <img src="../public/assets/img/navbar-logo.png" alt="site-Logo">
    </div>
    <nav>
        <ul>
            <li><a href="/public/index.php">Home</a></li>
            <li><a href="/public/logout.php">Log out</a></li>
            <li class="notification-icon icons">
                <a href="#">
                    <img src="../public/assets/img/notification.png" alt="Notification Icon" class="notification-img">
                </a>
                <div class="popup">
                    <!-- Add your notification content here -->
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, deleniti.</p>
                </div>
            </li>
        </ul>
    </nav>
</header>