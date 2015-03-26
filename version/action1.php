<?php include ('conect.php')?>
<?php
$uname=$_POST['uname'];
$pass=md5($_POST['pass']);
$uri=$_POST['uri'];
 // echo 1;
 //echo $uname  ;
//$sql="SELECT * FROM user_table WHERE user_name='".$uname."' AND user_password='".$pass.;     
$sql="SELECT * FROM user_table WHERE user_name='".$uname."'";  
$sql1=mysql_query($sql);
if(mysql_num_rows($sql1)==1 )
 { 
    $sql2="SELECT * FROM user_table WHERE user_password='".$pass."'";
     $sql3=mysql_query($sql2); 
if(mysql_num_rows($sql3)==1)
{
    //echo 1;
    $_SESSION['uname']=$uname;
} }
//echo $_SESSION['uname'];
header('Location: '.$uri);
?>