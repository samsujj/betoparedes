<?php include ('conect.php');

$title=$_POST['title'];
$body=$_POST['body'];


if(@$_REQUEST['id'])
{
      $sql="UPDATE blog_table SET blog_title='".$title."',blog_body='".$body."' WHERE blog_id=".$_REQUEST['id'];
        mysql_query($sql);
}
else
{
 $sql="INSERT INTO blog_table (blog_title,blog_body,status) VALUES ('".$title."','".$body."',0)";
    mysql_query($sql);
}

header("Location: blog.php");



?>


