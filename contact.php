<?php 
session_start();                                  
include('top.php');
 // $captcha_ses1= $_SESSION['kapcode'];
//  echo $captcha_ses1;

 
?>

<script src="js/jquery-1.4.4.js" type="text/javascript"></script>
<script>
function reload_img()
{
    var dt=new Date();
    $('#img_cap').attr('src','images/captchaimage.php?t='+dt.getSeconds())
}

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
<span>Call</span> 208.754.7402 or eMail below
</div>
</div>
<div class="clr"></div>

<div class="Contactbg" style="height: 350px;">
<div class="Contactbg_left" style="width: 500px;"><div class="contactarea" style="width: 300px;">
<div id="error" style="color:#FF0000; font-weight:bold; margin-bottom:5px; margin-top:5px;"></div>
<?php if(!empty($_SESSION['error']))
{?>
<div id="error" style="color:#FF0000; font-weight:bold; margin-bottom:5px; margin-top:5px;"><?php echo $_SESSION['error']; unset($_SESSION['error']);?></div>
<?php }?>
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
    <td align="left" valign="top">Captcha</td>
    <td align="left" valign="top"><img id="img_cap" src="images/captchaimage.php" style="vertical-align: middle;"  alt="" /><img src="images/refresh.png" style="cursor: pointer" onclick="reload_img();"  alt="" /><br>Enter the above code<input style="margin-top: 5px;" name="captcha2" id="captcha2" type="text" class="loginbox" /></td>
  </tr>

  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input onclick="frm_submit()" type="button" value="SUBMIT" class="searchbtn2" /></td>
  </tr>
</table></form></div></div>
<div class="Contactbg_right"><div class="address"></div></div>
<div class="clr"></div>
</div>
<div class="clr"></div>


<?php include('footer.php');?>
