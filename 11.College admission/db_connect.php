<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college_admission";

// Create connection
$conn = new mysqli("localhost", "root", "", "college_admission");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
