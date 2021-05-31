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
			<div class="f1-steps">
				<div class="f1-progress">
					<div class="f1-progress-line" data-now-value="10" data-number-of-steps="2" style="width: 10%;"></div>
				</div>

				<div id="page1" class="f1-step active col-12">
					<div class="f1-step-icon">1</div>
					<span class="f1-step-ket1" id="ket-1">Data Diri</span>
				</div>

				<div id="page2" class="f1-step col-12">
					<div class="f1-step-icon">2</div>
					<span class="f1-step-ket2" id="ket-2">Sumber Penghasilan</span>
					<span class="f1-step-ket21 d-none" id="ket-21">Gaji Kerja</span>
					<span class="f1-step-ket22 d-none" id="ket-22">Hasil Usaha</span>
				</div>

				<div id="page3" class="f1-step col-12">
					<div class="f1-step-icon">3</div>
					<span class="f1-step-ket3" id="ket-3">Pengajuan Kredit</span>
				</div>

				<div id="page4" class="f1-step col-12">
					<div class="f1-step-icon">4</div>
					<span class="f1-step-ket4" id="ket-4">Data Jaminan</span>
				</div>

				<div id="page5" class="f1-step col-12">
					<div class="f1-step-icon">5</div>
					<span class="f1-step-ket5" id="ket-5">Unggah Berkas</span>
					<span class="f1-step-ket51" id="ket-51">Terkait</span>
				</div>
			</div>

			<div class="row mb-4">
				<div class="col-lg-1"></div>
				<div class="col-lg-10" id="btn-sup-buy" style="display: none;">
					<div class="row">
						<div class="col-lg-4"></div>

						<div class="col-lg-3">
							<a href="#" id="btn-observasi" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_observasi" style="margin-left: 32px; display: none;">
								<span class="icon1 text-white">
									<i class="fas fa-plus"></i>
								</span>
								<span class="text font-weight-bold">Tambah Observasi GPM</span>
							</a>
						</div>

						<div class="col-lg-2">
							<a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_suplier">
								<span class="icon1 text-white">
									<i class="fas fa-plus"></i>
								</span>
								<span class="text font-weight-bold">Tambah Suplier</span>
							</a>
						</div>

						<div class="col-lg-2">
							<a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_buyer">
								<span class="icon1 text-white">
									<i class="fas fa-plus"></i>
								</span>
								<span class="text font-weight-bold">Tambah Buyer</span>
							</a>
						</div>
					</div>
				</div>
			</div>

			<form name="form_input_debitur" class="needs-validation" method="POST" action="hasil.php" novalidate>
				<!-- Form Data Diri -->
				<fieldset id="form-1" style="display: ; height: 340px; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Nama <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
								<div class="col-lg-4">
									<input class="form-control" type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" required>
									<div class="invalid-feedback">
										Nama Depan tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-4">
									<input class="form-control" type="text" name="nama_tengah" id="nama_tengah" placeholder="Nama Tengah" required>
									<div class="invalid-feedback">
										Nama Tengah tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-4" style="padding-right: 0;">
									<input class="form-control" type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" required>
									<div class="invalid-feedback">
										Nama Belakang tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Nama Gadis Ibu Kandung <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Gadis Ibu Kandung" required>
								<div class="invalid-feedback">
									Nama Gadis Ibu Kandung tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">NIK <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="nik" id="nik" placeholder="NIK" required>
								<div class="invalid-feedback">
									NIK tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Kelamin <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="row col-lg-9 col-xs-12 mb-3">
								<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_m" value="male" required>
										<label class="custom-control-label" for="gender_m">Laki - laki</label>
										<div class="invalid-feedback">
											Jenis kelamin tidak boleh kosong.
										</div>
									</div>
								</div>

								<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_f" value="female" required>
										<label class="custom-control-label" for="gender_f">Perempuan</label>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Tanggal Lahir <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control datepicker" type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="mm/dd/yyyy" autocomplete="off" required>
								<div class="invalid-feedback">
									Tanggal Lahir tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Status Perkawinan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="status_perkawinan" id="status_perkawinan" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Menikah">Menikah</option>
									<option value="Belum Menikah">Belum Menikah</option>
									<option value="Cerai">Cerai</option>
								</select>
								<div class="invalid-feedback">
									Status Perkawinan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Jumlah Tanggungan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
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
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Alamat KTP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="alamat_ktp" id="alamat_ktp" placeholder="Alamat KTP" required>
								<div class="invalid-feedback">
									Alamat KTP tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Alamat Tempat Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Tempat Tinggal" required>
								<div class="invalid-feedback">
									Alamat Tempat Tinggal tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">No Telp <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="No Telp" required>
								<div class="invalid-feedback">
									No Telp tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">No HP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="no_hp" id="no_hp" placeholder="No HP" required>
								<div class="invalid-feedback">
									No HP tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Link Social Media</label>
							<div class="col-lg-9 col-xs-12">
								<div class="row mb-3">
									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fab fa-facebook-f"></i>
												</div>
											</div>
											<input class="form-control" type="text" name="sm_facebook" id="sm_facebook" placeholder="Facebook">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fab fa-twitter"></i>
												</div>
											</div>
											<input class="form-control" type="text" name="sm_twitter" id="sm_twitter" placeholder="Twitter">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fab fa-instagram"></i>
												</div>
											</div>
											<input class="form-control" type="text" name="sm_instagram" id="sm_instagram" placeholder="Instagram">
										</div>
									</div>
								</div>

								<div class="row mb-3">
									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fab fa-linkedin-in"></i>
												</div>
											</div>
											<input class="form-control" type="text" name="sm_linkedin" id="sm_linkedin" placeholder="LinkedIn">
										</div>
									</div>

									<div class="col-lg-4">
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<i class="fab fa-blogger-b"></i>
												</div>
											</div>
											<input class="form-control" type="text" name="sm_blog" id="sm_blog" placeholder="Blog Pribadi">
										</div>
									</div>

									<div class="col-lg-4">
										<input class="form-control" type="text" name="sm_lainnya" id="sm_lainnya" placeholder="Lainnya">
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Status Tempat Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
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
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Lama Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
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
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Pendidikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="pendidikan" id="pendidikan" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Non">Non</option>
									<option value="SD - SMP">SD - SMP</option>
									<option value="SMA - Diploma">Milik Keluarga</option>
									<option value="S1">S1</option>
									<option value="S2 - S3">S2 - S3</option>
								</select>
								<div class="invalid-feedback">
									Pendidikan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Kontak Darurat <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12">
								<div class="row mb-3">
									<div class="col-lg-4">
										<input class="form-control" type="text" name="kd_nama" id="kd_nama" placeholder="Nama" required>
										<div class="invalid-feedback">
											Nama Kontak Darurat tidak boleh kosong.
										</div>
									</div>

									<div class="col-lg-4">
										<input class="form-control" type="text" name="kd_hubungan" id="kd_hubungan" placeholder="Hubungan" required>
										<div class="invalid-feedback">
											Hubungan Kontak Darurat tidak boleh kosong.
										</div>
									</div>

									<div class="col-lg-4">
										<input class="form-control" type="text" name="kd_no_telp" id="kd_no_telp" placeholder="Nomor Telepon" required>
										<div class="invalid-feedback">
											Nomor Telepon Kontak Darurat tidak boleh kosong.
										</div>
									</div>
								</div>

								<div class="row mb-3">
									<div class="col-lg-12">
										<input class="form-control" type="text" name="kd_alamat" id="kd_alamat" placeholder="Alamat" required>
										<div class="invalid-feedback">
											Alamat Kontak Darurat tidak boleh kosong.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Sumber Penghasilan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="sumber_penghasilan" id="sumber_penghasilan" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Gaji Kerja">Gaji Kerja</option>
									<option value="Hasil Usaha">Hasil Usaha</option>
								</select>
								<div class="invalid-feedback">
									Sumber Penghasilan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<input type="button" class="btn btn-custom-ad" onclick="selanjutnya1()" value="Selanjutnya">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<!-- Form Sumber Penghasilan -->
				<fieldset id="form-2" style="display: none; height: ; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Nama Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>

							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
								<div class="invalid-feedback">
									Nama Perusahaan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Level Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="level_perusahaan" id="level-gaji" style="display: none;" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Start Up">Start Up</option>
									<option value="Go Public">Go Public</option>
									<option value="Lain - lain">Lain - lain</option>
								</select>

								<select class="form-control" name="level_perusahaan" id="level-usaha" style="display: none;" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Perorangan / PD">Perorangan / PD</option>
									<option value="CV">CV</option>
									<option value="PT">PT</option>
								</select>

								<div class="invalid-feedback">
									Level Perusahaan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Alamat Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan" required>
								<div class="invalid-feedback">
									Alamat Perusahaan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">No Telp Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
								<div class="col-lg-6">
									<input class="form-control" type="text" name="no_telp_perusahaan" id="no_telp_perusahaan" placeholder="No Telp Perusahaan" required>
									<div class="invalid-feedback">
										No Telp Perusahaan tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-6" style="padding-right: 0;">
									<input class="form-control" type="text" name="ext" id="ext" placeholder="Ext" required>
									<div class="invalid-feedback">
										Ext tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Website Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="website_perusahaan" id="website_perusahaan" placeholder="Website Perusahaan" required>
								<div class="invalid-feedback">
									Website Perusahaan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Lama Bekerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="lama_bekerja" id="lama_bekerja" placeholder="Lama Bekerja" required>
								<div class="invalid-feedback">
									Lama Bekerja tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<!-- Gaji Kerja -->
					<fieldset id="form-2-gaji" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
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
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Status Kepegawaian <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
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
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jabatan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="jabatan" id="jabatan" placeholder="Jabatan" required>
									<div class="invalid-feedback">
										Jabatan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Level Jabatan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
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
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Gaji THP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="gaji_thp" id="gaji_thp" placeholder="Rp" required>
									<div class="invalid-feedback">
										Gaji THP tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Penghasilan Tambahan</label>
								<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
									<div class="col-lg-6">
										<input class="form-control" type="text" name="penghasilan_tambahan_gk" id="penghasilan_tambahan_gk" placeholder="Rp">
									</div>

									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control" name="sumber_penghasilan_tambahan_gk" id="sumber_penghasilan_tambahan_gk">
											<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
											<option value="Penghasilan Pasangan">Penghasilan Pasangan</option>
											<option value="Hasil Usaha Sampingan">Hasil Usaha Sampingan</option>
											<option value="Lain - Lain">Lain - Lain</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Hasil Usaha -->
					<fieldset id="form-2-usaha" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jumlah Karyawan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control" name="jumlah_karyawan" id="jumlah_karyawan" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="1 - 5">1 - 5</option>
										<option value="5 - 10">5 - 10</option>
										<option value="10 - 25">10 - 25</option>
										<option value="25 atau Lebih">25 atau Lebih</option>
									</select>
									<div class="invalid-feedback">
										Jumlah Karyawan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control" name="jenis_usaha" id="jenis_usaha" onchange="setJenisUsaha()" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="Perdagangan">Perdagangan</option>
										<option value="Jasa">Jasa</option>
										<option value="Manufaktur">Manufaktur</option>
										<option value="Pertanian">Pertanian</option>
									</select>
									<div class="invalid-feedback">
										Jenis Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Omset Usaha => Jasa dan Manufaktur -->
					<fieldset id="omset-usaha" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Omset Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="omset_usaha" id="omset_usaha" placeholder="Rp" required>
									<div class="invalid-feedback">
										Omset Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Hasil Usaha Perdagangan -->
					<fieldset id="form-2-usaha-perdagangan" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">HPP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="hpp" id="hpp" placeholder="Rp" required>
									<div class="invalid-feedback">
										HPP tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Laba Kotor / GPM <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="laba_kotor_gpm" id="laba_kotor_gpm" placeholder="Rp" readonly>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10" id="list-observasi">
								
							</div>
						</div>
					</fieldset>

					<!-- Laba Kotor / HPP => Jasa dan Manufaktur -->
					<fieldset id="laba-kotor" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Laba Kotor / HPP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="laba_kotor" id="laba_kotor" placeholder="Rp" required>
									<div class="invalid-feedback">
										Laba Kotor / HPP tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Biaya - biaya => Perdagangan, Jasa dan Mnufaktur -->
					<fieldset id="biaya-biaya" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Gaji Karyawan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="gaji_karyawan" id="gaji_karyawan" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Gaji Karyawan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Sewa <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="biaya_sewa" id="biaya_sewa" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Sewa tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Umum dan Administrasi <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="biaya_umum" id="biaya_umum" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Umum dan Administrasi tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Rumah Tangga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="biaya_rumah_tangga" id="biaya_rumah_tangga" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Rumah Tangga tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Hasil Usaha Manufaktur -->
					<fieldset id="form-2-usaha-manufaktur" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jumlah Persediaan Barang <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="persediaan_barang" id="persediaan_barang" placeholder="Rp" required>
									<div class="invalid-feedback">
										Jumlah Persediaan Barang tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Hasil Usaha Pertanian -->
					<fieldset id="form-2-usaha-pertanian" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Harga Komoditi per Kilo <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="harga_komoditi" id="harga_komoditi" placeholder="Rp" required>
									<div class="invalid-feedback">
										Harga Komoditi per Kilo tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Hasil per Panen <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="hasil_panen" id="hasil_panen" placeholder="Kg" required>
									<div class="invalid-feedback">
										Hasil per Panen tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Luas Lahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="luas_lahan" id="luas_lahan" placeholder="m&sup2" required>
									<div class="invalid-feedback">
										Luas Lahan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Pupuk <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="biaya_pupuk" id="biaya_pupuk" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Pupuk tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Biaya Tenaga Kerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="biaya_tk" id="biaya_tk" placeholder="Rp" required>
									<div class="invalid-feedback">
										Biaya Tenaga Kerja tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Channel Penjualan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control" name="channel_penjualan" id="channel_penjualan" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="Pembeli Tetap">Pembeli Tetap</option>
										<option value="Retail / Eceran">Retail / Eceran</option>
									</select>
									<div class="invalid-feedback">
										Channel Penjualan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Cara Pembayaran Penjualan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control" name="cara_bayar" id="cara_bayar" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="Cash">Cash / Tunai</option>
										<option value="Credit">Credit / Tempo</option>
									</select>
									<div class="invalid-feedback">
										Cara Pembayaran Penjualan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Utang Piutang => Manufaktur dan Pertanian -->
					<fieldset id="utang-piutang" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Piutang Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="piutang_usaha" id="piutang_usaha" placeholder="Rp" required>
									<div class="invalid-feedback">
										Piutang Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Utang Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="utang_usaha" id="utang_usaha" placeholder="Rp" required>
									<div class="invalid-feedback">
										Utang Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Utang Bank Modal Kerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="utang_bank" id="utang_bank" placeholder="Rp" required>
									<div class="invalid-feedback">
										Utang Bank Modal Kerja tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Penghasilan Tambahan => Perdagangan, Jasa dan Pertanian -->
					<fieldset id="penghasilan-tambahan" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Penghasilan Tambahan</label>
								<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
									<div class="col-lg-6">
										<input class="form-control" type="text" name="penghasilan_tambahan_hu" id="penghasilan_tambahan_hu" placeholder="Rp">
									</div>

									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control" name="sumber_penghasilan_tambahan_hu" id="sumber_penghasilan_tambahan_hu">
											<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
											<option value="Penghasilan Pasangan">Penghasilan Pasangan</option>
											<option value="Hasil Usaha Sampingan">Hasil Usaha Sampingan</option>
											<option value="Lain - Lain">Lain - Lain</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Sarana Prasarana Usaha => Perdagangan, Jasa, Manufaktur dan Pertanian -->
					<fieldset id="sarana-prasarana" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Sarana Prasarana Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="sarana_prasarana" id="sarana_prasarana" placeholder="Rp" required>
									<div class="invalid-feedback">
										Sarana Prasarana Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Observasi GPM -->
					<fieldset id="observasi-gpm" style="display: none;">
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

					<!-- Form Suplier dan Buyer -->
					<fieldset id="suplier-buyer" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-12 labelku">Suplier</label>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<div class="col-lg-12 mb-3">
									<table class="table table-sup" width="100%">
										<thead>
											<tr>
												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Nama Suplier</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">PIC yang dapat dihubungi</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Lama Hubungan Usaha</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Pembelian per Bulan</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Sistem per Bulan</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
												</td>
											</tr>
										</thead>

										<tbody id="list_sup">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-12 labelku">Buyer</label>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<div class="col-lg-12 mb-3">
									<table class="table table-buy" width="100%">
										<thead>
											<tr>
												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Nama Buyer</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">PIC yang dapat dihubungi</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Lama Hubungan Usaha</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Pembelian per Bulan</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Sistem per Bulan</span>
												</td>

												<td class="labelku">
													<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
												</td>
											</tr>
										</thead>

										<tbody id="list_buy">
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</fieldset>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" class="btn btn-cancel-ad" onclick="sebelumnya1()">Sebelumnya</button>
										<input type="button" class="btn btn-custom-ad" onclick="selanjutnya2()" value="Selanjutnya">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<!-- Form Pengajuan Credit -->
				<fieldset id="form-3" style="display: none;  height: 340px; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Plafon Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="plafon_kredit" id="plafon_kredit" placeholder="Rp" required>
								<div class="invalid-feedback">
									Plafon Kredit tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Tenor <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="tenor_debitur" id="tenor_debitur" placeholder="Tenor" required>
								<div class="invalid-feedback">
									Tenor tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Bunga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="bunga" id="bunga" placeholder="% per Tahun" required>
								<div class="invalid-feedback">
									Bunga tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Angsuran</label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="angsuran" id="angsuran" placeholder="Rp" readonly>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Tujuan Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="tujuan_kredit" id="tujuan_kredit" onchange="setTujuanKredit()" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Produktif">Produktif</option>
									<option value="Konsumtif">Konsumtif</option>
								</select>
								<div class="invalid-feedback">
									Tujuan Kredit tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<fieldset id="jenis-kredit" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3" id="jenis-kredit-produktif" style="display: none;">
									<select class="form-control" name="jenis_kredit" id="jenis_kredit_pro" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="Kredit Multiguna">Kredit Multiguna</option>
										<option value="KMK">KMK</option>
										<option value="Kredit Inestasi">Kredit Inestasi</option>
										<option value="Rekening Koran">Rekening Koran</option>
										<option value="Kredit Usaha Rakyat">Kredit Usaha Rakyat</option>
									</select>
									<div class="invalid-feedback">
										Jenis Kredit tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-9 col-xs-12 mb-3" id="jenis-kredit-konsumtif" style="display: none;">
									<select class="form-control" name="jenis_kredit" id="jenis_kredit_kon" required>
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
						</div>
					</fieldset>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" class="btn btn-cancel-ad" onclick="sebelumnya2()">Sebelumnya</button>
										<input type="button" class="btn btn-custom-ad" onclick="selanjutnya3()" value="Selanjutnya">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<!-- Form Data Jaminan -->
				<fieldset id="form-4" style="display: none; height: 340px; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control" name="jenis_jaminan" id="jenis_jaminan" onchange="setJenisJaminan()" required>
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
					</div>

					<!-- Jenis Jaminan, Alamat Jaminan dan Nomor Bukti Kepemilikan -->
					<fieldset id="jaminan-atas" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Bukti Kepemilikan Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-tanah" style="display: none;" onchange="setJaminanTanah()" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="SHM">SHM</option>
										<option value="SHGU">SHGU</option>
										<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
									</select>

									<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-bangunan" style="display: none;" onchange="setJaminanBangunan()" readonly>
										<option value="SHGB" selected="selected">SHGB</option>
									</select>

									<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-tanah-bangunan" style="display: none;" onchange="setJaminanBangunan()" required>
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="SHM">SHM</option>
										<option value="SHGB">SHGB</option>
										<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
									</select>

									<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-kendaraan" style="display: none;" onchange="setJaminanMesin()" readonly>
										<option value="BPKB" selected="selected">BPKB</option>
									</select>

									<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-mesin" style="display: none;" onchange="setJaminanMesin()" readonly>
										<option value="Sertifikat Mesin" selected="selected">Sertifikat Mesin</option>
									</select>

									<div class="invalid-feedback">
										Bukti Kepemilikan Jaminan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Alamat Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="alamat_jaminan" id="alamat_jaminan" placeholder="Alamat Jaminan" required>
									<div class="invalid-feedback">
										Alamat Jaminan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Nomor Bukti Kepemilikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="no_bukti_kepemilikan" id="no_bukti_kepemilikan" placeholder="Nomor Bukti Kepemilikan" required>
									<div class="invalid-feedback">
										Nomor Bukti Kepemilikan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Luas Tanah => Tanah, Bangunan, Tanah dan Bangunan -->
					<fieldset id="luas-tanah" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Luas Tanah <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="luas_tanah" id="luas_tanah" placeholder="m&sup2" required>
									<div class="invalid-feedback">
										Luas Tanah tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Bangunan => Bangunan, Tanah dan Bangunan -->
					<fieldset id="bangunan" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Luas Bangunan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="luas_bangunan" id="luas_bangunan" placeholder="m&sup2" required>
									<div class="invalid-feedback">
										Luas Bangunan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Izin Mendirikan Bangunan (IMB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="imb" id="imb" placeholder="Nomor" required>
									<div class="invalid-feedback">
										Izin Mendirikan Bangunan (IMB) tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Tahun Pembelian dan Nilai Jaminan -->
					<fieldset id="jaminan-bawah" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Tahun Pembelian <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="tahun_pembelina" id="tahun_pembelina" placeholder="Tahun Pembelian" required>
									<div class="invalid-feedback">
										Tahun Pembelian tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Nilai Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control" type="text" name="nilai_jaminan" id="imbnilai_jaminan" placeholder="Rp" required>
									<div class="invalid-feedback">
										Nilai Jaminan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>
					</fieldset>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" class="btn btn-cancel-ad" onclick="sebelumnya3()">Sebelumnya</button>
										<input type="button" class="btn btn-custom-ad" onclick="selanjutnya4()" value="Selanjutnya">
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<!-- Form Unggah Berkas -->
				<fieldset id="form-5" style="display: none; height: 340px; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">KTP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<div class="custom-file mb-3">
									Unggah
									<input type="file" class="custom-file-input berkas-ktp" id="berkas_ktp" name="berkas_ktp" required>
									<label class="custom-file-label label-ktp" for="berkas_ktp">pdf</label>
								</div>
								<div class="invalid-feedback">
									KTP tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" class="btn btn-cancel-ad" onclick="sebelumnya4()">Sebelumnya</button>
										<input type="button" class="btn btn-custom-ad" onclick="selanjutnya5()" value="Selesai">
									</td>
								</tr>
							</table>
						</div>
					</div>
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
					<button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-success" type="button" onclick="tambahObservasi()">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tambah Suplier -->
	<div class="modal fade" id="modal_suplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Suplier</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Suplier</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="nama_suplier" id="nama_suplier" placeholder="Nama Suplier" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="pic_sup" id="pic_sup" placeholder="No Telp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="lama_hubungan_sup" id="lama_hubungan_sup" placeholder="Lama Hubungan Usaha" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="pembelian_perbulan_sup" id="pembelian_perbulan_sup" placeholder="Pembelian per Bulan" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="sistem_perbulan_sup" id="sistem_perbulan_sup" placeholder="Sistem per Bulan" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-success" type="button" onclick="tambahSuplier()">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tambah Buyer -->
	<div class="modal fade" id="modal_buyer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Buyer</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Buyer</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="nama_buyer" id="nama_buyer" placeholder="Nama Buyer" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="pic_buy" id="pic_buy" placeholder="No Telp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="lama_hubungan_buy" id="lama_hubungan_buy" placeholder="Lama Hubungan Usaha" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="pembelian_perbulan_buy" id="pembelian_perbulan_buy" placeholder="Pembelian per Bulan" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control" type="text" name="sistem_perbulan_buy" id="sistem_perbulan_buy" placeholder="Sistem per Bulan" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-success" type="button" onclick="tambahBuyer()">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("form_debitur").classList.add("active");
		document.getElementById("icon_form_deb").style.color = "#F02632";
		document.getElementById("name_form_deb").style.color = "#F02632";
	</script>

	<script id="draft_gpm" type="text/x-handlebars-template">
		<tr class="hapus_list_gpm" id="hapus_list_gpm">
			<td>
				<input class="form-control" type="text" name="nama_barang[]" value="@{{ nama_barang }}">
			</td>

			<td>
				<input class="form-control" type="text" name="harga_beli[]" value="@{{ harga_beli }}">
			</td>

			<td>
				<input class="form-control" type="text" name="harga_jual[]" value="@{{ harga_jual }}">
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

	<script id="draft_sup" type="text/x-handlebars-template">
		<tr class="hapus_list_sup" id="hapus_list_sup">
			<td>
				<input class="form-control" type="text" name="nama_suplier[]" value="@{{ nama_suplier }}">
			</td>

			<td>
				<input class="form-control" type="text" name="pic_sup[]" value="@{{ pic_sup }}">
			</td>

			<td>
				<input class="form-control" type="text" name="lama_hubungan_sup[]" value="@{{ lama_hubungan_sup }}">
			</td>

			<td>
				<input class="form-control" type="text" name="pembelian_perbulan_sup[]" value="@{{ pembelian_perbulan_sup }}">
			</td>

			<td>
				<input class="form-control" type="text" name="sistem_perbulan_sup[]" value="@{{ sistem_perbulan_sup }}">
			</td>

			<td align="center">
				<button id="hapus_sup" class="btn btn-custom" onclick="hapusSuplier()">
					<span class="icon1 text-white">
						<i class="fas fa-trash-alt"></i>
					</span>
				</button>
			</td>
		</tr>
	</script>

	<script id="draft_buyer" type="text/x-handlebars-template">
		<tr class="hapus_list_buy" id="hapus_list_buy">
			<td>
				<input class="form-control" type="text" name="nama_buyer[]" value="@{{ nama_buyer }}">
			</td>

			<td>
				<input class="form-control" type="text" name="pic_buy[]" value="@{{ pic_buy }}">
			</td>

			<td>
				<input class="form-control" type="text" name="lama_hubungan_buy[]" value="@{{ lama_hubungan_buy }}">
			</td>

			<td>
				<input class="form-control" type="text" name="pembelian_perbulan_buy[]" value="@{{ pembelian_perbulan_buy }}">
			</td>

			<td>
				<input class="form-control" type="text" name="sistem_perbulan_buy[]" value="@{{ sistem_perbulan_buy }}">
			</td>

			<td align="center">
				<button id="hapus_buy" class="btn btn-custom" onclick="hapusBuyer()">
					<span class="icon1 text-white">
						<i class="fas fa-trash-alt"></i>
					</span>
				</button>
			</td>
		</tr>
	</script>

	<script src="js/form_debitur.js"></script>
  	<script src="js/form_debitur_berkas.js"></script>

<?php include "footer.php"; ?>