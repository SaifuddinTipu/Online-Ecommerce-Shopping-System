<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="cz"><head>
<?php
error_reporting(1);
include("index1.php");
?>
<title>Unimas Estore</title>
<meta http-equiv="Content-language" content="cs">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content=" ">
<meta name="keywords" content=" ">
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" type="text/css" href="default.css" title="default">

</head>


<body>
<div id="WholePage">
<div id="Inner">
<div id="Container" style="border:groove;border-color:#00CCFF">
<div id="Head">
<div>
<span class="blue" style="float:right">WELCOME User 
<?php
$sel=mysql_query("select * from register where id='$id'");
$arr=mysql_fetch_array($sel);
echo $arr['title']."&nbsp;".$arr['fname'];
?>
</span><br/>
    </div>
<div id="Head_left">
<div id="Leaf_top"><img src="img/shop3.jpg" width="200" /></div>
<div id="Leaf_bottom"> <a class="registration"></a> <a class="LOGOUT" href="index.php?home">&nbsp;LOGOUT</a>
</div>
</div>
<div id="Head_right">
<div id="Logo">
<div id="Name"><span class="blue">U</span><span>NIMAS</span>&nbsp;<span class="blue">F</span><span>ashion</span>&nbsp;<span class="blue">S</span><span>hop</span> </div>
<div id="Informations">Latest trends in Fashion</div>
</div>
<div id="Top_menu"> <a class="orders" href="loginindex.php?con=3"><span>GALLERY</span></a>
<a class="contact" href="loginindex.php?con=1"><span>CONTACT</span></a>
<a class="help" href="loginindex.php?con=2"><span>ABOUT US</span></a>
<a class="home" href="?page=home"><span>HOME</span></a>
</div>
</div>
</div>
<div id="CentralPart">
<div id="LeftPart">
<div id="Menu">
<div id="Menu_header">
<div class="menu_header_left"> <span class="menu_text"><font face="Georgia, Times New Roman, Times, serif">Search</font></span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <!--<a class="menu_item" href="?page=home"><span>--><!-- Start of Page Search -->

		
		    <h5>&nbsp;</h5>
			<form method="post">
		    <input type="text" name="t1" value="search" onfocus="if(this.value=='search'){this.value='';}"onBlur="if(this.value==''){this.value='search';}"/>
            <input name="sear" type="submit" class="button" id="sub" value="Go" />
</form>
<?php
	if($_REQUEST['sear'])
	  {
	   $se=$_REQUEST['t1'];
	   if($se!=NULL)
	   {
	   echo "<script>location.href='loginindex.php?se=$se'</script>";
	   }
        }
		?>
		

		  <h5>&nbsp;</h5>
		  <!--</form>-->
		

		<!-- End of Page Search --></span></a><br>
</div>
<div class="menu_header_left"> <span class="menu_text">MEN</span>
</div>
<div class="menu_header_right"> </div>
</div>
<div id="Menu_content"> <a class="menu_item" href="loginindex.php?catg=1 & subcatg=Casual Shirts"><span>Casual Shirts</span></a><br>
<a class="menu_item" href="loginindex.php?catg=1 & subcatg=Jeans"><span>Jeans</span></a><br>
<a class="menu_item" href="loginindex.php?catg=1 & subcatg=T-Shirts"><span>T-shirts
</span></a><br>
<a class="menu_item" href="loginindex.php?catg=1 & subcatg=Footwear"><span>Footwear</span></a><br>
<a class="menu_item" href="loginindex.php?catg=1 & subcatg=Shorts"><span>Shorts</span></a><br>
<a class="menu_item" href="loginindex.php?catg=1 & subcatg=watches"><span>Watches
</span></a><br>

</div>

<div class="menu_header_left"> <span class="menu_text">WOMEN</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="loginindex.php?catg=2 & subcatg=dresses"><span>Dresses</span></a><br>
<a class="menu_item" href="loginindex.php?catg=2 & subcatg=Churidar Suits"><span>Churidar Suits</span></a><br>
<a class="menu_item" href="loginindex.php?catg=2 & subcatg=Kurtas"><span>Kurtas</span></a><br>
<a class="menu_item" href="loginindex.php?catg=2 & subcatg=Sandals"><span>Sandals</span></a><br>
<a class="menu_item" href="loginindex.php?catg=2 & subcatg=Office Wear"><span>Office Wear</span></a><br>
<a class="menu_item" href="loginindex.php?catg=2 & subcatg=Artificial Jewellery"><span>Artificial Jewellery</span></a><br>
</div>

<div class="menu_header_left"> <span class="menu_text">KIDS</span>
</div>
<div class="menu_header_right"> </div>
<div id="Menu_content"> <a class="menu_item" href="loginindex.php?catg=3 & subcatg=Baby Apparel"><span>Baby Apparel</span></a><br>
<a class="menu_item" href="loginindex.php?catg=3 & subcatg=Girls Apparel"><span>Girls Apparel</span></a><br>
<a class="menu_item" href="loginindex.php?catg=3 & subcatg=Boys Apparel"><span>Boys Apparel</span></a><br>
<a class="menu_item" href="loginindex.php?catg=3 & subcatg=Kids Toys"><span>Kids Toys</span></a><br>

</div>
</div>
<img src="usepics/4.jpg" width="228" height="183" /></div>

<div id="RightPart">
<?php
  if($_REQUEST['se'])
	    {
		include("search.php");
		}
if($_REQUEST['con']==1)
{
include("contact.php");
}
if($_REQUEST['con']==2)
{
include("about.php");
}
if($_REQUEST['con']==3)
{
include("gallery.php");
}

if($_REQUEST['con']==17)
{
	include("logout.php");
}
if($_REQUEST['con']==15)
{
	include("orderto.php");
}
if($_REQUEST['con']==16)
{
	include("orderissent.php");
}
	
if($_REQUEST['con']==13)
 {
	include("welcome.php");
	 }
if($_REQUEST['con']==14)
 {
	include("viewitem.php");
	 }

if(!($_REQUEST['catg'])and !($_REQUEST['con'])and !($_REQUEST['se']))
{
include("home.php");
}

if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Casual Shirts')
{
include("casualin.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Jeans')
{
include("jeansin.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='T-Shirts')
{
include("tshirtin.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Footwear')
{
include("shoein.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='Shorts')
{
include("shortsin.php");
}
}
if($_REQUEST['catg']==1)
{
if($_REQUEST['subcatg']=='watches')
{
include("watchin.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='dresses')
{
include("dressin.php");
}
}

if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Churidar Suits')
{
include("suitsin.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Sandals')
{
include("sandalsin.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Kurtas')
{
include("kurtasin.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Office Wear')
{
include("officein.php");
}
}
if($_REQUEST['catg']==2)
{
if($_REQUEST['subcatg']=='Artificial Jewellery')
{
include("jewelin.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Baby Apparel')
{
include("babyin.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Girls Apparel')
{
include("girlsin.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Boys Apparel')
{
include("boyin.php");
}
}
if($_REQUEST['catg']==3)
{
if($_REQUEST['subcatg']=='Kids Toys')
{
include("toyin.php");
}
}
?>

</div>
<div class="cleaner"></div>
</div>
<div id="Bottom">
<p class="down"><b>Copyright Group: BLACK SPIDER FIT Unimas</b></p>

</div>
</div>
</div>
</div>
</div>

</body></html>