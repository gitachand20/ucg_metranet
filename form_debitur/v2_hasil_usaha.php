<div class="row mb-3 d-none">
	<table width="100%">
		<tr>
			<td></td>

			<td width="21%" style="padding: 0px 10px;">
				<a href="#" id="btn-observasi" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_observasi" style="width: 100%; display: none;">
					<span class="icon1 text-white">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text font-weight-bold">Tambah Barang</span>
				</a>
			</td>

			<td width="22%" style="padding: 0px 10px;">
				<a href="#"  id="btn-sup" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_suplier" style="width: 100%;">
					<span class="icon1 text-white">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text font-weight-bold">Tambah Pemasok</span>
				</a>
			</td>

			<td width="22%" style="padding: 0px 10px;">
				<a href="#" id="btn-buy" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#modal_buyer" style="width: 100%;">
					<span class="icon1 text-white">
						<i class="fas fa-plus"></i>
					</span>
					<span class="text font-weight-bold">Tambah Pembeli</span>
				</a>
			</td>
		</tr>
	</table>
</div>

<form name="form_input_hasil_usaha" class="needs-validation" method="POST" action="#" novalidate>
	<div class="form-group">
		<label class="labelku">Nama Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="Nama Perusahaan" required>
		<div class="invalid-feedback">
			Nama Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Level Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
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

	<div class="form-group">
		<label class="labelku">Alamat Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="alamat_perusahaan" id="alamat_perusahaan" placeholder="Alamat Perusahaan" required>
		<div class="invalid-feedback">
			Alamat Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">No Telp Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<div class="row">
			<div class="col-lg-6">
				<input class="form-control" type="text" name="no_telp_perusahaan" id="no_telp_perusahaan" placeholder="No Telp Perusahaan" required>
				<div class="invalid-feedback">
					No Telp Perusahaan tidak boleh kosong.
				</div>
			</div>

			<div class="col-lg-6">
				<input class="form-control" type="text" name="ext" id="ext" placeholder="Ext" onkeypress="return numOnly(event)">
			</div>
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Website Perusahaan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<input class="form-control" type="text" name="website_perusahaan" id="website_perusahaan" placeholder="Website Perusahaan" onchange="cekWebsite()" required>
		<div class="invalid-feedback">
			Website Perusahaan tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Lama Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="lama_usaha" id="lama_usaha" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Kurang dari 1 Tahun">Kurang dari 1 Tahun</option>
			<option value="1 - 2,9 Tahun">1 - 2,9 Tahun</option>
			<option value="3 - 5 Tahun">3 - 5 Tahun</option>
			<option value="Lebih dari 5 Tahun">Lebih dari 5 Tahun</option>
		</select>
		<div class="invalid-feedback">
			Lama Usaha tidak boleh kosong.
		</div>
	</div>

	<div class="form-group">
		<label class="labelku">Status Tempat Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="status_tempat_usaha" id="status_tempat_usaha" required>
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

	<div class="form-group">
		<label class="labelku">Jumlah Karyawan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
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

	<div class="form-group">
		<label class="labelku">Jenis Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
		<select class="form-control" name="jenis_usaha" id="jenis_usaha" onchange="setJenisUsaha()" style="border-color: ; background-color: ;" required>
			<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
			<option value="Perdagangan">Perdagangan</option>
			<option value="Jasa">Jasa</option>
			<option value="Manufaktur">Manufaktur</option>
			<option value="Pertanian">Pertanian</option>
		</select>

		<span id="ket_perdagangan" style="display: none; margin-top: 5px; font-size: 11pt; color: #ff0000; font-weight: bold;">
			Data Periode per Tahun / 12 Bulan
		</span>

		<div class="invalid-feedback">
			Jenis Usaha tidak boleh kosong.
		</div>
	</div>

	<!-- Omset Usaha => Perdagangan dan Manufaktur -->
	<fieldset id="omset-usaha" style="display: none;">
		<div class="form-group">
			<label class="labelku">Omset Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="omset_usaha" id="omset_usaha" placeholder="Rp" onchange="hitungLabaKotorGpm()" autocomplete="off">
			<div class="invalid-feedback">
				Omset Usaha tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Omset Usaha => Jasa -->
	<fieldset id="omset-usaha-jasa" style="display: none;">
		<div class="form-group">
			<label class="labelku">Omset Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<div class="row">
				<div class="col-lg-3">
					<input class="form-control" type="text" name="cek_omset_usaha_jasa" id="cek_omset_usaha_jasa" placeholder="Rp" onchange="hitungOmsetJasa()" autocomplete="off">
					<div class="invalid-feedback">
						Omset Usaha tidak boleh kosong.
					</div>
				</div>

				<div class="col-lg-3">
					<input class="form-control" type="text" name="omset_usaha_jasa" id="omset_usaha_jasa" placeholder="Rp" readonly>
				</div>

				<div class="col-lg-1"></div>

				<div class="col-lg-4">
					<label class="col-lg-12 col-form-label labelku" style="text-align: right; width: 100%; padding-right: 0;">Risk Acceptance (RAC) %</label>
				</div>

				<div class="col-lg-1">
					<input class="form-control" type="text" name="rac" id="rac" value="50" readonly>
				</div>
			</div>
		</div>
	</fieldset>

	<!-- Hasil Usaha Perdagangan dan Manufaktur -->
	<fieldset id="form-2-usaha-perdagangan" style="display: none;">
		<div class="form-group">
			<label class="labelku">HPP <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="hpp" id="hpp" placeholder="Rp" onchange="hitungLabaKotorGpm()" autocomplete="off">
			<div class="invalid-feedback">
				HPP tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Laba Kotor / GPM</label>
			<input class="form-control" type="text" name="laba_kotor_gpm" id="laba_kotor_gpm" placeholder="Rp" readonly>
		</div>
	</fieldset>

	<!-- Laba Kotor => Jasa -->
	<fieldset id="laba-kotor" style="display: none;">
		<div class="form-group">
			<label class="labelku">Laba Kotor <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="laba_kotor" id="laba_kotor" placeholder="Rp" readonly>
		</div>
	</fieldset>

	<!-- Biaya - biaya => Perdagangan, Jasa dan Mnufaktur -->
	<fieldset id="biaya-biaya" style="display: none;">
		<div class="form-group">
			<label class="labelku">Biaya Gaji Karyawan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="gaji_karyawan" id="gaji_karyawan" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Biaya Gaji Karyawan tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Sewa <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="biaya_sewa" id="biaya_sewa" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Biaya Sewa tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Umum dan Administrasi <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="biaya_umum" id="biaya_umum" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Biaya Umum dan Administrasi tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Rumah Tangga <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="biaya_rumah_tangga" id="biaya_rumah_tangga" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Biaya Rumah Tangga tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Hasil Usaha Manufaktur -->
	<fieldset id="form-2-usaha-manufaktur" style="display: none;">
		<div class="form-group">
			<label class="labelku">Jumlah Persediaan Barang <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="persediaan_barang" id="persediaan_barang" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Jumlah Persediaan Barang tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Hasil Usaha Pertanian -->
	<fieldset id="form-2-usaha-pertanian" style="display: none;">
		<div class="form-group">
			<label class="labelku">Harga Komoditi per Kilo <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="harga_komoditi" id="harga_komoditi" placeholder="Rp" onchange="hitungOmsetPertanian()" autocomplete="off">
			<div class="invalid-feedback">
				Harga Komoditi per Kilo tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Hasil per Panen <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="hasil_panen" id="hasil_panen" placeholder="Kg" onkeypress="return isNumber(event)" onchange="hitungOmsetPertanian()" autocomplete="off">
			<div class="invalid-feedback">
				Hasil per Panen tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Omset Usaha</label>
			<input class="form-control" type="text" name="omset_usaha_pertanian" id="omset_usaha_pertanian" placeholder="Rp" readonly>
		</div>

		<div class="form-group">
			<label class="labelku">Pengalaman Panen <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="pengalaman_panen" id="pengalaman_panen" placeholder="Berapa Kali" autocomplete="off">
			<div class="invalid-feedback">
				Pengalaman Panen tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Luas Lahan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="luas_lahan" id="luas_lahan" placeholder="m&sup2" onkeypress="return numOnly(event)" autocomplete="off">
			<div class="invalid-feedback">
				Luas Lahan tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Pupuk <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="biaya_pupuk" id="biaya_pupuk" placeholder="Rp">
			<div class="invalid-feedback" autocomplete="off">
				Biaya Pupuk tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Tenaga Kerja Borongan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="biaya_tk" id="biaya_tk" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Biaya Tenaga Kerja Borongan tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Sewa</label>
			<input class="form-control" type="text" name="biaya_sewa_pertanian" id="biaya_sewa_pertanian" placeholder="Rp" autocomplete="off">
		</div>

		<div class="form-group">
			<label class="labelku">Biaya Rumah Tangga</label>
			<input class="form-control" type="text" name="biaya_rt_pertanian" id="biaya_rt_pertanian" placeholder="Rp" autocomplete="off">
		</div>

		<div class="form-group">
			<label class="labelku">GPM</label>
			<input class="form-control" type="text" name="gpm_pertanian" id="gpm_pertanian" placeholder="Rp" autocomplete="off">
		</div>

		<div class="form-group">
			<label class="labelku">Channel Penjualan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<select class="form-control" name="channel_penjualan" id="channel_penjualan">
				<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
				<option value="Pembeli Tetap">Pembeli Tetap</option>
				<option value="Retail / Eceran">Retail / Eceran</option>
			</select>
			<div class="invalid-feedback">
				Channel Penjualan tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Cara Pembayaran Penjualan <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<select class="form-control" name="cara_bayar" id="cara_bayar">
				<option value="" disabled="disabled" selected="selected">Pilih Opsi</option>
				<option value="Cash">Cash / Tunai</option>
				<option value="Credit">Credit / Tempo</option>
			</select>
			<div class="invalid-feedback">
				Cara Pembayaran Penjualan tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Utang Piutang => Perdagangan, Manufaktur dan Pertanian -->
	<fieldset id="utang-piutang" style="display: none;">
		<div class="form-group">
			<label class="labelku">Piutang Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="piutang_usaha" id="piutang_usaha" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Piutang Usaha tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Utang Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="utang_usaha" id="utang_usaha" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Utang Usaha tidak boleh kosong.
			</div>
		</div>

		<div class="form-group">
			<label class="labelku">Utang Bank Modal Kerja <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="utang_bank" id="utang_bank" placeholder="Rp" autocomplete="off">
			<div class="invalid-feedback">
				Utang Bank Modal Kerja tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Sarana Prasarana Usaha => Perdagangan, Jasa, Manufaktur dan Pertanian -->
	<fieldset id="sarana-prasarana" style="display: none;">
		<div class="form-group">
			<label class="labelku">Sarana dan Prasarana Usaha <sup style="color: #FF0000; font-weight: bold;">*</sup></label>
			<input class="form-control" type="text" name="sarana_prasarana" id="sarana_prasarana" placeholder="Rp" autocomplete="off" required>
			<div class="invalid-feedback">
				Sarana dan Prasarana Usaha tidak boleh kosong.
			</div>
		</div>
	</fieldset>

	<!-- Penghasilan Tambahan => Perdagangan, Jasa dan Pertanian -->
	<fieldset id="penghasilan-tambahan" style="display: none;">
		<div class="form-group">
			<label class="labelku">Penghasilan Tambahan</label>
			<div class="row">
				<div class="col-lg-6">
					<input class="form-control" type="text" name="penghasilan_tambahan_hu" id="penghasilan_tambahan_hu" placeholder="Rp" onchange="setPTUsaha()" autocomplete="off">
					<div class="invalid-feedback">
						Penghasilan Tambahan tidak boleh kosong.
					</div>
				</div>

				<div class="col-lg-6">
					<select class="form-control" name="sumber_penghasilan_tambahan_hu" id="sumber_penghasilan_tambahan_hu" onchange="setPTSUsaha()">
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
	</fieldset>

	<!-- Observasi GPM -->
	<fieldset id="observasi-gpm" style="display: none;">
		<div class="form-group">
			<table width="100%">
				<tr>
					<td class="labelku">Observasi GPM</td>
					<td align="right">
						<input type="button" class="btn1 btn-outline-warning fa-size font-weight-bold mb-1" value="&#xf067; Tambah Barang" data-toggle="modal" data-target="#modal_observasi">
					</td>
				</tr>
			</table>
			<table class="table table-gpm" width="100%">
				<thead>
					<tr>
						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">Nama Barang</span>
						</td>

						<td class="labelku" align="center" width="25%">
							<span class="mb-2" style="font-size: 10pt;">Harga Beli</span>
						</td>

						<td class="labelku" align="center" width="25%">
							<span class="mb-2" style="font-size: 10pt;">Harga Jual</span>
						</td>

						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
						</td>
					</tr>
				</thead>

				<tbody id="list_gpm">

				</tbody>
			</table>
		</div>
	</fieldset>

	<!-- Form Suplier dan Buyer -->
	<fieldset id="suplier-buyer">
		<div class="form-group">
			<table width="100%">
				<tr>
					<td class="labelku">Pemasok</td>
					<td align="right">
						<input type="button" class="btn1 btn-outline-warning fa-size font-weight-bold mb-1" value="&#xf067; Tambah Pemasok" data-toggle="modal" data-target="#modal_suplier">
					</td>
				</tr>
			</table>
			<table class="table table-sup" width="100%">
				<thead>
					<tr>
						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">Nama Pemasok</span>
						</td>

						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">PIC yang dapat dihubungi</span>
						</td>

						<td class="labelku" align="center" width="10%">
							<span class="mb-2" style="font-size: 10pt;">Lama Hubungan Usaha</span>
						</td>

						<td class="labelku" align="center" width="15%">
							<span class="mb-2" style="font-size: 10pt;">Pembelian per Bulan</span>
						</td>

						<td class="labelku" align="center" width="10%">
							<span class="mb-2" style="font-size: 10pt;">Sistem per Bulan</span>
						</td>

						<td class="labelku" align="center" width="15%">
							<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
						</td>
					</tr>
				</thead>

				<tbody id="list_sup">

				</tbody>
			</table>
		</div>

		<div class="form-group">
			<table width="100%">
				<tr>
					<td class="labelku">Pembeli</td>
					<td align="right">
						<input type="button" class="btn1 btn-outline-warning fa-size font-weight-bold mb-1" value="&#xf067; Tambah Pembeli" data-toggle="modal" data-target="#modal_buyer">
					</td>
				</tr>
			</table>
			
			<table class="table table-buy" width="100%">
				<thead>
					<tr>
						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">Nama Pembeli</span>
						</td>

						<td class="labelku" align="center">
							<span class="mb-2" style="font-size: 10pt;">PIC yang dapat dihubungi</span>
						</td>

						<td class="labelku" align="center" width="10%">
							<span class="mb-2" style="font-size: 10pt;">Lama Hubungan Usaha</span>
						</td>

						<td class="labelku" align="center" width="15%">
							<span class="mb-2" style="font-size: 10pt;">Pembelian per Bulan</span>
						</td>

						<td class="labelku" align="center" width="10%">
							<span class="mb-2" style="font-size: 10pt;">Sistem per Bulan</span>
						</td>

						<td class="labelku" align="center" width="15%">
							<span class="mb-2" style="font-size: 10pt;">Tindakan</span>
						</td>
					</tr>
				</thead>

				<tbody id="list_buy">

				</tbody>
			</table>
		</div>
	</fieldset>

	<div class="form-group" style="float: right;">
		<a href="#" class="btn btn-custom-ad" data-toggle="modal" data-target="#simpan_hasil_usaha" data-backdrop="static" data-keyboard="false">Simpan</a>
		<!-- <input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan"> -->
	</div>
</form>


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

<div class="modal fade" id="ubah_observasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 700px;">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Ubah Observasi GPM</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff;">×</span>
				</button>
			</div>

			<div class="modal-body">
				<input type="hidden" id="id_ubah_gpm">
				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Barang</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control add-observasi" type="text" id="ubah_nama_barang" placeholder="Nama Barang" value="" autocomplete="off"> 
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Beli</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control add-observasi" type="text" id="ubah_harga_beli" placeholder="Rp" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Harga Jual</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control add-observasi" type="text" id="ubah_harga_jual" placeholder="Rp" value="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-custom-dis" id="btnUbahObservasi" type="button" onclick="ubahObservasi()" disabled="disabled">Simpan</button>
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

<div class="modal fade" id="ubah_sup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 700px;">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Ubah Pemasok</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff;">×</span>
				</button>
			</div>

			<div class="modal-body">
				<input type="hidden" id="id_ubah_sup">
				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Pemasok</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-sup" type="text" id="ubah_nama_suplier" placeholder="Nama Pemasok" onkeypress="return alphaOnly(event)" value="" autocomplete="off"> 
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-sup" type="text" id="ubah_pic_sup" placeholder="No Telp" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-sup" type="text" id="ubah_lama_hubungan_sup" placeholder="Tahun" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-sup" type="text" id="ubah_pembelian_perbulan_sup" placeholder="Unit" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-sup" type="text" id="ubah_sistem_perbulan_sup" placeholder="Bulan" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-custom-dis" id="btnUbahPemasok" type="button" onclick="ubahSuplier()" disabled="disabled">Simpan</button>
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

<div class="modal fade" id="ubah_buy" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document" style="max-width: 700px;">
		<div class="modal-content">
			<div class="modal-header bg-success">
				<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Ubah Pembeli</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true" style="color: #fff;">×</span>
				</button>
			</div>

			<div class="modal-body">
				<input type="hidden" id="id_ubah_buy">
				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Nama Pembeli</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-buy" type="text" id="ubah_nama_buyer" placeholder="Nama Pembeli" onkeypress="return alphaOnly(event)" value="" autocomplete="off"> 
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">PIC yang dapat dihubungi</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-buy" type="text" id="ubah_pic_buy" placeholder="No Telp" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Lama Hubungan Usaha</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-buy" type="text" id="ubah_lama_hubungan_buy" placeholder="Tahun" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Pembelian per Bulan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-buy" type="text" id="ubah_pembelian_perbulan_buy" placeholder="Unit" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>

				<div class="row">
					<label class="col-lg-4 col-xs-12 col-form-label labelku">Sistem per Bulan</label>
					<div class="col-lg-8 col-xs-12 mb-3">
						<input class="form-control ubah-buy" type="text" id="ubah_sistem_perbulan_buy" placeholder="Bulan" onkeypress="return numOnly(event)" value="" autocomplete="off">
					</div>
				</div>
			</div>

			<div class="modal-footer">
				<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
				<button class="btn btn-custom-dis" id="btnUbahPembeli" type="button" onclick="ubahBuyer()" disabled="disabled">Simpan</button>
			</div>
		</div>
	</div>
</div>


<script id="draft_gpm" type="text/x-handlebars-template">
	<tr class="hapus_list_gpm" id="hapus_list_gpm">
		<td>
			<input class="form-control id-gpm" type="hidden" name="index_gpm[]" value="{{ index_gpm }}" readonly>
			<input class="form-control" type="text" name="nama_barang[]" value="@{{ nama_barang }}" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="harga_beli[]" value="@{{ harga_beli }}" style="text-align: right;" readonly>
		</td>

		<td>
			<input class="form-control" type="text" name="harga_jual[]" value="@{{ harga_jual }}" style="text-align: right;" readonly>
		</td>

		<td align="center">
			<input type="button" id="cek_gpm" class="btn btn-outline-info fa-edit font-weight-bold" value="&#xf044;" data-toggle="modal" data-target="#ubah_observasi">

			<button id="hapus_gpm" class="btn btn-outline-warning font-weight-bold">
				<i class="fas fa-trash-alt"></i>
			</button>
		</td>
	</tr>
</script>

<script id="draft_sup" type="text/x-handlebars-template">
	<tr class="hapus_list_sup" id="hapus_list_sup">
		<td>
			<input class="form-control id-sup" type="hidden" name="index_sup[]" value="{{ index_sup }}" readonly>
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
			<input type="button" id="cek_sup" class="btn btn-outline-info fa-edit font-weight-bold" value="&#xf044;" data-toggle="modal" data-target="#ubah_sup">

			<button id="hapus_sup" class="btn btn-outline-warning font-weight-bold">
				<i class="fas fa-trash-alt"></i>
			</button>
		</td>
	</tr>
</script>

<script id="draft_buyer" type="text/x-handlebars-template">
	<tr class="hapus_list_buy" id="hapus_list_buy">
		<td>
			<input class="form-control id-buy" type="hidden" name="index_buy[]" value="{{ index_buy }}" readonly>
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
			<input type="button" id="cek_buy" class="btn btn-outline-info fa-edit font-weight-bold" value="&#xf044;" data-toggle="modal" data-target="#ubah_buy">

			<button id="hapus_buy" class="btn btn-outline-warning font-weight-bold">
				<i class="fas fa-trash-alt"></i>
			</button>
		</td>
	</tr>
</script>

<div class="modal fade" id="simpan_hasil_usaha" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content" style="border-radius: 27px;">
			<div class="modal-body">
				<center>
					<img src="../img/success.gif" width=45><br><br>
					<hr>
					<span style="font-size: 1.8rem; color: #000;">Data Sumber Penghasilan Hasil Usaha Berhasil Disimpan</span><br>
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