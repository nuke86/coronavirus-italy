<?php
$regioniLast = getRegioniLast();
$risultatoSummaryRegioni = null;
$dataRegioniLast = null;
foreach ($regioniLast as $regione){
	$dataRegioniLast = date("d-m-Y",strtotime(date($regione->data)));
	$risultatoSummaryRegioni .= "
		<tr>
			<td><a href=\"index.php?page=dettaglio-regione&idRegione=".$regione->codice_regione."\">".$regione->denominazione_regione."</a></td>
			<td><span class=\"badge badge-info\">".number_format($regione->totale_positivi,0,',','.')."</span></td>
			<td><span class=\"badge badge-primary\">".number_format($regione->nuovi_positivi,0,',','.')."</span></td>
			<td><span class=\"badge badge-danger\">".number_format($regione->deceduti,0,',','.')."</span></td>
			<td><span class=\"badge badge-success\">".number_format($regione->dimessi_guariti,0,',','.')."</span></td>
			<td><span class=\"badge badge-dark\">".number_format($regione->totale_casi,0,',','.')."</span></td>
			<td><span class=\"badge badge-warning\">".number_format($regione->tamponi,0,',','.')."</span></td>
			<td><span class=\"badge badge-light\">".date("d-m-Y",strtotime(date($regione->data)))."</span></td>
		</tr>
		";
}
echo "Ultimo aggiornamento: <b>".$dataRegioniLast."</b>";
?>

<div class="table-responsive">
	<table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
	  <thead>
		<tr>
		  <th>Regione</th>
		  <th><span class="badge badge-info">Positivi</span></th>
		  <th><span class="badge badge-primary">Nuovi casi</span></th>
		  <th><span class="badge badge-danger">Decessi</span></th>
		  <th><span class="badge badge-success">Guariti</span></th>
		  <th><span class="badge badge-dark">Casi totali</span></th>
		  <th><span class="badge badge-warning">Tamponi</span></th>
		  <th><span class="badge badge-light">Data agg.</span></th>
		</tr>
	  </thead>
	  <tfoot>
		<tr>
		  <th>Regione</th>
		  <th><span class="badge badge-info">Positivi</span></th>
		  <th><span class="badge badge-primary">Nuovi casi</span></th>
		  <th><span class="badge badge-danger">Decessi</span></th>
		  <th><span class="badge badge-success">Guariti</span></th>
		  <th><span class="badge badge-dark">Casi totali</span></th>
		  <th><span class="badge badge-warning">Tamponi</span></th>
		  <th><span class="badge badge-light">Data agg.</span></th>
		</tr>
	  </tfoot>
	  <tbody>
	  <?php echo $risultatoSummaryRegioni; ?>
	  </tbody>
	</table>
</div>