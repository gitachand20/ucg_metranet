<a href="#" id="btn-jaminan" class="btn btn-outline-warning font-weight-bold float-right mb-2" data-toggle="modal" data-target="#modal_jaminan" style="margin-top: 5px;">
	<i class="fas fa-plus" style="font-size: 14px;"></i>
	<span class="text font-weight-bold">Tambah Jaminan</span>
</a>

<form name="form_input_data_jaminan" class="needs-validation" method="POST" action="hasil_prediksi_v2.php" novalidate>
	<table class="table table-striped table-jaminan" cellspacing="0">
		<thead>
			<tr>
				<td class="labelku" align="center" width="210px">
					<span class="mb-2" style="font-size: 10pt;">Jenis</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Bukti Kepemilikan Jaminan</span>
				</td>

				<td class="labelku" align="center" width="110px">
					<span class="mb-2" style="font-size: 10pt;">Tahun Pembelian</span>
				</td>

				<td class="labelku" align="center" width="200px">
					<span class="mb-2" style="font-size: 10pt;">Nilai Jaminan</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
				</td>
			</tr>
		</thead>

		<tbody id="list_jaminan">

		</tbody>

		<tbody>
			<tr>
				<td colspan="3" class="labelku" align="center">
					<span style="font-size: 10pt;">Total Jaminan</span>
				</td>

				<td>
					<input class="form-control font-weight-bold" type="text" id="total_jaminan" value="Rp 0" style="text-align: right; color: #000;" readonly>
				</td>

				<td></td>
			</tr>
		</tbody>
	</table>

	<!-- <table class="table table-striped table-jaminan" cellspacing="0">
		<thead>
			<tr>
				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Jenis</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Bukti Kepemilikan Jaminan</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Alamat Jaminan</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Nomor Bukti Kepemilikan</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Luas Tanah (m<sup>2</sup>)</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Luas Bangunan (m<sup>2</sup>)</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">IMB</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Tahun Pembelian</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Nilai Jaminan</span>
				</td>

				<td class="labelku" align="center">
					<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
				</td>
			</tr>
		</thead>

		<tbody id="list_jaminan">

		</tbody>
	</table> -->

	<div class="form-group" style="float: right;">
		<a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_data_jaminan" data-backdrop="static" data-keyboard="false">Simpan</a>
		<input type="hidden" class="btn btn-custom-dis" id="btnSimpanJaminan" name="simpan" value="Simpan" disabled="disabled">
	</div>
</form>


<!-- Modal Tambah Jaminan -->
<div class="modal fade" id="modal_jaminan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 850px;">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Jaminan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff;">×</span>
				</button>
			</div>

			<div class="modal-body">
				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control jaminan" name="jenis_jaminan" id="jenis_jaminan" onchange="setJenisJaminan()">
							<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
							<option value="Tanah">Tanah</option>
							<option value="Bangunan">Bangunan</option>
							<option value="Tanah dan Bangunan">Tanah dan Bangunan</option>
							<option value="Kendaraan Bermotor">Kendaraan Bermotor</option>
							<option value="Mesin">Mesin</option>
						</select>
						<div class="invalid-feedback">
							Jenis Jaminan tidak boleh kosong.
						</div>
					</div>
				</div>

				<!-- Jenis Jaminan, Alamat Jaminan dan Nomor Bukti Kepemilikan -->
				<fieldset id="jaminan-atas" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Bukti Kepemilikan Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<select class="form-control jaminan" name="bukti_jaminan" id="jenis-jaminan-tanah" style="display: none;">
								<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
								<option value="SHM">SHM</option>
								<option value="SHGU">SHGU</option>
								<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
							</select>

							<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-bangunan" style="display: none;" readonly>
								<option value="SHGB" selected="selected">SHGB</option>
							</select>

							<select class="form-control jaminan" name="bukti_jaminan" id="jenis-jaminan-tanah-bangunan" style="display: none;">
								<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
								<option value="SHM">SHM</option>
								<option value="SHGB">SHGB</option>
								<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
							</select>

							<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-kendaraan" style="display: none;" readonly>
								<option value="BPKB" selected="selected">BPKB</option>
							</select>

							<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-mesin" style="display: none;" readonly>
								<option value="Sertifikat Mesin" selected="selected">Sertifikat Mesin</option>
							</select>

							<div class="invalid-feedback">
								Bukti Kepemilikan Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Alamat Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="alamat_jaminan" id="alamat_jaminan" placeholder="Alamat Jaminan" autocomplete="off">
							<div class="invalid-feedback">
								Alamat Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nomor Bukti Kepemilikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="no_bukti_kepemilikan" id="no_bukti_kepemilikan" placeholder="Nomor Bukti Kepemilikan" autocomplete="off">
							<div class="invalid-feedback">
								Nomor Bukti Kepemilikan tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Luas Tanah => Tanah, Bangunan, Tanah dan Bangunan -->
				<fieldset id="luas-tanah" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Luas Tanah <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="luas_tanah" id="luas_tanah" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off">
							<div class="invalid-feedback">
								Luas Tanah tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Bangunan => Bangunan, Tanah dan Bangunan -->
				<fieldset id="bangunan" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Luas Bangunan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="luas_bangunan" id="luas_bangunan" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off">
							<div class="invalid-feedback">
								Luas Bangunan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Izin Mendirikan Bangunan (IMB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="imb" id="imb" placeholder="Nomor" autocomplete="off">
							<div class="invalid-feedback">
								Izin Mendirikan Bangunan (IMB) tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Tahun Pembelian dan Nilai Jaminan -->
				<fieldset id="jaminan-bawah" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Tahun Pembelian <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="tahun_pembelian" id="tahun_pembelian" placeholder="Tahun Pembelian" minlength="4" maxlength="4" onkeypress="return numOnly(event)" onchange="cekTahunBeli()" autocomplete="off">
							<div class="invalid-feedback">
								Tahun Pembelian tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nilai Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control jaminan" type="text" name="nilai_jaminan" id="nilai_jaminan" placeholder="Rp">
							<div class="invalid-feedback">
								Nilai Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>
			</div>

			<div class="modal-footer">
				<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-custom-dis" type="button" id="btnTambahJaminan" onclick="tambahJaminan()" disabled="disabled">Tambah</button>
			</div>
		</div>
	</div>
</div>


<!-- Modal Ubah Jaminan -->
<div class="modal fade" id="ubah_jaminan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 850px;">
		<div class="modal-content">
			<div class="modal-header bg-info">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Ubah Jaminan</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff;">×</span>
				</button>
			</div>

			<div class="modal-body">
				<input type="hidden" id="id_ubah">
				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control ubah-jaminan" id="ubah_jenis_jaminan" onchange="setUbahJaminan()">
							<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
							<option value="Tanah">Tanah</option>
							<option value="Bangunan">Bangunan</option>
							<option value="Tanah dan Bangunan">Tanah dan Bangunan</option>
							<option value="Kendaraan Bermotor">Kendaraan Bermotor</option>
							<option value="Mesin">Mesin</option>
						</select>
						<div class="invalid-feedback">
							Jenis Jaminan tidak boleh kosong.
						</div>
					</div>
				</div>

				<!-- Jenis Jaminan, Alamat Jaminan dan Nomor Bukti Kepemilikan -->
				<fieldset id="ubah-jaminan-atas" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Bukti Kepemilikan Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<select class="form-control ubah-jaminan" id="ubah-jenis-jaminan-tanah" style="display: none;">
								<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
								<option value="SHM">SHM</option>
								<option value="SHGU">SHGU</option>
								<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
							</select>

							<select class="form-control" id="ubah-jenis-jaminan-bangunan" style="display: none;" readonly>
								<option value="SHGB" selected="selected">SHGB</option>
							</select>

							<select class="form-control ubah-jaminan" id="ubah-jenis-jaminan-tanah-bangunan" style="display: none;">
								<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
								<option value="SHM">SHM</option>
								<option value="SHGB">SHGB</option>
								<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
							</select>

							<select class="form-control" id="ubah-jenis-jaminan-kendaraan" style="display: none;" readonly>
								<option value="BPKB" selected="selected">BPKB</option>
							</select>

							<select class="form-control" id="ubah-jenis-jaminan-mesin" style="display: none;" readonly>
								<option value="Sertifikat Mesin" selected="selected">Sertifikat Mesin</option>
							</select>

							<div class="invalid-feedback">
								Bukti Kepemilikan Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Alamat Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_alamat_jaminan" placeholder="Alamat Jaminan" autocomplete="off">
							<div class="invalid-feedback">
								Alamat Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nomor Bukti Kepemilikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_no_bukti_kepemilikan" placeholder="Nomor Bukti Kepemilikan" autocomplete="off">
							<div class="invalid-feedback">
								Nomor Bukti Kepemilikan tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Luas Tanah => Tanah, Bangunan, Tanah dan Bangunan -->
				<fieldset id="ubah-luas-tanah" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Luas Tanah <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_luas_tanah" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off">
							<div class="invalid-feedback">
								Luas Tanah tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Bangunan => Bangunan, Tanah dan Bangunan -->
				<fieldset id="ubah-bangunan" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Luas Bangunan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_luas_bangunan" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off">
							<div class="invalid-feedback">
								Luas Bangunan tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Izin Mendirikan Bangunan (IMB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_imb" placeholder="Nomor" autocomplete="off">
							<div class="invalid-feedback">
								Izin Mendirikan Bangunan (IMB) tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>

				<!-- Tahun Pembelian dan Nilai Jaminan -->
				<fieldset id="ubah-jaminan-bawah" style="display: none;">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Tahun Pembelian <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_tahun_pembelian" placeholder="Tahun Pembelian" minlength="4" maxlength="4" onkeypress="return numOnly(event)" onchange="cekTahunBeli()" autocomplete="off">
							<div class="invalid-feedback">
								Tahun Pembelian tidak boleh kosong.
							</div>
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nilai Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control ubah-jaminan" type="text" id="ubah_nilai_jaminan" placeholder="Rp">
							<div class="invalid-feedback">
								Nilai Jaminan tidak boleh kosong.
							</div>
						</div>
					</div>
				</fieldset>


				<!-- <div class="row mb-3">
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Jenis Jaminan</td></tr>
							<tr><td class="labelku" id="det_jenis"></td></tr>
						</table>
					</div>
					
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Bukti Kepemilikan Jaminan</td></tr>
							<tr><td class="labelku" id="det_bukti"></td></tr>
						</table>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Alamat Jaminan</td></tr>
							<tr><td class="labelku" id="det_alamat"></td></tr>
						</table>
					</div>
					
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Nomor Bukti Jaminan</td></tr>
							<tr><td class="labelku" id="det_nomor"></td></tr>
						</table>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Luas Tanah</td></tr>
							<tr><td class="labelku" id="det_tanah"></td></tr>
						</table>
					</div>
					
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Luas Bangunan</td></tr>
							<tr><td class="labelku" id="det_bangunan"></td></tr>
						</table>
					</div>
				</div>

				<div class="row mb-3">
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">IMB</td></tr>
							<tr><td class="labelku" id="det_imb"></td></tr>
						</table>
					</div>
					
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Tahun Pembelian</td></tr>
							<tr><td class="labelku" id="det_tahun"></td></tr>
						</table>
					</div>
				</div>

				<div class="row">
					<div class="col-lg-6 col-md-12">
						<table width="100%">
							<tr><td class="text-dark" style="font-size: .85em;">Nilai Jaminan</td></tr>
							<tr><td class="labelku" id="det_nilai"></td></tr>
						</table>
					</div>
				</div> -->

				<!-- <div class="row float-right">
					<button class="btn btn-primary" type="button" data-dismiss="modal">Ok</button>
				</div> -->
			</div>

			<div class="modal-footer">
				<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-custom-dis" type="button" id="btnUbahJaminan" onclick="ubahJaminan()" disabled="disabled">Simpan</button>
			</div>
		</div>
	</div>
</div>


<script id="draft_jaminan" type="text/x-handlebars-template">
	<tr class="hapus_list_jaminan" id="hapus_list_jaminan">
		<td>
			<input class="form-control id-jaminan" type="hidden" name="index[]" value="{{ index }}" readonly>
			<input class="form-control" type="text" name="jenis_jaminan[]" value="@{{ jenis_jaminan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="bukti_jaminan[]" value="@{{ bukti_jaminan }}" readonly>
			<input class="form-control" type="hidden" name="alamat_jaminan[]" value="@{{ alamat_jaminan }}" readonly>
			<input class="form-control" type="hidden" name="no_bukti_kepemilikan[]" value="@{{ no_bukti_kepemilikan }}" readonly>
			<input class="form-control" type="hidden" name="luas_tanah[]" value="@{{ luas_tanah }}" readonly>
			<input class="form-control" type="hidden" name="luas_bangunan[]" value="@{{ luas_bangunan }}" readonly>
			<input class="form-control" type="hidden" name="imb[]" value="@{{ imb }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="tahun_pembelian[]" value="@{{ tahun_pembelian }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="nilai_jaminan[]" value="@{{ nilai_jaminan }}" style="text-align: right;" readonly>
		</td>

		<td align="center">
			<input type="button" id="cek_jaminan" class="btn btn-outline-info fa-edit font-weight-bold" value="&#xf044;" data-toggle="modal" data-target="#ubah_jaminan">

			<button id="hapus_jaminan" class="btn btn-outline-warning font-weight-bold">
				<i class="far fa-trash-alt"></i>
			</button>
		</td>
	</tr>
</script>

<!-- <script id="draft_jaminan" type="text/x-handlebars-template">
	<tr class="hapus_list_jaminan" id="hapus_list_jaminan">
		<td>
			<input class="form-control" type="hidden" name="index[]" value="{{ index }}" readonly>
			<input class="form-control" type="text" name="jenis_jaminan[]" value="@{{ jenis_jaminan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="bukti_jaminan[]" value="@{{ bukti_jaminan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="alamat_jaminan[]" value="@{{ alamat_jaminan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="no_bukti_kepemilikan[]" value="@{{ no_bukti_kepemilikan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="luas_tanah[]" value="@{{ luas_tanah }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="luas_bangunan[]" value="@{{ luas_bangunan }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="imb[]" value="@{{ imb }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="tahun_pembelian[]" value="@{{ tahun_pembelian }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="nilai_jaminan[]" value="@{{ nilai_jaminan }}" style="text-align: right;" readonly>
		</td>

		<td align="center">
			<input type="button" class="btn btn-outline-success fa-edit font-weight-bold" value="&#xf044;" data-toggle="modal" data-target="#modal_jaminan">

			<button id="hapus_jaminan" class="btn btn-outline-warning font-weight-bold">
				<i class="far fa-trash-alt"></i>
			</button>
		</td>
	</tr>
</script> -->

<div class="modal fade" id="simpan_data_jaminan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Data Jaminan Berhasil Disimpan</span><br>
					<hr>
					<button class="btn btn-success font-weight-bold" type="button" data-dismiss="modal" onclick="enableUB()">
						<span class="text">Selanjutnya </span>
						<span class="icon1" style="color: rgba(255, 255, 255, 0.8)">
							<i class="fas fa-arrow-right"></i>
						</span>
					</button>
				</center>
			</div>
		</div>
	</div>
</div>