

<script>

var ctx = document.getElementById("summaryTorta");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ["Positivi %", "Guariti %", "Decessi %"],
    datasets: [{
      data: [<?php echo number_format($tassoPositiviTotale).','.number_format($tassoGuaritiTotale).','.number_format($tassoDecedutiTotale); ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#dc3545'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#dc3545'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 60,
  }
});
</script>