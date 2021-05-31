<?php include "header.php"; ?>

	<!-- Page Heading -->
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home</h1>
	</div> -->

	<div class="row">
		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-danger shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-plus text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-danger text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pengguna yang belum disetujui
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="need_to_approved">
								20
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-success shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-check text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pengguna Aktif
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="active_user">
								100
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-secondary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-user-times text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-secondary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Pengguna Tidak Aktif
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="non_active_user">
								12
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-map-marked-alt text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Regional
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_akun_regional">
								2
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fas fa-code-branch text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-info text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Cabang
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_akun_cabang">
								4
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-2 col-md-6 mb-4">
			<div class="card border-left-warning shadow h-100">
				<div class="card-body-cus">
					<div class="card-body-icon">
						<i class="fa fa-bank text-gray-200"></i>
					</div>
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-warning text-uppercase mb-1" style="font-size: 11pt; height: 3em;">
								Total Unit
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800" id="total_akun_unit">
								8
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row col-lg-12 mb-3" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-3 col-md-6 mb-2" id="search_by_unit" style="float: right;">
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
		<div class="col-lg-12 col-md-12 mb-4">
			<!-- <div class="card"> -->
				<!-- <div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Pengguna Berdasarkan Jenis Pengguna
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							
						</span>
					</div>
				</div> -->
				<!-- <div class="card-body"> -->
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/71487f99-848c-4788-b22a-0c717bb9269d" frameborder="0" width="100%" height="500" allowtransparency></iframe>
				<!-- </div>
			</div> -->
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
						Data Regional
					</span>
					<!-- <div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							
						</span>
					</div> -->
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="tabel-regional" width="100%" cellspacing="0">
							<thead style="text-align: center;">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Total Pengguna</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Bandung</td>
									<td>27</td>
								</tr>
								<tr>
									<td>2</td>
									<td>Semarang</td>
									<td>27</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
						Data Cabang
					</span>
					<!-- <div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							
						</span>
					</div> -->
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped table-bordered" id="tabel-cabang" width="100%" cellspacing="0">
							<thead style="text-align: center;">
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Total Pengguna</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 col-md-12 mb-4">
			<!-- <div class="card"> -->
				<!-- <div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Persebaran Akun Unit
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							
						</span>
					</div>
				</div> -->
				<!-- <div class="card-body"> -->
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/97c51d67-f93f-40dc-bf58-6a4980727093" frameborder="0" width="100%" height="700" allowtransparency></iframe>
				<!-- </div>
			</div> -->
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("home").classList.add("active");
		document.getElementById("icon_home").style.color = "#F02632";
		document.getElementById("name_home").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>