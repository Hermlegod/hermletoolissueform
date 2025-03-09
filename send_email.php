<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address (your email)
    $to = "tylerdouglasallison@gmail.com";
    
    // Set the subject of the email
    $subject = "New Contact Form Submission";

    // Create the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>
