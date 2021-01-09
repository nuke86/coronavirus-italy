<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-hospital"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Covid-19</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?php echo $dashActive; ?>">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Analisi
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item <?php echo $worldActive; ?>">
        <a class="nav-link" href="index.php?page=main-world">
          <i class="fas fa-fw fa-globe"></i>
          <span>Situazione mondo</span>
        </a>
      </li>
	  <li class="nav-item <?php echo $prevenzioneActive; ?>">
        <a class="nav-link" href="index.php?page=misure-di-prevenzione">
          <i class="fas fa-fw fa-user-md"></i>
          <span>Prevenzione</span>
        </a>
      </li>
	  <li class="nav-item <?php echo $previsioniActive; ?>">
        <a class="nav-link" href="index.php?page=previsione-casi-totali">
          <i class="fas fa-fw fa-chart-bar"></i>
          <span>Previsioni future</span>
        </a>
      </li>
	  <li class="nav-item <?php echo $controlliActive; ?>">
        <a class="nav-link" href="index.php?page=controlli-polizia">
          <i class="fas fa-fw fa-gavel"></i>
          <span>Dati sui controlli</span>
        </a>
      </li>
	  <li class="nav-item <?php echo $R0Active; ?>">
        <a class="nav-link" href="index.php?page=calcolo-r0">
          <i class="fas fa-fw fa-chart-line"></i>
          <span>Calcolo R0 o Rt</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Link utili
      </div>
	  
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" target="_newsOms" href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019">
          <i class="fas fa-fw fa-bong"></i>
          <span>News OMS</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" target="_help" href="https://people.com/health/coronavirus-ways-to-help-your-community/">
          <i class="fas fa-fw fa-life-ring"></i>
          <span>Aiutiamoci</span></a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" target="_autore" href="http://www.dariofadda.it">
          <i class="fas fa-fw fa-user"></i>
          <span>Autore</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
