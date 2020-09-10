<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php 
      $url = explode("/", current_url());
      $currentUrl = $url[count($url - 1)]; ?>

      <?= ($currentUrl == 'dashboard') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
      <a class="nav-link" href="<?= base_url('admin') ?>/home/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Perodical Services
      </div>
      <?php if ($this->session->userdata('role') == 1) { ?>
        <!-- Nav Item - Pages Collapse Menu -->
        <?= ($currentUrl == 'create_plan') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
        <a class="nav-link" href="<?= base_url('Admin/Home') ?>/create_plan">
          <i class="fas fa-fw fa-cog"></i>
          <span>Create Plan PS</span>
        </a>
        </li>
      <?php } ?>

      <!-- Nav Item - Utilities Collapse Menu -->
      <?= ($currentUrl == 'planps') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
      <a class="nav-link" href="<?= base_url('Admin/Home') ?>/planps">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Plan PS</span>
      </a>
      </li>

      <?= ($currentUrl == 'actualps') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
      <a class="nav-link collapsed" href="<?= base_url('Admin/Home') ?>/actualps">
        <i class="fas fa-fw fa-table"></i>
        <span>Actual PS</span>
      </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        PPM Report
      </div>

      <!-- Nav Item - Charts -->
      <?= ($currentUrl == 'ppm_report') ? '<li class="nav-item active">' : '<li class="nav-item">' ?>
      <a class="nav-link" href="<?= base_url('Admin/Home') ?>/ppm_report">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>PPM Report</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('Admin/Auth/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->