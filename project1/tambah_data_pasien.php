


<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Pasien</title>

  <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<form action="data_pasien.php" method="POST">

<div class="wrapper">

  <!-- Navbar -->
  <nav v>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">

      <span class="brand-text font-weight-light">BMI Project</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Rama Fajar</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-database"></i>
                  <p>Tambah Data</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      
      <div class="container-fluid">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        
        <div class="row mt-3 mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pasien</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="breadcrumb float-sm-right">
              <a href="#" class="breadcrumb-item ">Home</a>
              <a href="data_pasien.php" class="breadcrumb-item">Data Pasien</a>
              <a href="tambah_data_pasien.php" class="breadcrumb-item active">Tambah Data</a>
            </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
          <div class="container-fluid">
        <h1 class="text-center">Tambah Data Pasien</h1>
        <div class="row mt-5 mb-2">
          <div class="container">
            <form action="data_pasien.php" method="post">
            
            <input id="tgl_periksa" name="tgl_periksa"  value="<?= date('Y-m-d'); ?>" type="hidden" class="form-control">

              
              <div class="form-group row">
                <label for="nama" class="col-3 col-form-label">Nama</label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="nama" name="nama" placeholder="Nama Pasien" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tempat_lahir" class="col-3 col-form-label">Tempat Lahir </label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="tempat_lahir" name="tempat_lahir" placeholder="Tempat Lahir Pasien" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="tanggal_lahir" class="col-3 col-form-label">Tanggal Lahir </label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="tanggal_lahir" name="tanggal_lahir" placeholder="Tahun Lulus" type="date" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="email" class="col-3 col-form-label">Email </label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="email" name="email" placeholder="example@co.id" type="text" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="gender" class="col-3 col-form-label">Gender </label> 
                <div class="col-9">
                  <div class="input-group">
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="L">
                        <label class="form-check-label" for="laki-laki">Laki-laki</label>
                      </div>
                       <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="perempuan" value="P">
                        <label class="form-check-label" for="perempuan">Perempuan</label>
                      </div>
                  </div>
                </div>
              </div>
              <div class="form-group row">
                <label for="berat" class="col-3 col-form-label">Berat Badan </label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="berat" name="berat" placeholder="Berat pasien (kg)" type="text" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <label for="tinggi" class="col-3 col-form-label">Tinggi Badan </label> 
                <div class="col-9">
                  <div class="input-group">
                    <input id="tinggi" name="tinggi" placeholder="Tinggi Pasien (cm)" type="text" class="form-control">
                  </div>
                </div>
              </div> 
              <div class="form-group row">
                <div class="offset-3 col-9 d-flex justify-content-end">
                  <button  class="btn btn-danger mr-2" type="submit" name="batal">Batal</button>
                  <button  class="btn btn-primary" type="submit" name="tambah">Simpan</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
</form>

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/dist/js/adminlte.min.js"></script>

</body>
</html>
