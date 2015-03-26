<?php
include ('conect.php');
// PHP 4.1

// read the post from PayPal system and add 'cmd'
$req = 'cmd=_notify-validate';
//print_r($_POST);
foreach ($_POST as $key => $value) {
$value = urlencode(stripslashes($value));
$req .= "&$key=$value";
}

// post back to PayPal system to validate
$header .= "POST /cgi-bin/webscr HTTP/1.0\r\n";
$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
$header .= "Content-Length: " . strlen($req) . "\r\n\r\n";
//$fp = fsockopen('ssl://www.sandbox.paypal.com',443,$errno, $errstr,50);
$fp = fsockopen ("www.paypal.com", 80, $errno, $errstr, 30);
// assign posted variables to local variables
$item_name = $_POST['item_name'];
//$item_number = $_POST['item_number'];
//$payment_status = $_POST['payment_status'];
$payment_amount = $_POST['mc_gross'];
$payment_currency = $_POST['mc_currency'];
$txn_id = $_POST['txn_id'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$payment_date = $_POST['payment_date'];
$payment_status = $_POST['payment_status'];
$payer_status = $_POST['payer_status'];
$order_id = $_POST['item_number'];



if (!$fp) {
// HTTP ERROR
//echo 'Hi';
} else {
//echo 'Hello';
fputs ($fp, $header . $req);
while (!feof($fp)) {
$res = fgets ($fp, 1024);
//echo $res;
if (strcmp ($res, "VERIFIED") == 0) {

if($payer_status=='verified')
{
  $sql = "update `purchase_class` set `amount` = '$payment_amount',`status`='paid' where `id`='$order_id'";
 $result = mysql_query($sql) or die(mysql_error());
 if($result)
  {
   $sqlf = "select * from `purchase_class` where `id`='$order_id'";
   $res=mysql_query($sqlf) or die(mysql_error());
   $row=mysql_fetch_array($res);
      $name = $row['name'];
      $phone = $row['phone'];
      $email = $row['email'];
      $dateplace = $row['dateplace'];
      $product = $row['product'];
      $amount = $row['amount'];
     $status = $row['status']; 

    //Buyer's Email
	 
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= "From:director@betoparedes.com"."\r\n"; // Sender's Email
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $subject='Join in Beto paredes Class';
        $message .= "Dear".$name."<br />";
		$message .= "You have successfully purchashed ".$product."<br />";
		@mail($email,$subject,$message,$headers); 
	header('Location:thanyou1.php');

  
  }
}


//echo 'Success';
// check the payment_status is Completed
// check that txn_id has not been previously processed
// check that receiver_email is your Primary PayPal email
// check that payment_amount/payment_currency are correct
// process payment
}
else if (strcmp ($res, "INVALID") == 0) {
//echo 'Fail';
// log for manual investigation
}
}
fclose ($fp);
}
?>


