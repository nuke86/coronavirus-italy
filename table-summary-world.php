<?php
$countryLast = getWorldLastUpdate("breakdown");
$risultatoSummaryCountry = null;
//$dataRegioniLast = null;
$i = 0;
$c = 1;
foreach ($countryLast as $country){
	//$dataRegioniLast = date("d-m-Y",strtotime(date($regione->data)));
	//$country = $country[$i];
	if (($i >= 0)AND($country->country != "Total:")) {
	$risultatoSummaryCountry .= "
		<tr>
			<td>$c</td>
			<td>".$country->country."</td>
			<td><span class=\"badge badge-primary\">".number_format($country->activeCases,0,',','.')."</span></td>
			<td><span class=\"badge badge-light\">".number_format($country->newCases,0,',','.')."</span></td>
			<td><span class=\"badge badge-danger\">".number_format($country->totalDeaths,0,',','.')."</span></td>
			<td><span class=\"badge badge-light\">".number_format($country->newDeaths,0,',','.')."</span></td>
			<td><span class=\"badge badge-success\">".number_format($country->totalRecovered,0,',','.')."</span></td>
			<td><span class=\"badge badge-dark\">".number_format($country->totalCases,0,',','.')."</span></td>
		</tr>
		";
		$c++;
	}
		$i++;
}
//echo "Ultimo aggiornamento: <b>".$dataRegioniLast."</b>";
?>

<div class="table-responsive">
	<table class="table table-bordered"  id="dataTable" width="100%" cellspacing="0">
	  <thead>
		<tr>
		  <th>#</th>
		  <th>Stato</th>
		  <th><span class="badge badge-primary">Positivi</span></th>
		  <th><span class="badge badge-light">Nuovi casi</span></th>
		  <th><span class="badge badge-danger">Decessi</span></th>
		  <th><span class="badge badge-light">Nuovi decessi</span></th>
		  <th><span class="badge badge-success">Guariti</span></th>
		  <th><span class="badge badge-dark">Casi totali</span></th>
		</tr>
	  </thead>
	  <tfoot>
		<tr>
		  <th>#</th>
		  <th>Stato</th>
		  <th><span class="badge badge-primary">Positivi</span></th>
		  <th><span class="badge badge-light">Nuovi casi</span></th>
		  <th><span class="badge badge-danger">Decessi</span></th>
		  <th><span class="badge badge-light">Nuovi decessi</span></th>
		  <th><span class="badge badge-success">Guariti</span></th>
		  <th><span class="badge badge-dark">Casi totali</span></th>
		</tr>
	  </tfoot>
	  <tbody>
	  <?php echo $risultatoSummaryCountry; ?>
	  </tbody>
	</table>
</div>
