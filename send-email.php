<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = $_POST["message"];
  $to = "your-email@example.com";
  $subject = "New message from your website";
  $headers = "From: webmaster@example.com\r\n" .
             "Reply-To: webmaster@example.com\r\n" .
             "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);

  echo "Thank you for your message!";
}
?>