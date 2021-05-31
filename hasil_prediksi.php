<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Debitur</h1>
	</div>

	<div class="mb-4" style="width: 100%; float: right;">
		<!-- <a href="#" class="btn btn-custom btn-icon-split" data-toggle="modal" data-target=".bd-example-modal-lg" data-backdrop="static" data-keyboard="false" style="float: right;">
			<span class="icon1 text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data</span>
		</a> -->

		<a href="form-input.php" class="btn btn-custom btn-icon-split" style="float: right;">
			<span class="icon1 text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data</span>
		</a>
	</div>

 	<div class="card shadow mb-4" style="display: none;">
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
 					<thead style="text-align: center;">
 						<tr>
 							<th>No</th>
 							<th>Prediction</th>
 							<th>Bad Probability</th>
 							<th>Bad Segmentation</th>
 							<th>Ket</th>
 						</tr>
 					</thead>
 					<tbody>
 						<tr>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td style="text-align: center;">
 								<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data" onclick="format()">
		 							<span class="text">View</span>
		 						</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<div class="card shadow mb-4">
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-striped table-bordered" id="dataTableId" width="100%" cellspacing="0">
 					<thead style="text-align: center;">
 						<tr>
 							<th>No</th>
 							<th>Recomendation</th>
 							<th>Risk Level</th>
 							<th>Prediction</th>
 							<th>Default Probability</th>
 							<th>Ket</th>
 						</tr>
 					</thead>
 					<tbody>
 						<tr>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td style="text-align: center;">
 								<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data" onclick="format1()">
		 							<span class="text">View 1</span>
		 						</a>

		 						<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data1" onclick="format1()">
		 							<span class="text">View 2</span>
		 						</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<div class="card">
 		<div class="card-body">
 			<form class="form-row">
    <div class="form-group col-md-4">
        <label for="name" class="control-label">Line Height</label>
        <input type="number" value='' class="form-control" id="lineHeight">
    </div>
    <div class="form-group col-md-4">
        <label for="name" class="control-label">Padding Top</label>
        <input type="number" value='' class="form-control" id="paddingTop" />
    </div>
    <div class="form-group col-md-4">
        <label for="name" class="control-label">Padding Bottom</label>
        <input type="number" value='' class="form-control" id="paddingBottom">
    </div>
</form>
 		</div>
 	</div>

 	<div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h3 class="modal-title judul">DETAIL DATA</h3>
 					<a href="hasil_prediksi.php" class="close">
 						<span aria-hidden="true" style="color: #fff;">×</span>
 					</a>
 				</div>
 				<div class="modal-body" style="background-color: #DCDCDC;">
 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_umur">Umur</label>
 							<input type="text" class="form-control" id="detail_umur" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_jenis_kelamin">Jenis Kelamin</label>
 							<input type="text" class="form-control" id="detail_jenis_kelamin" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_dom_provinsi">Provinsi</label>
 							<input type="text" class="form-control" id="detail_dom_provinsi" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_pendidikan">Pendidikan</label>
 							<input type="text" class="form-control" id="detail_pendidikan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_status_kawin">Status Perkawinan</label>
 							<input type="text" class="form-control" id="detail_status_kawin" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_pekerjaan">Pekerjaan</label>
 							<input type="text" class="form-control" id="detail_pekerjaan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_sumber_dana">Sumber Dana</label>
 							<input type="text" class="form-control" id="detail_sumber_dana" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_penghasilan">Penghasilan</label>
 							<input type="text" class="form-control" id="detail_penghasilan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_angsuran">Angsuran</label>
 							<input type="text" class="form-control" id="detail_angsuran" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_tenor">Tenor</label>
 							<input type="text" class="form-control" id="detail_tenor" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_plafon">Plafon</label>
 							<input type="text" class="form-control" id="detail_plafon" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_admin_fee">Biaya Admin</label>
 							<input type="text" class="form-control" id="detail_admin_fee" readonly>
 						</div>
 					</div>		
 				</div>
 				<div class="modal-footer">
 					<a href="hasil_prediksi.php" class="btn btn-secondary">Tutup</a>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade" id="detail-data1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h3 class="modal-title judul">DETAIL DATA</h3>
 					<a href="hasil_prediksi.php" class="close">
 						<span aria-hidden="true" style="color: #fff;">×</span>
 					</a>
 				</div>
 				<div class="modal-body">
 					<center>
	 					<table width="60%" class="tabel">
	 						<tbody>
	 							<tr>
	 								<td class="font-weight-bold" width="40%">Umur</td>
	 								<td width="10%">:</td>
	 								<td>48</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Jenis Kelamin</td>
	 								<td>:</td>
	 								<td>Not Defined</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Provinsi</td>
	 								<td>:</td>
	 								<td>KALIMANTAN SELATAN</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Pendidikan</td>
	 								<td>:</td>
	 								<td>SMK</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Status Perkawinan</td>
	 								<td>:</td>
	 								<td>Single</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Pekerjaan</td>
	 								<td>:</td>
	 								<td>PNS</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Sumber Dana</td>
	 								<td>:</td>
	 								<td>7</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Penghasilan</td>
	 								<td>:</td>
	 								<td>Rp 9,900,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Angsuran</td>
	 								<td>:</td>
	 								<td>Rp 4,500,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Tenor</td>
	 								<td>:</td>
	 								<td>12</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Plafon</td>
	 								<td>:</td>
	 								<td>Rp 54,000,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Biaya Admin</td>
	 								<td>:</td>
	 								<td>Rp 540,000</td>
	 							</tr>
	 						</tbody>
	 					</table>
	 				</center>

	 				<div style="float: right; margin-top: 30px;">
	 					<a href="hasil_prediksi.php" class="btn btn-tutup">Tutup</a>
	 				</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<script type="text/javascript">
		document.getElementById("form_input").classList.add("active");
		document.getElementById("icon_form").style.color = "#F02632";
		document.getElementById("name_form").style.color = "#F02632";

		function rubah(angka){
			var reverse = angka.toString().split('').reverse().join(''),
			ribuan = reverse.match(/\d{1,3}/g);
			ribuan = ribuan.join(',').split('').reverse().join('');
			return ribuan;
		}

		function format() {
			var gender = "M";

			if (gender === "M") {
				gender = "Male";
			} else {
				gender = "Female";
			}

			document.getElementById("detail_approved_credit").value = "Rp. " + rubah(15000000);
			document.getElementById("detail_ext_score_2").value = "0.12";
			document.getElementById("detail_days_work").value = "-" + rubah(1000);
			document.getElementById("detail_education").value = "Higher education";
			document.getElementById("detail_day_age").value = "-" + rubah(7944);
			document.getElementById("detail_gender").value = gender;
			document.getElementById("detail_family_status").value = "Single / not married";
			document.getElementById("detail_organization_type").value = "Restaurant";
			document.getElementById("detail_days_id_change").value = "0";
			document.getElementById("detail_contract_type").value = "Cash loans";
			document.getElementById("detail_income").value = "Rp. " + rubah(10000000);
			document.getElementById("detail_housing_type").value = "House / apartment";
			document.getElementById("detail_annuity").value = "Rp. " + rubah(416667);
			document.getElementById("detail_price").value = "Rp. " + rubah(15000000);
			document.getElementById("detail_days_registration").value = "0";
		}

		function format1() {
			var jenis_kelamin = "";

			if (jenis_kelamin === "Male") {
				jenis_kelamin = "Laki - laki";
			} else if (jenis_kelamin === "Female") {
				jenis_kelamin = "Perempuan";
			} else {
				jenis_kelamin = "Tidak Diketahui";
			}

			document.getElementById("detail_jenis_kelamin").value = jenis_kelamin;
			document.getElementById("detail_penghasilan").value = "Rp " + rubah(12000000);
			document.getElementById("detail_angsuran").value = "Rp " + rubah(12000000);
			document.getElementById("detail_plafon").value = "Rp " + rubah(12000000);
			document.getElementById("detail_admin_fee").value = "Rp " + rubah(12000000);
		}
	</script>

<?php include "footer.php"; ?>