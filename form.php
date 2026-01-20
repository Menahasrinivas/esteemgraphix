<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['send_message'])) {

  $name    = $_POST['name'];
  $email   = $_POST['email'];
  $mobile  = $_POST['mobile'];
  $message = $_POST['message'];

  $to = "art@esteemgraphix.in";
  $subject = "New Enquiry from Website";

  $body  = "Name: $name\n";
  $body .= "Email: $email\n";
  $body .= "Mobile: $mobile\n\n";
  $body .= "Message:\n$message";

  $headers  = "From: Website <no-reply@esteemgraphix.in>\r\n";
  $headers .= "Reply-To: $email\r\n";

  if (mail($to, $subject, $body, $headers)) {
    header("Location: contact.php?status=success");
  } else {
    header("Location: contact.php?status=error");
  }
  exit();
}
