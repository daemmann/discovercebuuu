<?php
include 'db_connection.php';

session_start();


$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$msg = $_POST["message"];





$sql = "INSERT INTO contactus (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$msg' )";

if ($conn->query($sql) === TRUE) {
    echo "Feedback sent successfully";
    $_SESSION['message'] = "Feedback sent successfully";
    header("Location: contact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
