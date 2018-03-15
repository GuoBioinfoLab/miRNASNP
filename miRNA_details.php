<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="main2.css" rel="stylesheet" type="text/css" />
<title>miRNASNP:Detail information</title>


<script type="text/javascript">
function inini(content)
{var a="<img  src='";
 var c="'><input type='button' value='close' onclick='loadBox.hide()'/>";
 var d=a.concat(content);
 var e=d.concat(c);
loadBox.init();
loadBox.boxContent=e;
}


</script>
<script type="text/javascript">
 window.onload=window.onresize=function(){
 if(document.getElementById("left").clientHeight<document.getElementById("content").clientHeight){
 document.getElementById("left").style.height=document.getElementById("content").offsetHeight+"px";fsetHeight+"px";
 }
 else{
 document.getElementById("content").style.height=document.getElementById("left").offsetHeight+"px";fsetHeight+"px";
 }
 }


//<![CDATA[
//弹出层 by ChenLiang v1.0
function LightBox(boxWidth,boxHeight,boxContent)
{
this.boxWidth=boxWidth;
this.boxHeight=boxHeight;
this.boxContent=boxContent;
var bgLayer,boxLayer;
var documentHtml=document.documentElement;
var documentHtml1=document.body;
this.createBgLayer=function()
{
bgLayer = document.createElement("div");
with (bgLayer)
{
className="bgLayer";
style.width=documentHtml.scrollWidth+"px";

style.height=documentHtml.scrollHeight+"px";

style.display="none";
}
document.body.insertBefore(bgLayer,document.body.firstChild);
};
this.createBox=function(){
boxLayer = document.createElement("div");
with (boxLayer)
{
className = "boxLayer";
style.width=this.boxWidth + "px";
style.height = this.boxHeight +"px";
style.display="none";
};
document.body.insertBefore(boxLayer,document.body.firstChild);
};
this.init= function()
{
this.createBgLayer();					
this.createBox();
}
// if IE 6.0
function hideShowSelect(obj)	
{	
if (	window.navigator.userAgent.indexOf("MSIE 6.0") > 0)
{	
var selectDom = document.getElementsByTagName("select");
for 	(var i = 0; i < selectDom.length ; i++)
{	
if (obj)
sele	ctDom[i].style.display="none";
else	
selectDom[i].style.display="";
}
}
};
this.show = function()
{
hideShowSelect(true);
boxLayer.innerHTML=this.boxContent;
bgLayer.style.display = "block";
boxLayer.style.display = "block";
boxLayer.style.left = documentHtml.offsetWidth /2 - boxLayer.offsetWidth/2 +"px";
boxLayer.style.top = documentHtml.scrollTop + documentHtml.offsetHeight/2 - this.boxHeight/2 -30 + "px";
}
this.hide = function()
{
hideShowSelect(false);
bgLayer.style.display = "none";
boxLayer.style.display = "none";
}
}
//]]>
</script>
<script type="text/javascript">
//调用方法
var loadBox= new LightBox(500,500);

</script> 
<style type="text/css">


.bgLayer{ background:#000; opacity:0.5; filter:alpha(opacity=50);z-index:10001;position:absolute;left:0;top:0;}
.boxLayer{ background:#fff; border:4px solid #ccc; overflow:hidden; zoom:1; z-index:10002; position:absolute;padding:8px;}
.boxLayer p{padding:5px 0;text-align:center;}
.alldenglu{
    width:260px;}
.denglu {
font-size: 14px;
margin-bottom:6px;
color: #999999;
}
</style>
<style type="text/css"> 
<!-- 
.tabletitle{font-family:Arial, Helvetica, sans-serif;
       font-size:20px;
       font-weight:bold;
	   color:#3E1400;
	   background-color:#D9D9D9;
	   
	   }
.menu1 { 
     font-family: "宋体"; 
     font-size: 14px; 
     font-weight: bold; 
     color: #FFFFFF; 
     text-decoration: none; 
     background-color: #990000; 
     cursor:hand; 
} 
.menu2 { 
     font-family: "宋体"; 
     font-size: 14px; 
     font-weight: bold; 
     color: #990000; 
     text-decoration: none; 
     background-color: #FFFFFF; 
     cursor:hand; 

	 
}
.left1{font-family:Arial, Helvetica, sans-serif;
       font-size:15px;
       font-weight:bold;
	   color:#3E1400;
	   background-color:#D9D9D9;
	 
	  }
.left2{font-family:Arial, Helvetica, sans-serif;
       font-size:15px;
       font-weight:bold;
	   color:#3E1400;
	   background-color:#E8E8E8;
	   
	   }	  
.right1{font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color:#000000;
		background-color:#FFE3D9;
		
		
	   }
.right2{font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color:#000000;
		background-color:#F6F6F6;
		
		}   	
.sidebar1 { float:left; padding:0; margin:0; text-align:left; }
.sidebar1 ul { list-style:none; padding:0; margin:0; text-align:center }
.sidebar1 li { float:left; height:24px; margin:0; padding:0 3px; background:#fff; }
.sidebar1 a { color:#000;font-size:12px;}
.sidebar1 a:hover { color:#f60; }
.sidebar1 .active a { color:#f00; font-size:24px; font-family:Arial, Helvetica, sans-serif}
.sidebar1 .unactive a { color:#000033; font-size:24px; font-family:Arial, Helvetica, sans-serif}
.endContent { margin-top:6px; height:230px; font-size:12px; line-height:180%;}
.endContent a { float:left; height:24px; }
--> 
</style>
<script type="text/javascript">
  var D=new Function('obj','return document.getElementById(obj)');
  function showDiv(sobj,num,total)
  { var tri="trianglefold"+num;
    var triu="triangleunfold"+num;
    D(tri).style.display="none";
	D(triu).style.display="block";
    for(var id = 1;id<=total;id++)
	{  try{ var ss = sobj + id;
             var nss = sobj + "nav" + id;
             var tri="trianglefold"+id;
             var triu="triangleunfold"+id;
			 if(id==num)
			 { D(ss).style.display="block";
			   D(nss).className="active";
			 }
			 else
			 { D(ss).style.display="none";
               D(nss).className="unactive";
			   D(tri).style.display="block";
	           D(triu).style.display="none";
			 }
          }
	  catch(e)
	     {
		 }
   }
  }
  function changefold(pp)
  {var id1="mirnafold";
   var id2="mirnaunfold";
   if(pp==1)
     {D(id1).style.display="none";
	  D(id2).style.display="block";
	 }
	 else
	 {D(id1).style.display="block";
	  D(id2).style.display="none";
	 }
   } 
   function changefold2(pp)
  {var id1="mirnafold2";
   var id2="mirnaunfold2";
   if(pp==1)
     {D(id1).style.display="none";
	  D(id2).style.display="block";
	 }
	 else
	 {D(id1).style.display="block";
	  D(id2).style.display="none";
	 }
   } 
  var sobj1;
  var num1;
  var total1;
  function hidDivact(s,nMin)
  {  var obj=document.getElementById(s); 
     var h = parseInt(obj.offsetHeight); 
     if (h > nMin){ 
      obj.style.height = (h - 20)+"px"; 
        clearTimeout(act); 
      act = setTimeout("hidDivact('"+s+"',"+nMin+")", 10); 
     	counttime++;
      } 
	  else
	  { try{var ss=sobj1+num1;
        var nss=sobj1+"nav"+num1;
		var tri="trianglefold"+num1;
		var triu="triangleunfold"+num1;
		D(ss).style.display="none";
		D(nss).className="unactive";
		D(tri).style.display="block";
	    D(triu).style.display="none";
	       }
	   catch(e)
	      {
	      }
	  
	  }
   }	   
  function hidDiv(sobj,num,total)
  {sobj1=sobj;
   num1=num;
   total1=total;
   hidDivact('snpcontent',0);
  
  }	   
  
  
     
</script> 
<script language="JavaScript"> 
function tabit1(id,cid) { 
tab1.className="menu2"; 
id.className="menu1"; 
ctab1.style.display="none"; 
cid.style.display=""; 
}
function tabit2(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
cid.style.display=""; 
}
function tabit3(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
cid.style.display=""; 
}
function tabit4(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
cid.style.display=""; 
}
function tabit5(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
cid.style.display=""; 
} 
function tabit6(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
cid.style.display=""; 
} 
function tabit7(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
cid.style.display="";  
} 
function tabit8(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab8.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
cid.style.display="";  
} 
function tabit9(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
cid.style.display=""; 
} 
function tabit10(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
cid.style.display=""; 
} 
function tabit11(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
tab11.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
ctab11.style.display="none";
cid.style.display=""; 
} 
function tabit12(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
tab11.className="menu2";
tab12.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
ctab11.style.display="none";
ctab12.style.display="none";
cid.style.display=""; 
} 
function tabit13(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
tab11.className="menu2";
tab12.className="menu2";
tab13.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
ctab11.style.display="none";
ctab12.style.display="none";
ctab13.style.display="none";
cid.style.display=""; 
} 
function tabit14(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
tab11.className="menu2";
tab12.className="menu2";
tab13.className="menu2";
tab14.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
ctab11.style.display="none";
ctab12.style.display="none";
ctab13.style.display="none";
ctab14.style.display="none";
cid.style.display=""; 
} 
function tabit15(id,cid) { 
tab1.className="menu2"; 
tab2.className="menu2"; 
tab3.className="menu2";
tab4.className="menu2";
tab5.className="menu2";
tab6.className="menu2";
tab7.className="menu2";
tab8.className="menu2";
tab9.className="menu2";
tab10.className="menu2";
tab11.className="menu2";
tab12.className="menu2";
tab13.className="menu2";
tab14.className="menu2";
tab15.className="menu2";
id.className="menu1"; 
ctab1.style.display="none"; 
ctab2.style.display="none";
ctab3.style.display="none";
ctab4.style.display="none";
ctab5.style.display="none";
ctab6.style.display="none";
ctab7.style.display="none";
ctab8.style.display="none";
ctab9.style.display="none";
ctab10.style.display="none";
ctab11.style.display="none";
ctab12.style.display="none";
ctab13.style.display="none";
ctab14.style.display="none";
ctab15.style.display="none";
cid.style.display=""; 
} 
var act; 
function over1(s,nMax){ 
  
  var obj=document.getElementById(s); 
  var h = parseInt(obj.offsetHeight); 
  
  var k1=document.getElementById('pre').scrollHeight;
  nMax=0+k1;
  var k2=document.getElementById('mat').scrollHeight;
  nMax=nMax+k2+120;
  var k3=document.getElementById('tar').scrollHeight;
  nMax=nMax+k3+100;
  
  if (h < nMax){ 
    obj.style.height = (h + 20)+"px"; 
    clearTimeout(act); 
    act = setTimeout("over('"+s+"',"+nMax+")", 10); 
  } 
} 
function over(s,nMax){ 
  
  var obj=document.getElementById(s); 
  var h = parseInt(obj.offsetHeight); 
 
  if (h < nMax){ 
    obj.style.height = (h + 20)+"px"; 
    clearTimeout(act); 
    act = setTimeout("over('"+s+"',"+nMax+")", 10); 
  } 
} 
function out(s,nMin)
{ 
  var obj=document.getElementById(s); 
  var h = parseInt(obj.offsetHeight); 
  if (h > nMin)
   { 
    obj.style.height = (h - 20)+"px"; 
    clearTimeout(act); 
    act = setTimeout("out('"+s+"',"+nMin+")", 10); 
	} 
} 
</script>  
<?


include "connectinclude.php";
$ID=$_GET["id"];
$sqlcontrol4="select * from table4_miRNA_SNP where premir='".$ID."'";
$result4 = mysql_query($sqlcontrol4);
$i=1;
 while($row4 = mysql_fetch_array($result4))
 {$on_premir[$i]=$row4["on_premir"];
 
  $snp_pos[$i]=$row4["snp_pos"];
  $snp_chr[$i]=$row4["chr"];
  $snp_id[$i]=$row4["snp_id"];
  $snp_strand[$i]=$row4["snp_strand"];
  $allele[$i]=$row4["ref_allele"];
  $ref_allele[$i]=$row4["ref_allele"];
  $sqlcontrol6="select * from table6_energy where snp ='".$row4["snp_id"]."'";
  $result6=mysql_query($sqlcontrol6);
  $row6=mysql_fetch_array($result6);
  $preenergy[$i]=$row6["energy"];
  $snp_energy[$i]=$row6["snp_energy"];
  $changed_energy[$i]=$row6["changed_energy"];
  $i++;
 } 
 $total=$i-1;
 $p=1;
 ?>
</head>

<body onLoad="tabit<? echo $total; ?>(tab1,ctab1)">
<div class="container">
<div class='header'>
<img src="image/logo2.jpg" usemap="#chomap2" border="0" title="welcome" /> 
  <map name="chomap2" id="chomap2">
  <area shape="rect" coords="22,0,305,130" href="index.php" alt="homepage" />
  </map></div>
<div class="left">
     
     
	<?
	   include "sidebarinclude.php";
	?>
</div>
<div class="content" style="border:#000000 solid 4">

<?php
$sqlcontrol1="select * from table1_pre_miRNA where id='".$ID."'";
$sqlcontrol2="select * from table2_mature_miRNA where premiRNA_id='".$ID."'";
$sqlcontrol3="select * from table3_hairpin where Id='".$ID."'";
$sqlcontrol4="select * from table4_miRNA_SNP where premir='".$ID."'";
$sqlcontrol5="select * from table5_miRNA_target where id='".$ID."'";
$result1 = mysql_query($sqlcontrol1);
$result2 = mysql_query($sqlcontrol2);
$result3 = mysql_query($sqlcontrol3);
$result5 = mysql_query($sqlcontrol5);
$row1=mysql_fetch_array($result1);
$row2=mysql_fetch_array($result2);
$row3=mysql_fetch_array($result3);
$row5=mysql_fetch_array($result5);
$mytdadd=850;
 if($row5["target"]!="")
  $mytdadd=1000;
?>
<h2> <div style="font-family:Arial, Helvetica, sans-serif;color:#BD4700"> <b>&nbsp; Detail information of <? echo $row1["id"] ?> </b>  </div> </h2>

<div id="mytd" style="height:50px;margin-top:30px;overflow:hidden" >
 <div>
    <div style="float:left"> 
		            <table>
					<tr style="height:50px">
					<td>
                      
					 <div id="mirnafold" style="display:block;cursor:pointer">
                         <img src="image/triangle1.png" onClick="over1('mytd',<? echo $mytdadd;?>);changefold(1)"> 
		             </div>
			         <div id="mirnaunfold" style="display:none;cursor:pointer">  
			            <img src="image/triangle2.png" onClick="out('mytd',50);changefold(2)">
	                 </div>
                     </td>
					 </tr>
					 </table>
	</div>
    
	<div style="font-family:Arial, Helvetica, sans-serif;cursor:pointer;color:#0033FF;" > 
	  <table> 
	  <tr >
	   <td style="height:50px;background-color:#D9D9D9;width:780px">
	   <div style="font-size:30px;margin:10px" >
	   <a onClick="over1('mytd',<? echo $mytdadd;?>);changefold(1)">
	    microRNA Information 
	   </a>
	   </div>
	   </td>
	  </tr>
	  </table>
	</div>
 </div>
 
 <br/>
 
 <table id="pre" style="margin-left:38px">
 <tr>
 <td colspan="2" class="tabletitle">
  <div style="margin:5px">Pre-miRNA</div>  
 </td>
 </tr>	
 <tr>
 <td class="left1" width="130"> ID:  </td>  <td class="right1" width="650"> <? echo $row1["id"]; ?>  
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <a href="http://www.mirbase.org/cgi-bin/mirna_entry.pl?acc=<? echo $row1["acc"] ?>" title="miRBase" target="_blank"><img src="image/mirnabase.JPG" border="0"/>
	  </a>    
	  </td>
 </tr> 
 <tr>
 <td class="left2" width="130"> Accession: </td>  <td class="right2" width="650"><? echo $row1["acc"]; ?>  </td>
 </tr> 
 <tr>
 <td class="left1" width="130">Chr Position:</td>
 <td class="right1" width="650"> <? echo $row1["chr"].":".$row1["start"]."-".$row1["end"]; ?>&nbsp;(GRCh37)&nbsp;&nbsp;<? echo "[".$row1["strand"]."]"; ?></td>
 </tr>
 
 <tr>
 <td class="left2" width="130"> Host Gene: </td><td class="right2" width="650"><? if($row1["host"]=="Null")echo "intergenic";else echo $row1["host"];?></td>
 </tr> 
 <tr>
 <td class="left1" width="130">Cluster </td>
 <td class="right1" width="650">
       <b> 5kb: </b> <? if($row1["5kbcluster"]!="Null" ) echo $row1["5kbcluster"]; else echo "No microRNA in this cluster" ?> <br/>
       <b> 10kb: </b><? if($row1["10kbcluster"]!="Null") echo $row1["10kbcluster"]; else echo "No microRNA in this cluster" ?><br/></td>
</tr>
 <tr>
 <td class="left2" width="130"> Conservation:</td><td class="right2" width="650"> <? if($row1["conservation"]=="Null")echo "Human Specific";else echo $row1["conservation"];?> </td>
 </tr>
 <tr>
 <td class="left1" width="130">Orthology Species:</td><td class="right1" width="650"> <? 
   if($row1["species"]=="Null")
     echo "Human Specific";
   
   $array = explode(";", $row1["species"]); 
   $i=0;
   $ppp=0;
   ?> <table><tr>
   <?
   while($array[$i]!="")
   {  
      switch( substr($array[$i],0,3) )
       {case "gga":
          
		   ?><td><b>Chicken:</b>&nbsp;&nbsp;<?  
		  echo $array[$i];$ppp++;?>&nbsp;&nbsp;</td><?
		  break;
        case "ptr":
          ?><td><b>Chimpanzee:</b>&nbsp;&nbsp;<?  
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
        case "bta":
		  ?><td><b>Cow:</b>&nbsp;&nbsp;<?  
		  echo $array[$i];  $ppp++;?>&nbsp;&nbsp;</td><?
          break;
        case "cfa":
		  ?><td><b>Cog:</b>&nbsp;&nbsp;<?  
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
          break;
		case "eca":
		  ?><td><b>Horse:</b>&nbsp;&nbsp;<?  
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "mmu":
		  ?><td><b>Mouse:</b>&nbsp;&nbsp;<?  
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "rno":
		  ?><td><b>Rattus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		   break;
		case "dre":
		  ?><td><b>Zebrafish:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "mdo":
		  ?><td><b>Monodelphis domestica:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		   break;
		case "ssc":
		  ?><td><b>Sus scrofa:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "tgu":
		  ?><td><b>Taeniopygia guttata:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "tni":
		  ?><td><b>Tetraodon nigroviridis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "xtr":
		  ?><td><b>Xenopus tropicalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "ppy":
		  ?><td><b>Pongo pygmaeus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "age":
		  ?><td><b>Ateles geoffroyi:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; $ppp++;?>&nbsp;&nbsp;</td><?
		  break;
		case "ssy":
		  ?><td><b>Symphalangus syndactylus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "mml":
		  ?><td><b>Macaca mulatta:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "pbi":
		  ?><td><b>Pygathrix bieti:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "bta": 
		  ?><td><b>Bos taurus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "oan":
		  ?><td><b>Ornithorhynchus anatinus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "xla":
		  ?><td><b>Xenopus tropicalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "ggo":
		  ?><td><b>Gorilla gorilla:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "sla":
		  ?><td><b>Saguinus labiatus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "ppa":
		  ?><td><b>Pan paniscus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "cin":
		  ?><td><b>Ciona intestinalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "csa":
		  ?><td><b>Ciona savignyi:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "aae":
		  ?><td><b>A. aegypti:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "odi":
		  ?><td><b>Oikopleura dioica:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "lla":
		  ?><td><b>Lagothrix lagotricha:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;;</td><?
		   break;
		case "mne":
		  ?><td><b>Macaca nemestrina:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		case "ame": 
		  ?><td><b>A. mellifera:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
		  break;
		   
		 
	case "bfl":
                  ?><td><b>B. floridae:</b>&nbsp;&nbsp;<? 
                  echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                  break;
         case "sme":
                       ?><td><b>S. mediterranea:</b>&nbsp;&nbsp;<?
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
          case "cte":
                           ?><td><b>C. teleta:</b>&nbsp;&nbsp;<?
                            echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                           break;
	case "api":
                       ?><td><b>A. pisum:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "ath":
                       ?><td><b>A. thaliana:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "cbr":
                       ?><td><b>C. briggsae:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "cel":
                       ?><td><b>C. elegans:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "cre":
                       ?><td><b>C. reinhardtii:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "dps":
                       ?><td><b>D. pseudoobscura:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "osa":
                       ?><td><b>O. sativa:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "ptc":
                       ?><td><b>P. trichocarpa:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "tae":
                       ?><td><b>T. aestivum:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
case "vvi":
                       ?><td><b>V. vinifera:</b>&nbsp;&nbsp;<?     
                       echo $array[$i];$ppp++; ?>&nbsp;&nbsp;</td><?
                       break;
	
        default:
          
      }
	  $i++;
	  
      if($ppp==3)
	    {?></tr>
           <tr>
         <?
		 $ppp=0;
		}
   }
   
 
   ?></tr></table>
    </td>
 </tr>
  <tr>
 <td class="left2" width="130"> Sequence :</td><td class="right2" width="650"> 
 <? 
   $i=0;$j=0;
   while($row1["seq"][$i]!="")
   {echo $row1["seq"][$i]; 
    $i++;
	$j++;
	if($j==75)
	 {?><br/>
	  <?
      $j=0;
	 }
   }
 ?> </td> 
 
 
 </tr>
 </table>
 <br/>

 <table id="mat" style="margin-left:38px">
 <tr>
 <td colspan="2" class="tabletitle">
  <div style="margin:5px">Mature miRNA</div>  
 </td>
 </tr>	
 <? $sqlcontrol9="select * from table2_mature_miRNA where premiRNA_id='".$ID."'";
    $result9 = mysql_query($sqlcontrol9);
	
	while($row9=mysql_fetch_array($result9))
	{?>
	
 <tr>
 <td class="left1" width="130"> ID: </td><td class="right1" width="650"><? echo $row9["mature_miRNA_id"]; ?> </td>
 </tr>
 <tr>
 <td class="left2" width="130">Sequence: </td><td class="right2" width="650"> <font color="red"> <? echo $row9["seq"]; ?></font> <? echo $row9["start_on_pre"]."-".$row9["end_on_pre"]; ?> </td>
 </tr>
 <tr>
 <td class="left1" width="130"> Position:</td>
 <td class="right1" width="650"><b><? echo $row1["chr"].":"; ?> </b>
  <? echo $row9["start_on_chr"]."--".$row9["end_on_chr"]."[".$row9["strand"]."]"; ?> </td>
 </tr>
 <? } ?>
 </table>
 <br/>
 
 <?
 if($row5["target"]!="")
 { $display="block";
 }
 else
 { $display="none";
 }
 ?>
<table id="tar" style="margin-left:38px; display:<? echo $display ?>">
 <tr>
 <td colspan="2" class="tabletitle">
  <div style="margin:5px">miRNA validated target</div>  
 </td>
 </tr>	
 <tr>
 <td class="left1" width="130"> ID: </td> 
 <td class="right1" width="650"><? echo $row1["id"]; ?>  </td>
 </tr>
 <tr>
 <td class="left2" width="130"> Target: </td> 
  <td class="right2" width="650" style="word-break:break-all"> <? echo $row5["target"]; ?>  </td>
 </tr>
 <tr>
 <td class="left1" width="130"> Source: </td>
 <td class="right1" width="650">  
 <a href="http://watson.compbio.iupui.edu:8080/miR2Disease/index.jsp" target="_blank"> 
 miR2Disease
 </a>
&nbsp;&nbsp;&nbsp;&nbsp;
<a href="http://diana.cslab.ece.ntua.gr/tarbase/" target="_blank">
TarBase
</a>
 </td>
 </tr>   
 </table>

</div>
 
 
 
 
 <br />
 

 
 <div style="font-family:Arial, Helvetica, sans-serif;color:#0033FF;" >
      <div style="float:left;margin-left:0px;"> 
		            <table>
					<tr style="height:50px">
					<td>
					 <div id="mirnafold2" style="display:none;cursor:pointer">
		             	 <img src="image/triangle1.png" onClick="over('snptd',500);changefold2(1)"> 
		             </div>
			         <div id="mirnaunfold2" style="display:block;cursor:pointer">  
			            <img src="image/triangle2.png" onClick="out('snptd',0);changefold2(2)">
	                 </div>
                     </td>
					 </tr>
					 </table>
	  </div> 
	  <table style="margin-left:34px;cursor:pointer;"> 
	  <tr >
	   <td style="height:50px;background-color:#D9D9D9;width:780px">
	   <div style="font-size:30px;margin:10px" >
	     <a onClick="over('snptd',600);changefold2(1)">
		  SNP Information 
	    </a>
	   </div>
	   </td>
	  </tr>
	  </table>
 </div>
 <br/>
 

 <? $strand=$row1['strand'];
  ?>
  <div>
   <div id="snptd" style="height:500px;overflow:hidden" >
	<div style="float:left;margin-left:20px" >
	  <div style="margin-left:10px;white-space:pre;font-size:12px;font-family:Arial, Helvetica, sans-serif">
 <div style="font-size:20px;">   <b>Hairpin: mature sequence is shown in red</b> </div>
  <?
  $str=$row3['hairpin_seq'];
  $str=str_replace(' ','_', $str);
  $str=str_replace("\n",'$',$str);
  $p=array();
  $point=array();
  
  for($ppl=1;$ppl<=$total;$ppl++)
  {$p[$ppl]=0;
  }
  for($ppl=1;$ppl<=$total;$ppl++)
  { 
    
  $point[$ppl]=0;
  if($strand=="+"||$strand="-")
  { for($j=5+(strlen($str)-6)/5;$j<4+(strlen($str)-6)/5*2;$j++)
       {if($str[$j]!='-'&&$str[$j-(strlen($str)-6)/5]!='-')
		  {$p[$ppl]++;
           if($p[$ppl]==$on_premir[$ppl])
		      {if($str[$j]!='_')
			      $point[$ppl]=$j;
				  
			   else
			      $point[$ppl]=$j-(strlen($str)-6)/5;
			 
			  }
		  }
	   }
	 
	if($str[8+(strlen($str)-6)/5*3-5]!='_')
	     {$p[$ppl]++; 
		   if($p[$ppl]==$on_premir[$ppl])
		    {
			  $point[$ppl]=$j;
			
			}
		 }
	
	for($j=(strlen($str)-6)/5*4+3;$j>=5+(strlen($str)-6)/5*3;$j--)
	  {if($str[$j]!='-'&&$str[$j+(strlen($str)-6)/5]!='-')
		 {$p[$ppl]++;
          if($p[$ppl]==$on_premir[$ppl])
			 {if($str[$j]!='_')
			    $point[$ppl]=$j;
			  else
			    $point[$ppl]=$j+(strlen($str)-6)/5;
			
			 }
		 }
	  } 
  }	   
 else
  {
   for($j=5+(strlen($str)-6)/5*3;$j<4+(strlen($str)-6)/5*4;$j++)
	 {if($str[$j]!='-'&&$str[$j+(strlen($str)-6)/5]!='-')
		 {$p[$ppl]++; 
          if($p[$ppl]==$on_premir[$ppl])
		    {if($str[$j]!='_')
			   $point[$ppl]=$j;
			 else
			   $point[$ppl]=$j+(strlen($str)-6)/5;
			 
			}
		 }
	 }
   if($str[5+(strlen($str)-6)/5*3-2]!='_')
	 {$p[$ppl]++; 
	   if($p[$ppl]==$on_premir[$ppl])
		  {$point[$ppl]=$j;
		  
		  }
	 }
   for($j=(strlen($str)-6)/5*2;$j>=5+(strlen($str)-6)/5*1;$j--)
	    {if($str[$j]!='-'&&$str[$j-(strlen($str)-6)/5]!='-')
		    {$p[$ppl]++; 
             if($p[$ppl]==$on_premir[$ppl])
			  {if($str[$j]!='_')
			     {$point[$ppl]=$j;}
			   else
			     {$point[$ppl]=$j-(strlen($str)-6)/5;}
			  }
		    }
		} 
  }
  
  
  
  }
  
  $snpchange=array();
  for($ppl=1;$ppl<=$total;$ppl++)
  {
   if($row1["strand"]==$snp_strand[$ppl])
   {  $st1=$allele[$ppl];
      $st1=str_replace("T","U",$st1);
   }
   else
   {$st1=$allele[$ppl];
    for($k=0;$k<strlen($st[$ppl]);$k++)
      {if($st1[$k]=="C")
     	    $st1[$k]="G";
	    else
	      if($st1[$k]=="G")
	  	      $st1[$k]="C";
	      else
		      if($st1[$k]=="A")
			       $st1[$k]="U";
		      else
			     if($st1[$k]=="T")
			         $st1[$k]="A";
       }		
    }
	$st1=$snp_id[$ppl]."(".$st1.")";
	$snpchange[$ppl]=$st1;
	//echo $snpchange[$ppl];
   }
   ?> <table border="0" cellpadding="0"> <tr>
   <? 
   for($i=4;$i<strlen($str)-1;$i++)
    {
	   if($str[$i]=='$')
	     {?></tr><tr height="32px"><?	
	     }
	   else	
	     if($str[$i]=='_')
	    	{?><td><?
			 echo " ";
			 ?></td><?
			}
	      else	
		     {$p3=array();
			  $p4=0;
			  for($ppl=1;$ppl<=$total;$ppl++)
			  {if($i==$point[$ppl])
			     {$p4++;
			      $p3[$p4]=$ppl;
				 }
              }
			  if($p4>=1)
		        {?><td title="<? for($ppl=1;$ppl<=$p4;$ppl++)echo $snpchange[$p3[$ppl]]." ";?>"><a onClick="showDiv('left',<? echo $p3[1] ?>,<? echo $total ?>);over('snpcontent',500)" style="cursor:pointer;color:#CC00FF;font-size:30px" ><? 
				    echo "<b>".$str[$i]."</b>";
				 ?></a></td><?
				}
		        else
		        {if($str[$i]>='A'&&$str[$i]<='Z')
				 {?><td><?
		           echo "<font color='red'>".$str[$i]."</font>";
				  ?></td><?
				 }  
		         else
		             {?><td><?
					  echo $str[$i];
		              ?></td><?
					 }
				}
		      
			    
		   
		    }
	
	}	 
   ?>
     </tr>
     </table>
     </div>
	  
	  <div>
	  <table width="500px" class="sidebar1" >
	   <? for($pl=1;$pl<=$total;$pl++)
	      {
		     if(($pl+1)%2==0){?><tr><? }
				?>
				<td>
			     <div style="float:left"> 
		             <div id="trianglefold<? echo $pl ?>" style="display:block;cursor:pointer">
		             	 <img src="image/triangle1.png" onClick="showDiv('left',<? echo $pl ?>,<? echo $total ?>);over('snpcontent',500)"> 
		             </div>
			         <div id="triangleunfold<? echo $pl ?>" style="display:none;cursor:pointer">  
			            <img src="image/triangle2.png" 
						   onclick="hidDiv('left',<? echo $pl ?>,<? echo $total ?>)">
	                 </div>
		          </div>
			      <div id="leftnav<? echo $pl ?>" class="unactive" style="cursor:pointer">
		            <a href="javascript:void(0);" 
				     onclick="javascript:showDiv('left',<? echo $pl ?>,<? echo $total ?>);over('snpcontent',500)" target="_self">
				    <? echo $snp_id[$pl]; ?>
			        </a>
				  </div>
			   </td>
			   <? if($pl%2==0)
			         { ?> </tr> <? }
		    
			}
           	    
		?>		
		 </tr>		  		
	  </table>
	  </div>
	
	</div>
		
	<div style="margin-left:500px;background-image:url(<? echo 'wild_png/'.$ID.'.png' ?>);height:1000;width:500;" >

  <img src="image/placeholder.png" >
	</div>
<div style="margin-left:500px;">Structure of    wild miRNA</div>	 
	</div>
	<hr width=100% size=5 color="#ab4700" style="FILTER: alpha(opacity=100,finishopacity=0,style=3">
	
    <div id="snpcontent" class="endContent" style="height:0px;overflow:hidden;margin-left:50px">
      <? for($pl=1;$pl<=$total;$pl++)
	    {
	     ?> 
		     <div id="left<? echo $pl ?>" style="display:none;" >
		       <div style="float:left;font-family:Arial, Helvetica, sans-serif">
		    	     
					<br/>
					<br/>
					<br/>
					<table>
					 <tr>
                      <td colspan="2" class="tabletitle">
                          <div style="margin:5px"><? echo $snp_id[$pl]; ?> Information</div>  
                      </td>
                     </tr>	
					 <tr><td class="left1" height="30px" width="240"> SNP ID: </td> <td class="right1" width="260">
                     <a href="http://www.ncbi.nlm.nih.gov/projects/SNP/snp_ref.cgi?rs=<? echo $snp_id[$pl]; ?>" target="_blank">
					 <? echo $snp_id[$pl];?> 
                     </a>
                     </td></tr>
                     <tr><td class="left2" height="30px">Position:</td> <td class="right2"><? echo $snp_chr[$pl].":".$snp_pos[$pl]; ?> </td></tr>
	                 <tr>
					 <td class="left1" height="30px">SNP Loc relative to pre-miR: </td> <td class="right1"><? echo $on_premir[$pl]; ?></td>
					 </tr>
					 <tr><td class="left2" height="30px">Ref-allele:</td><td class="right2"><? echo $allele[$pl];?> </td></tr>
	                 <tr><td class="left1">Energy change: </td>
					 <td class="right1"> <b> Primary miRNA Eenergy </b>&nbsp;:&nbsp; <? echo $preenergy[$pl]; ?> kcal/mol  <br/>
	                      <b>SNP-miRNA Eenergy</b>&nbsp;:&nbsp;<? echo $snp_energy[$pl]; ?>kcal/mol  <br/>
	 <b>△△G</b>&nbsp;:&nbsp;<? echo $changed_energy[$pl]; ?>kcal/mol <br/>  
	                 </td></tr>
					 </table>
	           </div>
			   <div style="margin-left:450px;background-image:url(<? echo 'snp_png/'.$ID.'_'.$snp_id[$pl].'.png' ?>)">
		     	 	<img src="image/placeholder.png" >	  
			   </div>
		<div style="margin-left:500px;font-size:16px;">Structure of SNP  miRNA</div>

            </div>
	     <?
		}
	 ?>	
	</div>
  </div>
  
  <table width="800px"  border="1" style="margin-top:100px;display:none" > 
    <tr>
     <? for($pl=1;$pl<=$total;$pl++)
     {
     ?>
      <td class="menu<? if($pl==1) echo "1";else echo "2"; ?>"  id="tab<? echo $pl;?>" name="tab<? echo $pl;?>" 
	      onClick="<? echo "tabit".$total."(tab".$pl.",ctab".$pl.")"?>">
	        <? echo $snp_id[$pl]; ?>
	  </td>
     <? 
     }
     ?>
   </tr>
   <?
   $pl=1;
   for($pl=1;$pl<=$total;$pl++)
   {
   ?>
     <tr > 
       <td id="ctab<? echo $pl?>" name="ctab<? echo $pl?>"  colspan="<? echo $total?>" bgcolor="#FFFFFF">
	      <div style="float:left;">
            <div style="font-family:arial;font-size:14px"> 
			 <b>
	           SNP_ID: <? echo $snp_id[$pl];?>   <br/>
               Position:<? echo $snp_chr[$pl].":".$snp_pos[$pl]; ?> <br/>
	           SNP Loc relative to pre-miR: <? echo $on_premir[$pl]; ?> <br/>
               
	           Ref-allele:<? echo $allele[$pl];?>   <br/>
	           Energy change: <br/> 
	           &nbsp;&nbsp; Primary miRNA Eenergy : <? echo $preenergy[$pl]; ?> kcal/mol  <br/>
	           &nbsp;&nbsp; SNP-miRNA Eenergy:<? echo $snp_energy[$pl]; ?>kcal/mol  <br/>
	           &nbsp;&nbsp; <? echo $changed_energy[$pl]; ?>kcal/mol <br/>  
	        </b>
	      </div>
        <? $sqlcontrol7="select * from table7_snp_freq where snp_id ='".$snp_id[$i]."'";
           $result7 = mysql_query($sqlcontrol7);
           $row7=mysql_fetch_array($result7);
           if($row7["ASW"]!="")
           {
        ?>  
	    <h4> SNP_Freq: </h4>
        <table border="1">
        <tr> 
	     <td>ASW</td>
		 <td>CEU</td>
		 <td>CHB</td>
		 <td>CHD</td>
		 <td>GIH</td>
		 <td>JPT</td>
		 <td>LWK</td>
		 <td>MEX</td>
		 <td>MKK</td>
		 <td>TSI</td>
		 <td>YRI</td>
        </tr>
	    <tr>
	     <td><? echo $row7["ASW"]; ?></td>
		 <td><? echo $row7["CEU"]; ?></td>
		 <td><? echo $row7["CHB"]; ?></td>
		 <td><? echo $row7["CHD"]; ?></td>
		 <td><? echo $row7["GIH"]; ?></td>
		 <td><? echo $row7["JPT"]; ?></td>
		 <td><? echo $row7["LWK"]; ?></td>
		 <td><? echo $row7["MEX"]; ?></td>
		 <td><? echo $row7["MKK"]; ?></td>
		 <td><? echo $row7["TSI"]; ?></td>
         <td><? echo $row7["YRI"]; ?></td>
		</tr>
	    </table>
	     <?
          }
         ?> 
      </div>  
  <div style="margin-left:330px;white-space:pre;font-size:12px;font-family:Arial, Helvetica, sans-serif">
   <b>Hairpin:</b> 
  <?
  $str=$row3['hairpin_seq'];
  $str=str_replace(' ','_', $str);
  $str=str_replace("\n",'$',$str);
  $p=array();
  $point=array();
  for($ppl=1;$ppl<=$total;$ppl++)
  {$p[$ppl]=0;
  }
  for($ppl=1;$ppl<=$total;$ppl++)
  {
  $point[$ppl]=0;
  if($strand=="+")
  { for($j=2+(strlen($str)-3)/5;$j<1+(strlen($str)-3)/5*2;$j++)
       {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		  {$p[$ppl]++;
           if($p[$ppl]==$on_premir[$ppl])
		      {if($str[$j]!='_')
			      $point[$ppl]=$j;
			   else
			      $point[$ppl]=$j-(strlen($str)-3)/5;
			  }
		  }
	   }
	if($str[2+(strlen($str)-3)/5*3-2]!='_')
	     {$p[$ppl]++;
		   if($p[$ppl]==$on_premir[$ppl])
		    {
			  $point[$ppl]=$j;
			}
		 }
	for($j=(strlen($str)-3)/5*4;$j>=2+(strlen($str)-3)/5*3;$j--)
	  {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p[$ppl]++;
          if($p[$ppl]==$on_premir[$ppl])
			 {if($str[$j]!='_')
			    $point[$ppl]=$j;
			  else
			    $point[$ppl]=$j+(strlen($str)-3)/5;
			 }
		 }
	  } 
  }	   
  else
  {for($j=2+(strlen($str)-3)/5*3;$j<1+(strlen($str)-3)/5*4;$j++)
	 {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p[$ppl]++;
          if($p[$ppl]==$on_premir[$ppl])
		    {if($str[$j]!='_')
			   $point[$ppl]=$j;
			 else
			   $point[$ppl]=$j+(strlen($str)-3)/5;
			}
		 }
	 }
   if($str[2+(strlen($str)-3)/5*3-2]!='_')
	 {$p[$ppl]++;
	   if($p[$ppl]==$on_premir[$ppl])
		  {$point[$ppl]=$j;
		  }
	 }
   for($j=(strlen($str)-3)/5*2;$j>=2+(strlen($str)-3)/5*1;$j--)
	    {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		    {$p[$ppl]++;
             if($p[$ppl]==$on_premir[$ppl])
			  {if($str[$j]!='_')
			     $point[$ppl]=$j;
			   else
			     $point[$ppl]=$j+(strlen($str)-3)/5;
			  }
		    }
		} 
  }
  
  }
  $snpchange=array();
  for($ppl=1;$ppl<=$total;$ppl++)
  {
   if($row1["strand"]==$snp_strand[$ppl])
   {  $st1=$allele[$ppl];
      $st1=str_replace("T","U",$st1);
   }
   else
   {$st1=$allele[$ppl];
    for($k=0;$k<strlen($st[$ppl]);$k++)
      {if($st1[$k]=="C")
     	    $st1[$k]="G";
	    else
	      if($st1[$k]=="G")
	  	      $st1[$k]="C";
	      else
		      if($st1[$k]=="A")
			       $st1[$k]="U";
		      else
			     if($st1[$k]=="T")
			         $st1[$k]="A";
       }		
    }
	$st1=$snp_id[$ppl]."(".$st1.")";
	$snpchange[$ppl]=$st1;
	
   }
   ?> <table border="0" cellpadding="0"> <tr>
   <? 
   for($i=1;$i<strlen($str)-1;$i++)
    {
	   if($str[$i]=='$')
	     {?></tr><tr><?	
	     }
	   else	
	     if($str[$i]=='_')
	    	{?><td><?
			 echo " ";
			 ?></td><?
			}
	      else	
		     {$p3=array();
			  $p4=0;
			  for($ppl=1;$ppl<=$total;$ppl++)
			  {if($i==$point[$ppl])
			     {$p4++;
			      $p3[$p4]=$ppl;
				 }
              }
			  if($p4>=1)
		        {?><td title="<? for($ppl=1;$ppl<=$p4;$ppl++)echo $snpchange[$p3[$ppl]]." ";?>"><a onClick="showDiv('left',<? echo $p3[1] ?>,<? echo $total ?>);over('snpcontent',700)" style="cursor:pointer;color:#9900CC;font-size:36px"><? 
				    echo $str[$i];
				 ?></a></td><?
				}
		        else
		        {if($str[$i]>='A'&&$str[$i]<='Z')
				 {?><td><?
		           echo "<font color='red'>".$str[$i]."</font>";
				  ?></td><?
				 }  
		         else
		             {?><td><?
					  echo $str[$i];
		              ?></td><?
					 }
				}
		      
			    
		   
		    }
	
	}	 
   
     
 
  ?>
  </tr>
  </table>
  <br/>
  <br/>
  <br/>
  <br/>
  <? 
  ?>
  </div>
  
  <div  "><div  id="oDiv" onClick="loadBox.init();inini('wild_png/<? echo $ID ?>.png');loadBox.show()"

     style="position:relative; height:200px; width:200px;  float:left;       

          filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<? echo 'wild_png/'.$ID.'.png' ?>', sizingMethod='scale');" >
      </div> 
	 <? $new_ID=$ID."_".$snp_id[$pl]; ?>
	 <div id="oDiv" onClick="loadBox.init();inini('snp_png/<? echo $new_ID ?>.png');loadBox.show();"

     style="position:relative; height:200px; width:200px;       

          filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<? echo 'snp_png/'.$ID.'_'.$snp_id[$pl].'.png' ?>', sizingMethod='scale');" >
      </div> 
  <input type="button" value="" onClick="loadBox.init();inini('wild_png/<? echo $ID ?>.png');loadBox.show()"/>
  </div>
  </td>
  </tr>
  <? } ?>	 
  
  
  
  
  </table>
  


</div>

<div class="footer">
<table  width="960" style="font-size:14px">
    <tr>
        <td align="center">Copyright &copy; <a href="http://www.bioguo.org" target=_blank>Guo Lab</a>, 
                <a href="http://bioinfo.hust.edu.cn/" target=_blank>Huibei Bioinformatics & Molecular Imaging Key Lab</a>,
                <a href="http://lifehust.bjsxp01.host.35.com/" target="_blank">College of Life Science and Technology</a>;
				<a href="http://www.hust.edu.cn/" target=_blank>HUST</a>, China.
                
		</td>
		
    </tr> 
    <tr>         
        <td align="center" >
           Any Comments and suggestions, please <a href="aboutus.php">contact us</a> . Last Modified: 2011-5-18
        </td>
    </tr>
</table>
</div>
</div>
</body>
</html>
