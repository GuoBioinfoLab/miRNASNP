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
<div class='header'>
<img src="logo2.jpg" usemap="#chomap2" border="0"  /> 
  <map name="chomap2" id="chomap2">
  <area shape="rect" coords="22,0,305,130" href="index.php" alt="homepage" />
  </map>
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
	          <area shape="rect" coords="0,74,126,100" href="index.php" alt="homepage" />
              <area shape="rect" coords="45,147,124,169" href="search.php" alt="search" />
	          <area shape="rect" coords="44,220,164,241" href="document.php" alt="document" />
	          <area shape="rect" coords="8,297,140,317" href="download.php" alt="download" />
	          <area shape="rect" coords="26,373,121,392" href="aboutus.php" alt="aboutus" />
	          </map>
     </div>	   
    <div style="margin-left:15px;width:150px; font-size:14px">
       <b>Stats:</b><br/>
        Homo sapiens
         <li><a href="http://www.mirbase.org/" target="_blank">miRNAs</a>: release 16 </li>
         <li><a href="http://www.ncbi.nlm.nih.gov/projects/SNP/" target="_blank">dbSNP</a> version: 131</li>
         Other species:
         <li>see <a href="document.php" target="_blank">document</a> </li>
    </div>
</div>

<div class="content" style="font-family:Arial, Helvetica, sans-serif; font-size:16px">
 <p style="font-family:Arial, Helvetica, sans-serif"> 
 <span style="color:#FF3300"><span class="top" style="width:auto">F</span>or SNPs in UTRs</span>, we got UTR wild sequence fasta and corresponding allele fasta. Then, we used two target prediction tools (targetscan and miranda) to predict their target sites respectively. Four results are recorded as wild targescan site(WTS), wild miranda site(WMS), SNP targetscan site(STS), SNP miranda site(SMS). If one target site shows in both WTS and WMS, but not in either STS or SMS, we called that the gene lost this target site. On the contrary , if one target both show in STS and SMS, but not in either WTS or WMS, we called the gene gained one target site.
 </p>
<? $gene=$_GET["gene"];
   $mirna=$_GET["mirna"];
   $snp=$_GET["snp"];
   $gainorlost=$_GET["gainorlost"];
   ?>
 <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by gene (e.g. A2BP1) &nbsp;
					 <input type="text" name="gene" value="<? if($gene!=""||$mirna!=""||$snp!="") echo $gene; else echo "A2BP1" ;?>" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by miRNA (hsa-miR-892a) &nbsp;
					 <input type="text" name="mirna" value="<? if($gene!=""||$mirna!=""||$snp!="") echo $mirna; else echo "hsa-miR-892a";?>" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                    Browse by SNP (rs41279484) &nbsp;
					 <input type="text" name="snp" value="<? if($gene!=""||$mirna!=""||$snp!="") echo $snp;else echo "rs41279484";?>" />
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
<? 
   if($mirna==""&&$snp==""&&$gene=="")
   {
    }
   else
	 {
 ?>
 <div id="table2"> 
  <table border="1">
   <tr class="ttt2">
    <td width="87">Gene</td>
	<td width="110">miRNA;<br/>SNP</td>
	<td>SNP location<br /> relative to UTR</td>
	
	<td>&nbsp;Target site on<br/>TargetScan UTR</td>
	<td>Target site on<br/>miRanda UTR</td>
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
			<td><a href="http://www.mirbase.org/cgi-bin/query.pl?terms=<? echo $row["miRNA_id"] ?>" target="_blank"> <? echo $row["miRNA_id"] ?> </a>;<br/><a href="http://www.ncbi.nlm.nih.gov/projects/SNP/snp_ref.cgi?rs=<? echo $row["SNP_id"] ?>" target="_blank"> <? echo $row["SNP_id"]; ?> </a></td>
			<td><? echo $row["snp_loc"]; ?> </td>
			
			<td style="text-align:center"><? echo $row["T_start"]."-".$row["T_end"] ?> </td>
			<td style="text-align:center"><? echo $row["M_start"]."-".$row["M_end"]."\n";
			$str=$row["base_pair"];
			
			$enter=0;
			$space=0;
			$space2=0;
			$flag=0;
			$length=0;
			$line4=0;
			$start=$row["M_start"]-1;
			$loc=0;
			?><table border="0" cellpadding="0" ><tr><?
			for($i=0;$i<strlen($str);$i++)
			 {if($str[$i]=="\n")
			    {$enter++;
				 if($enter==4) $length=$length-20;
				}
			  
			  if($enter>=3)
			    if($str[$i]=="\n")
				  {?></tr><tr> <? 
				  
				  }
				else
				  {
				       
				   	?><td><?  if($enter==4)
					             $line4++;
							  if($line4>=17&&$enter==4)
							  {	  if($str[$i+$length+18]!='-')
								    $start++;
								  if($start==$row["snp_loc"])
								   {?> <div style="color:#FF0000"><?
								     echo $str[$i];
									?> </div> <?
								    $loc=$i+$length+18;
								   }
								   else echo $str[$i];
						      }
							  else  
							  {if($enter==5)
							    {if($loc==$i)
								    {?> <div style="color:#FF0000"><?
									 echo $str[$i];
					                 ?> </div> <?
									}
								 else
								  echo $str[$i];
								}
								else
								  echo $str[$i];
					          }
					?></td><?
                    
					if($enter==3) $length++;
				  }
			  
             }
			 ?></tr></table>
             <? $str=str_replace(' ',',', $str);
  $str=str_replace("\n",'$',$str);
               ?>
            
             </td>
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
           Any Comments and suggestions, please <a href="aboutus.php">contact us</a> . Last Modified: 2010-11-21
        </td>
    </tr>
</table>
</div>
</div>
</body>
</html>
