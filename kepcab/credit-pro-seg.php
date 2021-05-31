
	
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
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKCCreditSeg()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" style="float: right;">
				<select class="form-control bg-light border-cus small" id="search_by_periode_seg" onchange="pilihPeriodeTPSeg()">
					<option value="" disabled="disabled" selected="selected">Jangka Waktu</option>
					<option value="Harian">Harian</option>
					<option value="Mingguan">Mingguan</option>
					<option value="Bulanan">Bulanan</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_officer_seg" style="float: right;">
				<input class="form-control bg-light border-cus small" list="officerListSeg" id="search_officer_seg" placeholder="Pilih Officer" autocomplete="off">
				<datalist id="officerListSeg">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_unit_seg" style="float: right;">
				<input class="form-control bg-light border-cus small" list="unitListSeg" id="unit_seg" placeholder="Pilih Unit" onchange="pilihUnitSeg()" autocomplete="off">
				<datalist id="unitListSeg">
					<option value="UNIT 1"></option>
					<option value="UNIT 2"></option>
					<option value="UNIT 3"></option>
					<option value="UNIT 4"></option>
				</datalist>
			</div>
		</div>
	</div>

	<hr class="d-none" id="txt_garis_seg" style="border-top: 1px solid #E0E0E0;">
	<span class="mb-2 d-none" id="txt_harian_seg"  style="float: left; color: #000;">Jangka Waktu Harian :</span>
	<span class="mb-2 d-none" id="txt_mingguan_seg" style="float: left; color: #000;">Jangka Waktu Mingguan :</span>
	<span class="mb-2 d-none" id="txt_bulanan_seg" style="float: left; color: #000;">Jangka Waktu Bulanan :</span>

	<div class="row col-lg-12 mb-4">
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
					<div class="form-group1 row">
						<div class="col-10">
							<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
								Calon Debitur Berdasarkan Tingkat Pendidikan
							</span>
							<div class="tooltip1">
								<i class="fas fa-info-circle" style="color: #000"></i>
								<span class="tooltiptext">
									Grafik ini menampilkan total calon debitur berdasarkan tingkat pendidikan.
								</span>
							</div>
						</div>
						<div class="col-2"> 
							<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie1_segmentation" style="float: right;">Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/816ca5f4-5776-4320-9faa-770d366f9a60" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="form-group1 row">
						<div class="col-10">
							<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
								Calon Debitur Berdasarkan Status Keluarga
							</span>
							<div class="tooltip1">
								<i class="fas fa-info-circle" style="color: #000"></i>
								<span class="tooltiptext">
									Grafik ini menampilkan total calon debitur berdasarkan segmentasi status keluarga.
								</span>
							</div>
						</div>
						<div class="col-2"> 
							<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie2_segmentation" style="float: right;">Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0429ad2f-2adf-4d5d-ab1f-7583bb49ea9a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-5 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="form-group1 row">
						<div class="col-10">
							<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
								Calon Debitur Berdasarkan Jenis Kelamin
							</span>
							<div class="tooltip1">
								<i class="fas fa-info-circle" style="color: #000"></i>
								<span class="tooltiptext">
									Grafik ini menampilkan total calon debitur berdasarkan jenis kelamin.
								</span>
							</div>
						</div>
						<div class="col-2"> 
							<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie3_segmentation" style="float: right;">Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/c13cb13c-bc76-45ff-a9b7-a45c238876ea" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-7 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rata - Rata KI / KMK dan Pinjaman Berdasarkan Jenis Usaha
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total rata - rata KI / KMK dan pinjaman berdasarkan jenis usaha.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/fcacfad3-a548-4dbf-b2bb-c2c9411acbf6" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row d-none">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rata - Rata KI / KMK dan Pinjaman Berdasarkan Penghasilan
					</span>

					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total rata - rata KI / KMK dan pinjaman berdasarkan penghasilan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/2b87f006-e9ca-4620-b5fd-0b18ec568a44" frameborder="0" width="100%" height="370" allowtransparency></iframe>
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
					<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
					<div class="carousel-item active">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/816ca5f4-5776-4320-9faa-770d366f9a60" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_segmentation">Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Status Keluarga -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0429ad2f-2adf-4d5d-ab1f-7583bb49ea9a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_segmentation">Detail</a>
						</center>
					</div>

					<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
					<div class="carousel-item">
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/c13cb13c-bc76-45ff-a9b7-a45c238876ea" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_segmentation">Detail</a>
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
						Rata - Rata KI / KMK dan Pinjaman Berdasarkan Penghasilan
					</span>

					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total rata - rata KI / KMK dan pinjaman berdasarkan penghasilan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/2b87f006-e9ca-4620-b5fd-0b18ec568a44" frameborder="0" width="100%" height="450" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
	<div class="modal fade bd-example-modal-lg" id="pie1_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tingkat Pendidikan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/816ca5f4-5776-4320-9faa-770d366f9a60" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini  menampilkan jumlah calon debitur berdasarkan Tingkat Pendidikan.
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Status Keluarga -->
	<div class="modal fade bd-example-modal-lg" id="pie2_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Status Keluarga</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0429ad2f-2adf-4d5d-ab1f-7583bb49ea9a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
	<div class="modal fade bd-example-modal-lg" id="pie3_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Kelamin</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/c13cb13c-bc76-45ff-a9b7-a45c238876ea" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis kelamin.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Female : Perempuan.</li>
						<li>Male : Laki-laki.</li>
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
