<?php include('top.php');?>
<?php
$sql=mysql_query("SELECT * FROM blog_table WHERE blog_id=".$_REQUEST['id']);

?>

<div class="Baner_blog"></div>
<div class="clr"></div>

<div class="blogarea">
<?php
while($row=mysql_fetch_array($sql))
{
?>
<p><h5><?php echo $row['blog_title']?></h5>
<b>by Beto Paredes on <?php $date = new DateTime($row['date_time']);
echo $date->format("F j, Y, g:i a");?></b><br /><br />
<?php echo $row['blog_body']?><br /><br /><span><a href="blog.php">Back To Blog Page</a></span><br />
</p>
<?php
}
?>
</div>
<div class="clr"></div>
<!--................................................... END MIDDLE PART .................................................................................-->

<?php include ('footer.php')?>
