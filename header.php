<!DOCTYPE html>
<html lang="it">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="An italian project to tracking the Coronavirus disease (COVID-19), worldwide and Italy live monitor. Dashboard Coronavirus SARS-CoV-2 vaccini Italia.">
  <meta name="author" content="Dario Fadda">

  <title>Dashboard Coronavirus - COVID-19 e Vaccini</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="img/favicon.ico" rel="icon" type="image/x-icon" />
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
	<style>
	@media screen and (max-width: 524px){
	.lineeOms {
	  width: 90%;
	}
	}
	</style>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-51879975-18"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-51879975-18');
</script>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php include_once 'sidebar.php'; ?>
	
	<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include_once 'topbar.php'; ?>
