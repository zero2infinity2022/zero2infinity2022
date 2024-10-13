<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Example email sending or saving process
    mail("info@zero2infinity2022.com", "Contact Form Submission", $message, "From: $name <$email>");
    
    echo "Thank you for contacting us!";
}
?>

