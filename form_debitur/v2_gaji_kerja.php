<form name="form_input_gaji_kerja" class="needs-validation" method="POST" action="#" novalidate>
	<div class="form-group">
		<label class="labelku">Nama Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="nama_perusahaan_gaji" id="nama_perusahaan_gaji" placeholder="Nama Perusahaan" required>
		<div class="invalid-feedback">
			Nama Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Level Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="level_perusahaan_gaji" id="level_perusahaan_gaji" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Start Up">Start Up</option>
			<option value="Go Public">Go Public</option>
			<option value="Lain - lain">Lain - lain</option>
		</select>
		<div class="invalid-feedback">
			Level Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Alamat Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="alamat_perusahaan_gaji" id="alamat_perusahaan_gaji" placeholder="Alamat Perusahaan" required>
		<div class="invalid-feedback">
			Alamat Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">No Telp Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<div class="row">
			<div class="col-lg-6">
				<input class="form-control" type="text" name="no_telp_perusahaan_gaji" id="no_telp_perusahaan_gaji" placeholder="No Telp Perusahaan" required>
				<div class="invalid-feedback">
					No Telp Perusahaan tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-6">
				<input class="form-control" type="text" name="ext_gaji" id="ext_gaji" placeholder="Ext" onkeypress="return numOnly(event)">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Website Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="website_perusahaan_gaji" id="website_perusahaan_gaji" placeholder="Website Perusahaan" onchange="cekWebsite()" required>
		<div class="invalid-feedback">
			Website Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Lama Bekerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="lama_kerja" id="lama_kerja" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Kurang dari 1 Tahun">Kurang dari 1 Tahun</option>
			<option value="1 - 2,9 Tahun">1 - 2,9 Tahun</option>
			<option value="3 - 5 Tahun">3 - 5 Tahun</option>
			<option value="Lebih dari 5 Tahun">Lebih dari 5 Tahun</option>
		</select>
		<div class="invalid-feedback">
			Lama Bekerja tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Jenis Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="jenis_usaha_gaji" id="jenis_usaha_gaji" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Perdagangan">Perdagangan</option>
			<option value="Jasa">Jasa</option>
			<option value="Manufaktur">Manufaktur</option>
			<option value="Pertanian">Pertanian</option>
			<option value="Pemerintahan">Pemerintahan</option>
		</select>
		<div class="invalid-feedback">
			Jenis Usaha tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Status Kepegawaian <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="status_kepegawaian" id="status_kepegawaian" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Freelance">Freelance</option>
			<option value="Outsource">Outsource</option>
			<option value="Kontrak">Kontrak</option>
			<option value="Tetap">Tetap</option>
		</select>
		<div class="invalid-feedback">
			Status Kepegawaian tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Jabatan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="Jabatan" required>
		<div class="invalid-feedback">
			Jabatan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Level Jabatan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="level_jabatan" id="level_jabatan" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Pelaksana">Pelaksana</option>
			<option value="Officer">Officer</option>
			<option value="Manager">Manager / Supervisor</option>
			<option value="Kepala Bagian">Assistant Vice President / Kepala Bagian</option>
			<option value="Kepala Divisi">Vice President / Kepala Divisi</option>
			<option value="Direktur">Chief / Direktur</option>
		</select>
		<div class="invalid-feedback">
			Level Jabatan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Gaji THP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="gaji_thp" id="gaji_thp" placeholder="Rp" required>
		<div class="invalid-feedback">
			Gaji THP tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Penghasilan Tambahan</label>
		<div class="row">
			<div class="col-lg-6">
				<input class="form-control" type="text" name="penghasilan_tambahan_gk" id="penghasilan_tambahan_gk" placeholder="Rp" onchange="setPTGaji()" autocomplete="off">
				<div class="invalid-feedback">
					Penghasilan Tambahan tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-6" style="padding-right: 0;">
				<select class="form-control" name="sumber_penghasilan_tambahan_gk" id="sumber_penghasilan_tambahan_gk" onchange="setPTSGaji()">
					<option value="" selected="selected">Pilih Opsi</option>
					<option value="Penghasilan Pasangan">Penghasilan Pasangan</option>
					<option value="Hasil Usaha Sampingan">Hasil Usaha Sampingan</option>
					<option value="Lain - Lain">Lain - Lain</option>
				</select>
				<div class="invalid-feedback">
					Sumber Penghasilan Tambahan tidak boleh kosong.
				</div>
			</div>
		</div>
	</div>

	<div class="form-group" style="float: right;">
		<a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_gaji_kerja" data-backdrop="static" data-keyboard="false">Simpan</a>
		<!-- <input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan"> -->
	</div>
</form>

<div class="modal fade" id="simpan_gaji_kerja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Data Sumber Penghasilan Gaji Kerja Berhasil Disimpan</span><br>
					<hr>
					<button class="btn btn-success font-weight-bold" type="button" data-dismiss="modal" onclick="enablePK()">
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