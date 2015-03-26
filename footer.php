<!--.................................................................. START FOOTER ........................................................................-->
<script src="js/jquery-1.4.4.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script>
function login()
{
	$.blockUI({ message: $('#login_form_sam'),
		css: { top:'80px', padding:'20px', border:'none', '-moz-border-radius':'10px', cursor:'auto'}
 	}); 
}
function can_btn()
{
	$.unblockUI();
}
function sub_btn()
{
	$('#login_form_sam').submit();
}
function logout()
{
	window.location='logout.php?url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>';
}
</script>
<div class="FOOTER">
<div class="FOOTER_left">
<div class="socialarea">Social Network <a href="#"><img src="images/sicon1.png" alt="" hspace="5" border="0" align="absmiddle" /></a><a href="https://www.facebook.com/betocparedes" target="_blank"><img src="images/sicon2.png" alt="" border="0" align="absmiddle" /></a><a href="https://twitter.com/betoparedes"><img src="images/sicon3.png" alt="" hspace="5" border="0" align="absmiddle" /></a><a href="http://www.linkedin.com/in/betoparedes" target="_blank"><img src="images/sicon4.png" alt="" border="0" align="absmiddle" /></a><a href="#"><img src="images/sicon5.png" alt="" hspace="5" border="0" align="absmiddle" /></a></div>
<div class="flink"><a href="index.php" target="_self">Home</a> | <a href="team.php" target="_self">My Team</a> | <a href="bio.php" target="_self">Bio</a> | <a href="company.php" target="_self">Companies</a> | <a href="vision.php" target="_self">Vision</a> |  <a href="BPLLC-PricingSchedule2014.pdf" target="_blank">Pricing Schedule</a> <br />
© 2010 Beto Paredes, LLC. All rights reserved</div>
</div>
<div class="FOOTER_right">

<div style="margin: 0px 0px 2px 11px;">         
     <a href="http://influxiq.com" target="_blank"><img src="images/influxiq_logo.png" alt="" /></a>   
   </div>

   <div style="margin: 4px 0px 2px 11px;">
  <a href="http://spectrumiq.com/" target="_blank"><img src="images/spectrumiq_logo.png" alt="" /></a>
  </div>
</div>
</div>
<div class="clr"></div>
<!--.................................................................. END FOOTER ........................................................................-->

</div></div>
</body>
</html>
<div style="display:none;">
<form action="action1.php" method="post"  id="login_form_sam">
<input type="hidden" name="uri" value="<?php echo $_SERVER['REQUEST_URI'];?>" />
<div style="font:bold 20px/30px Arial, Helvetica, sans-serif;color:#034d6e;text-decoration:none;border-bottom:1px dashed #034d6e;margin:10px;">Please Login here</div>
<table width="100%" align="center" cellpadding="0" cellspacing="10">
  <tr>
    <td width="25%" align="left" valign="top">User Name :</td>
    <td align="left" valign="top"><input name="uname" type="text" class="loginbox" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Password :</td>
    <td align="left" valign="top"><input name="pass" type="password" class="loginbox" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input name="SUB" type="button" value="SUBMIT" class="login_btn" onclick="sub_btn()" /> <input name="SUB" type="button" value="CANCEL" class="login_btn" onclick="can_btn()" /></td>
  </tr>
</table>
</form>
</div>
<script type="text/javascript" language="javascript">
function OpenMail()
{
location.href = 'mailto:director@betoparedes.com';

}
</script>