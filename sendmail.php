<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('connect.php');

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$errors = [];

$name = trim($name);
$email = trim($email);
$message = trim($message);

if(empty($name)) {
    $errors['name'] = 'Name cannot be empty';
}

if(empty($message)) {
    $errors['message'] = 'Message field cannot be empty';
}

if(empty($email)) {
    $errors['email'] = 'You must provide an email';
} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['legit_email'] = 'You must provide a REAL email';
}

if(empty($errors)) {
    $stmt = $connect->prepare("INSERT INTO contactFormSubmissions (Name, Email, Message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    if($stmt->execute()) {
        $to = 'nikitaburia68@gmail.com';
        $subject = 'Message from your Portfolio site!';
        $headers = "From: " . $email . "\r\n";
        $headers .= "Reply-To: ". $email . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $email_message = "<html><body>";
        $email_message .= "<h1>You have received a new contact form submission:</h1>";
        $email_message .= "<p><strong>Name:</strong> {$name}</p>";
        $email_message .= "<p><strong>Email:</strong> {$email}</p>";
        $email_message .= "<p><strong>Message:</strong></p>";
        $email_message .= "<p>{$message}</p>";
        $email_message .= "</body></html>";

        if(!mail($to, $subject, $email_message, $headers)) {
            echo 'Mail could not be sent.';
            // Uncomment the line below to debug email sending failures
            // error_log('Mail could not be sent from sendmail.php script.');
        } else {
            header('Location: thank_you.php');
        }
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    // Here you should handle what happens if there are errors.
    // For example, re
