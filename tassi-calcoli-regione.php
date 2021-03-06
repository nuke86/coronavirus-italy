<?php
	// $jsonLastUpdate viene inizializzata su main.php
	$totale_casiLast = $jsonLastUpdate["totale_casi"];
	$totale_positiviLast = $jsonLastUpdate["totale_positivi"];
	$decedutiLast = $jsonLastUpdate["deceduti"];
	$guaritiLast = $jsonLastUpdate["dimessi_guariti"];
	$ospedalizzatiLast = $jsonLastUpdate["totale_ospedalizzati"];
	$terapia_intensivaLast = $jsonLastUpdate["terapia_intensiva"];
	$ricoverati_con_sintomiLast = $jsonLastUpdate["ricoverati_con_sintomi"];
	$tamponiLast = $jsonLastUpdate["tamponi"];
	$casiChiusiLast = $guaritiLast+$decedutiLast;
	
	// Calcolo percentuali
	$tassoPositiviTotale = ($totale_positiviLast/$totale_casiLast)*100;
	$tassoOspedalizzatiPositivi = ($ospedalizzatiLast/$totale_positiviLast)*100;
	$tassoTerapiaIntensivaOspedalizzati = ($terapia_intensivaLast/$ospedalizzatiLast)*100;
	$tassoRicoveratiOspedalizzati = ($ricoverati_con_sintomiLast/$ospedalizzatiLast)*100;
	$tassoGuaritiTotale = ($guaritiLast/$totale_casiLast)*100;
	$tassoDecedutiTotale = ($decedutiLast/$totale_casiLast)*100;
	$tassoGuaritiChiusi = ($guaritiLast/$casiChiusiLast)*100;
	$tassoDecedutiChiusi = ($decedutiLast/$casiChiusiLast)*100;
	$tassoPositiviTamponi = ($totale_positiviLast/$tamponiLast)*100;
	
?>