<?php

function getLastUpdate(){
	$json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale-latest.json');
	//$json = file_get_contents('dati-json/dpc-covid19-ita-andamento-nazionale-latest.json');

	// Converts it into a PHP object
	$data = json_decode($json);
	
	return $data;
}

function getWorldLastUpdate($type){
	//$json = file_get_contents('https://us-central1-alex-redwood.cloudfunctions.net/coronavirus-api-master');
	$json = file_get_contents('dati-json/coronavirus-api-master');
	// Converts it into a PHP object
	$data = json_decode($json);
	return $data->$type;
}

function getAndamento(){
	$json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-andamento-nazionale.json');
	// Converts it into a PHP object
	$data = json_decode($json);
	
	return $data;
}

function getAndamentoRegione($idRegione){
	$json = file_get_contents('https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni.json');
	// Converts it into a PHP object
	$data = json_decode($json);
	$arrRegione = [];
	$i = 0;
	foreach ($data as $regione) {
		if ($regione->codice_regione == $idRegione) {
			$arrRegione[] = array($regione);
			$i++;
		}
	}
	return $arrRegione;
}

function getAndamentoControlli(){
	$json = file_get_contents("https://raw.githubusercontent.com/nuke86/opendata-project/master/controlliPolizia-Covid-19.json");
	// Converts it into a PHP object
	$data = json_decode($json);
	
	return $data;
}

function getRegioniLast(){
	$json = file_get_contents("https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni-latest.json");
	//$json = file_get_contents("dati-json/dpc-covid19-ita-regioni-latest.json");	
	// Converts it into a PHP object
	$data = json_decode($json);
	
	return $data;
}

function getPrevisioniLast(){
	$json = file_get_contents("img/plots/previsione.json");
	// Converts it into a PHP object
	$data = json_decode($json);
	
	return $data;
}

function getDiffLastByType($type){
	$i = 0;
	$totale = getAndamento();
	foreach ($totale as $giornata){
		
		if (($i != 1) AND ($i > 0)){
			$today = $giornata->$type;
			$ieri = $totale[$i-1]->$type;
		} 
		$i++;
	}
	$differenza = $today - $ieri;
	if ($differenza > 0) $differenza = "+".$differenza;
	return $differenza;
}

function getDiffLastByTypeRegione($type, $idRegione){
	$i = 0;
	$totale = getAndamentoRegione($idRegione);
	foreach ($totale as $giornata){
		
		if (($i != 1) AND ($i > 0)){
			
			$today = $giornata[0]->$type;
			$ieri = $totale[$i-1][0]->$type;
		} 
		$i++;
	}
	$differenza = $today - $ieri;
	if ($differenza > 0) $differenza = "+".$differenza;
	//$totale = json_decode($totale[0]);
	return $differenza;
}

function getRegioneByNameLast($idRegione){
	$json = file_get_contents("https://raw.githubusercontent.com/pcm-dpc/COVID-19/master/dati-json/dpc-covid19-ita-regioni-latest.json");
	//$json = file_get_contents("dati-json/dpc-covid19-ita-regioni-latest.json");	

	// Converts it into a PHP object
	$data = json_decode($json, true);
	foreach ($data as $regione) {
		if ($regione["codice_regione"] == $idRegione) {
			return $regione;
		}
	}
}
?>