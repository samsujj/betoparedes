<?php include('top.php');?>

<script src="js/jquery-1.4.4.js" type="text/javascript"></script>
<script>
function frm_submit()
{
	name=$('#name').val();
	email=$('#email').val();
	query=$('#query1').val();
	var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	
	
	if(name=='')
	{
		$('#error').html('* Please Enter Your Name...');
	}
	else if(email=='')
	{
		$('#error').html('* Please Enter Your Email...');
	}
	else if(!emailReg.test(email))
	{
     		$("#error").html('*Enter a valid email address...');
	}
	else if(query=='')
	{
		$('#error').html('* Please Upload Your Query...');
	}
	else
	{
		$('#form').submit();
	}
}
</script>

<div class="Baner_contact">
<div class="contarea">
<span>Call</span> 770.634.7911 or eMail below
</div>
</div>
<div class="clr"></div>

<div class="Contactbg">
<div class="Contactbg_left"><div class="contactarea">
<div id="error" style="color:#FF0000; font-weight:bold; margin-bottom:5px; margin-top:5px;"></div>
<form action="mail_send.php" method="post" id="form">
<table width="100%" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td width="30%" align="left" valign="top">Full Name</td>
    <td align="left" valign="top"><input name="name" id="name" type="text" class="loginbox" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">E-Mail Address</td>
    <td align="left" valign="top"><input name="email" id="email" type="text" class="loginbox" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Questions or Comments</td>
    <td align="left" valign="top"><textarea name="body" id="query1" cols="" rows="" class="loginarea"></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input onclick="frm_submit()" type="button" value="SUBMIT" class="searchbtn2" /></td>
  </tr>
</table></form></div></div>
<div class="Contactbg_right"><div class="address"></div></div>
</div>
<div class="clr"></div>


<?php include('footer.php');?>
