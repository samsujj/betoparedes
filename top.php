<?php include ('conect.php');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BETOPAREDES.COM</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>
<script src="js/facebox.js" type="text/javascript"></script>
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script>

    function p_comm()
    {
        //alert(1);
         //$.facebox('dsf dsf ds fdsf ds fds fdsfds f'); 
         $.facebox($('#info').html()); 
    }
$(function()
	{
		var location= String(window.location);
		//alert(location);
		location= location.split("/");
		location= (location[location.length-1]);
		//alert(location);
        if(location=='home.php') $("#home").attr('class','active');
        if(location=='team.php') $("#team").attr('class','active');
        if(location=='bio.php') $("#bio").attr('class','active');
        if(location=='projects.php') $("#projects").attr('class','active');
        if(location=='agency.php') $("#agency").attr('class','active');
        if(location=='vision.php') $("#vision").attr('class','active');
        if(location=='class.php') $("#class").attr('class','active');
        if(location=='contact.php') $("#contact").attr('class','active');
        if(location=='publishing.php') $("#publishing").attr('class','active');
        if(location=='video.php') $("#video").attr('class','active');


		if(location=='index.php' || location=='') $("#home").attr('class','active');
	}
)
</script>
</head>

<body>
<div id="WRAPER"><div class="CON">

<!--........................................................... START HEADER ..........................................................................-->
<div class="HEADER">

<div class="Header_top"><div class="Header_lefttop"><img src="images/icon.jpg" alt="" border="0" align="absmiddle" style="padding-right:5px;" /> 208.754.7402 <img src="images/icon1.jpg" alt="" border="0" align="absmiddle" style="padding:0 5px 0 10px;" /><a href="mailto:team@betoparedes.com">team@betoparedes.com</a></div>
<div class="Header_righttop"><form><table align="right" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top">Search &nbsp; </td>
    <td align="left" valign="top"><input name="" type="text" class="searchbox" /></td>
    <td align="left" valign="top"> &nbsp; <input name="" type="" value="GO" class="searchbtn" /></td>
  </tr>
</table>
</form></div>
</div>

<div class="MENUBG"><div class="Nav">
<ul>
<li><a href="index.php" id="home" target="_self">Home</a></li>
<li><a href="team.php" id="team" target="_self">Team</a></li>
<li><a href="bio.php" id="bio" target="_self">Bio</a></li>
<li><a href="projects.php" id="projects" target="_self">Projects</a>
<li><a href="agency.php" id="agency" target="_self"> Agency &nbsp;</a></li>
<!--<li><a href="company.php" id="company" target="_self">Companies</a>-->
<li><a href="vision.php" id="vision" target="_self">Vision</a></li>
<li><a href="class.php" id="class" target="_self">Classes</a></li>
<li><a href="contact.php" id="contact" target="_self">Contact</a></li>
<li><a id="publishing" href="publishing.php" target="_self">Publishing</a></li>
<li><a href="video.php" id="video" target="_self"> Videos &nbsp;</a></li>

<li> &nbsp;</li>
</ul>
</div></div>

</div>
<div class="clr"></div>
<!--........................................................... END HEADER ..........................................................................-->