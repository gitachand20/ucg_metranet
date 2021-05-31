<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Prediction</h1>
		</div>

		<!-- <div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_region">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="branch_cre_op" placeholder="Pilih Branch">
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
		</div>

		<div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_loan_nik">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari Loan ID / NIK" aria-label="Search" aria-describedby="basic-addon2" id="loan_nik">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div> -->
	</div>

	<div class="row col-lg-12">
		<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari No Aplikasi" aria-label="Search" aria-describedby="basic-addon2" id="search_id">
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
			<button class="btn btn-custom" type="button" onclick="resetPencarian()">
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

	<div class="col-12">
		<div class="row">
			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<div class="form-group1 row">
							<div class="col-8">
								<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
									Prediksi Performansi Calon Debitur
								</span>
								<div class="tooltip1">
									<i class="fas fa-info-circle" style="color: #000"></i>
									<span class="tooltiptext">
										Grafik ini menampilkan nilai prediksi performansi calon debitur dari keseluruhan data yang ada.
									</span>
								</div>
							</div>
							<div class="col-4"> 
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_prediction" style="float: right;">More Detail</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/72e2d7c6-0f16-4616-a525-5f7fc71adaeb" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<div class="form-group1 row">
							<div class="col-8">
								<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
									Level Risiko Calon Debitur
								</span>
								<div class="tooltip1">
									<i class="fas fa-info-circle" style="color: #000"></i>
									<span class="tooltiptext">
										Grafik ini menampilkan nilai level risiko calon debitur dari keseluruhan data yang ada.
									</span>
								</div>
							</div>
							<div class="col-4" style="float: right;"> 
								<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_prediction" style="float: right;">More Detail</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2696a16e-b281-4e3b-8185-20bb10719317" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<!-- <div class="col-lg-4 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Rekomendasi Up / Cross Selling
						</span>
					</div>
					<div class="card-body">

					</div>
				</div>
			</div> -->

			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Total Calon Debitur Berdasarkan Nilai Prediksi dan Level Risiko
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total debitur berdasarkan level risiko dan nilai prediksi sesuai dengan data filter yang di input.
							</span>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/46f8c9e5-c668-43d9-a1e9-54b5bb298679" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-12 mb-4">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Rekomendasi Calon Debitur
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total jumlah rekomendasi pinjaman yang diajukan oleh calon debitur dalam periode waktu yang telah ditentukan di atas.
							</span>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ac02d434-5b04-4831-b34e-c79c05800cf2" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="row mb-4">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
							Detail Data Calon Debitur
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #000"></i>
							<span class="tooltiptext">
								Tabel ini menampilkan keseluruhan informasi calon debitur sesuai dengan data filter yang di input.
							</span>
						</div>
					</div>
					<div class="card-body">
						<!-- <iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/9f7fcba1-bf79-4bbb-8aa7-5d71a2de725b" width="100%" height="600"></iframe> -->

						<table class="table table-striped table-bordered" id="tabel-data" cellspacing="0">
							<thead style="text-align: center;">
								<tr>
									<th>NIK</th>
									<th>No Aplikasi</th>
									<th>Branch</th>
									<th>Jenis Kelamin</th>
									<th>Angsuran</th>
									<th>Status Kawin</th>
									<th>Pendidikan</th>
									<th>Biaya Admin</th>
									<th>Plafond</th>
									<th>Penghasilan</th>
									<th>Provinsi</th>
									<th>Sumber Dana</th>
									<th>Pekerjaan</th>
									<th>Umur</th>
									<th>Tenor</th>
									<th>Recommendation</th>
									<th>Default Probability</th>
									<th>Prediction</th>
									<th>Risk Level</th>
									<th>Nama Operasional</th>
									<th>Date Input</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>100014248750603</td>
									<td>VAR6736213</td>
									<td>Unit Batujajar Cimahi</td>
									<td>Perempuan</td>
									<td>Rp 12,000,000</td>
									<td>Common-Law</td>
									<td>SMA</td>
									<td>Rp 2,880,000</td>
									<td>Rp 288,000,000</td>
									<td>Rp 24,800,000</td>
									<td>KALIMANTAN SELATAN</td>
									<td>1</td>
									<td>Buruh Pabrik</td>
									<td>38</td>
									<td>24</td>
									<td>Reject</td>
									<td>55.00000000000001%</td>
									<td>Default</td>
									<td>Medium</td>
									<td>Unit Ciburuy Cimahi</td>
									<td>21 September 2019</td>
									<td align="center">
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_prediction">More Detail</a>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Prediksi Performansi Calon Debitur -->
	<div class="modal fade" id="pie1_prediction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Prediksi Performansi Calon Debitur</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/72e2d7c6-0f16-4616-a525-5f7fc71adaeb" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan nilai prediksi performansi calon debitur dari keseluruhan data yang ada.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Default : Prediksi berpotensi pembayaran kredit tidak lancar.</li>
						<li>Non-Default : Prediksi berpotensi pembayaran kredit lancar.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Level Risiko -->
	<div class="modal fade bd-example-modal-lg" id="pie2_prediction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Level Risiko alon Debitur</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2696a16e-b281-4e3b-8185-20bb10719317" width="100%" height="350" frameborder="0" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan nilai level risiko calon debitur dari keseluruhan data yang ada.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>High : Nilai dengan risiko tinggi.</li>
						<li>Low : Nilai dengan risiko rendah.</li>
						<li>Medium : Nilai dengan risiko menengah.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Detail Data Calon Debitur -->
	<div class="modal fade" id="pie3_prediction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document" style="max-width: 1140px">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Detail Interpretasi Prediksi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100 mb-3" src="http://172.17.62.87:3000/public/question/9b3ed235-6bf2-473d-8363-8d622c02f9da" width="100%" height="400" frameborder="0" allowtransparency></iframe>

					<span style="color: #000; font-size: 1.3rem; font-weight: bold;">Hasil Prediksi</span>
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-3">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Recommendation</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<!-- <span class="accept-debitur-detail" style="font-size: 1.2rem;">Accept</span> -->
												<span class="reject-debitur-detail" style="font-size: 1.2rem;">Reject</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Risk Level</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<!-- <span class="risk-low" style="font-size: 1.2rem;">Low</span>
												<span class="risk-medium" style="font-size: 1.2rem;">Medium</span> -->
												<span class="risk-high" style="font-size: 1.2rem;">High</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Prediction</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<span style="font-size: 1.2rem; color: #000;">Non-Default</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Defaul Probability</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<span style="font-size: 1.2rem; color: #000;">0</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_cs").classList.add("active");
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
		document.getElementById("icon_cs_pre").style.color = "#F02632";
		document.getElementById("name_cs_pre").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>