<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "blood_bank";

$conn = new mysqli("localhost", "root", "", "blood_bank");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
