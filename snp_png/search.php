<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="main.css" rel="stylesheet" type="text/css" />
<title>search</title>
<style type="text/css">
.headedBox{ 
     
     
     font-size: 16px; 
     color:#000000; 
     text-decoration: none; 
     background-color:#FFEFDF;
	 font-family:Arial, Helvetica, sans-serif;
	 margin-left:15px;
	 border:thin #660000  solid;
	
} 
.headedBox h1{ 
     
     font-size: 20px; 
     font-weight: bold; 
     color:#A23D00;
     text-decoration: none; 
     background-color: #FFFFFF;
     cursor:hand; 
    
} 
 
</style>
</head>

<body>
<div class="container">
<div class='header'><img src="logo2.jpg" /></div>
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
<div class="content">
<h2 style="font-size:24px">Search miRNASNP</h2>

<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">Browse by position</div>
<div class="headedBox">
<form action="theListofRNA.php" method="get">
	&nbsp;&nbsp;  SNPs in the flanking regions  : 
	             <input type="text" name="terms" value="hsa-mir-449b"/>
				 <input type="hidden" name="terms1" value="all" />
				 <input type="submit" value="Search" />
</form> 
<br/>
<form  action="theListofRNA.php" method="get">
	 &nbsp;&nbsp;  SNPs in the seed regions :        
		    <select name="miRNA" value="hsa-mir-4252">
			<option value="hsa-mir-122">hsa-mir-122</option>
			 <option value="hsa-mir-1255b-1">hsa-mir-1255b-1</option>
			<option value="hsa-mir-124-3">hsa-mir-124-3</option>
			<option value="hsa-mir-125a">hsa-mir-125a</option>
			 <option value="hsa-mir-1268">hsa-mir-1268</option>
			  <option value="hsa-mir-1276">hsa-mir-1276</option>
			 <option value="hsa-mir-1302-1">hsa-mir-1302-1</option>
			<option value="hsa-mir-1304">hsa-mir-1304</option>
			 <option value="hsa-mir-1324">hsa-mir-1324</option>
			 <option value="hsa-mir-146a">hsa-mir-146a </option>
			  <option value="hsa-mir-3117">hsa-mir-3117</option>
			  <option value="hsa-mir-3118-1">hsa-mir-3118-1</option>
			  <option value="hsa-mir-3118-2">hsa-mir-3118-2</option>
			  <option value="hsa-mir-3118-3">hsa-mir-3118-3</option>
			  <option value="hsa-mir-3118-4">hsa-mir-3118-4</option>
			   <option value="hsa-mir-3118-5">hsa-mir-3118-5</option>
			  <option value="hsa-mir-3118-6">hsa-mir-3118-6</option>
			   <option value="hsa-mir-3124">hsa-mir-3124</option>
			    <option value="hsa-mir-3125">hsa-mir-3125</option>
			   <option value="hsa-mir-3161">hsa-mir-3161</option>
			    <option value="hsa-mir-3196">hsa-mir-3196</option>
				 <option value="hsa-mir-3199-1">hsa-mir-3199-1</option>
				 <option value="hsa-mir-33a">hsa-mir-33a</option>
			    <option value="hsa-mir-379">hsa-mir-379</option>
			  <option value="hsa-mir-4257">hsa-mir-4257</option>
			    <option value="hsa-mir-4284">hsa-mir-4284</option>
			    <option value="hsa-mir-4293">hsa-mir-4293</option>
				 <option value="hsa-mir-4305">hsa-mir-4305</option>
			  <option value="hsa-mir-431">hsa-mir-431</option>
			   <option value="hsa-mir-499">hsa-mir-499</option>
			   <option value="hsa-mir-449c">hsa-mir-449c</option>
			   <option value="hsa-mir-513a-1">hsa-mir-513a-1</option>
			   <option value="hsa-mir-518d">hsa-mir-518d</option>
			   <option value="hsa-mir-518e">hsa-mir-518e</option>
			 
			  <option value="hsa-mir-557">hsa-mir-557</option>
			   <option value="hsa-mir-585">hsa-mir-585</option>
			   <option value="hsa-mir-593">hsa-mir-593</option>
			 <option value="hsa-mir-627">hsa-mir-627</option>
			 <option value="hsa-mir-642">hsa-mir-642</option>
			   <option value="hsa-mir-662">hsa-mir-662</option>
			   <option value="hsa-mir-7-1">hsa-mir-7-1</option>
			 <option value="hsa-mir-936">hsa-mir-936</option>
			  <option value="hsa-mir-938">hsa-mir-938</option>
			   <option value="hsa-mir-941-3">hsa-mir-941-3</option>
		
			  
		    </select> 
			<input type="hidden" name="species" value="human" />
			<input type="submit" value="Search" />
	  </form>
	  <br/>
	  <form action="theListofRNA.php" method="get">
	&nbsp;&nbsp;  SNPs in the pre-miRNAs except seed : 
	             <input type="text" name="terms" value="hsa-mir-449b"/>
				 <input type="submit" value="Search" />
		  </form> 
</div>
<br/>
<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">By Chromosome in human</div>
<div class="headedBox" style="font-family:Arial, Helvetica, sans-serif">
<p> Select the chromosome and enter the miRNA. Leave
the start/end boxes blank to retrieve all miRNAs on the selected
chromosome.</p>
<form name="mirnaSearch2" METHOD="GET" ACTION="theListofRNA.php" >
                   <select name="chr">
                     <option value="chr1">chr1</option>
					 <option value="chr2">chr2</option>
					 <option value="chr3">chr3</option>
					 <option value="chr4">chr4</option>
					 <option value="chr5">chr5</option>
					 <option value="chr6">chr6</option>
					 <option value="chr7">chr7</option>
					 <option value="chr8">chr8</option>
					 <option value="chr9">chr9</option>
					 <option value="chr10">chr10</option>
					 <option value="chr11">chr11</option>
					 <option value="chr12">chr12</option>
					 <option value="chr13">chr13</option>
					 <option value="chr14">chr14</option>
					 <option value="chr15">chr15</option>
					 <option value="chr16">chr16</option>
					 <option value="chr17">chr17</option>
					 <option value="chr18">chr18</option>
					 <option value="chr19">chr19</option>
					 <option value="chr20">chr20</option>
					 <option value="chr21">chr21</option>
					 <option value="chr22">chr22</option>
					 <option value="chrX">chrX</option>
					</select>
				     &nbsp; 
					 <input type="hidden" name="species" value="human"/>
                     <input type="text" name="miRNA" value="hsa-mir-4252"/>
					 
                     &nbsp; &nbsp;&nbsp;<input type="submit" value="search" />
</form>
</div>
<br/>
<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">Search miRNA in other species</div>
<div class="headedBox">
<p> Enter a miRNA accession, name or SNP: </p>
<form name="mirnaSearch1" METHOD="GET" ACTION="theListofRNA.php" >
  <p>
    <input name="terms">  
   
	         <select name="species">
                   <option value="chicken">chicken</option>
                   <option value="chimp">chimp</option>
				   <option value="cow">cow</option>
				   <option value="dog">dog</option>
				   <option value="horse">horse</option>
				   <option value="mouse">mouse</option>
			       <option value="rattus">rattus</option>
				   <option value="zebrafish">zebrafish</option>
                </select> 
				&nbsp; &nbsp;
    Seed:
  <input type="radio" name="seed" value="in" /> 
    in  
   <input type="radio" name="seed" value="null" />
    NULL
    &nbsp; &nbsp;
	<input type="submit" value="search">
  </p>
</form>
</div>

<br/>

<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">

Targets search</div>
<div class="headedBox">
 <div style="float:left;border-right:thin #660000 solid; ">
 Target gene gain and loss<br /> resulted by SNP in miRNA seed region:
  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                     &nbsp;&nbsp;  Browse by gene
                     <input type="text" name="gene" value="7A5" />
					&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					<input type="submit" name="gainorlost" value="lost"  />
  </form>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                   &nbsp;&nbsp;  Browse by miRNA
					 <input type="text" name="mirna" value="hsa-miR-3117" />
					&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					  <input type="submit" name="gainorlost" value="lost"  />
					  &nbsp;&nbsp;&nbsp;&nbsp;
  </form>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                   &nbsp;&nbsp;  Browse by SNP
					 <input type="text" name="snp" value="rs12402181" />
					&nbsp;&nbsp;&nbsp;
					  <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
 </div>
 <div >
 Target gene gain and loss<br /> resulted by SNP in UTR region:
 <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                  &nbsp;&nbsp;  Browse by gene
					 <input type="text" name="gene" value="A2BP1" />
					&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                   &nbsp;&nbsp; Browse by miRNA
					 <input type="text" name="mirna" value="hsa-miR-892a" />
					&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                   &nbsp;&nbsp; Browse by SNP
					 <input type="text" name="snp" value="rs41279484" />
					&nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;&nbsp;&nbsp;
					 <input type="submit" name="gainorlost" value="lost"  />
  </form>
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
            We encourage authors and readers to <a href="aboutus.php">contact us</a> to report errors or submit new data to miRNASNP. Last Modified: 2010-08-18
        </td>
    </tr>
</table>
</div>
</div>

</body>
</html>
