<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-7 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Cermati</h1>
		</div>

		<div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option value="Op1">Op1</option>
				<option value="Op2"></option>
				<option value="Ap1"></option>
				<option value="Ap2"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_nik">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari NIK" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#prediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#segmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="prediction">
				<!-- <div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/433dc648-5f72-4096-aa1c-2e5d9dbbb9a1"></iframe>
				</div> -->
				<div class="row" style="margin-top: 20px;">
					<div class="col-lg-8 col-sm-12"></div>
					<div class="col-lg-4 col-sm-12">
						<div class="form-group row">
							<div class="col-lg-6 col-sm-6 justify-content-center">
								<select id="prediction_risk_cermati" multiple="multiple">
									<option value="Good">Good</option>
									<option value="Bad">Bad</option>
								</select>
							</div>

							<div class="col-lg-6 col-sm-6 justify-content-center">
								<select id="risk_level_cermati" multiple="multiple">
									<option value="Low">Low</option>
									<option value="Medium">Medium</option>
									<option value="High">High</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Prediksi Performansi Calon Debitur
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan nilai prediksi performansi calon debitur dari keseluruhan data yang ada.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_prediction" style="float: right;">More Detail</a>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_prediction-1" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/1948677a-a35e-4008-a765-c073875d0a13" width="100%" height="350"></iframe>
							</div>
						</div>
					</div>

					<div class="col-lg-6 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Level Risiko Calon Debitur
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan nilai level risiko calon debitur dari keseluruhan data yang ada.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_prediction" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/f07d0f11-ddd0-4710-abfd-893695eb3281" width="100%" height="350"></iframe>
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
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Total Calon Debitur Berdasarkan Nilai Prediksi dan Level Risiko
									</span>
									<span class="tooltiptext">
										Grafik ini menampilkan total debitur berdasarkan level risiko dan nilai prediksi sesuai dengan data filter yang di input.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/83498f14-8cea-4e83-8717-b30176f0b1c1" width="100%" height="400"></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Detail Data Calon Debitur
									</span>
									<span class="tooltiptext">
										Tabel ini menampilkan keseluruhan informasi calon debitur sesuai dengan data filter yang di input.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/83a242c0-c1eb-4d94-8057-376898b34914" width="100%" height="600"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane" id="segmentation">
				<!-- <div class="row" style="margin-top: 20px;">
					<div class="col-7" ></div>
					<div class="col-5" >
						<div class="form-group row">
							<div class="col-4">
								<select class="form-control">
									<option value="">Bulan</option>
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

							<div class="col-4">
								<select class="form-control">
									<option value="">Tahun</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</div>

							<div class="col-4">
								<select class="form-control" name="filter_period" id="filter_period">
									<option value="">Periode</option>
									<option value="2">3-Months</option>
									<option value="5">6-Months</option>
									<option value="8">9-Months</option>
									<option value="11">12-Months</option>
								</select>
							</div>
						</div>
					</div>
				</div> -->

				<div class="row" style="margin-top: 20px;">
					<div class="col-lg-6 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Calon Debitur Berdasarkan Jumlah Angsuran Pembayaran Pinjaman
									</span>
									<span class="tooltiptext">
										Grafik ini menampilkan total calon debitur berdasarkan jumlah angsuran pembayaran pinjaman.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/49e2aab8-78e9-4413-9b9d-737f1c706c77" width="100%" height="350"></iframe>
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
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c0e3569d-a58f-4c0d-b4a3-0e76d2b70976" width="100%" height="350"></iframe>
										<br>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1_segmentation">More Detail</a>
									</center>
								</div>

								<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
								<div class="carousel-item">
									<center>
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb149759-b61d-4ad9-b948-ee43334c10c3" width="100%" height="350"></iframe>
										<br>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2_segmentation">More Detail</a>
									</center>
								</div>

								<!-- Calon Debitur Berdasarkan Status Keluarga -->
								<div class="carousel-item">
									<center>
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/22f4826b-1fc5-41b6-998d-4c14e00561ec" width="100%" height="350"></iframe>
										<br>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3_segmentation">More Detail</a>
									</center>
								</div>

								<!-- Calon Debitur Berdasarkan Tempat Tinggal -->
								<div class="carousel-item">
									<center>
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/e750f48c-ed8c-4209-b45e-760e4f1706f3" width="100%" height="350"></iframe>
										<br>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie4_segmentation">More Detail</a>
									</center>
								</div>

								<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
								<div class="carousel-item">
									<center>
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/14a95b9f-22f3-4346-8ee8-16d4506b7d6b" width="100%" height="350"></iframe>
										<br>
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie5_segmentation">More Detail</a>
									</center>
								</div>

								<!-- Calon Debitur Berdasarkan Kategori Pendapatan -->
								<div class="carousel-item">
									<center>
										<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/7d6ff7c0-ccb6-4f6e-93c1-e40159bdeb23" width="100%" height="350"></iframe>
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
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Credit Approval Berdasarkan Kategori Pendapatan
									</span>
									<span class="tooltiptext">
										Menampilkan grafik jumlah dan rata-rata credit approval sesuai dengan kategori pendapatan.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2c89929e-b48c-4850-945e-27b8d7ee50ab" width="100%" height="400"></iframe>
							</div>
						</div>
					</div>

					<div class="col-lg-7 col-md-12 mb-4">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Calon Debitur Berdasarkan Jumlah Pinjaman Yang Disetujui
									</span>
									<span class="tooltiptext">
										Grafik ini menampilkan total calon debitur berdasarkan jumlah pinjaman yang disetujui.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/5e42226c-c6d8-4cca-a049-32a52cb5aeb4" width="100%" height="400"></iframe>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/72ca1cf1-ff45-4364-a495-90573c9eb34a"></iframe>
				</div> -->
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Prediksi -->
	<!-- Prediksi Performansi Calon Debitur -->
	<div class="modal fade bd-example-modal-lg" id="pie1_prediction" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document" style="max-width: 1140px">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Prediksi Performansi Calon Debitur</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/1948677a-a35e-4008-a765-c073875d0a13" width="100%" height="400"></iframe>
						</div>

						<div class="col-8">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/fba73d17-cbb4-4a82-b436-66a51afe9b50" width="100%" height="400"></iframe>
						</div>
					</div>
					<hr>
					Grafik ini menampilkan nilai prediksi performansi calon debitur dari keseluruhan data yang ada.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Good : Prediksi berpotensi pembayaran kredit lancar.</li>
						<li>Bad : Prediksi berpotensi pembayaran kredit tidak lancar.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade bd-example-modal-lg" id="pie1_prediction-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document" style="max-width: 1140px">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Prediksi Performansi Calon Debitur</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-4">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/1948677a-a35e-4008-a765-c073875d0a13" width="100%" height="400"></iframe>
						</div>

						<script src="https://code.highcharts.com/highcharts.js"></script>
						<script src="https://code.highcharts.com/modules/exporting.js"></script>
						<script src="https://code.highcharts.com/modules/export-data.js"></script>
						<script src="https://code.highcharts.com/modules/accessibility.js"></script>

						<div class="col-8">
							<div id="grafik" style="height: 400px;"></div>
						</div>
						<script type="text/javascript">
							Highcharts.chart('grafik', {
								chart: {
									type: 'bar'
								},
								title: {
									text: '<span class="font-weight-bold">Faktor/Variable yang mempengaruhi Current Value</span>'
								},
								subtitle: {
									text: ''
								},
								xAxis: {
									categories: ['Annuity Lime', 'Approved Credit Lime', 'Days Age Lime', 'Days ID Change Lime', 'Days Registration Lime', 'Days Work Lime', 'Education Lime', 'Ext Score 2 Lime', 'Family Status Lime', 'Gender Lime', 'Housing Type Lime', 'Income Lime', 'Income Type Lime', 'Organization Type Lime', 'Price Lime'],
									title: {
										text: null
									}
								},
								exporting: {
									enabled: false
								},
								yAxis: {
									title: {
										text: '',
										align: 'high'
									},
									labels: {
										overflow: 'justify'
									}
								},
								tooltip: {
									valueSuffix: ''
								},
								plotOptions: {
									bar: {
										dataLabels: {
											enabled: true
										}
									}
								},
								legend: {
									align: 'center',
									verticalAlign: 'bottom',
									x: 0,
									y: 0,
									floating: false
								},
								credits: {
									enabled: false
								},
								series: [{
									name: 'Bad',
									data: [0.0085, 0.0083, 0.006, 0.015, 0.0054, 0.021, 0.049, 0.11, -0.0038, 0.00082, -0.022, 0.031, 0.024, 0.017, 0.01],
									color: '#FF3300'
								}, {
									name: 'Good',
									data: [-0.0021, -0.0056, 0.00017, 0.0024, 0.00057, -0.0026, 0.025, -0.018, -0.011, -0.00021, -0.024, 0.0018, 0.013, 0.004, 0.01],
									color: '#33cc33'
								}]
							});
						</script>
					</div>
					<hr>
					Grafik ini menampilkan nilai prediksi performansi calon debitur dari keseluruhan data yang ada.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Good : Prediksi berpotensi pembayaran kredit lancar.</li>
						<li>Bad : Prediksi berpotensi pembayaran kredit tidak lancar.</li>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/f07d0f11-ddd0-4710-abfd-893695eb3281" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan nilai level risiko calon debitur dari keseluruhan data yang ada.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Low : Nilai dengan risiko rendah.</li>
						<li>Medium : Nilai dengan risiko menengah.</li>
						<li>High : Nilai dengan risiko tinggi.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Segmentasi -->
	<!-- Calon Debitur Berdasarkan Jenis Pinjaman -->
	<div class="modal fade bd-example-modal-lg" id="pie1_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Pinjaman</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c0e3569d-a58f-4c0d-b4a3-0e76d2b70976" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan jenis pinjaman.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Cash Loans : Pinjaman Tunai.</li>
						<li>Revolving Loans : Pinjaman Bergulir.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Jenis Kelamin -->
	<div class="modal fade bd-example-modal-lg" id="pie2_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Jenis Kelamin</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb149759-b61d-4ad9-b948-ee43334c10c3" width="100%" height="350"></iframe>
					<hr>
					Grafik ini  menampilkan jumlah calon debitur berdasarkan jenis kelamin (laki-laki atau perempuan).
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>F : Perempuan.</li>
						<li>M : Laki-laki.</li>
					</ul>
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
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/22f4826b-1fc5-41b6-998d-4c14e00561ec" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan segmentasi status keluarga.
					<hr>
					<b>Diskripsi</b>
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
	</div>

	<!-- Calon Debitur Berdasarkan Tempat Tinggal -->
	<div class="modal fade bd-example-modal-lg" id="pie4_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tempat Tinggal</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/e750f48c-ed8c-4209-b45e-760e4f1706f3" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan tempat tinggal.
					<hr>
					<b>Diskripsi</b>
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
	</div>

	<!-- Calon Debitur Berdasarkan Tingkat Pendidikan -->
	<div class="modal fade bd-example-modal-lg" id="pie5_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Tingkat Pendidikan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/14a95b9f-22f3-4346-8ee8-16d4506b7d6b" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan jumlah calon debitur berdasarkan segmentasi tingkat pendidikan.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Higher Education : .</li>
						<li>Incomplete higher : .</li>
						<li>Lower secondary : .</li>
						<li>Secondary : .</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Calon Debitur Berdasarkan Kategori Pendapatan -->
	<div class="modal fade bd-example-modal-lg" id="pie6_segmentation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Calon Debitur Berdasarkan Kategori Pendapatan</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/7d6ff7c0-ccb6-4f6e-93c1-e40159bdeb23" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total calon debitur berdasarkan kategori pendapatan.
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Commercial associate : .</li>
						<li>Pensioner : Pensiunan .</li>
						<li>State servant : .</li>
						<li>Working : Bekerja.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>