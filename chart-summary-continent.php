<?php
$c = 1;
$continentNome = [];
$continentTotaleCasi = [];
$continentDecessi = [];
$continentGuariti = [];
foreach ($countryLast as $topContinent){
	if (($topContinent->country != "Total:")AND($c <= 6)) {
		$continentNome[] .= $topContinent->country;
		$continentTotaleCasi[] .= $topContinent->totalCases;
		$continentDecessi[] .= $topContinent->totalDeaths;
		$continentGuariti[] .= $topContinent->totalRecovered;
		$c++;
	}
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
var ctx = document.getElementById("top-continent");
var myBarChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: <?php echo json_encode($continentNome); ?>,
    datasets: [{
      label: "Casi totali",
      backgroundColor: "#4e73df",
      hoverBackgroundColor: "#2e59d9",
      borderColor: "#4e73df",
      data: <?php echo json_encode($continentTotaleCasi); ?>,
    },
	{
      label: "Decessi",
      backgroundColor: "#dc3545",
      hoverBackgroundColor: "#dc3545",
      borderColor: "#dc3545",
      data: <?php echo json_encode($continentDecessi); ?>,
	},
	{
      label: "Guariti",
      backgroundColor: "green",
      hoverBackgroundColor: "green",
      borderColor: "green",
      data: <?php echo json_encode($continentGuariti); ?>,
	}
	],
  },
  options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 0,
        right: 0,
        top: 5,
        bottom: 0
      }
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false,
          drawBorder: false
        },
        ticks: {
          maxTicksLimit: 15
        },
        maxBarThickness: 20,
      }],
      yAxes: [{
        ticks: {
          min: 0,
		  
          maxTicksLimit: 10,
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