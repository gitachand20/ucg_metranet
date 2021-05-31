<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Original Home</h1>
	</div>

	<div class="row mb-4">
		<div class="input-group col-lg-3" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch" autocomplete="off">
			<datalist id="datalistOptions">
				<option value="Branch 1"></option>
				<option value="Branch 2"></option>
				<option value="Branch 3"></option>
				<option value="Branch 4"></option>
			</datalist>
		</div>
	</div>

	<div class="row">
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
								<!-- Fundig => 200, Lending => 175 -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
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

		<!-- Tab panes -->
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
	</div>


	<br>
	<hr style="border-bottom: 5px solid red;">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home Kredit Operasional</h1>
	</div>

	<div class="row mb-4">
		<div class="input-group col-lg-3" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions1" id="exampleDataList" placeholder="Pilih Branch" autocomplete="off">
			<datalist id="datalistOptions1">
				<option value="Branch 1"></option>
				<option value="Branch 2"></option>
				<option value="Branch 3"></option>
				<option value="Branch 4"></option>
			</datalist>
		</div>
	</div>

	<div class="row">
		<!-- Achievment Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-calendar text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_achievement_rate">
								80%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Credit Approval Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-dollar-sign text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Credit Approval Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_approval_rate">
								125%
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
						<i class="fas fa-clipboard-list text-gray-200"></i>
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
							<div>
								<span style="font-size: .8em">Rp</span>
								<span class="h5 mb-0 font-weight-bold text-gray-800" id="pending_application">15.000.000.000</span>
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
								<!-- Fundig => 200, Lending => 175 -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" href="#credit-achievment" role="tab" data-toggle="tab">Achievement Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-approval" role="tab" data-toggle="tab">Credit Approval Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-performance" role="tab" data-toggle="tab">Credit Performance Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#pending-application" role="tab" data-toggle="tab">Pending Application</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-nasabah" role="tab" data-toggle="tab">Total Nasabah Pembukaan Rekening</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="credit-achievment">
				Test 1
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-approval">
				Test 2
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-performance">
				Test 3
			</div>

			<div role="tabpanel" class="tab-pane" id="pending-application">
				Test 4
			</div>

			<div role="tabpanel" class="tab-pane" id="total-nasabah">
				Test 5
			</div>
		</div>
	</div>


	<br>
	<hr style="border-bottom: 5px solid red;">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home Kredit Manager</h1>
	</div>

	<div class="row mb-4">
		<div class="input-group col-lg-3" id="search_by_region">
			<input class="form-control bg-light border-cus small" list="datalistOptions2" id="exampleDataList" placeholder="Pilih Region" autocomplete="off">
			<datalist id="datalistOptions2">
				<option value="Region 1"></option>
				<option value="Region 2"></option>
				<option value="Region 3"></option>
				<option value="Region 4"></option>
			</datalist>
		</div>
	</div>

	<div class="row">
		<!-- Achievement Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-calendar text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_achievement_rate">
								80%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Credit Achievement Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-dollar-sign text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Credit Approval Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_approval_rate">
								125%
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
						<i class="fas fa-clipboard-list text-gray-200"></i>
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
							<div>
								<span style="font-size: .8em">Rp</span>
								<span class="h5 mb-0 font-weight-bold text-gray-800" id="pending_application">15.000.000.000</span>
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
								<!-- Fundig => 200, Lending => 175 -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" href="#credit-achievment" role="tab" data-toggle="tab">Achievement Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-approval" role="tab" data-toggle="tab">Credit Approval Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#credit-performance" role="tab" data-toggle="tab">Credit Performance Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#pending-application" role="tab" data-toggle="tab">Pending Application</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-nasabah" role="tab" data-toggle="tab">Total Nasabah Pembukaan Rekening</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="credit-achievment">
				Test 1
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-approval">
				Test 2
			</div>

			<div role="tabpanel" class="tab-pane" id="credit-performance">
				Test 3
			</div>

			<div role="tabpanel" class="tab-pane" id="pending-application">
				Test 4
			</div>

			<div role="tabpanel" class="tab-pane" id="total-nasabah">
				Test 5
			</div>
		</div>
	</div>


	<br>
	<hr style="border-bottom: 5px solid red;">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home Bisnis Operasional</h1>
	</div>

	<div class="row mb-4">
		<div class="input-group col-lg-3" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions3" id="exampleDataList" placeholder="Pilih Branch" autocomplete="off">
			<datalist id="datalistOptions3">
				<option value="Branch 1"></option>
				<option value="Branch 2"></option>
				<option value="Branch 3"></option>
				<option value="Branch 4"></option>
			</datalist>
		</div>
	</div>

	<div class="row">
		<!-- Achievement Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-calendar text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_achievement_rate">
								80%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total Nasabah Pembukaan Rekening -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-plus text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Nasabah Pembukaan Rekening
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_nasabah_pembukaan_rekening">
								125%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Application -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-info shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-history text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-info text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pending Application
							</div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="pending_application">
								98%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" href="#credit-achievment" role="tab" data-toggle="tab">Achievement Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-nasabah" role="tab" data-toggle="tab">Total Nasabah Pembukaan Rekening</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#pending-application" role="tab" data-toggle="tab">Pending Application</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="credit-achievment">
				Test 1
			</div>

			<div role="tabpanel" class="tab-pane" id="total-nasabah">
				Test 2
			</div>

			<div role="tabpanel" class="tab-pane" id="pending-application">
				Test 3
			</div>
		</div>
	</div>


	<br>
	<hr style="border-bottom: 5px solid red;">

	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home Bisnis Manager</h1>
	</div>

	<div class="row mb-4">
		<div class="input-group col-lg-3" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions4" id="exampleDataList" placeholder="Pilih Region" autocomplete="off">
			<datalist id="datalistOptions4">
				<option value="Region 1"></option>
				<option value="Region 2"></option>
				<option value="Region 3"></option>
				<option value="Region 4"></option>
			</datalist>
		</div>
	</div>

	<div class="row">
		<!-- Sales Achievement Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-calendar text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Sales Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="credit_achievement_rate">
								80%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Total Nasabah Pembukaan Rekening -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-plus text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Nasabah Pembukaan Rekening
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_nasabah_pembukaan_rekening">
								125%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Pending Application -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-info shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-history text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-info text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pending Application
							</div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="pending_application">
								98%
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Churn Rate -->
		<div class="col-lg-2-cus col-md-6 mb-4">
			<div class="card border-left-success shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-dollar-sign text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Churn Rate
							</div>
							<div>
								<span style="font-size: .8em">Rp</span>
								<span class="h5 mb-0 font-weight-bold text-gray-800" id="churn_rate">15.000.000.000</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link" href="#credit-achievment" role="tab" data-toggle="tab">Achievement Rate</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#total-nasabah" role="tab" data-toggle="tab">Total Nasabah Pembukaan Rekening</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#pending-application" role="tab" data-toggle="tab">Pending Application</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#churn" role="tab" data-toggle="tab">Churn Rate</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane" id="credit-achievment">
				Test 1
			</div>

			<div role="tabpanel" class="tab-pane" id="total-nasabah">
				Test 2
			</div>

			<div role="tabpanel" class="tab-pane" id="pending-application">
				Test 3
			</div>

			<div role="tabpanel" class="tab-pane" id="churn">
				Test 4
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("home").classList.add("active");
		document.getElementById("icon_home").style.color = "#F02632";
		document.getElementById("name_home").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>