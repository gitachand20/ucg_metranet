      
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; UseCaseGeneric@2020</span>
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
          <a class="btn btn-primary" href="../index.php">Logout</a>
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
  <script src="../js/sb-admin-2.js"></script>

  <!-- Page level plugins -->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->

  <!-- Page level custom scripts -->
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <!-- <script src="js/demo/chart-pie-demo.js"></script> -->
  
  <!-- Vendor JS-->
  <!-- <script src="vendor/select2/select2.min.js"></script> -->
  <!-- <script src="vendor/datepicker/moment.min.js"></script> -->
  <script src="../vendor/datepicker/daterangepicker.js"></script>

  <script src="../js/validasi.js"></script>

  <script src="https://unpkg.com/sweetalert2@7.8.2/dist/sweetalert2.all.js"></script>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>
  <script src="../vendor/datatables/dataTables.fixedColumns.js"></script>
  <script src="../vendor/selectpicker/bootstrap-multiselect.js"></script>
  <!-- <script src="vendor/selectpicker/bootstrap-select.js"></script> -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.5.3/js/bootstrapValidator.js"></script> -->

  <script src="../js/demo/datatables-demo.js"></script>
  <!-- <script src="js/filter.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js"></script> -->
  <script src="../vendor/handlebars/handlebars-v4.7.6.js"></script>

  <script type="text/javascript">
    // $('#organization_type').select2();
    // $(document).ready(function() {
    //   $('#search_by_branch').select2();
    // });

    // $('#search_by_branch').selectpicker();

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

    $(".datepicker").datepicker({
      uiLibrary: "bootstrap4",
      format: "mm/dd/yyyy",
      todayHighlight: true
    });

    $(".datepicker").datepicker("setEndDate", new Date());

    $(".datepicker1").datepicker({
      uiLibrary: "bootstrap4",
      format: "mmm/dd/yyyy",
      startDate: "-66y",
      endDate: "-21y"
    });

    $(".datepicker2").datepicker({
      uiLibrary: "bootstrap4",
      format: "mm/dd/yyyy",
      todayHighlight: true
    });

    $("#tanggal_awal").datepicker("setEndDate", new Date());
  </script>

</body>

</html>
