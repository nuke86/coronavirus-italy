<?php
	// $jsonLastUpdate viene inizializzata su main.php
	$totale_casiLast = $jsonLastUpdate->cases;
	$totale_positiviLast = $jsonLastUpdate->activeCases;
	$decedutiLast = $jsonLastUpdate->deaths;
	$guaritiLast = $jsonLastUpdate->recovered;
	//$ospedalizzatiLast = $jsonLastUpdate->totale_ospedalizzati;
	$terapia_intensivaLast = $jsonLastUpdate->seriousCases;
	//$ricoverati_con_sintomiLast = $jsonLastUpdate[0]->ricoverati_con_sintomi;
	//$tamponiLast = $jsonLastUpdate[0]->tamponi;
	$casiChiusiLast = $guaritiLast+$decedutiLast;
	
	// Calcolo percentuali
	$tassoPositiviTotale = ($totale_positiviLast/$totale_casiLast)*100;
	//$tassoOspedalizzatiPositivi = ($ospedalizzatiLast/$totale_positiviLast)*100;
	$tassoTerapiaIntensivaPositivi = ($terapia_intensivaLast/$totale_positiviLast)*100;
	//$tassoRicoveratiOspedalizzati = ($ricoverati_con_sintomiLast/$ospedalizzatiLast)*100;
	$tassoGuaritiTotale = ($guaritiLast/$totale_casiLast)*100;
	$tassoDecedutiTotale = ($decedutiLast/$totale_casiLast)*100;
	$tassoGuaritiChiusi = ($guaritiLast/$casiChiusiLast)*100;
	$tassoDecedutiChiusi = ($decedutiLast/$casiChiusiLast)*100;
	//$tassoPositiviTamponi = ($totale_positiviLast/$tamponiLast)*100;
	
?>