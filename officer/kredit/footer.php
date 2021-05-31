      
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
          <a class="btn btn-primary" href="../../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Form Input -->
  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php include "forminput.php"; ?>
      </div>
    </div>
  </div>

  <!-- Modal Detail Data -->
  <div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php include "detail-data.php"; ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="hasilPrediksi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="border-radius: 27px;">
        <div class="modal-body">
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
          <center>
            <img src="../../img/success.gif" width=80><br><br>
            <span style="font-size: 2rem; font-weight: bold; color: #000;">Pengajuan Kredit Berhasil</span><br>
          </center>
          
          <hr style="border-top: 1px solid #D8D8D8;">

          <table style="width: 100%; margin-bottom: 20px;">
            <thead style="text-align: center; font-size: 1.2rem;">
              <tr>
                <th colspan="3" style="color: #000;">Hasil Prediksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="table-cus" style="width: 45%;">Recommendation</td>
                <td class="table-cus-1" style="font-weight: bold; width: 5%;">:</td>
                <td class="table-cus-1"> 
                  <span class="accept-debitur">Accept</span>
                  <!-- <span class="reject-debitur">Reject</span> -->
                </td>
              </tr>
              <tr>
                <td class="table-cus">Risk Level</td>
                <td class="table-cus-1">:</td>
                <td class="table-cus-1">
                  <!-- <span class="risk-low">Low</span> -->
                  <span class="risk-medium">Medium</span>
                  <!-- <span class="risk-high">High</span> -->
                </td>
              </tr>
              <tr>
                <td class="table-cus">Prediction</td>
                <td class="table-cus-1">:</td>
                <td class="table-cus-1" style="font-weight: bold; color: #000;">Default / Non-Default</td>
              </tr>
              <tr>
                <td class="table-cus">Default Probability</td>
                <td class="table-cus-1">:</td>
                <td class="table-cus-1" style="font-weight: bold; color: #000;">0</td>
              </tr>
            </tbody>
          </table>
          <br>
          <center>
            <button class="btn btn-primary" type="button" data-dismiss="modal" style="width: 5em;">OK</button>
          </center>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="../../vendor/jquery/jquery.min.js"></script>
  <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../../js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
  
  <!-- Vendor JS-->
  <!-- <script src="vendor/select2/select2.min.js"></script> -->
  <!-- <script src="vendor/datepicker/moment.min.js"></script> -->
  <script src="../../vendor/datepicker/daterangepicker.js"></script>

  <script src="../../js/validasi.js"></script>

  <script src="../../js/global.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="../../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../../vendor/datatables/dataTables.fixedColumns.js"></script>
  <script src="../../vendor/selectpicker/bootstrap-multiselect.js"></script>
  <!-- <script src="vendor/selectpicker/bootstrap-select.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>

  <script src="../../js/demo/datatables-demo.js"></script>
  <script src="../../js/filter.js"></script>

  <script type="text/javascript">
    // $('#organization_type').select2();
    // $(document).ready(function() {
    //   $('#search_by_branch').select2();
    // });

    // $('#search_by_branch').selectpicker();


    // function pilihPeriode() {
    //   $("#tanggal_awal").datepicker('setDate', null);
    //   $("#tanggal_akhir").datepicker('setDate', null);

    //   if (document.getElementById("search_by_periode").value === "Harian") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value = "";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#range_weekly").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_monthly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    //     $("#start_date").show().removeClass("d-none");
    //     $("#range_monthly").show().removeClass("d-none");
    //     $("#end_date").show().removeClass("d-none");
    //     $("#range_weekly").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value = "";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else if (document.getElementById("search_by_periode").value === "Periode") {
    //     $("#start_date").hide();
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#end_date").hide();
    //     $("#month_period").show().removeClass("d-none");
    //     $("#year_period").show().removeClass("d-none");
    //     $("#set_period").show().removeClass("d-none");
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");

    //   } else {
    //     $("#start_date").hide();
    //     $("#range_weekly").hide();
    //     $("#range_monthly").hide();
    //     $("#end_date").hide();
    //     $("#month_period").hide();
    //     $("#year_period").hide();
    //     $("#set_period").hide();
    //     document.getElementById("tanggal_awal").value = "";
    //     document.getElementById("weekly_option").value = "";
    //     document.getElementById("monthly_option").value ="";
    //     document.getElementById("tanggal_akhir").value = "";
    //     document.getElementById("filter_month").value = "";
    //     document.getElementById("year").value = "";
    //     document.getElementById("filter_period").value = "";
    //     $("#tanggal_akhir").attr("disabled", "disabled");
    //     document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //   }
    // }

    // function setStartDate() {
    //   var awal = document.getElementById("tanggal_awal").value;
    //   var weekly_option = document.getElementById("weekly_option").value;
    //   var monthly_option = document.getElementById("monthly_option").value;

    //   if (document.getElementById("search_by_periode").value === "Harian") {
    //     if (awal) {
    //       $("#tanggal_akhir").datepicker("setEndDate", awal);

    //       $("#tanggal_akhir").removeAttr("disabled");
    //       document.querySelector("#tanggal_akhir").classList.add("border-cus");
    //       document.getElementById("tanggal_akhir").value = "";
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   } else if (document.getElementById("search_by_periode").value === "Mingguan") {
    //     if (awal && weekly_option) {
    //       weekly_option = weekly_option * 7;

    //       var set_awal = $("#tanggal_awal").datepicker("getDate");
    //       set_awal.setDate(set_awal.getDate() - weekly_option);

    //       set_akhir = (set_awal.getMonth() + 1) + "/" + set_awal.getDate() + "/" + set_awal.getFullYear();

    //       document.getElementById("tanggal_akhir").value = set_akhir;
    //       console.log(awal);
    //       console.log(document.getElementById("tanggal_akhir").value);
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   } else if (document.getElementById("search_by_periode").value === "Bulanan") {
    //     if (awal && monthly_option) {
    //       monthly_option = monthly_option * 30;

    //       var set_awal = $("#tanggal_awal").datepicker("getDate");
    //       set_awal.setDate(set_awal.getDate() - monthly_option);

    //       set_akhir = (set_awal.getMonth() + 1) + "/" + set_awal.getDate() + "/" + set_awal.getFullYear();

    //       document.getElementById("tanggal_akhir").value = set_akhir;
    //     } else {
    //       $("#tanggal_akhir").attr("disabled", "disabled");
    //       document.querySelector("#tanggal_akhir").classList.remove("border-cus");
    //     }
    //   }
    // }

    $(function () {
      $("#dataTableId").DataTable({        
        "language": {
          "sProcessing":   "Sedang memproses...",
          "sLengthMenu":   "Tampilkan _MENU_ entri",
          "sZeroRecords":  "Tidak ditemukan data yang sesuai",
          "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
          "sInfoPostFix":  "",
          "sSearch":       "Cari:",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "Sebelumnya",
            "sNext":     "Selanjutnya",
            "sLast":     "Terakhir"
          },
          "sEmptyTable": "Tidak ada data di database"
        }
      });
    });

    $(function () {
      $("#dataTableId1").DataTable({        
        "language": {
          "sProcessing":   "Sedang memproses...",
          "sLengthMenu":   "Tampilkan _MENU_ entri",
          "sZeroRecords":  "Tidak ditemukan data yang sesuai",
          "sInfo":         "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          "sInfoEmpty":    "Menampilkan 0 sampai 0 dari 0 entri",
          "sInfoFiltered": "(disaring dari _MAX_ entri keseluruhan)",
          "sInfoPostFix":  "",
          "sSearch":       "Cari:",
          "sUrl":          "",
          "oPaginate": {
            "sFirst":    "Pertama",
            "sPrevious": "Sebelumnya",
            "sNext":     "Selanjutnya",
            "sLast":     "Terakhir"
          },
          "sEmptyTable": "Tidak ada data di database"
        }
      });
    });

    $(".datepicker").datepicker({
      uiLibrary: "bootstrap4",
      format: "mm/dd/yyyy",
      todayHighlight: true
    });

    $(".datepicker").datepicker("setEndDate", new Date());

    $(".datepicker1").datepicker({
      uiLibrary: "bootstrap4",
      format: "mm/dd/yyyy",
      startDate: "-66y",
      endDate: "-21y"
    });

    $(".datepicker2").datepicker({
      uiLibrary: "bootstrap4",
      format: "mm/dd/yyyy",
      todayHighlight: true
    });

    $("#tanggal_awal").datepicker("setEndDate", new Date());

    function selanjutnya() {
      document.querySelector("#page2").classList.add("active");
      document.querySelector(".f1-progress-line").style.width = "100%";
      document.getElementById("form-1").style.display = "none";
      document.getElementById("form-2").style.display = "block";
    }

    function sebelumnya() {
      document.querySelector("#page2").classList.remove("active");
      document.querySelector(".f1-progress-line").style.width = "12.5%";
      document.getElementById("form-1").style.display = "block";
      document.getElementById("form-2").style.display = "none";
    }

    $(document).ready(function(){
      $(".text_field").bind("change", check_field);
    });

    function check_field() {
      var year = $("#year").val();
      var month = $("#month").val();
      var education = $("#education").val();
      var gender = $("input[name=gender]:checked").val();
      var day_age = $("#day_age").val();
      var family_status = $("#family_status").val();
      var organization_type = $("#organization_type").val();
      var income_type = $("#income_type").val();
      var last_update = $("#last_update").val();
      var submission_date = $("#submission_date").val();
      var housing_type = $("#housing_type").val();

      if (!month) {
        month = "";
      }

      if (!education) {
        education = "";
      }

      if (!family_status) {
        family_status = "";
      }

      if (!organization_type) {
        organization_type = "";
      }

      if (!income_type) {
        income_type = "";
      }

      if (!housing_type) {
        housing_type = "";
      }

      if (year != "" && month != "" && education != "" && gender != "" && day_age != "" && family_status != "" && organization_type != "" && income_type != "" && last_update != "" && submission_date != "" && housing_type != "") {
        $("#btnNext").removeAttr("disabled");
      } else {
        $("#btnNext").attr("disabled", "disabled");
      }
    }  

    $(document).ready(function() {
        $('#prediction_risk_cermati').multiselect({
          nonSelectedText: 'Risiko Prediksi',
          allSelectedText: 'Semua dipilih'
        });
    });

    $(document).ready(function() {
        $('#risk_level_cermati').multiselect({
          nonSelectedText: 'Tingkat Risiko',
          allSelectedText: 'Semua dipilih'
        });
    });

    $(document).ready(function() {
        $('#prediction_risk_thelris').multiselect({
          nonSelectedText: 'Risiko Prediksi',
          allSelectedText: 'Semua dipilih'
        });
    });

    $(document).ready(function() {
        $('#risk_level_thelris').multiselect({
          nonSelectedText: 'Tingkat Risiko',
          allSelectedText: 'Semua dipilih'
        });
    });

    $(document).ready(function() {
        $('#prediction_risk_enb').multiselect({
          nonSelectedText: 'Risiko Prediksi',
          allSelectedText: 'Semua dipilih'
        });
    });

    $(document).ready(function() {
        $('#risk_level_enb').multiselect({
          nonSelectedText: 'Tingkat Risiko',
          allSelectedText: 'Semua dipilih'
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
        $("#fitur").hide();
        $("#content1").hide();
        $("#content2").hide();

        setTimeout(function(){
          $("#load").hide();
          $("#fitur").show();
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
