<?php
$servername = "localhost"; // Your server name
$username = "root";        // Your MySQL username
$password = "";            // Your MySQL password
$dbname = "employee_db"; // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
x