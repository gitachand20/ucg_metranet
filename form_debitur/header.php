<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Telkom Indonesia</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  
  <!-- Vendor CSS-->
  <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="../vendor/datepicker/bootstrap-datepicker.css" rel="stylesheet" media="all">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../vendor/datatables/fixedColumns.bootstrap4.css" rel="stylesheet">
  <link href="../vendor/selectpicker/bootstrap-multiselect.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  <link rel="icon" type="image/png" href="../img/telkom.png">

</head>

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-white sidebar sidebar-light accordion toggled" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <img src="../img/telkom.png" width="40" height="40">
        </div>
        <div class="sidebar-brand-text mx-3">Telkom Indonesia</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Home -->
      <li class="nav-item" id="home">
        <a class="nav-link" href="home.php">
          <i class="fas fa-fw fa-home" id="icon_home" style="color: ;"></i>
          <span id="name_home" style="color: ;">Home</span></a>
      </li>

      <!-- Nav Item - Form Input Debitur Sales Officer -->
      <li class="nav-item" id="form_input">
        <a class="nav-link" href="hasil_prediksi.php">
          <i class="fas fa-fw fa-edit" id="icon_form" style="color: ;"></i>
          <span id="name_form" style="color: ;">Form Input Debitur Sales Officer</span></a>
      </li>

      <li class="nav-item" id="form_input_v1">
        <a class="nav-link" href="hasil_prediksi_v1.php">
          <i class="fas fa-fw fa-edit" id="icon_form_v1" style="color: ;"></i>
          <span id="name_form_v1" style="color: ;">Form Input Debitur Sales Officer V1</span></a>
      </li>

      <li class="nav-item" id="form_input_v2">
        <a class="nav-link" href="hasil_prediksi_v2.php">
          <i class="fas fa-fw fa-edit" id="icon_form_v2" style="color: ;"></i>
          <span id="name_form_v2" style="color: ;">Form Input Debitur Sales Officer V2</span></a>
      </li>

      <!-- Nav Item - Form Input Debitur Kredit Analisis< -->
      <li class="nav-item" id="form_analisis">
        <a class="nav-link" href="ka_hasil_analisis.php">
          <i class="fas fa-fw fa-search-dollar" id="icon_analisis" style="color: ;"></i>
          <span id="name_analisis" style="color: ;">Form Input Debitur Kredit Analisis</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">USERNAME</span>
                <img class="img-profile rounded-circle" src="../img/profile.png">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        
        <!-- Begin Page Content -->
        <div class="container-fluid">