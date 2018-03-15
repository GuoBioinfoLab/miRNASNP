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
 <span style="color:#FF3300"><span class="top" style="width:auto">F</span>or SNPs in seed region</span>, we got their wild sequence fasta and allele fasta. Then, we used two target prediction tools (targetscan and miranda) to predict their target sites respectively. Four results are recorded as wild targescan site(WTS), wild miranda site(WMS), SNP targetscan site(STS) and SNP miranda site(SMS). If one miRNA's target gene shows in both WTS and WMS, but not in either STS or SMS, we called that the miRNA lost this target gene. On the contrary , if one target shows in both STS and SMS, but not in either WTS or WMS, we called the miRNA gained one target gene. 
 </p>
 <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                      Browse by gene
                     <input type="text" name="gene" value="7A5" />
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
   $ip="********";
   $user='********';
   $password='********';
   $db="********";
   $conn=mysql_connect($ip,$user,$password) or die("Cannot connect to server!".mysql_error());
   mysql_select_db($db,$conn) or die("Cannot select database!".mysql_error()); 
   
   
  ?>
      
 <div id="table1">
  <table border="1">
   <tr class="ttt2">
    <td width="100"> 
	  miRNA 
	</td>
	<td width="50">
	  Chromosome
	</td>
	<td width="100">
	 Start
	</td>
	<td width="100">
	 End
	</td>
	<td width="100" style="text-align:center">
	 SNP in seed
	</td>
	<td>
	 Numbers of <br/>
	 gain target genes
	</td>
	<td>
	 Numbers of <br/>
	 lost target gene
	</td>
   </tr>
  <?  $sqlcontrol="select miRNA_id from seed_target_gain group by miRNA_id";
      $result = mysql_query($sqlcontrol);	
	  $p=1;
	  while($row = mysql_fetch_array($result))
	  {if($p==1) $p=0; else $p=1;
	   $sqlcontrolmrna="select * from table2_mature_miRNA where mature_miRNA_id='".$row["miRNA_id"]."'";
	   $sqlcontrolsnp="select SNP_id from seed_target_gain where miRNA_id='".$row["miRNA_id"]."' group by SNP_id";
	   $resultsnp=mysql_query($sqlcontrolsnp);
	   $resultmrna=mysql_query($sqlcontrolmrna);
	   $rowmrna=mysql_fetch_array($resultmrna);
	   while($rowsnp=mysql_fetch_array($resultsnp))
	   {$sqlcontrolpre="select premir from table4_miRNA_SNP where snp_id='".$rowsnp["SNP_id"]."' and miRNA='".$row["miRNA_id"]."'";
	    $resultpre=mysql_query($sqlcontrolpre);
		$rowpre=mysql_fetch_array($resultpre);
		$sqlcontrolstarttoend="select * from table2_mature_miRNA where premiRNA_id='".$rowpre["premir"]."'";
		$resultstarttoend=mysql_query($sqlcontrolstarttoend);
		$rowstarttoend=mysql_fetch_array($resultstarttoend);
		$sqlcontrolchr="select chr from table1_pre_miRNA where id='".$rowpre["premir"]."'";
	    $resultchr=mysql_query($sqlcontrolchr);
	    $rowchr=mysql_fetch_array($resultchr);
	    $sqlcontrolgain="select count(miRNA_id) from seed_target_gain where miRNA_id='".$row["miRNA_id"]."' and SNP_id='".$rowsnp["SNP_id"]."'";
	    $sqlcontrollost="select count(miRNA_id) from seed_target_lost where miRNA_id='".$row["miRNA_id"]."' and SNP_id='".$rowsnp["SNP_id"]."'";
		$resultgain=mysql_query($sqlcontrolgain);
	    $resultlost=mysql_query($sqlcontrollost);
		$rowgain=mysql_fetch_array($resultgain);
	    $rowlost=mysql_fetch_array($resultlost);
	   ?>
	   <tr class="<? if($p==0) echo "ttt1"; else echo "ttt2"; ?>">
	     <td> <? echo $row["miRNA_id"]; ?> </td>
		 <td style="text-align:center"> <? echo $rowchr["chr"]; ?></td>
		 <td> <? echo $rowstarttoend["start_on_chr"]; ?> </td>
		 <td> <? echo $rowstarttoend["end_on_chr"]; ?> </td>
		 <td> <? echo $rowsnp["SNP_id"] ?> </td>
		 <td> <div style="float:left"><? echo $rowgain["count(miRNA_id)"]; ?></div>
		  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" style="float:right"> 
		  <input type="hidden" name="mirna" value="<? echo $row["miRNA_id"]?>" /> 
		  <input type="hidden" name="snp" value="<? echo $rowsnp["SNP_id"]?>" />
		  <input type="hidden" name="gainorlost" value="gain" />
		  <input type="submit" value="details"  style="background-color:#FFA6ED"/> 
		  </form>
		  </td>
		 <td><div style="float:left"> <? echo $rowlost["count(miRNA_id)"]; ?></div> 
		   <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" style="float:right"> 
		  <input type="hidden" name="mirna" value="<? echo $row["miRNA_id"]?>" /> 
		  <input type="hidden" name="snp" value="<? echo $rowsnp["SNP_id"]?>" />
		  <input type="hidden" name="gainorlost" value="lost" />
		  <input type="submit" value="details"  style="background-color:#FFA6ED"/> 
		  </form>
		 </td>
       </tr>
	   <? }} ?>
  </table> 
 </div>
 <? } 
     else
	 {
 ?>
 <div id="table2"> 
  <table border="1">
   <tr class="ttt2">
    <td width="120">miRNA</td>
	<td width="92">SNP </td>
	<td>Target gene</td>
	<td>&nbsp;&nbsp;&nbsp;targetscan <br/>UTR-start/end</td>
	<td>&nbsp;&nbsp;&nbsp;Miranda <br/>UTR-start/end </td>
	<td width="60">&nbsp;&nbsp;Status</td>
	<td width="120">conserved in species</td>
   </tr>	
   <? $ip="********";
      $user='********';
      $password='********';
      $db="********";
      $conn=mysql_connect($ip,$user,$password) or die("Cannot connect to server!".mysql_error());
      mysql_select_db($db,$conn) or die("Cannot select database!".mysql_error()); 
      if($gene!="")
       $sqlcontrol="select * from seed_target_".$gainorlost." where gene_id='".$gene."'";
      else
	   if($snp!=""&&$mirna!="")
	    $sqlcontrol="select * from seed_target_".$gainorlost." where miRNA_id='".$mirna."' and SNP_id='".$snp."'";
	   else
	    $sqlcontrol="select * from seed_target_".$gainorlost." where miRNA_id='".$mirna."' or SNP_id='".$snp."'";
	  
	  $result = mysql_query($sqlcontrol);	
	  $p=1;
	  while($row = mysql_fetch_array($result))
	  {if($p==1) $p=0; else $p=1;
	    ?><tr class="<? if($p==0) echo "ttt1"; else echo "ttt2"; ?>">
		    <td><? echo $row["miRNA_id"]; ?> </td>
			<td><? echo $row["SNP_id"]; ?> </td>
			<td><? echo $row["gene_id"] ?> </td>
			<td style="text-align:center"><? echo $row["T_start"]."-".$row["T_end"] ?> </td>
			<td style="text-align:center"><? echo $row["M_start"]."-".$row["M_end"] ?> </td>
			<td style="text-align:center"><? echo $gainorlost ?> </td>
			<td ><? $str=$row["conserved_in_species"];
			        $pp=0;
					$pl=0;
					$pg=0;
					while($str[$pp]!=""&&$pg<3)
					 {$pp++;
					  if($str[$pp]==" ")
					   {$pl++;$pg++;}
					    else
					   {$pg=0;
					   }
					  if($pl==4)
					    {$pl=0;
						 echo "<br/>";
						}
					  echo $str[$pp];
					 }
					 
					  
					
				  ?></td>
		   </tr>
		 <?
      }  
   ?>
  </table>
  
 </div>
 <div style="float:right"><a href="Targets.php">Back to the list of MiRNA</a></div>
 <? }
 ?>
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
            We encourage authors and readers to <a href="aboutus.php">contact us</a> to report errors or submit new data to miRNASNP. Last Modified: 2010-08-18
        </td>
    </tr>
</table>
</div>

</div>
</body>
</html>
