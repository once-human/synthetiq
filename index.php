<?php
session_start(); // Start the session to access session variables

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, redirect to the appropriate dashboard
    $role = $_SESSION['role'];
    if ($role == 'student') {
        header("Location: /synthetiq/public/student-d.php");
    } elseif ($role == 'company') {
        header("Location: /synthetiq/public/company-d.php");
    } elseif ($role == 'admin') {
        header("Location: /synthetiq/public/admin-d.php");
    } else {
        // Role is not recognized, redirect to login page
        header("Location: /synthetiq/public/login.php");
    }
    exit(); // Ensure no further code is executed
} else {
    // User is not logged in, redirect to login page
    header("Location: /synthetiq/public/login.php");
    exit(); // Ensure no further code is executed
}
?>
