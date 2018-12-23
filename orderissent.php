<?php
session_start();
$id=$_SESSION['eid'];
include("config.php");
if($_REQUEST['log']=='out')
{
session_destroy();
header("location:index.php?home");
}
else if($id=="")
{
header("location:index.php?home");
}
?>

<html>
<div>
<div style="width:25%;float:right">
<br>
<img src="usepics/7.jpg">
</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<div><br/><center><h2><font face="Lucida Handwriting" size="+2" color="#00CCFF">ThankYou for Shopping With Us</font></h2></center>
</div>
<br><br><br>
<fieldset style="background:#CC99CC;width:50%">
<br><br>
<font color="#660033" size="+1" face="Comic Sans MS"><b>Your order is sent successfully!!! </b></font><br/><br/>
<font size="+1" face="Comic Sans MS" color="#660033" ><b>Your order no. is:</b><font color="#FF3366"><?php echo $_REQUEST['order'];?></font><br/><br/></font>
<font color="#660033" size="+1" face="Comic Sans MS"><b>Please Check your mail to get your ORDER RECIEPT.... </b></font><br/><br/>
<font color="#660033" size="+1" face="Comic Sans MS"><b>We will send your ORDER on your address and you can check the shipping status by dialing us. </b></font><br/><br/>

</fieldset>
</div>
</center>

</div>
</html>