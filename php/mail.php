<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$subject = $_POST['subject'];
$message= $_POST['message'];
$to = "absolomkahara1@gmail.com";

$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject=".$subject."\r\n Message =" . $message;
$headers = "From: noreply@AbsolomKaharaWeb.com" . "\r\n" .
"CC: mwangimorris55@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
//header("Location:thankyou.html");
?>