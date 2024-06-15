<?php
session_start();
require 'db_connection.php';

if (isset($_POST['update_password'])) {
    $token = mysqli_real_escape_string($conn, $_POST['token']);
    $new_password = mysqli_real_escape_string($conn, $_POST['new_password']);
    $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

    // Update the password in the database
    $query = "UPDATE users SET password='$hashed_password', reset_token=NULL, reset_token_expiry=NULL WHERE reset_token='$token'";
    if (mysqli_query($conn, $query)) {
        $_SESSION['message'] = "Password updated successfully.";
        header("Location: login_signup.php");
    } else {
        $_SESSION['message'] = "Failed to update password.";
        header("Location: reset_password.php?token=$token");
    }
}
?>
