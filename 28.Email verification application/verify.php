<?php
session_start();

// Check if verification code is submitted
if (isset($_POST['verification_code'])) {
    // Verify verification code
    if ($_POST['verification_code'] == $_SESSION['verification_code']) {
        echo 'Email verified successfully!';
        // Here, you can update your database to mark the email as verified
    } else {
        echo 'Invalid verification code. Please try again.';
    }
} else {
    // Display verification form
    echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Email Verification</title>
    </head>
    <body>
        <h1>Email Verification</h1>
        <form action="verify.php" method="post">
            <label for="verification_code">Verification Code:</label>
            <input type="text" id="verification_code" name="verification_code" required>
            <button type="submit">Verify</button>
        </form>
    </body>
    </html>
    ';
}
?>
