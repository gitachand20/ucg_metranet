<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-7 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Customer Profiling Analysis - Dashboard CPA</h1>
		</div>

		<div class="col-lg-3 col-md-6 mb-4" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option value="Op1"></option>
				<option value="Op2"></option>
				<option value="Ap1"></option>
				<option value="Ap2"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_cif">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
		</div>
	</div>

	<div class="row mb-4" style="margin-top: 10px;">
		<div class="col-lg-7 col-xs-12"></div>
		<div class="col-lg-5 col-xs-12" >
			<div class="row justify-content-center">
				<div class="col-lg-4 col-sm-4 col-xs-12">
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

				<div class="col-lg-4 col-sm-4 col-xs-12">
					<select class="form-control">
						<option value="">Tahun</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
					</select>
				</div>

				<div class="col-lg-4 col-sm-4 col-xs-12">
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

	<div class="row">
		<!-- Total Profit Berdasarkan Sumber Profit -->
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000;">
						Total Profit Berdasarkan Sumber Profit
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah profit dalam rupiah yang didapatkan Bank berdasarkan jenis sumber Profit dalam periode waktu yang telah ditentukan di atas.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/297cb238-2cba-4056-80bb-664ec767d216" width="100%" height="350"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div id="demo" class="carousel slide" data-ride="carousel">
				<!-- The slideshow -->
				<div class="carousel-inner">

					<!-- Nasabah Berdasarkan Profile Customer -->
					<div class="carousel-item active">
						<div class="">
							<span style="font-weight: bold; color: #fff; font-size: 1.1rem; padding-bottom: 5px;">
								Nasabah Berdasarkan Profile Customer
							</span>
							<div class="tooltip1">
								<i class="fas fa-info-circle" style="color: #fff"></i>
								<span class="tooltiptext">
									Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Profile dalam periode waktu yang telah ditentukan.
								</span>
							</div>
						</div>
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/598ed3bd-35fa-4146-91ef-b02ba2e454b3" width="100%" height="350"></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1">More Detail</a>
						</center>
					</div>

					<!-- Nasabah Berdasarkan Transaksi Customer MTD -->
					<div class="carousel-item">
						<span style="font-weight: bold; color: #fff; font-size: 1.1rem; padding-bottom: 5px;">
							Nasabah Berdasarkan Transaksi Customer MTD
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #fff"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Transactions dalam periode waktu yang telah ditentukan.
							</span>
						</div>
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/24cae01c-3526-46de-8a3a-3cb4dbbc7c56" width="100%" height="350"></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2">More Detail</a>
						</center>
					</div>

					<!-- Nasabah Berdasarkan Customers Digital Maturity -->
					<div class="carousel-item">
						<span style="font-weight: bold; color: #fff; font-size: 1.1rem; padding-bottom: 5px;">
							Nasabah Berdasarkan Customers Digital Maturity
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #fff"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Digital Maturity dalam periode waktu yang ditentukan di atas. 
							</span>
						</div>
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb0d6a14-2524-41d8-94a8-3c36f24a4607" width="100%" height="350"></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3">More Detail</a>
						</center>
					</div>

					<!-- Nasabah Berdasarkan Profit Bank -->
					<div class="carousel-item">
						<span style="font-weight: bold; color: #fff; font-size: 1.1rem; padding-bottom: 5px;">
							Nasabah Berdasarkan Profit Bank
						</span>
						<div class="tooltip1">
							<i class="fas fa-info-circle" style="color: #fff"></i>
							<span class="tooltiptext">
								Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Bank Profit dalam periode waktu yang telah ditentukan di atas.
							</span>
						</div>
						<center>
							<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/42017294-2dba-4c9e-a4cb-7f0f1dfbd38d" width="100%" height="350"></iframe>
							<br>
							<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie4">More Detail</a>
						</center>
					</div>
				</div>

				<!-- Left and right controls -->
				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>

			</div>
		</div>
	</div>

	<div class="row"> 
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000;">
						Ringkasan Jumlah Total Transaksi Berdasarkan Debit dan Kredit
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah total debit dan krebit dalam bulan yang di tentukan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/755d8c87-50f6-49fe-8ef5-49f9aa146159" width="100%" height="400"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000;">
						Ringkasan Frekuensi Transaksi Berdasarkan Debit dan Kredit
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah frekuensi debit dan krebit dalam bulan yang di tentukan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/e92c93f4-53dc-4cd1-8eed-636609dcaa6f" width="100%" height="400"></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row"> 
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000;">
						Nasabah berdasarkan Current Value
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Current Value dalam periode waktu yang telah ditentukan.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/eb3b1679-90ff-4861-aafd-cc9ae2fb19b3" width="100%" height="400"></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<div class="form-group1 row">
						<div class="col-8">
							<span style="font-weight: bold; color: #000;">
								Nasabah berdasarkan Future Value
							</span>
							<div class="tooltip1">
								<i class="fas fa-info-circle" style="color: #000"></i>
								<span class="tooltiptext">
									Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Future Value dalam periode waktu yang telah ditentukan.
								</span>
							</div>
						</div>
						<div class="col-4">
							<a class="btn1 btn-danger" href="#" data-toggle="modal" data-target="#future_value" style="float: right;">More Detail</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/210a7ab4-ec90-46cb-aca6-39c984f3b643" width="100%" height="400"></iframe>
				</div>
			</div>
		</div>
	</div>



	<!-- MODAL -->
	<!-- Modal Nasabah Berdasarkan Profile Customer -->
	<div class="modal fade bd-example-modal-lg" id="pie1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Profile Customer</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/598ed3bd-35fa-4146-91ef-b02ba2e454b3" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Profile dalam periode waktu yang telah ditentukan.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Financially Dependent : Umur customer kurang dari 18 tahun</li>
						<li>Young Professional : Umur customer antara 18 - 30 tahun</li>
						<li>Married Professional : Umur customer antara 30 - 45 tahun</li>
						<li>Empty Nesters : Umur customer antara 45 - 60 tahun</li>
						<li>Retired : Umur customer di atas 60 tahun</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Nasabah Berdasarkan Transaksi Customer MTD -->
	<div class="modal fade bd-example-modal-lg" id="pie2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Transaksi Customer MTD</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/24cae01c-3526-46de-8a3a-3cb4dbbc7c56" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Transactions dalam periode waktu yang telah ditentukan.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Non Users : Tidak ada transaksi selama periode sekarang maupun sebelumnya.</li>
						<li>Growers : Ada kenaikan transaksi paling tidak sebesar x% pada periode sekarang dibanding periode sebelumnya.</li>
						<li>Droppers : Ada penurunan transaksi paling tidak sebesar x% pada periode sekarang dibanding periode sebelumnya.</li>
						<li>Flat Users : Ada kenaikan atau penurunan transaksi tetapi tidak lebih dari x% pada periode sekarang dibanding periode sebelumnya.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Nasabah Berdasarkan Customers Digital Maturity -->
	<div class="modal fade bd-example-modal-lg" id="pie3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Customers Digital Maturity</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/bb0d6a14-2524-41d8-94a8-3c36f24a4607" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Digital Maturity dalam periode waktu yang ditentukan di atas.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Money Hawks : Memanfaatkan semua channel digital dalam kesehariannya.</li>
						<li>Digital Drifters : Memanfaatkan hampir semua channel digital kecuali dalam pembayaran tagihan.</li>
						<li>Online Loyalist : Memanfaatkan hampir semua channel digital kecuali transaksi melalui mobile banking.</li>
						<li>Traditionalist : Hanya memanfaatkan 1 channel digital saja.</li>
						<li>Offline Loyalist : Belum memanfaatkan channel digital sama sekali.</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Nasabah Berdasarkan Profit Bank -->
	<div class="modal fade bd-example-modal-lg" id="pie4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Profit Bank</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
					<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/42017294-2dba-4c9e-a4cb-7f0f1dfbd38d" width="100%" height="350"></iframe>
					<hr>
					Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Bank Profit dalam periode waktu yang telah ditentukan di atas.
					<hr>
					<b>Deskripsi</b>
					<ul style="list-style-position: outside;">
						<li>Platinum Customers : 25% Nasabah teratas pertama yang paling banyak berkontribusi dalam faktor resensi, transaksi dan moneter (Tidak Bisa Kehilangan).</li>
						<li>Gold Customers : 25% Nasabah teratas kedua yang berkontribusi dalam faktor resensi, transaksi dan moneter (Loyal/Potensial).</li>
						<li>Iron Customers : 25% Nasabah teratas ketiga yang berkontribusi dalam faktor resensi, transaksi dan moneter (Menjanjikan).</li>
						<li>Lead Customers : 25% Nasabah teratas keempat yang berkontribusi dalam faktor resensi, transaksi dan moneter (Butuh Perhatian).</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<!-- Nasabah Berdasarkan Future Value -->
	<div class="modal fade" id="future_value" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #FFA07A;">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Future Value</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">
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
	 	document.getElementById("menu_cpa").classList.add("active");
		document.getElementById("icon_cpa").style.color = "#F02632";
		document.getElementById("name_cpa").style.color = "#F02632";	

		// function fiturAtas1() {
		// 	if ($("#search_by_branch").hasClass("d-none")) {
		// 		$("#search_by_branch").hide().removeClass("d-none");
  //       		$("#search_by_branch").show();
  //       		$("#search_by_cif").hide().removeClass("d-none");
  //       		$("#search_by_cif").show();
		// 	}
		// }

		// function fiturAtas2() {
		// 	document.getElementById("search_by_branch").classList.add("d-none");
		// 	document.getElementById("search_by_cif").classList.add("d-none");
		// }
	</script>

<?php include "footer.php"; ?>