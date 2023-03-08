<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-text mx-3"> ARSIP SURAT </div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fa fa-fw fa-database"></i>
          <span>Master Data</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_pegawai') ?>">Data Pegawai</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_jabatan') ?>">Data Jabatan</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        BIDANG BIDANG
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#sekre" aria-expanded="true" aria-controls="sekre">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>SEKRETARIAT</span>
        </a>
        <div id="sekre" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratmasuksekre') ?>">Surat Masuk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratkeluarsekre') ?>">Surat Keluar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#p2epd" aria-expanded="true" aria-controls="p2epd">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>P2EPD</span>
        </a>
        <div id="p2epd" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratmasukp2epd') ?>">Surat Masuk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratkeluarp2epd') ?>">Surat Keluar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#litbang" aria-expanded="true" aria-controls="litbang">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>LITBANG</span>
        </a>
        <div id="litbang" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratmasuklitbang') ?>">Surat Masuk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratkeluarlitbang') ?>">Surat Keluar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#ppm" aria-expanded="true" aria-controls="ppm">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>PPM</span>
        </a>
        <div id="ppm" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratmasukppm') ?>">Surat Masuk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratkeluarppm') ?>">Surat Keluar</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pik" aria-expanded="true" aria-controls="pik">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>PIK</span>
        </a>
        <div id="pik" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratmasukpik') ?>">Surat Masuk</a>
            <a class="collapse-item" href="<?php echo base_url('admin/data_suratkeluarpik') ?>">Surat Keluar</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#laporan" aria-expanded="true" aria-controls="laporan">
          <i class="fas fa-fw fa-money-check-alt"></i>
          <span>Laporan Surat</span>
        </a>
        <div id="laporan" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_suratsekre') ?>">Bidang Sekretariat</a>
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_suratp2epd') ?>">Bidang P2EPD</a>
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_suratlitbang') ?>">Bidang Litbang</a>
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_suratppm') ?>">Bidang PPM</a>
            <a class="collapse-item" href="<?php echo base_url('admin/laporan_suratpik') ?>">Bidang PIK</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('ganti_password') ?>">
          <i class="fas fa-fw fa-lock"></i>
          <span>Ubah Password</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('login/logout') ?>">
          <i class="fas fa-fw fa-sign-out-alt"></i>
          <span>Logout</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama_pegawai') ?></span>
                <img class="img-profile rounded-circle" src="<?php echo base_url('foto/').$this->session->userdata('foto') ?>">
              </a>

            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->