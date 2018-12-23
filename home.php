<head>
<script>
function abc()
{
var arr=new Array("usepics/neck.jpg","usepics/ban7.jpg","usepics/ban5.jpg","usepics/ban1.jpg","usepics/akkriti-banner.jpg");
var ind=eval(document.f1.h1.value);
document.img.src=arr[ind];
document.f1.h1.value=ind+1;
if(document.f1.h1.value==5)
{
document.f1.h1.value=0;
}
}
setInterval("abc()",3000);
</script>
</head>
<body>
<div id="RightPart">
  <div id="Page"><img src="usepics/akkriti-banner.jpg" alt="" width="669" height="210" name="img"/>
  <form name="f1">
  <input type="hidden" name="h1" value="0" />
  </form>
  <div><br/><center><h1><font face="Lucida Handwriting"  color="#00CCFF">Latest Fashion News For UNIMAS Budies</font></h1></center></br></br></div>
 <table border="0">
 <tr><td> 
<img src="usepics/news1.jpg" width="150" height="180"/>
</td>
<td colspan="2">
<font face="Lucida Handwriting" size="+1" color="#99CC33">
A modern Christian Culture in Dressing UP</font><br>
<font face="Comic Sans MS"><strong>A new broom swept through Christian Dior on Monday afternoon, May 4, a modernist gale and a witty architectural take on fashion, in the first show for the celebrated French label by its de facto new couturier, British-born Bill Gaytten.
Angular, rippling with Pop Culture colors and cut in the twisting metallic shapes of architectural great Frank Gehry, this was a brand new Dior couture, but with a collection that powerfully worked the house's legendary atelier, while keeping enough of the inspired mania of its sacked designer, John Galliano.</strong></font></td>
</tr>
<tr>
<td>
<br>
<img src="usepics/news2.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Dulhan ke poshak</font><br>
<font face="Comic Sans MS"><strong>Apr 18, 2017<br>
Gone are the gathered umbrella ghagras and cholis and in their place a new fusion look for wedding wear has emerged. ...</strong></font></td>

<td>
<img src="usepics/news3.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">The Tarun Tahiliani Bridal Couture Exposition </font><br>

<font face="Comic Sans MS"><strong>May 15, 2017<br>
The Tarun Tahiliani Bridal Couture Exposition is back with its third season of luxurious exposition, scheduled across July and August...</strong></font></td>
<td>
<img src="usepics/news4.jpg" /><br>
<font  color="#FF66CC" face="Lucida Handwriting">Neeru Kumar to open WLIFW Fall/Winter 2011 </font><br>

<font face="Comic Sans MS"><strong>May 30, 2017<br>
Saif Uddin has chosen to pay homage to the best of Indian fabric traditions. ...</strong></font></td>
</tr>
</table>
  </div>
  </div>
  </body>