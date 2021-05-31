<?php include "header.php"; ?>

	<!-- Page Heading -->
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home</h1>
	</div> -->
	
	<div class="row col-lg-12 mb-3" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0; padding-left: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_cabang" style="float: left;">
				<span style="color: #000;">Wilayah</span>
				<input class="form-control bg-light border-cus small" style="margin-top: 5px;" onchange="pilihCabang()" list="cabangList" id="cabang" autocomplete="off" placeholder="Pilih Cabang">
				<datalist id="cabangList">
					<option value="CABANG 1"></option>
					<option value="CABANG 2"></option>
					<option value="CABANG 3"></option>
					<option value="CABANG 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_unit" style="float: left;">
				<br>
				<input class="form-control bg-light border-cus small" style="margin-top: 5px;" onchange="pilihUnit()" list="unitList" id="unit" autocomplete="off" placeholder="Pilih Unit">
				<datalist id="unitList">
					<option value="UNIT 1"></option>
					<option value="UNIT 2"></option>
					<option value="UNIT 3"></option>
					<option value="UNIT 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_officer" style="float: left;">
				<br>
				<input class="form-control bg-light border-cus small" style="margin-top: 5px;" list="officerList" id="search_officer" placeholder="Pilih Officer" autocomplete="off" onchange="pilihOfficerKR()">
				<datalist id="officerList">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>

			<div class="col-1 mb-2" id="reset_button" style="float: right;">
				<br>
				<button class="btn btn-custom" type="button" style="width: 100%; margin-top: 5px;" onclick="resetPencarianKRHome()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_period" style="float: right;">
				<br>
				<select class="form-control bg-light small" style="margin-top: 5px;" name="filter_period" id="filter_period" disabled="disabled">
					<option value="" disabled="disabled" selected="selected">Periode</option>
					<option value="3">3-Months</option>
					<option value="6">6-Months</option>
					<option value="9">9-Months</option>
					<option value="12">12-Months</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_month" style="float: right;">
				<br>
				<select class="form-control bg-light small" style="margin-top: 5px;" name="filter_month" id="filter_month" disabled="disabled" onchange="pilihBulan()">
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

			<div class="col-lg-1 col-md-6 mb-2" id="search_by_year" style="float: right;">
				<span style="color: #000; width: 120px; display: inline-block;">Jangka Waktu</span>
				<select class="form-control bg-light border-cus small" style="padding-left: 0.25em; margin-top: 5px;" name="year" id="year" onchange="pilihTahun()">
					<option value="" disabled="disabled" selected="selected">Tahun</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
				</select>
			</div>
		</div>
	</div>

	<div class="row">
		<!-- Credit Achievement Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-fw fa-award text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_achievement_rate">
								125%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Credit Approval Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-calendar-check-o text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em; color: #000">
								Credit Approval Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_approval_rate">
								80%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Credit Performance Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-info shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-line-chart text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-info text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Credit Performance Rate
							</div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="credit_performance_rate">
								98%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total Saving -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-success shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-hand-holding-usd text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Saving
							</div>
							<div>
								<span style="font-size: .8em">Rp</span>
								<span class="h5 mb-0 font-weight-bold text-gray-800" id="total_saving">15.000.000.000</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total Nasabah Pembukaan Rekening -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-plus text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-warning text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Nasabah Pembukaan Rekening
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_nasabah_pembukaan_rekening">
								375
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Churn Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-secondary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-refresh text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-secondary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Churn Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="churn_rate">
								7%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- <div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" href="#credit-approval" role="tab" data-toggle="tab">Credit Approval Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-achievment" role="tab" data-toggle="tab">Credit Achievement Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-performance" role="tab" data-toggle="tab">Credit Performance Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-saving" role="tab" data-toggle="tab">Total Saving</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-nasabah" role="tab" data-toggle="tab">Total Nasabah Pembukaan Rekening</a>
			</li>
		</ul>

		Tab panes
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="credit-approval">
				Test 1
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-achievment">
				Test 2
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-performance">
				Test 3
			</div>

			<div role="tabpanel" class="tab-pane" id="total-saving">
				Test 4
			</div>

			<div role="tabpanel" class="tab-pane" id="total-nasabah">
				Test 5
			</div>
		</div>
	</div> -->

	<script type="text/javascript">
		document.getElementById("home").classList.add("active");
		document.getElementById("icon_home").style.color = "#F02632";
		document.getElementById("name_home").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>