<?php include "header.php"; ?>

	<div class="row">
		<div class="col-lg-7"></div>
		<div class="input-group col-lg-3 col-md-6 mb-4" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option value="Op1">Op1</option>
				<option value="Op2"></option>
				<option value="Ap1"></option>
				<option value="Ap2"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_cif">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</div>

	<div class="col-lg-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#thelris" role="tab" data-toggle="tab">Thelrish</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#eagle_bank" role="tab" data-toggle="tab">Eagle National Bank</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Thelris -->
			<div role="tabpanel" class="tab-pane active" id="thelris">
				<div class="col-lg-12">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#tprediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tsegmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<!-- <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tprediction">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/1574960f-0a17-4681-bd0c-a9770c29adf0"></iframe>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tsegmentation">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/44931a4c-f873-42b0-ab38-76926deea906"></iframe>
							</div>
						</div>
					</div> -->

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tprediction">
							<div class="row" style="margin-top: 20px;">
								<div class="col-lg-8 col-sm-12"></div>
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
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-12 mb-4">
									<div class="card">
										<div class="card-header">
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Prediksi Performansi Pinjaman
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Performansi Pinjaman Berdasarkan Tingkat Risiko
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Performansi Pinjaman Berdasarkan Prediksi dan Tingkat Risiko
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Data Nasabah
												</span>
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
						</div>

						<div role="tabpanel" class="tab-pane" id="tsegmentation">
							<div class="row" style="margin-top: 20px;">
								<div class="col-lg-6 col-md-12 mb-4">
									<div class="card">
										<div class="card-header">
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Kategori Pendapatan
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Kepemilikan Tempat Tinggal
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Pembayaran Bunga
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Tingkat Bunga
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Regional
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Total Pembayaran Pinjaman
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Jenis Pinjaman
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Jumlah Pinjaman Berdasarkan Jangka Waktu Pinjaman
												</span>
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Total Debitur dengan Pinjaman yang disetujui
												</span>
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

							<div class="row mb-4">
								<div class="col-12">
									<div class="card">
										<div class="card-body">
											<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/dashboard/750d0a06-5cca-4634-9ed3-bcb014ed1806" width="100%" height="650"></iframe>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Eagle National Bank -->
			<div role="tabpanel" class="tab-pane" id="eagle_bank">
				<div class="col-lg-12">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#eprediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#esegmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<!-- <div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="eprediction">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/7f75000d-1bcc-476d-9339-3cfd0ba5bc68"></iframe>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="esegmentation">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/68ea90e2-90ea-46af-a18f-c3b2bcb47060"></iframe>
							</div>
						</div>
					</div> -->

					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="eprediction">
							<div class="row" style="margin-top: 20px;">
								<div class="col-lg-8 col-sm-12"></div>
								<div class="col-lg-4 col-sm-12">
									<div class="form-group row">
										<div class="col-lg-6 col-sm-6 justify-content-center">
											<select id="prediction_risk_enb" multiple="multiple">
												<option value="Good">Good</option>
												<option value="Bad">Bad</option>
											</select>
										</div>

										<div class="col-lg-6 col-sm-6 justify-content-center">
											<select id="risk_level_enb" multiple="multiple">
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Angka Pinjaman Berdasarkan Kondisi Pinjaman
												</span>
												<span class="tooltiptext">
													Grafik ini menampilkan jumlah angka pinjaman (loan) berdasarkan kondisi pinjaman.
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
											<div class="tooltip1">
												<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
													Angka Pinjaman Berdasarkan Tingkat Pinjaman
												</span>
												<span class="tooltiptext">
													Grafik ini menampilkan jumlah angka pinjaman (loan) berdasarkan tingkat <b style="color: #FFFF00;">risikonya</b>.
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
													Prediksi Angka Pinjaman Berdasarkan Tingkat Risiko
												</span>
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

						<div role="tabpanel" class="tab-pane" id="esegmentation">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/68ea90e2-90ea-46af-a18f-c3b2bcb47060"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_bs").style.color = "#F02632";
		document.getElementById("name_bs").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>