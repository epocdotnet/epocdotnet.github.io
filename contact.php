<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Send an email to the contact information
mail('contact@example.com', 'New Contact Form Submission', $message, 'From: ' . $email);

// Redirect the user to the home page
header('Location: index.html');

?>
