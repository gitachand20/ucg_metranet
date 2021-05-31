<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi_v1.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg"></i>
			</a>
			Form Input Debitur Sales Officer V1
		</h1>
	</div>

	<div class="row">
		<div class="col-lg-12 mb-4">
			<div class="f1-steps">
				<div class="f1-progress">
					<div class="f1-progress-line" data-now-value="10" data-number-of-steps="2" style="width: 12.5%;"></div>
				</div>

				<div id="page1" class="f1-step-v1 active col-12">
					<div class="f1-step-icon">1</div>
					<span class="f1-step-ket1-v1" id="ket-1">Data Diri</span>
				</div>

				<div id="page2" class="f1-step-v1 col-12">
					<div class="f1-step-icon">2</div>
					<span class="f1-step-ket2-v1" id="ket-2">Sumber Penghasilan</span>
					<span class="f1-step-ket21-v1 d-none" id="ket-21">Gaji Kerja</span>
					<span class="f1-step-ket22-v1 d-none" id="ket-22">Hasil Usaha</span>
				</div>

				<div id="page3" class="f1-step-v1 col-12">
					<div class="f1-step-icon">3</div>
					<span class="f1-step-ket3-v1" id="ket-3">Pengajuan Kredit</span>
				</div>

				<div id="page4" class="f1-step-v1 col-12">
					<div class="f1-step-icon">4</div>
					<span class="f1-step-ket4-v1" id="ket-4">Data Jaminan</span>
				</div>

				<!-- <div id="page5" class="f1-step col-12">
					<div class="f1-step-icon">5</div>
					<span class="f1-step-ket5" id="ket-5">Unggah Berkas</span>
					<span class="f1-step-ket51" id="ket-51">Terkait</span>
				</div> -->
			</div>

			<div class="row mb-4">
				<div class="col-lg-1"></div>
				<div class="col-lg-10">
					<table width="100%">
						<tr>
							<td width="46%"></td>

							<td width="17%" style="padding: 0px 10px;">
								<a href="#" id="btn-observasi" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_observasi" style="width: 100%; display: none;">
									<span class="icon1 text-white">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text font-weight-bold">Tambah Barang</span>
								</a>
							</td>

							<td width="19%" style="padding: 0px 10px;">
								<a href="#"  id="btn-sup" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_suplier" style="width: 100%; display: none;">
									<span class="icon1 text-white">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text font-weight-bold">Tambah Pemasok</span>
								</a>
							</td>

							<td width="18%" style="padding: 0px 10px;">
								<a href="#" id="btn-buy" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_buyer" style="width: 100%; display: none">
									<span class="icon1 text-white">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text font-weight-bold">Tambah Pembeli</span>
								</a>

								<a href="#" id="btn-jaminan" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_jaminan" style="width: 100%; display: none;">
									<span class="icon1 text-white">
										<i class="fas fa-plus"></i>
									</span>
									<span class="text font-weight-bold">Tambah Jaminan</span>
								</a>
							</td>
						</tr>
					</table>

					<table width="100%" id="ket-unggah-berkas" style="display: none;">
						<tr>
							<td>
								<span style="color: #ff0000; font-weight: bold; font-size: 10pt;">Silakan unggah berkas dengan tipe file 'PDF' atau 'JPG/JPEG' dan ukuran file maksimal 5MB</span>
							</td>
						</tr>
					</table>
				</div>
			</div>

			<form name="form_input_debitur" id="form_input_debitur" method="POST" action="hasil.php" enctype="multipart/form-data" autocomplete="off" novalidate>

				<!-- Form Data Diri -->
				<fieldset id="form-1" style="display: block; height: 340px; overflow: auto; overflow-x: hidden;">
					<div class="row" style="margin-top: 5px;">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Nama <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
								<div class="col-lg-4">
									<input class="form-control data-diri" type="text" name="nama_depan" id="nama_depan" placeholder="Nama Depan" onkeypress="return alphaOnlyNS(event)" autocomplete="off">
									<div class="invalid-feedback">
										Nama Depan tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-4">
									<input class="form-control data-diri" type="text" name="nama_tengah" id="nama_tengah" placeholder="Nama Tengah" onkeypress="return alphaOnlyNS(event)" autocomplete="off">
									<div class="invalid-feedback">
										Nama Tengah tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-4" style="padding-right: 0;">
									<input class="form-control data-diri" type="text" name="nama_belakang" id="nama_belakang" placeholder="Nama Belakang" onkeypress="return alphaOnlyNS(event)" autocomplete="off">
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
								<input class="form-control data-diri" type="text" name="nama_ibu" id="nama_ibu" placeholder="Nama Gadis Ibu Kandung" onkeypress="return alphaOnly(event)" autocomplete="off">
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
								<input class="form-control data-diri" type="text" name="nik" id="nik" placeholder="NIK" minlength="16" maxlength="16" onkeypress="return numOnly(event)" onchange="cekNik()" autocomplete="off">
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
							<div class="row col-lg-9 col-xs-12">
								<div class="col-lg-3 col-sm-6 col-xs-12 mb-3">
									<div class="custom-control custom-radio">
										<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_m" value="male">
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
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Tanggal Lahir <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control datepicker-dso data-diri" type="text" name="tanggal_lahir" id="tanggal_lahir" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off">
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
								<select class="form-control data-diri" name="status_perkawinan" id="status_perkawinan" onchange="setStatusPerkawinan()">
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Belum Menikah">Belum Menikah</option>
									<option value="Menikah">Menikah</option>
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
								<select class="form-control data-diri" name="jumlah_tanggungan" id="jumlah_tanggungan">
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
								<input class="form-control data-diri" type="text" name="alamat_ktp" id="alamat_ktp" placeholder="Alamat KTP" autocomplete="off">
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
								<input class="form-control data-diri" type="text" name="alamat_domisili" id="alamat_domisili" placeholder="Alamat Tempat Tinggal" autocomplete="off">
								<div class="invalid-feedback">
									Alamat Tempat Tinggal tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">No Telp</label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control" type="text" name="no_telp" id="no_telp" placeholder="No Telp" autocomplete="off">
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
								<input class="form-control data-diri" type="text" name="no_hp" id="no_hp" placeholder="No HP" autocomplete="off">
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

								<div class="row mb-3">
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
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Status Tempat Tinggal <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control data-diri" name="status_tempat_tinggal" id="status_tempat_tinggal">
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
								<select class="form-control data-diri" name="lama_tinggal" id="lama_tinggal" required>
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
								<select class="form-control data-diri" name="pendidikan" id="pendidikan">
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
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Kontak Darurat <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12">
								<div class="row mb-3">
									<div class="col-lg-4">
										<input class="form-control data-diri" type="text" name="kd_nama" id="kd_nama" placeholder="Nama" onkeypress="return alphaOnly(event)" autocomplete="off">
										<div class="invalid-feedback">
											Nama Kontak Darurat tidak boleh kosong.
										</div>
									</div>

									<div class="col-lg-4">
										<input class="form-control data-diri" type="text" name="kd_hubungan" id="kd_hubungan" placeholder="Hubungan" onkeypress="return alphaOnly(event)" autocomplete="off">
										<div class="invalid-feedback">
											Hubungan Kontak Darurat tidak boleh kosong.
										</div>
									</div>

									<div class="col-lg-4">
										<input class="form-control data-diri" type="text" name="kd_no_telp" id="kd_no_telp" placeholder="Nomor Telepon" autocomplete="off">
										<div class="invalid-feedback">
											Nomor Telepon Kontak Darurat tidak boleh kosong.
										</div>
									</div>
								</div>

								<div class="row mb-3">
									<div class="col-lg-12">
										<input class="form-control data-diri" type="text" name="kd_alamat" id="kd_alamat" placeholder="Alamat" autocomplete="off">
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
								<select class="form-control data-diri" name="sumber_penghasilan" id="sumber_penghasilan" onchange="setSumberPenghasilan(this)">
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
										<input type="button" id="btnNext1" class="btn btn-custom-dis" onclick="selanjutnya1()" value="Selanjutnya" >
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
								<input class="form-control sp-all" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan">
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
							<div class="col-lg-9 col-xs-12 mb-3" id="level-gaji" style="display: none;">
								<select class="form-control" name="level_perusahaan_gaji" id="level_perusahaan_gaji">
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="Start Up">Start Up</option>
									<option value="Go Public">Go Public</option>
									<option value="Lain - lain">Lain - lain</option>
								</select>

								<div class="invalid-feedback">
									Level Perusahaan tidak boleh kosong.
								</div>
							</div>

							<div class="col-lg-9 col-xs-12 mb-3" id="level-usaha" style="display: none;">
								<select class="form-control" name="level_perusahaan_usaha" id="level_perusahaan_usaha">
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
								<input class="form-control sp-all" type="text" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan">
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
									<input class="form-control sp-all" type="text" name="no_telp_perusahaan" id="no_telp_perusahaan" placeholder="No Telp Perusahaan">
									<div class="invalid-feedback">
										No Telp Perusahaan tidak boleh kosong.
									</div>
								</div>

								<div class="col-lg-6" style="padding-right: 0;">
									<input class="form-control" type="text" name="ext" id="ext" placeholder="Ext" onkeypress="return numOnly(event)">
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Website Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<input class="form-control sp-all" type="text" name="website_perusahaan" id="website_perusahaan" placeholder="Website Perusahaan" onchange="cekWebsite()">
								<div class="invalid-feedback">
									Website Perusahaan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<!-- Gaji Kerja -->
					<fieldset id="form-2-gaji" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Lama Bekerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
									<div class="col-lg-6">
										<input class="form-control sp-all" type="number" name="tahun_kerja" id="tahun_kerja" placeholder="Tahun" min="0">
										<div class="invalid-feedback">
											Tahun Lama Bekerja tidak boleh kosong.
										</div>
									</div>
									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control text_field" name="bulan_kerja" id="bulan_kerja" required>
											<option value="" disabled="disabled" selected="selected">Bulan</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
										</select>
										<div class="invalid-feedback">
											Bulan Lama Bekerja tidak boleh kosong.
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control sp-all" name="jenis_usaha_gaji" id="jenis_usaha_gaji">
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
									<select class="form-control sp-all" name="status_kepegawaian" id="status_kepegawaian">
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
									<input class="form-control sp-all" type="text" name="jabatan" id="jabatan" placeholder="Jabatan">
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
									<select class="form-control sp-all" name="level_jabatan" id="level_jabatan">
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
									<input class="form-control sp-all" type="text" name="gaji_thp" id="gaji_thp" placeholder="Rp">
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
										<input class="form-control sp-all" type="text" name="penghasilan_tambahan_gk" id="penghasilan_tambahan_gk" placeholder="Rp" onchange="setPTGaji()">
									</div>

									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control sp-all" name="sumber_penghasilan_tambahan_gk" id="sumber_penghasilan_tambahan_gk" onchange="setPTSGaji()">
											<option value="" selected="selected">Pilih Opsi</option>
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
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Lama Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="row col-lg-9 col-xs-12 mb-3" style="padding-right: 0;">
									<div class="col-lg-6">
										<input class="form-control sp-all" type="number" name="tahun_usaha" id="tahun_usaha" placeholder="Tahun" min="0">
										<div class="invalid-feedback">
											Tahun Lama Usaha tidak boleh kosong.
										</div>
									</div>
									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control text_field" name="bulan_usaha" id="bulan_usaha" required>
											<option value="" disabled="disabled" selected="selected">Bulan</option>
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
										</select>
										<div class="invalid-feedback">
											Bulan Lama Usaha tidak boleh kosong.
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Status Tempat Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control sp-all" name="status_tempat_usaha" id="status_tempat_usaha">
										<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
										<option value="Milik Sendiri">Milik Sendiri</option>
										<option value="Milik Orang Tua">Milik Orang Tua</option>
										<option value="Milik Keluarga">Milik Keluarga</option>
										<option value="Sewa">Sewa</option>
										<option value="Meminjam">Meminjam</option>
									</select>
									<div class="invalid-feedback">
										Status Tempat Usaha tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jumlah Karyawan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<select class="form-control sp-all" name="jumlah_karyawan" id="jumlah_karyawan">
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
									<select class="form-control sp-all" name="jenis_usaha" id="jenis_usaha" onchange="setJenisUsaha()">
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

					<!-- Omset Usaha => Perdaganangan, Jasa dan Manufaktur -->
					<fieldset id="omset-usaha" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Omset Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control sp-all" type="text" name="omset_usaha" id="omset_usaha" placeholder="Rp" onchange="hitungLabaKotorGpm()">
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
									<input class="form-control sp-all" type="text" name="hpp" id="hpp" placeholder="Rp" onchange="hitungLabaKotorGpm()">
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
									<input class="form-control sp-all" type="text" name="laba_kotor_gpm" id="laba_kotor_gpm" placeholder="Rp" readonly>
								</div>
							</div>
						</div>
					</fieldset>

					<!-- Laba Kotor => Jasa dan Manufaktur -->
					<fieldset id="laba-kotor" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Laba Kotor <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control sp-all" type="text" name="laba_kotor" id="laba_kotor" placeholder="Rp">
									<div class="invalid-feedback">
										Laba Kotor tidak boleh kosong.
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
									<input class="form-control sp-all" type="text" name="gaji_karyawan" id="gaji_karyawan" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="biaya_sewa" id="biaya_sewa" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="biaya_umum" id="biaya_umum" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="biaya_rumah_tangga" id="biaya_rumah_tangga" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="persediaan_barang" id="persediaan_barang" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="harga_komoditi" id="harga_komoditi" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="hasil_panen" id="hasil_panen" placeholder="Kg" onkeypress="return numOnly(event)">
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
									<input class="form-control sp-all" type="text" name="luas_lahan" id="luas_lahan" placeholder="m&sup2" onkeypress="return numOnly(event)">
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
									<input class="form-control sp-all" type="text" name="biaya_pupuk" id="biaya_pupuk" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="biaya_tk" id="biaya_tk" placeholder="Rp">
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
									<select class="form-control sp-all" name="channel_penjualan" id="channel_penjualan">
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
									<select class="form-control sp-all" name="cara_bayar" id="cara_bayar">
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

					<!-- Utang Piutang => Perdagangan, Manufaktur dan Pertanian -->
					<fieldset id="utang-piutang" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Piutang Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control sp-all" type="text" name="piutang_usaha" id="piutang_usaha" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="utang_usaha" id="utang_usaha" placeholder="Rp">
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
									<input class="form-control sp-all" type="text" name="utang_bank" id="utang_bank" placeholder="Rp">
									<div class="invalid-feedback">
										Utang Bank Modal Kerja tidak boleh kosong.
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
									<input class="form-control sp-all" type="text" name="sarana_prasarana" id="sarana_prasarana" placeholder="Rp">
									<div class="invalid-feedback">
										Sarana Prasarana Usaha tidak boleh kosong.
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
										<input class="form-control sp-all" type="text" name="penghasilan_tambahan_hu" id="penghasilan_tambahan_hu" placeholder="Rp" onchange="setPTUsaha()">
									</div>

									<div class="col-lg-6" style="padding-right: 0;">
										<select class="form-control sp-all" name="sumber_penghasilan_tambahan_hu" id="sumber_penghasilan_tambahan_hu" onchange="setPTSUsaha()">
											<option value="" selected="selected">Pilih Opsi</option>
											<option value="Penghasilan Pasangan">Penghasilan Pasangan</option>
											<option value="Hasil Usaha Sampingan">Hasil Usaha Sampingan</option>
											<option value="Lain - Lain">Lain - Lain</option>
										</select>
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
								<label class="col-lg-12 labelku">Pemasok</label>
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
													<span class="mb-2" style="font-size: 10pt;">Nama Pemasok</span>
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
								<label class="col-lg-12 labelku">Pembeli</label>
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
													<span class="mb-2" style="font-size: 10pt;">Nama Pembeli</span>
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
										<input type="button" id="btnNext2" class="btn btn-custom-dis" onclick="selanjutnya2()" value="Selanjutnya" >
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
								<input class="form-control pengajuan" type="text" name="plafon_kredit" id="plafon_kredit" placeholder="Rp" onchange="hitungAngsuran()" autocomplete="off">
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
								<select class="form-control pengajuan" name="tenor_debitur" id="tenor_debitur" onchange="hitungAngsuran()">
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="12">12</option>
									<option value="24">24</option>
									<option value="36">36</option>
									<option value="60">60</option>
									<option value="300">300</option>
								</select>
								<!-- <input class="form-control pengajuan" type="number" name="tenor_debitur" id="tenor_debitur" placeholder="Tenor" min="1" onkeypress="return numOnly(event)" onchange="hitungAngsuran()" autocomplete="off" required> -->
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
								<input class="form-control pengajuan" type="number" name="bunga" id="bunga" placeholder="% per Tahun" min="1" max="100" onkeypress="return numOnly(event)" onchange="hitungAngsuran()" autocomplete="off">
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
								<input class="form-control" type="text" name="angsuran" id="angsuran" placeholder="Rp 0" readonly>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<label class="col-lg-3 col-xs-12 col-form-label labelku">Tujuan Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-9 col-xs-12 mb-3">
								<select class="form-control pengajuan" name="tujuan_kredit" id="tujuan_kredit" onchange="setTujuanKredit()">
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

					<!-- Jenis Kredit Produktif / Konsumtif -->
					<fieldset id="jenis-kredit" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Jenis Kredit <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3" id="jenis-kredit-produktif" style="display: none;">
									<select class="form-control pengajuan" name="jenis_kredit_pro" id="jenis_kredit_pro" onchange="cekProduktif()">
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

								<div class="col-lg-9 col-xs-12 mb-3" id="jenis-kredit-konsumtif" style="display: none;">
									<select class="form-control pengajuan" name="jenis_kredit_kon" id="jenis_kredit_kon">
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

					<!-- Rencana Anggaran Biaya (RAB) => Kredit Investasi -->
					<fieldset id="ki-rab" style="display: none;">
						<div class="row">
							<div class="col-lg-1"></div>
							<div class="row col-lg-10">
								<label class="col-lg-3 col-xs-12 col-form-label labelku">Rencana Anggaran Biaya (RAB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
								<div class="col-lg-9 col-xs-12 mb-3">
									<input class="form-control pengajuan" type="text" name="rab" id="rab" placeholder="Rp">
									<div class="invalid-feedback">
										Rencana Anggaran Biaya (RAB) tidak boleh kosong.
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
										<input type="button" id="btnNext3" class="btn btn-custom-dis" onclick="selanjutnya3()" value="Selanjutnya" >
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>

				<!-- Form Data Jaminan -->
				<fieldset id="form-4" style="display: none; height: 300px; overflow: auto; overflow-x: hidden;">
					<table class="table table-jaminan" width="100%">
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

								<td class="labelku" align="center" width="100">
									<span class="mb-2" style="font-size: 10pt;">Luas Tanah (m<sup>2</sup>)</span>
								</td>

								<td class="labelku" align="center" width="100">
									<span class="mb-2" style="font-size: 10pt;">Luas Bangunan (m<sup>2</sup>)</span>
								</td>

								<td class="labelku" align="center">
									<span class="mb-2" style="font-size: 10pt;">IMB</span>
								</td>

								<td class="labelku" align="center" width="110">
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
					</table>

					<!-- <table class="table-jaminan" width="100%">
						<tbody id="list_jaminan">
							
						</tbody>
					</table> -->

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" class="btn btn-cancel-ad" onclick="sebelumnya3()">Sebelumnya</button>
										<input type="submit" id="btnNext4" class="btn btn-custom-dis" value="Selesai" >
									</td>
								</tr>
							</table>
						</div>
					</div>
				</fieldset>



				<!-- Form Unggah Berkas -->
				<fieldset id="form-5" style="display: none; height: 315px; overflow: auto; overflow-x: hidden;">
					<!-- Data Diri -->
					<div class="row mb-3">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<fieldset class="p-1" style="border: 2px solid #e3e6f0;">
								<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Data Diri</legend>
								<div class="row col-lg-12">
									<label class="col-lg-3 col-xs-12 col-form-label">KTP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
									<div class="col-lg-9 col-xs-12 mb-2">
										<div class="custom-file">
											Unggah
											<input type="file" class="custom-file-input berkas-ktp" id="berkas_ktp" name="berkas_ktp" accept="application/pdf, image/jpeg">
											<label class="custom-file-label label-ktp" for="berkas_ktp"></label>
											<div class="invalid-feedback-custom" id="file_error_ktp" style="margin-top: -10px; display: none;"></div>
											<div class="invalid-feedback" id="invalid_ktp" style="margin: -10px 0 0 0;">
												Berkas KTP tidak boleh kosong.
											</div>
										</div>
									</div>
								</div>

								<div class="row col-lg-12">
									<label class="col-lg-3 col-xs-12 col-form-label">Akta Kelahiran <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
									<div class="col-lg-9 col-xs-12 mb-2">
										<div class="custom-file">
											Unggah
											<input type="file" class="custom-file-input berkas-akta-kelahiran" id="berkas_akta_kelahiran" name="berkas_akta_kelahiran" accept="application/pdf, image/jpeg">
											<label class="custom-file-label label-akta-kelahiran" for="berkas_akta_kelahiran"></label>
											<div class="invalid-feedback-custom" id="file_error_akta_kelahiran" style="margin-top: -10px; display: none;"></div>
											<div class="invalid-feedback"  id="invalid_akta_kelahiran" style="margin: -10px 0 0 0;">
												Berkas Akta Kelahiran tidak boleh kosong.
											</div>
										</div>
									</div>
								</div>

								<!-- Akta Nikah -->
								<fieldset id="b-akta-nikah" style="display: none;">
									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">Akta Nikah <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-akta-nikah" id="berkas_akta_nikah" name="berkas_akta_nikah" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-akta-nikah" for="berkas_akta_nikah"></label>
												<div class="invalid-feedback-custom" id="file_error_akta_nikah" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback"  id="invalid_akta_nikah" style="margin: -10px 0 0 0;">
													Berkas Akta Nikah tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>
								</fieldset>

								<div class="row col-lg-12">
									<label class="col-lg-3 col-xs-12 col-form-label">Kartu Keluarga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
									<div class="col-lg-9 col-xs-12 mb-2">
										<div class="custom-file">
											Unggah
											<input type="file" class="custom-file-input berkas-kk" id="berkas_kk" name="berkas_kk" accept="application/pdf, image/jpeg">
											<label class="custom-file-label label-kk" for="berkas_kk"></label>
											<div class="invalid-feedback-custom" id="file_error_kk" style="margin-top: -10px; display: none;"></div>
											<div class="invalid-feedback"  id="invalid_kk" style="margin: -10px 0 0 0;">
												Berkas Kartu Keluarga tidak boleh kosong.
											</div>
										</div>
									</div>
								</div>

								<div class="row col-lg-12">
									<label class="col-lg-3 col-xs-12 col-form-label">Ijazah <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
									<div class="col-lg-9 col-xs-12 mb-2">
										<div class="custom-file">
											Unggah
											<input type="file" class="custom-file-input berkas-ijazah" id="berkas_ijazah" name="berkas_ijazah" accept="application/pdf, image/jpeg">
											<label class="custom-file-label label-ijazah" for="berkas_ijazah"></label>
											<div class="invalid-feedback-custom" id="file_error_ijazah" style="margin-top: -10px; display: none;"></div>
											<div class="invalid-feedback"  id="invalid_ijazah" style="margin: -10px 0 0 0;">
												Berkas Ijazah tidak boleh kosong.
											</div>
										</div>
									</div>
								</div>	
							</fieldset>
						</div>
					</div>

					<!-- Sumber Penghasilan Gaji Kerja -->
					<fieldset id="b-sp-gaji" style="display: none;">
						<div class="row mb-3">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<fieldset class="p-1" style="margin-top: 5px; border: 2px solid #e3e6f0;">
									<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Sumber Penghasilan Gaji Kerja</legend>
									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">Slip Gaji <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-slip-gaji" id="berkas_slip_gaji" name="berkas_slip_gaji" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-slip-gaji" for="berkas_slip_gaji"></label>
												<div class="invalid-feedback-custom" id="file_error_slip_gaji" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_slip_gaji" style="margin: -10px 0 0 0;">
													Berkas Slip Gaji tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<fieldset id="b-pt-gaji" style="display: none;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Bukti Penghasilan Tambahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-penghasilan-tambahan-gaji" id="berkas_penghasilan_tambahan_gaji" name="berkas_penghasilan_tambahan_gaji" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-penghasilan-tambahan-gaji" for="berkas_penghasilan_tambahan_gaji"></label>
													<div class="invalid-feedback-custom" id="file_error_penghasilan_tambahan_gaji" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_penghasilan_tambahan_gaji" style="margin: -10px 0 0 0;">
														Bukti Penghasilan Tambahan tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</fieldset>
							</div>
						</div>
					</fieldset>

					<!-- Sumber Penghasilan Hasil Usaha -->
					<fieldset id="b-sp-hasil" style="display: none;">
						<div class="row mb-3">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<fieldset class="p-1" style="margin-top: 5px; border: 2px solid #e3e6f0;">
									<legend class="w-auto labelku" id="legend-hasil-usaha" style="font-size: 13pt; padding: 0 10px;"></legend>
									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">SIUP / NIB <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-siup" id="berkas_siup" name="berkas_siup" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-siup" for="berkas_siup"></label>
												<div class="invalid-feedback-custom" id="file_error_siup" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_siup" style="margin: -10px 0 0 0;">
													Berkas SIUP / NIB tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">HO (Izin Gangguan) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-ho" id="berkas_ho" name="berkas_ho" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-ho" for="berkas_ho"></label>
												<div class="invalid-feedback-custom" id="file_error_ho" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_ho" style="margin: -10px 0 0 0;">
													Berkas HO (Izin Gangguan) tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">NPWP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-npwp" id="berkas_npwp" name="berkas_npwp" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-npwp" for="berkas_npwp"></label>
												<div class="invalid-feedback-custom" id="file_error_npwp" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_npwp" style="margin: -10px 0 0 0;">
													Berkas NPWP tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">Akta Pendirian / Perubahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-akta-pendirian" id="berkas_akta_pendirian" name="berkas_akta_pendirian" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-akta-pendirian" for="berkas_akta_pendirian"></label>
												<div class="invalid-feedback-custom" id="file_error_akta_pendirian" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_akta_pendirian" style="margin: -10px 0 0 0;">
													Berkas Akta Pendirian / Perubahan tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">Laporan Keuangan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-lap-keuangan" id="berkas_lap_keuangan" name="berkas_lap_keuangan" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-lap-keuangan" for="berkas_lap_keuangan"></label>
												<div class="invalid-feedback-custom" id="file_error_lap_keuangan" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_lap_keuangan" style="margin: -10px 0 0 0;">
													Berkas Laporan Keuangan tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>

									<!-- Mutasi Rekening Koran dan Kepemilikan Lahan => Pertanian -->
									<fieldset id="b-pertanian" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Mutasi Rekening Koran <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-rekening-koran" id="berkas_rekening_koran" name="berkas_rekening_koran" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-rekening-koran" for="berkas_rekening_koran"></label>
													<div class="invalid-feedback-custom" id="file_error_rekening_koran" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_rekening_koran" style="margin: -10px 0 0 0;">
														Berkas Mutasi Rekening Koran tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>

										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Bukti Kepemilikan Lahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-kepemilikan-lahan" id="berkas_kepemilikan_lahan" name="berkas_kepemilikan_lahan" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-kepemilikan-lahan" for="berkas_kepemilikan_lahan"></label>
													<div class="invalid-feedback-custom" id="file_error_kepemilikan_lahan" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_kepemilikan_lahan" style="margin: -10px 0 0 0;">
														Berkas Kepemilikan Lahan tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<!-- Biaya Sewa => Perdagangan, Jasa, Manufaktur -->
									<fieldset id="b-biaya-sewa" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Bukti Biaya Sewa <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-biaya-sewa" id="berkas_biaya_sewa" name="berkas_biaya_sewa" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-biaya-sewa" for="berkas_biaya_sewa"></label>
													<div class="invalid-feedback-custom" id="file_error_biaya_sewa" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_biaya_sewa" style="margin: -10px 0 0 0;">
														Berkas Biaya Sewa tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<!-- Biaya Rumah Tangga => Perdagangan, Jasa -->
									<fieldset id="b-biaya-rt" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Bukti Biaya Rumah Tangga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-biaya-rt" id="berkas_biaya_rt" name="berkas_biaya_rt" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-biaya-rt" for="berkas_biaya_rt"></label>
													<div class="invalid-feedback-custom" id="file_error_biaya_rt" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_biaya_rt" style="margin: -10px 0 0 0;">
														Berkas Biaya Rumah Tangga tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<!-- Nota Penjualan => Perdagangan, Manufaktur, Pertanian -->
									<fieldset id="b-nota-penjualan" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Nota Penjualan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-nota-penjualan" id="berkas_nota_penjualan" name="berkas_nota_penjualan" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-nota-penjualan" for="berkas_nota_penjualan"></label>
													<div class="invalid-feedback-custom" id="file_error_nota_penjualan" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_nota_penjualan" style="margin: -10px 0 0 0;">
														Berkas Nota Penjualan tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<!-- Tagihan => Perdagangan, Manufaktur, Pertanian -->
									<fieldset id="b-tagihan" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Tagihan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-tagihan" id="berkas_tagihan" name="berkas_tagihan" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-tagihan" for="berkas_tagihan"></label>
													<div class="invalid-feedback-custom" id="file_error_tagihan" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_tagihan" style="margin: -10px 0 0 0;">
														Berkas Tagihan tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>

									<!-- Penghasilan Tambahan => Perdagangan, Jasa, Pertanian -->
									<fieldset id="b-penghasilan-tambahan" style="display: block;">
										<div class="row col-lg-12">
											<label class="col-lg-3 col-xs-12 col-form-label">Bukti Penghasilan Tambahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
											<div class="col-lg-9 col-xs-12 mb-2">
												<div class="custom-file">
													Unggah
													<input type="file" class="custom-file-input berkas-penghasilan-tambahan" id="berkas_penghasilan_tambahan" name="berkas_penghasilan_tambahan" accept="application/pdf, image/jpeg">
													<label class="custom-file-label label-penghasilan-tambahan" for="berkas_penghasilan_tambahan"></label>
													<div class="invalid-feedback-custom" id="file_error_penghasilan_tambahan" style="margin-top: -10px; display: none;"></div>
													<div class="invalid-feedback" id="invalid_penghasilan_tambahan" style="margin: -10px 0 0 0;">
														Berkas Bukti Penghasilan Tambahan tidak boleh kosong.
													</div>
												</div>
											</div>
										</div>
									</fieldset>
								</fieldset>
							</div>
						</div>
					</fieldset>

					<!-- Pengajuan Kredit -->
					<fieldset id="pk-rab" style="display: none;">
						<div class="row mb-3">
							<div class="col-lg-1"></div>
							<div class="col-lg-10">
								<fieldset class="p-1" style="margin-top: 5px; border: 2px solid #e3e6f0;">
									<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Pengajuan Kredit</legend>
									<div class="row col-lg-12">
										<label class="col-lg-3 col-xs-12 col-form-label">RAB <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-rab" id="berkas_rab" name="berkas_rab" accept="application/pdf, image/jpeg">
												<label class="custom-file-label label-rab" for="berkas_rab"></label>
												<div class="invalid-feedback-custom" id="file_error_rab" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_rab" style="margin: -10px 0 0 0;">
													Berkas RAB tidak boleh kosong.
												</div>
											</div>
										</div>
									</div>
								</fieldset>
							</div>
						</div>
					</fieldset>

					<!-- Data Jaminan -->
					<div class="row mb-3">
						<div class="col-lg-1"></div>
						<div class="col-lg-10">
							<fieldset class="p-1" style="margin-top: 5px; border: 2px solid #e3e6f0;">
								<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Data Jaminan</legend>
								<fieldset id="list_berkas_jaminan">
									<input type="hidden" id="jml_jaminan" name="jml_jaminan" value="">
									<!-- <div class="row col-lg-12 berkas-jaminan">
										<label class="col-lg-3 col-xs-12 col-form-label"><span>Bukti Kepemilikan Jaminan</span> <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
										<div class="col-lg-9 col-xs-12 mb-2">
											<div class="custom-file">
												Unggah
												<input type="file" class="custom-file-input berkas-kepemilikan-jaminan" id="berkas_kepemilikan_jaminan" name="berkas_kepemilikan_jaminan" multiple required>
												<label class="custom-file-label label-kepemilikan-jaminan" for="berkas_kepemilikan_jaminan"></label>
												<div class="invalid-feedback-custom" id="file_error_kepemilikan_jaminan" style="margin-top: -10px; display: none;"></div>
												<div class="invalid-feedback" id="invalid_kepemilikan_jaminan" style="margin: -10px 0 0 0;">
													Berkas Kepemilikan Jaminan tidak boleh kosong.
												</div>
											</div>
										</div>
									</div> -->
								</fieldset>
							</fieldset>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-lg-1"></div>
						<div class="row col-lg-10">
							<table width="100%">
								<tr>
									<td align="right">
										<button type="button" id="btnSeb4" class="btn btn-cancel-ad" onclick="sebelumnya4()">Sebelumnya</button>
										<input type="submit" id="btnFinish" class="btn btn-custom-dis" name="simpan" value="Selesai" disabled="disabled">
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
		<div class="modal-dialog" role="document" style="max-width: 700px;">
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
							<input class="form-control add-observasi" type="text" name="nama_barang" id="nama_barang" placeholder="Nama Barang" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Beli</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-observasi" type="text" name="harga_beli" id="harga_beli" placeholder="Rp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Jual</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-observasi" type="text" name="harga_jual" id="harga_jual" placeholder="Rp" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-custom-dis" id="btnAddObservasi" type="button" onclick="tambahObservasi()" disabled="disabled">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tambah Suplier -->
	<div class="modal fade" id="modal_suplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 700px;">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Pemasok</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Pemasok</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-sup" type="text" name="nama_suplier" id="nama_suplier" placeholder="Nama Pemasok" onkeypress="return alphaOnly(event)" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-sup" type="text" name="pic_sup" id="pic_sup" placeholder="No Telp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-sup" type="text" name="lama_hubungan_sup" id="lama_hubungan_sup" placeholder="Tahun" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-sup" type="text" name="pembelian_perbulan_sup" id="pembelian_perbulan_sup" placeholder="Unit" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-sup" type="text" name="sistem_perbulan_sup" id="sistem_perbulan_sup" placeholder="Bulan" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-custom-dis" id="btnAddPemasok" type="button" onclick="tambahSuplier()" disabled="disabled">Tambah</button>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Tambah Buyer -->
	<div class="modal fade" id="modal_buyer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document" style="max-width: 700px;">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Pembeli</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Pembeli</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-buy" type="text" name="nama_buyer" id="nama_buyer" placeholder="Nama Pembeli" onkeypress="return alphaOnly(event)" value="" autocomplete="off"> 
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-buy" type="text" name="pic_buy" id="pic_buy" placeholder="No Telp" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-buy" type="text" name="lama_hubungan_buy" id="lama_hubungan_buy" placeholder="Tahun" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-buy" type="text" name="pembelian_perbulan_buy" id="pembelian_perbulan_buy" placeholder="Unit" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>

					<div class="row">
						<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
						<div class="col-lg-8 col-xs-12 mb-3">
							<input class="form-control add-buy" type="text" name="sistem_perbulan_buy" id="sistem_perbulan_buy" placeholder="Bulan" onkeypress="return numOnly(event)" value="" autocomplete="off">
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
					<button class="btn btn-custom-dis" id="btnAddPembeli" type="button" onclick="tambahBuyer()" disabled="disabled">Tambah</button>
				</div>
			</div>
		</div>
	</div>

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
							<select class="form-control jaminan" name="jenis_jaminan" id="jenis_jaminan" onchange="setJenisJaminan()" required>
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
								<select class="form-control jaminan" name="bukti_jaminan" id="jenis-jaminan-tanah" style="display: none;" required>
									<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
									<option value="SHM">SHM</option>
									<option value="SHGU">SHGU</option>
									<option value="AJB / GIRIG / KIKITIR / PETOK D / Letter C">AJB / GIRIG / KIKITIR / PETOK D / Letter C</option>
								</select>

								<select class="form-control" name="bukti_jaminan" id="jenis-jaminan-bangunan" style="display: none;" readonly>
									<option value="SHGB" selected="selected">SHGB</option>
								</select>

								<select class="form-control jaminan" name="bukti_jaminan" id="jenis-jaminan-tanah-bangunan" style="display: none;" required>
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
								<input class="form-control jaminan" type="text" name="alamat_jaminan" id="alamat_jaminan" placeholder="Alamat Jaminan" autocomplete="off" required>
								<div class="invalid-feedback">
									Alamat Jaminan tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label labelku">Nomor Bukti Kepemilikan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control jaminan" type="text" name="no_bukti_kepemilikan" id="no_bukti_kepemilikan" placeholder="Nomor Bukti Kepemilikan" autocomplete="off" required>
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
								<input class="form-control jaminan" type="text" name="luas_tanah" id="luas_tanah" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off" required>
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
								<input class="form-control jaminan" type="text" name="luas_bangunan" id="luas_bangunan" placeholder="m&sup2" onkeypress="return isNumber(event)" autocomplete="off" required>
								<div class="invalid-feedback">
									Luas Bangunan tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label labelku">Izin Mendirikan Bangunan (IMB) <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control jaminan" type="text" name="imb" id="imb" placeholder="Nomor" autocomplete="off" required>
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
								<input class="form-control jaminan" type="text" name="tahun_pembelian" id="tahun_pembelian" placeholder="Tahun Pembelian" minlength="4" maxlength="4" onkeypress="return numOnly(event)" onchange="cekTahunBeli()" autocomplete="off" required>
								<div class="invalid-feedback">
									Tahun Pembelian tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label labelku">Nilai Jaminan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control jaminan" type="text" name="nilai_jaminan" id="nilai_jaminan" placeholder="Rp" required>
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

	<script type="text/javascript">
		document.getElementById("form_input_v1").classList.add("active");
		document.getElementById("icon_form_v1").style.color = "#F02632";
		document.getElementById("name_form_v1").style.color = "#F02632";
	</script>

	<script id="draft_gpm" type="text/x-handlebars-template">
		<tr class="hapus_list_gpm" id="hapus_list_gpm">
			<td>
				<input class="form-control" type="text" name="nama_barang[]" value="@{{ nama_barang }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="harga_beli[]" value="@{{ harga_beli }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="harga_jual[]" value="@{{ harga_jual }}" readonly>
			</td>

			<td align="center">
				<button id="hapus_gpm" class="btn btn-custom">
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
				<input class="form-control" type="text" name="nama_suplier[]" value="@{{ nama_suplier }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="pic_sup[]" value="@{{ pic_sup }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="lama_hubungan_sup[]" value="@{{ lama_hubungan_sup }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="pembelian_perbulan_sup[]" value="@{{ pembelian_perbulan_sup }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="sistem_perbulan_sup[]" value="@{{ sistem_perbulan_sup }}" readonly>
			</td>

			<td align="center">
				<button id="hapus_sup" class="btn btn-custom">
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
				<input class="form-control" type="text" name="nama_buyer[]" value="@{{ nama_buyer }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="pic_buy[]" value="@{{ pic_buy }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="lama_hubungan_buy[]" value="@{{ lama_hubungan_buy }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="pembelian_perbulan_buy[]" value="@{{ pembelian_perbulan_buy }}" readonly>
			</td>

			<td>
				<input class="form-control" type="text" name="sistem_perbulan_buy[]" value="@{{ sistem_perbulan_buy }}" readonly>
			</td>

			<td align="center">
				<button id="hapus_buy" class="btn btn-custom">
					<span class="icon1 text-white">
						<i class="fas fa-trash-alt"></i>
					</span>
				</button>
			</td>
		</tr>
	</script>

	<script id="draft_jaminan" type="text/x-handlebars-template">
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
				<input class="form-control" type="text" name="nilai_jaminan[]" value="@{{ nilai_jaminan }}" readonly>
			</td>

			<td align="center">
				<button id="hapus_jaminan" class="btn btn-custom">
					<span class="icon1 text-white">
						<i class="fas fa-trash-alt"></i>
					</span>
				</button>
			</td>
		</tr>
	</script>

<?php include "footer.php"; ?>

	<script src="../js/form_debitur_v1.js"></script>
  	<script src="../js/form_debitur_berkas.js"></script>