<?php include ('conect.php');

      $sql="UPDATE blog_table SET status=".$_REQUEST['status']." WHERE blog_id=".$_REQUEST['id'];
        mysql_query($sql);

header("Location: blog.php");



?>
