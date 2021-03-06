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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.css" rel="stylesheet">

  <link rel="icon" type="../image/png" href="../img/telkom.png">

  <style type="text/css">
    body {
      background-image: url("../img/admin_pattern.png");
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
                    <img src="../img/telkom1.png" width="120px" height="60px"><br><br>
                    <h1 class="h3 font-weight-bold text-gray-900 mb-4">Admin</h1>
                    <h1 class="h5 text-gray-900 mb-4">Silakan masuk untuk melanjutkan</h1>
                  </div>
                  <form class="user mb-4" name="form_in" action="home.php" method="post">
                    <div class="form-group">
                      <!-- <label for="email_in" style="color: #000; font-size: .9rem;">Email</label> -->
                      <input name="email_in" id="email_in" type="email" class="form-control form-control-user" placeholder="Email">
                    </div>

                    <div class="form-group">
                     <!-- <label for="pass_in" style="color: #000; font-size: .9rem;">Kata Sandi</label> -->
                      <input name="pass_in" id="pass_in" type="password" class="form-control form-control-user" placeholder="Kata Sandi">
                    </div>

                    <input type="submit" class="btn btn-custom btn-user btn-block font-weight-bold" name="sign_in" value="MASUK"> 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

</body>

</html>
