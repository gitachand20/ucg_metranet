<form name="form_input_pengajuan_kredit" class="needs-validation" method="POST" action="#" novalidate>
	<div class="form-group">
		<label class="labelku">Plafon Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control pengajuan" type="text" name="plafon_kredit" id="plafon_kredit" placeholder="Rp" onchange="hitungAngsuran()" autocomplete="off" required>
		<div class="invalid-feedback">
			Plafon Kredit tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Tenor <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control pengajuan" name="tenor_debitur" id="tenor_debitur" onchange="hitungAngsuran()" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
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

	<div class="form-group">
		<label class="labelku">Bunga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control pengajuan" type="number" name="bunga" id="bunga" placeholder="% per Tahun" min="1" max="100" onkeypress="return numOnly(event)" onchange="hitungAngsuran()" autocomplete="off" required>
		<div class="invalid-feedback">
			Bunga tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Angsuran</label>
		<input class="form-control" type="text" name="angsuran" id="angsuran" placeholder="Rp 0" readonly>
	</div>

	<div class="form-group">
		<label class="labelku">Tujuan Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control pengajuan" name="tujuan_kredit" id="tujuan_kredit" onchange="setTujuanKredit()" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Produktif">Produktif</option>
			<option value="Konsumtif">Konsumtif</option>
		</select>
		<div class="invalid-feedback">
			Tujuan Kredit tidak boleh kosong.
		</div>
	</div>

	<!-- Jenis Kredit Produktif / Konsumtif -->
	<fieldset id="jenis-kredit" style="display: none;">
		<div class="form-group">
			<label class="labelku">Jenis Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<div id="jenis-kredit-produktif" style="display: none;">
				<select class="form-control pengajuan" name="jenis_kredit" id="jenis_kredit_pro" onchange="cekProduktif()">
					<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
					<option value="Kredit Multiguna">Kredit Multiguna</option>
					<option value="KMK">KMK</option>
					<option value="Kredit Investasi">Kredit Investasi</option>
					<option value="Rekening Koran">Rekening Koran</option>
					<option value="Kredit Usaha Rakyat">Kredit Usaha Rakyat</option>
				</select>
				<div class="invalid-feedback">
					Jenis Kredit tidak boleh kosong.
				</div>
			</div>

			<div id="jenis-kredit-konsumtif" style="display: none;">
				<select class="form-control pengajuan" name="jenis_kredit" id="jenis_kredit_kon">
					<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
					<option value="Kredit Multiguna">Kredit Multiguna</option>
					<option value="KPR">KPR</option>
					<option value="KKB">KKB</option>
					<option value="Kredit Tanpa Agunan">Kredit Tanpa Agunan</option>
					<option value="Kartu Kredit">Kartu Kredit</option>
					<option value="Investasi">Investasi</option>
					<option value="Pensiun">Pensiun</option>
				</select>
				<div class="invalid-feedback">
					Jenis Kredit tidak boleh kosong.
				</div>
			</div>
		</div>
	</fieldset>

	<!-- Rencana Anggaran Biaya (RAB) => Kredit Investasi -->
	<fieldset id="ki-rab" style="display: none;">
		<div class="form-group">
			<label class="labelku">Rencana Anggaran Biaya (RAB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control pengajuan" type="text" name="rab" id="rab" placeholder="Rp">
			<div class="invalid-feedback">
				Rencana Anggaran Biaya (RAB) tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<div class="form-group" style="float: right;">
		<a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_pengajuan_kredit" data-backdrop="static" data-keyboard="false">Simpan</a>
		<!-- <input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan"> -->
	</div>
</form>

<div class="modal fade" id="simpan_pengajuan_kredit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Data Pengajuan Kredit Berhasil Disimpan</span><br>
					<hr>
					<button class="btn btn-success font-weight-bold" type="button" data-dismiss="modal" onclick="enableDJ()">
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