<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Segmentation</h1>
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
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_loan">
			<input type="text" class="form-control bg-light border-cus" placeholder="Cari Loan ID / NIK" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div> -->
	</div>

	<div class="row col-lg-12">
		<div class="input-group col-lg-2 col-md-6 mb-2" id="search_by_loan_nik">
			<input type="text" class="form-control bg-light border-cus" id="search_id" placeholder="Cari Loan ID / NIK" aria-label="Search" aria-describedby="basic-addon2">
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

		<div class="input-group col-lg-2 col-md-6 mb-2" id="search_by_cabang">
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
			<button class="btn btn-custom" type="button" onclick="resetFilter()">
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

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Penghasilan Rata - Rata Calon Debitur Berdasarkan Pekerjaan
					</span>

					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total penghasilan rata - rata calon debitur berdasarkan pinjaman.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c9fcaa68-f4d7-44b1-819d-597944c49cff" frameborder="0" width="100%" height="370" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<div class="col-12">
					<center>
						<h5 style="font-weight: bold; color: #fff;">Calon Debitur Berdasarkan Profil</h5>
					</center>
				</div>
				<!-- The slideshow -->
				<div class="carousel-inner">
					<!-- Calon Debitur Berdasarkan Jenis Pekerjaan -->
					<div class="carousel-item active">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/84727714-7969-42e9-a804-349d77b0aa64" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_segmentation">More Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/a5238082-9df6-4730-954d-2f9376f17a4d" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_segmentation">More Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Status Keluarga -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/44c58fec-017a-4259-8bcb-511a8a5bab5b" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_segmentation">More Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/0205eb54-48df-461a-b96c-886fa3123455" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie4_segmentation">More Detail</a>
						</center>
					</div>
				</div>
			</div>

			<!-- Left and right controls -->
			<a class="carousel-control-prev" href="#demo" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a class="carousel-control-next" href="#demo" data-slide="next">
				<span class="carousel-control-next-icon"></span>
			</a>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Nilai Plafon Berdasarkan Kategori Pekerjaan
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan nilai plafon berdasarkan kategori pekerjaan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/edfc0ab6-d978-4820-9365-fc57c63c9e45" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Pinjaman yang Disetujui Berdasarkan Domisili
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah pinjaman yang disetujui berdasarkan domisili.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/dc1ab057-e955-4756-a2ea-21c0b5bbab4b" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

<div class="col-12 d-none">
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Calon Debitur Berdasarkan Jumlah Angsuran Pembayaran Pinjaman
						</span>
						
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total calon debitur berdasarkan jumlah angsuran pembayaran pinjaman.
							</span>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/60978300-d763-4db0-ae5b-daafe960c6a9" width="100%" height="350"></iframe>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 mb-4">
				<div id="demo" class="carousel slide" data-ride="carousel">
					<div class="col-12">
						<center>
							<h5 style="font-weight: bold; color: #fff;">Calon Debitur Berdasarkan Profil</h5>
						</center>
					</div>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<!-- Calon Debitur Berdasarkan Jenis Pinjaman -->
						<div class="carousel-item active">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/26bb9f24-1f9b-4e2b-91fc-3daa4110c3d8" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_segmentation">More Detail</a>
							</center>
						</div>

						<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
						<div class="carousel-item">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/10b56243-d71a-4e01-8c1f-2d18dd102ea6" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_segmentation">More Detail</a>
							</center>
						</div>

						<!-- Calon Debitur Berdasarkan Status Keluarga -->
						<div class="carousel-item">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/3407d382-5d94-4c78-a0d6-fbc216af1327" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_segmentation">More Detail</a>
							</center>
						</div>

						<!-- Calon Debitur Berdasarkan Tempat Tinggal -->
						<div class="carousel-item">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/96d13a35-d453-4362-ba40-b46b2113765d" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie4_segmentation">More Detail</a>
							</center>
						</div>

						<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
						<div class="carousel-item">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/9ba22d03-656d-48c0-b525-9befd14a5926" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie5_segmentation">More Detail</a>
							</center>
						</div>

						<!-- Calon Debitur Berdasarkan Kategori Pendapatan -->
						<div class="carousel-item">
							<center>
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/543ab2ba-a932-44a3-8742-264b76561c35" width="100%" height="350"></iframe>
								<br>
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie6_segmentation">More Detail</a>
							</center>
						</div>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-5 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Credit Approval Berdasarkan Kategori Pendapatan
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Menampilkan grafik jumlah dan rata-rata credit approval sesuai dengan kategori pendapatan.
							</span>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/00fae475-9670-471a-90d2-b054a08d4cbd" width="100%" height="400"></iframe>
					</div>
				</div>
			</div>

			<div class="col-lg-7 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Calon Debitur Berdasarkan Jumlah Pinjaman Yang Disetujui
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total calon debitur berdasarkan jumlah pinjaman yang disetujui.
							</span>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ac2d77cc-f306-47c9-b53c-54ee248439fd" width="100%" height="400"></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Approve / Reject
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								
							</span>
						</div>
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Parameter Keputusan Kredit
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								
							</span>
						</div>
					</div>
					<div class="card-body">
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Calon Debitur Berdasarkan Jenis Pekerjaan -->
	<div class="modal fade bd-example-modal-lg" id="pie1_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Pekerjaan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/84727714-7969-42e9-a804-349d77b0aa64" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis pekerjaan.
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
	<div class="modal fade bd-example-modal-lg" id="pie2_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tingkat Pendidikan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/a5238082-9df6-4730-954d-2f9376f17a4d" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini  menampilkan jumlah calon debitur berdasarkan Tingkat Pendidikan.
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Status Keluarga -->
	<div class="modal fade bd-example-modal-lg" id="pie3_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Status Keluarga</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/44c58fec-017a-4259-8bcb-511a8a5bab5b" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan segmentasi status keluarga.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Common-Law : Pernikahan siri.</li>
						<li>Divorce : Dalam proses perceraian.</li>
						<li>Divorced : Bercerai.</li>
						<li>Married : Menikah.</li>
						<li>Single : Lajang.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
	<div class="modal fade bd-example-modal-lg" id="pie4_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Kelamin</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/0205eb54-48df-461a-b96c-886fa3123455" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis kelamin.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Female : Perempuan.</li>
						<li>Male : Laki-laki.</li>
						<li>Not Defined : Tidak Diketahui</li>
					</ul>
				</div>
			</div>
		</div>
	</div>



	<!-- Calon Debitur Berdasarkan Jenis Pinjaman -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie1_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Pinjaman</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/26bb9f24-1f9b-4e2b-91fc-3daa4110c3d8" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis pinjaman.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Cash Loans : Pinjaman Tunai.</li>
						<li>Revolving Loans : Pinjaman Bergulir.</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie2_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Kelamin</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/10b56243-d71a-4e01-8c1f-2d18dd102ea6" width="100%" height="350"></iframe>
					<hr>
					Grafik ini  menampilkan jumlah calon debitur berdasarkan jenis kelamin (laki-laki atau perempuan).
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>F : Perempuan.</li>
						<li>M : Laki-laki.</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Calon Debitur Berdasarkan Status Keluarga -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie3_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Status Keluarga</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/3407d382-5d94-4c78-a0d6-fbc216af1327" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan segmentasi status keluarga.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Civil marriage : Pernikahan sipil.</li>
						<li>Married : Menikah.</li>
						<li>Separated : Bercerai.</li>
						<li>Single / not married : Lajang.</li>
						<li>Widow : Janda/Duda.</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Calon Debitur Berdasarkan Tempat Tinggal -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie4_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tempat Tinggal</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/96d13a35-d453-4362-ba40-b46b2113765d" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan tempat tinggal.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>House / apartment : Rumah / Apartemen.</li>
						<li>Municipal apartment : Apartemen kota.</li>
						<li>Office apartment : Apartemen kantor.</li>
						<li>Rented apartment : Apartemen sewag.</li>
						<li>With parents : Tinggal bersama orang tua.</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie5_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tingkat Pendidikan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/9ba22d03-656d-48c0-b525-9befd14a5926" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan jumlah calon debitur berdasarkan segmentasi tingkat pendidikan.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Higher Education : .</li>
						<li>Incomplete higher : .</li>
						<li>Lower secondary : .</li>
						<li>Secondary : .</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Calon Debitur Berdasarkan Jenis Pendapatan -->
	<!-- <div class="modal fade bd-example-modal-lg" id="pie6_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Pendapatan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/543ab2ba-a932-44a3-8742-264b76561c35" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis pendapatan.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Commercial associate : .</li>
						<li>Pensioner : Pensiunan .</li>
						<li>State servant : .</li>
						<li>Working : Bekerja.</li>
					</ul>
				</div>
			</div>
		</div>
	</div> -->

	<script type="text/javascript">
		document.getElementById("menu_cs").classList.add("active");
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
		document.getElementById("icon_cs_seg").style.color = "#F02632";
		document.getElementById("name_cs_seg").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>