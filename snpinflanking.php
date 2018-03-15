<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="main.css" rel="stylesheet" type="text/css" />
<title>SNPs in flanking</title>
<script type="text/javascript">
function inini(content)
{var a="<div style='overflow:hidden;height=1200px;width=900px'><img src='";
 var c="'><input type='button' value='close' onclick='loadBox.hide()' style='margin-left:900px'/> </div>";
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
{  this.boxWidth=boxWidth;

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
   
   this.createBox=function()
   {
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
var loadBox= new LightBox(1000,480);

</script> 
<script language="JavaScript">
<!--
//图片按比例缩放
var flag=false;
function DrawImage(ImgD,iwidth,iheight){

iheight=image.height;
if(image.width>0 && image.height>0){
flag=true;
if(image.width/image.height>= iwidth/iheight){
if(image.width>iwidth){ 
ImgD.width=iwidth;

}else{
ImgD.width=image.width; 

}
ImgD.alt=image.width+"×"+image.height;
}
else{
if(image.height>iheight){ 

ImgD.width=(image.width*iheight)/image.height; 
}else{
ImgD.width=image.width; 

}
ImgD.alt=image.width+"×"+image.height;
}
}
} 
//-->
</script>

<style type="text/css">
.bgLayer{ background:#000; opacity:0.5; filter:alpha(opacity=50);z-index:10001;position:absolute;left:0;top:0;}
.boxLayer{ background:#fff; border:4px solid #ccc; overflow:hidden; zoom:1; z-index:10002; position:absolute;padding:8px;}
.boxLayer p{padding:5px 0;text-align:center;}
</style>

<style>a{TEXT-DECORATION:none;
         color:#0000FF;
		 
		 }
    a:hover{
	
	
	}
	.ttt1{
	}
	.ttt2{background-color:#FFE3D9;
	}
</style>
    
</head>

<body>
<div id="container">

<div id='header'>
<img src="image/logo2.jpg" usemap="#chomap2" border="0"  /> 
  <map name="chomap2" id="chomap2">
  <area shape="rect" coords="22,0,305,130" href="index.php" alt="homepage" />
  </map>
  </div>

<div id="left">
     
   
	<?
	   include "sidebarinclude.php";
	?>
</div>


<div id="content">

<h2>&nbsp;SNP in human miRNA flanks (1kb) </h2>
<? 
   $miRNA=$_GET["id"];
   include "connectinclude.php";
   $sqlcontrol1="select * from table8_flank_down where miRNAid='".$miRNA."' order by distance";
   $result = mysql_query($sqlcontrol1);
   
   $sqlcontrol2="select count(*) from table8_flank_down where miRNAid='".$miRNA."'";
   $result2= mysql_query($sqlcontrol2);
   $row2 = mysql_fetch_array($result2);
   $count=$row2["count(*)"];
   $sqlcontrol4="select * from table4_miRNA_SNP where premir='".$miRNA."'";
   $result4=mysql_query($sqlcontrol4);
  
   
   ?>
  <h3 style="font-family:Arial, Helvetica, sans-serif;color:#FF0033" > &nbsp;&nbsp;<? echo $miRNA; ?> </h3>
  <div  id="oDiv" onClick="loadBox.init();inini('snpline.php?id=<? echo $miRNA ?>');loadBox.show()" style="cursor:pointer" title="Click to show accurate image">
		 
		  <img src='snpline.php?id=<? echo $miRNA ?>' onload="javascript:drawImage(this,830,0)" width="830">
         
  </div> 
  <table border="1" style="font-size:14px;margin-left:40px" >
  <tr class="ttt2">
    <td width="120">SNP ID
	 </td>
	 <td width="120">SNP Position
	 </td>
	 <td width="100">Chromosome
	 <td width="100" style="text-align:center">Allele
	 </td>
	 <td width="140" style="text-align:center">Distance relative <br />to 5' pre-miRNA
	 </td>
	 <td width="100" style="text-align:center">Location to pre-miRNA
	 </td>
   </tr>
   <?
   $l=0;
   $p=0;
   
   while($row = mysql_fetch_array($result))
   { 
     if($row["loc"]=='Down'&&$p==0)
      {while($row4 = mysql_fetch_array($result4))
	    {
		 ?>
        <tr class="<? if($l==0){echo "ttt1";$l=1;}else{echo "ttt2";$l=0;} ?>">
          <td><a href="http://www.ncbi.nlm.nih.gov/projects/SNP/snp_ref.cgi?rs=<? echo $row["snp_id"]; ?>" target="_blank"> 
		      <? echo $row4["snp_id"]; ?>
		     </a>
		  </td>
		  <td><? echo $row4["snp_pos"]; ?>
		  </td>
		  <td><? echo $row4["chr"]; ?>
		  </td>
		  <td style="text-align:center"><? echo $row4["ref_allele"]; ?>
		  </td>
		  <td style="text-align:center"><? echo $row4["on_premir"]; ?>
		  </td>
		  <td style="text-align:center"><? echo "in"; ?>
		  </td>
	     </tr>
         <?
	   }
	   
	   $p=1;
	  } 
	 ?>
       <tr class="<? if($l==0){echo "ttt1";$l=1;}else{echo "ttt2";$l=0;} ?>">
          <td><a href="http://www.ncbi.nlm.nih.gov/projects/SNP/snp_ref.cgi?rs=<? echo $row["snp_id"]; ?>" target="_blank"> 
		        <? echo $row["snp_id"]; ?>
			   </a>
		  </td>
		  <td><? echo $row["snp_pos"]; ?>
		  </td>
		  <td><? echo $row["chr"] ?>
		  </td>
		  <td style="text-align:center"><? echo $row["refallele"]; ?>
		  </td>
		  <td style="text-align:center"><? echo $row["distance"]; ?>
		  </td>
		  <td style="text-align:center"><? echo $row["loc"]; ?>
		  </td>
	   </tr>
     <?
   }
   ?>
   </table>
</div>
<? 
include "footerinclude.php";
?>
