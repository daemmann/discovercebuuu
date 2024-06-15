<?php
session_start();
require 'db_connection.php';

if (isset($_POST['send_reset_link'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    
    // Check if email exists
    $query = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));
        
        // Store token in the database with the email
        $query = "UPDATE users SET reset_token='$token', reset_token_expiry=DATE_ADD(NOW(), INTERVAL 1 HOUR) WHERE email='$email'";
        mysqli_query($conn, $query);

        // Send reset link to user's email
        $reset_link = "http://yourwebsite.com/reset_password.php?token=$token";
        $subject = "Password Reset Request";
        $message = "Click the following link to reset your password: $reset_link";
        $headers = "From: noreply@discovercebu.com";

        mail($email, $subject, $message, $headers);

        $_SESSION['message'] = "Password reset link has been sent to your email.";
        header("Location: login_signup.php");
    } else {
        $_SESSION['message'] = "Email not found.";
        header("Location: forgot_password.php");
    }
}
?>
