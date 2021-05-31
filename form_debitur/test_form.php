<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg"></i>
			</a>
			Form Input Debitur Sales Officer
		</h1>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="row mb-4">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<table width="100%">
						<tr>
							<td width="40%"></td>

							<td width="23%" style="padding: 0px 10px;">
								<a href="#" id="btn-observasi" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_observasi" style="width: 100%; display: block;">
									<span class="icon1 text-white">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text font-weight-bold">Tambah Observasi GPM</span>
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<form name="form_input_debitur" id="form_input_debitur" class="needs-validation" method="POST" action="hasil.php" enctype="multipart/form-data" novalidate>

				<!-- Form Sumber Penghasilan -->
				<fieldset id="form-2" style="display: block; height: 500px; overflow: auto; overflow-x: hidden;">

					<!-- Observasi GPM -->
					<fieldset id="observasi-gpm" style="display: block;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-12 labelku">Observasi GPM</label>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<div class="col-lg-12 mb-3">
									<table class="table table-gpm" width="100%">
										<thead>
											<tr>
												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Nama Barang</span>
												</td>

												<td class="labelku" width="30%">
													<span class="mb-2" style="font-size: 10pt;">Harga Beli</span>
												</td>

												<td class="labelku" width="30%">
													<span class="mb-2" style="font-size: 10pt;">Harga Jual</span>
												</td>

												<td class="labelku" width="5%">
													<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
												</td>
											</tr>
										</thead>

										<tbody id="list_gpm">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</fieldset>
				</fieldset>
			</form>
		</div>
	</div>

	<!-- Modal Observasi GPM -->
	<div class="modal fade" id="modal_observasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Observasi GPM</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Barang</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Beli</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="harga_beli" id="harga_beli" placeholder="Rp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Jual</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="harga_jual" id="harga_jual" placeholder="Rp" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-custom-ad" type="button" onclick="tambahObservasi()">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("form_input").classList.add("active");
		document.getElementById("icon_form").style.color = "#F02632";
		document.getElementById("name_form").style.color = "#F02632";
	</script>

	<script id="draft_gpm" type="text/x-handlebars-template">
		<tr class="hapus_list_gpm" id="hapus_list_gpm">
			<td>
				<input class="form-control" type="text" name="nama_barang_arr[]" value="{{ nama_barang }}">
			</td>

			<td>
				<input class="form-control" type="text" name="harga_beli_arr[]" value="{{ harga_beli }}">
			</td>

			<td>
				<input class="form-control" type="text" name="harga_jual_arr[]" value="{{ harga_jual }}">
			</td>

			<td align="center">
				<button id="hapus_gpm" class="btn btn-custom" onclick="hapusObservasi()">
					<span class="icon1 text-white">
						<i class="fas fa-trash-alt"></i>
					</span>
				</button>
			</td>
		</tr>
	</script>

<?php include "footer.php"; ?>

	<script type="text/javascript">
		function tambahObservasi() {
			$('.table-gpm').show();

			var nama_barang = $("#nama_barang").val();
			var harga_beli = $("#harga_beli").val(),
			split = harga_beli.split(" "),
			nominal = split[1],
			new_harga_beli = nominal.replace(/[.]+/g, '');

			var harga_jual = $("#harga_jual").val(),
			split = harga_jual.split(" "),
			nominal = split[1],
			new_harga_jual = nominal.replace(/[.]+/g, '');

			// console.log(new_harga_jual);

			var source = $("#draft_gpm").html();
			var template = Handlebars.compile(source);

			var data = {
				nama_barang: nama_barang,
				harga_beli: new_harga_beli,
				harga_jual: new_harga_jual
			}

			var html = template(data);
			$("#list_gpm").append(html);
			$("#modal_observasi").modal('hide');
			$('body').removeClass('modal-open'); 
			$('.modal-backdrop').remove();
			document.getElementById("nama_barang").value = '';
			document.getElementById("harga_beli").value = '';
			document.getElementById("harga_jual").value = '';
		}

		function hapusObservasi() {
			$("#hapus_gpm").closest('.hapus_list_gpm').remove();
		}

		var harga_beli = document.getElementById("harga_beli");
		harga_beli.addEventListener("keyup", function(e){
			harga_beli.value = formatUang(this.value, "Rp ");
		});

		var harga_jual = document.getElementById("harga_jual");
		harga_jual.addEventListener("keyup", function(e){
			harga_jual.value = formatUang(this.value, "Rp ");
		});

		var harga_beli_arr = document.getElementsByName("harga_beli_arr[]");
		for (var i = 0; i < harga_beli_arr.length; i++) {
			harga_beli_arr[i].addEventListener('change', printDetails);
			// harga_beli_arr[i].addEventListener("keyup", function(e){
			// 	console.log(harga_beli_arr[i].value);
			// 	// harga_beli_arr[i].value = formatUang(this.value, "Rp ");
			// });
		}



		function printDetails(e) {
			console.log("Clicked " + this.value);
		}


		function formatUang(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split       = number_string.split(','),
			sisa        = split[0].length % 3,
			rupiah        = split[0].substr(0, sisa),
			ribuan        = split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? "Rp " +  rupiah : '');
		}
	</script>