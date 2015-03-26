<?php include ('conect.php')?>
<?php

$blog_id=$_POST['blog_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$body=$_POST['body'];

$sql="INSERT INTO `comment_table` (`blog_id`,`user_name`,`user_email`,`comment_body`)VALUES ('".$blog_id."','".$name."','".$email."','".$body."')";

mysql_query($sql) or die('yuguihg');

header("Location: blog.php");
?>