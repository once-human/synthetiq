<?php
// synthetiq - github.com/once-human
// src/config/db.php

// Database configuration
$host = 'localhost';      // Database host
$dbname = 'synthetiq'; // Database name
$user = 'root';           // Database username
$pass = 'test';               // Database password

// Create a new PDO instance
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Test connection
    echo "Database connection successful!";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>