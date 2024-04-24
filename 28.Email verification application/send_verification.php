<?php
// Generate random verification code
$verification_code = mt_rand(100000, 999999);

// Send verification email
$to = $_POST['email'];
$subject = 'Email Verification';
$message = 'Your verification code is: ' . $verification_code;
$headers = 'From: dhageshriniwas@gmail.com';

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'Verification code sent to your email.';
} else {
    echo 'Failed to send verification code. Please try again later.';
}

// Store verification code in session
session_start();
$_SESSION['verification_code'] = $verification_code;
$_SESSION['email'] = $to;
?>
