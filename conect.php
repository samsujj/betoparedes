<?php
@mysql_connect("localhost","developer","P@ss1234") or die ('Error connecting to mysql');
@mysql_select_db("betoblog")or die('Error connecting to database');
session_start();
?>