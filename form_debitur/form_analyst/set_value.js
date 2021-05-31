window.onload = (event) => {
	document.getElementById("label_menu_2").style.display = "none";
	document.getElementById("btn_menu_2").style.display = "block";
	document.getElementById("label_menu_3").style.display = "none";
	document.getElementById("btn_menu_3").style.display = "block";
	document.getElementById("label_menu_4").style.display = "none";
	document.getElementById("btn_menu_4").style.display = "block";
	document.getElementById("label_menu_5").style.display = "none";
	document.getElementById("btn_menu_5").style.display = "block";

    document.getElementById("nama_depan").value = "Purnando";
    document.getElementById("nama_tengah").value = "Gita";
    document.getElementById("nama_belakang").value = "Chandra";
    document.getElementById("nama_ibu").value = "Iya";
    document.getElementById("nik").value = "1234567890123456";
    document.getElementById("gender_m").checked = true;
    document.getElementById("tanggal_lahir").value = "04/21/1996";

    // document.getElementById("status_perkawinan").value = "Belum Menikah";
    document.getElementById("status_perkawinan").value = "Menikah";

    document.getElementById("jumlah_tanggungan").value = "Tidak Memiliki";
    document.getElementById("alamat_ktp").value = "Disana";
    document.getElementById("alamat_domisili").value = "Disini";
    document.getElementById("no_hp").value = phoneFormat("088888888888");
    document.getElementById("email").value = "nando@gita.com";
    document.getElementById("status_tempat_tinggal").value = "Sewa";
    document.getElementById("lama_tinggal").value = "1 - 2 Tahun";
    document.getElementById("pendidikan").value = "S1";
    document.getElementById("kd_nama").value = "Dia";
    document.getElementById("kd_hubungan").value = "Apa Haiyo";
    document.getElementById("kd_no_telp").value = phoneFormat("077777777777");
    document.getElementById("kd_alamat").value = "Adalah disana";

    // document.getElementById("sumber_penghasilan").value = "Gaji Kerja";
    document.getElementById("sumber_penghasilan").value = "Hasil Usaha";

    penghasilan = document.getElementById("sumber_penghasilan").value;

	if (penghasilan == "Gaji Kerja") {
		document.getElementById("jenis_usaha").value = "";
		setNoneJenisUsaha();
		setNullJenisUsaha();
		document.getElementById("ki-rab").style.display = "none";
		document.getElementById("rab").value = "";
		$("#rab").removeAttr("required");
	} else {
		cekProduktif();
	}

	if (penghasilan != simpan_penghasilan) {
		simpan_penghasilan = "";
		jenis_hasil_usaha = "";
	}

	var date = document.getElementById("tanggal_lahir").value;
	var today = new Date();
	var birthday = new Date(date);
	var year = 0;

	if (today.getMonth() < birthday.getMonth()) {
		year = 1;
	} else if ((today.getMonth() == birthday.getMonth()) && today.getDate() < birthday.getDate()) {
		year = 1;
	}

	var age = today.getFullYear() - birthday.getFullYear() - year;

	if (age < 0) {
		age = 0;
	}

	document.getElementById("usia").value = age;

	simpan_penghasilan = penghasilan;
	document.getElementById("penghasilan_tambahan_gk").value = formatUang("5000000", "Rp ");
	document.getElementById("sumber_penghasilan_tambahan_gk").value = "Penghasilan Pasangan";

	document.getElementById("penghasilan_tambahan_hu").value = formatUang("5000000", "Rp ");
	document.getElementById("sumber_penghasilan_tambahan_hu").value = "Penghasilan Pasangan";

	jenis_hasil_usaha = "Perdagangan";
	// jenis_hasil_usaha = "Jasa";
	// jenis_hasil_usaha = "Manufaktur";
	// jenis_hasil_usaha = "Pertanian";

	pk_rab = "Kredit Produktif Investasi";


	n_ktp = "";
	c_ktp = "simpan/KTP - Purnando Gita Chandra.pdf";

	// BERKAS KTP
	if (n_ktp != "") {
		$("#cek_ktp").attr("checked", "checked");
		$("#berkas_ktp").removeAttr("disabled");
		$("#berkas_ktp").attr("required", "");
		$("#berkas_ktp").siblings(".label-ktp").addClass("selected").html(n_ktp);
		$("#sup_ktp").removeClass("d-none");
		$("#sup_ktp").show(); 
		$("#dv_ktp").removeClass("d-none");
    	$("#dv_ktp").show();
    	document.getElementById("v_ktp").href = n_ktp;
	} else {
		$("#d_ktp").removeClass("col-lg-7");
		$("#d_ktp").addClass("col-lg-8");
    	$("#dv_ktp").hide();
	}


	// BERKAS AKTA KELAHIRAN
	if (n_ktp != "") {
		$("#cek_akta_kelahiran").attr("checked", "checked");
		$("#berkas_akta_kelahiran").removeAttr("disabled");
		$("#berkas_akta_kelahiran").attr("required", "");
		$("#berkas_akta_kelahiran").siblings(".label-akta-kelahiran").addClass("selected").html(n_ktp);
		$("#sup_akta_kelahiran").removeClass("d-none");
		$("#sup_akta_kelahiran").show();
		$("#dv_lahir").removeClass("d-none");
    	$("#dv_lahir").show();
    	document.getElementById("v_lahir").href = n_ktp;
	} else {
		$("#d_lahir").removeClass("col-lg-7");
		$("#d_lahir").addClass("col-lg-8");
    	$("#dv_lahir").hide();
	}


	// BERKAS AKTA NIKAH
	if (n_ktp != "") {
		$("#cek_akta_nikah").attr("checked", "checked");
		$("#berkas_akta_nikah").removeAttr("disabled");
		$("#berkas_akta_nikah").attr("required", "");
		$("#berkas_akta_nikah").siblings(".label-akta-nikah").addClass("selected").html(n_ktp);
		$("#sup_akta_nikah").removeClass("d-none");
		$("#sup_akta_nikah").show(); 
		$("#dv_nikah").removeClass("d-none");
    	$("#dv_nikah").show();
    	document.getElementById("v_nikah").href = n_ktp;
	} else {
		$("#d_nikah").removeClass("col-lg-7");
		$("#d_nikah").addClass("col-lg-8");
    	$("#dv_nikah").hide();
	}


	// BERKAS KARTU KELUARGA
	if (n_ktp != "") {
		$("#cek_kk").attr("checked", "checked");
		$("#berkas_kk").removeAttr("disabled");
		$("#berkas_kk").attr("required", "");
		$("#berkas_kk").siblings(".label-kk").addClass("selected").html(n_ktp);
		$("#sup_kk").removeClass("d-none");
		$("#sup_kk").show(); 
		$("#dv_kk").removeClass("d-none");
    	$("#dv_kk").show();
    	document.getElementById("v_kk").href = n_ktp;
	} else {
		$("#d_kk").removeClass("col-lg-7");
		$("#d_kk").addClass("col-lg-8");
    	$("#dv_kk").hide();
	}


	// BERKAS IJAZAH
	if (n_ktp != "") {
		$("#cek_ijazah").attr("checked", "checked");
		$("#berkas_ijazah").removeAttr("disabled");
		$("#berkas_ijazah").attr("required", "");
		$("#berkas_ijazah").siblings(".label-ijazah").addClass("selected").html(n_ktp);
		$("#sup_ijazah").removeClass("d-none");
		$("#sup_ijazah").show(); 
		$("#dv_ijazah").removeClass("d-none");
    	$("#dv_ijazah").show();
    	document.getElementById("v_ijazah").href = n_ktp;
	} else {
		$("#d_ijazah").removeClass("col-lg-7");
		$("#d_ijazah").addClass("col-lg-8");
    	$("#dv_ijazah").hide();
	}


	// BERKAS SLIP GAJI
	if (n_ktp != "") {
		$("#cek_slip_gaji").attr("checked", "checked");
		$("#berkas_slip_gaji").removeAttr("disabled");
		$("#berkas_slip_gaji").attr("required", "");
		$("#berkas_slip_gaji").siblings(".label-slip-gaji").addClass("selected").html(n_ktp);
		$("#sup_slip_gaji").removeClass("d-none");
		$("#sup_slip_gaji").show(); 
		$("#dv_gaji").removeClass("d-none");
    	$("#dv_gaji").show();
    	document.getElementById("v_gaji").href = n_ktp;
	} else {
		$("#d_gaji").removeClass("col-lg-7");
		$("#d_gaji").addClass("col-lg-8");
    	$("#dv_gaji").hide();
	}


	// BERKAS PENGHASILAN TAMBAHAN GAJI KERJA
	if (n_ktp != "") {
		$("#cek_penghasilan_tambahan_gaji").attr("checked", "checked");
		$("#berkas_penghasilan_tambahan_gaji").removeAttr("disabled");
		$("#berkas_penghasilan_tambahan_gaji").attr("required", "");
		$("#berkas_penghasilan_tambahan_gaji").siblings(".label-penghasilan-tambahan-gaji").addClass("selected").html(n_ktp);
		$("#sup_penghasilan_tambahan_gaji").removeClass("d-none");
		$("#sup_penghasilan_tambahan_gaji").show(); 
		$("#dv_ptg").removeClass("d-none");
    	$("#dv_ptg").show();
    	document.getElementById("v_ptg").href = n_ktp;
	} else {
		$("#d_ptg").removeClass("col-lg-7");
		$("#d_ptg").addClass("col-lg-8");
    	$("#dv_ptg").hide();
	}


	// BERKAS SIUP / NIB
	if (n_ktp != "") {
		$("#cek_siup").attr("checked", "checked");
		$("#berkas_siup").removeAttr("disabled");
		$("#berkas_siup").attr("required", "");
		$("#berkas_siup").siblings(".label-siup").addClass("selected").html(n_ktp);
		$("#sup_siup").removeClass("d-none");
		$("#sup_siup").show(); 
		$("#dv_siup").removeClass("d-none");
    	$("#dv_siup").show();
    	document.getElementById("v_siup").href = n_ktp;
	} else {
		$("#d_siup").removeClass("col-lg-7");
		$("#d_siup").addClass("col-lg-8");
    	$("#dv_siup").hide();
	}


	// BERKAS HO (IZIN GANGGUAN)
	if (n_ktp != "") {
		$("#cek_ho").attr("checked", "checked");
		$("#berkas_ho").removeAttr("disabled");
		$("#berkas_ho").attr("required", "");
		$("#berkas_ho").siblings(".label-ho").addClass("selected").html(n_ktp);
		$("#sup_ho").removeClass("d-none");
		$("#sup_ho").show(); 
		$("#dv_ho").removeClass("d-none");
    	$("#dv_ho").show();
    	document.getElementById("v_ho").href = n_ktp;
	} else {
		$("#d_ho").removeClass("col-lg-7");
		$("#d_ho").addClass("col-lg-8");
    	$("#dv_ho").hide();
	}


	// BERKAS NPWP
	if (n_ktp != "") {
		$("#cek_npwp").attr("checked", "checked");
		$("#berkas_npwp").removeAttr("disabled");
		$("#berkas_npwp").attr("required", "");
		$("#berkas_npwp").siblings(".label-npwp").addClass("selected").html(n_ktp);
		$("#sup_npwp").removeClass("d-none");
		$("#sup_npwp").show(); 
		$("#dv_npwp").removeClass("d-none");
    	$("#dv_npwp").show();
    	document.getElementById("v_npwp").href = n_ktp;
	} else {
		$("#d_npwp").removeClass("col-lg-7");
		$("#d_npwp").addClass("col-lg-8");
    	$("#dv_npwp").hide();
	}


	// BERKAS AKTA PENDIRIAN / PERUBAHAN
	if (n_ktp != "") {
		$("#cek_akta_pendirian").attr("checked", "checked");
		$("#berkas_akta_pendirian").removeAttr("disabled");
		$("#berkas_akta_pendirian").attr("required", "");
		$("#berkas_akta_pendirian").siblings(".label-akta-pendirian").addClass("selected").html(n_ktp);
		$("#sup_akta_pendirian").removeClass("d-none");
		$("#sup_akta_pendirian").show(); 
		$("#dv_pendirian").removeClass("d-none");
    	$("#dv_pendirian").show();
    	document.getElementById("v_pendirian").href = n_ktp;
	} else {
		$("#d_pendirian").removeClass("col-lg-7");
		$("#d_pendirian").addClass("col-lg-8");
    	$("#dv_pendirian").hide();
	}


	// BERKAS LAPORAN KEUANGAN
	if (n_ktp != "") {
		$("#cek_lap_keuangan").attr("checked", "checked");
		$("#berkas_lap_keuangan").removeAttr("disabled");
		$("#berkas_lap_keuangan").attr("required", "");
		$("#berkas_lap_keuangan").siblings(".label-lap-keuangan").addClass("selected").html(n_ktp);
		$("#sup_lap_keuangan").removeClass("d-none");
		$("#sup_lap_keuangan").show(); 
		$("#dv_lap_keu").removeClass("d-none");
    	$("#dv_lap_keu").show();
    	document.getElementById("v_lap_keu").href = n_ktp;
	} else {
		$("#d_lap_keu").removeClass("col-lg-7");
		$("#d_lap_keu").addClass("col-lg-8");
    	$("#dv_lap_keu").hide();
	}


	// BERKAS MUTASI REKENING KORAN
	if (n_ktp != "") {
		$("#cek_rekening_koran").attr("checked", "checked");
		$("#berkas_rekening_koran").removeAttr("disabled");
		$("#berkas_rekening_koran").attr("required", "");
		$("#berkas_rekening_koran").siblings(".label-rekening-koran").addClass("selected").html(n_ktp);
		$("#sup_rekening_koran").removeClass("d-none");
		$("#sup_rekening_koran").show(); 
		$("#dv_rek_koran").removeClass("d-none");
    	$("#dv_rek_koran").show();
    	document.getElementById("v_rek_koran").href = n_ktp;
	} else {
		$("#d_rek_koran").removeClass("col-lg-7");
		$("#d_rek_koran").addClass("col-lg-8");
    	$("#dv_rek_koran").hide();
	}


	// BERKAS KEPEMILIKAN LAHAN
	if (n_ktp != "") {
		$("#cek_kepemilikan_lahan").attr("checked", "checked");
		$("#berkas_kepemilikan_lahan").removeAttr("disabled");
		$("#berkas_kepemilikan_lahan").attr("required", "");
		$("#berkas_kepemilikan_lahan").siblings(".label-kepemilikan-lahan").addClass("selected").html(n_ktp);
		$("#sup_kepemilikan_lahan").removeClass("d-none");
		$("#sup_kepemilikan_lahan").show(); 
		$("#dv_lahan").removeClass("d-none");
    	$("#dv_lahan").show();
    	document.getElementById("v_lahan").href = n_ktp;
	} else {
		$("#d_lahan").removeClass("col-lg-7");
		$("#d_lahan").addClass("col-lg-8");
    	$("#dv_lahan").hide();
	}


	// BERKAS BIAYA SEWA
	if (n_ktp != "") {
		$("#cek_biaya_sewa").attr("checked", "checked");
		$("#berkas_biaya_sewa").removeAttr("disabled");
		$("#berkas_biaya_sewa").attr("required", "");
		$("#berkas_biaya_sewa").siblings(".label-biaya-sewa").addClass("selected").html(n_ktp);
		$("#sup_biaya_sewa").removeClass("d-none");
		$("#sup_biaya_sewa").show(); 
		$("#dv_sewa").removeClass("d-none");
    	$("#dv_sewa").show();
 		document.getElementById("v_sewa").href = n_ktp;
	} else {
		$("#d_sewa").removeClass("col-lg-7");
		$("#d_sewa").addClass("col-lg-8");
    	$("#dv_sewa").hide();
	}

	
	// BERKAS BIAYA RUMAH TANGGA
	if (n_ktp != "") {
		$("#cek_biaya_rt").attr("checked", "checked");
		$("#berkas_biaya_rt").removeAttr("disabled");
		$("#berkas_biaya_rt").attr("required", "");
		$("#berkas_biaya_rt").siblings(".label-biaya-rt").addClass("selected").html(n_ktp);
		$("#sup_biaya_rt").removeClass("d-none");
		$("#sup_biaya_rt").show(); 
		$("#dv_rt").removeClass("d-none");
    	$("#dv_rt").show();
 		document.getElementById("v_rt").href = n_ktp;
	} else {
		$("#d_rt").removeClass("col-lg-7");
		$("#d_rt").addClass("col-lg-8");
    	$("#dv_rt").hide();
	}


	// BERKAS NOTA PENJUALAN
	if (n_ktp != "") {
		$("#cek_nota_penjualan").attr("checked", "checked");
		$("#berkas_nota_penjualan").removeAttr("disabled");
		$("#berkas_nota_penjualan").attr("required", "");
		$("#berkas_nota_penjualan").siblings(".label-nota-penjualan").addClass("selected").html(n_ktp);
		$("#sup_nota_penjualan").removeClass("d-none");
		$("#sup_nota_penjualan").show(); 
		$("#dv_nota").removeClass("d-none");
    	$("#dv_nota").show();
 		document.getElementById("v_nota").href = n_ktp;
	} else {
		$("#d_nota").removeClass("col-lg-7");
		$("#d_nota").addClass("col-lg-8");
    	$("#dv_nota").hide();
	}


	// BERKAS TAGIHAN
	if (n_ktp != "") {
		$("#cek_tagihan").attr("checked", "checked");
		$("#berkas_tagihan").removeAttr("disabled");
		$("#berkas_tagihan").attr("required", "");
		$("#berkas_tagihan").siblings(".label-tagihan").addClass("selected").html(n_ktp);
		$("#sup_tagihan").removeClass("d-none");
		$("#sup_tagihan").show(); 
		$("#dv_tagihan").removeClass("d-none");
    	$("#dv_tagihan").show();
 		document.getElementById("v_tagihan").href = n_ktp;
	} else {
		$("#d_tagihan").removeClass("col-lg-7");
		$("#d_tagihan").addClass("col-lg-8");
    	$("#dv_tagihan").hide();
	}


	// BERKAS TAGIHAN
	if (n_ktp != "") {
		$("#cek_penghasilan_tambahan").attr("checked", "checked");
		$("#berkas_penghasilan_tambahan").removeAttr("disabled");
		$("#berkas_penghasilan_tambahan").attr("required", "");
		$("#berkas_penghasilan_tambahan").siblings(".label-penghasilan-tambahan").addClass("selected").html(n_ktp);
		$("#sup_penghasilan_tambahan").removeClass("d-none");
		$("#sup_penghasilan_tambahan").show(); 
		$("#dv_pth").removeClass("d-none");
    	$("#dv_pth").show();
 		document.getElementById("v_pth").href = n_ktp;
	} else {
		$("#d_pth").removeClass("col-lg-7");
		$("#d_pth").addClass("col-lg-8");
    	$("#dv_pth").hide();
	}


	// BERKAS RAB
	if (c_ktp != "") {
		$("#cek_rab").attr("checked", "checked");
		$("#berkas_rab").removeAttr("disabled");
		$("#berkas_rab").attr("required", "");
		$("#berkas_rab").siblings(".label-rab").addClass("selected").html(c_ktp);
		$("#sup_rab").removeClass("d-none");
		$("#sup_rab").show(); 
		$("#dv_rab").removeClass("d-none");
    	$("#dv_rab").show();
 		document.getElementById("v_rab").href = c_ktp;
	} else {
		$("#d_rab").removeClass("col-lg-7");
		$("#d_rab").addClass("col-lg-8");
    	$("#dv_rab").hide();
	}
};