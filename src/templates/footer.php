<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Template</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .footer {
            background-color: #121212;
            color: #fff;
            padding: 40px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }
        .footer .left,
        .footer .right {
            display: flex;
            flex-direction: column;
        }
        .footer .left .logo {
            margin-bottom: 20px;
        }
        .footer .left .nav {
            margin-bottom: 10px;
        }
        .footer .nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .footer .nav ul li {
            margin-bottom: 8px;
        }
        .footer .nav ul li a {
            text-decoration: none;
            color: #bbb;
            font-size: 14px;
        }
        .footer .right {
            text-align: right;
        }
        .footer .right p {
            margin: 0 0 10px 0;
            font-size: 14px;
        }
        .footer .social-icons a {
            text-decoration: none;
            color: #bbb;
            font-size: 20px;
            margin-right: 10px;
        }
        .footer .social-icons a:last-child {
            margin-right: 0;
        }
    </style>
</head>
<body>

    <footer class="footer">
        <div class="left">
            <div class="logo">
                <img src="../public/assets/img/footer-logo.png" alt="Logo" style="width: 200px;">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="/public/contact.php">Contact info</a></li>
                </ul>
            </div>
            <div class="nav">
                <ul>
                    <li><a href="/public/terms.php">Terms and Conditions</a></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>Your Company Name. All rights reserved.<br>
            Your Address Line 1, City, State, ZIP Code.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
            <p>Built with [Your Technology Stack]</p>
        </div>
    </footer>

</body>
</html>

