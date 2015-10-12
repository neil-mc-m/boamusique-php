<?php
require_once("views/header.php");
require_once("defaultnavStyles.php");
$contactStyle = 'class="active"';
require_once("views/navbar.php");
require_once("views/divider.php");


    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        var_dump($email);
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Demo Contact Form'; 
        $to = 'neilo2000@gmail.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "E-Mail: $email\n Subject: $subject\n Message:\n $message";
 
       
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
         // Check if subject has been entered
        if (!$_POST['subject']) {
            $errSubject = 'Please enter a subject';
        }
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
if (!$errEmail && !$errSubject && !$errMessage && !$errHuman) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
    }
}
    }
?>