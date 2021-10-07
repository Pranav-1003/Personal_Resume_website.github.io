<?php

//get data from form 

$name = $_POST['name'];

$subjectS = $_POST['subjectS'];

$email= $_POST['email'];

$message= $_POST['message'];

$to = $mail;

$subject = "Mail From Pranav";

$txt ="Name = ". $name . "\r\n Subject = " . $subjectS . "\r\n Email = " . $email . "\r\n Message =" . $message;

$headers = "From: file:///home/pranav/Pictures/Project/index.html" . "\r\n" .

"CC: pranavtotala12@gmail.com.com";

$subject = "Mail From Pranav";


if($email!=NULL){

mail($to,$subject,$txt,$headers);

}

//redirect

header("Location:thankyou.html");

?>
