<?php
     ini_set("SMTP","natkis023@hotmail.com");

     // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
     ini_set("smtp_port","25");
     // Please specify the return address to use
     ini_set('sendmail_from', 'natkis023@hotmail.com');
  if(isset( $_POST['name']))
  $name = $_POST['name'];
  if(isset( $_POST['email']))
  $email = $_POST['email'];
  if(isset( $_POST['message']))
  $message = $_POST['message'];
  if(isset( $_POST['subject']))
  $subject = $_POST['subject'];
  ini_set("SMTP","natkis023@hotmail.com");

  // Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
  ini_set("smtp_port","25");
  // Please specify the return address to use
  ini_set('sendmail_from', 'natkis023@hotmail.com');
  $content="From: $name \n Email: $email \n Message: $message";
  $recipient = "natkis023@hotmail.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";
?>