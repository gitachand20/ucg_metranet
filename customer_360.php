
	<div>
		<!-- Fitur -->
		<div class="row" style="margin-top: 20px;">
			<div class="col-3">
				<form action="#" method="post">
					<div class="form-group row">
						<div class="col-8">
							<input class="form-control" type="text" name="cari" placeholder="Search CIF" required>
						</div>
						<div class="col-4">
							<input class="btn btn-detail" type="submit" name="btn_cari" value="Search" onclick="spinner()">
						</div>
					</div>
				</form>
			</div>

			<div class="col-9 d-none" id="fitur" style="float: right;">
				<div class="form-group row" style="margin-bottom: 0;">
					<div class="col-6">
						<a class="btn btn-lihat col-12" href="#" data-toggle="modal" data-target="#demography">
							<table width="100%">
								<tr>
									<td>Muhammad Iqbal Zulkifli</td>
									<td>Laki-laki</td>
									<td>6171012358378884</td>
									<td>
										<i class="fas fa-fw fa-angle-down"></i>
									</td>
								</tr>
							</table>
						</a>
					</div>

					<div class="col-6">
						<div class="form-group row">
							<div class="col-3">
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

							<div class="col-3">
								<select class="form-control">
									<option value="">Tahun</option>
									<option value="2018">2018</option>
									<option value="2019">2019</option>
									<option value="2020">2020</option>
								</select>
							</div>

							<div class="col-3">
								<select class="form-control" name="filter_period" id="filter_period">
									<option value="">Periode</option>
									<option value="2">3-Months</option>
									<option value="5">6-Months</option>
									<option value="8">9-Months</option>
									<option value="11">12-Months</option>
								</select>
							</div>

							<div class="col-3">
								<button class="btn btn-custom" onclick="spinner1()">Filter</button>
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
		<div class="card shadow" style="margin-top: 0;">
			<div class="card-body">
				<table width="100%">
					<tr class="text-sm font-weight-bold mb-1" style="color: #000;">
						<td class="border-right" width="25%">Total Saving</td>
						<td class="border-right" width="25%">Total Deposit</td>
						<td class="border-right" width="25%">Total Loan Plafond</td>
						<td width="25%" style="padding-left: 1em;">Total Loan Oustanding</td>
					</tr>
					<tr class="text-danger" valign="bottom">
						<td class="border-right">
							Rp. 
							<span style="font-size: 2rem;">300.000.000</span>
						</td>
						<td class="border-right">
							Rp. 
							<span style="font-size: 2rem;">150.000.000</span>
						</td>
						<td class="border-right">
							Rp. 
							<span style="font-size: 2rem;">50.000.000</span>
						</td>
						<td style="padding-left: 1em;">
							Rp. 
							<span style="font-size: 2rem;">30.000.000</span>
						</td>
					</tr>
					<!-- <tr>
						<td class="border-right">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</td>
						<td class="border-right">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</td>
						<td class="border-right">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</td>
						<td style="padding-left: 1em;">
							<div class="progress progress-sm mr-2">
								<div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</td>
					</tr> -->
				</table>
			</div>
		</div>
	</div>

	<div class="d-none" id="content2">
		<div class="row" style="margin-top: 10px;">
			<div class="col-4">
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

				<!-- <div class="card shadow mb-4">
					<div class="card-header py-3" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Demograph</b></h5>
					</div>
					<div class="card-body">
						<table class="table table-sm table-striped" style="color: #000;">
							<tbody>
								<tr>
									<td width="40%" valign="top"><b>CIF</b></td>
									<td width="60%">BEEW31E</td>
								</tr>
								<tr>
									<td><b>Name</b></td>
									<td>Muhammad Iqbal Zulkifli</td>
								</tr>
								<tr>
									<td><b>Gender</b></td>
									<td>Laki-Laki</td>
								</tr>
								<tr>
									<td valign="top"><b>Place/Date of Birth</b></td>
									<td>Pontianak/28 Maret 1998</td>
								</tr>
								<tr>
									<td><b>ID Number</b></td>
									<td>6171012358378884</td>
								</tr>
								<tr>
									<td valign="top"><b>ID Address</b></td>
									<td>Jl Iskandar Martadhinata</td>
								</tr>
								<tr>
									<td valign="top"><b>Current Address</b></td>
									<td>Jl Pancoran Barat 3</td>
								</tr>
								<tr>
									<td><b>Cellular Phone</b></td>
									<td>0749284738</td>
								</tr>
								<tr>
									<td><b>Home Phone</b></td>
									<td>082374635282</td>
								</tr>
								<tr>
									<td><b>Marital Status</b></td>
									<td>Lajang</td>
								</tr>
								<tr>
									<td><b>Religion</b></td>
									<td>Islam</td>
								</tr>
								<tr>
									<td><b>Education</b></td>
									<td>Sarjana</td>
								</tr>
								<tr>
									<td><b>Job</b></td>
									<td>Data Visualization</td>
								</tr>
								<tr>
									<td><b>NPWP</b></td>
									<td>0828392739</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> -->
			</div>

			<div class="col-4">
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

			<div class="col-4">
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

		<div class="row" style="margin-top: 10px;">
			<div class="col-7">
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<div class="card-header1 py-1" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Transaction History</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="th">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/56d0a9a1-a15c-417d-a33b-ee70e998e28d"    frameborder="0" width="100%" height="400" allowtransparency></iframe>
					</div>
				</div>
			</div>

			<div class="col-5">
				<div class="card shadow mb-4">
					<div class="card-body" style="padding-top: 5px;">
						<table width="100%" style="color: #000;">
							<tr style="border-bottom: 2px #000 solid;">
								<td width="60%">
									<span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Customer Expenditures Status</b></span>
								</td>
								<td width="40%" style="font-size: 1.2rem;">Platinum Customers</td>
							</tr>
							<tr>
								<td><b>Total Transaction Charges</b></td>
								<td>IDR 1.000.000</td>
							</tr>
							<tr>
								<td><b>Total Loan Charges</b></td>
								<td>IDR 2.000.000</td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td valign="top"><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Transaction Status</b></span></td>
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
								<td><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Profil By Age Status</b></span></td>
								<td><span style="font-size: 1.2rem;">Married Professional</spam></td>
							</tr>
							<tr>
								<td colspan="2"><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td><span class="m-0 font-weight-bold" style="font-size: 1.2rem;"><b>Digital Maturity Status</b></span></td>
								<td><span style="font-size: 1.2rem;">Online Loyalist</span></td>
							</tr>	
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="demography" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg1" style="width: 1000px;">
			<div class="modal-content" style="background-color: #FFF5EE;">
				<div class="modal-header" style="color: #000; background-color: #F4A460;">
					<h5 class="m-0 font-weight-bold"><b>Demography</b></h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            			<span aria-hidden="true" style="color: #000;">×</span>
          			</button>
				</div>
				<div class="modal-body">
					<div class="form-group row mb-4 col-12">
						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-user" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;">Muhammad Iqbal Zulkifli</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="nd_name">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Name</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-mars" style="font-size: 16px; color: #48549B; display: block;" id="g_male"></i>
										<i class="fas fa-venus" style="font-size: 16px; color: #48549B; display: block;" id="g_female"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_jenis_kelamin">Laki-laki</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_jenis_kelamin">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Gender</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-map-marker" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_tempat_lahir">Pontianak</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_tempat_lahir">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Place of Birth</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="far fa-calendar-alt" style="font-size: 16px;  color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_tanggal_lahir">28 Maret 1998</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_tanggal_lahir">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Date of Birth</td>
								</tr>
							</table>
						</div>
					</div>

					<hr>

					<div class="form-group row mb-4 col-12">
						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-mobile-alt" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_handphone">082374635282</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_handphone">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Cellular Phone</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-phone-alt" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_telepon_rumah">0749284738</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_telepon_rumah">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Home Phone</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-heart" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_status_perkawinan">Lajang</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_status_perkawinan">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Marital Status</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="far fa-moon" style="font-size: 16px;  color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_agama">Islam</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_agama">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Religion</td>
								</tr>
							</table>
						</div>
					</div>

					<hr>

					<div class="form-group row mb-4 col-12">
						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-user-graduate" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_pendidikan">Sarjana</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_pendidikan">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Education</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="fas fa-briefcase" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_bidang_kantor">Data Visualization</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_bidang_kantor">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Occupation</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="far fa-id-card" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_nomor_identitas">6171012358378884</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_nomor_identitas">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">ID Number</td>
								</tr>
							</table>
						</div>

						<div class="col-3">
							<table width="100%">
								<tr>
									<td valign="top" width="20%">
										<i class="far fa-id-card" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_npwp">0828392739</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_npwp">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">NPWP</td>
								</tr>
							</table>
						</div>
					</div>

					<hr>

					<div class="form-group row col-12">
						<div class="col-6">
							<table width="100%">
								<tr>
									<td valign="top" width="10%">
										<i class="fas fa-map-marker-alt" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_alamat_ktp">Jl. Iskandar Martadhinata</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_alamat_ktp">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">ID Address</td>
								</tr>
							</table>
						</div>

						<div class="col-6">
							<table width="100%">
								<tr>
									<td valign="top" width="10%">
										<i class="fas fa-street-view" style="font-size: 16px; color: #48549B;"></i>
									</td>
									<td style="font-size: .85em; color: #000; display: block;" id="v_alamat_domisili">Jl. Pancoran Barat 3</td>
									<td style="font-size: .85em; color: #FF0000; display: none;" id="n_alamat_domisili">No Data</td>
								</tr>
								<tr>
									<td></td>
									<td style="font-size: .85em;">Current Address</td>
								</tr>
							</table>
						</div>
					</div>
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
		document.getElementById("v_bidang_kantor").style.display = "none";
		document.getElementById("n_bidang_kantor").style.display = "block";
	</script>