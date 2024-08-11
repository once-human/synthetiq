<?php

// Connect to the database
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM reports";
$result = $conn->query($sql);

// Generate the report
if ($result->num_rows > 0) {
    echo "<h1>Company Report</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Department</th><th>Salary</th></tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["department"] . "</td>";
        echo "<td>" . $row["salary"] . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();

?>