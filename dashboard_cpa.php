
<div class="row mb-4" style="margin-top: 10px;">
	<div class="col-lg-7" ></div>
	<div class="col-lg-5" >
		<div class="row justify-content-center">
			<div class="col-lg-4">
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

			<div class="col-lg-4">
				<select class="form-control">
					<option value="">Tahun</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
				</select>
			</div>

			<div class="col-lg-4">
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
	<!-- Total Profit Berdasarkan Sumber Profit -->
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="tooltip1">
					<span style="font-weight: bold; color: #000;">
						Total Profit Berdasarkan Sumber Profit
					</span>
					<span class="tooltiptext">
						Grafik ini menampilkan total jumlah profit dalam rupiah yang didapatkan Bank berdasarkan jenis sumber Profit dalam periode waktu yang telah ditentukan di atas.
					</span>
				</div>
			</div>
			<div class="card-body">
				<iframe src="http://172.17.62.87:3000/public/question/377caae0-c9c5-4c85-be73-e4cdfec0adbe" width="100%" height="350"></iframe>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div id="demo" class="carousel slide" data-ride="carousel">
			<!-- The slideshow -->
			<div class="carousel-inner">

				<!-- Nasabah Berdasarkan Profile Customer -->
				<div class="carousel-item active">
					<div class="tooltip1">
						<h5 style="font-weight: bold; color: #fff;">Nasabah Berdasarkan Profile Customer</h5>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Profile dalam periode waktu yang telah ditentukan.
						</span>
					</div>
					<center>
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/6c14d75f-3ca8-4f1c-ad11-91f11c99f01e" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie1">More Detail</a>
					</center>
				</div>

				<!-- Nasabah Berdasarkan Transaksi Customer MTD -->
				<div class="carousel-item">
					<div class="tooltip1">
						<h5 style="font-weight: bold; color: #fff;">Nasabah Berdasarkan Transaksi Customer MTD</h5>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Transactions dalam periode waktu yang telah ditentukan.
						</span>
					</div>
					<center>
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/0b71b381-7ba4-4af4-841a-4a24f80b7477" frameborder="0" width="100%" height="350"    allowtransparency></iframe>
						<br>
						<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie2">More Detail</a>
					</center>
				</div>

				<!-- Nasabah Berdasarkan Customers Digital Maturity -->
				<div class="carousel-item">
					<div class="tooltip1">
						<h5 style="font-weight: bold; color: #fff;">Nasabah Berdasarkan Customers Digital Maturity</h5>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Digital Maturity dalam periode waktu yang ditentukan di atas. 
						</span>
					</div>
					<center>
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/53700fd7-c379-468f-92ca-2679cc30b4a9" frameborder="0" width="100%" height="350" allowtransparency></iframe>
						<br>
						<a class="btn btn-danger" href="#" data-toggle="modal" data-target="#pie3">More Detail</a>
					</center>
				</div>

				<!-- Nasabah Berdasarkan Profit Bank -->
				<div class="carousel-item">
					<div class="tooltip1">
						<h5 style="font-weight: bold; color: #fff;">Nasabah Berdasarkan Profit Bank</h5>
						<span class="tooltiptext">
							Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Bank Profit dalam periode waktu yang telah ditentukan di atas.
						</span>
					</div>
					<center>
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/d784dd2f-ae83-4903-a81f-a6b8c27b820b" frameborder="0" width="100%" height="350" allowtransparency></iframe>
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

<div class="row mb-4"> 
	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="tooltip1">
					<span style="font-weight: bold; color: #000;">
						Ringkasan Jumlah Total Transaksi Berdasarkan Debit dan Kredit
					</span>
					<span class="tooltiptext">
						Grafik ini menampilkan jumlah total debit dan krebit dalam bulan yang di tentukan.
					</span>
				</div>
			</div>
			<div class="card-body">
				<iframe src="http://172.17.62.87:3000/public/question/e050bd43-ea16-4093-a520-dbadef933e7f" width="100%" height="400"></iframe>
			</div>
		</div>
	</div>

	<div class="col-lg-6">
		<div class="card">
			<div class="card-header">
				<div class="tooltip1">
					<span style="font-weight: bold; color: #000;">
						Ringkasan Frekuensi Transaksi Berdasarkan Debit dan Kredit
					</span>
					<span class="tooltiptext">
						Grafik ini menampilkan jumlah frekuensi debit dan krebit dalam bulan yang di tentukan.
					</span>
				</div>
			</div>
			<div class="card-body">
				<iframe src="http://172.17.62.87:3000/public/question/8703d872-e698-4404-95af-f42ef12f950c" width="100%" height="400"></iframe>
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
				<div class="tooltip1">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Profile Customer</h5>
					<span class="tooltiptext1">
						Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Profile dalam periode waktu yang telah ditentukan.
					</span>
				</div>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/6c14d75f-3ca8-4f1c-ad11-91f11c99f01e" width="100%" height="350" allowtransparency></iframe>
				<hr>
				<b>Diskripsi</b>
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
				<div class="tooltip1">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Transaksi Customer MTD</h5>
					<span class="tooltiptext1">
						Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Transactions dalam periode waktu yang telah ditentukan.
					</span>
				</div>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/0b71b381-7ba4-4af4-841a-4a24f80b7477" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				<b>Diskripsi</b>
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
				<div class="tooltip1">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Customers Digital Maturity</h5>
					<span class="tooltiptext1">
						Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Customer Digital Maturity dalam periode waktu yang ditentukan di atas.
					</span>
				</div>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/53700fd7-c379-468f-92ca-2679cc30b4a9" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				<b>Diskripsi</b>
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
				<div class="tooltip1">
					<h5 class="modal-title" id="exampleModalLabel" style="font-weight: bold; color: #000;">Nasabah Berdasarkan Profit Bank</h5>
					<span class="tooltiptext1">
						Grafik ini menampilkan total jumlah Nasabah per tipe segmentasi Bank Profit dalam periode waktu yang telah ditentukan di atas.
					</span>
				</div>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/d784dd2f-ae83-4903-a81f-a6b8c27b820b" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				<hr>
				<b>Diskripsi</b>
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
