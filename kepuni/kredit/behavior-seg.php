<?php include "header.php"; ?>

	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Behavior Scoring - Dashboard Segmentation</h1>
		</div>
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
						Jumlah Debitur Berdasarkan Pekerjaan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan pekerjaan nasabah bank.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/30aa61c5-ad8e-4578-a67f-9ef49cef3618" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Debitur Berdasarkan Pendidikan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan pendidikan nasabah bank.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0b3d8d1c-0fd0-48c6-a81a-fb94ed901082" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Debitur Berdasarkan Jenis Kelamin
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan jenis kelamin.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/72d16334-18e2-45c3-8554-1dddb7f91182" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Debitur Berdasarkan Status Perkawinan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan status perkawinan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/572790f0-a8b7-4f8c-9889-55381c822528" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Debitur Berdasarkan Jangka Angsuran
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan jangka angsuran.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/9f6591c7-e0d4-4552-b53f-f44d79d3a6d5" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-8 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Total Debitur dengan Pinjaman yang Disetujui
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasatkan jumlah pinjaman yang disetujui.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/12ec4bc5-0271-4f1f-a468-a01380f91acb" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_bs").classList.add("active");
		document.getElementById("icon_bs").style.color = "#F02632";
		document.getElementById("name_bs").style.color = "#F02632";
		document.getElementById("icon_bs_seg").style.color = "#F02632";
		document.getElementById("name_bs_seg").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>