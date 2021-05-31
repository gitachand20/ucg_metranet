<!-- <a href="#" class="btn btn-custom" data-toggle="modal" data-target="#simpan_data_diri" data-backdrop="static" data-keyboard="false">cek</a> -->

<form name="form_input_data_diri" id="form_input_data_diri" class="needs-validation-data-diri" method="POST" action="" enctype="multipart/form-data" novalidate>
	<div class="form-group">
		<label class="labelku">Nama <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<div class="row">
			<div class="col-lg-4">
				<input class="form-control" type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" onkeypress="return alphaOnlyNS(event)" autocomplete="off" required>
				<div class="invalid-feedback">
					Nama Depan tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-4">
				<input class="form-control" type="text" name="nama_tengah" id="nama_tengah" placeholder="Nama Tengah" onkeypress="return alphaOnly(event)" autocomplete="off" required>
				<div class="invalid-feedback">
					Nama Tengah tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-4">
				<input class="form-control" type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" onkeypress="return alphaOnlyNS(event)" autocomplete="off" required>
				<div class="invalid-feedback">
					Nama Belakang tidak boleh kosong.
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Nama Gadis Ibu Kandung <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Gadis Ibu Kandung" onkeypress="return alphaOnly(event)" autocomplete="off" required>
		<div class="invalid-feedback">
			Nama Gadis Ibu Kandung tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">NIK <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="nik" id="nik" placeholder="NIK" minlength="16" maxlength="16" onkeypress="return numOnly(event)" onchange="cekNik()" autocomplete="off" required>
		<div class="invalid-feedback">
			NIK tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Jenis Kelamin <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<div class="row">
			<div class="col-lg-3 col-sm-6 col-xs-12 mb-3">
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_m" value="male" required>
					<label class="custom-control-label" for="gender_m">Laki - laki</label>
					<div class="row invalid-feedback" style="width: 200%; margin-left: -25px;">
						Jenis Kelamin tidak boleh kosong.
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-sm-6 col-xs-12 mb-3">
				<div class="custom-control custom-radio">
					<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_f" value="female" required>
					<label class="custom-control-label" for="gender_f">Perempuan</label>
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Tanggal Lahir <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control datepicker-dso" type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" required>
		<div class="invalid-feedback">
			Tanggal Lahir tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Usia</label>
		<input class="form-control" type="text" name="usia" id="usia" readonly>
	</div>

	<div class="form-group">
		<label class="labelku">Status Perkawinan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="status_perkawinan" id="status_perkawinan" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Belum Menikah">Belum Menikah</option>
			<option value="Menikah">Menikah</option>
			<option value="Cerai">Cerai</option>
		</select>
		<div class="invalid-feedback">
			Status Perkawinan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Jumlah Tanggungan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="jumlah_tanggungan" id="jumlah_tanggungan" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Tidak Memiliki">Tidak Memiliki</option>
			<option value="1 Sampai 2">1 Sampai 2</option>
			<option value="3 dan atau Lebih dari 3">3 dan atau Lebih dari 3</option>
		</select>
		<div class="invalid-feedback">
			Jumlah Tanggungan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Alamat KTP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="alamat_ktp" id="alamat_ktp" placeholder="Alamat KTP" autocomplete="off" required>
		<div class="invalid-feedback">
			Alamat KTP tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Alamat Tempat Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Tempat Tinggal" autocomplete="off" required>
		<div class="invalid-feedback">
			Alamat Tempat Tinggal tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">No Telp</label>
		<input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="No Telp" autocomplete="off">
		<div class="invalid-feedback">
			No Telp tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">No HP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="No HP" autocomplete="off" required>
		<div class="invalid-feedback">
			No HP tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Email <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="email" id="email" placeholder="Email" autocomplete="new-text" onchange="cekEmail()" required>
		<div class="invalid-feedback">
			Email tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Link Social Media</label>
		<div class="row mb-2">
			<div class="col-lg-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fab fa-facebook-f"></i>
						</div>
					</div>
					<input class="form-control" type="text" name="sm_facebook" id="sm_facebook" placeholder="Facebook" onchange="cekFb()" autocomplete="off">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fab fa-twitter"></i>
						</div>
					</div>
					<input class="form-control" type="text" name="sm_twitter" id="sm_twitter" placeholder="Twitter" onchange="cekTw()" autocomplete="off">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fab fa-instagram"></i>
						</div>
					</div>
					<input class="form-control" type="text" name="sm_instagram" id="sm_instagram" placeholder="Instagram" onchange="cekIg()" autocomplete="off">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fab fa-linkedin-in"></i>
						</div>
					</div>
					<input class="form-control" type="text" name="sm_linkedin" id="sm_linkedin" placeholder="LinkedIn" onchange="cekLi()" autocomplete="off">
				</div>
			</div>

			<div class="col-lg-4">
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fab fa-blogger-b"></i>
						</div>
					</div>
					<input class="form-control" type="text" name="sm_blog" id="sm_blog" placeholder="Blog Pribadi" onchange="cekBlog()" autocomplete="off">
				</div>
			</div>

			<div class="col-lg-4">
				<input class="form-control" type="text" name="sm_lainnya" id="sm_lainnya" placeholder="Lainnya" onchange="cekLinkLain()" autocomplete="off">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Status Tempat Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="status_tempat_tinggal" id="status_tempat_tinggal" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Milik Sendiri">Milik Sendiri</option>
			<option value="Milik Orang Tua">Milik Orang Tua</option>
			<option value="Milik Keluarga">Milik Keluarga</option>
			<option value="Sewa">Sewa</option>
			<option value="Meminjam">Meminjam</option>
		</select>
		<div class="invalid-feedback">
			Status Tempat Tinggal tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Lama Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="lama_tinggal" id="lama_tinggal" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="0 - 1 Tahun">0 - 1 Tahun</option>
			<option value="1 - 2 Tahun">1 - 2 Tahun</option>
			<option value="Lebih dari 2 Tahun">Lebih dari 2 Tahun</option>
		</select>
		<div class="invalid-feedback">
			Lama Tinggal tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Pendidikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="pendidikan" id="pendidikan" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Non">Non</option>
			<option value="SD - SMP">SD - SMP</option>
			<option value="SMA - Diploma">SMA - Diploma</option>
			<option value="S1">S1</option>
			<option value="S2 - S3">S2 - S3</option>
		</select>
		<div class="invalid-feedback">
			Pendidikan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Kontak Darurat <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<div class="row mb-2">
			<div class="col-lg-4">
				<input class="form-control" type="text" name="kd_nama" id="kd_nama" placeholder="Nama" onkeypress="return alphaOnly(event)" autocomplete="off" required>
				<div class="invalid-feedback">
					Nama Kontak Darurat tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-4">
				<input class="form-control" type="text" name="kd_hubungan" id="kd_hubungan" placeholder="Hubungan" onkeypress="return alphaOnly(event)" autocomplete="off" required>
				<div class="invalid-feedback">
					Hubungan Kontak Darurat tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-4">
				<input class="form-control" type="text" name="kd_no_telp" id="kd_no_telp" placeholder="Nomor Telepon" autocomplete="off" required>
				<div class="invalid-feedback">
					Nomor Telepon Kontak Darurat tidak boleh kosong.
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<input class="form-control" type="text" name="kd_alamat" id="kd_alamat" placeholder="Alamat" autocomplete="off" required>
				<div class="invalid-feedback">
					Alamat Kontak Darurat tidak boleh kosong.
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Sumber Penghasilan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Gaji Kerja">Gaji Kerja</option>
			<option value="Hasil Usaha">Hasil Usaha</option>
		</select>
		<div class="invalid-feedback">
			Sumber Penghasilan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group" style="float: right;">
		<a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_data_diri" data-backdrop="static" data-keyboard="false">Simpan</a>
		<!-- <input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan"> -->
		<!-- <button class="btn btn-custom-ad" onclick="enableSP()">Selanjutnya</button> -->
	</div>
</form>

<div class="modal" id="simpan_data_diri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Data Diri Berhasil Disimpan</span><br>
					<hr>
					<button class="btn btn-success font-weight-bold" type="button" data-dismiss="modal" onclick="enableSP()">
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