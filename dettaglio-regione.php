<?php
$jsonLastUpdate = getRegioneByNameLast($_GET["idRegione"]);
$totale = getAndamentoRegione($_GET["idRegione"]);
include_once 'tassi-calcoli-regione.php';
?>

<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Analisi dei dati regione: <?php echo $jsonLastUpdate["denominazione_regione"]; ?></h1>
	<h6>(Ultimo agg. <?php echo date("d M Y - H:i",strtotime(date($jsonLastUpdate["data"]))); ?>)</h6>
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
			  echo number_format($jsonLastUpdate["totale_casi"],0,',','.');
			  $diffTotale_casi = getDiffLastByTypeRegione("totale_casi",$_GET["idRegione"]);
			  echo "<br /><span class=\"small\">".$diffTotale_casi."</span>";
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
			  echo number_format($jsonLastUpdate["totale_positivi"],0,',','.');
			  $diffTotale_positivi = getDiffLastByTypeRegione("totale_positivi",$_GET["idRegione"]);
			  echo "<br /><span class=\"small\">".$diffTotale_positivi."</span>";
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
					echo number_format($jsonLastUpdate["dimessi_guariti"],0,',','.');
					$diffGuariti = getDiffLastByTypeRegione("dimessi_guariti",$_GET["idRegione"]);
					echo "<br /><span class=\"small\">".$diffGuariti."</span>";
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
			  echo number_format($jsonLastUpdate["deceduti"],0,',','.');
			  $diffDeceduti = getDiffLastByTypeRegione("deceduti",$_GET["idRegione"]);
			  echo "<br /><span class=\"small\">".$diffDeceduti."</span>";
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
            <div class="col-xl-8 col-lg-7">
                  <h6 class="m-0 font-weight-bold text-primary">Andamento giornaliero</h6>
                  <div class="chart-area" style="height: 400px; overflow-x: scroll;">
                        <div style="width: 3000px; height: 380px;">
                    	<canvas id="andamentoGiornaliero"></canvas>
			</div>
                  </div>
					<?php include_once 'chart-andamento-contagi-regione.php'; ?>
            </div>
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
                  </div>
					<?php include_once 'chart-summary-torta.php' ?>
                </div>
              </div>
            </div>
	</div>
	<?php include_once 'summary-tassi.php'; ?>
	<div class="row">
	<div class="col-lg-6 mb-4">
	<h6 class="m-0 font-weight-bold text-primary">Andamento del contagio</h6>
		<div class="chart-area" style="height: 400px; overflow-x: scroll;">
                        <div style="width: 3000px; height: 380px;">
				<canvas id="andamentoContagio"></canvas>
			</div>
		</div>
		<?php include_once 'chart-andamento-positivi.php'; ?>
	  <h6 class="m-0 font-weight-bold text-primary">Andamento tamponi</h6>
	  <div class="chart-bar" style="height: 400px; overflow-x: scroll;">
                        <div style="width: 3000px; height: 380px;">
				<canvas id="myBarChart"></canvas>
			</div>
	  </div>
	  <?php include_once 'chart-andamento-tamponi-regione.php'; ?>
	  </div>
	  <div class="col-lg-6 mb-4">
		<div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Analisi dei tamponi</h6>
                </div>
                <div class="card-body">
				<div class="row">
					<div class="col-lg-6 mb-4">
					  <div class="card bg-primary text-white shadow">
						<div class="card-body">
						  Tamponi totali: <?php echo number_format($jsonLastUpdate["tamponi"],0,',','.'); ?>
						  <div class="text-white-50">
						  <b>Casi positivi: <?php echo number_format($tassoPositiviTamponi); ?> % dei tamponi effettuati finora</b>
							<div class="progress mb-4">
								<div class="progress-bar bg-warning" role="progressbar" 
								style="width: <?php echo number_format($tassoPositiviTamponi); ?>%" 
								aria-valuenow="<?php echo number_format($tassoPositiviTamponi); ?>" 
								aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
					<div class="col-lg-6 mb-4">
					  <?php
					  $tassoPositiviTamponiOggi = ($jsonLastUpdate["nuovi_positivi"]/end($differenzeTamponi))*100;
					  ?>
					  <div class="card bg-info text-white shadow">
						<div class="card-body">
						  Tamponi oggi: <?php echo number_format(end($differenzeTamponi),0,',','.'); ?>
						  <div class="text-white-50">
						  <b>Casi positivi: <?php echo number_format($tassoPositiviTamponiOggi); ?> % dei tamponi effettuati oggi</b>
							<div class="progress mb-4">
								<div class="progress-bar bg-warning" role="progressbar" 
								style="width: <?php echo number_format($tassoPositiviTamponiOggi); ?>%" 
								aria-valuenow="<?php echo number_format($tassoPositiviTamponiOggi); ?>" 
								aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				</div>
				<div class="row">
				<h6 class="m-0 font-weight-bold text-primary">Andamento del rapporto <b>Nuovi casi positivi</b> su <b>Tamponi effettuati il giorno</b></h6>
				<div class="chart-area" style="height: 400px; overflow-x: scroll;">
                        		<div style="width: 3000px; height: 380px;">
                    			<canvas id="tassoTamponi"></canvas>
					</div>
                 	 	</div>
				  <?php include_once 'chart-percentuali-tamponi.php'; ?>
				</div>
                  
                </div>
              </div>
	</div>
</div>
