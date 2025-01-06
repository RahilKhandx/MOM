<?php
if(isset($_POST['submit'])) {
   
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if($name=='' || $email=='' || $phone=='' || $message==''){
   echo "<script>alert('All fields are required !')</script>";
   echo "<script>window.open('contact-us.php','_self')</script>";
} else {

$from       = "Enquiry";
$webmaster  = "info@momspg.com"; //It's web master mail info@example.com
$to         = "momspg4@gmail.com"; // where you want to get mail 
$subject    = "Enquiry";

$headers    = "From: " . $from . "<" . $webmaster . ">\r\n";
$headers    .= "X-Mailer: PHP/" . phpversion() . "\r\n";
$headers    .= "MIME-Version: 1.0" . "\r\n";
$headers    .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$message = "<html><body>";
$message .= "<p>Name :".$_POST['name']  ."</p>";
$message .= "<p>Email : ". $_POST['email'] ."</p>";
$message .= "<p>Phone : ". $_POST['phone'] ."</p>";
$message .= "<p>Message :".$_POST['message']."</p>";
$message .= "</body></html>";

$sendmail = mail($to, $subject, $message, $headers);

// echo "<script>alert('Thank you for contact us, our team will contact with you very soon')</script>";
echo "<script>window.open('thank-you.php?sent=Your Form Has been Submited','_self')</script>";
}
}

?>