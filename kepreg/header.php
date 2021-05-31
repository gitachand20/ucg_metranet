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
  <!-- <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">
  <!-- <link href="../css/progress-circle.css" rel="stylesheet"> -->
  <link href="../css/loading.css" rel="stylesheet">
  <!-- <link rel="stylesheet" type="text/css" href="css/carousel.css"> -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

  <!-- Vendor CSS-->
  <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
  <link href="../vendor/datepicker/bootstrap-datepicker.css" rel="stylesheet" media="all">
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="../vendor/datatables/fixedColumns.bootstrap4.css" rel="stylesheet">
  <link href="../vendor/selectpicker/bootstrap-multiselect.css" rel="stylesheet">
  <!-- <link href="vendor/selectpicker/bootstrap-select.css" rel="stylesheet"> -->
  <!-- <link href="vendor/select2/select2.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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

      <!-- Nav Item - Customer Profiling Analysis -->
      <li class="nav-item" id="menu_cpa">
        <a class="nav-link" href="cpa.php">
          <i class="fas fa-fw fa-chart-line" id="icon_cpa" style="color: ;"></i>
          <span id="name_cpa" style="color: ;">Customer Profiling Analysis</span></a>
      </li>

      <!-- Nav Item - Behavior Scoring -->
      <li class="nav-item" id="menu_bs">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#m_bs" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-award" id="icon_bs" style="color: ;"></i>
          <span id="name_bs" style="color: ;">Behavior Scoring</span>
        </a>
        <div id="m_bs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="behavior-pre.php" style="word-wrap: break-word;">
              <i class="fas fa-fw fa-chart-area" id="icon_bs_pre" style="color: ;"></i>
              <span id="name_bs_pre" style="color: ;">Dashboard Prediction</span>
            </a>
            <a class="collapse-item" href="behavior-seg.php">
              <i class="fas fa-fw fa-chart-area" id="icon_bs_seg" style="color: ;"></i>
              <span id="name_bs_seg" style="color: ;">Dashboard Segmentation</span>
            </a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Credit Risk Scoring -->
      <li class="nav-item" id="menu_cs">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#m_cs" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-tachometer-alt" id="icon_cs" style="color: ;"></i>
          <span id="name_cs" style="color: ;">Credit Risk Scoring</span>
        </a>
        <div id="m_cs" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="dashboard-konsumtif.php" style="word-wrap: break-word;">
              <i class="fas fa-fw fa-chart-area" id="icon_cs_kon" style="color: ;"></i>
              <span id="name_cs_kon" style="color: ;">Dashboard Konsumtif</span>
            </a>
            <a class="collapse-item" href="dashboard-produktif.php">
              <i class="fas fa-fw fa-chart-area" id="icon_cs_pro" style="color: ;"></i>
              <span id="name_cs_pro" style="color: ;">Dashboard Produktif</span>
            </a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Churn Prevention -->
      <li class="nav-item" id="menu_cp">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#m_cp" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-refresh" id="icon_cp" style="color: ;"></i>
          <span id="name_cp" style="color: ;">Churn Prevention</span>
        </a>
        <div id="m_cp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="churn-pre.php" style="word-wrap: break-word;">
              <i class="fas fa-fw fa-chart-area" id="icon_cp_pre" style="color: ;"></i>
              <span id="name_cp_pre" style="color: ;">Dashboard Prediction V1</span>
            </a>
            <a class="collapse-item" href="churn-pre-1.php" style="word-wrap: break-word;">
              <i class="fas fa-fw fa-chart-area" id="icon_cp_pre_1" style="color: ;"></i>
              <span id="name_cp_pre_1" style="color: ;">Dashboard Prediction V2</span>
            </a>
            <a class="collapse-item" href="churn-seg.php">
              <i class="fas fa-fw fa-chart-area" id="icon_cp_seg" style="color: ;"></i>
              <span id="name_cp_seg" style="color: ;">Dashboard Segmentation</span>
            </a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Branch Efficiency -->
      <li class="nav-item" id="menu_br">
        <a class="nav-link" href="branch.php">
          <i class="fas fa-fw fa-map-marked-alt" id="icon_br" style="color: ;"></i>
          <span id="name_br" style="color: ;">Branch Efficiency</span></a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">KEPALA REGIONAL</span>
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