
	<div>
		<!-- Fitur -->
		<div class="row" style="margin-top: 20px;">
			<div class="col-lg-3 col-md-12">
				<form action="#" method="post">
					<div class="form-group row">
						<div class="col-8">
							<input class="form-control" type="text" name="cari" placeholder="Search CIF" required>
						</div>
						<div class="col-4">
							<input class="btn btn-detail" type="submit" name="btn_cari" value="Search" onclick="spinner()" style="width: 100%;">
						</div>
					</div>
				</form>
			</div>

			<div class="col-lg-9 col-md-12 d-none" id="fitur" style="float: right;">
				<div class="form-group row" style="margin-bottom: 0;">
					<div class="col-lg-6 col-md-12 mb-4">
						<a class="btn btn-lihat col-12" href="#" data-toggle="modal" data-target="#demography">
							<table width="100%">
								<tr>
									<td style="text-transform: capitalize;">Muhammad Iqbal Zulkifli</td>
									<td>Laki-laki</td>
									<td>6171012358378884</td>
									<td>
										<i class="fas fa-fw fa-angle-down"></i>
									</td>
								</tr>
							</table>
						</a>
					</div>

					<div class="col-lg-6 col-md-12">
						<div class="form-group row">
							<div class="col-lg-3 col-md-3 col-sm-3">
								<select class="form-control select" name="filter_month" id="filter_month">
									<option value="" disabled="disabled" selected="selected">Bulan</option>
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

							<div class="col-lg-3 col-md-3 col-sm-3">
								<select class="form-control select" name="year" id="year">
									<option value="" disabled="disabled" selected="selected">Tahun</option>
									<option value="2020">2020</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
								</select>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-3">
								<select class="form-control select" name="filter_period" id="filter_period">
									<option value="" disabled="disabled" selected="selected">Periode</option>
									<option value="3">3-Months</option>
									<option value="6">6-Months</option>
									<option value="9">9-Months</option>
									<option value="12">12-Months</option>
								</select>
							</div>

							<div class="col-lg-3 col-md-3 col-sm-3">
								<button class="btn btn-detail" onclick="spinner1()" style="width: 100%;">Filter</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div id="btn-load">
		<div class="loader">
			<div class="loading">
			</div>
		</div>
	</div> -->

	<div class="sk-circle d-none" id="load" style="margin-top: 20%;">
		<div class="sk-circle1 sk-child"></div>
		<div class="sk-circle2 sk-child"></div>
		<div class="sk-circle3 sk-child"></div>
		<div class="sk-circle4 sk-child"></div>
		<div class="sk-circle5 sk-child"></div>
		<div class="sk-circle6 sk-child"></div>
		<div class="sk-circle7 sk-child"></div>
		<div class="sk-circle8 sk-child"></div>
		<div class="sk-circle9 sk-child"></div>
		<div class="sk-circle10 sk-child"></div>
		<div class="sk-circle11 sk-child"></div>
		<div class="sk-circle12 sk-child"></div>
	</div>

	<div class="d-none" id="content1">
		<!-- <div class="card shadow" style="margin-top: 0;">
			<div class="card-body" style="padding-bottom: 0;"> -->
				<div class="row" style="margin-top: 0;">
					<div class="col-xl-3 col-lg-6 col-xs-12 mb-3">
						<div class="card shadow">
							<div class="card-body" style="padding-bottom: 0;">
								<table width="100%">
									<tr class="text-sm font-weight-bold mb-1" style="color: #000;">
										<td>Total Tabungan</td>
									</tr>
									<tr class="text-danger" valign="bottom">
										<td>
											Rp. 
											<span style="font-size: 2rem;">300.000.000</span>
										</td>
									</tr>
									<!-- <tr>
										<td class="border-right-cus">
											<div class="progress progress-sm mr-2">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr> -->
								</table>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-6 col-xs-12 mb-3">
						<div class="card shadow">
							<div class="card-body" style="padding-bottom: 0;">
								<table width="100%">
									<tr class="text-sm font-weight-bold mb-1" style="color: #000;">
										<td>Total Investasi</td>
									</tr>
									<tr class="text-danger" valign="bottom">
										<td>
											Rp. 
											<span style="font-size: 2rem;">150.000.000</span>
										</td>
									</tr>
									<!-- <tr>
										<td class="border-right-cus">
											<div class="progress progress-sm mr-2">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr> -->
								</table>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-6 col-xs-12 mb-3">
						<div class="card shadow">
							<div class="card-body" style="padding-bottom: 0;">
								<table width="100%">
									<tr class="text-sm font-weight-bold mb-1" style="color: #000;">
										<td>Total Limit Pinjaman</td>
									</tr>
									<tr class="text-danger" valign="bottom">
										<td>
											Rp. 
											<span style="font-size: 2rem;">50.000.000</span>
										</td>
									</tr>
									<!-- <tr>
										<td class="border-right-cus">
											<div class="progress progress-sm mr-2">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr> -->
								</table>
							</div>
						</div>
					</div>

					<div class="col-xl-3 col-lg-6 col-xs-12 mb-3">
						<div class="card shadow">
							<div class="card-body" style="padding-bottom: 0;">
								<table width="100%">
									<tr class="text-sm font-weight-bold mb-1" style="color: #000;">
										<td>Total Sisa Pinjaman</td>
									</tr>
									<tr class="text-danger" valign="bottom">
										<td>
											Rp. 
											<span style="font-size: 2rem;">30.000.000</span>
										</td>
									</tr>
									<!-- <tr>
										<td class="border-right-cus">
											<div class="progress progress-sm mr-2">
												<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
										</td>
									</tr> -->
								</table>
							</div>
						</div>
					</div>
				</div>
			<!-- </div>
		</div> -->
	</div>

	<div class="d-none" id="content2">
		<div class="row">
			<div class="col-lg-4 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Status Future Value</b></h5>
					</div>
					<div class="card-body">
						<br>
						<center>
							<i class="fa fa-star" style="color: #F5DA81; font-size: 7.5em;"></i>
						</center>
						<br>
						<center>
							<span style="color: #F5DA81; font-size: 2em; font-weight: bold;">Medium Future Value</span>
						</center>
						<br>
						<center>
							<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#future_value_360">More Detail</a>
						</center>
						<br>
					</div>
				</div>
			</div>

			<div class="col-lg-8 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<div class="form-group1 row">
							<div class="col-8">
								<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Status Current Value</b></h5>
							</div>
							<div class="col-4">
								<a href="#" class="btn1 btn-danger" data-toggle="modal" data-target="#curent_value" style="float: right;">More Detail</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b4456935-55db-4bef-9c7b-3ce07b0cb2e5" frameborder="0" width="100%" height="300" allowtransparency></iframe>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-7 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<div class="form-group1 row">
							<div class="col-8">
								<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Status Current Value</b></h5>
							</div>
							<div class="col-4">
								<a href="#" class="btn1 btn-danger" data-toggle="modal" data-target="#curent_value" style="float: right;">More Detail</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b4456935-55db-4bef-9c7b-3ce07b0cb2e5" frameborder="0" width="100%" height="400" allowtransparency></iframe>
					</div>
				</div>
			</div>

			<div class="col-lg-5 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<div class="card-body" style="padding-top: 5px;">
						<table width="100%" style="color: #000;">
							<tr>
								<td width="60%">
									<span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Status Future Value</b></span>
								</td>
								<td width="40%" style="font-size: 1.2rem;">
									<a class="btn btn-lihat1" href="#" data-toggle="modal" data-target="#future_value_360">
										<span class="icon">
											<i class="fa fa-star" style="color: #F5DA81;"></i>
										</span>
										<span class="m-0 font-weight-bold" style="font-size: 1.2rem; color: #F5DA81">Medium</span>
									</a>
								</td>
							</tr>
						</table>
						<br>
						<table width="100%" style="color: #000;">
							<tr style="border-bottom: 2px #000 solid;">
								<td width="60%">
									<span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Status Customer Expenditures</b></span>
								</td>
								<td width="40%" style="font-size: 1.2rem;" id="segmentation">Platinum Customers</td>
							</tr>
							<tr>
								<td><b>Biaya Top Up Transaksi</b></td>
								<td id="total_top_up_fee">IDR 1.000.000</td>
							</tr>
							<tr>
								<td><b>Biaya Transfer</b></td>
								<td id="total_transfer_fee">IDR 2.000.000</td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td valign="top"><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Status Transaksi</b></span></td>
								<td>
									<table>
										<tr>
											<td><span style="font-size: 1.2rem;">Flat Users</span></td>
										</tr>
										<tr>
											<td><span style="font-size: 1.2rem;">Growers</span></td>
										</tr>
									</table>
								</td>
							</tr>
							<tr>
								<td><b>Rekening</b></td>
								<td><b>Status</b></td>
							</tr>
							<tr>
								<td><b>Account Number 1</b></td>
								<td>Flat User</td>
							</tr>
							<tr>
								<td><b>Account Number 2</b></td>
								<td>Growers</td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>	
							<tr style="border-bottom: 2px #000 solid;">
								<td><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Profil Berdasarkan Status Usia</b></span></td>
								<td><span style="font-size: 1.2rem;">Married Professional</span></td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Status Perkawinan</b></span></td>
								<td><span style="font-size: 1.2rem;">Online Loyalist</span></td>
							</tr>	
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Channel Behavior</b></span>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="cb">
						<div class="card-body">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/efa3806e-242e-4d8b-b031-686d41bc84a1" frameborder="0" width="100%" height="400" allowtransparency></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Financial Usage Frequency</b></span>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="cb">
						<div class="card-body">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/97eb570a-8671-4d54-bf83-2f85d0fdf3a8" frameborder="0" width="100%" height="400" allowtransparency></iframe>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<span class="m-0 font-weight-bold" style="color: #000; font-size: 1.1rem"><b>Financial Usage Amount</b></span>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="cb">
						<div class="card-body">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/5676420a-62d1-4cfc-95d6-95257129f432" frameborder="0" width="100%" height="400" allowtransparency></iframe>
						</div>
					</div>
				</div>
			</div>			
		</div>

		<div class="row">
			<div class="col-12" style="margin-top: 10px;">
				<div class="card shadow">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Transaction History</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="th">
						<div class="card-body">
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/56d0a9a1-a15c-417d-a33b-ee70e998e28d" frameborder="0" width="100%" height="600" allowtransparency></iframe>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Data Nasabah -->
	<div class="modal fade" id="demography" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg1" style="width: 1000px;">
			<div class="modal-content">
				<div class="modal-header" style="color: #fff; background-color: #EF7A48;">
					<div class="col-11">
						<center>
							<h5 class="m-0 font-weight-bold"><b>Data Nasabah</b></h5>
						</center>
					</div>
					<div class="col-1">
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
	            			<span class="font-weight-bold" aria-hidden="true" style="color: #fff;">×</span>
	          			</button>
					</div>
				</div>
				<div class="modal-body">
					<div class="form-group row col-12">
						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-user" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Nama</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_nama">Muhammad Iqbal Zulkifli</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_nama">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-mars" style="font-size: 16px; color: #EE2E29; display: block;" id="g_male"></i>
										<i class="fas fa-venus" style="font-size: 16px; color: #EE2E29; display: block;" id="g_female"></i>
										<i class="fas fa-venus-mars" style="font-size: 16px; color: #EE2E29; display: block;" id="g_no_data"></i>
									</td>
									<td style="font-size: .85em;">Jenis Kelamin</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_jenis_kelamin">Laki-laki</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_jenis_kelamin">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-map-marker" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Tempat Lahir</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_tempat_lahir">Pontianak</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_tempat_lahir">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="far fa-calendar-alt" style="font-size: 16px;  color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Tanggal Lahir</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_tanggal_lahir">28 Maret 1998</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_tanggal_lahir">No Data</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="form-group row col-12">
						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-mobile-alt" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">No. Handphone</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="v_handphone">082374635282</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_handphone">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-phone-alt" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">No. Telepon Rumah</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="v_telepon_rumah">0749284738</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_telepon_rumah">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-heart" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Status Perkawinan</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_status_perkawinan">Lajang</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_status_perkawinan">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-moon" style="font-size: 16px;  color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Agama</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_agama">Islam</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_agama">No Data</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="form-group row col-12">
						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-graduation-cap" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Pendidikan</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_pendidikan">Sarjana</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_pendidikan">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-briefcase" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Pekerjaan</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_bidang_kantor">Data Visualization</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_bidang_kantor">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-address-card" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Nomor Identitas</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="v_nomor_identitas">6171012358378884</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_nomor_identitas">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-3 col-md-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-id-card" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">NPWP</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="v_npwp">0828392739</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_npwp">No Data</td>
								</tr>
							</table>
						</div>
					</div>

					<div class="form-group row col-12">
						<div class="col-lg-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="10%">
										<i class="fas fa-map-marker-alt" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Alamat Identitas</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_alamat_ktp">Jl. Iskandar Martadhinata</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_alamat_ktp">No Data</td>
								</tr>
							</table>
						</div>

						<div class="col-lg-6 col-xs-12 mb-3">
							<table width="100%">
								<tr>
									<td valign="top" width="10%">
										<i class="fas fa-street-view" style="font-size: 16px; color: #EE2E29;"></i>
									</td>
									<td style="font-size: .85em;">Alamat Domisili</td>
								</tr>
								<tr>
									<td></td>
									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block; text-transform: capitalize;" id="v_alamat_domisili">Jl. Pancoran Barat 3</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_alamat_domisili">No Data</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Status Current Value -->
	<div class="modal fade" id="curent_value" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Status Current Value</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/b4456935-55db-4bef-9c7b-3ce07b0cb2e5" frameborder="0" width="100%" height="400" allowtransparency></iframe>
					<hr>
					Grafik ini menampilkan status Current Value nasabah pada periode waktu yang telah ditentukan.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>VIP : Kelompok nasabah yang menghasilkan 20% teratas current value.</li>
						<li>Non - VIP : Kelompok nasabah yang menghasilkan 80% terbawah current value.</li>
					</ul>
					<hr>
					Faktor - faktor yang mempengaruhi status current value :
					<ul style="list-style-position: outside;">
						<li>Bunga pinjaman pada bulan tersebut.</li>
						<li>Total fee pada bulan tersebut.</li>
						<li>Outstanding pada bulan tersebut.</li>
						<li>Nilai total = Bunga + Total fee - Outstanding</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Status Future Value -->
	<div class="modal fade" id="future_value_360" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Status Future Value</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<center>
						<i class="fa fa-star fa-5x" style="color: #F5DA81;"></i>
					</center>
					<hr>
					<b>Deskripsi</b>
					<table width="100%">
						<tr>
							<td valign="top"><i class="fa fa-star fa-sm" style="color: #00cc00;"></i></td>
							<td>High : Kelompok nasabah dengan future value yang berada pada posisi 30 % teratas</td>
						</tr>
						<tr>
							<td valign="top"><i class="fa fa-star fa-sm" style="color: #F5DA81;"></i></td>
							<td>Medium : Kelompok nasabah dengan future value berada pada posisi 31% hingga 70 %</td>
						</tr>
						<tr>
							<td valign="top"><i class="fa fa-star fa-sm" style="color: #ff0000;"></i></td>
							<td>Low : Kelompok nasabah dengan future value berada pada posisi > 70 %</td>
						</tr>
					</table>
					<hr>
					Faktor - faktor yang mempengaruhi nasabah berdasarkan future value :
					<ul style="list-style-position: outside;">
						<li>Sisa umur produktif</li>
						<li>Customer current value</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		// window.onload = function () {
		// 	$("#demography").on("shown.bs.modal", function(){
		// 		$('.modal-backdrop').css('opacity', '0');
		// 	});
		// }

		document.getElementById("g_female").style.display = "none";
		document.getElementById("g_no_data").style.display = "none";
		document.getElementById("v_bidang_kantor").style.display = "none";
		document.getElementById("n_bidang_kantor").style.display = "block";
	</script>