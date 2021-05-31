<?php include "header.php"; ?>

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
	<h1 class="h3 mb-0 text-gray-800">
		<a href="hasil_prediksi.php" class="btn btn-back">
			<i class="fas fa-arrow-left text-lg"></i>
		</a>
		Form Input Debitur
	</h1>
</div>

<hr style="border-bottom: 5px solid red;">
<br>

<div class="row">
	<div class="col-lg-12 mb-4">
		<form name="form_input" class="needs-validation" method="POST" action="hasil.php" novalidate>
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
						<input class="form-control datepicker1" type="text" name="umur" id="umur" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" required>
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
						<div class="col-lg-6 col-sm-4 col-xs-12 mb-2">
							<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_m" value="male" required>
								<label class="custom-control-label" for="gender_m">Laki - laki</label>
							</div>
						</div>

						<div class="col-lg-6 col-sm-4 col-xs-12 mb-2">
							<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_f" value="female" required>
								<label class="custom-control-label" for="gender_f">Perempuan</label>
							</div>
						</div>

						<div class="col-lg-12 col-sm-4 col-xs-12 mb-3">
							<div class="custom-control custom-radio">
								<input type="radio" class="custom-control-input" name="jenis_kelamin" id="gender_n" value="not defined" required>
								<label class="custom-control-label" for="gender_n">Tidak Diketahui</label>
								<div class="invalid-feedback">Jenis kelamin tidak boleh kosong.</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Provinsi</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="dom_provinsi" id="dom_provinsi" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="ACEH">Aceh</option>
							<option value="BALI">Bali</option>
							<option value="DI YOGYAKARTA">DI Yogyakarta</option>
							<option value="DKI JAKARTA">DKI Jakarta</option>
							<option value="JAWA BARAT">Jawa Barat</option>
							<option value="JAWA TENGAH">Jawa Tengah</option>
							<option value="JAWA TIMUR">Jawa Timur</option>
							<option value="KALIMANTAN SELATAN">Kalimantan Selatan</option>
							<option value="LAMPUNG">Lampung</option>
							<option value="PAPUA">Papua</option>
							<option value="RIAU">Riau</option>
							<option value="SULAWESI SELATAN">Sulawesi Selatan</option>
							<option value="SULAWESI UTARA">Sulawesi Utara</option>
							<option value="SUMATERA BARAT">Sumatera Barat</option>
							<option value="SUMATERA SELATAN">Sumatera Selatan</option>
							<option value="SUMATERA UTARA">Sumatera Utara</option>
						</select>
						<div class="invalid-feedback">
							Provinsi tidak boleh kosong.
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
							<option value="Married">Married</option>
							<option value="Divorced">Divorced</option>
							<option value="Single">Single</option>
							<option value="Divorce">Divorce</option>
						</select>
						<div class="invalid-feedback">
							Status Perkawinan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Pekerjaan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="pekerjaan" id="pekerjaan" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="Buruh Pabrik">Buruh Pabrik</option>
							<option value="Pegawai Swasta">Pegawai Swasta</option>
							<option value="Pelajar">Pelajar</option>
							<option value="Pensiun">Pensiun</option>
							<option value="Petani">Petani</option>
							<option value="PNS">PNS</option>
							<option value="UMKM">UMKM</option>
							<option value="Wirausaha">Wirausaha</option>
						</select>
						<div class="invalid-feedback">
							Pekerjaan tidak boleh kosong.
						</div>
					</div>
				</div>
				

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Sumber Dana</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control text_field" name="sumber_dana" id="sumber_dana" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
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
						</select>
						<div class="invalid-feedback">
							Sumber Dana tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Penghasilan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="penghasilan" id="penghasilan" onchange="cekPenghasilan()" autocomplete="off" required>
						<div class="invalid-feedback">
							Penghasilan tidak boleh kosong.
						</div>
					</div>
				</div>
				

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Plafon</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="plafond" id="plafond" onchange="hitungAngsuran()" autocomplete="off" required>
						<div class="invalid-feedback">
							Plafon tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Tenor</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<select class="form-control" name="tenor" id="tenor" onchange="hitungAngsuran()" required>
							<option value="" disabled="disabled" selected="selected">Pilih</option>
							<option value="6">6</option>
							<option value="12">12</option>
							<option value="18">18</option>
							<option value="24">24</option>
							<option value="30">30</option>
							<option value="36">36</option>
						</select>
						<div class="invalid-feedback">
							Tenor tidak boleh kosong.
						</div>
					</div>
				</div>

				<div class="row col-lg-2"></div>

				<div class="row col-lg-5">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Biaya Admin</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control" type="text" name="admin_fee" id="admin_fee" readonly>
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
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Tanggal Pengajuan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control datepicker" type="text" name="date_input" id="date_input" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" autocomplete="off" required>
						<div class="invalid-feedback">
							Tanggal pengajuan tidak boleh kosong.
						</div>
					</div>
				</div>
			</div>

			<div class="row" style="float: right; margin-right: 3%;">
				<div class="row col-12">
					<input type="submit" class="btn btn-danger" name="simpan" value="Prediksi" style="width: 10em;">
				</div>
			</div>
		</form>
	</div>
</div>

<a href="#" class="btn btn-custom" data-toggle="modal" data-target="#hasilPrediksi" data-backdrop="static" data-keyboard="false">cek</a>

<hr style="border-bottom: 5px solid red;">
<br>

<div class="row">
	<div class="col-lg-12 mb-4">
		<form name="form_input" class="needs-validation" method="POST" action="hasil.php" novalidate>
			<div class="f1-steps">
				<div class="f1-progress">
					<div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="2" style="width: 12.5%;"></div>
				</div>
				<div id="page1" class="f1-step active col-12">
					<div class="f1-step-icon">1</div>
				</div>
				<div id="page2" class="f1-step col-12">
					<div class="f1-step-icon1">2</div>
				</div>
			</div>

			<br><br>

			<fieldset id="form-1" style="display: ;">
				<div class="row">
					<div class="row col-lg-6" style="margin-right: 20px;">
						<label class="col-lg-6 col-xs-12 col-form-label labelku">Lama Bekerja</label>
						<!-- <div class="row col-lg-7 col-xs-12 mb-3"> -->
							<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
								<input class="form-control text_field" type="number" name="year" id="year" required placeholder="Tahun" min="2" onchange="tahunKerja(this)">
								<div class="invalid-feedback">
									Tahun lama bekerja tidak boleh kosong.
								</div>
							</div>
							<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
								<select class="form-control text_field" name="month" id="month" required>
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
									Bulan lama bekerja tidak boleh kosong.
								</div>
							</div>
							<!-- </div> -->
						</div>

						<div class="row col-lg-6">
							<label class="col-lg-6 col-xs-12 col-form-label labelku">Pendidikan</label>
							<div class="col-lg-6 col-xs-12 mb-3">
								<select class="form-control text_field" name="education" id="education" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Higher education">Higher education</option>
									<option value="Incomplete higher">Incomplete higher</option>
									<option value="Lower secondary">Lower secondary</option>
									<option value="Secondary / secondary special">Secondary / secondary special</option>
									<option value="Academic degree">Academic degree</option>
								</select>
								<div class="invalid-feedback">
									Pendidikan tidak boleh kosong.
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="row col-lg-6" style="margin-right: 20px;">
							<label class="col-lg-6 col-xs-12 col-form-label labelku">Jenis Kelamin</label>
							<!-- <div class="col-lg-6 col-xs-12 mb-3">
								<div class="row"> -->
									<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
										<div class="custom-control custom-radio mb-2">
											<input type="radio" class="custom-control-input text_field" name="gender" id="gender_m" value="M" required>
											<label class="custom-control-label" for="gender_m">Laki - laki</label>
											<div class="invalid-feedback">Jenis kelamin tidak boleh kosong.</div>
										</div>
									</div>

									<div class="col-lg-3 col-sm-6 col-xs-12 mb-2">
										<div class="custom-control custom-radio mb-2">
											<input type="radio" class="custom-control-input text_field" name="gender" id="gender_f" value="F" required>
											<label class="custom-control-label" for="gender_f">Perempuan</label>
										</div>
									</div>
								<!-- </div>
								</div> -->
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tanggal Lahir</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control text_field datepicker" type="text" name="day_age" id="day_age" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" required>
									<div class="invalid-feedback">
										Tanggal lahir tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Status Perkawinan</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control text_field" name="family_status" id="family_status" onchange="AdditionalTerms(this)" required>
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="Married">Married</option>
										<option value="Civil marriage">Civil marriage</option>
										<option value="Single / not married">Single / not married</option>
										<option value="Widow">Widow</option>
									</select>
									<div class="invalid-feedback">
										Status perkawinan tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Jenis Organisasi</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control" name="organization_type" id="organization_type" required style="width: 100%;">
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="Advertising">Advertising</option>
										<option value="Agriculture">Agriculture</option>
										<option value="Bank">Bank</option>
										<option value="Business Entity Type 1">Business Entity Type 1</option>
										<option value="Business Entity Type 2">Business Entity Type 2</option>
										<option value="Business Entity Type 3">Business Entity Type 3</option>
										<option value="Cleaning">Cleaning</option>
										<option value="Construction">Construction</option>
										<option value="Culture">Culture</option>
										<option value="Electricity">Electricity</option>
										<option value="Emergency">Emergency</option>
										<option value="Government">Government</option>
										<option value="Hotel">Hotel</option>
										<option value="Housing">Housing</option>
										<option value="Industry: type 1">Industry: type 1</option>
										<option value="Industry: type 2">Industry: type 2</option>
										<option value="Industry: type 3">Industry: type 3</option>
										<option value="Industry: type 4">Industry: type 4</option>
										<option value="Industry: type 5">Industry: type 5</option>
										<option value="Industry: type 6">Industry: type 6</option>
										<option value="Industry: type 7">Industry: type 7</option>
										<option value="Industry: type 8">Industry: type 8</option>
										<option value="Industry: type 9">Industry: type 9</option>
										<option value="Industry: type 10">Industry: type 10</option>
										<option value="Industry: type 11">Industry: type 11</option>
										<option value="Industry: type 12">Industry: type 12</option>
										<option value="Industry: type 13">Industry: type 13</option>
										<option value="Insurance">Insurance</option>
										<option value="Kindergarten">Kindergarten</option>
										<option value="Legal Services">Legal Services</option>
										<option value="Medicine">Medicine</option>
										<option value="Military">Military</option>
										<option value="Mobile">Mobile</option>
										<option value="NA1">NA1</option>
										<option value="Other">Other</option>
										<option value="Police">Police</option>
										<option value="Postal">Postal</option>
										<option value="Realtor">Realtor</option>
										<option value="Religion">Religion</option>
										<option value="Restaurant">Restaurant</option>
										<option value="School">School</option>
										<option value="Security">Security</option>
										<option value="Security Ministries">Security Ministries</option>
										<option value="Self-employed">Self-employed</option>
										<option value="Services">Services</option>
										<option value="Telecom">Telecom</option>
										<option value="Trade: type 1">Trade: type 1</option>
										<option value="Trade: type 2">Trade: type 2</option>
										<option value="Trade: type 3">Trade: type 3</option>
										<option value="Trade: type 4">Trade: type 4</option>
										<option value="Trade: type 5">Trade: type 5</option>
										<option value="Trade: type 6">Trade: type 6</option>
										<option value="Trade: type 7">Trade: type 7</option>
										<option value="Transport: type 1">Transport: type 1</option>
										<option value="Transport: type 2">Transport: type 2</option>
										<option value="Transport: type 3">Transport: type 3</option>
										<option value="Transport: type 4">Transport: type 4</option>
										<option value="University">University</option>
									</select>
									<div class="invalid-feedback">
										Jenis organisasi tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tempat Tinggal Saat Ini</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control text_field" name="housing_type" id="housing_type" required>
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="House / apartment">House / apartment</option>
										<option value="Municipal apartment">Municipal apartment</option>
										<option value="Rented apartment">Rented apartment</option>
										<option value="With parents">With parents</option>
										<option value="Office apartment">Office apartment</option>
										<option value="Co-op apartment">Co-op apartment</option>
									</select>
									<div class="invalid-feedback">
										Tempat tinggal saat ini tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Jenis Pendapatan</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control text_field" name="income_type" id="income_type" required>
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="Commercial associate">Commercial associate</option>
										<option value="Working">Working</option>
										<option value="State servant">State servant</option>
										<option value="Pensioner">Pensioner</option>
										<option value="Unemployed">Unemployed</option>
										<option value="Student">Student</option>
										<option value="Businessman">Businessman</option>
									</select>
									<div class="invalid-feedback">
										Jenis pendapatan tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tanggal Terakhir Update Id (KTP/SIM/dll)</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control text_field datepicker" type="text" name="last_update" id="last_update" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" required>
									<div class="invalid-feedback">
										Tanggal terakhir update Id tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tanggal Pengajuan</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control text_field datepicker" type="text" name="submission_date" id="submission_date" placeholder="mm/dd/yyyy" style="padding: 0.375rem 0.75rem;" required>
									<div class="invalid-feedback">
										Tanggal pengajuan tidak boleh kosong.
									</div>
								</div>
							</div>
							<div class="form-group row" style="display: none;">
								<div class="value">
									<div class="input-group">
										<input class="form-control" type="text" name="days_id_change" id="days_id_change">
									</div>
								</div>
							</div>
						</div>

						<div class="f1-buttons">
							<input type="button" id="btnNext" class="btn btn-danger btn-next" onclick="selanjutnya()" value="Selanjutnya">
						</div>
					</fieldset>

					<fieldset id="form-2" style="display: none;">
						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Nominal Pinjaman</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control" type="text" name="approved_credit" id="approved_credit" onchange="hitung()" required>
									<div class="invalid-feedback">
										Nominal pinjaman tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Persentase Skor (%)</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control" type="number" name="ext_score_2" id="ext_score_2" required min="0" step="0.0000000001" max="100" onchange="handleChange(this)">
									<div class="invalid-feedback">
										Persentase skor tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Jenis Kontrak</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control" name="contract_type" id="contract_type" required>
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="Cash loans">Cash loans</option>
										<option value="Revolving loans">Revolving loans</option>
									</select>
									<div class="invalid-feedback">
										Jenis kontrak tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Pendapatan (Perbulan)</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control" type="text" name="income" id="income" required onchange="cekPendapatan()">
									<div class="invalid-feedback">
										Pendapatan (perbulan) tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tenor</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<select class="form-control" name="tenor" id="tenor" onchange="hitung()" required>
										<option value="" disabled="disabled" selected="selected">Pilih</option>
										<option value="6">6</option>
										<option value="12">12</option>
										<option value="18">18</option>
										<option value="24">24</option>
										<option value="30">30</option>
										<option value="36">36</option>
									</select>
									<div class="invalid-feedback">
										Tenor tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Prediksi Angsuran</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control" type="text" name="annuity" id="annuity" required readonly>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tanggal Daftar di Bank</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control datepicker" type="text" name="register_date" id="register_date" placeholder="mm/dd/yyyy" onchange="cal2()" style="padding: 0.375rem 0.75rem;" required> 
									<div class="invalid-feedback">
										Tanggal daftar di bank tidak boleh kosong.
									</div>
								</div>
							</div>

							<div class="row col-lg-6">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Tanggal Pengajuan Pinjaman</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control datepicker" type="text" name="submission_date2" id="submission_date2" placeholder="mm/dd/yyyy" onchange="cal2()" style="padding: 0.375rem 0.75rem;" required>
									<div class="invalid-feedback">
										Tanggal pengauan pinjaman tidak boleh kosong.
									</div>
								</div>
							</div>
							<div class="form-group row" style="display: none;">
								<div class="value">
									<div class="input-group">
										<input class="form-control" type="text" name="days_registration" id="days_registration">
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="row col-lg-6" style="margin-right: 20px;">
								<label class="col-lg-6 col-xs-12 col-form-label labelku">Harga Barang</label>
								<div class="col-lg-6 col-xs-12 mb-3">
									<input class="form-control" type="text" name="price" id="price" required min="0">
									<div class="invalid-feedback">
										Harga barang tidak boleh kosong.
									</div>
								</div>
							</div>
						</div>

						<div class="f1-buttons">
							<button class="btn btn-secondary btn-previous" type="button" onclick="sebelumnya()">Sebelumnya</button>
							<input type="submit" class="btn btn-danger" name="simpan" value="Prediksi">
						</div>
					</fieldset>
				</form>
			</div>
		</div>

		<script type="text/javascript">
			document.getElementById("form_input").classList.add("active");
			document.getElementById("icon_form").style.color = "#F02632";
			document.getElementById("name_form").style.color = "#F02632";

		// $(document).ready(function(){
		// 	$(".text_field").addEventListener("change", check_field);
		// 	console.log("test");
		// });

		// function check_field() {
		// 	var year = $("#year").val();
		// 	var month = $("#month").val();
		// 	var education = $("#education").val();
		// 	var gender = $("#gender").val();
		// 	var day_age = $("#day_age").val();
		// 	var family_status = $("#family_status").val();
		// 	var organization_type = $("#organization_type").val();
		// 	var income_type = $("#income_type").val();
		// 	var last_update = $("#last_update").val();
		// 	var housing_type = $("#housing_type").val();

		// 	console.log("test");

		// 	// if (year != "" && month != "" && education != "" && gender != "" && day_age != "" && family_status != "" && organization_type != "" && income_type != "" && last_update != "" && housing_type != "") {
		// 	// 	$("#btnNext").prop( "disabled", false);
  // 	// 			return true;
		// 	// } else {
		// 	// 	$("#btnNext").prop( "disabled", true);
  // 	// 			return false;
		// 	// }
		// }

		

		// var year_empty = true;
		// var month_empty = true;
		// var education_empty = true;
		// var gender_empty = true;
		// var day_age_empty = true;
		// var family_status_empty = true;
		// var organization_type_empty = true;
		// var income_type_empty = true;
		// var last_update_empty = true;
		// var housing_type_empty = true;

		// document.getElementById("month").onchange = function() {
		// 	alert("tes");
		// }

		// month.addEventListener("change", ()=>{
		//     console.log('This Value is', month.value);
		// });

		// function disNext() {
		// 	if (year !== null && month !== null && education !== null && gender !== null && day_age !== null && family_status !== null && organization_type !== null && income_type !== null && last_update !== null && housing_type !== null) {
		// 		$("#btnNext").removeAttr("disabled");
		// 	}
		// }

		

		// Menghitung Prediksi Angsuran (Annuity)
		function hitung(){
			var pinjaman = document.getElementById('approved_credit').value,
			split = pinjaman.split(" "),
			uang = split[0],
			nominal = split[1],
			credit = nominal.replace(/[.]+/g, '');

			if (credit < 3000000) {
		        // alert('Minimal pinjaman sebesar Rp. 3.000.000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal pinjaman sebesar Rp. 3.000.000'
		        })
		        document.getElementById('approved_credit').value = '';
		        document.form_input.approved_credit.focus();
		    } else if (credit > 30000000) {
		        // alert('Maksimal pinjaman sebesar Rp. 30.000.000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Maksimal pinjaman sebesar Rp. 30.000.000'
		        })
		        document.getElementById('approved_credit').value = '';
		        document.form_input.approved_credit.focus();
		    } else {
		    	var hitung = parseInt(credit) / parseInt(document.getElementById('tenor').value);
		    	var tampil = thousands_separators(hitung);

		        // Untuk memberikan nilai blank pada annuity saat hitung bernilai NaN
		        if (isNaN(hitung)) {
		        	document.getElementById('annuity').value = '';
		        } else {
		        	document.getElementById('annuity').value = uang + ' ' + tampil;
		        }  
		    }	        
		}

	    // Menambahkan titik untuk ribuan
	    function thousands_separators(num) {
	    	var num_parts = num.toString().split(".");
	    	num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	    	return num_parts.join(",");
	    }

	    var rupiah = document.getElementById('approved_credit');
	    rupiah.addEventListener('keyup', function(e){
		    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		    rupiah.value = formatRupiah(this.value, 'Rp. ');
		});

	    var rupiah1 = document.getElementById('income');
	    rupiah1.addEventListener('keyup', function(e){
		    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		    rupiah1.value = formatRupiah(this.value, 'Rp. ');
		});

	    var rupiah3 = document.getElementById('price');
	    rupiah3.addEventListener('keyup', function(e){
		    // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
		    rupiah3.value = formatRupiah(this.value, 'Rp. ');
		});

	    // Fungsi format Uang
	    function formatRupiah(angka, prefix){
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
	     	return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' +  rupiah : '');
	     }

	    // Mengubah format pecahan menjadi desimal
	    function handleChange(input) {
	    	if (input.value < 0) {
	    		swal({
	    			icon: 'error',
	    			title: 'Oops...',
	    			text: 'Minimal percentase scoring 0'
	    		})
	    		document.getElementById('ext_score_2').value = '';
	    		document.form_input.ext_score_2.focus();
	    	}

	    	if (input.value > 100){
	    		swal({
	    			icon: 'error',
	    			title: 'Oops...',
	    			text: 'Maksimal percentase scoring 100'
	    		})
	    		document.getElementById('ext_score_2').value = '';
	    		document.form_input.ext_score_2.focus();
	    	}
	    }

	    function tahunKerja(input) {
	    	if (input.value < 2) {
	    		swal({
	    			icon: 'error',
	    			title: 'Oops...',
	    			text: 'Minimal lama bekerja 2 Tahun.'
	    		})
	    		document.getElementById('year').value = '';
	    		document.form_input.year.focus();
	    	}
	    }

	    function cekPendapatan() {
	    	var cek = document.getElementById('income').value,
	    	split = cek.split(" "),
	    	uang = split[0],
	    	nominal = split[1],
	    	pendapatan = nominal.replace(/[.]+/g, '');

	    	if (pendapatan < 3000000) {
		        // alert('Minimal pendapatan sebesar Rp. 3.000.000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal pendapatan sebesar Rp. 3.000.000'
		        })
		        document.getElementById('income').value = '';
		        document.form_input.income.focus();
		    }
		}

		day_age.max = new Date().toISOString().split("T")[0];
		last_update.max = new Date().toISOString().split("T")[0];
		submission_date.max = new Date().toISOString().split("T")[0];
		days_registration.max = new Date().toISOString().split("T")[0];
		register_date.max = new Date().toISOString().split("T")[0];
		submission_date2.max = new Date().toISOString().split("T")[0];
	</script>

	<script type="text/javascript">
		var penghasilan = document.getElementById("penghasilan");
	    penghasilan.addEventListener("keyup", function(e){
		    penghasilan.value = formatUang(this.value, "Rp ");
		});

		var angsuran = document.getElementById("angsuran");
	    angsuran.addEventListener("keyup", function(e){
		    angsuran.value = formatUang(this.value, "Rp ");
		});

		var plafond = document.getElementById("plafond");
	    plafond.addEventListener("keyup", function(e){
		    plafond.value = formatUang(this.value, "Rp ");
		});

		var admin_fee = document.getElementById("admin_fee");
	    admin_fee.addEventListener("keyup", function(e){
		    admin_fee.value = formatUang(this.value, "Rp ");
		});

	    // Fungsi format Uang
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

		function cekPenghasilan() {
			var cek = document.getElementById("penghasilan").value,
			split = cek.split(" "),
			uang = split[0],
			nominal = split[1],
			penghasilan = nominal.replace(/[.]+/g, '');

			if (penghasilan < 500000) {
		        // alert('Minimal penghasilan sebesar Rp 500,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal penghasilan sebesar Rp 500,000'
		        })
		        document.getElementById("penghasilan").value = '';
		        document.form_input.penghasilan.focus();
		    } else if (penghasilan > 30000000) {
		    	// alert('Maksimal penghasilan sebesar Rp 30,000,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Maksimal penghasilan sebesar Rp 30,000,000'
		        })
		        document.getElementById("penghasilan").value = '';
		        document.form_input.penghasilan.focus();
		    }
		}

		function hitungAngsuran() {
			var cek = document.getElementById("plafond").value,
			split = cek.split(" "),
			uang = split[0],
			nominal = split[1],
			plafond = nominal.replace(/[.]+/g, '');

			if (plafond < 1200000) {
		        // alert('Minimal plafon sebesar Rp 1,200,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal plafon sebesar Rp 1,200,000'
		        })
		        document.getElementById("plafond").value = '';
		        document.form_input.plafond.focus();
		    } else if (plafond > 288000000) {
		    	// alert('Maksimal plafon sebesar Rp 288,000,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Maksimal plafon sebesar Rp 288,000,000'
		        })
		        document.getElementById("plafond").value = '';
		        document.form_input.plafond.focus();
		    } else {
		    	// Hitung angsuran => plafon / tenor
		    	var hasil_angsuran = parseInt(plafond) / parseInt(document.getElementById("tenor").value);
		    	var tampil_angsuran = thousands_separators(hasil_angsuran.toFixed(2));

		        // Untuk memberikan nilai blank pada annuity saat hasil_angsuran bernilai NaN
		        if (isNaN(hasil_angsuran)) {
		        	document.getElementById("angsuran").value = '';
		        } else {
		        	document.getElementById("angsuran").value = uang + ' ' + tampil_angsuran;
		        }

		        // Hitung biaya admin => plafon / 100
		        var hasil_admin_fee = parseInt(plafond) / 100;
		    	var tampil_admin_fee = thousands_separators(hasil_admin_fee.toFixed(2));

		    	// Untuk memberikan nilai blank pada annuity saat hasil_admin_fee bernilai NaN
		        if (isNaN(hasil_admin_fee)) {
		        	document.getElementById("admin_fee").value = '';
		        } else {
		        	document.getElementById("admin_fee").value = uang + ' ' + tampil_admin_fee;
		        }
		    }
		}

		function cekTenor() {
			if (document.getElementById("tenor").value < 12) {
				swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Tenor minimal 12'
		        })
		        document.getElementById("tenor").value = '';
		        document.form_input.angsuran.focus();
			} else if (document.getElementById("tenor").value > 36) {
				swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Tenor maksimal 36'
		        })
		        document.getElementById("tenor").value = '';
		        document.form_input.angsuran.focus();
			} else {

			}
		}

		function cekAngsuran() {
			var cek = document.getElementById("angsuran").value,
			split = cek.split(" "),
			uang = split[0],
			nominal = split[1],
			angsuran = nominal.replace(/[.]+/g, '');

			if (angsuran < 100000) {
		        // alert('Minimal angsuran sebesar Rp 100,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal angsuran sebesar Rp 100,000'
		        })
		        document.getElementById("angsuran").value = '';
		        document.form_input.angsuran.focus();
		    } else if (angsuran > 12000000) {
		    	// alert('Maksimal angsuran sebesar Rp 12,000,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Maksimal angsuran sebesar Rp 12,000,000'
		        })
		        document.getElementById("angsuran").value = '';
		        document.form_input.angsuran.focus();
		    }
		}

		function cekBiaya() {
			var cek = document.getElementById("admin_fee").value,
			split = cek.split(" "),
			uang = split[0],
			nominal = split[1],
			admin_fee = nominal.replace(/[.]+/g, '');

			if (admin_fee < 12000) {
		        // alert('Minimal biaya admin sebesar Rp 12,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Minimal biaya admin sebesar Rp 12,000'
		        })
		        document.getElementById("admin_fee").value = '';
		        document.form_input.admin_fee.focus();
		    } else if (admin_fee > 2880000) {
		    	// alert('Maksimal biaya admin sebesar Rp 2,880,000');
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'Maksimal biaya admin sebesar Rp 2,880,000'
		        })
		        document.getElementById("admin_fee").value = '';
		        document.form_input.admin_fee.focus();
		    }
		}

		function isNumber(evt) {
			var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
			if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
				return false;
			}

			return true;
		}  

		function cekNik() {
			if (document.getElementById("nik").length < 16) {
		        swal({
		        	icon: 'error',
		        	title: 'Oops...',
		        	text: 'NIK anda kurang dari 16 karakter'
		        })
		        document.form_input.nik.focus();
		    }
		}
	</script>

	<?php include "footer.php"; ?>