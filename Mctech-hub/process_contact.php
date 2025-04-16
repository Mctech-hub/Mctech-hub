<?php
require_once 'config/config.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode([
        'success' => false,
        'message' => 'Invalid request method'
    ]);
    exit;
}

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

if (!$name || !$email || !$message) {
    echo json_encode([
        'success' => false,
        'message' => 'Please fill all required fields'
    ]);
    exit;
}

$to = SITE_EMAIL;
$subject = "New Contact Form Submission from " . $name;
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message:\n$message\n";

$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();

if (mail($to, $subject, $email_content, $headers)) {
    echo json_encode([
        'success' => true,
        'message' => 'Thank you! Your message has been sent.'
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Sorry, there was an error sending your message.'
    ]);
}
