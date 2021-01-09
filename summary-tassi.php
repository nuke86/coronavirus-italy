<!-- Tassi percentuali -->

  <h2>Tassi di incidenza</h2>
  <div class="row">
	<div class="col-lg-6 mb-4">
	  <div class="card bg-primary text-white shadow">
		<div class="card-body">
		  Positivi: <?php  echo number_format($totale_positiviLast,0,',','.'); ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoPositiviTotale,1,',','.'); ?> % del totale</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-warning" role="progressbar" 
				style="width: <?php echo number_format($tassoPositiviTotale); ?>%" 
				aria-valuenow="<?php echo number_format($tassoPositiviTotale); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 mb-4">
	  <div class="card bg-warning text-white shadow">
		<div class="card-body">
		  Ospedalizzati: <?php  echo number_format($ospedalizzatiLast,0,',','.'); ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoOspedalizzatiPositivi,1,',','.'); ?> % dei positivi</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-primary" role="progressbar" 
				style="width: <?php echo number_format($tassoOspedalizzatiPositivi); ?>%" 
				aria-valuenow="<?php echo number_format($tassoOspedalizzatiPositivi); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 mb-4">
	  <div class="card bg-success text-white shadow">
		<div class="card-body">
		  Guariti: <?php  echo number_format($guaritiLast,0,',','.'); ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoGuaritiTotale,1,',','.'); ?> % del totale</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-primary" role="progressbar" 
				style="width: <?php echo number_format($tassoGuaritiTotale); ?>%" 
				aria-valuenow="<?php echo number_format($tassoGuaritiTotale); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
			<b><?php echo number_format($tassoGuaritiChiusi,1,',','.'); ?> % dei casi chiusi</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-primary" role="progressbar" 
				style="width: <?php echo number_format($tassoGuaritiChiusi); ?>%" 
				aria-valuenow="<?php echo number_format($tassoGuaritiChiusi); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 mb-4">
	  <div class="card bg-danger text-white shadow">
		<div class="card-body">
		  Deceduti: <?php  echo number_format($decedutiLast,0,',','.'); ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoDecedutiTotale,1,',','.'); ?> % del totale</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-primary" role="progressbar" 
				style="width: <?php echo number_format($tassoDecedutiTotale); ?>%" 
				aria-valuenow="<?php echo number_format($tassoDecedutiTotale); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  <b><?php echo number_format($tassoDecedutiChiusi,1,',','.'); ?> % dei casi chiusi</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-primary" role="progressbar" 
				style="width: <?php echo number_format($tassoDecedutiChiusi); ?>%" 
				aria-valuenow="<?php echo number_format($tassoDecedutiChiusi); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 mb-4">
	  <div class="card bg-info text-white shadow">
		<div class="card-body">
		  Ricoverati con sintomi: 
		  <?php  echo number_format($ricoverati_con_sintomiLast,0,',','.'); 
			$diffRicoverati = getDiffLastByType("ricoverati_con_sintomi");
			echo " <span class=\"badge badge-dark\">".$diffRicoverati."</span>";
		  ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoRicoveratiOspedalizzati,1,',','.'); ?> % degli ospedalizzati</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-warning" role="progressbar" 
				style="width: <?php echo number_format($tassoRicoveratiOspedalizzati); ?>%" 
				aria-valuenow="<?php echo number_format($tassoRicoveratiOspedalizzati); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="col-lg-6 mb-4">
	  <div class="card bg-secondary text-white shadow">
		<div class="card-body">
		  Terapia intensiva: 
		  <?php  echo number_format($terapia_intensivaLast,0,',','.');
			$diffTerapia_intensiva = getDiffLastByType("terapia_intensiva");
			echo " <span class=\"badge badge-dark\">".$diffTerapia_intensiva."</span>";
		  ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoTerapiaIntensivaOspedalizzati,1,',','.'); ?> % degli ospedalizzati</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-warning" role="progressbar" 
				style="width: <?php echo number_format($tassoTerapiaIntensivaOspedalizzati); ?>%" 
				aria-valuenow="<?php echo number_format($tassoTerapiaIntensivaOspedalizzati); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>