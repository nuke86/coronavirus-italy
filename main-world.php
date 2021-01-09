<?php
$jsonLastUpdate = getWorldLastUpdate("summary");
//$totale = getAndamentoWo($_GET["idRegione"]);
include_once 'tassi-calcoli-world.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Analisi dei dati Mondiali nCoV-19</h1>
	<h6>(Ultimo agg. <i>pochi secondi fa</i>)</h6>
  </div>
  <!-- Content Row -->
  <div class="row">
  
  <!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Casi totali</div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
			  <?php
			  echo number_format($jsonLastUpdate->cases,0,',','.');
			  
			  echo "<br /><span class=\"small\">Oggi: ".number_format($jsonLastUpdate->newCases,0,',','.')."</span>";
			  ?>
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-users fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-info shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Positivi</div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
			  <?php
			  echo number_format($jsonLastUpdate->activeCases,0,',','.');
			  echo "<br /><span class=\"small\">Terapia intensiva: ".number_format($jsonLastUpdate->seriousCases,0,',','.')."</span>";
			  ?>
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-bong fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Guariti</div>
			  <div class="row no-gutters align-items-center">
				<div class="col-auto">
				  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
				  <?php
					echo number_format($jsonLastUpdate->recovered,0,',','.');
				  ?>
				  </div>
				</div>
			</div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-clinic-medical fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-danger shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Decessi</div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
			  <?php
			  echo number_format($jsonLastUpdate->deaths,0,',','.');
			  echo "<br /><span class=\"small\">Oggi: ".number_format($jsonLastUpdate->newDeaths,0,',','.')."</span>";
			  ?>
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-cross fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
	<div class="row">
		<!-- Contagi -->
		<div class="col-xl-4 col-lg-5">
		  <div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			  <h6 class="m-0 font-weight-bold text-primary">Impatti della pandemia</h6>
			</div>
			<!-- Card Body -->
			<div class="card-body">
			  <div class="chart-pie pt-4 pb-2">
				<canvas id="summaryTorta"></canvas>
			  </div><br />
			  <p class="small">Tutti i dati rapprensentati su questa webApp sono forniti sotto forma di Open Data e raggiungibili su 
			  <a href="http://www.worldometers.info" target="_data">Worldometers.info</a></p>
				<?php include_once 'chart-summary-torta.php' ?>
			</div>
		  </div>
		</div>
		<div class="col-xl-8 col-lg-7">
		  <div class="card shadow mb-4">
			<!-- Card Header - Dropdown -->
			<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
			  <h6 class="m-0 font-weight-bold text-primary">Tassi di incidenza</h6>
			</div>
			<!-- Card Body -->
			<div class="card-body">
			  <?php include_once 'summary-tassi-world.php' ?>
			</div>
		  </div>
		</div>
	</div>
	<div class="row">
		<!-- Content Column -->
		<div class="col-lg-6 mb-4">
		  <!-- Project Card Example -->
		  <div class="card shadow mb-4">
			<div class="card-header py-3">
			  <h6 class="m-0 font-weight-bold text-primary">Situazione degli Stati</h6>
			</div>
			<div class="card-body">
			  <?php include_once 'table-summary-world.php'; ?>
			</div>
		  </div>
		</div>
		<div class="col-lg-6 mb-4">
			<div class="col-lg-12 mb-1">
			  <!-- Project Card Example -->
			  <div class="card shadow mb-4">
				<div class="card-header py-3">
				  <h6 class="m-0 font-weight-bold text-primary">Top 10 Stati più colpiti</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-4 pb-2">
					<canvas id="top-country"></canvas>
				  </div>
				  <?php include_once 'chart-top-country.php'; ?>
				</div>
			  </div>
			</div>
		
		
			<div class="col-lg-12 mb-1">
			  <!-- Project Card Example -->
			  <div class="card shadow mb-4">
				<div class="card-header py-3">
				  <h6 class="m-0 font-weight-bold text-primary">Situazione dei Continenti</h6>
				</div>
				<div class="card-body">
					<div class="chart-pie pt-4 pb-2">
					<canvas id="top-continent"></canvas>
				  </div>
				  <?php include_once 'chart-summary-continent.php'; ?>
				</div>
			  </div>
			</div>
		</div>
		
	</div>
</div>