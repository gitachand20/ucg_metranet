<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Churn Prevention - Dashboard Prediction</h1>
	</div>

	<div class="row col-lg-12 mb-3" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik" style="float: left;">
				<input class="form-control bg-light border-cus small filter-behavior-prediction" id="cif_behavior_seg"  list="cifList" name="cif_behavior_seg" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
				<datalist id="cifList">
				</datalist>
			</div>

			<div class="input-group col-1 mb-2" id="reset_button" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKCBehavior()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_month" style="float: right;">
				<select class="form-control bg-light small" name="filter_month" id="filter_month" disabled="disabled">
					<option value="" disabled="disabled" selected="selected">Bulan</option>
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
			</div>

			<div class="col-lg-1 col-md-6 mb-2" id="search_by_year" style="float: right;">
				<select class="form-control bg-light border-cus small" style="padding-left: 0.25em;" name="year" id="year" onchange="pilihTahun()">
					<option value="" disabled="disabled" selected="selected">Tahun</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
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
			
			<div class="input-group col-lg-2 col-md-6 mb-2" id="search_by_unit" style="float: right;">
				<input class="form-control bg-light border-cus small" list="unitList" id="unit" placeholder="Pilih Unit" onchange="pilihUnit()" autocomplete="off">
				<datalist id="unitList">
					<option data-id="1" value="Unit 1"></option>
					<option data-id="2" value="Unit 2"></option>
					<option data-id="3" value="Unit 3"></option>
					<option data-id="4" value="Unit 4"></option>
				</datalist>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Churn
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah prediksi Churn dari keseluruhan total nasabah yang ada.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_prediksi" src="http://172.17.62.84:3000/public/question/50d21a3c-8be8-459d-b31f-7893eaedbabb" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Level Risiko Churn
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah level risiko dari keseluruhan total nasabah yang ada.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_level" src="http://172.17.62.84:3000/public/question/8862dd6a-587a-4a98-b3a2-3e9ba84525dc" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-1-cus col-md-12 d-none">
			<div class="row">
				<div class="col-lg-12 col-md-4 mb-3">
					<div class="card">
						<div class="card-body" style="padding: 15.5px 1.25rem 10px 1.25rem;">
							<span class="tittle-bar">High Risk</span><br>
							<div class="progress-circle high">
					        	<span class="progress-left">
					        		<span id="left_high" class="progress-bar-circle"></span> 
					        	</span>

					        	<span class="progress-right">
					        		<span id="right_high" class="progress-bar-circle"></span>
					        	</span>

					            <div class="progress-value value-high">
					            	<span id="score_high"></span><sup> %</sup>
					            </div>
					        </div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-4 mb-3">
					<div class="card">
						<div class="card-body" style="padding: 15.5px 1.25rem 10px 1.25rem;">
							<span class="tittle-bar">Low Risk</span><br>

							<div class="progress-circle low">
					        	<span class="progress-left">
					        		<span id="left_low" class="progress-bar-circle"></span> 
					        	</span>

					        	<span class="progress-right">
					        		<span id="right_low" class="progress-bar-circle"></span>
					        	</span>

					            <div class="progress-value value-low">
					            	<span id="score_low"></span><sup> %</sup>
					            </div>
					        </div>
						</div>
					</div>
				</div>

				<div class="col-lg-12 col-md-4 mb-4">
					<div class="card">
						<div class="card-body" style="padding: 15.5px 1.25rem 10px 1.25rem;">
							<span class="tittle-bar">Medium Risk</span><br>

							<div class="progress-circle medium">
					        	<span class="progress-left">
					        		<span id="left_medium" class="progress-bar-circle"></span> 
					        	</span>

					        	<span class="progress-right">
					        		<span id="right_medium" class="progress-bar-circle"></span>
					        	</span>

					            <div class="progress-value value-medium">
					            	<span id="score_medium"></span><sup> %</sup>
					            </div>
					        </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-12 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Churn Berdasarkan Level Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah prediksi Churn berdasarkan level risiko dari keseluruhan total nasabah yang ada.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" id="churn_prediksi_level" src="http://172.17.62.84:3000/public/question/6ecd8274-8879-4cdd-b449-27ffd3a75254" frameborder="0" width="100%" height="400" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>


	<div class="row mb-4">
		<div class="col-12">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Detail Nasabah
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Tabel ini menampilkan data nasabah secara keseluruhan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered" id="tabel-churn" cellspacing="0">
						<thead style="text-align: center;">
							<tr>
								<th>CIF</th>
								<th>Jangka Waktu</th>
								<th>Rekening</th>
								<th>Prediksi</th>
								<th>Level Risiko</th>
								<th>Sumber Dana</th>
								<th class="text-center">Penghasilan</th>
								<th>Usia</th>
								<th>Provinsi KTP</th>
								<th>Provinsi Domisili</th>
								<th>Jenis Kelamin</th>
								<th>Status Kawin</th>
								<th>Agama</th>
								<th>Pendidikan</th>
								<th>Bidang Usaha</th>
								<th>Pekerjaan</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a class="btn btn-outline-primary font-weight-bold" href="#" data-toggle="modal" data-target="#pie_nasabah">CAC57640</a>
								</td>
								<td>Jan, 2019</td>
								<td>118773226</td>
								<td>
									<span id="label_churn" class="label-churn">Churn</span>
									<span id="label_not_churn" class="label-not-churn d-none">Not Churn</span>
								</td>
								<td>
									<span id="level_low" class="level-low d-none">Low</span>
									<span id="level_medium" class="level-medium d-none">Medium</span>
									<span id="level_high" class="level-high d-none">High</span>
								</td>
								<td>Gaji Pensiun</td>
								<td>Rp 9,200,000</td>
								<td>32</td>
								<td>Sumatera Selatan</td>
								<td>Jawa Barat</td>
								<td>Perempuan</td>
								<td>Pernikahan Siri</td>
								<td>Protestan</td>
								<td>S2</td>
								<td>Pemerintah</td>
								<td>PNS</td>
								<td align="center">
									<a class="btn btn-outline-danger" href="#" data-toggle="modal" data-target="#pie_lime">Interpretasi Prediksi</a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<!-- Detail Data Nasabah -->
	<div class="modal fade" id="pie_nasabah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document" style="max-width: 1200px">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Detail Data Nasabah</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-lg-5">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr>
											<td width="10%" align="center">
												<i class="fas fa-user-tie" style="font-size: 40px;"></i><br>
												<span class="font-weight-bold" style="font-size: .75rem">NASABAH</span>
											</td>
											<td align="right">
												<span id="detail_nama" class="text-primary font-weight-bold" style="font-size: 1.7rem;">Purnando Gita Chandra</span><br>
												<span id="detail_cif" class="text-primary">CAC57640</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-2">
							<div class="card shadow">
								<div class="card-body mb-2">
									<table width="100%">
										<tr>
											<td style="padding-bottom: 5px;">
												<span class="font-weight-bold">Prediction</span>
											</td>
										</tr>
										<tr>
											<td align="center" style="font-size: 1.2rem;">
												<span id="label_churn" class="label-churn d-none">Churn</span>
												<span id="label_not_churn" class="label-not-churn">Not Churn</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-2">
							<div class="card shadow">
								<div class="card-body mb-2">
									<table width="100%">
										<tr>
											<td style="padding-bottom: 5px;">
												<span class="font-weight-bold">Risk Level</span>
											</td>
										</tr>
										<tr>
											<td align="center" style="font-size: 1.2rem;">
												<span id="detail_level_low" class="level-low d-none">Low</span>
												<span id="detail_level_medium" class="level-medium">Medium</span>
												<span id="detail_level_high" class="level-high d-none">High</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-3">
							<div class="card shadow">
								<div class="card-body mb-2">
									<table width="100%">
										<tr>
											<td style="padding-bottom: 5px;">
												<span class="font-weight-bold">Jangka Waktu</span>
											</td>
										</tr>
										<tr>
											<td align="center" style="font-size: 1.2rem;">
												<span id="jangka_bulan" class="text-info font-weight-bold">September</span>,
												<span id="jangka_tahun" class="text-info font-weight-bold">2019</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row" style="margin-top: 10px;">
						<div class="col-lg-6 col-md-12">
							<div class="card shadow">
								<div class="card-header1 py-1" style="background-color: #FFE8D3;">
									<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Financial Usage Frequency</b></span>
								</div>
								<div class="card-body">
									<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/b9db70d5-938f-4556-8fab-fdcffbfe91a7" frameborder="0" width="100%" height="350" allowtransparency></iframe>
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-md-12">
							<div class="card shadow">
								<div class="card-header1 py-1" style="background-color: #FFE8D3;">
									<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Financial Usage Amount</b></span>
								</div>
								<div class="card-body">
									<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/116554ef-6500-43ee-90f1-9458a8e91659" frameborder="0" width="100%" height="350" allowtransparency></iframe>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-12 col-md-12" style="margin-top: 10px;">
							<div class="card shadow">
								<div class="card-header1 py-1" style="background-color: #FFE8D3;">
									<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Frequency Channel</b></span>
								</div>
								<div class="card-body">
									<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/40e79423-35be-404f-bbc9-bdbb1b9a1777" frameborder="0" width="100%" height="470" allowtransparency></iframe>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Detail Data Nasabah Lime -->
	<div class="modal fade" id="pie_lime" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document" style="max-width: 1140px">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Interpretasi Prediksi</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100 mb-3" src="http://172.17.62.84:3000/public/question/4362bc8d-50be-4080-a3e3-5fbeb7946e75" width="100%" height="200" frameborder="0" allowtransparency></iframe>

					<hr>
					Warna merah menjelaskan parameter yang berkontribusi terhadap probability churn, sedangkan warna hijau menjelaskan parameter yang berkontribusi terhadap probability not churn.
					<hr>

					<span style="color: #000; font-size: 1.2rem; font-weight: bold;">Hasil Prediksi</span>
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-4">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Prediction</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<span id="label_churn" class="label-churn d-none">Churn</span>
												<span id="label_not_churn" class="label-not-churn">Not Churn</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Risk Level</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<span id="det_level_low" class="level-low">Low</span>
												<span id="det_level_medium" class="level-medium d-none">Medium</span>
												<span id="det_level_high" class="level-high d-none">High</span>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

						<div class="col-lg-4">
							<div class="card shadow">
								<div class="card-body">
									<table width="100%">
										<tr class="text-sm font-weight-bold">
											<td>Churn Rate</td>
										</tr>
										<tr valign="bottom">
											<td align="center">
												<span id="churn_rate" style="font-size: 1.2rem; color: #000;">0.01%</span>
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
		document.getElementById("menu_cp").classList.add("active");
		document.getElementById("icon_cp").style.color = "#F02632";
		document.getElementById("name_cp").style.color = "#F02632";
		document.getElementById("icon_cp_pre").style.color = "#F02632";
		document.getElementById("name_cp_pre").style.color = "#F02632";		
	</script>

<?php include "footer.php"; ?>