<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg"></i>
			</a>
			Form Input Debitur Konsumtif
		</h1>
	</div>

	<div class="col-lg-12 mb-4">
		<form name="form_input_v5" class="needs-validation" method="POST" action="#" novalidate>
			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">NIK</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="nik" id="nik" onkeypress="javascript:return isNumber(event)" onchange="cekNik()" autocomplete="off" minlength="16" maxlength="16" required>
						<div class="invalid-feedback">
							NIK tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Lahir</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control datepicker_v5" type="text" name="umur" id="umur" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" required>
						<div class="invalid-feedback">
							Tanggal lahir tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Kelamin</label>
					<div class="col-lg-8 col-sm-12 row">
						<div class="col-lg-6 col-sm-6 col-xs-12 mb-2">
							<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_m" value="male" required>
								<label class="custom-control-label" for="gender_m">Laki - laki</label>
								<div class="invalid-feedback row" style="width: 200%;">
									Jenis kelamin tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="col-lg-6 col-sm-6 col-xs-12 mb-2">
							<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_f" value="female" required>
								<label class="custom-control-label" for="gender_f">Perempuan</label>
							</div>
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Agama</label>
					<div class="col-lg-8 col-sm-12 mb-3">
						<select class="form-control" name="agama" id="agama" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="1">Islam</option>
							<option value="2">Katolik</option>
							<option value="3">Protestan</option>
							<option value="4">Hindu</option>
							<option value="5">Budha</option>
						</select>
						<div class="invalid-feedback">
							Agama tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Pendidikan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="pendidikan" id="pendidikan" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="SMA">SMA</option>
							<option value="SMK">SMK</option>
							<option value="D3">D3</option>
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
						</select>
						<div class="invalid-feedback">
							Pendidikan tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Status Perkawinan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="status_kawin" id="status_kawin" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="Common-Law">Common-Law</option>
							<option value="Divorce">Divorce</option>
							<option value="Married">Married</option>
							<option value="Single">Single</option>
						</select>
						<div class="invalid-feedback">
							Status Perkawinan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Sumber Dana</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="sumber_dana" id="sumber_dana" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="Gaji Kerja">Gaji Kerja</option>
							<option value="Gaji Pensiun">Gaji Pensiun</option>
							<option value="Hasil Usaha">Hasil Usaha</option>
						</select>
						<div class="invalid-feedback">
							Sumber Dana tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Pekerjaan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="pekerjaan" id="pekerjaan" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="PNS">PNS</option>
							<option value="Karyawan">Karyawan</option>
							<option value="Pemilik Usaha">Pemilik Usaha</option>
							<option value="Pensiun">Pensiun</option>
						</select>
						<div class="invalid-feedback">
							Pekerjaan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Bidang Usaha</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="bidang_usaha" id="bidang_usaha" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="Jasa">Jasa</option>
							<option value="Manfaktur">Manfaktur</option>
							<option value="Perdagangan">Perdagangan</option>
							<option value="Pemerintahan">Pemerintahan</option>
							<option value="Pertanian">Pertanian</option>
							<option value="Lainnya">Lainnya</option>
						</select>
						<div class="invalid-feedback">
							Bidang Usaha tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Usaha</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="jenis_usaha" id="jenis_usaha" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="PNS">PNS</option>
							<option value="Grosir">Grosir</option>
							<option value="Retail">Retail</option>
							<option value="Pelayanan Umum">Pelayanan Umum</option>
							<option value="Keuangan">Keuangan</option>
							<option value="Kontruksi">Kontruksi</option>
							<option value="Pabrik Industry">Pabrik Industry</option>
							<option value="Home Industry">Home Industry</option>
							<option value="Perkebunan">Perkebunan</option>
							<option value="Kehutanan">Kehutanan</option>
							<option value="Pertanian">Pertanian</option>
							<option value="Peternakan">Peternakan</option>
							<option value="Perikanan">Perikanan</option>
							<option value="Lainnya">Lainnya</option>
						</select>
						<div class="invalid-feedback">
							Jenis Usaha tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Penghasilan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="penghasilan" id="penghasilan" onkeypress="javascript:return isNumber(event)" onchange="cekPenghasilan()" autocomplete="off" required>
						<div class="invalid-feedback">
							Penghasilan tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Loan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="jenis_loan" id="jenis_loan" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="KBB">KBB</option>
							<option value="KPR">KPR</option>
							<option value="Kartu Kredit">Kartu Kredit</option>
							<option value="Kredit Investasi">Kredit Investasi</option>
							<option value="Kredit Multiguna">Kredit Multiguna</option>
							<option value="Kredit Tanpa Agunan">Kredit Tanpa Agunan</option>
							<option value="Kredit Pensiun">Kredit Pensiun</option>
						</select>
						<div class="invalid-feedback">
							Jenis Loan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Plafon</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="plafon" id="plafon" onkeypress="javascript:return isNumber(event)" onchange="hitungAngsuran()" autocomplete="off" required>
						<div class="invalid-feedback">
							Plafon tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Tenor</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control" name="tenor" id="tenor" onchange="hitungAngsuran()" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="12">12</option>
							<option value="24">24</option>
							<option value="36">36</option>
							<option value="60">60</option>
							<option value="300">300</option>
						</select>
						<div class="invalid-feedback">
							Tenor tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Angsuran</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="angsuran" id="angsuran" readonly>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Bunga</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="number" name="bunga" id="bunga" placeholder="%" min="7" max="24" onchange="cekBunga()" autocomplete="off" required>
						<div class="invalid-feedback">
							Bunga tidak boleh kosong.
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Jenis Jaminan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control" name="jenis_jaminan" id="jenis_jaminan" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="None">None</option>
							<option value="SHM">SHM</option>
							<option value="SHGB">SHGB</option>
							<option value="BPKB">BPKB</option>
							<option value="SK Pensiun">SK Pensiun</option>
							<option value="Emas">Emas</option>
							<option value="Barang Konsumtif">Barang Konsumtif</option>
							<option value="Lainnya">Lainnya</option>
						</select>
						<div class="invalid-feedback">
							Jenis Jaminan tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Nilai Jaminan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="nilai_jaminan" id="nilai_jaminan" onkeypress="javascript:return isNumber(event)" onchange="cekNilaiJaminan()" autocomplete="off" required>
						<div class="invalid-feedback">
							Nilai Jaminan tidak boleh kosong.
						</div>
					</div>

				</div>
			</div>

			<div class="row" style="float: right; margin-right: 3%;">
				<div class="row col-12 mb-4">
					<input type="submit" class="btn btn-danger" name="simpan" value="Prediksi" style="width: 10em;">
				</div>
			</div>
		</form>
	</div>

	<script type="text/javascript">
		document.getElementById("form_input").classList.add("active");
		document.getElementById("icon_form").style.color = "#F02632";
		document.getElementById("name_form").style.color = "#F02632";
	</script>

	<script src="../../js/form_input.js"></script>

<?php include "footer.php"; ?>