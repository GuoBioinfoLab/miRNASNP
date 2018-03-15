<?php
if(isset($_GET['hash'])){
	if ($_GET['hash'] != $_COOKIE['cookie'])
	{
		// var_dump($_COOKIE['cookie']);
		echo '<script>
            alert("Input is illegal, you are return back ^.^!");
            window.history.back();
            // document.location.href="/miRNASNP2";
        </script>';
		exit;
	}
}
# Check URL
if ($_SERVER["SCRIPT_NAME"] != $_SERVER["PHP_SELF"]) {
    echo '<script>
        alert("Input is illegal, you are return back ^.^!");
        // window.history.back();
        document.location.href="/miRNASNP2";
    </script>';
    exit;
}

# Exclude illegal query
if (preg_match("/[\'\(\):;\"<>]/", urldecode($_SERVER["QUERY_STRING"]))) {
    echo '<script>
        alert("Input is illegal, you are return back ^.^!");
        // window.history.back();
        document.location.href="/miRNASNP2";
    </script>';
    exit;
}
?>
	<?
	$page_title="miRNASNP:search";
	   include "head.php";
	?>

<div id="content" style="font-family:Arial, Helvetica, sans-serif">
<h2 style="font-size:24px"> &nbsp;&nbsp;Search miRNASNP</h2>

<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">Search by SNP type</div>
<div class="headedBox">
<form action="theListofRNA.php" method="get">
	&nbsp;&nbsp;  SNPs in the flanking regions  :
	<input type="hidden" name="token" value="<?php echo $token; ?>" />
	             <input type="text" name="terms" value="hsa-mir-449b"/>
				 <input type="hidden" name="terms1" value="flanking" />
				 <input type="submit" value="Search" />
</form>
<br/>
<form  action="theListofRNA.php" method="get">
	 &nbsp;&nbsp;  SNPs in the seed regions :
	 <input type="hidden" name="token" value="<?php echo $token; ?>" />
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
	<input type="hidden" name="token" value="<?php echo $token; ?>" />
	             <input type="text" name="terms" value="hsa-mir-449b"/>
				 <input type="submit" value="Search" />
		  </form>
</div>
<br/>
<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">Search miRNA in other species</div>
<div class="headedBox">
<p>&nbsp;&nbsp;  Enter a miRNA accession, name or SNP: </p>
<form name="mirnaSearch1" METHOD="GET" ACTION="theListofRNA.php" >
  <p>&nbsp;&nbsp;
	  <input type="hidden" name="token" value="<?php echo $token; ?>" />
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

    &nbsp; &nbsp;
	<input type="submit" value="search">
  </p>
</form>
</div>

<br/>

<div style="font-size: 20px; font-weight: bold; color:#A23D00; margin-left:15px">

Targets search</div>
<div class="headedBox">
 <div style="float:left;border-right:2px #660000 solid;width:420px; ">
&nbsp; Target gene gain and loss<br /> &nbsp;&nbsp;resulted by SNP in miRNA seed region:
<p>  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                     &nbsp;&nbsp;  Browse by gene
					 <input type="hidden" name="token" value="<?php echo $token; ?>" />
                     <input type="text" name="gene" value="ERG" size="10"/>
					&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					<input type="submit" name="gainorlost" value="loss"  />
  </form>
  </p>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                   &nbsp;&nbsp;  Browse by miRNA
				   <input type="hidden" name="token" value="<?php echo $token; ?>" />
					 <input type="text" name="mirna" value="hsa-miR-3117" size="10" />
					&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					  <input type="submit" name="gainorlost" value="loss"  />

  </form>
  <br/>
<p>  <form name="mirnaSearch2" METHOD="GET" ACTION="Targets.php" >
                   &nbsp;&nbsp;  Browse by SNP
				   <input type="hidden" name="token" value="<?php echo $token; ?>" />
					 <input type="text" name="snp" value="rs12402181" size="10"/>
					&nbsp;
					  <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					 <input type="submit" name="gainorlost" value="loss"  />
  </form> </p>
  <br>
 </div>
 <div >
&nbsp; Target gene gain and loss<br /> &nbsp;&nbsp;resulted by SNP in UTR region:
<p> <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                  &nbsp;&nbsp;  Browse by gene
				  <input type="hidden" name="token" value="<?php echo $token; ?>" />
					 <input type="text" name="gene" value="A2BP1" size="10"/>
					&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					 <input type="submit" name="gainorlost" value="loss"  />
  </form></p>
  <br/>
  <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                   &nbsp;&nbsp; Browse by miRNA
				   <input type="hidden" name="token" value="<?php echo $token; ?>" />
					 <input type="text" name="mirna" value="hsa-miR-892a" size="10"/>
					&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					 <input type="submit" name="gainorlost" value="loss"  />
  </form>
  <br/>
 <p> <form name="mirnaSearch2" METHOD="GET" ACTION="geneTargets.php" >
                   &nbsp;&nbsp; Browse by SNP
				   <input type="hidden" name="token" value="<?php echo $token; ?>" />
					 <input type="text" name="snp" value="rs41279484" size="10"/>
					&nbsp;
					 <input type="submit" name="gainorlost" value="gain" />
					 &nbsp;
					 <input type="submit" name="gainorlost" value="loss"  />
  </form></p>
<br>
  </div>

</div>

</div>
<?
include "footerinclude.php";

?>
