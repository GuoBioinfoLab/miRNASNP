<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<link href="main.css" rel="stylesheet" type="text/css" />
<title>miRNASNP</title>


<script type="text/javascript">
function inini(content)
{var a="<img src='";
 var c="'><input type='button' value='close' onclick='loadBox.hide()'/>";
 var d=a.concat(content);
 var e=d.concat(c);
loadBox.init();
loadBox.boxContent=e;
}


</script>
<script type="text/javascript">
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
if (window.navigator.userAgent.indexOf("MSIE 6.0") > 0)
{
var selectDom = document.getElementsByTagName("select");
for (var i = 0; i < selectDom.length ; i++)
{
if (obj)
selectDom[i].style.display="none";
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
	   width:130px;
	  }
.left2{font-family:Arial, Helvetica, sans-serif;
       font-size:15px;
       font-weight:bold;
	   color:#3E1400;
	   background-color:#E8E8E8;
	   width:130px;
	   }	  
.right1{font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color:#000000;
		background-color:#FFE3D9;
		width:650px;
		
	   }
.right2{font-family:Arial, Helvetica, sans-serif;
        font-size:12px;
        color:#000000;
		background-color:#F6F6F6;
		width:650px;
		}   	
.sidebar1 { float:left; padding:0; margin:0; text-align:left; }
.sidebar1 ul { list-style:none; padding:0; margin:0; text-align:center }
.sidebar1 li { float:left; height:24px; margin:0; padding:0 3px; background:#fff; }
.sidebar1 a { color:#000;font-size:12px;}
.sidebar1 a:hover { color:#f60; }
.sidebar1 .active a { color:#f00; }
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
			 var hair="haircontent"+id;
			 if(id==num)
			 { D(ss).style.display="block";
			   D(hair).style.display="block";
               D(nss).className="active";
			   
			 }
			 else
			 { D(ss).style.display="none";
               D(hair).style.display="none";
			   D(nss).className="";
			   D(tri).style.display="block";
	           D(triu).style.display="none";
			 }
          }
	  catch(e)
	     {
		 }
   }
  }
  var sobj1;
  var num1;
  var total1;
  function hidDivact(s,nMin)
  {  var obj=document.getElementById(s); 
     var h = parseInt(obj.offsetHeight); 
     if (h > nMin){ 
      obj.style.height = (h - 4)+"px"; 
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
		D(nss).className="";
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
function over(s,nMax){ 
  var obj=document.getElementById(s); 
  var h = parseInt(obj.offsetHeight); 
  if (h < nMax){ 
    obj.style.height = (h + 4)+"px"; 
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
    obj.style.height = (h - 4)+"px"; 
    clearTimeout(act); 
    act = setTimeout("out('"+s+"',"+nMin+")", 10); 
	} 
} 
</script>  
<?
$ID=$_GET["id"];
$ip="********";
$user='********';
$password='********';
$db="********";
$conn=mysql_connect($ip,$user,$password) or die("Cannot connect to server!".mysql_error());
mysql_select_db($db,$conn) or die("Cannot select database!".mysql_error()); 
$sqlcontrol4="select * from table4_miRNA_SNP where premir='".$ID."'";
$result4 = mysql_query($sqlcontrol4);
$i=1;
 while($row4 = mysql_fetch_array($result4))
 {$on_premir[$i]=$row4['on_premir'];
  $snp_pos[$i]=$row4["snp_pos"];
  $snp_chr[$i]=$row4["chr"];
  $snp_id[$i]=$row4["snp_id"];
  $snp_strand[$i]=$row4["snp_strand"];
  $allele[$i]=$row4["allele"];
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
<div class='header'><img src="logo2.jpg" /></div>
<div class="leftbar">
     <div> <p align="justify"><img src="sidebar.png" border="0" usemap="#sidemap" />
              <map name="sidemap" id="sidemap">
	          <area shape="rect" coords="2,80,128,106" href="index.php" alt="1" />
              <area shape="rect" coords="43,153,122,175" href="search.php" alt="1" />
	          <area shape="rect" coords="44,226,164,247" href="document.php" alt="1" />
	          <area shape="rect" coords="8,303,140,323" href="download.php" alt="1" />
	          <area shape="rect" coords="26,379,121,398" href="aboutus.php" alt="1" />
	          </map>
           </p>
	 </div>	   
     <div style="margin-left:15px;width:150px">
        <p ><b>Stats:</b></p>
        Homo sapiens
       <ul>
         <li>miRNAs: 940</li>
         <li>dbSNP 131: 25218127</li>
       </ul>
       other species:<br/>
       &nbsp;&nbsp;see document 
	</div>
</div>
<div class="content">
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
?>
<b> <? echo $row1["id"] ?> </b>     

<div id="mytd" style="height:30px;background-color:#FFE1FF;overflow:hidden" >
 <div>
    <div style="font-family:Arial, Helvetica, sans-serif;font-size:30px;float:left"> microRNA Information </div>
    <div style="margin-left:700px;color:#0000FF" > <a onClick="over('mytd',500)"> UNFOLD </a></div>
 </div>
 <table>
 <tr>
 <td colspan="2" class="tabletitle">
  <div style="margin:5px">Pre_miRNA</div>  
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
	   Link to miRNABase:
	  <a href="http://www.mirbase.org/cgi-bin/mirna_entry.pl?acc=<? echo $row1["acc"] ?>"><img src="mirbase1.png" border="0"/>
	  </a>    
	  </td>
 </tr> 
 <tr>
 <td class="left2" width="130"> Accession: </td>  <td class="right2" width="650"><? echo $row1["acc"]; ?>  </td>
 </tr> 
 <tr>
 <td class="left1" width="130"> Position:</td>
 <td class="right1" width="650">Coordinates(GRch37) <? echo $row1["chr"].":".$row1["start"]."-".$row1["end"]."[".$row1["strand"]."]"; ?> </td>
 </tr> 
 <tr>
 <td class="left2" width="130"> Host : </td><td class="right2" width="650"><? if($row1["host"]=="")echo "NULL";else echo $row1["host"];?></td>
 </tr> 
 <tr>
 <td class="left1" width="130">Cluster </td>
 <td class="right1" width="650">
       <b> 5kb: </b><? echo $row1["5kbcluster"];?> <br/>
       <b> 10kb: </b><? echo $row1["10kbcluster"];?><br/></td>
</tr>
 <tr>
 <td class="left2" width="130"> Conservation:</td><td class="right2" width="650"> <? if($row1["conservation"]=="")echo "NULL";else echo $row1["conservation"];?> </td>
 </tr>
 <tr>
 <td class="left1" width="130">Species:</td><td class="right1" width="650"> <? 
   $array = explode(";", $row1["species"]); 
   $i=0;
   while($array[$i]!="")
   {
      switch( substr($array[$i],0,3) )
       {case "gga":
          ?><b>chicken:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];
		  break;
        case "ptr":
          ?><b>chimpanzee:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
        case "bta":
		  ?><b>cow:</b>&nbsp;&nbsp;<? 
		  echo $array[$i];  ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
          break;
        case "cfa":
		  ?><b>dog:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
          break;
		case "eca":
		  ?><b>horse:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "mmu":
		  ?><b>mouse:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "rno":
		  ?><b>rattus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		   break;
		case "dre":
		  ?><b>zebrafish:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "mdo":
		  ?><b>Monodelphis domestica:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		   break;
		case "ssc":
		  ?><b>Sus scrofa:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "tgu":
		  ?><b>Taeniopygia guttata:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "tni":
		  ?><b>Tetraodon nigroviridis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "xtr":
		  ?><b>Xenopus tropicalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "ppy":
		  ?><b>Pongo pygmaeus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "age":
		  ?><b>Ateles geoffroyi:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "ssy":
		  ?><b>Symphalangus syndactylus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "mml":
		  ?><b>Macaca mulatta:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "pbi":
		  ?><b>Pygathrix bieti:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "bta": 
		  ?><b>Bos taurus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "oan":
		  ?><b>Ornithorhynchus anatinus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "xla":
		  ?><b>Xenopus tropicalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "ggo":
		  ?><b>Gorilla gorilla:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "sla":
		  ?><b>Saguinus labiatus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "ppa":
		  ?><b>Pan paniscus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "cin":
		  ?><b>Ciona intestinalis:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "csa":
		  ?><b>Ciona savignyi:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "odi":
		  ?><b>Oikopleura dioica:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "odi":
		  ?><b>Oikopleura dioica:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "lla":
		  ?><b>Lagothrix lagotricha:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		   break;
		case "mne":
		  ?><b>Macaca nemestrina:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		case "rno": 
		  ?><b>Rattus norvegicus:</b>&nbsp;&nbsp;<? 
		  echo $array[$i]; ?>&nbsp;&nbsp;&nbsp;&nbsp;<?
		  break;
		   
		 
		
        default:
          
      }
	  $i++;
   }
 
 
   if($row1["species"]=="")echo "NULL"; ?> </td>
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
 <br />

 <table>
 <tr>
 <td colspan="2" class="tabletitle">
  <div style="margin:5px">Mature_miRNA</div>  
 </td>
 </tr>	
 <tr>
 <td class="left1" width="130"> ID: </td><td class="right1" width="650"><? echo $row2["mature_miRNA_id"]; ?> </td>
 </tr>
 <tr>
 <td class="left2" width="130">Sequence: </td><td class="right2" width="650"> <font color="red"> <? echo $row2["seq"]; ?></font> <? echo $row2["start_on_pre"]."-".$row2["end_on_pre"]; ?> </td>
 </tr>
 <tr>
 <td class="left1" width="130"> Position:</td>
 <td class="right1" width="650"><b><? echo $row1["chr"].":"; ?> </b>
  <? echo $row2["start_on_chr"]."--".$row2["end_on_chr"]."[".$row2["strand"]."]"; ?> </td>
 </tr>
 </table>
 <div onClick="out('mytd',30)" style="margin-left:700px;color:#0000FF" > FOLD </div>
</div>
 
 
 
 
 <br />
 <p style="font-size:24px">SNP Information </p>
 <br/>
 <font color="red"> <? echo $total ?> </font>  SNPs were found on the miRNA
 <br/>
 <? $strand=$row1['strand'];
  ?>
  <div>
    <div style="float:left;margin-left:20px" >
	  <div>
	  <table width="300px" class="sidebar1" >
	   <? for($pl=1;$pl<=$total;$pl++)
	      {
		     if(($pl+1)%2==0){?><tr><? }
				?>
				<td>
			     <div style="float:left"> 
		             <div id="trianglefold<? echo $pl ?>" style="display:block;">
		             	 <img src="triangle1.png" onClick="showDiv('left',<? echo $pl ?>,<? echo $total ?>);over('snpcontent',900)"> 
		             </div>
			         <div id="triangleunfold<? echo $pl ?>" style="display:none;">  
			            <img src="triangle2.png" 
						   onclick="hidDiv('left',<? echo $pl ?>,<? echo $total ?>)">
	                 </div>
		          </div>
			      <div id="leftnav<? echo $pl ?>" class="" >
		            <a href="javascript:void(0);" 
				     onclick="javascript:showDiv('left',<? echo $pl ?>,<? echo $total ?>);over('snpcontent',900)" target="_self">
				    <? echo $snp_id[$pl]; ?>
			        </a>
				  </div>
			   </td>
			   <? if($pl%2==0)
			         { ?> </tr> <? }
		    
			}
	    ?>		 		  		
	  </table>
	  <br/>
	  </div>
	  <div>
	  <? for($pl=1;$pl<=$total;$pl++)
	     {
	  ?>	 
	      <div id="haircontent<? echo $pl ?>" style="height:0px;display:none" >
             <b>Hairpin:</b> 
  <?
  $str=$row3['hairpin_seq'];
  $str=str_replace(' ','_', $str);
  $str=str_replace("\n",'$',$str);
  $p=0;
  $point=0;
  if($strand=="+")
  { for($j=2+(strlen($str)-3)/5;$j<1+(strlen($str)-3)/5*2;$j++)
       {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		  {$p++;
           if($p==$on_premir[$pl])
		      {if($str[$j]!='_')
			      $point=$j;
			   else
			      $point=$j-(strlen($str)-3)/5;
			  }
		  }
	   }
	if($str[2+(strlen($str)-3)/5*3-2]!='_')
	     {$p++;
		   if($p==$on_premir[$pl])
		    {
			  $point=$j;
			}
		 }
	for($j=(strlen($str)-3)/5*4;$j>=2+(strlen($str)-3)/5*3;$j--)
	  {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p++;
          if($p==$on_premir[$pl])
			 {if($str[$j]!='_')
			    $point=$j;
			  else
			    $point=$j+(strlen($str)-3)/5;
			 }
		 }
	  } 
  }	   
  else
  {for($j=2+(strlen($str)-3)/5*3;$j<1+(strlen($str)-3)/5*4;$j++)
	 {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p++;
          if($p==$on_premir[$pl])
		    {if($str[$j]!='_')
			   $point=$j;
			 else
			   $point=$j+(strlen($str)-3)/5;
			}
		 }
	 }
   if($str[2+(strlen($str)-3)/5*3-2]!='_')
	 {$p++;
	   if($p==$on_premir[$pl])
		  {$point=$j;
		  }
	 }
   for($j=(strlen($str)-3)/5*2;$j>=2+(strlen($str)-3)/5*1;$j--)
	    {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		    {$p++;
             if($p==$on_premir[$pl])
			  {if($str[$j]!='_')
			     $point=$j;
			   else
			     $point=$j+(strlen($str)-3)/5;
			  }
		    }
		} 
  }
  echo "<br/>";
  if($point<(strlen($str)-3)/5*2+2)
    {for($i=2;$i<=(strlen($str)-3)/5;$i++)
       {if($i==$point-(strlen($str)-3)/5-5)
		  {echo "<b>".$snp_id[$pl]."</b>";
		     if($row1["strand"]==$snp_strand[$pl])
			   {$st=$allele[$pl];
			    $st=str_replace("T","U",$st);
			    echo "(".$st.")";
			   }
			 else
			   {$st=$allele[$pl];
			    for($k=0;$k<strlen($st);$k++)
			      {if($st[$k]=="C")
			         $st[$k]="G";
			       else
			        if($st[$k]=="G")
			          $st[$k]="C";
				    else
				     if($st[$k]=="A")
			          $st[$k]="U";
				     else
				      if($st[$k]=="T")
			           $st[$k]="A";
			      }		
			    echo "(".$st.")";
		       }
		   } 
		 else
		   {echo "&nbsp;";
		   }
       }
     echo "<br/>";
     for($i=2;$i<=(strlen($str)-3)/5;$i++)
     {  if($i==$point-(strlen($str)-3)/5)
		    echo "<b>".chr(24)."</b>"; 
	    else
		    echo "&nbsp;";
     }	
   }	
  for($i=1;$i<strlen($str)-1;$i++)
    {if($str[$i]=='$')
	   {echo "<br/>";
	   }
	 else	
	   if($str[$i]=='_')
		{if($point<(strlen($str)-3)/5*2+2)
		   {if($i==$point-(strlen($str)-3)/5)
		      echo "<b>".chr(5)."</b>";
		    else
		      echo "&nbsp;";
		   }
		 else
		 {if($i==$point+(strlen($str)-3)/5)
		    echo "<b>".chr(5)."</b>";
		  else
		    echo "&nbsp;";
		 }
		}
	   else	  
        {if($i==$point)
		  {echo "<font color='blue'><b>".$str[$i]."</b></font>";
		   }
		 else
		  {if($str[$i]>='A'&&$str[$i]<='Z')
		    echo "<font color='red'>".$str[$i]."</font>";
		   else
		    echo $str[$i];
		  }
		}
	}	 

   if($point>=(strlen($str)-3)/5*3+2)
   {for($i=2;$i<=(strlen($str)-3)/5;$i++)
      {if($i==$point-(strlen($str)-3)/5*3||$i==$point-(strlen($str)-3)/5*4)
		  echo "<b>".'|'."</b>"; 
	   else
		  echo "&nbsp;";
      }	
    echo "<br/>";
    for($i=2;$i<=(strlen($str)-3)/5;$i++)
    {if($i==$point-(strlen($str)-3)/5*3-5||$i==$point-(strlen($str)-3)/5*4-5)
		{  echo "<b>".$snp_id[$pl]."</b>";
		   if($row1["strand"]==$snp_strand[$pl])
			 {$st=$allele[$pl];
			  $st=str_replace("T","U",$st);
			  echo "(".$st.")";
			 }
			 else
			 {$st=$allele[$pl];
			 for($k=0;$k<strlen($st);$k++)
			  {if($st[$k]=="C")
			     $st[$k]="G";
			   else
			     if($st[$k]=="G")
			       $st[$k]="C";
				 else
				   if($st[$k]=="A")
			         $st[$k]="U";
				   else
				     if($st[$k]=="T")
			           $st[$k]="A";
			   }	 
				     
			  echo "(".$st.")";
			 }
		   }
		   else
		    {echo "&nbsp;";}
    }
  }	
 
  ?>
  
          </div>	   
	   <?
	     }
		?>    
	  </div>	
	</div>
	
	<div style="margin-left:400px">
	<img src= "<? echo 'png/'.$ID.'.png' ?>">
	</div>
	 
	 
	 
    <div id="snpcontent" class="endContent" style="height:0px;overflow:hidden;margin-left:50px">
      <? for($pl=1;$pl<=$total;$pl++)
	    {
	     ?> <div id="left<? echo $pl ?>" style="display:none;" >
		       
			   <div style="float:left">
		    	   <div style="font-family:arial;font-size:14px"> 
		         	 <b>
	                 SNP_ID: <? echo $snp_id[$pl];?>   <br/>
                     Position:<? echo $snp_chr[$pl].":".$snp_pos[$pl]; ?> <br/>
	                 SNP Loc relative to pre-miR: <? echo $on_premir[$pl]; ?> <br/>
                     SNP_strand:<? echo $snp_strand[$pl]; ?>  <br/>
	                 Ref-allele:<? echo $allele[$pl];?>   <br/>
	                 Energy change: <br/> 
	                 &nbsp;&nbsp; Primary miRNA Eenergy : <? echo $preenergy[$pl]; ?> kcal/mol  <br/>
	                 &nbsp;&nbsp; SNP-miRNA Eenergy:<? echo $snp_energy[$pl]; ?>kcal/mol  <br/>
	                 &nbsp;&nbsp; △G:<? echo $changed_energy[$pl]; ?>kcal/mol <br/>  
	                 </b>
	               </div>
			   </div>
			   <div style="margin-left:350px">
		     	 <img src="<? echo 'new_png/'.$ID.'_'.$snp_id[$pl].'.png' ?>">			  
			   </div>
            </div>
	     <?
		}
	 ?>	
	</div>
  </div>
  
  <table width="800px"  border="1" style="margin-top:100px"> 
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
               SNP_strand:<? echo $snp_strand[$pl]; ?>  <br/>
	           Ref-allele:<? echo $allele[$pl];?>   <br/>
	           Energy change: <br/> 
	           &nbsp;&nbsp; Primary miRNA Eenergy : <? echo $preenergy[$pl]; ?> kcal/mol  <br/>
	           &nbsp;&nbsp; SNP-miRNA Eenergy:<? echo $snp_energy[$pl]; ?>kcal/mol  <br/>
	           &nbsp;&nbsp; △G:<? echo $changed_energy[$pl]; ?>kcal/mol <br/>  
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
  <div style="margin-left:330px;" >
   <b>Hairpin:</b> 
  <?
  $str=$row3['hairpin_seq'];
  $str=str_replace(' ','_', $str);
  $str=str_replace("\n",'$',$str);
  $p=0;
  $point=0;
  if($strand=="+")
  { for($j=2+(strlen($str)-3)/5;$j<1+(strlen($str)-3)/5*2;$j++)
       {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		  {$p++;
           if($p==$on_premir[$pl])
		      {if($str[$j]!='_')
			      $point=$j;
			   else
			      $point=$j-(strlen($str)-3)/5;
			  }
		  }
	   }
	if($str[2+(strlen($str)-3)/5*3-2]!='_')
	     {$p++;
		   if($p==$on_premir[$pl])
		    {
			  $point=$j;
			}
		 }
	for($j=(strlen($str)-3)/5*4;$j>=2+(strlen($str)-3)/5*3;$j--)
	  {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p++;
          if($p==$on_premir[$pl])
			 {if($str[$j]!='_')
			    $point=$j;
			  else
			    $point=$j+(strlen($str)-3)/5;
			 }
		 }
	  } 
  }	   
  else
  {for($j=2+(strlen($str)-3)/5*3;$j<1+(strlen($str)-3)/5*4;$j++)
	 {if($str[$j]!='-'&&$str[$j+(strlen($str)-3)/5]!='-')
		 {$p++;
          if($p==$on_premir[$pl])
		    {if($str[$j]!='_')
			   $point=$j;
			 else
			   $point=$j+(strlen($str)-3)/5;
			}
		 }
	 }
   if($str[2+(strlen($str)-3)/5*3-2]!='_')
	 {$p++;
	   if($p==$on_premir[$pl])
		  {$point=$j;
		  }
	 }
   for($j=(strlen($str)-3)/5*2;$j>=2+(strlen($str)-3)/5*1;$j--)
	    {if($str[$j]!='-'&&$str[$j-(strlen($str)-3)/5]!='-')
		    {$p++;
             if($p==$on_premir[$pl])
			  {if($str[$j]!='_')
			     $point=$j;
			   else
			     $point=$j+(strlen($str)-3)/5;
			  }
		    }
		} 
  }
  echo "<br/>";
  if($point<(strlen($str)-3)/5*2+2)
    {for($i=2;$i<=(strlen($str)-3)/5;$i++)
       {if($i==$point-(strlen($str)-3)/5-5)
		  {echo "<b>".$snp_id[$pl]."</b>";
		     if($row1["strand"]==$snp_strand[$pl])
			   {$st=$allele[$pl];
			    $st=str_replace("T","U",$st);
			    echo "(".$st.")";
			   }
			 else
			   {$st=$allele[$pl];
			    for($k=0;$k<strlen($st);$k++)
			      {if($st[$k]=="C")
			         $st[$k]="G";
			       else
			        if($st[$k]=="G")
			          $st[$k]="C";
				    else
				     if($st[$k]=="A")
			          $st[$k]="U";
				     else
				      if($st[$k]=="T")
			           $st[$k]="A";
			      }		
			    echo "(".$st.")";
		       }
		   } 
		 else
		   {echo "&nbsp;";
		   }
       }
     echo "<br/>";
     for($i=2;$i<=(strlen($str)-3)/5;$i++)
     {  if($i==$point-(strlen($str)-3)/5)
		    echo "<b>".chr(24)."</b>"; 
	    else
		    echo "&nbsp;";
     }	
   }	
  for($i=1;$i<strlen($str)-1;$i++)
    {if($str[$i]=='$')
	   {echo "<br/>";
	   }
	 else	
	   if($str[$i]=='_')
		{if($point<(strlen($str)-3)/5*2+2)
		   {if($i==$point-(strlen($str)-3)/5)
		      echo "<b>".chr(5)."</b>";
		    else
		      echo "&nbsp;";
		   }
		 else
		 {if($i==$point+(strlen($str)-3)/5)
		    echo "<b>".chr(5)."</b>";
		  else
		    echo "&nbsp;";
		 }
		}
	   else	  
        {if($i==$point)
		  {echo "<font color='blue'><b>".$str[$i]."</b></font>";
		   }
		 else
		  {if($str[$i]>='A'&&$str[$i]<='Z')
		    echo "<font color='red'>".$str[$i]."</font>";
		   else
		    echo $str[$i];
		  }
		}
	}	 

   if($point>=(strlen($str)-3)/5*3+2)
   {for($i=2;$i<=(strlen($str)-3)/5;$i++)
      {if($i==$point-(strlen($str)-3)/5*3||$i==$point-(strlen($str)-3)/5*4)
		  echo "<b>".'|'."</b>"; 
	   else
		  echo "&nbsp;";
      }	
    echo "<br/>";
    for($i=2;$i<=(strlen($str)-3)/5;$i++)
    {if($i==$point-(strlen($str)-3)/5*3-5||$i==$point-(strlen($str)-3)/5*4-5)
		{  echo "<b>".$snp_id[$pl]."</b>";
		   if($row1["strand"]==$snp_strand[$pl])
			 {$st=$allele[$pl];
			  $st=str_replace("T","U",$st);
			  echo "(".$st.")";
			 }
			 else
			 {$st=$allele[$pl];
			 for($k=0;$k<strlen($st);$k++)
			  {if($st[$k]=="C")
			     $st[$k]="G";
			   else
			     if($st[$k]=="G")
			       $st[$k]="C";
				 else
				   if($st[$k]=="A")
			         $st[$k]="U";
				   else
				     if($st[$k]=="T")
			           $st[$k]="A";
			   }	 
				     
			  echo "(".$st.")";
			 }
		   }
		   else
		    {echo "&nbsp;";}
    }
  }	
 
  ?>
  <br/>
  <br/>
  <br/>
  <br/>
  <? 
  ?>
  </div>
  
  <div><div  id="oDiv" onClick="loadBox.init();inini('png/<? echo $ID ?>.png');loadBox.show()"

     style="position:relative; height:200px; width:200px;  float:left;       

          filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<? echo 'png/'.$ID.'.png' ?>', sizingMethod='scale');" >
      </div> 
	 <? $new_ID=$ID."_".$snp_id[$pl]; ?>
	 <div id="oDiv" onClick="loadBox.init();inini('new_png/<? echo $new_ID ?>.png');loadBox.show();"

     style="position:relative; height:200px; width:200px;         

          filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<? echo 'new_png/'.$ID.'_'.$snp_id[$pl].'.png' ?>', sizingMethod='scale');" >
      </div> 
  <input type="button" value="" onClick="loadBox.init();inini('png/<? echo $ID ?>.png');loadBox.show()"/>
  </div>
  </td>
  </tr>
  <? } ?>	 
  
  
  
  
  </table>
  <?
 if($row5["target"]!="")
 {
 ?>
   <h2> miRNA_target </h2>
   <h4> ID:  <? echo $row1["id"]; ?>  </h4>
   <h4> Target: <? echo $row5["target"]; ?>  </h4>
   <h4> Source: <? echo $row5["source"]; ?> </h4>
 
<? } ?>


</div>
</div>

<div class="footer">
<table  width="960" style="font-size:14px">
    <tr>
        <td align="center">Copyright &copy; <a href="http://www.bioguo.org" target=_blank>Guo Lab</a>, 
                <a href="http://bioinfo.hust.edu.cn/" target=_blank>Bioinformatics & Molecular Imaging Key Lab</a>;
                <a href="http://www.hust.edu.cn/" target=_blank>HUST</a>, China.
        </td>
    </tr> 
    <tr>         
        <td align="center" >
            We encourage authors and readers to <a href="aboutus.php">contact us</a> to report errors or submit new data to microRNASNP. Last Modified: 2010-08-18
        </td>
    </tr>
</table>
</div>
</div>
</body>
</html>
