<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "library";

$conn = mysqli_connect("localhost", "root", "", "library");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>