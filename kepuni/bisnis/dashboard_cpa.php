
<div class="row mb-4" style="margin-top: 10px;">
	<div class="col-lg-5 col-xs-12">
		<div class="col-lg-6 col-md-6 col-xs-12 mb-2" id="search_by_officer">
			<span style="color: #000;">Officer</span>
			<input class="form-control bg-light border-cus small" style="margin-top: 5px;" list="officerList" id="search_officer" placeholder="Pilih Officer" autocomplete="off">
			<datalist id="officerList">
				<option data-id="1" value="Officer 1"></option>
				<option data-id="2" value="Officer 2"></option>
				<option data-id="3" value="Officer 3"></option>
				<option data-id="4" value="Officer 4"></option>
			</datalist>
		</div>
	</div>

	<div class="col-lg-1"></div>

	<div class="row col-lg-5 col-xs-12">
		<div class="col-lg-4 col-sm-4 col-xs-12">
			<span style="color: #000;">Jangka Waktu</span>
			<select class="form-control select bg-light border-cus small" style="margin-top: 5px;" name="filter_month" id="filter_month">
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

		<div class="col-lg-4 col-sm-4 col-xs-12">
			<br>
			<select class="form-control select bg-light border-cus small" style="margin-top: 5px;" name="year" id="year">
				<option value="" disabled="disabled" selected="selected">Tahun</option>
				<option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
			</select>
		</div>

		<div class="col-lg-4 col-sm-4 col-xs-12">
			<br>
			<select class="form-control select bg-light border-cus small" style="margin-top: 5px;" name="filter_period" id="filter_period">
				<option value="" disabled="disabled" selected="selected">Periode</option>
				<option value="3">3-Months</option>
				<option value="6">6-Months</option>
				<option value="9">9-Months</option>
				<option value="12">12-Months</option>
			</select>
		</div>
	</div>

	<div class="col-lg-1 mb-2" id="reset_button">
		<br>
		<button class="btn btn-custom" type="button" style="width: 100%; margin-top: 5px;" onclick="resetPencarianCPAKUC()">
			<span class="text">Reset</span>
		</button>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/c24b5484-230e-4639-be61-2ddbddec066d" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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
						<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/167a6c7c-46ef-4272-bf7b-3a19e352580a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie1">Detail</a>
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
						<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/19463829-1f36-4f7e-810e-3d0ea978afe9" frameborder="0" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie2">Detail</a>
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
						<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/037a18b8-f190-4379-b8c7-80366ee6d689" frameborder="0" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie3">Detail</a>
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
						<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0f6b1499-855e-43be-806c-e944cede28f1" frameborder="0" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-warning font-weight-bold" href="#" data-toggle="modal" data-target="#pie4">Detail</a>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/6c3b3225-af97-413b-ae17-c3af0e267fa8" frameborder="0" width="100%" height="400" allowtransparency></iframe>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/4c0284ce-65a4-4f99-93dc-fd69ba083d6b" frameborder="0" width="100%" height="400" allowtransparency></iframe>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/4ffd53cc-69d3-4f34-a3cf-9a4717eaaf02" frameborder="0" width="100%" height="400" allowtransparency></iframe>
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
						<a class="btn1 btn-outline-warning font-weight-bold" href="#" data-toggle="modal" data-target="#future_value" style="float: right;">Detail</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/8d464969-6094-4f7d-b4c6-bf804b866ee4" frameborder="0" width="100%" height="400" allowtransparency></iframe>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/167a6c7c-46ef-4272-bf7b-3a19e352580a" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Profile dalam periode waktu yang telah ditentukan.
				<hr>
				<b>Deskripsi</b>
				<ul style="list-style-position: outside;">
					<li>Empty Nesters : Umur customer antara 45 - 60 tahun</li>
					<li>Financially Dependent : Umur customer kurang dari 18 tahun</li>
					<li>Married Professional : Umur customer antara 30 - 45 tahun</li>
					<li>Retired : Umur customer di atas 60 tahun</li>
					<li>Young Professional : Umur customer antara 18 - 30 tahun</li>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/19463829-1f36-4f7e-810e-3d0ea978afe9" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Transactions dalam periode waktu yang telah ditentukan.
				<hr>
				<b>Deskripsi</b>
				<ul style="list-style-position: outside;">
					<li>Droppers : Ada penurunan transaksi paling tidak sebesar 20% pada periode sekarang dibanding periode sebelumnya.</li>
					<li>Flat Users : Ada kenaikan atau penurunan transaksi tetapi tidak lebih dari 20% pada periode sekarang dibanding periode sebelumnya.</li>
					<li>Growers : Ada kenaikan transaksi paling tidak sebesar 20% pada periode sekarang dibanding periode sebelumnya.</li>
					<li>Non Users : Tidak ada transaksi selama periode sekarang maupun sebelumnya.</li>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/037a18b8-f190-4379-b8c7-80366ee6d689" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Digital Maturity dalam periode waktu yang ditentukan di atas.
				<hr>
				<b>Deskripsi</b>
				<ul style="list-style-position: outside;">
					<li>Digital Drifters : Memanfaatkan hampir semua channel digital kecuali dalam pembayaran tagihan.</li>
					<li>Money Hawks : Memanfaatkan semua channel digital dalam kesehariannya.</li>
					<li>Offline Loyalist : Belum memanfaatkan channel digital sama sekali.</li>
					<li>Online Loyalist : Memanfaatkan hampir semua channel digital kecuali transaksi melalui mobile banking.</li>
					<li>Traditionalist : Hanya memanfaatkan 1 channel digital saja.</li>
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
				<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/0f6b1499-855e-43be-806c-e944cede28f1" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Bank Profit dalam periode waktu yang telah ditentukan di atas.
				<hr>
				<b>Deskripsi</b>
				<ul style="list-style-position: outside;">
					<li>Gold : 25% Nasabah teratas kedua yang berkontribusi dalam faktor resensi, transaksi dan moneter (Loyal/Potensial).</li>
					<li>Iron : 25% Nasabah teratas ketiga yang berkontribusi dalam faktor resensi, transaksi dan moneter (Menjanjikan).</li>
					<li>Lead : 25% Nasabah teratas keempat yang berkontribusi dalam faktor resensi, transaksi dan moneter (Butuh Perhatian).</li>
					<li>Platinum : 25% Nasabah teratas pertama yang paling banyak berkontribusi dalam faktor resensi, transaksi dan moneter (Tidak Bisa Kehilangan).</li>
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
						<td valign="top"><i class="fa fa-star fa-sm" style="color: #ff0000;"></i></td>
						<td>Low : Kelompok nasabah dengan future value berada pada posisi > 70 %</td>
					</tr>
					<tr>
						<td valign="top"><i class="fa fa-star fa-sm" style="color: #F5DA81;"></i></td>
						<td>Medium : Kelompok nasabah dengan future value berada pada posisi 31% hingga 70 %</td>
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