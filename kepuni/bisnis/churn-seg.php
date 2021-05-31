<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Churn Prevention - Dashboard Segmentation</h1>
	</div>

	<div class="row col-lg-12 mb-3" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik" style="float: left;">
				<input class="form-control bg-light border-cus small filter-behavior-prediction" id="cif_behavior_seg"  list="cifList" name="cif_behavior_seg" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
				<datalist id="cifList">
				</datalist>
			</div>

			<div class="input-group col-1 mb-2" id="reset_button" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKUCBehavior()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_month" style="float: right;">
				<select class="form-control bg-light small" name="filter_month" id="filter_month" disabled="disabled">
					<option value="" disabled="disabled" selected="selected">Bulan</option>
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
			</div>

			<div class="col-lg-1 col-md-6 mb-2" id="search_by_year" style="float: right;">
				<select class="form-control bg-light border-cus small" style="padding-left: 0.25em;" name="year" id="year" onchange="pilihTahun()">
					<option value="" disabled="disabled" selected="selected">Tahun</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_officer" style="float: right;">
				<input class="form-control bg-light border-cus small" list="officerList" id="search_officer" placeholder="Pilih Officer" autocomplete="off">
				<datalist id="officerList">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Jenis Kelamin
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan jenis kelamin.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_jenis_kelamin" src="http://172.17.62.84:3000/public/question/cfbf6e95-a6cd-4d66-84d5-17afaee46848" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Pendidikan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan jenis pendidikan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_pendidikan" src="http://172.17.62.84:3000/public/question/e017b5c1-97a0-41bb-8a9a-83f7c0678d04" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Status Keluarga
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan status keluarga.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_status_keluarga" src="http://172.17.62.84:3000/public/question/e15d5177-9ac3-46f9-a6b6-76a5f20e4222" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Sumber Pendapatan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan jenis sumber pendapatan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_sumber_dana" src="http://172.17.62.84:3000/public/question/142dd229-435b-4f1a-9073-1320cda5bdb6" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Pekerjaan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan jenis pekerjaan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_pekerjaan" src="http://172.17.62.84:3000/public/question/5507ddd5-1950-4008-b99e-7bcfa8b26642" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Nasabah Berdasarkan Bidang Usaha
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah berdasarkan jenis bidang usaha pekerjaan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_bidang_usaha" src="http://172.17.62.84:3000/public/question/100820e4-05c8-4aa6-b9d2-294efc11dd8a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>


	<script type="text/javascript">
		document.getElementById("menu_cp").classList.add("active");
		document.getElementById("icon_cp").style.color = "#F02632";
		document.getElementById("name_cp").style.color = "#F02632";
		document.getElementById("icon_cp_seg").style.color = "#F02632";
		document.getElementById("name_cp_seg").style.color = "#F02632";		
	</script>

<?php include "footer.php"; ?>