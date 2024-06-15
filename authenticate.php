<?php
require_once 'db_connection.php';
session_start();

// Your reCAPTCHA secret key
$recaptcha_secret = '6LeOwPEpAAAAAHQD6_n9lOrdF1h_BXSl8gOnomd6';

// Check if the connection is established
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    
    // Verify the reCAPTCHA response
    $verify_url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = array(
        'secret' => $recaptcha_secret,
        'response' => $recaptcha_response
    );

    // Use curl to make the request
    $ch = curl_init($verify_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $response = curl_exec($ch);
    curl_close($ch);

    $response_data = json_decode($response);

    if ($response_data->success) {
        // reCAPTCHA verification succeeded

        $email = $_POST["email"];
        $password = $_POST["password"];

        // Prepare the query
        $sql = "SELECT * FROM users WHERE email=? AND password=?";

        // Prepare the statement
        $stmt = $conn->prepare($sql);

        // Bind the parameters
        $stmt->bind_param("ss", $email, $password);

        // Execute the query
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // Authentication successful

            $_SESSION["name"] = $row["fullname"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["id"] = $row["id"];
            $_SESSION['message'] = "Welcome . <b>" . $row['fullname'] . "</b>";
            header("Location: index.php");
            exit();
        } else {
            // Authentication failed
            $_SESSION['message'] = "<div class='alert alert-danger'>Invalid Credentials</div>";
            header("Location: login.php");
            exit();
        }
    } 
}

$conn->close();
?>
