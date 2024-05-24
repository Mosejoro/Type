<?php

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Collect form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $phone = $_POST["phone"];  // Add phone number collection

  // Basic validation (optional)
  if (empty($name) || empty($email) || empty($message)) {
    echo "Please fill out all required fields.";
  } else {

    // Process the form data (example: send an email)
    $to = "rseun4125@gmail.com";
    $subject = "Form Submission from Your Website";
    $body = "Name: $name\nEmail: $email\nMessage: $message\nPhone: $phone";  // Include phone number in body

    if (mail($to, $subject, $body)) {
      echo "Thank you for your message! We will be in touch shortly.";
    } else {
      echo "There was an error sending your message. Please try again later.";
    }
  }
}

?>
