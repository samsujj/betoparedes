<?php include('top.php');?>
<?php
function word_limiter( $text, $limit = 550, $chars = '0123456789' ) {
    $text=strip_tags($text);
    $text = str_replace('&nbsp;', ' ', $text); 
    if( strlen( $text ) > $limit ) {
        $words = str_word_count( $text, 2, $chars );
        $words = array_reverse( $words, TRUE );
        foreach( $words as $length => $word ) {
            if( $length + strlen( $word ) >= $limit ) {
                array_shift( $words );
            } else {
                break;
            }
        }
        $words = array_reverse( $words );
        $text = implode( " ", $words ) . '&hellip;';
    }
    return $text;
}
?>
<script src="js/jquery-1.4.4.js"></script>
<script src="js/json.js"></script>
<script src="js/jquery.blockUI.js"></script>
<script>
function blog_form()
{
    $('#error').html('');
    $.blockUI({ message: $('#blog_form'),
        css: { top:'50px',left:'450px', width:'700px', padding:'2px', border:'none',  cursor:'auto'}
     }); 
}
function sub_blog_form()
{
    var title=$('#title').val();
    var oEditor = FCKeditorAPI.GetInstance('body');
     var nbody=oEditor.GetXHTML(true);
        if(title=='')
    {
        $('#error').html('* Please Enter Blog Title...');
    }
    else if(nbody=='')
    {
        $('#error').html('* Please Enter Blog Body...');
    }
    else
    {
        $('#blog_form1').submit();
    }
}
function can_blog_form()
{
    $.unblockUI();
}
function blog_check(e,id)
{
    if($(e).attr('checked'))
    {
        val=1;
    }
    else
    {
        val=0;
    }
    window.location='action_blog1.php?id='+id+'&status='+val;
    
}
function del_blog(id)
{
    var ans=confirm("Are You Sure Parmanently Delete This Blog");
    if(ans==true)
    {
        window.location='del_blog.php?url=http://<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']?>&id='+id;
    }
    else
    {
        return false;
    }
}
function edi_blog(id)
{
  
    $('#sub_btn').val('UPDATE');
    var oEditor = FCKeditorAPI.GetInstance('body');
    $('#error').html('');
    $.post('aja.php',
    {'id':id},
    function(result)
    {
        a=jsonParse(result);
        for(n in a)
        {
            if(n=='title')
            {
$('#title').val(a[n]);
            }
            if(n=='body')
            {
$('#body').val(a[n]);
            }
        }
    });
    $('#blog_form1').attr('action','action_blog.php?id='+id);
    $.blockUI({ message: $('#blog_form'),
        css: { top:'50px',left:'450px', width:'700px', padding:'2px', border:'none',  cursor:'auto'}
     }); 
}
</script>


<div class="Baner_blog"></div>
<div class="clr"></div>

<?php
if(@$_SESSION['uname'])
{
?>
<div class="blogarea">
<div style="text-align: right;"><a onclick="blog_form()" style=" cursor:pointer">Create Blog</a></div>

<?php
$sql=mysql_query("SELECT * FROM blog_table ORDER BY date_time DESC");
while($row=mysql_fetch_array($sql))
{
$url="http://www.betoparedes.com/blog_details.php?id=".$row['blog_id'];
?>
<h5><a href="blog_details.php?id=<?php echo $row['blog_id']?>"><?php echo $row['blog_title']?></a></h5>

<p>
  <?php echo word_limiter($row['blog_body'])?><br />
<span>Posted on : </span>  <?php $date = new DateTime($row['date_time']);
echo $date->format("F j, Y, g:i a");?></b>
<br />
<span>Post By : </span>  Beto Paredes

<br />
<span><a href="blog_details.php?id=<?php echo $row['blog_id']?>">Read More</a></span>
<span style="float:right; margin-right:10px;"><a href="#" target="blank" title="Share With Twitter"><img border="0" alt="" src="images/sicon3b.png"></a>&nbsp;&nbsp;<a href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>&t=<?php echo $row['blog_title'];?>" title="Share With Facebook"><img border="0" alt="" src="images/sicon2b.png"></a></span><br /><br />

<span style="float:right; text-align: right"><a onclick="edi_blog(<?php echo $row['blog_id']?>)" style="cursor:pointer;">Edit</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a onclick="del_blog(<?php echo $row['blog_id']?>)" style="cursor:pointer;">Delete</a> <br/>
Show on Blog page<?php if($row['status']==1){ ?><input name="blog" checked="checked" id="blog" type="checkbox" onclick="blog_check(this,<?php  echo $row['blog_id']?>);" style="margin-left: 5px;"><?php } else {?><input name="blog"  id="blog" type="checkbox" onclick="blog_check(this,<?php  echo $row['blog_id']?>);" style="margin-left: 5px;"><?php } ?></span>
</p>
<?php
 }
?>
</div>
<?php
 }
?>
 <!--for non admin-->
 
  <div class="blogarea">
  
<?php
 if(!@$_SESSION['uname'])
 {
$sql1=mysql_query("SELECT * FROM blog_table WHERE status=1 ORDER BY date_time DESC");
while($row1=mysql_fetch_array($sql1))
{
$url="http://www.betoparedes.com/blog_details.php?id=".$row1['blog_id'];
?>
<h5><a href="blog_details.php?id=<?php echo $row['blog_id']?>"><?php echo $row1['blog_title']?></a></h5>

<p>
  <?php echo word_limiter($row1['blog_body'])?><br />
<span>Posted on : </span>  <?php $date = new DateTime($row1['date_time']);
echo $date->format("F j, Y, g:i a");?></b>
<br />
<span>Post By : </span>  Beto Paredes

<br />
<span><a href="blog_details.php?id=<?php echo $row1['blog_id']?>">Read More</a></span>
<span style="float:right; margin-right:10px;"><a href="#" target="blank" title="Share With Twitter"><img border="0" alt="" src="images/sicon3b.png"></a>&nbsp;&nbsp;<a href="http://www.facebook.com/sharer.php?u=<?php echo $url;?>&t=<?php echo $row1['blog_title'];?>" title="Share With Facebook"><img border="0" alt="" src="images/sicon2b.png"></a></span><br /><br />

</p>
<?php
} }
?>
</div>
 
<!-- ///////end for non admin -->




<div class="clr"></div>
<?php include('footer.php');?>
<div id="blog_form" style="display:none; background:#ccc; border:1px solid #666; font:normal 12px/18px Arial, Helvetica, sans-serif; color:#000; text-decoration:none;">
<form action="action_blog.php" id="blog_form1" method="post">
<h3 style="margin-top:10px; color:#09F;">POST YOUR BLOG</h3>
<div id="error" style="color:#FF0000; font-size:18px;"></div><br />
Title: <input type="text" name="title" class="loginbox" id="title" /><br /><br />
<div id="editor">

    <?php
    include_once ('FCKeditor/fckeditor.php');
    $oFCKeditor = new FCKeditor('body') ;
    $oFCKeditor->BasePath = 'FCKeditor/';
    $oFCKeditor->Width  = '98%' ;
    $oFCKeditor->Height = '250' ;
    $oFCKeditor->Create() ;
    
    ?>

<div>
<input type="button" id="sub_btn" value="SUBMIT" class="login_btn" onclick="sub_blog_form()" />&nbsp;&nbsp;&nbsp;<input type="button" value="CANCEL" class="login_btn" onclick="can_blog_form()" />
</form>
</div>
