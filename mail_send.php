<?php
session_start();
   $captcha1=$_POST['captcha2'];
      $cap_ses=$_SESSION['kapcode'];

 
  if($captcha1=='')
  {
   $_SESSION['error']='Please Enter captcha text...'   ;
  }
  
   else if($captcha1!=$cap_ses)
  {
   $_SESSION['error']='Please Enter correct text...'   ;
  }
  else
  {
        $_SESSION['error']='' ;
  }

if(empty($_SESSION['error']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['body'];
//exit;
$subject="Queries From ".$name;
$to="director@betoparedes.com";
//$to=$email;
$headers="From: ".$name. "\r\n";
$headers.="Reply To: ".$email." \r\n";
$headers.= "MIME-Version: 1.0\r\n";
$headers.= "Content-Type: text/html; charset=ISO-8859-1\n";
mail($to, $subject, $message, $headers);
}
header("Location: contact.php");

?>