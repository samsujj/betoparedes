<?php include ('conect.php');

$sql=mysql_query("SELECT * FROM blog_table WHERE blog_id='".$_POST['id']."'");

while($row=mysql_fetch_array($sql))
{
	$data['id']=$row['blog_id'];
	$data['title']=$row['blog_title'];
	$data['body']=$row['blog_body'];
}
echo json_encode($data);
?>