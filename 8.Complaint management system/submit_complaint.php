<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "complaint";

$conn = new mysqli("localhost","root" , "","complaint" );

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$department = $conn->real_escape_string($_POST['department']);
$complaint = $conn->real_escape_string($_POST['complaint']);

// Insert complaint into database
$sql = "INSERT INTO complaints (name, email, department, complaint) VALUES ('$name', '$email', '$department', '$complaint')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Complaint submitted successfully!');</script>";
    echo "<script>window.location.href = 'view_complaint.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>