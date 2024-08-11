<?php
session_start(); // Start the session to access session variables

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie if it exists
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 42000, '/');
}

// Destroy the session
session_destroy();

// Redirect to the login page
header("Location: /synthetiq/public/login.php");
exit(); 
?>
