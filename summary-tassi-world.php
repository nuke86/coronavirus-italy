<!-- Tassi percentuali -->
<div class="row">
	<div class="col-xl-6 mb-3">
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
	
	<div class="col-xl-6 mb-3">
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
	<div class="col-xl-6 mb-3">
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
	<div class="col-xl-6 mb-3">
	  <div class="card bg-secondary text-white shadow">
		<div class="card-body">
		  Terapia intensiva: 
		  <?php  echo number_format($terapia_intensivaLast,0,',','.');
		  ?>
		  <div class="text-white-50">
		  <b><?php echo number_format($tassoTerapiaIntensivaPositivi,1,',','.'); ?> % dei positivi</b>
			<div class="progress mb-4">
				<div class="progress-bar bg-warning" role="progressbar" 
				style="width: <?php echo number_format($tassoTerapiaIntensivaPositivi); ?>%" 
				aria-valuenow="<?php echo number_format($tassoTerapiaIntensivaPositivi); ?>" 
				aria-valuemin="0" aria-valuemax="100">
				</div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	
</div>