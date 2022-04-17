<?php

  echo "<pre>";
    print_r($_POST);
  echo "</pre>";

  $username = $_POST['name'];
  $useremail = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = "contact@muslehdin.com";
  $body = ""

  $body .= "From: " .$username. "\r\n";
  $body .= "Email: " .$useremail. "\r\n";
  $body .= "Message: " .$message. "\r\n";

  mail($to, $subject, $body);



?>