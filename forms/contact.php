<?php
  
  // $to = 'abhishekzambare@gmail.com';
  // $from_name = $_POST['name'];
  // $from_email = $_POST['email'];
  // $subject = $_POST['subject'];
  // $message = $_POST['message'];


  $to = 'abhishekzambare@gmail.com';
$subject = $_POST['subject'];
$txt = $_POST['name']." : ".$_POST['message'];
$headers = "From: ".$from_email;

mail($to,$subject,$txt,$headers);

?>
