<?php
$jsonPrevisioniLast = getPrevisioniLast()->previsioni;
$jsonLastUpdate = getLastUpdate();
$imgFilenameForecast = "plot-".date("Y-m-d",strtotime(date($jsonLastUpdate[0]->data))).".png";
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Previsioni diffusione Covid19 in Italia</h1>
  </div>

  <!-- Content Row -->
  
  <h3>Il resoconto delle previsioni stimate con i dati quotidiani.</h3>
	<p>Ultimo log <a href="img/plots/previsione.json" target="_previsione">(JSON)</a> del Machine Learning</p>
  <div class="row">
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-primary shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Totale infetti stimati al <?php echo $jsonPrevisioniLast[0]->fineContagio; ?></div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
			  <?php
			  echo number_format($jsonPrevisioniLast[0]->totaleInfetti,0,',','.');
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
	  <div class="card border-left-success shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Minimo infetti stimati al <?php echo $jsonPrevisioniLast[0]->fineContagio; ?></div>
			  <div class="h5 mb-0 font-weight-bold text-gray-800">
			  <?php
			  echo number_format($jsonPrevisioniLast[0]->minInfetti,0,',','.');
			  ?>
			  </div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-arrow-alt-circle-down fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
	  <div class="card border-left-danger shadow h-100 py-2">
		<div class="card-body">
		  <div class="row no-gutters align-items-center">
			<div class="col mr-2">
			  <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Massimo infetti stimati al <?php echo $jsonPrevisioniLast[0]->fineContagio; ?></div>
			  <div class="row no-gutters align-items-center">
				<div class="col-auto">
				  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
				  <?php
				  echo number_format($jsonPrevisioniLast[0]->maxInfetti,0,',','.');
				  ?>
				  </div>
				</div>
			</div>
			</div>
			<div class="col-auto">
			  <i class="fas fa-arrow-alt-circle-up fa-2x text-gray-300"></i>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>
  <div class="row">
	<div class="col-xl-6 col-lg-5">
	  <div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		  <h6 class="m-0 font-weight-bold text-primary">Il grafico previsionale</h6>
		</div>
		<!-- Card Body -->
		<div class="card-body">
		<img src="img/plots/<?php echo $imgFilenameForecast; ?>" class="lineeOms" />
		</div>
	  </div>
	</div>
  </div>
</div>