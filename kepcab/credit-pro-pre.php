
	
	<!-- <div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Konsumtif</h1>
		</div>
	</div> -->

	<div class="row col-lg-12 mb-2" style="padding-right: 0; margin-top: 20px;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik" style="float: left;">
				<input type="text" class="form-control bg-light border-cus small" placeholder="Cari No Aplikasi" aria-label="Search" aria-describedby="basic-addon2" id="search_id" autocomplete="off">
			</div>

			<div class="col-lg-1 col-md-2 mb-2" id="reset_button" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKCCredit()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" style="float: right;">
				<select class="form-control bg-light border-cus small" id="search_by_periode" onchange="pilihPeriode()">
					<option value="" disabled="disabled" selected="selected">Jangka Waktu</option>
					<option value="Harian">Harian</option>
					<option value="Mingguan">Mingguan</option>
					<option value="Bulanan">Bulanan</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_officer" style="float: right;">
				<input class="form-control bg-light border-cus small" list="officerList" id="search_officer" placeholder="Pilih Officer" autocomplete="off">
				<datalist id="officerList">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_unit" style="float: right;">
				<input class="form-control bg-light border-cus small" list="unitList" id="unit" placeholder="Pilih Unit" onchange="pilihUnit()" autocomplete="off">
				<datalist id="unitList">
					<option value="UNIT 1"></option>
					<option value="UNIT 2"></option>
					<option value="UNIT 3"></option>
					<option value="UNIT 4"></option>
				</datalist>
			</div>
		</div>
	</div>

	<hr class="d-none" id="txt_garis" style="border-top: 1px solid #E0E0E0;">
	<span class="mb-2 d-none" id="txt_harian"  style="float: left; color: #000;">Jangka Waktu Harian :</span>
	<span class="mb-2 d-none" id="txt_mingguan" style="float: left; color: #000;">Jangka Waktu Mingguan :</span>
	<span class="mb-2 d-none" id="txt_bulanan" style="float: left; color: #000;">Jangka Waktu Bulanan :</span>

	<div class="row col-lg-12 mb-2">
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/42729e41-0150-4d78-b27a-4fea3611642c" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/9d38004d-114e-4200-b847-2cd1cc54b13a" width="100%" height="350" frameborder="0" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/2bf202ff-0600-43a0-b925-84b5ee6947c2" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/5cac4bca-976a-4635-887c-70a57ecbf8c6" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<table class="table table-striped table-bordered" id="tabel-data-pro" cellspacing="0">
						<thead style="text-align: center;">
							<tr>
								<th>NIK</th>
								<th>No Aplikasi</th>
								<th>Branch</th>
								<th>Umur</th>
								<th>Jenis Kelamin</th>
								<th>Agama</th>
								<th>Pendidikan</th>
								<th>Status Kawin</th>
								<th>Bidang Usaha</th>
								<th>Jenis Usaha</th>
								<th>Penghasilan</th>
								<th>Jenis Loan</th>
								<th>Plafon</th>
								<th>Tenor</th>
								<th>Angsuran</th>
								<th>Bunga</th>
								<th>Jenis Jaminan</th>
								<th>Nilai Jaminan</th>
								<th>KI / KMK</th>
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
								<td>29 Tahun</td>
								<td>Laki - laki</td>
								<td>Protestan</td>
								<td>S1</td>
								<td>Pernikahan Siri</td>
								<td>Perdagangan</td>
								<td>Pelayanan Umum</td>
								<td>Rp 10,000,000</td>
								<td>Kredit Rekening Koran</td>
								<td>Rp 30,000,000</td>
								<td>300 Bulan</td>
								<td>Rp 500,000</td>
								<td>10%</td>
								<td>Lainnya</td>
								<td>Rp 50,000,000</td>
								<td>Rp 20,000,000</td>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/42729e41-0150-4d78-b27a-4fea3611642c" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/9d38004d-114e-4200-b847-2cd1cc54b13a" width="100%" height="350" frameborder="0" allowtransparency></iframe>
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
					<iframe class="d-block w-100 mb-3" src="http://172.17.62.84:3000/public/question/a668423d-0f66-40f3-9f34-839a19f97847" width="100%" height="200" frameborder="0" allowtransparency></iframe>

					<hr>
					Warna merah menjelaskan parameter yang berkontribusi terhadap probability default, sedangkan warna biru menjelaskan parameter yang berkontribusi terhadap probability non-default.
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

	<!-- <script type="text/javascript">
		document.getElementById("menu_cs").classList.add("active");
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
		document.getElementById("icon_cs_pre").style.color = "#F02632";
		document.getElementById("name_cs_pre").style.color = "#F02632";
	</script> -->

