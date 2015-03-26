<?php include ('conect.php');

$uri=$_REQUEST['url'];
$blog_id=$_REQUEST['id'];

$sql=mysql_query("DELETE FROM blog_table WHERE blog_id=".$blog_id);

header('Location: '.$uri);

?>
