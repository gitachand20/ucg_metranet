	
	<!-- <div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Segmentation</h1>
		</div>
	</div> -->

	<div class="row col-lg-12" style="padding-right: 0; margin-top: 20px;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik_seg" style="float: left;">
				<input type="text" class="form-control bg-light border-cus small" placeholder="Cari No Aplikasi" aria-label="Search" aria-describedby="basic-addon2" id="search_id_seg" autocomplete="off">
			</div>

			<div class="col-lg-1 col-md-2 mb-2" id="reset_button_seg" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKUCCreditSeg()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" style="float: right;">
				<select class="form-control bg-light border-cus small" id="search_by_periode_seg" onchange="pilihPeriodeTPSeg()">
					<option value="" disabled="disabled" selected="selected">Jangka Waktu</option>
					<option value="Harian">Harian</option>
					<option value="Mingguan">Mingguan</option>
					<option value="Bulanan">Bulanan</option>
					<option value="Periode">Periode</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_officer_seg" style="float: right;">
				<input class="form-control bg-light border-cus small" list="officerList" id="search_officer_seg" placeholder="Pilih Officer" autocomplete="off">
				<datalist id="officerList">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>
		</div>
	</div>

	<hr class="d-none" id="txt_garis_seg" style="border-top: 1px solid #E0E0E0;">
	<span class="mb-2 d-none" id="txt_harian_seg"  style="float: left; color: #000;">Jangka Waktu Harian :</span>
	<span class="mb-2 d-none" id="txt_mingguan_seg" style="float: left; color: #000;">Jangka Waktu Mingguan :</span>
	<span class="mb-2 d-none" id="txt_bulanan_seg" style="float: left; color: #000;">Jangka Waktu Bulanan :</span>

	<div class="row col-lg-12 mb-3">
		<div class="form-group row col-lg-3 col-md-6 d-none" id="range_weekly_seg">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="30%" valign="middle"><label for="weekly_option_seg">Minggu Ke</label></td>
						<td>
							<select class="form-control bg-light border-cus small" id="weekly_option_seg" onchange="setStartDateSeg()">
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

		<div class="form-group row col-lg-3 col-md-6 d-none" id="range_monthly_seg">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="25%" valign="middle"><label for="monthly_option_seg">Rentang</label></td>
						<td>
							<select class="form-control bg-light border-cus small" id="monthly_option_seg" onchange="setStartDateSeg()">
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

		<div class="form-group row col-lg-3 col-md-6 d-none" id="start_date_seg">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="15%" valign="middle"><label for="tanggal_awal_seg">Dari</label></td>
						<td>
							<input class="form-control datepicker2 bg-light border-cus small" type="text" name="tanggal_awal" id="tanggal_awal_seg" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" onchange="setStartDateSeg()" required>
						</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="form-group row col-lg-3 col-md-6 d-none" id="end_date_seg">
			<div class="col-lg-12">
				<table width="100%">
					<tr>
						<td width="10%" valign="middle"><label for="tanggal_akhir_seg">Ke</label></td>
						<td>
							<input class="form-control datepicker2 bg-light small" type="text" name="tanggal_akhir" id="tanggal_akhir_seg" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" disabled="disabled" required>
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
							Grafik ini menampilkan total penghasilan rata - rata calon debitur berdasarkan pekerjaan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/66c38ec9-1b08-44c7-8ff8-2e19b7f9ef05" frameborder="0" width="100%" height="370" allowtransparency></iframe>
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
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/7b22a293-8366-4037-bc50-ad7372e7bad2" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie1_segmentation">Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/6af0ceed-8b6d-405d-838f-8467e0591e69" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie2_segmentation">Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Status Keluarga -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/50facdc3-5886-4253-9881-0355101829f3" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie3_segmentation">Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/cfd729a6-4720-4ff3-81c6-b5b351d93356" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie4_segmentation">Detail</a>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/1b90be1c-b296-412c-bc14-e8b855dcc5d9" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="row">
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/dc1ab057-e955-4756-a2ea-21c0b5bbab4b" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div> -->

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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/7b22a293-8366-4037-bc50-ad7372e7bad2" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/6af0ceed-8b6d-405d-838f-8467e0591e69" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/50facdc3-5886-4253-9881-0355101829f3" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan segmentasi status keluarga.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Common-Law : Pernikahan siri.</li>
						<li>Divorce : Bercerai.</li>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/cfd729a6-4720-4ff3-81c6-b5b351d93356" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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

	<!-- <script type="text/javascript">
		document.getElementById("menu_cs").classList.add("active");
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
		document.getElementById("icon_cs_seg").style.color = "#F02632";
		document.getElementById("name_cs_seg").style.color = "#F02632";
	</script> -->