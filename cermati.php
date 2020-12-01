<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Cermati</h1>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#prediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#segmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="prediction">
				<div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/433dc648-5f72-4096-aa1c-2e5d9dbbb9a1"></iframe>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane" id="segmentation">
				<div class="row" style="margin-top: 20px;">
					<div class="col-7" ></div>
					<div class="col-5" >
						<div class="form-group row">
							<div class="col-4">
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

				<div class="row mb-4">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Jenis Pinjaman
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan total debitur berdasarkan jenis pinjaman.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c0e3569d-a58f-4c0d-b4a3-0e76d2b70976" width="100%" height="350"></iframe>
							</div>
						</div>
					</div>

					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Gender
										</span>
										<span class="tooltiptext">
											Grafik ini  menampilkan jumlah debitur berdasarkan gender (laki-laki atau perempuan).
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb149759-b61d-4ad9-b948-ee43334c10c3" width="100%" height="350"></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Status Keluarga
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan total nasabah berdasarkan segmentasi status keluarga.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ef958fd7-fc96-4cba-92cd-c1227728a745" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							</div>
						</div>
					</div>

					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Tempat Tinggal
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan total debitur berdasarkan tempat tinggal.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie4" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/e750f48c-ed8c-4209-b45e-760e4f1706f3" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Tingkat Pendidikan
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan jumlah debitur berdasarkan segmentasi tingkat pendidikan.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie5" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/14a95b9f-22f3-4346-8ee8-16d4506b7d6b" frameborder="0" width="100%" height="350"    allowtransparency></iframe>
							</div>
						</div>
					</div>

					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="form-group1">
									<div class="tooltip1 col-8">
										<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
											Debitur Berdasarkan Kategori Pendapatan
										</span>
										<span class="tooltiptext">
											Grafik ini menampilkan total debitur berdasarkan kategori pendapatan.
										</span>
									</div>
									<div class="col-4" style="float: right;"> 
										<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie6" style="float: right;">More Detail</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/7d6ff7c0-ccb6-4f6e-93c1-e40159bdeb23" frameborder="0" width="100%" height="350"    allowtransparency></iframe>
							</div>
						</div>
					</div>
				</div>

				<div class="row mb-4">
					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Credit Approval Berdasarkan Kategori Pendapatan
									</span>
									<span class="tooltiptext">
										Menampilkan grafik jumlah dan rata-rata credit approval sesuai dengan kategori pendapatan.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2c89929e-b48c-4850-945e-27b8d7ee50ab" frameborder="0" width="100%" height="350" allowtransparency></iframe>
							</div>
						</div>
					</div>

					<div class="col-6">
						<div class="card">
							<div class="card-header">
								<div class="tooltip1">
									<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
										Debitur Berdasarkan Jumlah Angsuran Pembayaran Pinjaman
									</span>
									<span class="tooltiptext">
										Grafik ini menampilkan total debitur berdasarkan jumlah angsuran pembayaran pinjaman.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/49e2aab8-78e9-4413-9b9d-737f1c706c77" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
										Debitur Berdasarkan Jumlah Pinjaman Yang Disetujui
									</span>
									<span class="tooltiptext">
										Grafik ini menampilkan total debitur berdasarkan jumlah pinjaman yang disetujui.
									</span>
								</div>
							</div>
							<div class="card-body">
								<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/5e42226c-c6d8-4cca-a049-32a52cb5aeb4" frameborder="0" width="100%" height="600" allowtransparency></iframe>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/72ca1cf1-ff45-4364-a495-90573c9eb34a"></iframe>
				</div> -->
			</div>
		</div>
	</div>

	<!-- MODAL -->
	<!-- Debitur Berdasarkan Jenis Pinjaman -->
	<div class="modal fade bd-example-modal-lg" id="pie1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Jenis Pinjaman</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan total debitur berdasarkan jenis pinjaman.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/c0e3569d-a58f-4c0d-b4a3-0e76d2b70976" frameborder="0" width="100%" height="350" allowtransparenc></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Cash Loans : Pinjaman Tunai.</li>
						<li>Revolving Loans : Pinjaman Bergulir.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Gender -->
	<div class="modal fade bd-example-modal-lg" id="pie2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Gender</h5>
						<span class="tooltiptext1">
							Grafik ini  menampilkan jumlah debitur berdasarkan gender (laki-laki atau perempuan).
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb149759-b61d-4ad9-b948-ee43334c10c3" frameborder="0" width="100%" height="350" allowtransparenc></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>F : Perempuan.</li>
						<li>M : Laki-laki.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Status Keluarga -->
	<div class="modal fade bd-example-modal-lg" id="pie3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Status Keluarga</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan total nasabah berdasarkan segmentasi status keluarga.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ef958fd7-fc96-4cba-92cd-c1227728a745" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Civil marriage : Pernikahan sipil.</li>
						<li>Married : Menikah.</li>
						<li>Separated : Bercerai.</li>
						<li>Single / not married : Lajang.</li>
						<li>Widow : Janda/Duda.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Status Keluarga -->
	<div class="modal fade bd-example-modal-lg" id="pie3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Status Keluarga</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan total nasabah berdasarkan segmentasi status keluarga.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/ef958fd7-fc96-4cba-92cd-c1227728a745" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Civil marriage : Pernikahan sipil.</li>
						<li>Married : Menikah.</li>
						<li>Separated : Bercerai.</li>
						<li>Single / not married : Lajang.</li>
						<li>Widow : Janda/Duda.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Tempat Tinggal -->
	<div class="modal fade bd-example-modal-lg" id="pie4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Tempat Tinggal</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan total debitur berdasarkan tempat tinggal.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/e750f48c-ed8c-4209-b45e-760e4f1706f3" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>House / apartment : Rumah / Apartemen.</li>
						<li>Municipal apartment : Apartemen kota.</li>
						<li>Office apartment : Apartemen kantor.</li>
						<li>Rented apartment : Apartemen sewag.</li>
						<li>With parents : Tinggal bersama orang tua.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Tingkat Pendidikan -->
	<div class="modal fade bd-example-modal-lg" id="pie5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Tingkat Pendidikan</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan jumlah debitur berdasarkan segmentasi tingkat pendidikan.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/14a95b9f-22f3-4346-8ee8-16d4506b7d6b" frameborder="0" width="100%" height="350"    allowtransparency></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Higher Education : .</li>
						<li>Incomplete higher : .</li>
						<li>Lower secondary : .</li>
						<li>Secondary : .</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Debitur Berdasarkan Tempat Tinggal -->
	<div class="modal fade bd-example-modal-lg" id="pie6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<div class="tooltip1">
						<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Debitur Berdasarkan Kategori Pendapatan</h5>
						<span class="tooltiptext1">
							Grafik ini menampilkan total debitur berdasarkan kategori pendapatan.
						</span>
					</div>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/2c89929e-b48c-4850-945e-27b8d7ee50ab" frameborder="0" width="100%" height="350" allowtransparency></iframe>
					<hr>
					<b>Diskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Commercial associate : .</li>
						<li>Pensioner : Pensiunan .</li>
						<li>State servant : .</li>
						<li>Working : Bekerja.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>