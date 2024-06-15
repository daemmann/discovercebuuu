<?php
include 'db_connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();


$fullName = $_POST["fullname"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$address = $_POST["address"];
$password = $_POST["password"];
$passwordRepeat = $_POST["repeat_password"];
$img = $_POST["fileToUpload"];


$sql = "SELECT * FROM users where email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        $_SESSION['message'] = "<div class='alert alert-danger'>Email Already Exists</div>";
        header("Location: login_signup.php");
    }
} else {

    if ($password === $passwordRepeat) {

        $sql = "INSERT INTO users (fullname, contact, email, address, password, img )
VALUES ('$fullName', '$contact', '$email', '$address', '$password', '$img' )";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $_SESSION['message'] = "User Registration Successfull";
            header("Location: login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        $_SESSION['message'] = "<div class='alert alert-danger'>Password Doesn't Match</div>";
        header("Location: login_signup.php");
    }
}
$conn->close();
