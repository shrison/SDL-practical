<?php
// Database Configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Facebook";

// Create connection
$conn = new mysqli("localhost", "root", "", "Facebook");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>