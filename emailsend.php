<?php
require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    $mail->isSMTP();
    $mail->SMTPAuth = true;

    $mail->Host = "smtp.gmail.com"; // Corrected: SMTP server hostname
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = "discovercebu2024@gmail.com";
    $mail->Password = "travelcebu";

    $mail->setFrom($_POST["email"], $_POST["name"]);
    $mail->addAddress("dave@example.com", "Dave");

    $mail->Subject = $_POST["subject"];
    $mail->Body = $_POST["message"];

    if (!$mail->send()) {
        echo "Error: " . $mail->ErrorInfo;
    } else {
        echo "Message sent successfully!";
    }

    header("Location: contact.php");
    exit;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
