<?php include('top.php');?>
<style>
.error{font-size:12px; color:#FF0000;}
</style>
<script src="js/jquery-1.4.1.js"></script>
<script type="text/javascript">
function validate(){
   var flag=true;
   var em=0;
   $('.error').empty();

   if($('#name').val()=='') 

	{	

		$('.error').append('<div>* You must enter your name</div>');
		$('#name').focus();
		flag=false;
	}
	if($('#phnno').val()=='') 

	{	

		$('.error').append('<div>* You must enter the Phone Number</div>');
		$('#phnno').focus();
		flag=false;
	}
	 if($('#email').val()=='') 

	  {	

		$('.error').append('<div>* You must enter the Email Address</div>');
		
		$('#email').focus();

		flag=false;

		var em=1;

	  }	

	if(!em)	

	   {

		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

		var address = $('#email').val();

		if(reg.test(address) == false) {

		$('.error').append('<span>* You must enter a valid Email Address</span>');

		flag=false;

		}
	}
  return flag;
}	

</script>


<div class="Baner_class">
<div class="contarea">
<div class="contarea_left">
<ul>
<li>Entrepreneur Training Series</li>
</ul>
</div>
<div class="contarea_right">
<ul>
<li>Please see below for dates and Location</li>
</ul>
</div>
</div>
</div>
<div class="clr"></div>
<div class="Heading_inner">
<h3>Entrepreneur Training Series Tour Dates for 2014</h3><br />
 <table width="100%" align="center" cellpadding="0" cellspacing="5">
  <tr>
    <td width="55%" align="left" valign="top">
    <p><span style="font-size:16px; line-height:30px;"><b>  Las Vegas, NV, 
	Monday October 20th, 2014</b></span><br />
<b>1 pm to 5 pm, location to be announced.</b></p>
<p>Please use the payment option to the right to sign up for our class. You will receive a receipt for your purchase 
immediately and a welcome packet within 48 hours of your purchase.</p></td>
    <td rowspan="2" align="left" valign="top">
    <div style="width:350px; float:left; padding:5px; border:1px solid #CCCCCC;">
    <form action="payment.php" method="post" onsubmit="return validate()">
    <table width="100%" cellspacing="5" cellpadding="0">
    <tr>
    <td colspan="2" align="center" valign="top">
    <div class="error">
    </div>
    </td>
    </tr>
  <tr>
    <td align="left" valign="top"><b>Name :</b></td>
    <td align="left" valign="top"><input name="name" id="name" type="text"  class="passbox1" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><b>Phone :</b></td>
    <td align="left" valign="top"><input name="phnno" id="phnno" type="text"  class="passbox1" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><b>Email :</b></td>
    <td align="left" valign="top"><input name="email" id="email" type="text"  class="passbox1" /></td>
  </tr>
  <tr>
    <td align="left" valign="top"><b>Date & Place :</b></td>
    <td align="left" valign="top">
    <select name="dateplace" id="dateplace" class="passbox1">
    <option value=" Las Vegas, NV, Saturday May 12th, 2012"> Las Vegas, NV, Monday October 20th, 2014</option>
    <option value=" Las Vegas, NV, Friday June 1st, 2012"> Las Vegas, NV, Tuesday October 21st, 2014</option>
    </select></td>
  </tr>
  <tr>
    <td align="left" valign="top"><b>Number of Passes :</b></td>
    <td align="left" valign="top">
    <select name="no_pass1" id="no_pass1" class="passbox1">
    <option value="1-175.00">One Pass $175.00</option>
    <option value="2-280.00">Two Pass $280.00</option>
    <option value="3-360.00">Three Pass $360.00</option>
    </select>    </td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><input name="submit" type="submit" class="bynow_btn" value="" /></td>
    </tr>
  <tr>
    <td colspan="2" align="left" valign="top"><table align="center" cellpadding="0" cellspacing="1">
  <tr>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/mcard.jpg" alt="" border="0" /></a></td>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/visa.jpg" alt="" border="0" /></a></td>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/card3.jpg" alt="" border="0" /></a></td>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/card4.jpg" alt="" border="0" /></a></td>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/card5.jpg" alt="" border="0" /></a></td>
    <td align="left" valign="top"><a href="#" target="_blank"><img src="images/card6.jpg" alt="" border="0" /></a></td>
  </tr>
</table></td>
    </tr>
</table>
</form></div>
    </td>
  </tr>
  <tr>
    <td width="65%" align="left" valign="top">
    <p><span style="font-size:16px; line-height:30px;"><b>  Las Vegas, NV, 
	Monday October 20th, 2014</b></span><br />
<b>1 pm to 5 pm, location to be announced.</b></p>
<p>Please use the payment option to the right to sign up for our class. You will receive a receipt for your purchase 
immediately and a welcome packet within 48 hours of your purchase.</p></td>
    </tr>
</table>

<p><span style="font-size:16px; line-height:30px;"><b>About my training classes. </b></span><br /><br />

When you're an Entrepreneur <strong>Every Minute Counts.</strong> It is almost 
comical to look at how we deal with our daily tasks and activities, seeing our 
work environment for what it is. For most of us this consists of a lot of second 
guessing, waiting for things to happen, and an environment where 20% of the time 
we execute and 80% of the time we're thinking about it. I would like to share 
with you the methods and somewhat unconventional thinking that has ACTUALLY 
improved my daily performance. Come share with me and learn how to stop the 
strange things we do to "act" like we are getting things done and actually 
EXECUTE.<br><br>My classes are unconventional, colorful, and, in almost every 
case, unplanned and spontaneous. DON'T LET THAT DETER YOU. I bring materials to 
share with the group and follow a loose structure conducive to learning. In the 
time I have been training, teaching, and lecturing I have developed techniques 
that deliver good information in a creative and interactive environment. My 
students are the entrepreneurs of the world that are tired of their positive 
affirmations failing before they even sip their morning coffee. It's not just 
tough to be an entrepreneur, it's ridiculous. The rewards are exactly what they 
say they are. You just have to break the barriers to achievement, which can, and 
will, seem impossible 3 or 4 times a day. But only on days that end in y.<br>
<br>I will not teach you how to balance home and work. I will not teach you how 
to feel good about your appearance. I will not give you a set of 20 
pronouncements to say before lunch. What I will do is light a fire in your 
heart, one under your butt, and one in your mind in an attempt to shine a light 
into an all too difficult subject. How on earth do you go forward and tackle 
life on your own terms in your own way? I may not be the best at it, but we can 
chat about battle scars and trade stories for a few hours. You will at least say 
"yeah I've been there”, laugh a bit, and you may even learn something!<br><br>I 
most certainly have had my mentors, whether they be writers of books, those I 
have worked for, or partners and colleagues. But when it comes right down to it, 
no affirmation, words of advice, or 12 step plan really prepares you for the 
real big challenge. How to advance the keyboard and actually do something? How 
to pick up the phone, call someone you want to do business with, and actually 
mean everything you say? And as ridiculous as it sounds, how to actually engage 
your work instead of staring at your computer screen imagining how good it would 
be if you actually did something.<br><br>In the time I have been working as an 
executive, entrepreneur, and business owner I have developed habits and routines 
that push me forward in the things I am trying to accomplish. What I would like 
to offer is a chance to see things from a new angle. As positive as I try to be, 
one thing that I know and know well: you’re going to get angry, depressed, and 
overall anxious as a school boy on his fist date at least 100 times before you 
do anything natural that actually works. You have to go to the edge of reason, 
take risks that seem outrageous to others, and in the end come face to face with 
the one and only enemy you have to a successful future: Yourself at 6 am staring 
at your warm bed and the day ahead. What direction are you going to go today? 
Even if you get up you could very well be asleep till well into the afternoon. 
Come let me share with you what I do to WAKE UP and enter the daily challenge. 
If anything we can all laugh a bit at human nature and our innate ability to 
fool ourselves into doing the exact opposite.<br /><br />
	
<b>What are you working on?</b>  We would love to hear from you and possibly collaborate with your team.  There are 
always new frontiers to explore. <a href="contact.php" target="_self">Contact us</a>.  Let's chat.</p>


</div>
<div class="clr"></div>

<?php include('footer.php');?>
