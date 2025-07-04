<?php
//get data from form  
$name = $_POST['username'];
$number = $_POST['phone'];
$company = $_POST['company'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "nathallidesigns@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name ."\r\n mobile number =" .$number ."\r\n company =". $company . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@nathallibuildingdesignandrenderingstudio.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>