	<!-- <style>
	* {
	  box-sizing: border-box;
	}
	
	body {
	  font: 16px Arial;  
	}
	
	/the container must be positioned relative:/
	.autocomplete {
	  position: relative;
	  display: inline-block;
	}
	
	input {
	  border: 1px solid transparent;
	  background-color: #f1f1f1;
	  padding: 10px;
	  font-size: 16px;
	}
	
	input[type=text] {
	  background-color: #f1f1f1;
	  width: 100%;
	}
	
	input[type=submit] {
	  background-color: DodgerBlue;
	  color: #fff;
	  cursor: pointer;
	}
	
	.autocomplete-items {
	  position: absolute;
	  border: 1px solid #d4d4d4;
	  border-bottom: none;
	  border-top: none;
	  z-index: 99;
	  /position the autocomplete items to be the same width as the container:/
	  top: 100%;
	  left: 0;
	  right: 0;
	}
	
	.autocomplete-items div {
	  padding: 10px;
	  cursor: pointer;
	  background-color: #fff; 
	  border-bottom: 1px solid #d4d4d4; 
	}
	
	/when hovering an item:/
	.autocomplete-items div:hover {
	  background-color: #e9e9e9; 
	}
	
	/when navigating through the items using the arrow keys:/
	.autocomplete-active {
	  background-color: DodgerBlue !important; 
	  color: #ffffff; 
	}
	</style> -->

	<div>
		<!-- Fitur -->
		<div class="row" style="margin-top: 20px;">
			<div class="col-7" >
				<!-- <form name="form_input" class="needs-validation" method="post" action="search_c360" novalidate>
					<div class="autocomplete" style="width:300px;">
						<input id="cif" type="text" name="cif" placeholder="Search CIF">
					</div>
					<input type="submit" name="btn_cari" value="Search" onclick='move_value()'>
				</form>	 -->
				<!-- <button type="submit" class="sbtn btn btn-secondary" onclick="spinner()">Search</button> -->
				<form action="#" method="post">
					<div class="form-group row">
						<div class="col-6">
							<input class="form-control" type="text" name="cari" placeholder="Search CIF / Name" required>
						</div>
						<div class="col-6">
							<input class="btn btn-detail" type="submit" name="btn_cari" value="Search" onclick="spinner()">
						</div>
					</div>
				</form>
			</div>

			<div class="col-5 d-none" id="fitur" style="float: right;">
				<div class="form-group row">
					<div class="col-4">
						<select class="form-control" onchange="spinner()">
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
							<option value="3">3-Months</option>
							<option value="6">6-Months</option>
							<option value="9">9-Months</option>
							<option value="12">12-Months</option>
						</select>
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
		<div class="card shadow mb-4">
			<div class="card-body">
				<table width="100%" style="color: #000;">
					<tr>
						<td width="20%" valign="top"><b>CIF</b></td>
						<td width="30%" valign="top">BEEW31E</td>
						<td width="20%" valign="top"><b>Name</b></td>
						<td width="30%">Muhammad Iqbal Zulkifli</td>
					</tr>
					<tr>
						<td><b>Gender</b></td>
						<td>Laki-Laki</td>
						<td><b>Handphone</b></td>
						<td>083294739374</td>
					</tr>
					<tr>
						<td><b>Total Saving</b></td>
						<td>Rp. 300.000.000</td>
						<td><b>Total Deposit</b></td>
						<td>Rp. 150.000.000</td>
					</tr>
					<tr>
						<td><b>Total Loan Plafond</b></td>
						<td>Rp. 50.000.000</td>
						<td><b>Total Loan Oustanding</b></td>
						<td>Rp. 30.000.000</td>
					</tr>
				</table>
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="card shadow mb-4">
					<div class="card-header py-3" style="background-color: #FFE8D3;">
	                  	<h5 class="m-0 font-weight-bold" style="color: #000;"><b>Demograph</b></h5>
	                </div>
	                <div class="card-body">
	                  	<table class="table table-sm table-striped" style="color: #000;">
	                  		<tbody>
	                  			<tr>
		                  			<td width="40%" valign="top"><b>Name</b></td>
		                  			<td width="60%">Muhammad Iqbal Zulkifli</td>
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
	            </div>
			</div>

			<div class="col-6">
				<div class="card shadow mb-4">
					<div class="card-body">
						<table width="100%" style="color: #000;">
							<tr style="border-bottom: 2px #000 solid;">
								<td width="60%">
									<h5 class="m-0 font-weight-bold"><b>Customer Expenditures Status</b></h5>
								</td>
								<td width="40%"><h5>Platinum Customers</h5></td>
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
								<td colspan="2"><br><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td><h5 class="m-0 font-weight-bold"><b>Transaction Status</b></h5></td>
								<td><h5>Flat Users</h5></td>
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
								<td colspan="2"><br><br></td>
							</tr>	
							<tr style="border-bottom: 2px #000 solid;">
								<td><h5 class="m-0 font-weight-bold"><b>Profil By Age Status</b></h5></td>
								<td><h5>Married Professional</h5></td>
							</tr>
							<tr>
								<td colspan="2"><br><br></td>
							</tr>
							<tr style="border-bottom: 2px #000 solid;">
								<td><h5 class="m-0 font-weight-bold"><b>Digital Maturity Status</b></h5></td>
								<td><h5>Online Loyalist</h5></td>
							</tr>	
						</table>
					</div>
				</div>
			</div>

			<!-- <div class="col-6">
				<div class="row">
					<div class="col-12">
						<div class="card shadow mb-4">
							<div class="card-header py-3" style="background-color: #00FF00;">
								<h6 class="m-0 font-weight-bold" style="color: #000;">
									<table width="100%">
										<tr>
											<th><b>CUSTOMER EXPENDITURES STATUS</b></th>
											<th>&nbsp;&nbsp;</th>
											<th><b>Platinum Customer</b></th>
										</tr>
									</table>
								</h6>
							</div>
							<div class="card-body">
								<table width="100%" style="color: #000;">
									<tr>
										<td><b>Total Transaction Charges</b></td>
										<td></td>
										<td>IDR 1.000.000</td>
									</tr>
									<tr>
										<td><b>Total Loan Charges</b></td>
										<td></td>
										<td>IDR 2.000.000</td>
									</tr>
									<tr>
										<td><b>Total Monthly Administration</b></td>
										<td></td>
										<td>IDR 3.000.000</td>
									</tr>	
								</table>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="card shadow mb-4">
							<div class="card-header py-3" style="background-color: #00FF00;">
								<h6 class="m-0 font-weight-bold" style="color: #000;">
									<table width="100%">
										<tr>
											<th><b>TRANSACTION STATUS</b></th>
											<th>&nbsp;&nbsp;</th>
											<th><b>Flat User</b></th>
										</tr>
									</table>
								</h6>
							</div>
							<div class="card-body">
								<table width="100%" style="color: #000;">
									<tr>
										<td><b>Account Number 1</b></td>
										<td></td>
										<td>Flat User</td>
									</tr>
									<tr>
										<td><b>Account Number 2</b></td>
										<td></td>
										<td>Growers</td>
									</tr>	
								</table>
							</div>

							<h6 class="m-0 font-weight-bold">
								<table width="100%" style="">
									<tr style="background-color: #00FF00; color: #000; ">
										<th width="60%" style="padding: 0.75rem 1.25rem;  margin-bottom: 0; border-bottom: 1px solid #e3e6f0;"><b>PROFILE BY AGE STATUS</b></th>
										<th>&nbsp;&nbsp;</th>
										<th><b>Married Profesional</b></th>
									</tr>
								</table>
								<table width="100%" style="margin-top: 5px;">
									<tr style="background-color: #00FF00; color: #000;">
										<th width="60%" style="padding: 0.75rem 1.25rem;  margin-bottom: 0; border-bottom: 1px solid #e3e6f0;"><b>DIGITAL MATURITY STATUS</b></th>
										<th>&nbsp;&nbsp;</th>
										<th><b>Online Loyalist</b></th>
									</tr>
								</table>
							</h6>
						</div>
					</div>
				</div>
			</div> -->
		</div>

		<!-- GRAFIK ATAS -->
		<div class="row">
			<div class="col-4">
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<div class="card-header py-3" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><i class="fas fa-fw fa-chart-area"></i>&nbsp;<b>Channel Behavior</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="cb">
						<div class="card-body">
							
						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<div class="card-header py-3" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><i class="fas fa-fw fa-chart-area"></i>&nbsp;<b>Financial Usage Frequency</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="fuf">
						<div class="card-body">

						</div>
					</div>
				</div>
			</div>

			<div class="col-4">
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<div class="card-header py-3" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><i class="fas fa-fw fa-chart-area"></i>&nbsp;<b>Financial Usage Amount</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="fua">
						<div class="card-body">

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- GRAFIK BAWAH -->
		<div class="row">
			<div class="col-12">
				<div class="card shadow mb-4">
					<!-- Card Header - Accordion -->
					<div class="card-header py-3" style="background-color: #FFE8D3;">
						<h5 class="m-0 font-weight-bold" style="color: #000;"><i class="fas fa-fw fa-table"></i>&nbsp;<b>Transaction History</b></h5>
					</div>
					<!-- Card Content - Collapse -->
					<div class="collapse show" id="th">
						<div class="card-body">

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>