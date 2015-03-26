<?php
ob_start();
session_start();
define("SITE_URL","http://betoparedes.com/");
include_once("paypal.php");
include ('conect.php');
$sub_item = $_POST['no_pass1'];
$a= explode("-",$sub_item);
$item_no = $a['0'];
$amount = $a['1'];
$name = $_POST['name'];
$phone = $_POST['phnno'];
$email = $_POST['email'];
$dateplace = $_POST['dateplace'];
$product = $item_no.' Pass $'.$amount;


//insert into database
$sql = "insert into `purchase_class`(`name`,`phone`,`email`,`dateplace`,`product`,`amount`,`status`) values('$name','$phone','$email','$dateplace','$product','0','')";
mysql_query($sql);
$paymentId = mysql_insert_id();



$class_paypal = new paypal();			
//$class_paypal->_SHIPPING_FLAG = '1';
$class_paypal->_ITEM_NAME = $item_no.' Pass $'.$amount;
$class_paypal->_AMOUNT = $amount;
$class_paypal->_CURRENCY_CODE = 'USD';
$class_paypal->_LANGUAGE = 'US';
$class_paypal->_ORDER_ID = $paymentId;
$class_paypal->_NOTIFY_URL = SITE_URL.'thankyou.php';
$class_paypal->_PAYMENT_RETURN_PAGE = SITE_URL.'thankyou.php';
$class_paypal->_PAYMENT_CANCEL_PAGE = SITE_URL.'class.php';
$class_paypal->paypal_gateway();

?>
