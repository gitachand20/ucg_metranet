<?php include "header.php"; ?>

	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Behavior Scoring - Dashboard Segmentation</h1>
		</div>

		<!-- <div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_region">
			<input class="form-control bg-light border-cus small" list="regionList" id="region" placeholder="Pilih Provinsi">
			<datalist id="regionList">
				<option value="ACEH"></option>
				<option value="BALI"></option>
				<option value="DI YOGYAKARTA"></option>
				<option value="DKI JAKARTA"></option>
				<option value="JAWA BARAT"></option>
				<option value="JAWA TENGAH"></option>
				<option value="JAWA TIMUR"></option>
				<option value="KALIMANTAN SELATAN"></option>
				<option value="LAMPUNG"></option>
				<option value="PAPUA"></option>
				<option value="RIAU"></option>
				<option value="SULAWESI SELATAN"></option>
				<option value="SULAWESI UTARA"></option>
				<option value="SUMATERA BARAT"></option>
				<option value="SUMATERA SELATAN"></option>
				<option value="SUMATERA UTARA"></option>
			</datalist>
		</div> -->

		<!-- <div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_cif">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF / NIK" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div> -->
	</div>

	<div class="row col-lg-12">
		<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" id="loan_nik">
		</div>

		<div class="col-lg-2 col-md-6 mb-2">
			<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
				<option value="" disabled="disabled" selected="selected">Jangka Waktu</option>
				<option value="Semua">Lihat Semua</option>
				<option value="Harian">Harian</option>
				<option value="Mingguan">Mingguan</option>
				<option value="Bulanan">Bulanan</option>
				<option value="Periode">Periode</option>
			</select>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-2" id="search_by_regional">
			<input class="form-control bg-light border-cus small" onchange="pilihRegional()" list="regionalList" id="regional" placeholder="Pilih Provinsi">
			<datalist id="regionalList">
				<option value="ACEH"></option>
				<option value="BALI"></option>
				<option value="DI YOGYAKARTA"></option>
				<option value="DKI JAKARTA"></option>
				<option value="JAWA BARAT"></option>
				<option value="JAWA TENGAH"></option>
				<option value="JAWA TIMUR"></option>
				<option value="KALIMANTAN SELATAN"></option>
				<option value="LAMPUNG"></option>
				<option value="PAPUA"></option>
				<option value="RIAU"></option>
				<option value="SULAWESI SELATAN"></option>
				<option value="SULAWESI UTARA"></option>
				<option value="SUMATERA BARAT"></option>
				<option value="SUMATERA SELATAN"></option>
				<option value="SUMATERA UTARA"></option>
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
			<button class="btn btn-custom" type="button" onclick="resetRegional()" style="width: 100%;">
				<span class="icon1 text-white-80">
					<i class="fa fa-refresh fa-sm"></i>
				</span>
				<!-- <span class="text">Reset</span> -->
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

		<div class="form-group row col-lg-3 col-md-6 d-none" id="set_period">
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
		</div>
	</div>

	<!-- <div class="row">
		<div class="col-lg-12">
			<div class="form-group row">
				<div class="col-lg-2 col-md-6 mb-2">
					<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
						<option value="Semua" selected="selected">Lihat Semua</option>
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
	</div> -->

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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/0636da41-c5f4-48fd-94ed-4664b2f608bc" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ec973a9e-2eab-4c4c-967b-19b1401190a7" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/255056a7-e692-421b-8574-c048f6ffe04d" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/7e009d52-2a55-41f8-9801-d9e3682f9e27" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2f5a646a-b771-458d-9017-8b9bf94355c3" frameborder="0" width="100%" height="450" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c405bc5b-ac84-4aaf-8d35-5acf032b8bdc" frameborder="0" width="100%" height="450" allowtransparency></iframe>
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
						Jumlah Pinjaman Berdasarkan Kategori Pendapatan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman (loan) berdasarkan jenis kategori pendapatan nasabah bank.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/100a6cb4-b6fe-41a9-ba69-6e0baa6f8c4e" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Kepemilikan Tempat Tinggal
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman (loan) berdasarkan jenis kepemilikan tempat tinggal nasabah bank.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ae1ee468-d4f2-46b2-aea2-187815171b2d" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Pembayaran Bunga
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan jenis pembayaran bunga (interest).
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/f301191c-8d77-40cc-9505-4a232f746c07" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Tingkat Bunga
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan tingkat bunga (interest rate).
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/68c68bba-9275-48aa-9fb1-6feda39562e1" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Regional
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah nasabah dan total amount berdasarkan wilayah sesuai dengan data filter yang di input.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c2a46ace-6deb-4d10-9ad3-946267e8ecdc" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Total Pembayaran Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan total pembayaran pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b884bd59-3c5b-4852-b355-924b339d26a5" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Jenis Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan jenis pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/42de21b5-c89f-4ea5-b2f3-c6780f6f81d0" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Jangka Waktu Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan jangka waktu pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/145f2e43-3c9e-4913-94b9-684c6e7fef13" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row mb-4">
		<div class="col-12">
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/d8a0aeb2-1b07-4dfe-8fc3-f925b7260642" width="100%" height="600"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rata - Rata Saldo Pembayaran Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan nilai rata - rata saldo pembayaran pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/3ef9157b-f9d3-425c-a9b0-2d8f868a4c66" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Total Pembayaran Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman berdasarkan total pembayaran pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b99b3d6c-0a93-4b92-a5c8-351e49a25c27" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Transaksi Berdasarkan Debit dan Kredit
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan transaksi jumlah amount debit dan kredit.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/df27bec8-c9ac-42c3-a61d-774c6ed32e44" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Sifat Pinjaman Berdasarkan Jangka Waktu Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah angka pinjaman yang bersifat Baik (Good) dan Buruk (Bad) dilihat dari lamanya jangka waktu pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/acf065dc-ba44-4e27-919d-1b1ff2f10f99" width="100%" height="350"></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/10dddd54-f059-4bbe-8ade-ad127f3a5dd0" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman Berdasarkan Lokasi Kota
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan lokasi kota.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/35ebe88a-8937-4919-9e66-606f4857678a" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Debitur Berdasarkan Nilai Limit Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total debitur berdasarkan nilai limit pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ccee41db-6c56-46bc-913a-9ac25887c28c" width="100%" height="400"></iframe>
				</div>
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