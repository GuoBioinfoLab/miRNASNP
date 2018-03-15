<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link href="main.css" rel="stylesheet" type="text/css" />
<style type="text/css">
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
.ttt1{
	}
.ttt2{background-color:#FFE3D9;
	}
</style>
<title>Targets</title>
</head>
<body>
<div class="container">
<div class='header'><img src="logo2.jpg" />
</div>
<div class="left">
     
     <div style="margin-left:10px;padding-top:10px;">
       <form action="theListofRNA.php" method="get">
	             <input type="text" name="terms" value="hsa-mir-125a" style="width:100px"/>
				 <input type="submit" value="Quick" />
				  (e.g. hsa-mir-125a or rs12975333 )
       </form> 
	 </div>
     <div style="padding-top:0px; margin-top:0px"><img src="sidebar.png" border="0" usemap="#sidemap" />
              <map name="sidemap" id="sidemap">
	          <area shape="rect" coords="2,80,128,106" href="index.php" alt="1" />
              <area shape="rect" coords="43,153,122,175" href="search.php" alt="1" />
	          <area shape="rect" coords="44,226,164,247" href="document.php" alt="1" />
	          <area shape="rect" coords="8,303,140,323" href="download.php" alt="1" />
	          <area shape="rect" coords="26,379,121,398" href="aboutus.php" alt="1" />
	          </map>
     </div>	   
    <div style="margin-left:15px;width:150px; font-size:14px">
        <b>Stats:</b><br/>
        Homo sapiens
         <li>miRNAs: release 16 </li>
        <li>dbSNP version: 131</li>
         Other species:
         <li>see document </li>
    </div>
</div>

<div class="content" style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
 <p style="font-family:Arial, Helvetica, sans-serif"> 
 <span style="color:#FF3300"><span class="top" style="width:auto">F</span>or SNPs in UTRs</span>, we got UTR wild sequence fasta and corresponding allele fasta. Then, we used two target prediction tools (targetscan and miranda) to predict their target sites respectively. Four results are recorded as wild targescan site(WTS), wild miranda site(WMS), SNP targetscan site(STS), SNP miranda site(SMS). If one target site shows in both WTS and WMS, but not in either STS or SMS, we called that the gene lost this target site. On the contrary , if one target both show in STS and SMS, but not in either WTS or WMS, we called the gene gained one target site.
 </p>
 <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by gene
					 <input type="text" name="gene" value="A2BP1" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by miRNA
					 <input type="text" name="mirna" value="hsa-miR-892a" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by SNP
					 <input type="text" name="snp" value="rs41279484" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
<? $gene=$_GET["gene"];
   $mirna=$_GET["mirna"];
   $snp=$_GET["snp"];
   $gainorlost=$_GET["gainorlost"];
   if($mirna==""&&$snp==""&&$gainorlost=="")
   {
    }
   else
	 {
 ?>
 <div id="table2"> 
  <table border="1">
   <tr class="ttt2">
    <td width="100">Gene</td>
	<td width="92">SNP </td>
	<td>SNP location<br /> relative to UTR</td>
	<td width="120">miRNA</td>
	<td>&nbsp;&nbsp;&nbsp;targetscan <br/>UTR-start/end</td>
	<td>&nbsp;&nbsp;&nbsp;Miranda <br/>UTR-start/end </td>
	<td width="60">&nbsp;&nbsp;Status</td>
   </tr>	
   <? $ip="********";
      $user='********';
      $password='********';
      $db="********";
      $conn=mysql_connect($ip,$user,$password) or die("Cannot connect to server!".mysql_error());
      mysql_select_db($db,$conn) or die("Cannot select database!".mysql_error()); 
      if($gene!="")
       $sqlcontrol="select * from gene_target_".$gainorlost." where gene_id='".$gene."'";
      if($mirna!="")
	   $sqlcontrol="select * from gene_target_".$gainorlost." where miRNA_id='".$mirna."'";
	  if($snp!="")
	   $sqlcontrol="select * from gene_target_".$gainorlost." where SNP_id='".$snp."'";
	  $result = mysql_query($sqlcontrol);	
	  $p=1;
	  while($row = mysql_fetch_array($result))
	  {if($p==1) $p=0; else $p=1;
	    ?><tr class="<? if($p==0) echo "ttt1"; else echo "ttt2"; ?>">
		    <td><? echo $row["gene_id"]; ?> </td>
			<td><? echo $row["SNP_id"]; ?> </td>
			<td><? echo $row["snp_loc"]; ?> </td>
			<td><? echo $row["miRNA_id"] ?> </td>
			<td style="text-align:center"><? echo $row["T_start"]."-".$row["T_end"] ?> </td>
			<td style="text-align:center"><? echo $row["M_start"]."-".$row["M_end"] ?> </td>
			<td style="text-align:center"><? echo $gainorlost ?> </td>
		   </tr>
		 <?
      }  
   ?>
  </table>
  
 </div>
 
 <? }
 ?>
</div>
</body>
</html>
