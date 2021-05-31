// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#dataTable').DataTable();
});

$(document).ready(function() {
  $('#tabel-data').DataTable({
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
  	},
  	"searching": false,
  	"scrollX": true,
  	"scrollCollapse": true,
  	"scrollY": false,
  	"fixedColumns":  {
  		leftColumns: 0,
  		rightColumns: 1
  	},
    "columns": [
      { "width": "135px" },
      { "width": "100px" },
      { "width": "200px" },
      { "width": "" },
      { "width": "150px" },
      { "width": "100px" },
      { "width": "" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "200px" },
      { "width": "100px" },
      { "width": "100px" },
      { "width": "" },
      { "width": "" },
      { "width": "" },
      { "width": "" },
      { "width": "" },
      { "width": "80px" },
      { "width": "200px" },
      { "width": "130px" },
      { "width": "150px" }
    ]
  });
});

$(document).ready(function() {
  $('#tabel-data-pro').DataTable({
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
    },
    "searching": false,
    "scrollX": true,
    "scrollCollapse": true,
    "scrollY": false,
    "fixedColumns":  {
      leftColumns: 0,
      rightColumns: 1
    },
    "columns": [
      { "width": "135px" },
      { "width": "100px" },
      { "width": "200px" },
      { "width": "50px" },
      { "width": "80px" },
      { "width": "70px" },
      { "width": "80px" },
      { "width": "100px" },
      { "width": "100px" },
      { "width": "120px" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "70px" },
      { "width": "150px" },
      { "width": "" },
      { "width": "" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "" },
      { "width": "" },
      { "width": "" },
      { "width": "80px" },
      { "width": "200px" },
      { "width": "130px" },
      { "width": "150px" }
    ]
  });
});

$(document).ready(function() {
  $('#tabel-data-rekomendasi').DataTable({
    "columns": [
      { "width": "" },
      { "width": "50px", "className": "text-center" },
      { "width": "145px", "className": "dt-body-right" },
      { "width": "145px", "className": "dt-body-right" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "150px" },
      { "width": "80px", "className": "text-center" }
    ]
  });
});

$(document).ready(function() {
  $('#tabel-data-cpa').DataTable({
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
    },
    "searching": true,
    "scrollX": true,
    "scrollCollapse": true,
    "scrollY": false,
    "fixedColumns":  {
      leftColumns: 0,
      rightColumns: 1
    },
    "columns": [
      { "width": "15%" },
      { "width": "30%" },
      { "width": "" },
      { "width": "10%" }
    ]
  });
});

$(document).ready(function() {
  $('#tabel-regional').DataTable({
    "language": {
      "sProcessing":   "Sedang memproses...",
      "sLengthMenu":   "Tampilkan _MENU_ entri",
      "sZeroRecords":  "Tidak ditemukan data yang sesuai",
      "sInfo":         "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "sInfoEmpty":    "0 - 0 dari 0 data",
      "sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
      "sInfoPostFix":  "",
      "sSearch":       "Cari:",
      "sUrl":          "",
      "oPaginate": {
        "sFirst":    "Pertama",
        "sPrevious": "<",
        "sNext":     ">",
        "sLast":     "Terakhir"
      },
      "sEmptyTable": "Tidak ada data di database"
    },
    "lengthChange": false,
    "pageLength" : 5,
    "columns": [
      { "width": "15%", "className": "text-align-center" },
      { "width": "55%" },
      { "width": "30%", "className": "text-align-center" },
    ]
  });
});

$(document).ready(function() {
  $('#tabel-cabang').DataTable({
    "language": {
      "sProcessing":   "Sedang memproses...",
      "sLengthMenu":   "Tampilkan _MENU_ entri",
      "sZeroRecords":  "Tidak ditemukan data yang sesuai",
      "sInfo":         "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "sInfoEmpty":    "Menampilkan 0 - 0 dari 0 data",
      "sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
      "sInfoPostFix":  "",
      "sSearch":       "Cari:",
      "sUrl":          "",
      "oPaginate": {
        "sFirst":    "Pertama",
        "sPrevious": "<",
        "sNext":     ">",
        "sLast":     "Terakhir"
      },
      "sEmptyTable": "Tidak ada data di database"
    },
    "lengthChange": false,
    "pageLength" : 5,
    "columns": [
      { "width": "15%", "className": "text-align-center" },
      { "width": "55%" },
      { "width": "30%", "className": "text-align-center" },
    ]
  });
});

$(document).ready(function() {
  $('#tabel-unit').DataTable({
    "language": {
      "sProcessing":   "Sedang memproses...",
      "sLengthMenu":   "Tampilkan _MENU_ entri",
      "sZeroRecords":  "Tidak ditemukan data yang sesuai",
      "sInfo":         "Menampilkan _START_ - _END_ dari _TOTAL_ data",
      "sInfoEmpty":    "Menampilkan 0 - 0 dari 0 data",
      "sInfoFiltered": "(disaring dari _MAX_ data keseluruhan)",
      "sInfoPostFix":  "",
      "sSearch":       "Cari:",
      "sUrl":          "",
      "oPaginate": {
        "sFirst":    "Pertama",
        "sPrevious": "<",
        "sNext":     ">",
        "sLast":     "Terakhir"
      },
      "sEmptyTable": "Tidak ada data di database"
    },
    "lengthChange": false,
    "pageLength" : 5,
    "columns": [
      { "width": "15%", "className": "text-align-center" },
      { "width": "55%" },
      { "width": "30%", "className": "text-align-center" },
    ]
  });
});

$(document).ready(function() {
  $('#table_jaminan').DataTable({
    "searching": false,
    "lengthChange": false,
    "scrollX": true,
    "scrollCollapse": true,
    "scrollY": false,
    "fixedColumns":  {
      leftColumns: 0,
      rightColumns: 1
    }
  });
});


$(document).ready(function() {
  $('#tabel-churn').DataTable({
    "searching": false,
    "scrollX": true,
    "scrollCollapse": true,
    "scrollY": false,
    "columnDefs": [
      { orderable: false, targets: [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16] }
    ],
    "fixedColumns":  {
      leftColumns: 1,
      rightColumns: 1
    },
    "columns": [
      { "width": "120px", "className": "text-center" },
      { "width": "115px", "className": "text-center" },
      { "width": "120px", "className": "text-center" },
      { "width": "100px", "className": "text-center" },
      { "width": "100px", "className": "text-center" },
      { "width": "120px" },
      { "width": "150px", "className": "dt-body-right" },
      { "width": "50px", "className": "text-center" },
      { "width": "200px" },
      { "width": "200px" },
      { "width": "100px" },
      { "width": "100px" },
      { "width": "80px" },
      { "width": "80px" },
      { "width": "150px" },
      { "width": "100px" },
      { "width": "170px" }
    ]
  });
});


$(document).ready(function() {
  $('#tabel-churn-1').DataTable({
    "searching": false,
    "scrollX": true,
    "scrollCollapse": true,
    "scrollY": false,
    "fixedColumns":  {
      leftColumns: 1,
      rightColumns: 1
    },
    "columns": [
      { "width": "120px", "className": "text-center" },
      { "width": "115px", "className": "text-center" },
      { "width": "120px", "className": "text-center" },
      { "width": "100px", "className": "text-center" },
      { "width": "100px", "className": "text-center" },
      { "width": "120px" },
      { "width": "150px", "className": "dt-body-right" },
      { "width": "50px", "className": "text-center" },
      { "width": "200px" },
      { "width": "200px" },
      { "width": "100px" },
      { "width": "100px" },
      { "width": "80px" },
      { "width": "80px" },
      { "width": "150px" },
      { "width": "100px" },
      { "width": "150px" }
    ]
  });
});
