<?php 
$page_title="miRNASNP:document";

include "head.php";
?>

<div id="content" style="font-family:Georgia, "Times New Roman", Times, serif; padding:10px; font-size:20px">
<br>
<div align="center"><h2>miRNASNP document</h2></div>
<hr / width="98%" size="2" color="grey">

<strong><em>miRNASNP</em></strong> aims at providing the lastest resource of the miRNAs related SNPs such as SNPs in miRNAs precursors,flanking regions and target genes' 3'UTR, which possible affect the interaction of miRNA/target. Five major modules are provided in  our website. Users can go to each module by clicking the corresponding bar on the homepage. 
<img src="image/document_home.jpg" width="780" height="503" />
<h3>First module: SNPs in human pre-miRNAs</h3>
<p>This module contains SNPs in human pre-miRNAs and relative information refer to miRNA or SNP. Users can easily get the infomation of miRNA host, cluster, sequence, validated target data and SNP location, energy change and so on.</p>
 <ul>
      <li>
        <span class="red">SNP categories</span>: We further classified SNPs in pre-miRNAs into in_seed, in_mature excluding the seed region and pre-miRNA excluding the mature region by their location. 

      </li>
      <li><span class="red">miRNA host information </span>was gained by  mapping each miRNA genomic location to gene location and then miRNAs were classified into genic and intergenic miRNAs.</li>
      <li><span class="red">Cluster</span>: If the distance from one miRNA to another miRNA was less than 5kbs, the two miRNAs are in 5kb cluster. Similarity, if the distance between two miRNAs was less than 10kb, the two miRNAs are in 10kb cluster.</li>
      <li> <span class="red">Validated target</span>: We downloaded all experimentally verified human target genes from the <a href="http://diana.cslab.ece.ntua.gr/tarbase/">TarBase database </a>and <a href="http://www.mir2disease.org/">miR2Disease database</a>.</li>
        <li><span class="red">Minimum free energies</span> of pre-miRNAs were completed by RNAfold tool.</li>
      <li><span class="red">Photoes of the secondary stucture</span> of pre-miRNA were done by RNAplot tool. Users can download the photoes in the download page.</li>

</ul>
<p><img src="image/document_m12.jpg" width="799" height="2164" /></p>
<p>&nbsp;</p>
<h3>Second module: SNPs in human miRNA flanking regions</h3>
<p>This module displays the SNPs in the human miRNA flanking regions. The red horizontal line represents the precursor miRNA and black horizontal lines represent this miRNA 1kb flanking regions. Vertical lines represent SNPs in this region.</p>
<p><img src="image/document_m2.jpg" width="808" height="449" /></p>
<p>&nbsp;</p>
<h3>Third module: SNPs in other species</h3>
<p>This module provides SNPs in other 8 species. miRNA&nbsp;infomation&nbsp;of&nbsp;9&nbsp;species&nbsp;was&nbsp;downloaded&nbsp;from&nbsp;the&nbsp;miRBase&nbsp;database (Release&nbsp;16.0)
    
        <a href="http://www.mirbase.org/index.shtml">http://www.mirbase.org/index.shtml</a>. 
   
    SNPs&nbsp;coordinate&nbsp;genomic&nbsp;information&nbsp;were&nbsp;downloaded&nbsp;from&nbsp;NCBI&nbsp;ftp&nbsp;database (<a href="ftp://ftp.ncbi.nlm.nih.gov/snp/">ftp://ftp.ncbi.nlm.nih.gov/snp/</a>). 
    
 
</p>
<p><img src="image/document_m3.jpg" width="712" height="404" /></p>

<h3>Fourth module: targets gain/loss by SNP in miRNA seed</h3>
<p>This module provides the effect of SNPs in miRNA seed regions. For SNPs in miRNA seed region, we got miRNA wild sequence and SNP allele sequence. Then, we used two target prediction tools (targetscan<a href="http://www.targetscan.org/vert_50/">http://www.targetscan.org</a>/)and miranda <a href="http://www.microrna.org/microrna/getDownloads.do">(http://www.microrna.org)</a> to predict their target sites respectively. Four categories of results are recorded as wild targescan site (WT), wild miranda site (WM), SNP targetscan site (ST) and SNP miranda site (SM). If one miRNA's target gene shows in both WT and WM, but not in either ST or SM, we called that the miRNA lost this target gene. On the contrary, if one target shows in both ST and SM, but not in either WT or WM, we called the miRNA gained one target gene.
  <img src="image/document_m4.jpg" width="777" height="374" />
</p>
<h3>Fifth module: targets gain/loss by SNP in gene's 3'UTR</h3>
<p>This module provides the effect of SNPs in genes' 3'UTRs.
 For SNPs in one gene UTR, we got wild type 3'UTR sequence and corresponding SNP 3'UTR sequence. Then, we used two target prediction tools (targetscan and miranda) to predict their target sites respectively. Four categories of results are recorded as wild targescan site (WT), wild miranda site (WM), SNP targetscan site (ST), SNP miranda site (SM). If one target site shows in both WT and WM, but not in either ST or SM, we called that the gene lost this target site. On the contrary, if one target both show in ST and SM, but not in either WT or WM, we called the gene gained one target site. 
</p>
<p><img src="image/document_m5.jpg" width="768" height="464" />
</p>

<p></p>
<h3>Binding energy change by SNPs in our dataset</h3>
<p>
In order to increase the accuracy of our prediction, we further used RNAhybrid to quantitative measure the binding energy change between wild-miRNA/target and SNP-miRNA/target. For each miRNA/target loss or gain pair, we obtained the sequence (+/-50 bp) of target site and used RNAhybrid (Kruger and Rehmsmeier, 2006) to calculate the minimum hybridization energy of the miRNA-target interaction.  The averages of energy changes caused by SNPs were 11.5 kcal/mol and 11.7 kcal/mol in target loss and target gain dataset, respectively. The 25%, 50%, 75% energy change of all pairs are <2.3, <10, <20 kcal/mol respectively. Users can choose their interested data according to their need. 
</p>
<p><img src="image/energy_change.png" /></p>
</div>
<?
include "footerinclude.php";

?>
				 		   

