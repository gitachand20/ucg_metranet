<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg"></i>
			</a>
			Form Input Debitur Produktif
		</h1>
	</div>

	<div class="col-lg-12 mb-4">
		<form name="form_input_kreditur" class="needs-validation" method="POST" action="#" autocomplete="off" novalidate>
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
						<input class="form-control datepicker_kredit" type="text" name="umur" id="umur" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" required>
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
								<div class="invalid-feedback row" style="width: 200%; margin-left: -20px;">
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
							<option value="sma">SMA</option>
							<option value="smk">SMK</option>
							<option value="d3">D3</option>
							<option value="s1">S1</option>
							<option value="s2">S2</option>
							<option value="s3">S3</option>
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
							<option value="single">Lajang</option>
							<option value="married">Menikah</option>
							<option value="common-law">Pernikahan Siri</option>
							<option value="divorce">Bercerai</option>>
						</select>
						<div class="invalid-feedback">
							Status Perkawinan tidak boleh kosong.
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
							<option value="jasa">Jasa</option>
							<option value="manfaktur">Manfaktur</option>
							<option value="perdagangan">Perdagangan</option>
							<option value="pertanian">Pertanian</option>
							<option value="lainnya">Lainnya</option>
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
							<option value="grosir">Grosir</option>
							<option value="retail">Retail</option>
							<option value="pelayanan umum">Pelayanan Umum</option>
							<option value="keuangan">Keuangan</option>
							<option value="kontruksi">Kontruksi</option>
							<option value="pabrik industry">Pabrik Industry</option>
							<option value="home industry">Home Industry</option>
							<option value="perkebunan">Perkebunan</option>
							<option value="kehutanan">Kehutanan</option>
							<option value="pertanian">Pertanian</option>
							<option value="peternakan">Peternakan</option>
							<option value="perikanan">Perikanan</option>
							<option value="lainnya">Lainnya</option>
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
						<input class="form-control" type="text" name="penghasilan" id="penghasilan" onkeypress="return isNumber(event)" onchange="cekPenghasilanKredit()" autocomplete="off" placeholder="Rp" required>
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
							<option value="kredit investasi">Kredit Investasi</option>
							<option value="kredit modal kerja">Kredit Modal Kerja</option>
							<option value="kredit multiguna">Kredit Multiguna</option>
							<option value="kredit usaha rakyat">Kredit Usaha Rakyat</option>
							<option value="kredit rekening koran">Kredit Rekening Koran</option>
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
						<input class="form-control" type="text" name="plafon" id="plafon" onkeypress="return isNumber(event)" onchange="hitungAngsuranKredit()" autocomplete="off" placeholder="Rp" required>
						<div class="invalid-feedback">
							Plafon tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Tenor</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control" name="tenor" id="tenor" onchange="hitungAngsuranKredit()" required>
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
						<input class="form-control" type="text" name="angsuran" id="angsuran" placeholder="Rp" readonly>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Bunga</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="number" name="bunga" id="bunga" placeholder="%" min="4" max="24" onchange="cekBungaKredit()" autocomplete="off" required>
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
							<option value="adat">ADAT</option>
							<option value="bpkb">BPKB</option>
							<option value="shm">SHM</option>
							<option value="shgb">SHGB</option>
							<option value="lainnya">Lainnya</option>
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
						<input class="form-control" type="text" name="nilai_jaminan" id="nilai_jaminan" onkeypress="return isNumber(event)" onchange="cekNilaiJaminanKredit()" autocomplete="off" placeholder="Rp" required>
						<div class="invalid-feedback">
							Nilai Jaminan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">KI / KMK</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="kikmk" id="kikmk" onkeypress="return isNumber(event)" onchange="cekNilaiKikmk()" autocomplete="off" placeholder="Rp" required>
						<div class="invalid-feedback">
							KI / KMK tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					
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

<?php include "footer.php"; ?>

	<script src="../../js/form_input.js"></script>