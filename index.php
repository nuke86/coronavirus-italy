<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



include_once 'functions.php';
if (isset($_GET['page'])) {
	
	if ($_GET['page'] == "controlli-polizia") {
		$controlliActive = "active";
		include_once 'header.php';
		include_once 'controlli-polizia.php';
		
	} elseif ($_GET['page'] == "previsione-casi-totali") {
		$previsioniActive = "active";
		include_once 'header.php';
		include_once 'previsione-casi-totali.php';
		
	} elseif ($_GET['page'] == "misure-di-prevenzione") {
		$prevenzioneActive = "active";
		include_once 'header.php';
		include_once 'misure-di-prevenzione.php';
		
	} elseif ($_GET['page'] == "dettaglio-regione") {
		$dashActive = "active";
		include_once 'header.php';
		include_once 'dettaglio-regione.php';
		
	} elseif ($_GET['page'] == "main-world") {
		$worldActive = "active";
		include_once 'header.php';
		include_once 'main-world.php';
	} elseif ($_GET['page'] == "calcolo-r0") {
		$R0Active = "active";
		include_once 'header.php';
		include_once 'calcolo-R0.php';
	}
} else {
	$dashActive = "active";
	include_once 'header.php';
	include_once 'main.php';
}
include_once 'footer.php';
?>