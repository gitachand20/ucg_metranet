
	
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Thelris</h1>
	</div> -->

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
					<div class="col-8" ></div>
					<div class="col-4" >
						<div class="form-group row">
							<div class="col-6 justify-content-center">
								<select id="prediction_risk_thelris" multiple="multiple">
									<option value="Good">Good</option>
									<option value="Bad">Bad</option>
								</select>
							</div>

							<div class="col-6 justify-content-center">
								<select id="risk_level_thelris" multiple="multiple">
									<option value="Low">Low</option>
									<option value="Medium">Medium</option>
									<option value="High">High</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1 col-8">
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

					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1 col-8">
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

				<div class="row mb-4">
					<div class="col-12">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1 col-8">
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
								<div class="tooltip1 col-8">
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
				<div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/44931a4c-f873-42b0-ab38-76926deea906"></iframe>
				</div>
			</div>
		</div>
	</div>

