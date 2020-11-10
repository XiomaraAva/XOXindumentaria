<?php
// Check for empty fields
if(empty($_POST['Nombre']) || empty($_POST['Email']) || empty($_POST['Telefono']) || empty($_POST['Mensaje']) || !filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$Nombre = strip_tags(htmlspecialchars($_POST['Nombre']));
$Email = strip_tags(htmlspecialchars($_POST['Email']));
$Telefono = strip_tags(htmlspecialchars($_POST['Telefono']));
$Mensaje = strip_tags(htmlspecialchars($_POST['Mensaje']));

// Create the email and send the message
$to = "xiiovyp@gmail.com"; // Add your email address in between the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$header = "From: xiiovyp@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
