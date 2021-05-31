<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Prediction</h1>
		</div>
	</div>
	
	<div class="row col-lg-12" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik" style="float: left;">
				<input type="text" class="form-control bg-light border-cus small" placeholder="Cari No Aplikasi" aria-label="Search" aria-describedby="basic-addon2" id="search_id" autocomplete="off">
			</div>

			<div class="col-lg-1 col-md-2 mb-2" id="reset_button" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianOCCredit()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" style="float: right;">
				<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
					<option value="" disabled="disabled" selected="selected">Jangka Waktu</option>
					<option value="Harian">Harian</option>
					<option value="Mingguan">Mingguan</option>
					<option value="Bulanan">Bulanan</option>
					<option value="Periode">Periode</option>
				</select>
			</div>
		</div>
	</div>

	<hr class="d-none" id="txt_garis" style="border-top: 1px solid #E0E0E0;">
	<span class="mb-2 d-none" id="txt_harian"  style="float: left; color: #000;">Jangka Waktu Harian :</span>
	<span class="mb-2 d-none" id="txt_mingguan" style="float: left; color: #000;">Jangka Waktu Mingguan :</span>
	<span class="mb-2 d-none" id="txt_bulanan" style="float: left; color: #000;">Jangka Waktu Bulanan :</span>
	<span class="mb-2 d-none" id="txt_periode" style="float: left; color: #000;">Jangka Waktu Periode :</span>

	<div class="row col-lg-12 mb-3">
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
							<select class="form-control bg-light border-cus small filter-cermati-prediction" name="filter_month" id="filter_month">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
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
							<select class="form-control bg-light border-cus small filter-cermati-prediction" name="year" id="year">
								<option value="" disabled="disabled" selected="selected">Pilih</option>
								<option value="2021">2021</option>
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
							<select class="form-control bg-light border-cus small filter-cermati-prediction" name="filter_period" id="filter_period">
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
					<div class="form-group1 row">
						<div class="col-10">
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
						<div class="col-2"> 
							<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie1_prediction" style="float: right;">Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/5c0399f8-5175-481b-bdfa-0472523d6c93" width="100%" height="350" frameborder="0" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="form-group1 row">
						<div class="col-10">
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
						<div class="col-2" style="float: right;"> 
							<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie2_prediction" style="float: right;">Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/cc8b427f-f9ad-4aab-801c-4dd14d69dfd8" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
							Grafik ini menampilkan total calon debitur berdasarkan level risiko dan nilai prediksi sesuai dengan data filter yang di input.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/92adf8c5-28e5-41b4-a3ae-5b8e5aa323ea" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/89029c91-8b77-49e4-b16a-e50ec471ecee" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
									<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_prediction">Interpretasi Prediksi</a>
								</td>
							</tr>
						</tbody>
					</table>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/5c0399f8-5175-481b-bdfa-0472523d6c93" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/cc8b427f-f9ad-4aab-801c-4dd14d69dfd8" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Interpretasi Prediksi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100 mb-3" src="http://172.17.62.84:3000/public/question/b6b503b7-d7fb-438f-9993-17f98d3a2b1a" width="100%" height="200" frameborder="0" allowtransparency></iframe>

					<hr>
					Warna <b style="color: #EC7063;">merah</b> menjelaskan parameter yang berkonstribusi terhadap default, sedangkan warna <b style="color: #3498DB;">biru</b> menjelaskan parameter yang berkonstriburi terhadap non-default. Angka diatas bukan ???.
					<hr>

					<span style="color: #000; font-size: 1.2rem; font-weight: bold;">Hasil Prediksi</span>
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
											<td>Default Probability</td>
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
	</script>

<?php include "footer.php"; ?>