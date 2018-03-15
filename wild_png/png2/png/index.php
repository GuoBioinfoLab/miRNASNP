<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.STYLE1 {
	font-size: 18px;
	color:#5E2B00;
}
.STYLE2 {
	font-size: 24px;
	font-weight: bold;
	color: #FF0000;
	}
a{TEXT-DECORATION:none;
         color:#0000FF;
		 
		 }

.top
{
float:left;
font-size:300%;
width:auto;
line-height:80%;
}



-->
</style>
<!-- TemplateBeginEditable name="doctitle" -->
<title>
miRNASNP
</title>
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
  function choice(sobj)
  {var id1="options";
   var id2="option"+sobj;
   D(id1).style.display="none";
   D(id2).style.display="block";
  }
  function backchoice(sobj)
  { var id1="options";
   var id2="option"+sobj;
   D(id1).style.display="block";
   D(id2).style.display="none";
  } 
  function active(sobj)
  { var id1="option_"+sobj;
    var id2="newoption_"+sobj;
	D(id1).style.display="none";
	D(id2).style.display="block";
  }	
  function unactive(sobj)
  { var id1="option_"+sobj;
    var id2="newoption_"+sobj;
	D(id1).style.display="block";
	D(id2).style.display="none";
  }	
  var act; 
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
var pp=0;
function change()
{if(pp==0)
   {over('thespecies',350);
    pp=1;
   }
   else
   {out('thespecies',0);
    pp=0;
   }
}   	
  </script>
<!-- TemplateEndEditable -->
<!-- TemplateBeginEditable name="head" -->
<!-- TemplateEndEditable -->
</head>

  

<body>

<div class="container">
<div class='header'><img src="logo2.jpg" /></div>
<div class="left">
     <div style="margin-left:5px;padding-top:10px">
       <form action="theListofRNA.php" method="get">
	      
	             <input type="text" name="terms" value="hsa-mir-125a" style="width:100px"/>
				 <input type="submit" value="Quick" />
       </form> 
	     (e.g. hsa-mir-125a or rs12975333 )
     </div>
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
         <li>miRNAs: 1048</li>
         <li>dbSNP 131: 23392344</li>
       </ul>
       other species:<br/>
       &nbsp;&nbsp;see document 
	</div>
</div>
<div class="content">
   
   <div>
     <div style="float:left;color:#600000;font-size:30px;font-family:Arial, Helvetica, sans-serif;padding-top:25px" >
       Welcome to the website of miRNASNP. 
     </div>
     
   </div> 
   
  
   <br/>
      <br/>
	     <br/>
		
   <p class="STYLE3">    <span class="top" style="width:auto"> M</span>icroRNAs (miRNAs) are endogenous ~22 nt RNAs which have been documented that can play important regulatory roles in animals and plants by targeting mRNAs for cleavage or translational repression. Some single nucleotide polymorphisms (SNPs) in pre-micorRNAs are reported to affect the product of mature miRNAs or decrease their function and some SNPs in 3’UTRs have been validated having severe repressive effects. The aim of this website is to provide the lastest resource of the miRNAs related SNPs. Five major modules are provided as follows. Users can browse or search the database in different levels.

   </p>
   
   <div style="display:none">
      <a href="theListofRNA.php?species=human"> 
	     <div id="home1-1" style="display:block" onmouseover="active(1)">
		  <img src="home2-1.jpg" border="0"/>
         </div>
		 <div id="home2-1" style="display:none" onmouseout="unactive(1)">
		  <img src="home-1.jpg" border="0"/>
         </div>
	  </a>
   </div>
   <div style="margin-top:35px;display:none">
        <div id="home1-2" style="display:block;cursor:pointer" onmouseover="active(2)">
		  <img src="home2-2.jpg" border="0" />
         </div>
		 <div id="home2-2" style="display:none;cursor:pointer" onmouseout="unactive(2)" onclick="change()">
		  <img src="home-2.jpg" border="0" />
         </div>
     <div style="margin-left:50px;overflow:hidden;height:0px" id="thespecies2">
      <a href="theListofRNA.php?species=chimp"> <img src="chimp.gif"  border="0" style="margin-left:0px;margin-right:30px"/></a> 
      <a href="theListofRNA.php?species=mouse"> <img src="mouse.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
      <a href="theListofRNA.php?species=rattus"> <img src="rat.jpg"  border="0" style="margin-left:30px;margin-right:30px"/></a><a href="theListofRNA.php?species=dog"><img src="dog.jpg"  border="0" style="margin-left:10px;margin-right:30px"/></a><br/>
    
	 <a href="theListofRNA.php?species=chimp" style="margin-left:30px;margin-right:60px"><b>Chimpanzee</b></a> 
   <a href="theListofRNA.php?species=mouse" style="margin-left:60px;margin-right:70px"><b> Mouse</b></a> 
	 <a href="theListofRNA.php?species=rattus" style="margin-left:70px;margin-right:65px"><b>Rat</b></a> 
	 <a href="theListofRNA.php?species=dog" style="margin-left:65px;"><b>Dog</b></a> 
	 
	 <br/>
	
	  <a href="theListofRNA.php?species=horse"> <img src="horse.jpg" border="0" style="margin-left:0px;margin-right:30px"/></a> 
	  <a href="theListofRNA.php?species=cow"> <img src="cow.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
	 <a href="theListofRNA.php?species=chicken"> <img src="chicken.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
	 <a href="theListofRNA.php?species=zebrafish"> <img src="zebrafish.jpg"  border="0" style="margin-left:30px;"/></a>
	 <br />
	  
	  <a href="theListofRNA.php?species=horse" style="margin-left:50px;margin-right:70px"><b>Horse</b></a>
	  <a href="theListofRNA.php?species=cow" style="margin-left:70px;margin-right:70px"><b>Cow</b></a>
	 <a href="theListofRNA.php?species=chicken" style="margin-left:70px;margin-right:50px"><b>Chicken</b></a>
	 <a href="theListofRNA.php?species=zebrafish" style="margin-left:50px;"><b>Zebrafish</b></a> 
     </div>
    </div>  
   
   <div style="margin-top:35px;display:none">
     <a href="theListofRNA.php?terms1=all"> 
	 <p style="font-size:36px;font-family:Arial, Helvetica, sans-serif;color:#0000FF;">
	    <div id="home1-3" style="display:block;" onmouseover="active(3)">
		  <img src="home2-3.jpg" border="0" />
         </div>
		 <div id="home2-3" style="display:none;" onmouseout="unactive(3)">
		  <img src="home-3.jpg" border="0" />
         </div>
     </p>
     </a>
	 
	 <div style="margin-left:50px">
	 <img src="cho2.PNG" usemap="#chomap" border="0"  />	 </div>
   </div>
    
   <div style="display:none">
   <p style="font-family:Arial, Helvetica, sans-serif">
   <b>Browse by position:    </b> <br/>
    <form action="theListofRNA.php" method="get">
	&nbsp;&nbsp;  SNPs in the flanking regions  : 
	             <input type="text" name="terms1" value="hsa-mir-449b"/>
				 <input type="submit" value="Search" />
    </form> 
	    
	
	 
	  
	<form  action="theListofRNA.php" method="get">
	 &nbsp;&nbsp;  SNPs on the seed regions :        
		    <select name="miRNA" value="hsa-mir-4252">
			  <option value="hsa-mir-105-2">hsa-mir-105-2</option>
			  <option value="hsa-mir-1184-1">hsa-mir-1184-1</option>
			  <option value="hsa-mir-1184-2">hsa-mir-1184-2</option>
			  <option value="hsa-mir-1184-3">hsa-mir-1184-3</option>
			  <option value="hsa-mir-1203">hsa-mir-1203</option>
			  <option value="hsa-mir-1269">hsa-mir-1269</option>
			  <option value="hsa-mir-1275">hsa-mir-1275</option>
			  <option value="hsa-mir-1291">hsa-mir-1291</option>
			  <option value="hsa-mir-1321">hsa-mir-1321</option>
			  <option value="hsa-mir-1322">hsa-mir-1322</option>
			  <option value="hsa-mir-148b">hsa-mir-148b</option>
			  <option value="hsa-mir-154">hsa-mir-154</option>
			  <option value="hsa-mir-1826">hsa-mir-1826</option>
			  <option value="hsa-mir-1911">hsa-mir-1911</option>
			  <option value="hsa-mir-196a-2">hsa-mir-196a-2</option>
			  <option value="hsa-mir-208b">hsa-mir-208b</option>
			  <option value="hsa-mir-220a">hsa-mir-220a</option>
			  <option value="hsa-mir-2277">hsa-mir-2277</option>
			  <option value="hsa-mir-25">hsa-mir-25</option>
			  <option value="hsa-mir-28">hsa-mir-28</option>
			  <option value="hsa-mir-299">hsa-mir-299</option>
			  <option value="hsa-mir-3130-1">hsa-mir-3130-1</option>
			  <option value="hsa-mir-3130-2">hsa-mir-3130-2</option>
			  <option value="hsa-mir-3130-3">hsa-mir-3130-3</option>
			  <option value="hsa-mir-3130-4">hsa-mir-3130-4</option>
			  <option value="hsa-mir-3144">hsa-mir-3144</option>
			  <option value="hsa-mir-3152">hsa-mir-3152</option>
			  <option value="hsa-mir-3159">hsa-mir-3159</option>
			  <option value="hsa-mir-3161">hsa-mir-3161</option>
			  <option value="hsa-mir-3175">hsa-mir-3175</option>
			  <option value="hsa-mir-3195">hsa-mir-3195</option>
			  <option value="hsa-mir-3198">hsa-mir-3198</option>
			  <option value="hsa-mir-323b">hsa-mir-323b</option>
			  <option value="hsa-mir-339">hsa-mir-339</option>
			  <option value="hsa-mir-34a">hsa-mir-34a</option>
			  <option value="hsa-mir-373">hsa-mir-373</option>
			  <option value="hsa-mir-379">hsa-mir-379</option>
			  <option value="hsa-mir-412">hsa-mir-412</option>
			  <option value="hsa-mir-4252">hsa-mir-4252 </option>
			  
			  <option value="hsa-mir-4254">hsa-mir-4254</option>
			  <option value="hsa-mir-4265">hsa-mir-4265</option>
			  <option value="hsa-mir-4273">hsa-mir-4273</option>
			  <option value="hsa-mir-4274">hsa-mir-4274</option>
			  <option value="hsa-mir-4302">hsa-mir-4302</option>
			  <option value="hsa-mir-449b">hsa-mir-449b</option>
			   <option value="hsa-mir-509-2">hsa-mir-509-2</option>
			   <option value="hsa-mir-516b-1">hsa-mir-516b-1</option>
			  <option value="hsa-mir-520c3">hsa-mir-520c</option>
			  <option value="hsa-mir-548l">hsa-mir-548l</option>
			  <option value="hsa-mir-548h-3">hsa-mir-548h-3</option>
			  <option value="hsa-mir-548u">hsa-mir-548u</option>
			  <option value="hsa-mir-550-1">hsa-mir-550-1</option>
			  <option value="hsa-mir-556">hsa-mir-556</option>
			  <option value="hsa-mir-568">hsa-mir-568</option>
			  <option value="hsa-mir-576">hsa-mir-576</option>
			  <option value="hsa-mir-581">hsa-mir-581</option>
			  <option value="hsa-mir-586">hsa-mir-586</option>
			  <option value="hsa-mir-596">hsa-mir-596</option>
			  <option value="hsa-mir-605">hsa-mir-605</option>
			  <option value="hsa-mir-606">hsa-mir-606</option>
			  <option value="hsa-mir-608 ">hsa-mir-608 </option>
			  <option value="hsa-mir-625">hsa-mir-625</option>
			  <option value="hsa-mir-627">hsa-mir-627</option>
			  <option value="hsa-mir-628">hsa-mir-628</option>
			  <option value="hsa-mir-629">hsa-mir-629</option>
			  <option value="hsa-mir-646">hsa-mir-646</option>
			  <option value="hsa-mir-92a-1">hsa-mir-92a-1</option>
		      <option value="hsa-mir-92b">hsa-mir-92b</option>
			  <option value="hsa-mir-933">hsa-mir-933</option>
			  <option value="hsa-mir-940">hsa-mir-940</option>
			  <option value="hsa-mir-941-2">hsa-mir-941-2</option>
			  <option value="hsa-mir-941-3">hsa-mir-941-3</option>
			  <option value="hsa-mir-944">hsa-mir-944</option>
		    </select> 
			<input type="submit" value="Search" />
	  </form>
	 <form action="theListofRNA.php" method="get">
	&nbsp;&nbsp;  SNPs on the pre-miRNAs except seed : 
	             <input type="text" name="terms" value="hsa-mir-449b"/>
				 <input type="submit" value="Search" />
		  </form> 
    
	
    
   </p>
  
   <p style="font-family:Arial, Helvetica, sans-serif"><b>We can browse by</b> <span class="STYLE2"> Species</span>: </p>
  <p><a href="theListofRNA.php?species=human"><img src="human.jpg" border="0"/></a>
 
 <img src="cho2.PNG" usemap="#chomap" border="0"  /> 
  <map name="chomap" id="chomap">
  <area shape="rect" coords="0,129,10,149" href="theListofRNA.php?terms1=all&chr=chr1" alt="1" />
  <area shape="rect" coords="31,132,41,152" href="theListofRNA.php?terms1=all&chr=chr2" alt="2" />
  
    <area shape="rect" coords="65,130,75,150" href="theListofRNA.php?terms1=all&chr=chr3" alt="3" />
    <area shape="rect" coords="98,131,108,151" href="theListofRNA.php?terms1=all&chr=chr4" alt="4" />
    <area shape="rect" coords="132,130,142,150" href="theListofRNA.php?terms1=all&chr=chr5" alt="5" />
    <area shape="rect" coords="165,129,175,149" href="theListofRNA.php?terms1=all&chr=chr6" alt="6" />
    <area shape="rect" coords="198,128,208,148" href="theListofRNA.php?terms1=all&chr=chr7" alt="7" />
    <area shape="rect" coords="230,129,240,149" href="theListofRNA.php?terms1=all&chr=chr8" alt="8" />
    <area shape="rect" coords="263,125,273,145" href="theListofRNA.php?terms1=all&chr=chr9" alt="9" />
    <area shape="rect" coords="297,129,307,149" href="theListofRNA.php?terms1=all&chr=chr10" alt="10" />
    <area shape="rect" coords="329,126,339,146" href="theListofRNA.php?terms1=all&chr=chr11" alt="11" />
    <area shape="rect" coords="362,128,376,148" href="theListofRNA.php?terms1=all&chr=chr12" alt="12" />
    <area shape="rect" coords="396,127,409,147" href="theListofRNA.php?terms1=all&chr=chr13" alt="13" />
    <area shape="rect" coords="431,126,441,146" href="theListofRNA.php?terms1=all&chr=chr14" alt="14" />
    <area shape="rect" coords="462,126,477,146" href="theListofRNA.php?terms1=all&chr=chr15" alt="15" />
    <area shape="rect" coords="495,127,511,147" href="theListofRNA.php?terms1=all&chr=chr16" alt="16" />
    <area shape="rect" coords="528,127,543,147" href="theListofRNA.php?terms1=all&chr=chr17" alt="17" />
    <area shape="rect" coords="561,127,576,147" href="theListofRNA.php?terms1=all&chr=chr18" alt="18" />
    <area shape="rect" coords="595,128,610,148" href="theListofRNA.php?terms1=all&chr=chr19" alt="19" />
    <area shape="rect" coords="625,127,645,147" href="theListofRNA.php?terms1=all&chr=chr20" alt="20" />
	 <area shape="rect" coords="662,127,672,147" href="theListofRNA.php?terms1=all&chr=chr21" alt="21" />
	  <area shape="rect" coords="695,125,705,145" href="theListofRNA.php?terms1=all&chr=chr22" alt="22" />
	   <area shape="rect" coords="728,128,738,148" href="theListofRNA.php?terms1=all&chr=chrX" alt="X" />
	    <area shape="rect" coords="790,105,805,125" href="theListofRNA.php?terms1=all&chr=chrY" alt="Y" />
	
  <area shape="rect" coords="1,4,12,117" href="theListofRNA.php?terms1=all&chr=chr1" alt="1" />
  <area shape="rect" coords="32,9,44,116" href="theListofRNA.php?terms1=all&chr=chr2" alt="2" />
    <area shape="rect" coords="65,26,73,114" href="theListofRNA.php?terms1=all&chr=chr3" alt="3" />
    <area shape="rect" coords="98,34,108,114" href="theListofRNA.php?terms1=all&chr=chr4" alt="4" />
    <area shape="rect" coords="132,34,142,114" href="theListofRNA.php?terms1=all&chr=chr5" alt="5" />
    <area shape="rect" coords="165,39,175,114" href="theListofRNA.php?terms1=all&chr=chr6" alt="6" />
    <area shape="rect" coords="199,44,209,114" href="theListofRNA.php?terms1=all&chr=chr7" alt="7" />
    <area shape="rect" coords="230,52,240,117" href="theListofRNA.php?terms1=all&chr=chr8" alt="8" />
    <area shape="rect" coords="266,55,276,115" href="theListofRNA.php?terms1=all&chr=chr9" alt="9" />
    <area shape="rect" coords="295,53,305,113" href="theListofRNA.php?terms1=all&chr=chr10" alt="10" />
    <area shape="rect" coords="329,55,339,115" href="theListofRNA.php?terms1=all&chr=chr11" alt="11" />
    <area shape="rect" coords="360,57,374,117" href="theListofRNA.php?terms1=all&chr=chr12" alt="12" />
    <area shape="rect" coords="396,57,409,117" href="theListofRNA.php?terms1=all&chr=chr13" alt="13" />
    <area shape="rect" coords="431,59,441,119" href="theListofRNA.php?terms1=all&chr=chr14" alt="14" />
    <area shape="rect" coords="460,65,475,115" href="theListofRNA.php?terms1=all&chr=chr15" alt="15" />
    <area shape="rect" coords="495,71,511,116" href="theListofRNA.php?terms1=all&chr=chr16" alt="16" />
    <area shape="rect" coords="527,73,542,118" href="theListofRNA.php?terms1=all&chr=chr17" alt="17" />
    <area shape="rect" coords="562,75,577,120" href="theListofRNA.php?terms1=all&chr=chr18" alt="18" />
    <area shape="rect" coords="593,72,608,117" href="theListofRNA.php?terms1=all&chr=chr19" alt="19" />
    <area shape="rect" coords="630,75,640,120" href="theListofRNA.php?terms1=all&chr=chr20" alt="20" />
	<area shape="rect" coords="661,75,671,120" href="theListofRNA.php?terms1=all&chr=chr21" alt="21" />
	<area shape="rect" coords="695,77,705,122" href="theListofRNA.php?terms1=all&chr=chr22" alt="22" />
	<area shape="rect" coords="727,43,741,121" href="theListofRNA.php?terms1=all&chr=chrX" alt="X" />
	<area shape="rect" coords="790,50,815,95" href="theListofRNA.php?terms1=all&chr=chrY" alt="Y" />
  </map></p>
     <div style="font-family:Arial, Helvetica, sans-serif;">
  <p>  &nbsp;&nbsp;<a href="theListofRNA.php?species=human"> <b> Human </b> </a>   
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <span style="font-family:Arial, Helvetica, sans-serif"> We can also browse by chromosome in human </span>
	  </p>
  <p>
     <a href="theListofRNA.php?species=chimp"> <img src="chimp.gif"  border="0" style="margin-left:10px;margin-right:10px"/></a> 
     <a href="theListofRNA.php?species=mouse"> <img src="mouse.jpg" border="0" style="margin-left:10px;margin-right:10px"/></a> 
     <a href="theListofRNA.php?species=rattus"> <img src="rat.jpg"  border="0" style="margin-left:10px;margin-right:10px"/></a>
	 <a href="theListofRNA.php?species=dog"> <img src="dog.jpg"  border="0" style="margin-left:10px;margin-right:10px"/></a> 
    
	 
	 <br/>
    
	 <a href="theListofRNA.php?species=chimp" style="margin-left:30px;margin-right:45px"><b>Chimpanzee</b></a> 
   <a href="theListofRNA.php?species=mouse" style="margin-left:45px;margin-right:50px"><b> Mouse</b></a> 
	 <a href="theListofRNA.php?species=rattus" style="margin-left:50px;margin-right:55px"><b>Rat</b></a> 
	 <a href="theListofRNA.php?species=dog" style="margin-left:55px;margin-right:55px"><b>Dog</b></a> 
	 
	 <br/>
	
	  <a href="theListofRNA.php?species=horse"> <img src="horse.jpg" border="0" style="margin-left:10px;margin-right:10px"/></a> 
	  <a href="theListofRNA.php?species=cow"> <img src="cow.jpg" border="0" style="margin-left:10px;margin-right:10px"/></a> 
	 <a href="theListofRNA.php?species=chicken"> <img src="chicken.jpg" border="0" style="margin-left:10px;margin-right:10px"/></a> 
	 <a href="theListofRNA.php?species=zebrafish"> <img src="zebrafish.jpg"  border="0" style="margin-left:10px;margin-right:10px"/></a>
	 <br />
	  
	  <a href="theListofRNA.php?species=horse" style="margin-left:50px;margin-right:60px"><b>Horse</b></a>
	  <a href="theListofRNA.php?species=cow" style="margin-left:60px;margin-right:50px"><b>Cow</b></a>
	 <a href="theListofRNA.php?species=chicken" style="margin-left:55px;margin-right:30px"><b>Chicken</b></a>
	 <a href="theListofRNA.php?species=zebrafish" style="margin-left:30px;margin-right:50px"><b>Zebrafish</b></a> 
  </p>
  </div>
  </div>
<div id="choiceoption" style="display:none">
  <div id="optionsd" style="display:block">
     <div style="margin-left:265px">
	  <div id="link1" style="display:block;cursor:pointer" >
	   <img src="indexlink1.bmp" onmouseover="active(1)" />
	  </div>
	  <div id="linknew1" style="display:none;cursor:pointer" >
	   <a href="theListofRNA.php?species=human"> <img src="indexlinknew1.bmp" onmouseout="unactive(1)"/> </a>
	  </div>
	 </div>
	 <br/>
	 <div>
	 <div style="float:left;margin-left:20px">
	  <div id="link2" style="display:block;cursor:pointer" >
	   <img src="indexlink2.bmp" onmouseover="active(2)"/>
	  </div>
	  <div id="linknew2" style="display:none;cursor:pointer" >
	   <img src="indexlinknew2.bmp" onmouseout="unactive(2)" onclick="choice(2);change()"/>
	  </div>
	 </div>
	 <div style="margin-left:500px">
	  <div id="link3" style="display:block;cursor:pointer" >
	   <img src="indexlink3.bmp" onmouseover="active(3)"/>
	  </div> 
      <div id="linknew3" style="display:none;cursor:pointer" >
	   <img src="indexlinknew3.bmp" onmouseout="unactive(3)" onclick="choice(3)"/>
	  </div> 
	 </div>
	 </div>
	 
	 <br/>
	 <br/>
	 
	 <div>
	   <div style="float:left;margin-left:60px;">
	               <div id="link4" style="display:block;cursor:pointer" >
	                   <img src="indexlink4.bmp" onmouseover="active(4)"/>
	               </div>
	               <div id="linknew4" style="display:none;cursor:pointer" >
	                   <img src="indexlinknew4.bmp" onmouseout="unactive(4)"/>
	               </div>
	   </div> 
	   <div style="margin-left:420px;">
	               <div id="link5" style="display:block;cursor:pointer" >
	                   <img src="indexlink5.bmp" onmouseover="active(5)"/>
	               </div>
	               <div id="linknew5" style="display:none;cursor:pointer" >
	                   <img src="indexlinknew5.bmp" onmouseout="unactive(5)"/>
	               </div>
	   </div>
	 </div> 
  </div>
  <div id="option2" style="display:none">
    <div>
	<img src="indexlinknew2.bmp" style="margin-left:250px;cursor:pointer" onclick="backchoice(2);change()" />
	<img src="indexlinkothers2.bmp" style="margin-top:30px;cursor:pointer" onclick="backchoice(2);change()"/>
	</div>
	<br/>
	 <div style="margin-left:50px;overflow:hidden;height:0px" id="thespecies">
      <a href="theListofRNA.php?species=chimp"> <img src="chimp.gif"  border="0" style="margin-left:0px;margin-right:30px"/></a> 
      <a href="theListofRNA.php?species=mouse"> <img src="mouse.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
      <a href="theListofRNA.php?species=rattus"> <img src="rat.jpg"  border="0" style="margin-left:30px;margin-right:30px"/></a><a href="theListofRNA.php?species=dog"><img src="dog.jpg"  border="0" style="margin-left:10px;margin-right:30px"/></a><br/>
    
	 <a href="theListofRNA.php?species=chimp" style="margin-left:30px;margin-right:60px"><b>Chimpanzee</b></a> 
   <a href="theListofRNA.php?species=mouse" style="margin-left:60px;margin-right:70px"><b> Mouse</b></a> 
	 <a href="theListofRNA.php?species=rattus" style="margin-left:70px;margin-right:65px"><b>Rat</b></a> 
	 <a href="theListofRNA.php?species=dog" style="margin-left:65px;"><b>Dog</b></a> 
	 
	 <br/>
	
	  <a href="theListofRNA.php?species=horse"> <img src="horse.jpg" border="0" style="margin-left:0px;margin-right:30px"/></a> 
	  <a href="theListofRNA.php?species=cow"> <img src="cow.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
	 <a href="theListofRNA.php?species=chicken"> <img src="chicken.jpg" border="0" style="margin-left:30px;margin-right:30px"/></a> 
	 <a href="theListofRNA.php?species=zebrafish"> <img src="zebrafish.jpg"  border="0" style="margin-left:30px;"/></a>
	 <br />
	  
	  <a href="theListofRNA.php?species=horse" style="margin-left:50px;margin-right:70px"><b>Horse</b></a>
	  <a href="theListofRNA.php?species=cow" style="margin-left:70px;margin-right:70px"><b>Cow</b></a>
	 <a href="theListofRNA.php?species=chicken" style="margin-left:70px;margin-right:50px"><b>Chicken</b></a>
	 <a href="theListofRNA.php?species=zebrafish" style="margin-left:50px;"><b>Zebrafish</b></a> 
     </div>
  </div>
  <div id="option3" style="display:none">
            <div>
			 <img src="indexlinkothers3.bmp" style="margin-top:30px;margin-left:150px;cursor:pointer" onclick="backchoice(3)"/>
	         <img src="indexlinknew3.bmp" style="cursor:pointer" onclick="backchoice(3)" />
	        </div>
			<br/><br/><br/><br/><br/>
           <div style="margin-left:50px">
	          <img src="cho2.PNG" usemap="#chomap" border="0"  />	 
	       </div>
  </div>
</div>  

<div id="options" style="background-image:url(backimage.jpg); background-repeat: no-repeat; display:block">
  <div>	
  <div id="option_1" style="margin-left:370px;margin-top:20px; padding-top:50px; display:block" onmouseover="active(1)">
     <img src="option1.jpg" /> 
  </div>
  <div id="newoption_1" style="margin-left:370px;margin-top:20px; padding-top:50px; display:none" onmouseout="unactive(1)">
     <img src="newoption1.JPG" /> 
  </div>
  </div>
  <div>
  <div id="option_2" style="margin-left:285px; display:block" onmouseover="active(2)">
      <img src="option2.jpg"  />
  </div>
  <div id="newoption_2" style="margin-left:285px; display:none" onmouseout="unactive(2)">
      <img src="newoption2.JPG"  />
  </div>
  </div>
  <div>
  <div id="option_3" style="margin-left:200px; display:block" onmouseover="active(3)">
      <img src="option3.jpg"  />
  </div>
  <div id="newoption_3" style="margin-left:200px; display:none" onmouseout="unactive(3)">
      <img src="newoption3.JPG"  />
  </div>
  </div>
  <div>
  <div id="option_4" style="margin-left:115px; display:block" onmouseover="active(4)">
      <img src="option4.jpg"  />
  </div>
  <div id="newoption_4" style="margin-left:115px; display:none" onmouseout="unactive(4)">
      <img src="newoption4.JPG"  />
  </div>
  </div>
  <div>
  <div id="option_5" style="margin-left:30px; display:block" onmouseover="active(5)">
      <img src="option5.jpg"  />
  </div>
  <div id="newoption_5" style="margin-left:30px; display:none" onmouseout="unactive(5)">
      <img src="newoption5.JPG"  />
  </div>
  </div>
  
</div>
<div id="choice2" style="background-image:url(backimage.jpg); background-repeat: no-repeat; display:block">
   <div id="newoption_2" style="margin-left:370px;margin-top:20px; padding-top:50px;">
      <img src="newoption2.JPG"  />
   </div>
   <div style="margin-left:60px;margin-top:100px">
              <p style="font-family:Arial, Helvetica, sans-serif; font-size:24px">We can also browse by chromosome in human </p>
	          <img src="cho2.PNG" usemap="#chomap" border="0"  />	 
   </div>
</div>

</div>
<div class="footer">
<table  width="960" style="font-size:14px">
    <tr>
        <td align="center">Copyright &copy; <a href="http://www.bioguo.org" target=_blank>Guo Lab</a>, 
                <a href="http://bioinfo.hust.edu.cn/" target=_blank>Bioinformatics & Molecular Imaging Key Lab</a>,
                <a href="http://lifehust.bjsxp01.host.35.com/" target="_blank">College of Life Science and Technology</a>;
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
