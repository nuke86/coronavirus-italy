<?php
// $totale viene inizializzata in main.php
$tamponiDate = [];
$tamponiSerie = [];
$tamponePrima = 0;
$tamponeAntigenicoPrima = 0;
$tamponeMolecolarePrima = 0;
$positivoAntigenicoPrima = 0;
$positivoMolecolarePrima = 0;
$differenzeTamponi = [];
$differenzeTamponiAntigenici = [];
$differenzeTamponiMolecolari = [];
$differenzePositiviAntigenici = [];
$differenzePositiviMolecolari = [];
$tamponiContagi = [];
$tassoDiffTamponi = [];
$i = 0;
//$totalePrima = getAndamentoDiff();
foreach ($totale as $giornataTamponi) {
	//if ($i == 60) break;
	$tamponiSerie[] .= $giornataTamponi->tamponi;
	$tamponiDate[] .= date("d M",strtotime(date($giornataTamponi->data)));
	
	$tamponeNow = $giornataTamponi->tamponi;
	$tamponeAntigenicoNow = $giornataTamponi->tamponi_test_antigenico_rapido;
	$tamponeMolecolareNow = $giornataTamponi->tamponi_test_molecolare;
	$positivoAntigenicoNow = $giornataTamponi->totale_positivi_test_antigenico_rapido;
	$positivoMolecolareNow = $giornataTamponi->totale_positivi_test_molecolare;
	if ($i>0){
	$tamponePrima = $totale[$i-1]->tamponi;
	$tamponeAntigenicoPrima = $totale[$i-1]->tamponi_test_antigenico_rapido;
	$tamponeMolecolarePrima = $totale[$i-1]->tamponi_test_molecolare;
	$positivoAntigenicoPrima = $totale[$i-1]->totale_positivi_test_antigenico_rapido;
	$positivoMolecolarePrima = $totale[$i-1]->totale_positivi_test_molecolare;
	}
	$differenzeTamponi[] .= $tamponeNow-$tamponePrima;
	$differenzeTamponiAntigenici[] .= $tamponeAntigenicoNow-$tamponeAntigenicoPrima;
	$differenzeTamponiMolecolari[] .= $tamponeMolecolareNow-$tamponeMolecolarePrima;
	$differenzePositiviAntigenici[] .= $positivoAntigenicoNow-$positivoAntigenicoPrima;
	$differenzePositiviMolecolari[] .= $positivoMolecolareNow-$positivoMolecolarePrima;
	$tamponiContagi[] .= $giornataTamponi->nuovi_positivi;
	$percentTampone = ($tamponiContagi[$i]/$differenzeTamponi[$i])*100;
	//$percentTampone = number_format($percentTampone,1,',','.');
	$tassoDiffTamponi[] .= $percentTampone;
	$i++;
}
?>

<script>
function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
    prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
    sep = (typeof thousands_sep === 'undefined') ? '.' : thousands_sep,
    dec = (typeof dec_point === 'undefined') ? ',' : dec_point,
    s = '',
    toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
    };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
  }
  if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
  }
  return s.join(dec);
}

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($tamponiDate); ?>,
    datasets: [{
      label: "Tamponi",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: <?php echo json_encode($differenzeTamponi); ?>,
    },
	{
      label: "Nuovi positivi",
      backgroundColor: "#dc3545",
      hoverBackgroundColor: "#dc3545",
      borderColor: "#dc3545",
      data: <?php echo json_encode($tamponiContagi); ?>,
	}
	],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        time: {
          unit: 'day'
        },
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: <?php echo (count($tamponiDate)/2); ?>
        },
        maxBarThickness: 5,
      }],
      yAxes: [{
        ticks: {
          min: 0,
		  
          maxTicksLimit: 5,
          padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return number_format(value);
          }
        },
        gridLines: {
          color: "rgb(234, 236, 244)",
          zeroLineColor: "rgb(234, 236, 244)",
          drawBorder: false,
          borderDash: [1],
          zeroLineBorderDash: [1]
        }
      }],
    },
    legend: {
      display: true
    },
    tooltips: {
      titleMarginBottom: 6,
      titleFontColor: '#6e707e',
      titleFontSize: 12,
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 2,
      yPadding: 2,
      displayColors: true,
	  intersect: false,
	  mode: 'index',
      caretPadding: 5,
      callbacks: {
        label: function(tooltipItem, chart) {
          var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
          return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
        }
      }
    },
  }
});

</script>
