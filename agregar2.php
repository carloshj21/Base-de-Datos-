<?php
	$filo=$_POST['filo'];
	$clase=$_POST['clase'];
	$orden=$_POST['orden'];
	$familia=$_POST['familia'];
	$genero=$_POST['genero'];
	$nomspecie=$_POST['nomspecie'];
	$nomsubspecie=$_POST['nomsubspecie'];
	$nomcientifico=$_POST['nomcientifico'];
	$rank=$_POST['rank'];
	$listing=$_POST['listing'];
	$party=$_POST['party'];
	$listedu=$_POST['listedu'];
	$fullnote=$_POST['fullnote'];
	$distributionnames=$_POST['distributionnames'];
	$isocodes=$_POST['isocodes'];
	$nativenames=$_POST['nativenames'];
	$introduceddistribution=$_POST['introduceddistribution'];
	$introducedqdistribution=$_POST['introducedqdistribution'];
	$reintroduceddistribution=$_POST['reintroduceddistribution'];
	$extinctdistribution=$_POST['extinctdistribution'];
	$extinctqdistribution=$_POST['extinctqdistribution'];
	$distributionuncertain=$_POST['distributionuncertain'];
	$uncertain=$_POST['uncertain'];
	$autor=$_POST['autor'];
	$archnueva=fopen('../txt/nuevaspe.csv','w');
	fputs($archnueva,$filo.",".$clase.",".$orden.",".$familia.",".$genero.",".$nomspecie.",".$nomsubspecie.",".$nomcientifico.",".$rank.",".$listing.",".$party.",".$listedu.",".$fullnote.",".$distributionnames.",".$isocodes.",".$nativenames.",".$introduceddistribution.",".$introducedqdistribution.",".$reintroduceddistribution.",".$extinctdistribution.",".$extinctqdistribution.",".$distributionuncertain.",".$uncertain.",".$autor.".");
	fclose($archnueva);
?>