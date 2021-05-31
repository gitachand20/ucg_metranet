<?php include "header.php"; ?>

	<!-- Page Heading -->
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home</h1>
	</div> -->

	<div class="row col-lg-12 mb-3">
		<div class="col-lg-2 col-md-6 mb-2">
			<span style="color: #000;">Jangka Waktu</span>
			<select class="form-control bg-light border-cus small" style="margin-top: 5px;" id="search_by_periode" onchange="pilihPeriodeHome()">
				<option value="" disabled="disabled" selected="selected">Semua</option>
				<option value="Harian">Harian</option>
				<option value="Mingguan">Mingguan</option>
				<option value="Bulanan">Bulanan</option>
			</select>
		</div>

		<div class="mb-2 d-none" id="grs_ver" style="border-left: 0.25rem solid #BDBDBD !important; margin-right: 0.75rem; margin-left: 0.75rem;"></div>

		<div class="col-lg-2 col-md-6 mb-2 d-none" id="range_weekly">
			<span style="color: #000;">Minggu Ke</span>
			<select class="form-control bg-light border-cus small" style="margin-top: 5px;" id="weekly_option" onchange="setStartDate()">
				<option value="" disabled="disabled" selected="selected">Pilih</option>
				<option value="1">1 Minggu</option>
				<option value="2">2 Minggu</option>
				<option value="3">3 Minggu</option>
				<option value="4">4 Minggu</option>
			</select>
		</div>

		<div class="col-lg-2 col-md-6 mb-2 d-none" id="range_monthly">
			<span style="color: #000;">Rentang</span>
			<select class="form-control bg-light border-cus small" style="margin-top: 5px;" id="monthly_option" onchange="setStartDate()">
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
		</div>

		<div class="col-lg-2 col-md-6 mb-2 d-none" id="start_date">
			<span style="color: #000;">Dari</span>
			<input class="form-control datepicker2 bg-light border-cus small" type="text" name="tanggal_awal" id="tanggal_awal" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem; margin-top: 5px;" autocomplete="off" onchange="setStartDate()" required>
		</div>

		<div class="col-lg-2 col-md-6 mb-2 d-none" id="end_date">
			<span style="color: #000;">Ke</span>
			<input class="form-control datepicker2 bg-light small" type="text" name="tanggal_akhir" id="tanggal_akhir" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem; margin-top: 5px;" autocomplete="off" disabled="disabled" required>
		</div>

		<div class="col-1 mb-2" id="reset_button">
			<br>
			<button class="btn btn-custom" type="button" style="width: 100%; margin-top: 5px;" onclick="resetPencarianOCHome()">
				<span class="text">Reset</span>
			</button>
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
								100%
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
								69%
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
								99%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Application -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-success shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-history text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pending Application
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="pending_application">
								19%
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
								Total Akun Baru
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_nasabah_pembukaan_rekening">
								9
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