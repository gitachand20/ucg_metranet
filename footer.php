      
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span><br>
            <span>Versi 2.0</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Form Input Modal -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php include "forminput.php"; ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="hasilPrediksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" style="font-weight: bold;">HASIL PREDIKSI</h3>
          <a href="hasil_prediksi.php" class="close">
            <span aria-hidden="true">×</span>
          </a>
        </div>
        <div class="modal-body">
          <table style="width: 100%;">
            <tr>
              <td style="font-weight: bold; width: 40%;">DEFAULT PROBABILITY</td>
              <td style="width: 5%;">:</td>
              <td>______________</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">PREDICTION</td>
              <td>:</td>
              <td>______________</td>
            </tr>
            <tr>
              <td style="font-weight: bold;">PREDICTION LEVEL</td>
              <td>:</td>
              <td>______________</td>
            </tr>
          </table>
        </div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="hasil_prediksi.php">OK</a>
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

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
  
  <!-- Vendor JS-->
  <!-- <script src="vendor/select2/select2.min.js"></script> -->
  <!-- <script src="vendor/datepicker/moment.min.js"></script> -->
  <!-- <script src="vendor/datepicker/daterangepicker.js"></script> -->
  
  <script src="js/validasi.js"></script>

  <script src="js/global.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="js/demo/datatables-demo.js"></script>

  <script type="text/javascript">
    // $('#organization_type').select2();
    $(document).ready(function () {
      $( "#day_age" ).datepicker({
        dateFormat: "yyyy/mm/dd"
      }); 
    });

    function spinner() {
      if ($("#load").hasClass("d-none")){
        $("#load").hide().removeClass("d-none");
        $("#load").show();

        setTimeout(function(){
        if ($("#content1").hasClass("d-none")){
            $("#load").hide();
            $("#fitur").hide().removeClass("d-none");
            $("#fitur").show();
            $("#content1").hide().removeClass("d-none");
            $("#content1").show();
          }
        },5000);
      } else {
        $("#load").show();
        $("#content1").hide();
        $("#content2").hide();

        setTimeout(function(){
          $("#load").hide();
          $("#content1").show();
        },5000);
      }
    }

    function spinner1() {
      if ($("#content2").hasClass("d-none")){
        $("#load").hide().removeClass("d-none");
        $("#load").show();

        setTimeout(function(){
          $("#load").hide();
          $("#fitur").hide().removeClass("d-none");
          $("#fitur").show();
          $("#content1").hide().removeClass("d-none");
          $("#content1").show();
          $("#content2").hide().removeClass("d-none");
          $("#content2").show();
        },5000);
      } else {
        $("#load").show();
        $("#content2").hide();

        setTimeout(function(){
          $("#load").hide();
          $("#content1").show();
          $("#content2").show();
        },5000);
      }
    }

    function loading() {
      document.getElementsByClassName("loader")[0].style.display = "block";
      setTimeout(function(){
        $("#loading").hide();
        $(".loader").hide();
        $("#btn-load").hide();
        console.log("test");
        if ($("#con_home").hasClass("d-none")){
          $("#con_home").hide().removeClass("d-none");
          $("#con_home").show();
        }
      },5000);
    }
  </script>

  <?php
    if (isset($_GET['id'])) {
      $id = $_GET['id'];
      echo "<script>$('#hasilPrediksi').modal('show');</script>";
    }
  ?>

</body>

</html>
