<?php include ('conect.php');

$blog_id=$_REQUEST['id'];

 $sql="DELETE FROM blog_table WHERE blog_id=".$blog_id;

mysql_query($sql);

header('Location: blog.php');

?>
