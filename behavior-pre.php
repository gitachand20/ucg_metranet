<?php include "header.php"; ?>

	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Behavior Scoring - Dashboard Prediction</h1>
		</div>

		<!-- <div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option value="Branch1">Branch1</option>
				<option value="Branch2">Branch2</option>
				<option value="Branch3">Branch3</option>
				<option value="Branch4">Branch4</option>
				<option value="Branch5">Branch5</option>
				<option value="Branch6">Branch6</option>
				<option value="Branch7">Branch7</option>
				<option value="Branch8">Branch8</option>
				<option value="Branch9">Branch9</option>
			</datalist>
		</div> -->

		<!-- <div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_cif">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div> -->
	</div>

	<div class="row col-lg-12">
		<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" id="search_id">
		</div>

		<!-- <div class="col-lg-2 col-md-6 mb-2" id="search_by_region">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="branch_cre_op" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option data-id="1" value="Branch1"></option>
				<option data-id="2" value="Branch2"></option>
				<option data-id="3" value="Branch3"></option>
				<option data-id="4" value="Branch4"></option>
				<option data-id="5" value="Branch5"></option>
				<option data-id="6" value="Branch6"></option>
				<option data-id="7" value="Branch7"></option>
				<option data-id="8" value="Branch8"></option>
				<option data-id="9" value="Branch9"></option>
			</datalist>
		</div> -->

		<div class="col-lg-2 col-md-6 mb-2">
			<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
				<option value="" disabled="disabled" selected="selected">Pilih Periode</option>
				<!-- <option value="Semua">Lihat Semua</option> -->
				<option value="Harian">Harian</option>
				<option value="Mingguan">Mingguan</option>
				<option value="Bulanan">Bulanan</option>
				<option value="Periode">Periode</option>
			</select>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-2" id="search_by_redional">
			<input class="form-control bg-light border-cus small" onchange="pilihRegional()" list="regionalList" id="regional" placeholder="Pilih Regional">
			<datalist id="regionalList">
				<option value="REGIONAL 1"></option>
				<option value="REGIONAL 2"></option>
				<option value="REGIONAL 3"></option>
				<option value="REGIONAL 4"></option>
				<option value="REGIONAL 5"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-2 d-none" id="search_by_cabang">
			<input class="form-control bg-light border-cus small" onchange="pilihCabang()" list="cabangList" id="cabang" placeholder="Pilih Cabang">
			<datalist id="cabangList">
				<option value="CABANG 1"></option>
				<option value="CABANG 2"></option>
				<option value="CABANG 3"></option>
				<option value="CABANG 4"></option>
				<option value="CABANG 5"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-2 d-none" id="search_by_unit">
			<input class="form-control bg-light border-cus small" list="unitList" id="unit" placeholder="Pilih Unit">
			<datalist id="unitList">
				<option value="UNIT 1"></option>
				<option value="UNIT 2"></option>
				<option value="UNIT 3"></option>
				<option value="UNIT 4"></option>
				<option value="UNIT 5"></option>
			</datalist>
		</div>

		<div class="input-group col-1 mb-2" id="reset_button">
			<button class="btn btn-custom" type="button" onclick="resetPencarian1()">
				<span class="text">Reset</span>
			</button>
		</div>
	</div>

	<hr class="d-none" id="txt_garis" style="border-top: 1px solid #000;">
	<span class="mb-2 d-none" id="txt_harian"  style="float: left; color: #000;">Jangka Waktu Harian :</span>
	<span class="mb-2 d-none" id="txt_mingguan" style="float: left; color: #000;">Jangka Waktu Mingguan :</span>
	<span class="mb-2 d-none" id="txt_bulanan" style="float: left; color: #000;">Jangka Waktu Bulanan :</span>
	<span class="mb-2 d-none" id="txt_periode" style="float: left; color: #000;">Jangka Waktu Periode :</span>

	<div class="row col-lg-12 mb-4">
		<div class="form-group row col-lg-3 col-md-6 d-none" id="range_weekly">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="30%" valign="middle"><label for="weekly_option">Minggu Ke</label></td>
						<td>
							<select class="form-control bg-light border-cus small" id="weekly_option" onchange="setStartDate()">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="1">1 Minggu</option>
								<option value="2">2 Minggu</option>
								<option value="3">3 Minggu</option>
								<option value="4">4 Minggu</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="range_monthly">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="25%" valign="middle"><label for="monthly_option">Rentang</label></td>
						<td>
							<select class="form-control bg-light border-cus small" id="monthly_option" onchange="setStartDate()">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="1">1 Bulan</option>
								<option value="2">2 Bulan</option>
								<option value="3">3 Bulan</option>
								<option value="4">4 Bulan</option>
								<option value="5">5 Bulan</option>
								<option value="6">6 Bulan</option>
								<option value="7">7 Bulan</option>
								<option value="8">8 Bulan</option>
								<option value="9">9 Bulan</option>
								<option value="10">10 Bulan</option>
								<option value="11">11 Bulan</option>
								<option value="12">12 Bulan</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="start_date">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="15%" valign="middle"><label for="tanggal_awal">Dari</label></td>
						<td>
							<input class="form-control datepicker2 bg-light border-cus small" type="text" name="tanggal_awal" id="tanggal_awal" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" onchange="setStartDate()" required>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="end_date">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="10%" valign="middle"><label for="tanggal_akhir">Ke</label></td>
						<td>
							<input class="form-control datepicker2 bg-light small" type="text" name="tanggal_akhir" id="tanggal_akhir" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" disabled="disabled" required>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="month_period">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="18%" valign="middle"><label for="filter_month">Bulan</label></td>
						<td>
							<select class="form-control bg-light border-cus small" name="filter_month" id="filter_month">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="1">Januari</option>
								<option value="2">Februari</option>
								<option value="3">Maret</option>
								<option value="4">April</option>
								<option value="5">Mei</option>
								<option value="6">Juni</option>
								<option value="7">Juli</option>
								<option value="8">Agustus</option>
								<option value="9">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="year_period">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="18%" valign="middle"><label for="year">Tahun</label></td>
						<td>
							<select class="form-control bg-light border-cus small" name="year" id="year">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="2020">2020</option>
								<option value="2019">2019</option>
								<option value="2018">2018</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<!-- <div class="form-group row col-lg-3 col-md-6 d-none" id="set_period">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="22%" valign="middle"><label for="filter_period">Periode</label></td>
						<td>
							<select class="form-control bg-light border-cus small" name="filter_period" id="filter_period">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="3">3-Months</option>
								<option value="6">6-Months</option>
								<option value="9">9-Months</option>
								<option value="12">12-Months</option>
							</select>
						</td>
					</tr>
				</table>
			</div>
		</div> -->
	</div>

	<!-- <div class="row">
		<div class="col-lg-12">
			<div class="form-group row">
				<div class="col-lg-2 col-md-6 mb-2">
					<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
						<option value="Semua" selected="selected" disabled="">Lihat Semua</option>
						<option value="Harian">Harian</option>
						<option value="Mingguan">Mingguan</option>
						<option value="Bulanan">Bulanan</option>
						<option value="Periode">Periode</option>
					</select>
				</div>

				<div class="col-lg-2 col-md-6 mb-1 d-none" id="start_date">
					<input class="form-control datepicker2 bg-light border-cus small" type="text" name="tanggal_awal" id="tanggal_awal" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" onchange="setStartDate()" required>
				</div>

				<div class="col-lg-2 col-md-6 mb-2 d-none" id="range_weekly">
					<select class="form-control bg-light border-cus small" id="weekly_option" onchange="setStartDate()">
						<option value="" disabled="disabled" selected="selected">Pilih</option>
						<option value="1">1 Minggu</option>
						<option value="2">2 Minggu</option>
						<option value="3">3 Minggu</option>
						<option value="4">4 Minggu</option>
					</select>
				</div>

				<div class="col-lg-2 col-md-6 mb-2 d-none" id="range_monthly">
					<select class="form-control bg-light border-cus small" id="monthly_option" onchange="setStartDate()">
						<option value="" disabled="disabled" selected="selected">Pilih</option>
						<option value="1">1 Bulan</option>
						<option value="2">2 Bulan</option>
						<option value="3">3 Bulan</option>
						<option value="4">4 Bulan</option>
						<option value="5">5 Bulan</option>
						<option value="6">6 Bulan</option>
						<option value="7">7 Bulan</option>
						<option value="8">8 Bulan</option>
						<option value="9">9 Bulan</option>
						<option value="10">10 Bulan</option>
						<option value="11">11 Bulan</option>
						<option value="12">12 Bulan</option>
					</select>
				</div>

				<div class="col-lg-2 col-md-6 mb-2 d-none" id="end_date">
					<input class="form-control datepicker2 bg-light small" type="text" name="tanggal_akhir" id="tanggal_akhir" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" disabled="disabled" required>
				</div>

				<div class="col-lg-2 col-md-3 col-sm-3 mb-2 d-none" id="month_period">
					<select class="form-control bg-light border-cus small" name="filter_month" id="filter_month">
						<option value="" disabled="disabled" selected="selected">Bulan</option>
						<option value="1">Januari</option>
						<option value="2">Februari</option>
						<option value="3">Maret</option>
						<option value="4">April</option>
						<option value="5">Mei</option>
						<option value="6">Juni</option>
						<option value="7">Juli</option>
						<option value="8">Agustus</option>
						<option value="9">September</option>
						<option value="10">Oktober</option>
						<option value="11">November</option>
						<option value="12">Desember</option>
					</select>
				</div>

				<div class="col-lg-2 col-md-3 col-sm-3 mb-2 d-none" id="year_period">
					<select class="form-control bg-light border-cus small" name="year" id="year">
						<option value="" disabled="disabled" selected="selected">Tahun</option>
						<option value="2020">2020</option>
						<option value="2019">2019</option>
						<option value="2018">2018</option>
					</select>
				</div>

				<div class="col-lg-2 col-md-3 col-sm-3 mb-2 d-none" id="set_period">
					<select class="form-control bg-light border-cus small" name="filter_period" id="filter_period">
						<option value="" disabled="disabled" selected="selected">Periode</option>
						<option value="3">3-Months</option>
						<option value="6">6-Months</option>
						<option value="9">9-Months</option>
						<option value="12">12-Months</option>
					</select>
				</div>
			</div>
		</div>

		<div class="col-lg-4 col-sm-12">
			<div class="form-group row">
				<div class="col-lg-6 col-sm-6 justify-content-center">
					<select id="prediction_risk_thelris" multiple="multiple">
						<option value="Good">Good</option>
						<option value="Bad">Bad</option>
					</select>
				</div>

				<div class="col-lg-6 col-sm-6 justify-content-center">
					<select id="risk_level_thelris" multiple="multiple">
						<option value="Low">Low</option>
						<option value="Medium">Medium</option>
						<option value="High">High</option>
					</select>
				</div>
			</div>
		</div>
	</div> -->

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Performansi Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) yang diprediksikan sebagai Baik (Good) atau Buruk (Bad).
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/dc2763f2-265a-4b31-b281-2472430d554a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Performansi Pinjaman Berdasarkan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) berdasarkan tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/9cb4a539-f402-4b28-ac2f-dd496caab989" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Performansi Pinjaman Berdasarkan Prediksi dan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman yang diprediksi sebagai Baik (Good) atau Buruk (Bad) dilihat dari tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/073cf766-318f-4581-bbed-a31416339dd4" frameborder="0" width="100%" height="400" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Data Nasabah
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Menampilkan data nasabah secara keseluruhan sesuai dengan data filter yang di input.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/d89e806d-f8a2-45aa-818d-c7d9ec73c24f" frameborder="0" width="100%" height="600" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

<div class="d-none">
	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Performansi Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) yang diprediksikan sebagai Baik (Good) atau Buruk (Bad).
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b7aa5505-d82d-4551-bf92-bd6c6698fee2" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Performansi Pinjaman Berdasarkan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) berdasarkan tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/93a190de-31be-433a-abbf-c83539c6b462" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
						Rekomendasi Up / Cross Selling
					</span>
				</div>
				<div class="card-body">

				</div>
			</div>
		</div> 

		<div class="col-lg-8 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Performansi Pinjaman Berdasarkan Prediksi dan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman yang diprediksi sebagai Baik (Good) atau Buruk (Bad) dilihat dari tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/3f6d2ac2-b8d4-4bec-9319-04174201a7bd" width="100%" height="400"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Data Nasabah
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Menampilkan data nasabah secara keseluruhan sesuai dengan data filter yang di input.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/9dabf41a-0b8b-4692-b4fb-9cc1d0914132" width="100%" height="600"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Performansi Pinjaman Berdasarkan Kondisi Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) berdasarkan kondisi pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/f4b2fa8e-d956-4b97-9871-0ee543ee0dc3" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Performansi Pinjaman Berdasarkan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) berdasarkan tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/13a9b6b7-6a3e-48d7-b3df-ab5dd7d2c73a" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-4 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rekomendasi Up / Cross Selling
					</span>
				</div>
				<div class="card-body">

				</div>
			</div>
		</div>

		<div class="col-lg-8 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Angka Pinjaman Berdasarkan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman yang diprediksi sebagai Baik (Good) atau Buruk (Bad) dilihat dari tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/283f4ecf-6158-437e-b1e2-6c82f5405e93" width="100%" height="600"></iframe>
				</div>
			</div>
		</div>
	</div>
</div>

	<script type="text/javascript">
		document.getElementById("menu_bs").classList.add("active");
		document.getElementById("icon_bs").style.color = "#F02632";
		document.getElementById("name_bs").style.color = "#F02632";
		document.getElementById("icon_bs_pre").style.color = "#F02632";
		document.getElementById("name_bs_pre").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>