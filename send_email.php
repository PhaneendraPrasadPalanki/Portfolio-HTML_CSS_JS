<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Set the recipient email address
    $to = 'phaneendraprasadpalanki@gmail.com';

    // Set the email subject
    $subject = 'New Message from Contact Form';

    // Create the email body
    $email_body = "You have received a new message from the contact form on your website.\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Redirect to a thank you page or show a success message
        echo "Thank you! Your message has been sent.";
    } else {
        // Show an error message if the email could not be sent
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
