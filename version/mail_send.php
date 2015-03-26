<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['body'];
$subject="Queries From ".$name;
$to="director@betoparedes.com";
$headers="From: ".$name. "\r\n";
$headers.="Reply To: ".$email." \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\n";
mail($to, $subject, $message, $headers);
header("Location: contact.php");
?>