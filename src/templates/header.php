<head>
    <!-- <link rel="stylesheet" href="/assets/css/styles.css"> -->
    <style>
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 8px;
            background-color: #f2f2f2;
        }

        .logo img {
            width: 70px;
            height: 30px;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 10px;
        }

        nav ul li {
            margin-right: 10px;
        }

        .notification-icon {
            position: relative;
            display: inline-block;
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
        <img src="/assets/images/logo.png" alt="Logo">
    </div>
    <nav>
        <ul>
            <li><a href="/public/index.php">Home</a></li>
            <li><a href="/public/logout.php">Log out</a></li>
            <li class="notification-icon">
                <a href="#">
                    <img src="/assets/images/notification.png" alt="Notification Icon">
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
