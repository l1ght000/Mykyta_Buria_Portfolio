<?php

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

    $query = "INSERT INTO contactFormSubmissions (Name, Email, Message) VALUES ('$name', '$email', '$message')";

    if(mysqli_query($connect, $query)) {
        $to = 'nikitaburia68@gmail.com';
        $subject = 'Message from your Portfolio site!';
        $message = "You have received a new contact form submission:\n\n";
        $message .= "Name: ".$name."\n";
        $message .= "Email: ".$email."\n";
        $message .= "Message: ".$message."\n";

        mail($to, $subject, $message);

        header('Location: thank_you.php');
    }
}
?>
