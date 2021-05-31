<?php
	echo "nama_depan => " . $_POST['nama_depan'] . "<br>";
	echo "nama_tengah => " . $_POST['nama_tengah'] . "<br>";
	echo "nama_belakang => " . $_POST['nama_belakang'] . "<br>";
	echo "nama_ibu => " . $_POST['nama_ibu'] . "<br>";
	echo "nik => " . $_POST['nik'] . "<br>";
	echo "jenis_kelamin => " . $_POST['jenis_kelamin'] . "<br>";
	echo "tanggal_lahir => " . $_POST['tanggal_lahir'] . "<br>";
	echo "status_perkawinan => " . $_POST['status_perkawinan'] . "<br>";
	echo "jumlah_tanggungan => " . $_POST['jumlah_tanggungan'] . "<br>";
	echo "alamat_ktp => " . $_POST['alamat_ktp'] . "<br>";
	echo "alamat_domisili => " . $_POST['alamat_domisili'] . "<br>";
	echo "no_telp => " . $_POST['no_telp'] . "<br>";
	echo "no_hp => " . $_POST['no_hp'] . "<br>";
	echo "sm_facebook => " . $_POST['sm_facebook'] . "<br>";
	echo "sm_twitter => " . $_POST['sm_twitter'] . "<br>";
	echo "sm_instagram => " . $_POST['sm_instagram'] . "<br>";
	echo "sm_linkedin => " . $_POST['sm_linkedin'] . "<br>";
	echo "sm_blog => " . $_POST['sm_blog'] . "<br>";
	echo "sm_lainnya => " . $_POST['sm_lainnya'] . "<br>";
	echo "status_tempat_tinggal => " . $_POST['status_tempat_tinggal'] . "<br>";
	echo "lama_tinggal => " . $_POST['lama_tinggal'] . "<br>";
	echo "pendidikan => " . $_POST['pendidikan'] . "<br>";
	echo "kd_nama => " . $_POST['kd_nama'] . "<br>";
	echo "kd_hubungan => " . $_POST['kd_hubungan'] . "<br>";
	echo "kd_no_telp => " . $_POST['kd_no_telp'] . "<br>";
	echo "kd_alamat => " . $_POST['kd_alamat'] . "<br>";
	echo "sumber_penghasilan => " . $_POST['sumber_penghasilan'] . "<br>";

	echo "<br><b>SUMBER PENGHASILAN</b><br>";

	echo "nama_perusahaan => " . $_POST['nama_perusahaan'] . "<br>";

	if ($_POST['sumber_penghasilan'] == "Gaji Kerja") {
		echo "level_perusahaan_gaji => " . $_POST['level_perusahaan_gaji'] . "<br>";		
	} else {
		echo "level_perusahaan_usaha => " . $_POST['level_perusahaan_usaha'] . "<br>";
	}

	echo "alamat_perusahaan => " . $_POST['alamat_perusahaan'] . "<br>";
	echo "no_telp_perusahaan => " . $_POST['no_telp_perusahaan'] . "<br>";
	echo "ext => " . $_POST['ext'] . "<br>";
	echo "website_perusahaan => " . $_POST['website_perusahaan'] . "<br>";

	if ($_POST['sumber_penghasilan'] == "Gaji Kerja") {
		echo "Lama Bekerja => " . $_POST['tahun_kerja'] . " tahun, " . $_POST['bulan_kerja'] . " bulan<br>";
		echo "jenis_usaha_gaji => " . $_POST['jenis_usaha_gaji'] . "<br>";
		echo "status_kepegawaian => " . $_POST['status_kepegawaian'] . "<br>";
		echo "jabatan => " . $_POST['jabatan'] . "<br>";
		echo "level_jabatan => " . $_POST['level_jabatan'] . "<br>";
		echo "gaji_thp => " . $_POST['gaji_thp'] . "<br>";
		echo "penghasilan_tambahan_gk => " . $_POST['penghasilan_tambahan_gk'] . "<br>";
		echo "sumber_penghasilan_tambahan_gk => " . $_POST['sumber_penghasilan_tambahan_gk'] . "<br>";

	} else {
		echo "Lama Usaha => " . $_POST['tahun_usaha'] . " tahun, " . $_POST['bulan_usaha'] . " bulan<br>";
		echo "status_tempat_usaha => " . $_POST['status_tempat_usaha'] . "<br>";
		echo "jumlah_karyawan => " . $_POST['jumlah_karyawan'] . "<br>";
		echo "jenis_usaha => " . $_POST['jenis_usaha'] . "<br>";

		if ($_POST['jenis_usaha'] == "Perdagangan") {
			echo "omset_usaha => " . $_POST['omset_usaha'] . "<br>";
			echo "hpp => " . $_POST['hpp'] . "<br>";
			echo "laba_kotor_gpm => " . $_POST['laba_kotor_gpm'] . "<br>";
			echo "gaji_karyawan => " . $_POST['gaji_karyawan'] . "<br>";
			echo "biaya_sewa => " . $_POST['biaya_sewa'] . "<br>";
			echo "biaya_umum => " . $_POST['biaya_umum'] . "<br>";
			echo "biaya_rumah_tangga => " . $_POST['biaya_rumah_tangga'] . "<br>";
			echo "piutang_usaha => " . $_POST['piutang_usaha'] . "<br>";
			echo "utang_usaha => " . $_POST['utang_usaha'] . "<br>";
			echo "utang_bank => " . $_POST['utang_bank'] . "<br>";
			echo "penghasilan_tambahan_hu => " . $_POST['penghasilan_tambahan_hu'] . "<br>";
			
		} elseif ($_POST['jenis_usaha'] == "Jasa") {
			echo "omset_usaha => " . $_POST['omset_usaha'] . "<br>";
			echo "laba_kotor => " . $_POST['laba_kotor'] . "<br>";
			echo "gaji_karyawan => " . $_POST['gaji_karyawan'] . "<br>";
			echo "biaya_sewa => " . $_POST['biaya_sewa'] . "<br>";
			echo "biaya_umum => " . $_POST['biaya_umum'] . "<br>";
			echo "biaya_rumah_tangga => " . $_POST['biaya_rumah_tangga'] . "<br>";
			echo "penghasilan_tambahan_hu => " . $_POST['penghasilan_tambahan_hu'] . "<br>";

		} elseif ($_POST['jenis_usaha'] == "Manufaktur") {
			echo "omset_usaha => " . $_POST['omset_usaha'] . "<br>";
			echo "laba_kotor => " . $_POST['laba_kotor'] . "<br>";
			echo "gaji_karyawan => " . $_POST['gaji_karyawan'] . "<br>";
			echo "biaya_sewa => " . $_POST['biaya_sewa'] . "<br>";
			echo "biaya_umum => " . $_POST['biaya_umum'] . "<br>";
			echo "biaya_rumah_tangga => " . $_POST['biaya_rumah_tangga'] . "<br>";
			echo "persediaan_barang => " . $_POST['persediaan_barang'] . "<br>";
			echo "piutang_usaha => " . $_POST['piutang_usaha'] . "<br>";
			echo "utang_usaha => " . $_POST['utang_usaha'] . "<br>";
			echo "utang_bank => " . $_POST['utang_bank'] . "<br>";

		} else {
			echo "harga_komoditi => " . $_POST['harga_komoditi'] . "<br>";
			echo "hasil_panen => " . $_POST['hasil_panen'] . "<br>";
			echo "luas_lahan => " . $_POST['luas_lahan'] . "<br>";
			echo "biaya_pupuk => " . $_POST['biaya_pupuk'] . "<br>";
			echo "biaya_tk => " . $_POST['biaya_tk'] . "<br>";
			echo "channel_penjualan => " . $_POST['channel_penjualan'] . "<br>";
			echo "cara_bayar => " . $_POST['cara_bayar'] . "<br>";
			echo "piutang_usaha => " . $_POST['piutang_usaha'] . "<br>";
			echo "utang_usaha => " . $_POST['utang_usaha'] . "<br>";
			echo "utang_bank => " . $_POST['utang_bank'] . "<br>";
			echo "penghasilan_tambahan_hu => " . $_POST['penghasilan_tambahan_hu'] . "<br>";

		}

		echo "sarana_prasarana => " . $_POST['sarana_prasarana'] . "<br>";
	}

	echo "<br><b>PENGAJUAN KREDIT</b><br>";

	echo "plafon_kredit => " . $_POST['plafon_kredit'] . "<br>";
	echo "tenor_debitur => " . $_POST['tenor_debitur'] . "<br>";
	echo "bunga => " . $_POST['bunga'] . "<br>";
	echo "angsuran => " . $_POST['angsuran'] . "<br>";
	echo "tujuan_kredit => " . $_POST['tujuan_kredit'] . "<br>";

	if ($_POST['tujuan_kredit'] == "Produktif") {
		echo "jenis_kredit_pro => " . $_POST['jenis_kredit_pro'] . "<br>";
	} else {
		echo "jenis_kredit_kon => " . $_POST['jenis_kredit_kon'] . "<br>";
	}

	if ($_POST['rab']) {
		echo "rab => " . $_POST['rab'] . "<br>";
	} else {
		echo "rab => " . $_POST['rab'] . "<br>";
	}

	echo "<br><b>UNGGAH BERKAS</b><br>";
	echo "berkas_ktp => " . $_FILES['berkas_ktp']['name'] . "<br>";
	echo "berkas_akta_kelahiran => " . $_FILES['berkas_akta_kelahiran']['name'] . "<br>";

	if ($_FILES['berkas_akta_nikah']['name']) {
		echo "berkas_akta_nikah => " . $_FILES['berkas_akta_nikah']['name'] . "<br>";
	}

	echo "berkas_kk => " . $_FILES['berkas_kk']['name'] . "<br>";
	echo "berkas_ijazah => " . $_FILES['berkas_ijazah']['name'] . "<br>";

	if ($_POST['sumber_penghasilan'] == "Gaji Kerja") {
		echo "berkas_slip_gaji => " . $_FILES['berkas_slip_gaji']['name'] . "<br>";

		if ($_FILES['berkas_penghasilan_tambahan_gaji']['name']) {
			echo "berkas_penghasilan_tambahan_gaji => " . $_FILES['berkas_penghasilan_tambahan_gaji']['name'] . "<br>";
		}
		

	} else {
		echo "berkas_siup => " . $_FILES['berkas_siup']['name'] . "<br>";
		echo "berkas_ho => " . $_FILES['berkas_ho']['name'] . "<br>";
		echo "berkas_npwp => " . $_FILES['berkas_npwp']['name'] . "<br>";
		echo "berkas_akta_pendirian => " . $_FILES['berkas_akta_pendirian']['name'] . "<br>";
		echo "berkas_lap_keuangan => " . $_FILES['berkas_lap_keuangan']['name'] . "<br>";

		if ($_POST['jenis_usaha'] == "Perdagangan") {
			echo "berkas_biaya_sewa => " . $_FILES['berkas_biaya_sewa']['name'] . "<br>";
			echo "berkas_biaya_rt => " . $_FILES['berkas_biaya_rt']['name'] . "<br>";
			echo "berkas_nota_penjualan => " . $_FILES['berkas_nota_penjualan']['name'] . "<br>";
			echo "berkas_tagihan => " . $_FILES['berkas_tagihan']['name'] . "<br>";

			if ($_POST['penghasilan_tambahan_hu']) {
				echo "berkas_penghasilan_tambahan => " . $_FILES['berkas_penghasilan_tambahan']['name'] . "<br>";
			}
			
		} elseif ($_POST['jenis_usaha'] == "Jasa") {
			echo "berkas_biaya_sewa => " . $_FILES['berkas_biaya_sewa']['name'] . "<br>";
			echo "berkas_biaya_rt => " . $_FILES['berkas_biaya_rt']['name'] . "<br>";
			
			if ($_POST['penghasilan_tambahan_hu']) {
				echo "berkas_penghasilan_tambahan => " . $_FILES['berkas_penghasilan_tambahan']['name'] . "<br>";
			}

		} elseif ($_POST['jenis_usaha'] == "Manufaktur") {
			echo "berkas_biaya_sewa => " . $_FILES['berkas_biaya_sewa']['name'] . "<br>";
			echo "berkas_nota_penjualan => " . $_FILES['berkas_nota_penjualan']['name'] . "<br>";
			echo "berkas_tagihan => " . $_FILES['berkas_tagihan']['name'] . "<br>";

		} else {
			echo "berkas_rekening_koran => " . $_FILES['berkas_rekening_koran']['name'] . "<br>";
			echo "berkas_kepemilikan_lahan => " . $_FILES['berkas_kepemilikan_lahan']['name'] . "<br>";
			echo "berkas_nota_penjualan => " . $_FILES['berkas_nota_penjualan']['name'] . "<br>";
			echo "berkas_tagihan => " . $_FILES['berkas_tagihan']['name'] . "<br>";
			
			if ($_POST['penghasilan_tambahan_hu']) {
				echo "berkas_penghasilan_tambahan => " . $_FILES['berkas_penghasilan_tambahan']['name'] . "<br>";
			}

		}

		if ($_POST['rab']) {
			echo "berkas_rab => " . $_FILES['berkas_rab']['name'] . "<br>";
		}
		
	}

	for ($i=0; $i < $_POST['jml_jaminan']; $i++) { 
		$set = "berkas_kepemilikan_jaminan_" . $i;
		echo "berkas_kepemilikan_jaminan_" . $i . " => " . $_FILES[$set]['name'] . "<br>";
	}

	echo "<br><br>";
	echo "<a href='hasil_prediksi.php'>OK</a>";
?>