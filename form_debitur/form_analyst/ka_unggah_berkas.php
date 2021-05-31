<span style="color: #ff0000; font-weight: bold; font-size: 10pt; padding: .6rem;">
	Silakan unggah berkas dengan tipe file 'PDF' atau 'JPG/JPEG' dan ukuran file maksimal 5MB
</span>

<fieldset class="col-lg-12 custom-scroll-1">
	<form name="form_input_unggah_berkas" class="needs-validation" method="POST" action="#" enctype="multipart/form-data" novalidate>

		<!-- Data Diri -->
		<fieldset class="p-1 mb-3" style="border: 2px solid #e3e6f0;">
			<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Data Diri</legend>
			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_ktp" style="margin-right: 5px;">
					<label class="text-dark">KTP <sup class="d-none" id="sup_ktp" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-ktp" id="berkas_ktp" name="berkas_ktp" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-ktp" for="berkas_ktp"></label>
						<div class="invalid-feedback-custom" id="file_error_ktp" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_ktp" style="margin: -10px 0 0 0;">
							Berkas KTP tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_ktp" style="padding: 0;">
					<a href="#" id="v_ktp" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_akta_kelahiran" style="margin-right: 5px;">
					<label class="text-dark">Akta Kelahiran  <sup class="d-none" id="sup_akta_kelahiran" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-akta-kelahiran" id="berkas_akta_kelahiran" name="berkas_akta_kelahiran" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-akta-kelahiran" for="berkas_akta_kelahiran"></label>
						<div class="invalid-feedback-custom" id="file_error_akta_kelahiran" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback"  id="invalid_akta_kelahiran" style="margin: -10px 0 0 0;">
							Berkas Akta Kelahiran tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_lahir" style="padding: 0;">
					<a href="#" id="v_lahir" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<!-- Akta Nikah -->
			<fieldset id="b-akta-nikah" style="display: none;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_akta_nikah" style="margin-right: 5px;">
						<label class="text-dark">Akta Nikah <sup class="d-none" id="sup_akta_nikah" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-akta-nikah" id="berkas_akta_nikah" name="berkas_akta_nikah" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-akta-nikah" for="berkas_akta_nikah"></label>
							<div class="invalid-feedback-custom" id="file_error_akta_nikah" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback"  id="invalid_akta_nikah" style="margin: -10px 0 0 0;">
								Berkas Akta Nikah tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_nikah" style="padding: 0;">
						<a href="#" id="v_nikah" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_kk" style="margin-right: 5px;">
					<label class="text-dark">Kartu Keluarga <sup class="d-none" id="sup_kk" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-kk" id="berkas_kk" name="berkas_kk" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-kk" for="berkas_kk"></label>
						<div class="invalid-feedback-custom" id="file_error_kk" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback"  id="invalid_kk" style="margin: -10px 0 0 0;">
							Berkas Kartu Keluarga tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_kk" style="padding: 0;">
					<a href="#" id="v_kk" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_ijazah" style="margin-right: 5px;">
					<label class="text-dark">Ijazah <sup class="d-none" id="sup_ijazah" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-ijazah" id="berkas_ijazah" name="berkas_ijazah" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-ijazah" for="berkas_ijazah"></label>
						<div class="invalid-feedback-custom" id="file_error_ijazah" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback"  id="invalid_ijazah" style="margin: -10px 0 0 0;">
							Berkas Ijazah tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_ijazah" style="padding: 0;">
					<a href="#" id="v_ijazah" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>
		</fieldset>

		<!-- Sumber Penghasilan Gaji Kerja -->
		<fieldset class="p-1 mb-3" id="b-sp-gaji" style="margin-top: 5px; border: 2px solid #e3e6f0; display: none;">
			<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Sumber Penghasilan Gaji Kerja</legend>
			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_slip_gaji" style="margin-right: 5px;">
					<label class="text-dark">Slip Gaji <sup class="d-none" id="sup_slip_gaji" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-slip-gaji" id="berkas_slip_gaji" name="berkas_slip_gaji" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-slip-gaji" for="berkas_slip_gaji"></label>
						<div class="invalid-feedback-custom" id="file_error_slip_gaji" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_slip_gaji" style="margin: -10px 0 0 0;">
							Berkas Slip Gaji tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_gaji" style="padding: 0;">
					<a href="#" id="v_gaji" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<fieldset id="b-pt-gaji" style="display: none;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_penghasilan_tambahan_gaji" style="margin-right: 5px;">
						<label class="text-dark">Bukti Penghasilan Tambahan <sup class="d-none" id="sup_penghasilan_tambahan_gaji" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-penghasilan-tambahan-gaji" id="berkas_penghasilan_tambahan_gaji" name="berkas_penghasilan_tambahan_gaji" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-penghasilan-tambahan-gaji" for="berkas_penghasilan_tambahan_gaji"></label>
							<div class="invalid-feedback-custom" id="file_error_penghasilan_tambahan_gaji" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_penghasilan_tambahan_gaji" style="margin: -10px 0 0 0;">
								Bukti Penghasilan Tambahan tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_ptg" style="padding: 0;">
						<a href="#" id="v_ptg" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>
		</fieldset>

		<!-- Sumber Penghasilan Hasil Usaha -->
		<fieldset class="p-1 mb-3" id="b-sp-hasil" style="margin-top: 5px; border: 2px solid #e3e6f0; display: none;">
			<legend class="w-auto labelku" id="legend-hasil-usaha" style="font-size: 13pt; padding: 0 10px;"></legend>
			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_siup" style="margin-right: 5px;">
					<label class="text-dark">SIUP / NIB <sup class="d-none" id="sup_siup" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-siup" id="berkas_siup" name="berkas_siup" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-siup" for="berkas_siup"></label>
						<div class="invalid-feedback-custom" id="file_error_siup" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_siup" style="margin: -10px 0 0 0;">
							Berkas SIUP / NIB tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_siup" style="padding: 0;">
					<a href="#" id="v_siup" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_ho" style="margin-right: 5px;">
					<label class="text-dark">HO (Izin Gangguan) <sup class="d-none" id="sup_ho" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-ho" id="berkas_ho" name="berkas_ho" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-ho" for="berkas_ho"></label>
						<div class="invalid-feedback-custom" id="file_error_ho" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_ho" style="margin: -10px 0 0 0;">
							Berkas HO (Izin Gangguan) tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_ho" style="padding: 0;">
					<a href="#" id="v_ho" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_npwp" style="margin-right: 5px;">
					<label class="text-dark">NPWP <sup class="d-none" id="sup_npwp" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-npwp" id="berkas_npwp" name="berkas_npwp" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-npwp" for="berkas_npwp"></label>
						<div class="invalid-feedback-custom" id="file_error_npwp" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_npwp" style="margin: -10px 0 0 0;">
							Berkas NPWP tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_npwp" style="padding: 0;">
					<a href="#" id="v_npwp" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_akta_pendirian" style="margin-right: 5px;">
					<label class="text-dark">Akta Pendirian / Perubahan <sup class="d-none" id="sup_akta_pendirian" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-akta-pendirian" id="berkas_akta_pendirian" name="berkas_akta_pendirian" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-akta-pendirian" for="berkas_akta_pendirian"></label>
						<div class="invalid-feedback-custom" id="file_error_akta_pendirian" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_akta_pendirian" style="margin: -10px 0 0 0;">
							Berkas Akta Pendirian / Perubahan tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_pendirian" style="padding: 0;">
					<a href="#" id="v_pendirian" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_lap_keuangan" style="margin-right: 5px;">
					<label class="text-dark">Laporan Keuangan <sup class="d-none" id="sup_lap_keuangan" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-lap-keuangan" id="berkas_lap_keuangan" name="berkas_lap_keuangan" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-lap-keuangan" for="berkas_lap_keuangan"></label>
						<div class="invalid-feedback-custom" id="file_error_lap_keuangan" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_lap_keuangan" style="margin: -10px 0 0 0;">
							Berkas Laporan Keuangan tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_lap_keu" style="padding: 0;">
					<a href="#" id="v_lap_keu" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>

			<!-- Mutasi Rekening Koran dan Kepemilikan Lahan => Pertanian -->
			<fieldset id="b-pertanian" style="display: block;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_rekening_koran" style="margin-right: 5px;">
						<label class="text-dark">Mutasi Rekening Koran <sup class="d-none" id="sup_rekening_koran" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-rekening-koran" id="berkas_rekening_koran" name="berkas_rekening_koran" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-rekening-koran" for="berkas_rekening_koran"></label>
							<div class="invalid-feedback-custom" id="file_error_rekening_koran" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_rekening_koran" style="margin: -10px 0 0 0;">
								Berkas Mutasi Rekening Koran tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_rek_koran" style="padding: 0;">
						<a href="#" id="v_rek_koran" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>

				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_kepemilikan_lahan" style="margin-right: 5px;">
						<label class="text-dark">Bukti Kepemilikan Lahan <sup class="d-none" id="sup_kepemilikan_lahan" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-kepemilikan-lahan" id="berkas_kepemilikan_lahan" name="berkas_kepemilikan_lahan" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-kepemilikan-lahan" for="berkas_kepemilikan_lahan"></label>
							<div class="invalid-feedback-custom" id="file_error_kepemilikan_lahan" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_kepemilikan_lahan" style="margin: -10px 0 0 0;">
								Berkas Kepemilikan Lahan tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_lahan" style="padding: 0;">
						<a href="#" id="v_lahan" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<!-- Biaya Sewa => Perdagangan, Jasa, Manufaktur -->
			<fieldset id="b-biaya-sewa" style="display: block;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_biaya_sewa" style="margin-right: 5px;">
						<label class="text-dark">Bukti Biaya Sewa <sup class="d-none" id="sup_biaya_sewa" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-biaya-sewa" id="berkas_biaya_sewa" name="berkas_biaya_sewa" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-biaya-sewa" for="berkas_biaya_sewa"></label>
							<div class="invalid-feedback-custom" id="file_error_biaya_sewa" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_biaya_sewa" style="margin: -10px 0 0 0;">
								Berkas Biaya Sewa tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_sewa" style="padding: 0;">
						<a href="#" id="v_sewa" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<!-- Biaya Rumah Tangga => Perdagangan, Jasa -->
			<fieldset id="b-biaya-rt" style="display: block;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_biaya_rt" style="margin-right: 5px;">
						<label class="text-dark">Bukti Biaya Rumah Tangga <sup class="d-none" id="sup_biaya_rt" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-biaya-rt" id="berkas_biaya_rt" name="berkas_biaya_rt" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-biaya-rt" for="berkas_biaya_rt"></label>
							<div class="invalid-feedback-custom" id="file_error_biaya_rt" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_biaya_rt" style="margin: -10px 0 0 0;">
								Berkas Biaya Rumah Tangga tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_rt" style="padding: 0;">
						<a href="#" id="v_rt" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<!-- Nota Penjualan => Perdagangan, Manufaktur, Pertanian -->
			<fieldset id="b-nota-penjualan" style="display: block;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_nota_penjualan" style="margin-right: 5px;">
						<label class="text-dark">Nota Penjualan <sup class="d-none" id="sup_nota_penjualan" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-nota-penjualan" id="berkas_nota_penjualan" name="berkas_nota_penjualan" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-nota-penjualan" for="berkas_nota_penjualan"></label>
							<div class="invalid-feedback-custom" id="file_error_nota_penjualan" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_nota_penjualan" style="margin: -10px 0 0 0;">
								Berkas Nota Penjualan tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_nota" style="padding: 0;">
						<a href="#" id="v_nota" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<!-- Tagihan => Perdagangan, Manufaktur, Pertanian -->
			<fieldset id="b-tagihan" style="display: block;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_tagihan" style="margin-right: 5px;">
						<label class="text-dark">Tagihan <sup class="d-none" id="sup_tagihan" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-tagihan" id="berkas_tagihan" name="berkas_tagihan" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-tagihan" for="berkas_tagihan"></label>
							<div class="invalid-feedback-custom" id="file_error_tagihan" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_tagihan" style="margin: -10px 0 0 0;">
								Berkas Tagihan tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_tagihan" style="padding: 0;">
						<a href="#" id="v_tagihan" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>

			<!-- Penghasilan Tambahan => Perdagangan, Jasa, Pertanian -->
			<fieldset id="b-penghasilan-tambahan" style="display: none;">
				<div class="row col-lg-12">
					<div class="col-lg-4 col-xs-12">
						<input type="checkbox" id="cek_penghasilan_tambahan" style="margin-right: 5px;">
						<label class="text-dark">Bukti Penghasilan Tambahan <sup class="d-none" id="sup_penghasilan_tambahan" style="color: #FF0000; font-weight: bold;">*</sup></label>
					</div>
					<div class="col-lg-7 col-xs-12 mb-2">
						<div class="custom-file">
							Unggah
							<input type="file" class="custom-file-input berkas-penghasilan-tambahan" id="berkas_penghasilan_tambahan" name="berkas_penghasilan_tambahan" accept="application/pdf, image/jpeg" disabled="disabled">
							<label class="custom-file-label label-penghasilan-tambahan" for="berkas_penghasilan_tambahan"></label>
							<div class="invalid-feedback-custom" id="file_error_penghasilan_tambahan" style="margin-top: -10px; display: none;"></div>
							<div class="invalid-feedback" id="invalid_penghasilan_tambahan" style="margin: -10px 0 0 0;">
								Berkas Bukti Penghasilan Tambahan tidak boleh kosong.
							</div>
						</div>
					</div>
					<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_pth" style="padding: 0;">
						<a href="#" id="v_pth" target="_blank" class="btn btn-outline-warning">
							<i class="far fa-fw fa-file-alt"></i>
						</a>
					</div>
				</div>
			</fieldset>
		</fieldset>

		<!-- Pengajuan Kredit -->
		<fieldset class="p-1 mb-3" id="pk-rab" style="margin-top: 5px; border: 2px solid #e3e6f0; display: none;">
			<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Pengajuan Kredit</legend>
			<div class="row col-lg-12">
				<div class="col-lg-4 col-xs-12">
					<input type="checkbox" id="cek_rab" style="margin-right: 5px;">
					<label class="text-dark">RAB <sup class="d-none" id="sup_rab" style="color: #FF0000; font-weight: bold;">*</sup></label>
				</div>
				<div class="col-lg-7 col-xs-12 mb-2">
					<div class="custom-file">
						Unggah
						<input type="file" class="custom-file-input berkas-rab" id="berkas_rab" name="berkas_rab" accept="application/pdf, image/jpeg" disabled="disabled">
						<label class="custom-file-label label-rab" for="berkas_rab"></label>
						<div class="invalid-feedback-custom" id="file_error_rab" style="margin-top: -10px; display: none;"></div>
						<div class="invalid-feedback" id="invalid_rab" style="margin: -10px 0 0 0;">
							Berkas RAB tidak boleh kosong.
						</div>
					</div>
				</div>
				<div class="col-lg-1 col-xs-12 mb-2 d-none" id="dv_rab" style="padding: 0;">
					<a href="#" id="v_rab" target="_blank" class="btn btn-outline-warning">
						<i class="far fa-fw fa-file-alt"></i>
					</a>
				</div>
			</div>
		</fieldset>

		<!-- Data Jaminan -->
		<fieldset class="p-1 mb-3" id="data-jaminan" style="margin-top: 5px; border: 2px solid #e3e6f0; display: none;">
			<legend class="w-auto labelku" style="font-size: 13pt; padding: 0 10px;">Data Jaminan</legend>
			<fieldset id="list_berkas_jaminan">
				<!-- <input type="hidden" id="jml_jaminan" name="jml_jaminan" value=""> -->
			</fieldset>
		</fieldset>

		<div class="form-group" style="float: right;">
			<!-- <a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_unggah_berkas" data-backdrop="static" data-keyboard="false">Simpan</a> -->
			<input type="submit" id="simpan_berkas" class="btn btn-custom-ad" name="simpan" value="Simpan">
		</div>
	</form>
</fieldset>

<div class="modal fade" id="simpan_unggah_berkas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Berkas Berhasil Disimpan</span><br>
					<hr>
					<button class="btn btn-success font-weight-bold" type="button" data-dismiss="modal">
						<span class="text">Selesai</span>
						<span class="icon1" style="color: rgba(255, 255, 255, 0.8)">
							<i class="fas fa-arrow-right"></i>
						</span>
					</button>
				</center>
			</div>
		</div>
	</div>
</div>