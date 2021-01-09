<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">Controlli Polizia - Monitoraggio situazione in tempo reale</h1>
  </div>

  <!-- Content Row -->
  
  <h3>Analisi dati attività di controllo</h3>
  <h4>Monitoraggio delle attività di polizia per il contenimento dell'emergenza COVID-19 su 
  territorio nazionale (fonte: Ministero dell'Interno).</h4>
	<p>I dati sono di libero accesso e forniti online da questo <a href="https://github.com/nuke86/opendata-project" target="_repoControlli">Repository</a></p>
  <div class="row">
	<div class="col-xl-8 col-lg-7">
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		  <h6 class="m-0 font-weight-bold text-primary">Andamento dei controlli</h6>
		</div>
		<!-- Card Body -->
		<div class="card-body">
		  <div class="chart-area" style="height: 500px;">
			<canvas id="andamentoControlli"></canvas>
		  </div>
			<?php include_once 'chart-andamento-controlli.php'; ?>
		</div>
	  </div>
	</div>
	<div class="col-xl-4 col-lg-5">
	<div class="card shadow mb-4">
		<!-- Card Header - Dropdown -->
		<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
		  <h6 class="m-0 font-weight-bold text-primary">Storico dei controlli</h6>
		</div>
		<!-- Card Body -->
		<div class="card-body">
		  <div class="table-responsive">
			<table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
			  <thead>
				<tr>
				  <th>#</th>
				  <th><span class="badge badge-light">Data</span></th>
				  <th><span class="badge badge-info">Persone controllate</span></th>
				  <th><span class="badge badge-warning">Sanzioni</span></th>
				  <th><span class="badge badge-danger">Denunce</span></th>
				</tr>
			  </thead>
			  <tfoot>
				<tr>
				  <th>#</th>
				  <th><span class="badge badge-light">Data</span></th>
				  <th><span class="badge badge-info">Persone controllate</span></th>
				  <th><span class="badge badge-warning">Sanzioni</span></th>
				  <th><span class="badge badge-danger">Denunce</span></th>
				</tr>
			  </tfoot>
			  <tbody>
			  <?php echo $risultatoTableControlli; ?>
			  </tbody>
			</table>
		  </div>
		</div>
	  </div>
	</div>
	
  </div>
</div>