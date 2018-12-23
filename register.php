<?php
include("config.php");
$title=$_REQUEST['sel1'];
$fname=$_REQUEST['t1'];
$lname=$_REQUEST['t2'];
$nric=$_REQUEST['n1'];
$gen=$_REQUEST['r1'];
$id="$fname[0]$lname$nric";
$pass=$_REQUEST['p1'];
$phone=$_REQUEST['t5'];
$add=$_REQUEST['t6'];
$city=$_REQUEST['t7'];
$coun=$_REQUEST['t8'];
$dob=$_REQUEST['t9'];
if($_REQUEST['sub'])
{
$sel=mysql_query("select id from register where id='$id' ");
$arr=mysql_fetch_array($sel);

if($arr['id']!=$id)
 {
   if(mysql_query("insert into register values('$title','$fname','$lname','$gen','$id','$pass','$phone','$add','$city','$coun','$dob')"))
	{
	      
	   echo "<script>location.href='index.php?con=13 & wel=$id'</script>";
	}
}
else 
{
echo "user already exists";
}

}
?>
<html>
<head>
<script>
function fnam()
{
var fnam=/^[a-zA-Z][a-zA-Z]+{1,15}$/;
if(document.f1.t1.value.search(fnam)==-1)
  {
	 alert("enter correct  first name");
	 document.f1.t1.focus();
	 fname=document.getelEmentById('fnam').value;
	 return false;
  }
} 
	 
function lnam()
{
  var lnam=/^[a-zA-Z][a-zA-Z]+{1,15}$/;
   if(document.f1.t2.value.search(lnam)==-1)
    {
	 alert("enter correct last name");
	 document.f1.t2.focus();
	 lname=document.getelEmentById('lnam').value;
	 return false;
	}
}
function nric()
{
 var nric=/^[a-zA-Z0-9]{4,12}$/;
 if(document.f1.n1.value.search(nric)==-1)
 {
	alert("enter correct NRIC/PASSPORT Number");
	document.f1.n1.focus();
	lname=document.getelEmentById('nric').value;
	return false;
 }
}

function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
 
 if(document.f1.t3.value.search(email)==-1)
 {
	alert("enter correct email");
	document.f1.t3.focus();
	
	return false;
 }
}

function pass()
{
var pass=/^[a-zA-Z0-9-_]{6,16}$/;
if(document.f1.p1.value.search(pass)==-1)
  {
	alert("enter at least 6 character");
	document.f1.p1.focus();
	return false;
  }
}

function phone()
{
var phn=/^[0-9]{9,14}$/;
 if(document.f1.t5.value.search(phn)==-1)
  {
	alert("enter correct phone no");
	document.f1.t5.focus();
	return false;
  }
}
	
function add()
{
var add=/^[a-zA-Z0-9 ][a-zA-Z0-9 ]+{1,150}$/;
 if(document.f1.t6.value.search(add)==-1)
  {
	alert("enter correct address");
	document.f1.t6.focus();
	return false;
	}
}
	 
function city()
{
var city=/^[a-zA-Z][a-zA-Z]+{1,30}$/;
if(document.f1.t7.value.search(city)==-1)
  {
	alert("enter correct city");
	document.f1.t7.focus();
	return false;
}	
}

function coun()
{
var coun=/^[a-zA-Z]{5,30}$/;
if(document.f1.t8.value.search(city)==-1)
  {
	alert("enter correct country");
	document.f1.t8.focus();
	return false;
  }
}
	
function vali()
{
  var nam=/^[a-zA-Z][a-zA-Z]+{1,15}$/;
  var nric=/^[0-9]{0,12}$/;
  var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
  var pass=/^[a-zA-Z0-9-_]{6,16}$/;
  var phn=/^[0-9]{9,14}$/;
  var add=/^[a-zA-Z0-9 ][a-zA-Z0-9 ]+{1,150}$/;
  var city=/^[a-zA-Z][a-zA-Z]+{1,15}$/;
  var coun=/^[a-zA-Z]{5,30}$/;
	  
if(document.f1.t1.value.search(nam)==-1)
{
	alert("enter correct  first name");
	document.f1.t1.focus();
	return false;
}

 else if(document.f1.t2.value.search(nam)==-1)
 {
	alert("enter correct last name");
	document.f1.t2.focus();
	return false;
}
else if(document.f1.n1.value.search(nric)==-1)
{
	alert("enter correct NRIC?PASSPORT Number");
	document.f1.n1.focus();
	return false;
}
 
else if(document.f1.t3.value.search(email)==-1)
{
	alert("enter correct email name");
	document.f1.t3.focus();
	return false;
}
	 
	
	
else if(document.f1.p1.value.search(pass)==-1)
{
	alert("enter correct pass");
	document.f1.p1.focus();
	return false;
}
	 
	
else if(document.f1.t5.value.search(phn)==-1)
{
	alert("enter correct phone no");
	document.f1.t5.focus();
	return false;
}
	 
	
else if(document.f1.t6.value.search(add)==-1)
{
	alert("enter correct address");
	document.f1.t6.focus();
	return false;
}
	
	 
	 
	 
else if(document.f1.t7.value.search(city)==-1)
 {
	alert("enter correct city");
	document.f1.t7.focus();
	return false;
}
	 
else if(document.f1.t8.value.search(city)==-1)
{
	alert("enter correct country");
	document.f1.t8.focus();
	return false;
}
 
else 
{
	return true;
}
}

</script> 
<style>
h1.child {
	text-align: center;
	font-family: "Times New Roman";
	font-size: 20px;
	line-height: 50%;
}
h2.child {
	text-align: center;
	font-family: "Times New Roman";
	font-size: 18px;
	line-height: 50%;
}
span.heading {
	font-style: italic;
}
p.child {
	text-align: center;
	font-family: "Times New Roman";
	font-size: 16px;
	line-height: 50%;
}
div.childone {
	text-align: left;
    border-style: dashed;
    border-color: grey;
	border-width: 50%;
	margin-top: 0px;
	margin-bottom: 10px;
	margin-left: 150px;
	margin-right: 150px;
	padding-top: 50px;
    padding-right: 0px;
    padding-bottom: 50px;
    padding-left: 0px;
	
}
div.font {
	font-family: "TT1C5t00";
	font-style: normal;
	font-size: 20px;
}
span.first{
	display: inline-block;
	width: 200px;
}
span.second{
	display:inline-block; 
	width: 210px;
}
span.third{
	display:inline-block; 
	width: 200px;
}
span.fourth{
	display:inline-block; 
	width: 200px;
}
span.fifth{
	display:inline-block; 
	width: 400px;
}

div.childtwo {
	text-align: "left";
	font-family:"verdana";
	font-size: 18px;
    border-style: solid;
    border-color: black;
	border-width: 50%;
	margin-left: 40px;
	margin-right: 40px;
	padding-left: 20px;
	padding-right: 20px;
	
}
span.list {
	text-align: "left";
	font-family:"verdana";
	font-size: 22px;
}

#container{
 width:550px;
 background-color:rgba(250,250,252,.9);
 margin:auto;
 margin-top:10px;
 margin-bottom:10px;
 box-shadow:0 0 3px #999;
 }
#container_body{
 padding:20px;
 }
.form_title{
 font-size:35px;
 color:#141823;
 text-align:center;
 padding:10px;
 font-weight:normal;
 }
</style>
</head>
<body>
<div>
<h1 class="child "></br></br>BORANG PENYERTAAN</h1></br>
<h2 class="child">PERTANDINGAN <span class="heading">KARAOKE KAJANG IDOL</span></h2></br>
<h2 class="child"><span class="heading">FIESTA ANAK MUDA 2017</span></h2></br>
<p class="child"><span class="heading">anjuran</span></p></br>
<h2 class="child"><span class="heading">Majlis Perbandaran Kajang</span></h2>
</div>
</br></br>
<div class="childone   font  ">
<b><span class="first">&emsp;TARIKH </span>: 8HB OKTOBER 2016 (SABTU) (SARINGAN)</b>
</br>
<b><span class="second"> </span>& 9HB OKTOBER 2016 (AHAD) (AKHIR)</b>
</br>
</br>
<b><span class="third">&emsp;MASA</span>: 12.00 TENGAHARI – 6.00 PETANG</b>
</br>
</br>
<b><span class="fourth">&emsp;TEMPAT </span>: DATARAN KAJANG (STADIUM KAJANG )</b>
</br>
</br>
<b>&emsp;MAKLUMAT LANJUT SILA HUBUNGI: 0173898020( KILOY )</b>
</br>
<b><span class="fifth"> </span>0166093054 ( HAIZAN )</b>
</div>
</br>
</br>
<div class="childtwo">
<span class="list">
<b>&emsp;SYARAT-SYARAT PERTANDINGAN</b>
</span>
</br>
</br>
<ul>
 <li>&emsp;TERBUKA KEPADA <b>50 PESERTA TERAWAL</b> DAN <b>WARGANEGARA MALAYSIA</b> SAHAJA.</li></br>
 <li>&emsp;YURAN PENYERTAAN ADALAH SEBANYAK <b>RM10</b> SAHAJA. WANG PENYERTAAN YANG TELAH</br>
	  &emsp;DIBAYAR TIDAK AKAN DIKEMBALIKAN JIKA TERDAPAT SAMAADA PENARIKAN DIRI DARI</br>
	  &emsp;PERTANDINGAN DAN PERKARA-PERKARA BERBANGKIT YANG LAIN.</li></br>
 <li>&emsp;PEMILIHAN LAGU ADALAH BEBAS.</li></br>
 <li>&emsp;TIDAK PERNAH MENJADI ARTIS RAKAMAN.</li></br>
 <li>&emsp;SEBARANG KEMALANGAN ATAU KEHILANGAN YANG BERLAKU SEBELUM, SEMASA ATAU</br>
	  &emsp;SESUDAH ACARA BERLANGSUNG ADALAH MENJADI TANGGUNGJAWAB SENDIRI.</li></br>
 <li>&emsp;PESERTA DIKEHENDAKI <b>MEMBAWA SENDIRI CD MINUS ONE.</b></li></br>
 <li><b>&emsp;TERTAKLUK KEPADA SYARAT DAN PERATURAN PENGANJUR.</b></li></br>
 <li>&emsp;KEPUTUSAN PANEL JURI ADALAH <b>MUKTAMAD.</b> SEBARANG BENTUK BANTAHAN TIDAK AKAN
      &emsp;DILAYAN.</li>
</ul>
</div></br>
</br>

<div><br/><center><h2><font face="Lucida Handwriting" size="+1" color="#00CCFF">Register Yourself</font></h2></center></div>
<div>
<div style="width:25%;float:right">
<br><br><br><br><br>
<img src="usepics/7.jpg">
</div>
<br><br>
<center><div style="width:70%;float:right" align="center">
<fieldset style="background:#CC99CC;width:50%">
<br><br>
<form method="post" name="f1" onSubmit="return vali()">
<table width="366" border="0" align="center">

  <tr>
    <td><div align="center"><strong><font size="+1" face="Comic Sans MS">Title:</font></strong></div></td>
    <td><label>
      <select name="sel1" id="sel1">
        <option value="Mr.">Mr.</option>
        <option value="Ms.">Ms.</option>
        <option value="Mrs.">Mrs.</option>
      </select>
    </label></td>
  </tr>
  <tr>
    <td width="164"><div align="center"><font size="+1" face="Comic Sans MS"><b> First&nbsp;Name:</b></font></div></td>
    <td width="192">
      
        <input name="t1" type="text" id="t1" onChange="return fnam()">    </td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>Last name:</strong></font></div></td>
    <td><input name="t2" type="text" id="t2" onChange="return lnam()" ></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>NRIC/PASSPORT:</strong></font></div></td>
    <td><input name="n1" type="text" id="n1" onChange="return nric()" ></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><b>&nbsp;Gender:</b> </font></div></td>
    <td><input name="r1" type="radio" value="male">
      <strong>Male</strong>
        <input name="r1" type="radio" value="female">
        <strong>Female</strong></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><b>&nbsp;Enter Email : </b></font></div></td>
    <td><input name="t3" type="text" id="t3" onChange="return email()"></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><b>&nbsp;Choose a  Password:</b> </font></div></td>
    <td><input name="p1" type="text" id="p1" onChange="return pass()"></td>
  </tr>
  <tr> <td><div align="center"><font size="+1" face="Comic Sans MS"><b>Phone no: </b></font></div></td>
    <td><input name="t5" type="text" id="t5" onChange="return phone()"></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>Address:</strong></font></div></td>
    <td><label>
      <textarea name="t6" id="t6" value="return add()"></textarea>
    </label></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>City:</strong></font></div></td>
    <td><input name="t7" type="text" id="t7" onChange="return city()"></td>
  </tr>
  <tr>
    <td><div align="center"><font size="+1" face="Comic Sans MS"><strong>Country:</strong></font></div></td>
    <td><input name="t8" type="text" id="t8" onChange="return coun()"></td>
  </tr>
  <tr>
    <td><div align="center"><strong><font size="+1" face="Comic Sans MS">Date of Birth: </font></strong></div></td>
    <td><label>
      <input name="t9" type="text" id="t9">
    </label></td>
  </tr>
  <tr>
    <td colspan="2"><label><br>
    <center>
      <input name="sub" type="submit" id="sub" value="Create my Account">
    </center>
    </label></td>
    </tr>
 
</table>
 </form>
</fieldset>
</div>
</center>

</div>

</body>
</html>