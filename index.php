<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Metranet</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="img/telkom.png">

  <style type="text/css">
    body {
      background-image: url("img/background.png");
      background-size: contain;
      background-repeat: no-repeat;
      background-position: bottom;
    }
  </style>

</head>

<body>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-8 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <!-- <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1> -->
                    <img src="img/telkom1.png" width="120px" height="60px"><br><br>
                    <h1 class="h3 font-weight-bold text-gray-900 mb-4">Selamat Datang</h1>
                    <h1 class="h5 text-gray-900 mb-4">Silakan masuk untuk melanjutkan</h1>
                  </div>
                  <form class="user mb-4" name="form_in" action="home.php" method="post">
                    <div class="form-group">
                      <!-- <label for="email_in" style="color: #000; font-size: .9rem;">Email</label> -->
                      <input name="email_in" id="email_in" type="email" class="form-control form-control-user" autocomplete="off" placeholder="Email">
                    </div>

                    <div class="form-group">
                     <!-- <label for="pass_in" style="color: #000; font-size: .9rem;">Kata Sandi</label> -->
                      <input name="pass_in" id="pass_in" type="password" class="form-control form-control-user" placeholder="Kata Sandi">
                    </div>

                    <input type="submit" class="btn btn-custom btn-user btn-block font-weight-bold" name="sign_in" value="MASUK"> 
                  </form>
                  <div class="text-center">
                    <h1 class="h6 text-gray-900 mb-4">Belum punya akun ? <a href="register.php" class="link-detail font-weight-bold">Daftar</a></h1>
                    <hr>

                    <div class="row mb-2">
                      <div class="col-lg-6">
                        <a href="kepreg/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">KEPALA REGIONAL</a>
                      </div>

                      <div class="col-lg-6">
                        <a href="kepcab/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">KEPALA CABANG</a>
                      </div>
                    </div>

                    <div class="row mb-2">
                      <div class="col-lg-3">
                        <a href="kepuni/kredit/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">KU Kredit</a>
                      </div>

                      <div class="col-lg-3">
                        <a href="kepuni/bisnis/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">KU Bisnis</a>
                      </div>
                      <div class="col-lg-3">
                        <a href="officer/kredit/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">OF Kredit</a>
                      </div>

                      <div class="col-lg-3">
                        <a href="officer/bisnis/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">OF Bisnis</a>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <a href="form_debitur/home.php" class="btn btn-custom btn-user btn-block font-weight-bold">FORM INPUT DEBITUR SALES OFFICER</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
