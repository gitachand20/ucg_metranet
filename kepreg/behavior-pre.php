<?php include "header.php"; ?>

	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Behavior Scoring - Dashboard Prediction</h1>
		</div>
	</div>

	<div class="row col-lg-12 mb-3" style="padding-right: 0;">
		<div class="col-lg-12" style="padding-right: 0;">
			<div class="col-lg-2 col-md-6 mb-2" id="search_by_loan_nik" style="float: left;">
				<input class="form-control bg-light border-cus small filter-behavior-prediction" id="cif_behavior_seg"  list="cifList" name="cif_behavior_seg" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
				<datalist id="cifList">
				</datalist>
			</div>

			<div class="input-group col-1 mb-2" id="reset_button" style="float: right;">
				<button class="btn btn-custom" type="button" style="width: 100%;" onclick="resetPencarianKRBehavior()">
					<span class="text">Reset</span>
				</button>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_month" style="float: right;">
				<select class="form-control bg-light small" name="filter_month" id="filter_month" disabled="disabled">
					<option value="" disabled="disabled" selected="selected">Bulan</option>
					<option value="01">Januari</option>
					<option value="02">Februari</option>
					<option value="03">Maret</option>
					<option value="04">April</option>
					<option value="05">Mei</option>
					<option value="06">Juni</option>
					<option value="07">Juli</option>
					<option value="08">Agustus</option>
					<option value="09">September</option>
					<option value="10">Oktober</option>
					<option value="11">November</option>
					<option value="12">Desember</option>
				</select>
			</div>

			<div class="col-lg-1 col-md-6 mb-2" id="search_by_year" style="float: right;">
				<select class="form-control bg-light border-cus small" style="padding-left: 0.25em;" name="year" id="year" onchange="pilihTahun()">
					<option value="" disabled="disabled" selected="selected">Tahun</option>
					<option value="2020">2020</option>
					<option value="2019">2019</option>
					<option value="2018">2018</option>
				</select>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_officer" style="float: right;">
				<input class="form-control bg-light border-cus small" list="officerList" id="search_officer" placeholder="Pilih Officer" autocomplete="off">
				<datalist id="officerList">
					<option data-id="1" value="Officer 1"></option>
					<option data-id="2" value="Officer 2"></option>
					<option data-id="3" value="Officer 3"></option>
					<option data-id="4" value="Officer 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2 d-none" id="search_by_unit" style="float: right;">
				<input class="form-control bg-light border-cus small" list="unitList" id="unit" placeholder="Pilih Unit" onchange="pilihUnit()" autocomplete="off">
				<datalist id="unitList">
					<option value="UNIT 1"></option>
					<option value="UNIT 2"></option>
					<option value="UNIT 3"></option>
					<option value="UNIT 4"></option>
				</datalist>
			</div>

			<div class="col-lg-2 col-md-6 mb-2" id="search_by_cabang" style="float: right;">
				<input class="form-control bg-light border-cus small" onchange="pilihCabang()" list="cabangList" id="cabang" placeholder="Pilih Cabang" autocomplete="off">
				<datalist id="cabangList">
					<option value="CABANG 1"></option>
					<option value="CABANG 2"></option>
					<option value="CABANG 3"></option>
					<option value="CABANG 4"></option>
				</datalist>
			</div>
		</div>
	</div>

	<div class="row" id="recommendation">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
						Rekomendasi
					</span>
				</div>
				<div class="card-body row">
					<div class="col-lg-6">
						<table width="100%" style="border: 1px solid #E0E0E0;">
							<tr>
								<td width="70%" style="padding: 1rem 0.75rem 0 0.75rem; color: #000; font-size: 13pt; font-weight: bold;">Kenaikan Plafon</td>
								<td width="10%"></td>
								<td style="padding: 1rem 0.75rem 0 0.75rem; text-align: right;">
									<i class="fas fa-caret-up" style="color: #03BD5B; font-size: 13pt;"> +<span id="topup">150%</span></i>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<hr width="97%" style="border-bottom: 1px solid #E0E0E0;">
								</td>
							</tr>
							<tr>
								<td style="padding: 0 0.75rem; color: #000;">Plafon kredit lama</td>
								<td style="padding: 0 0.75rem; color: #000;">Rp</td>
								<td id="kredit_lama" style="padding: 0 0.75rem; color: #000; text-align: right;">1,000,000,000</td>
							</tr>
							<tr>
								<td style="padding: 0.2rem 0.75rem 0.75rem 0.75rem; color: #000;">Maksimal kredit baru</td>
								<td style="padding: 0.2rem 0.75rem 0.75rem 0.75rem; color: #000;">Rp</td>
								<td id="kredit_baru" style="padding: 0.2rem 0.75rem 0.75rem 0.75rem; color: #000; text-align: right;">1,500,000,000</td>
							</tr>
						</table>
					</div>

					<div class="col-lg-6">
						<table width="100%" style="border: 1px solid #E0E0E0;">
							<tr>
								<td style="padding: 1rem 0.75rem 0 0.75rem; color: #000; font-size: 13pt; font-weight: bold;">Produk</td>
							</tr>
							<tr>
								<td>
									<hr width="97%" style="border-bottom: 1px solid #E0E0E0;">
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 1rem 0.75rem 1.5rem 0.75rem;">
									<span style="background-color: #EEF4FC; padding: 0.75rem; border-radius: 10px; margin-right: 20px;">
										<sup style="color: #ff0000; margin-right: 5px;">1</sup>
										<span id="recommendation_1" style="color: #000;">Kredit Investasi</span>
									</span>

									<span style="background-color: #EEF4FC; padding: 0.75rem; border-radius: 10px; margin-right: 20px;">
										<sup style="color: #ff0000; margin-right: 5px;">2</sup>
										<span id="recommendation_2" style="color: #000;">Kredit Tanpa Agunan</span>
									</span>

									<span style="background-color: #EEF4FC; padding: 0.75rem; border-radius: 10px;">
										<sup style="color: #ff0000; margin-right: 5px;">3</sup>
										<span id="recommendation_3" style="color: #000;">Kredit Multiguna</span>
									</span>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="nrecommendation">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.2rem;">
						Rekomendasi
					</span>
				</div>
				<div class="card-body row">
					<div class="col-lg-6">
						<table width="100%" style="border: 1px solid #E0E0E0;">
							<tr>
								<td width="70%" style="padding: 1rem 0.75rem 0 0.75rem; color: #000; font-size: 13pt; font-weight: bold;">Kenaikan Plafon</td>
								<td width="10%"></td>
								<td style="padding: 1rem 0.75rem 0 0.75rem; text-align: right;">
									<span style="color: #000; font-size: 13pt;">0%</span>
								</td>
							</tr>
							<tr>
								<td colspan="3">
									<hr width="97%" style="border-bottom: 1px solid #E0E0E0;">
								</td>
							</tr>
							<tr>
								<td colspan="3" align="center" style="padding: 1rem 0.75rem 1.5rem 0.75rem;">
									<span style="color: #ff0000; font-weight: bold;">Tidak ditemukan</span>
								</td>
							</tr>
						</table>
					</div>

					<div class="col-lg-6">
						<table width="100%" style="border: 1px solid #E0E0E0;">
							<tr>
								<td style="padding: 1rem 0.75rem 0 0.75rem; color: #000; font-size: 13pt; font-weight: bold;">Produk</td>
							</tr>
							<tr>
								<td>
									<hr width="97%" style="border-bottom: 1px solid #E0E0E0;">
								</td>
							</tr>
							<tr>
								<td align="center" style="padding: 1rem 0.75rem 1.5rem 0.75rem;">
									<span style="color: #ff0000; font-weight: bold;">Tidak ditemukan</span>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Prediksi Performansi Pinjaman
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) yang diprediksikan sebagai Baik (Good) atau Buruk (Bad).
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/b5ff553c-b54c-4032-8472-08acbc354e9d" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>

		<div class="col-lg-6 col-md-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Performansi Pinjaman Berdasarkan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman (loan) berdasarkan tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/eb6d4cd3-b877-4264-a53d-557e24785588" frameborder="0" width="100%" height="350" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Jumlah Performansi Pinjaman Berdasarkan Prediksi dan Tingkat Risiko
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Grafik ini menampilkan jumlah performansi pinjaman yang diprediksi sebagai Baik (Good) atau Buruk (Bad) dilihat dari tingkat risikonya.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/9e841b8a-b2fd-4190-b03a-02f01b65c42c" frameborder="0" width="100%" height="400" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rekomendasi
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Menampilkan rekomendasi kenaikan plafon dan perubahan produk.
						</span>
					</div>
				</div>
				<div class="card-body">
					<table class="table table-striped table-bordered" id="tabel-data-rekomendasi" cellspacing="0">
						<thead>
							<tr>
								<th class="align-middle text-center" rowspan="2">CIF</th>
								<th class="align-middle text-center" colspan="3">Top Up</th>
								<th class="align-middle text-center" colspan="3">Cross Selling</th>
								<th class="align-middle text-center" rowspan="2">Jangka Waktu</th>
							</tr>
							<tr>
								<th class="align-middle text-center">Persentase</th>
								<th class="align-middle text-center">Plafon Kredit Lama</th>
								<th class="align-middle text-center">Max Kredit Baru</th>
								<th class="align-middle text-center">Rekomendasi 1</th>
								<th class="align-middle text-center">Rekomendasi 2</th>
								<th class="align-middle text-center">Rekomendasi 3</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>VAR67362</td>
								<td>150</td>
								<td>1,000,000,000</td>
								<td>1,500,000,000</td>
								<td>Kredit Investasi</td>
								<td>Kredit Tanpa Agunan</td>
								<td>Kredit Multiguna</td>
								<td>Jan, 2020</td>
							</tr>
							<tr>
								<td>VAR67362</td>
								<td>150</td>
								<td>1,000,000,000</td>
								<td>1,500,000,000</td>
								<td>Kredit Rekening Koran</td>
								<td>Kredit Tanpa Agunan</td>
								<td>Kredit Multiguna</td>
								<td>Feb, 2020</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Rekomendasi
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Menampilkan rekomendasi kenaikan plafon dan perubahan produk.
						</span>
					</div>
				</div>
				<div class="card-body row">
					<div class="col-lg-6">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/951bd5d3-c7db-457f-97bc-a3121ef645d6" frameborder="0" width="100%" height="400" allowtransparency></iframe>
					</div>
					<div class="col-lg-6">
						<iframe class="d-block w-100" src="http://172.17.62.87:3000/public/question/951bd5d3-c7db-457f-97bc-a3121ef645d6" frameborder="0" width="100%" height="400" allowtransparency></iframe>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="card">
				<div class="card-header">
					<span style="font-weight: bold; color: #000; font-size: 1.1rem;">
						Data Nasabah
					</span>
					<div class="tooltip1">
						<i class="fas fa-info-circle" style="color: #000"></i>
						<span class="tooltiptext">
							Menampilkan data nasabah secara keseluruhan sesuai dengan data filter yang di input.
						</span>
					</div>
				</div>
				<div class="card-body">
					<iframe class="d-block w-100" src="http://172.17.62.84:3000/public/question/4ab47fa2-18a8-4cfd-878d-011ee4c49c49" frameborder="0" width="100%" height="600" allowtransparency></iframe>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_bs").classList.add("active");
		document.getElementById("icon_bs").style.color = "#F02632";
		document.getElementById("name_bs").style.color = "#F02632";
		document.getElementById("icon_bs_pre").style.color = "#F02632";
		document.getElementById("name_bs_pre").style.color = "#F02632";

		function cekCif() {
			if (document.getElementById("cif_behavior_seg").value == "12345") {
				$("#recommendation").show().removeClass("d-none");
				$("#nrecommendation").hide();
			} else if (document.getElementById("cif_behavior_seg").value == "qwert") {
				$("#nrecommendation").show().removeClass("d-none");
				$("#recommendation").hide();
			} else {
				$("#recommendation").hide();
				$("#nrecommendation").hide();
			}
		}
	</script>

<?php include "footer.php"; ?>