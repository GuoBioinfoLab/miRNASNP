<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	// **PREVENTING SESSION HIJACKING**
	// Prevents javascript XSS attacks aimed to steal the session ID
	ini_set('session.cookie_httponly', 1);

	// **PREVENTING SESSION FIXATION**
	// Session ID cannot be passed through URLs
	ini_set('session.use_only_cookies', 1);

	// Uses a secure connection (HTTPS) if possible
	ini_set('session.cookie_secure', 1);
	?>
<?php
 	# Clickjacking: X-Frame-Options header missing
	# Severity: Low
	header('X-Frame-Options: GOFORIT');
	?>
<?php
	// $value=md5("DefendCSRF");
	// setcookie("cookie", $value, time()+3600);
	// HTML form without CSRF protection
	// Severity: Medium
	if (!isset($_SESSION['token'])) {
    $token = md5(uniqid(rand(), TRUE));
    $_SESSION['token'] = $token;
    $_SESSION['token_time'] = time();
	}
	else
	{
	    $token = $_SESSION['token'];
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Lang" content="en" />
<meta name="miRNASNP" content="miRNA SNP,microRNA SNP,single nucleotide polymorphisms,miRNA database,microRNA database, SNP database,SNP in miRNA,SNP in miRNA target,miRNA database, microRNA,SNP,database, " />
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
padding-top:0px;
margin-top:0px;
}

.pos
{position:relative;
left:5px;
}

-->
</style>
<!-- TemplateBeginEditable name="doctitle" -->
<title>
	<?php echo $page_title ?>
</title>
<script type="text/javascript">
 window.onload=window.onresize=function(){
 if(document.getElementById("left").clientHeight<document.getElementById("content").clientHeight){
 document.getElementById("left").style.height=document.getElementById("content").offsetHeight+"px";
 }
 else{
 document.getElementById("content").style.height=document.getElementById("left").offsetHeight+"px";
 }
 }

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
   var id2="choice"+sobj;
   D(id1).style.display="none";
   D(id2).style.display="block";
  }
  function backchoice(sobj)
  { var id1="options";
   var id2="choice"+sobj;
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



<body >
<div id="container">
<div id="header" style="margin:0 auto;">
<img src="image/logo2.jpg" usemap="#chomap2" border="0"  />
  <map name="chomap2" id="chomap2">
  <area shape="rect" coords="22,0,305,130" href="index.php" alt="homepage" />
  </map>

</div>
<div id="left">
 <div style="margin-left:10px;padding-top:10px;">
	Link to <a href="http://bioinfo.life.hust.edu.cn/miRNASNP2" target="_blank"><b>miRNASNP v2.0</b></a>
       <form action="quicksearch.php"  method="get">
	             <input type="text" name="terms" value="hsa-mir-125a" style="width:100px"/>
				 <input type="hidden" name="hash" value=<?php echo $_COOKIE['cookie']?>></input>
				 <input type="submit" value="Quick" title="enter miRNA id, ACC, SNP id or gene symbol" />

				  (e.g. hsa-mir-125a or rs12975333 )
       </form>
	 </div>
     <div style="padding-top:0px; margin-top:0px"><img src="image/sidebar.png" border="0" usemap="#sidemap" />
              <map name="sidemap" id="sidemap">
	          <area shape="rect" coords="6,74,127,102" href="index.php" alt="homepage" />
              <area shape="rect" coords="43,143,124,170" href="search.php" alt="search" />
	          <area shape="rect" coords="51,218,164,243" href="document.php" alt="document" />
	          <area shape="rect" coords="8,295,122,320" href="download.php" alt="download" />
	          <area shape="rect" coords="27,369,119,395" href="aboutus.php" alt="aboutus" />
	          </map>
    </div>
    <div style="margin-left:15px;width:150px; font-size:14px">
        <b>Stats:</b><br/>
        Homo sapiens
         <li><a href="http://www.mirbase.org/" target="_blank">miRBase</a>: release 16 </li>
         <li><a href="http://www.ncbi.nlm.nih.gov/projects/SNP/" target="_blank">dbSNP</a> version: 132</li>
         Other species:
         <li>see <a href="document.php" target="_blank">document</a> </li>
    </div>

</div>
