<?php include ('conect.php');

$title=$_POST['title'];
$body=$_POST['body'];

if($_REQUEST['id'])
{
	$sql=mysql_query("UPDATE blog_table SET blog_title='".$title."',blog_body='".$body."' WHERE blog_id=".$_REQUEST['id']);
}
else
{
	$sql=mysql_query("INSERT INTO blog_table (blog_title,blog_body) VALUES ('".$title.	"','".$body."')");
}

header("Location: blog.php");

?>
