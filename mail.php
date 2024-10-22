<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$number = $_POST['number'];
$message= $_POST['message'];
$to = "mithunbasavaraj057@gmail.com";
$subject = "Mail From website";
$txt = "Name = ". $name ."\r\nMobileNumber = " . $number .  "\r\nEmail = " . $email .  "\r\nMessage =" . $message ;
$headers = "From:noreply@yoursite.com" . "\r\n" .
"CC:mithunbasavaraj057@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
