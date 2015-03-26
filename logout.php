<?php include ('conect.php');
session_destroy();

$uri=$_REQUEST['url'];

header('Location: '.$uri);

?>
