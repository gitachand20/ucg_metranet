
// 
// SET NULL MODAL DISMISS
// 

$("#modal_observasi").on("hidden.bs.modal", function(){
    document.getElementById("nama_barang").value = "";
    document.getElementById("harga_beli").value = "";
    document.getElementById("harga_jual").value = "";
});

$("#modal_suplier").on("hidden.bs.modal", function(){
    document.getElementById("nama_suplier").value = "";
    document.getElementById("pic_sup").value = "";
    document.getElementById("lama_hubungan_sup").value = "";
    document.getElementById("pembelian_perbulan_sup").value = "";
    document.getElementById("sistem_perbulan_sup").value = "";
});

$("#modal_buyer").on("hidden.bs.modal", function(){
    document.getElementById("nama_buyer").value = "";
    document.getElementById("pic_buy").value = "";
    document.getElementById("lama_hubungan_buy").value = "";
    document.getElementById("pembelian_perbulan_buy").value = "";
    document.getElementById("sistem_perbulan_buy").value = "";
});

$("#modal_jaminan").on("hidden.bs.modal", function(){
    document.getElementById("jenis_jaminan").value = "";
    document.getElementById("jaminan-atas").style.display = "none";
    document.getElementById("luas-tanah").style.display = "none";
    document.getElementById("bangunan").style.display = "none";
    document.getElementById("jaminan-bawah").style.display = "none";
});



// 
// BUTTON MENU
// 

var penghasilan = "";
var simpan_penghasilan = "";
var jenis_hasil_usaha = "";
var pk_rab = "";

function setDataDiri() {
	$("#content_form").scrollTop(0);
	document.querySelector("#menu_1").classList.add("border-left-danger");
	document.querySelector("#btn_menu_1").classList.add("active");

	$("#menu_2").removeClass("border-left-danger");
	$("#menu_3").removeClass("border-left-danger");
	$("#menu_4").removeClass("border-left-danger");
	$("#menu_5").removeClass("border-left-danger");

	$("#btn_menu_2").removeClass("active");
	$("#btn_menu_3").removeClass("active");
	$("#btn_menu_4").removeClass("active");
	$("#btn_menu_5").removeClass("active");

	if ($("#content_1").hasClass("d-none")){
		$("#content_1").removeClass("d-none");
		$("#content_1").show();
	} else {
		$("#content_1").show();
	}

	$("#content_2").hide();
	$("#content_3").hide();
	$("#content_4").hide();
	$("#content_5").hide();
}

function setSumberPenghasilan() {
	$("#content_form").scrollTop(0);
	document.querySelector("#menu_2").classList.add("border-left-danger");
	document.querySelector("#btn_menu_2").classList.add("active");

	$("#menu_1").removeClass("border-left-danger");
	$("#menu_3").removeClass("border-left-danger");
	$("#menu_4").removeClass("border-left-danger");
	$("#menu_5").removeClass("border-left-danger");

	$("#btn_menu_1").removeClass("active");
	$("#btn_menu_3").removeClass("active");
	$("#btn_menu_4").removeClass("active");
	$("#btn_menu_5").removeClass("active");

	if ($("#content_2").hasClass("d-none")){
		$("#content_2").removeClass("d-none");
		$("#content_2").show();
	} else {
		$("#content_2").show();
	}

	$("#content_1").hide();
	$("#content_3").hide();
	$("#content_4").hide();
	$("#content_5").hide();

	if (penghasilan == "Gaji Kerja") {
		if ($("#gaji_kerja").hasClass("d-none")){
			$("#gaji_kerja").removeClass("d-none");
			$("#gaji_kerja").show();
		} else {
			$("#gaji_kerja").show();
		}

		$("#hasil_usaha").hide();
		// document.getElementById("sk_gk").style.display = "block";
		// document.getElementById("sk_hu").style.display = "none";
	} else if (penghasilan == "Hasil Usaha") {
		if ($("#hasil_usaha").hasClass("d-none")){
			$("#hasil_usaha").removeClass("d-none");
			$("#hasil_usaha").show();
		} else {
			$("#hasil_usaha").show();
		}

		$("#gaji_kerja").hide();
		// document.getElementById("sk_gk").style.display = "none";
		// document.getElementById("sk_hu").style.display = "block";
	}
}

function setPengajuanKredit() {
	$("#content_form").scrollTop(0);
	document.querySelector("#menu_3").classList.add("border-left-danger");
	document.querySelector("#btn_menu_3").classList.add("active");

	$("#menu_1").removeClass("border-left-danger");
	$("#menu_2").removeClass("border-left-danger");
	$("#menu_4").removeClass("border-left-danger");
	$("#menu_5").removeClass("border-left-danger");

	$("#btn_menu_1").removeClass("active");
	$("#btn_menu_2").removeClass("active");
	$("#btn_menu_4").removeClass("active");
	$("#btn_menu_5").removeClass("active");

	if ($("#content_3").hasClass("d-none")){
		$("#content_3").removeClass("d-none");
		$("#content_3").show();
	} else {
		$("#content_3").show();
	}

	$("#content_1").hide();
	$("#content_2").hide();
	$("#content_4").hide();
	$("#content_5").hide();
}

function setDataJaminan() {
	$("#content_form").scrollTop(0);
	document.querySelector("#menu_4").classList.add("border-left-danger");
	document.querySelector("#btn_menu_4").classList.add("active");

	$("#menu_1").removeClass("border-left-danger");
	$("#menu_2").removeClass("border-left-danger");
	$("#menu_3").removeClass("border-left-danger");
	$("#menu_5").removeClass("border-left-danger");

	$("#btn_menu_1").removeClass("active");
	$("#btn_menu_2").removeClass("active");
	$("#btn_menu_3").removeClass("active");
	$("#btn_menu_5").removeClass("active");

	if ($("#content_4").hasClass("d-none")){
		$("#content_4").removeClass("d-none");
		$("#content_4").show();
	} else {
		$("#content_4").show();
	}

	$("#content_1").hide();
	$("#content_2").hide();
	$("#content_3").hide();
	$("#content_5").hide();
}

function setUnggahBerkas() {
	$("#content_form").scrollTop(0);
	document.querySelector("#menu_5").classList.add("border-left-danger");
	document.querySelector("#btn_menu_5").classList.add("active");

	$("#menu_1").removeClass("border-left-danger");
	$("#menu_2").removeClass("border-left-danger");
	$("#menu_3").removeClass("border-left-danger");
	$("#menu_4").removeClass("border-left-danger");

	$("#btn_menu_1").removeClass("active");
	$("#btn_menu_2").removeClass("active");
	$("#btn_menu_3").removeClass("active");
	$("#btn_menu_4").removeClass("active");

	if ($("#content_5").hasClass("d-none")){
		$("#content_5").removeClass("d-none");
		$("#content_5").show();
	} else {
		$("#content_5").show();
	}

	$("#content_1").hide();
	$("#content_2").hide();
	$("#content_3").hide();
	$("#content_4").hide();


	if (document.getElementById("status_perkawinan").value == "Menikah") {
		document.getElementById("b-akta-nikah").style.display = "block";
	} else {
		document.getElementById("b-akta-nikah").style.display = "none";
	}

	if (simpan_penghasilan == "Gaji Kerja") {
		document.getElementById("b-sp-gaji").style.display = "block";
		document.getElementById("b-sp-hasil").style.display = "none";

		if (document.getElementById("penghasilan_tambahan_gk").value != "" && document.getElementById("sumber_penghasilan_tambahan_gk").value != "") {
			document.getElementById("b-pt-gaji").style.display = "block";
		} else {
			document.getElementById("b-pt-gaji").style.display = "none";
		}

	} else {
		if (jenis_hasil_usaha != "") {
			document.getElementById("b-sp-gaji").style.display = "none";
			document.getElementById("b-sp-hasil").style.display = "block";

			if (jenis_hasil_usaha == "Perdagangan") {
				document.getElementById("legend-hasil-usaha").textContent = "Sumber Penghasilan Hasil Usaha (Perdagangan)"
				document.getElementById("b-pertanian").style.display = "none";
				document.getElementById("b-biaya-sewa").style.display = "block";
				document.getElementById("b-biaya-rt").style.display = "block";
				document.getElementById("b-nota-penjualan").style.display = "block";
				document.getElementById("b-tagihan").style.display = "block";
				document.getElementById("b-penghasilan-tambahan").style.display = "block";
			
			} else if (jenis_hasil_usaha == "Jasa") {
				document.getElementById("legend-hasil-usaha").textContent = "Sumber Penghasilan Hasil Usaha (Jasa)"
				document.getElementById("b-pertanian").style.display = "none";
				document.getElementById("b-biaya-sewa").style.display = "block";
				document.getElementById("b-biaya-rt").style.display = "block";
				document.getElementById("b-nota-penjualan").style.display = "none";
				document.getElementById("b-tagihan").style.display = "none";
				document.getElementById("b-penghasilan-tambahan").style.display = "block";
			
			} else if (jenis_hasil_usaha == "Manufaktur") {
				document.getElementById("legend-hasil-usaha").textContent = "Sumber Penghasilan Hasil Usaha (Manufaktur)"
				document.getElementById("b-pertanian").style.display = "none";
				document.getElementById("b-biaya-sewa").style.display = "block";
				document.getElementById("b-biaya-rt").style.display = "none";
				document.getElementById("b-nota-penjualan").style.display = "block";
				document.getElementById("b-tagihan").style.display = "block";
				document.getElementById("b-penghasilan-tambahan").style.display = "none";
			
			} else if (jenis_hasil_usaha == "Pertanian") {
				document.getElementById("legend-hasil-usaha").textContent = "Sumber Penghasilan Hasil Usaha (Pertanian)"
				document.getElementById("b-pertanian").style.display = "block";
				document.getElementById("b-biaya-sewa").style.display = "none";
				document.getElementById("b-biaya-rt").style.display = " none";
				document.getElementById("b-nota-penjualan").style.display = "block";
				document.getElementById("b-tagihan").style.display = "block";
				document.getElementById("b-penghasilan-tambahan").style.display = "block";
			
			}

			if (document.getElementById("penghasilan_tambahan_hu").value != "" && document.getElementById("sumber_penghasilan_tambahan_hu").value != "") {
				document.getElementById("b-penghasilan-tambahan").style.display = "block";
			} else {
				document.getElementById("b-penghasilan-tambahan").style.display = "none";
			}

			if (pk_rab == "Kredit Produktif Investasi") {
				document.getElementById("pk-rab").style.display = "block";
			} else {
				document.getElementById("pk-rab").style.display = "none";
			}
		} else {
			document.getElementById("b-sp-gaji").style.display = "none";
			document.getElementById("b-sp-hasil").style.display = "none";
		}
	}

	unggahJaminan();
}


var cek_jml_jaminan = 0;

function unggahJaminan() {
	if (cek_jml_jaminan == 0 || cek_jml_jaminan != jml_jaminan) {
		$(".berkas-jaminan").remove();
		for (var i = 0; i < jml_jaminan; i++) {
			if (jns_jaminan[i] == "Tanah") {
				if (bkt_jaminan[i] == "SHM") {
					nama_berkas = "T_SHM";
				} else if (bkt_jaminan[i] == "SHGU") {
					nama_berkas = "T_SHGU";
				} else {
					nama_berkas = "T_LAINNYA";
				}
			} else if (jns_jaminan[i] == "Bangunan") {
				nama_berkas = "B_" + bkt_jaminan[i];
			} else if (jns_jaminan[i] == "Tanah dan Bangunan") {
				if (bkt_jaminan[i] == "SHM") {
					nama_berkas = "TB_SHM";
				} else if (bkt_jaminan[i] == "SHGB") {
					nama_berkas = "TB_SHGB";
				} else {
					nama_berkas = "TB_LAINNYA";
				}
			} else if (jns_jaminan[i] == "Kendaraan Bermotor") {
				nama_berkas = "KB_" + bkt_jaminan[i];
			} else {
				nama_berkas = "M_" + bkt_jaminan[i].split(" ")[0].toUpperCase();
			}

			document.getElementById("list_berkas_jaminan").insertAdjacentHTML("beforeend", 
				'<div class="row col-lg-12 berkas-jaminan">' +
					'<div class="col-lg-4 col-xs-12">' +
						'<table width="100%"><tr>' +
						'<td valign="top" width="7%"><input type="checkbox" class="cek-berkas-kepemilikan-jaminan" id="cek_kepemilikan_jaminan_' + i + '"></td>' +
						'<td>' +
							'<span style="font-size: 8pt;">Berkas Jaminan ' + (i + 1) + '</span><br>' +
							'<span>&nbsp;&nbsp;' + jns_jaminan[i] + '</span>' + 
							' <sup class="d-none" id="sup_kepemilikan_jaminan_' + i + '" style="color: #FF0000; font-weight: bold;">*</sup>' +
						'</td>' +
						'</tr></table>' +
					'</div>' +
					'<div class="col-lg-8 col-xs-12 mb-2">' +
						'<input type="hidden" id="nama_berkas_' + i + '" value="' + nama_berkas +'" name="nama_berkas[]">' +
						'<div class="custom-file" style="margin-top: 15px;">' +
							'Unggah' +
							'<input type="file" class="custom-file-input berkas-kepemilikan-jaminan" id="berkas_kepemilikan_jaminan_' + i + '" name="berkas_kepemilikan_jaminan_' + i + '" accept="application/pdf, image/jpeg" disabled="disabled">' +
							'<label class="custom-file-label label-kepemilikan-jaminan-' + i + '" for="berkas_kepemilikan_jaminan_' + i + '"></label>' +
							'<div class="invalid-feedback-custom" id="file_error_kepemilikan_jaminan_' + i + '" style="margin-top: -10px; display: none;"></div>' +
							'<div class="invalid-feedback" id="invalid_kepemilikan_jaminan_' + i + '" style="margin: -10px 0 0 0;">' +
								'Berkas Jaminan tidak boleh kosong.' +
							'</div>' +
						'</div>' +
					'</div>' +
				'</div>');
		}
	}

	cek_jml_jaminan = jml_jaminan;
}


function enableSP() {
	// $("#btn_menu_2").removeClass("btn-menu-dis");
	// $("#btn_menu_2").attr("onclick", "setSumberPenghasilan()");
	// document.querySelector("#btn_menu_2").classList.add("btn-menu");
	document.getElementById("label_menu_2").style.display = "none";
	document.getElementById("btn_menu_2").style.display = "block";
	document.getElementById("label_menu_5").style.display = "none";
	document.getElementById("btn_menu_5").style.display = "block";
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

	setSumberPenghasilan();
}

function enablePK() {
	// $("#btn_menu_3").removeClass("btn-menu-dis");
	// $("#btn_menu_3").attr("onclick", "setPengajuanKredit()");
	// document.querySelector("#btn_menu_3").classList.add("btn-menu");
	document.getElementById("label_menu_3").style.display = "none";
	document.getElementById("btn_menu_3").style.display = "block";
	simpan_penghasilan = penghasilan;

	if (penghasilan == "Hasil Usaha") {
		jenis_hasil_usaha = document.getElementById("jenis_usaha").value;
	}
	
	setPengajuanKredit();
}

function enableDJ() {
	// $("#btn_menu_4").removeClass("btn-menu-dis");
	// $("#btn_menu_4").attr("onclick", "setDataJaminan()");
	// document.querySelector("#btn_menu_4").classList.add("btn-menu");
	document.getElementById("label_menu_4").style.display = "none";
	document.getElementById("btn_menu_4").style.display = "block";
	pk_rab = document.getElementById("tujuan_kredit").value;
	setDataJaminan();
}

function enableUB() {
	// $("#btn_menu_5").removeClass("btn-menu-dis");
	// $("#btn_menu_5").attr("onclick", "setUnggahBerkas()");
	// document.querySelector("#btn_menu_5").classList.add("btn-menu");
	document.getElementById("data-jaminan").style.display = "block";
	setUnggahBerkas();
}



function setJenisUsaha() {
	if (document.getElementById("jenis_usaha").value == "Perdagangan") {
		document.getElementById("ket_perdagangan").style.display = "block";
		document.getElementById("btn-observasi").style.display = "block";
		document.getElementById("observasi-gpm").style.display = "block";
		document.getElementById("omset-usaha").style.display = "block";
		document.getElementById("omset-usaha-jasa").style.display = "none";
		document.getElementById("form-2-usaha-perdagangan").style.display = "block";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "block";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";

		$("#omset_usaha").attr("required", "");
		$("#cek_omset_usaha_jasa").removeAttr("required");
		$("#hpp").attr("required", "");
		$("#gaji_karyawan").attr("required", "");
		$("#biaya_sewa").attr("required", "");
		$("#biaya_umum").attr("required", "");
		$("#biaya_rumah_tangga").attr("required", "");
		$("#persediaan_barang").removeAttr("required");
		$("#piutang_usaha").attr("required", "");
		$("#utang_usaha").attr("required", "");
		$("#utang_bank").attr("required", "");

	} else if (document.getElementById("jenis_usaha").value == "Jasa") {
		document.getElementById("ket_perdagangan").style.display = "none";
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";
		document.getElementById("omset-usaha").style.display = "none";
		document.getElementById("omset-usaha-jasa").style.display = "block";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "block";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "none";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "none";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");

		$("#omset_usaha").removeAttr("required");
		$("#cek_omset_usaha_jasa").attr("required", "");
		$("#hpp").removeAttr("required");
		$("#gaji_karyawan").attr("required", "");
		$("#biaya_sewa").attr("required", "");
		$("#biaya_umum").attr("required", "");
		$("#biaya_rumah_tangga").attr("required", "");
		$("#persediaan_barang").removeAttr("required");
		$("#piutang_usaha").removeAttr("required");
		$("#utang_usaha").removeAttr("required");
		$("#utang_bank").removeAttr("required");

	} else if (document.getElementById("jenis_usaha").value == "Manufaktur") {
		document.getElementById("ket_perdagangan").style.display = "none";
		document.getElementById("btn-observasi").style.display = "block";
		document.getElementById("observasi-gpm").style.display = "block";
		document.getElementById("omset-usaha").style.display = "block";
		document.getElementById("omset-usaha-jasa").style.display = "none";
		document.getElementById("form-2-usaha-perdagangan").style.display = "block";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "block";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "none";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");

		$("#omset_usaha").attr("required", "");
		$("#cek_omset_usaha_jasa").removeAttr("required");
		$("#hpp").attr("required", "");
		$("#gaji_karyawan").attr("required", "");
		$("#biaya_sewa").attr("required", "");
		$("#biaya_umum").attr("required", "");
		$("#biaya_rumah_tangga").attr("required", "");
		$("#persediaan_barang").attr("required", "");
		$("#piutang_usaha").attr("required", "");
		$("#utang_usaha").attr("required", "");
		$("#utang_bank").attr("required", "");

	} else if (document.getElementById("jenis_usaha").value == "Pertanian") {
		document.getElementById("ket_perdagangan").style.display = "none";
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";
		document.getElementById("omset-usaha").style.display = "none";
		document.getElementById("omset-usaha-jasa").style.display = "none";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "none";
		document.getElementById("form-2-usaha-manufaktur").style.display = "none";
		document.getElementById("form-2-usaha-pertanian").style.display = "block";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");

		$("#omset_usaha").removeAttr("required");
		$("#cek_omset_usaha_jasa").removeAttr("required");
		$("#hpp").removeAttr("required");
		$("#gaji_karyawan").removeAttr("required");
		$("#biaya_sewa").removeAttr("required");
		$("#biaya_umum").removeAttr("required");
		$("#biaya_rumah_tangga").removeAttr("required");
		$("#persediaan_barang").removeAttr("required");
		$("#piutang_usaha").attr("required", "");
		$("#utang_usaha").attr("required", "");
		$("#utang_bank").attr("required", "");

	} else {
		setNoneJenisUsaha();
	}

	setNullJenisUsaha();

	document.getElementById("jenis_usaha").style.borderColor = "#ffcc99";
	document.getElementById("jenis_usaha").style.backgroundColor = "#ffff99";
	document.getElementById("jenis_usaha").style.fontWeight = "bold";
}

function setNullJenisUsaha() {
	document.getElementById("omset_usaha").value = "";
	document.getElementById("cek_omset_usaha_jasa").value = "";
	document.getElementById("omset_usaha_jasa").value = "";
	document.getElementById("hpp").value = "";
	document.getElementById("laba_kotor_gpm").value = "";
	document.getElementById("laba_kotor").value = "";
	document.getElementById("gaji_karyawan").value = "";
	document.getElementById("biaya_sewa").value = "";
	document.getElementById("biaya_umum").value = "";
	document.getElementById("biaya_rumah_tangga").value = "";
	document.getElementById("persediaan_barang").value = "";
	document.getElementById("harga_komoditi").value = "";
	document.getElementById("hasil_panen").value = "";
	document.getElementById("luas_lahan").value = "";
	document.getElementById("biaya_pupuk").value = "";
	document.getElementById("biaya_tk").value = "";
	document.getElementById("channel_penjualan").value = "";
	document.getElementById("cara_bayar").value = "";
	document.getElementById("piutang_usaha").value = "";
	document.getElementById("utang_usaha").value = "";
	document.getElementById("utang_bank").value = "";
	document.getElementById("penghasilan_tambahan_hu").value = "";
	document.getElementById("sumber_penghasilan_tambahan_hu").value = "";
	document.getElementById("sarana_prasarana").value = "";

	// document.getElementById("berkas_rekening_koran").value = "";
	// document.getElementById("berkas_kepemilikan_lahan").value = "";
	// document.getElementById("berkas_biaya_sewa").value = "";
	// document.getElementById("berkas_biaya_rt").value = "";
	// document.getElementById("berkas_nota_penjualan").value = "";
	// document.getElementById("berkas_tagihan").value = "";
	// document.getElementById("berkas_penghasilan_tambahan").value = "";
}

function setNoneJenisUsaha() {
	document.getElementById("ket_perdagangan").style.display = "none";
	document.getElementById("btn-observasi").style.display = "none";
	document.getElementById("observasi-gpm").style.display = "none";
	document.getElementById("omset-usaha").style.display = "none";
	document.getElementById("omset-usaha-jasa").style.display = "none";
	document.getElementById("form-2-usaha-perdagangan").style.display = "none";
	document.getElementById("laba-kotor").style.display = "none";
	document.getElementById("biaya-biaya").style.display = "none";
	document.getElementById("form-2-usaha-manufaktur").style.display = "none";
	document.getElementById("form-2-usaha-pertanian").style.display = "none";
	document.getElementById("utang-piutang").style.display = "none";
	document.getElementById("penghasilan-tambahan").style.display = "none";
	document.getElementById("sarana-prasarana").style.display = "none";
	$("#omset_usaha").removeAttr("onchange");

	$("#omset_usaha").removeAttr("required");
	$("#cek_omset_usaha_jasa").removeAttr("required");
	$("#hpp").removeAttr("required");
	$("#gaji_karyawan").removeAttr("required");
	$("#biaya_sewa").removeAttr("required");
	$("#biaya_umum").removeAttr("required");
	$("#biaya_rumah_tangga").removeAttr("required");
	$("#persediaan_barang").removeAttr("required");
	$("#piutang_usaha").removeAttr("required");
	$("#utang_usaha").removeAttr("required");
	$("#utang_bank").removeAttr("required");

	document.getElementById("jenis_usaha").style.borderColor = "#d1d3e2";
	document.getElementById("jenis_usaha").style.backgroundColor = "#fff";
	document.getElementById("jenis_usaha").style.fontWeight = "400";
}



// 
// ADD OBSERVASI GPM (TAMBAH OBSERVASI)
// 

var i_gpm = 0;
var jml_gpm = 0;

function tambahObservasi() {
	$('.table-gpm').show();

	var nama_barang = $("#nama_barang").val();
	var harga_beli = $("#harga_beli").val();
	var harga_jual = $("#harga_jual").val();
	var source = $("#draft_gpm").html();
	var template = Handlebars.compile(source);

	var data = {
		index_gpm: jml_gpm,
		nama_barang: nama_barang,
		harga_beli: harga_beli,
		harga_jual: harga_jual
	}

	var html = template(data);
	$("#list_gpm").append(html);
	$("#modal_observasi").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();
	document.getElementById("nama_barang").value = '';
	document.getElementById("harga_beli").value = '';
	document.getElementById("harga_jual").value = '';

	id_gpm = "gpm_" + i_gpm;
	$('[class*="id-gpm"]').each(function(i, ele) {
		var id = $(this).attr('class');
		$(this).attr('id', id_gpm);
		$(this).removeClass("id-gpm");
	});

	i_gpm += 1;
	jml_gpm += 1;
}

$(document).on("click","#hapus_gpm",function(event){
    $(this).closest(".hapus_list_gpm").remove();
    jml_gpm -= 1; 
    var index_arr_gpm = document.getElementsByName("index_gpm[]");
    for (var i = 0; i < jml_gpm; i++) {
		index_arr_gpm[i].value = i;
	}
});

$(document).on("click","#cek_gpm",function(event){
	var id_data_gpm = $(this).closest(".hapus_list_gpm").find('input[type="hidden"]').attr('id');
	var index_data_gpm = document.getElementById(id_data_gpm).value;
	document.getElementById("id_ubah_gpm").value = index_data_gpm;

	det_nama = document.getElementsByName("nama_barang[]");
	val_nama = det_nama[index_data_gpm].value;
	split_nama = val_nama.split("@");
	set_nama = split_nama[1];
	document.getElementById("ubah_nama_barang").value = set_nama;

	det_beli = document.getElementsByName("harga_beli[]");
	val_beli = det_beli[index_data_gpm].value;
	split_beli = val_beli.split(" ");
	get_beli = split_beli[1];
	set_beli = get_beli.replace(/[.]+/g, '');
	document.getElementById("ubah_harga_beli").value = formatUang(set_beli, "Rp ");

	det_jual = document.getElementsByName("harga_jual[]");
	val_jual = det_jual[index_data_gpm].value;
	split_jual = val_jual.split(" ");
	get_jual = split_jual[1];
	set_jual = get_jual.replace(/[.]+/g, '');
	document.getElementById("ubah_harga_jual").value = formatUang(set_jual, "Rp ");

	$("#btnUbahObservasi").removeAttr("disabled");
	document.getElementById("btnUbahObservasi").classList.remove("btn-custom-dis");
	document.getElementById("btnUbahObservasi").classList.add("btn-custom-ad");
});

function ubahObservasi() {
	id_ubah_gpm = document.getElementById("id_ubah_gpm").value;
	nama_barang = $("#ubah_nama_barang").val();
	harga_beli = $("#ubah_harga_beli").val();
	harga_jual = $("#ubah_harga_jual").val();

	ins_nama = document.form_input_hasil_usaha["nama_barang[]"];
	ins_beli = document.form_input_hasil_usaha["harga_beli[]"];
	ins_jual = document.form_input_hasil_usaha["harga_jual[]"];

	if (jml_gpm == 1) {
		ins_nama.value = "@" + nama_barang;
		ins_beli.value = "@" + harga_beli;
		ins_jual.value = "@" + harga_jual;

	} else {
		ins_nama[id_ubah_gpm].value = "@" + nama_barang;
		ins_beli[id_ubah_gpm].value = "@" + harga_beli;
		ins_jual[id_ubah_gpm].value = "@" + harga_jual;
	}

	$("#ubah_observasi").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();

	var harga_beli = document.getElementById("harga_beli");
	harga_beli.addEventListener("keyup", function(e){
		harga_beli.value = formatUang(this.value, "Rp ");
	});

	var harga_jual = document.getElementById("harga_jual");
	harga_jual.addEventListener("keyup", function(e){
		harga_jual.value = formatUang(this.value, "Rp ");
	});
}


// 
// ENABLE TOMBOL TAMBAH OBSERVASI GPM
// 

$(document).ready(function(){
	$(".add-observasi").bind("change", check_observasi);
});

function check_observasi() {
	var nama_barang = $("#nama_barang").val();
	var harga_beli = $("#harga_beli").val();
	var harga_jual = $("#harga_jual").val();

	if (nama_barang != "" && harga_beli != "" && harga_jual != "") {
		$("#btnAddObservasi").removeAttr("disabled");
		document.getElementById("btnAddObservasi").classList.remove("btn-custom-dis");
		document.getElementById("btnAddObservasi").classList.add("btn-custom-ad");
	} else {
		$("#btnAddObservasi").attr("disabled", "disabled");
		document.getElementById("btnAddObservasi").classList.remove("btn-custom-ad");
		document.getElementById("btnAddObservasi").classList.add("btn-custom-dis");
	}
}



// 
// ENABLE TOMBOL UBAH OBSERVASI GPM
// 

$(document).ready(function(){
	$(".ubah-observasi").bind("change", check_ubahObservasi);
});

function check_ubahObservasi() {
	var nama_barang = $("#ubah_nama_barang").val();
	var harga_beli = $("#ubah_harga_beli").val();
	var harga_jual = $("#ubah_harga_jual").val();

	if (nama_barang != "" && harga_beli != "" && harga_jual != "") {
		$("#btUbahObservasi").removeAttr("disabled");
		document.getElementById("btUbahObservasi").classList.remove("btn-custom-dis");
		document.getElementById("btUbahObservasi").classList.add("btn-custom-ad");
	} else {
		$("#btUbahObservasi").attr("disabled", "disabled");
		document.getElementById("btUbahObservasi").classList.remove("btn-custom-ad");
		document.getElementById("btUbahObservasi").classList.add("btn-custom-dis");
	}
}



// 
// ADD SUPPLIER (TAMBAH PEMASOK)
// 

var i_sup = 0;
var jml_sup = 0;

function tambahSuplier() {
	$('.table-sup').show();

	var nama_suplier = $("#nama_suplier").val();
	var pic_sup = $("#pic_sup").val();
	var lama_hubungan_sup = $("#lama_hubungan_sup").val();
	var pembelian_perbulan_sup = $("#pembelian_perbulan_sup").val();
	var sistem_perbulan_sup = $("#sistem_perbulan_sup").val();
	var source = $("#draft_sup").html();
	var template = Handlebars.compile(source);

	if (nama_suplier != "" && pic_sup != "" && lama_hubungan_sup != "" && pembelian_perbulan_sup != ""
		&& sistem_perbulan_sup != "") {
		var data = {
			index_sup: jml_sup,
			nama_suplier: nama_suplier,
			pic_sup: pic_sup,
			lama_hubungan_sup: lama_hubungan_sup,
			pembelian_perbulan_sup: pembelian_perbulan_sup,
			sistem_perbulan_sup: sistem_perbulan_sup
		}
	}
	

	var html = template(data);
	$("#list_sup").append(html);
	$("#modal_suplier").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();
	document.getElementById("nama_suplier").value = '';
	document.getElementById("pic_sup").value = '';
	document.getElementById("lama_hubungan_sup").value = '';
	document.getElementById("pembelian_perbulan_sup").value = '';
	document.getElementById("sistem_perbulan_sup").value = '';

	id_sup = "sup_" + i_sup;
	$('[class*="id-sup"]').each(function(i, ele) {
		var id = $(this).attr('class');
		$(this).attr('id', id_sup);
		$(this).removeClass("id-sup");
	});

	i_sup += 1;
	jml_sup += 1;
}

$(document).on("click","#hapus_sup",function(event){
    $(this).closest(".hapus_list_sup").remove();
    jml_sup -= 1; 
    var index_arr_sup = document.getElementsByName("index_sup[]");
    for (var i = 0; i < jml_sup; i++) {
		index_arr_sup[i].value = i;
	}
});

$(document).on("click","#cek_sup",function(event){
	var id_data_sup = $(this).closest(".hapus_list_sup").find('input[type="hidden"]').attr('id');
	var index_data_sup = document.getElementById(id_data_sup).value;
	document.getElementById("id_ubah_sup").value = index_data_sup;

	det_nama_suplier = document.getElementsByName("nama_suplier[]");
	val_nama_suplier = det_nama_suplier[index_data_sup].value;
	split_nama_suplier = val_nama_suplier.split("@");
	set_nama_suplier = split_nama_suplier[1];
	document.getElementById("ubah_nama_suplier").value = set_nama_suplier;

	det_pic_sup = document.getElementsByName("pic_sup[]");
	val_pic_sup = det_pic_sup[index_data_sup].value;
	split_pic_sup = val_pic_sup.split("@");
	set_pic_sup = split_pic_sup[1];
	document.getElementById("ubah_pic_sup").value = set_pic_sup;

	det_lama_hubungan_sup = document.getElementsByName("lama_hubungan_sup[]");
	val_lama_hubungan_sup = det_lama_hubungan_sup[index_data_sup].value;
	split_lama_hubungan_sup = val_lama_hubungan_sup.split("@");
	set_lama_hubungan_sup = split_lama_hubungan_sup[1];
	document.getElementById("ubah_lama_hubungan_sup").value = thousands_separators(set_lama_hubungan_sup);

	det_pembelian_perbulan_sup = document.getElementsByName("pembelian_perbulan_sup[]");
	val_pembelian_perbulan_sup = det_pembelian_perbulan_sup[index_data_sup].value;
	split_pembelian_perbulan_sup = val_pembelian_perbulan_sup.split("@");
	set_pembelian_perbulan_sup = split_pembelian_perbulan_sup[1];
	document.getElementById("ubah_pembelian_perbulan_sup").value = thousands_separators(set_pembelian_perbulan_sup);

	det_sistem_perbulan_sup = document.getElementsByName("sistem_perbulan_sup[]");
	val_sistem_perbulan_sup = det_sistem_perbulan_sup[index_data_sup].value;
	split_sistem_perbulan_sup = val_sistem_perbulan_sup.split("@");
	set_sistem_perbulan_sup = split_sistem_perbulan_sup[1];
	document.getElementById("ubah_sistem_perbulan_sup").value = thousands_separators(set_sistem_perbulan_sup);

	$("#btnUbahPemasok").removeAttr("disabled");
	document.getElementById("btnUbahPemasok").classList.remove("btn-custom-dis");
	document.getElementById("btnUbahPemasok").classList.add("btn-custom-ad");
});

function ubahSuplier() {
	id_ubah_sup = document.getElementById("id_ubah_sup").value;
	nama_suplier = $("#ubah_nama_suplier").val();
	pic_sup = $("#ubah_pic_sup").val();
	lama_hubungan_sup = $("#ubah_lama_hubungan_sup").val();
	pembelian_perbulan_sup = $("#ubah_pembelian_perbulan_sup").val();
	sistem_perbulan_sup = $("#ubah_sistem_perbulan_sup").val();

	ins_nama_suplier = document.form_input_hasil_usaha["nama_suplier[]"];
	ins_pic_sup = document.form_input_hasil_usaha["pic_sup[]"];
	ins_lama_hubungan_sup = document.form_input_hasil_usaha["lama_hubungan_sup[]"];
	ins_pembelian_perbulan_sup = document.form_input_hasil_usaha["pembelian_perbulan_sup[]"];
	ins_sistem_perbulan_sup = document.form_input_hasil_usaha["sistem_perbulan_sup[]"];

	if (jml_sup == 1) {
		ins_nama_suplier.value = "@" + nama_suplier;
		ins_pic_sup.value = "@" + pic_sup;
		ins_lama_hubungan_sup.value = "@" + lama_hubungan_sup;
		ins_pembelian_perbulan_sup.value = "@" + pembelian_perbulan_sup;
		ins_sistem_perbulan_sup.value = "@" + sistem_perbulan_sup;

	} else {
		ins_nama_suplier[id_ubah_sup].value = "@" + nama_suplier;
		ins_pic_sup[id_ubah_sup].value = "@" + pic_sup;
		ins_lama_hubungan_sup[id_ubah_sup].value = "@" + lama_hubungan_sup;
		ins_pembelian_perbulan_sup[id_ubah_sup].value = "@" + pembelian_perbulan_sup;
		ins_sistem_perbulan_sup[id_ubah_sup].value = "@" + sistem_perbulan_sup;
	}

	$("#ubah_sup").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();
}


// 
// ENABLE TOMBOL TAMBAH PEMASOK
// 

$(document).ready(function(){
	$(".add-sup").bind("change", check_pemasok);
});

function check_pemasok() {
	var nama_suplier = $("#nama_suplier").val();
	var pic_sup = $("#pic_sup").val();
	var lama_hubungan_sup = $("#lama_hubungan_sup").val();
	var pembelian_perbulan_sup = $("#pembelian_perbulan_sup").val();
	var sistem_perbulan_sup = $("#sistem_perbulan_sup").val();

	if (nama_suplier != "" && pic_sup != "" && lama_hubungan_sup != ""
		&& pembelian_perbulan_sup != "" && sistem_perbulan_sup != "") {
		$("#btnAddPemasok").removeAttr("disabled");
		document.getElementById("btnAddPemasok").classList.remove("btn-custom-dis");
		document.getElementById("btnAddPemasok").classList.add("btn-custom-ad");
	} else {
		$("#btnAddPemasok").attr("disabled", "disabled");
		document.getElementById("btnAddPemasok").classList.remove("btn-custom-ad");
		document.getElementById("btnAddPemasok").classList.add("btn-custom-dis");
	}
} 



// 
// ENABLE TOMBOL UBAH PEMASOK
// 

$(document).ready(function(){
	$(".ubah-sup").bind("change", check_ubahPemasok);
});

function check_ubahPemasok() {
	var nama_suplier = $("#ubah_nama_suplier").val();
	var pic_sup = $("#ubah_pic_sup").val();
	var lama_hubungan_sup = $("#ubah_lama_hubungan_sup").val();
	var pembelian_perbulan_sup = $("#ubah_pembelian_perbulan_sup").val();
	var sistem_perbulan_sup = $("#ubah_sistem_perbulan_sup").val();

	if (nama_suplier != "" && pic_sup != "" && lama_hubungan_sup != ""
		&& pembelian_perbulan_sup != "" && sistem_perbulan_sup != "") {
		$("#btnUbahPemasok").removeAttr("disabled");
		document.getElementById("btnUbahPemasok").classList.remove("btn-custom-dis");
		document.getElementById("btnUbahPemasok").classList.add("btn-custom-ad");
	} else {
		$("#btnUbahPemasok").attr("disabled", "disabled");
		document.getElementById("btnUbahPemasok").classList.remove("btn-custom-ad");
		document.getElementById("btnUbahPemasok").classList.add("btn-custom-dis");
	}
} 




// 
// ADD BUYER (TAMBAH PEMBELI)
// 

var i_buy = 0;
var jml_buy = 0;

function tambahBuyer() {
	$('.table-buy').show();

	var nama_buyer = $("#nama_buyer").val();
	var pic_buy = $("#pic_buy").val();
	var lama_hubungan_buy = $("#lama_hubungan_buy").val();
	var pembelian_perbulan_buy = $("#pembelian_perbulan_buy").val();
	var sistem_perbulan_buy = $("#sistem_perbulan_buy").val();
	var source = $("#draft_buyer").html();
	var template = Handlebars.compile(source);

	if (nama_buyer != "" && pic_buy != "" && lama_hubungan_buy != "" && pembelian_perbulan_buy != ""
		&& sistem_perbulan_buy != "") {
		var data = {
			index_buy: jml_buy,
			nama_buyer: nama_buyer,
			pic_buy: pic_buy,
			lama_hubungan_buy: lama_hubungan_buy,
			pembelian_perbulan_buy: pembelian_perbulan_buy,
			sistem_perbulan_buy: sistem_perbulan_buy
		}
	}	

	var html = template(data);
	$("#list_buy").append(html);
	$("#modal_buyer").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();
	document.getElementById("nama_buyer").value = '';
	document.getElementById("pic_buy").value = '';
	document.getElementById("lama_hubungan_buy").value = '';
	document.getElementById("pembelian_perbulan_buy").value = '';
	document.getElementById("sistem_perbulan_buy").value = '';

	id_buy = "buy_" + i_buy;
	$('[class*="id-buy"]').each(function(i, ele) {
		var id = $(this).attr('class');
		$(this).attr('id', id_buy);
		$(this).removeClass("id-buy");
	});

	i_buy += 1;
	jml_buy += 1;	
}

$(document).on("click","#hapus_buy",function(event){
    $(this).closest(".hapus_list_buy").remove();
    jml_buy -= 1; 
    var index_arr_buy = document.getElementsByName("index_buy[]");
    for (var i = 0; i < jml_buy; i++) {
		index_arr_buy[i].value = i;
	}
});

$(document).on("click","#cek_buy",function(event){
	var id_data_buy = $(this).closest(".hapus_list_buy").find('input[type="hidden"]').attr('id');
	var index_data_buy = document.getElementById(id_data_buy).value;
	document.getElementById("id_ubah_buy").value = index_data_buy;

	det_nama_buyer = document.getElementsByName("nama_buyer[]");
	val_nama_buyer = det_nama_buyer[index_data_buy].value;
	split_nama_buyer = val_nama_buyer.split("@");
	set_nama_buyer = split_nama_buyer[1];
	document.getElementById("ubah_nama_buyer").value = set_nama_buyer;

	det_pic_buy = document.getElementsByName("pic_buy[]");
	val_pic_buy = det_pic_buy[index_data_buy].value;
	split_pic_buy = val_pic_buy.split("@");
	set_pic_buy = split_pic_buy[1];
	document.getElementById("ubah_pic_buy").value = set_pic_buy;

	det_lama_hubungan_buy = document.getElementsByName("lama_hubungan_buy[]");
	val_lama_hubungan_buy = det_lama_hubungan_buy[index_data_buy].value;
	split_lama_hubungan_buy = val_lama_hubungan_buy.split("@");
	set_lama_hubungan_buy = split_lama_hubungan_buy[1];
	document.getElementById("ubah_lama_hubungan_buy").value = thousands_separators(set_lama_hubungan_buy);

	det_pembelian_perbulan_buy = document.getElementsByName("pembelian_perbulan_buy[]");
	val_pembelian_perbulan_buy = det_pembelian_perbulan_buy[index_data_buy].value;
	split_pembelian_perbulan_buy = val_pembelian_perbulan_buy.split("@");
	set_pembelian_perbulan_buy = split_pembelian_perbulan_buy[1];
	document.getElementById("ubah_pembelian_perbulan_buy").value = thousands_separators(set_pembelian_perbulan_buy);

	det_sistem_perbulan_buy = document.getElementsByName("sistem_perbulan_buy[]");
	val_sistem_perbulan_buy = det_sistem_perbulan_buy[index_data_buy].value;
	split_sistem_perbulan_buy = val_sistem_perbulan_buy.split("@");
	set_sistem_perbulan_buy = split_sistem_perbulan_buy[1];
	document.getElementById("ubah_sistem_perbulan_buy").value = thousands_separators(set_sistem_perbulan_buy);

	$("#btnUbahPembeli").removeAttr("disabled");
	document.getElementById("btnUbahPembeli").classList.remove("btn-custom-dis");
	document.getElementById("btnUbahPembeli").classList.add("btn-custom-ad");
});

function ubahBuyer() {
	id_ubah_buy = document.getElementById("id_ubah_buy").value;
	nama_buyer = $("#ubah_nama_buyer").val();
	pic_buy = $("#ubah_pic_buy").val();
	lama_hubungan_buy = $("#ubah_lama_hubungan_buy").val();
	pembelian_perbulan_buy = $("#ubah_pembelian_perbulan_buy").val();
	sistem_perbulan_buy = $("#ubah_sistem_perbulan_buy").val();

	ins_nama_buyer = document.form_input_hasil_usaha["nama_buyer[]"];
	ins_pic_buy = document.form_input_hasil_usaha["pic_buy[]"];
	ins_lama_hubungan_buy = document.form_input_hasil_usaha["lama_hubungan_buy[]"];
	ins_pembelian_perbulan_buy = document.form_input_hasil_usaha["pembelian_perbulan_buy[]"];
	ins_sistem_perbulan_buy = document.form_input_hasil_usaha["sistem_perbulan_buy[]"];

	if (jml_buy == 1) {
		ins_nama_buyer.value = "@" + nama_buyer;
		ins_pic_buy.value = "@" + pic_buy;
		ins_lama_hubungan_buy.value = "@" + lama_hubungan_buy;
		ins_pembelian_perbulan_buy.value = "@" + pembelian_perbulan_buy;
		ins_sistem_perbulan_buy.value = "@" + sistem_perbulan_buy;

	} else {
		ins_nama_buyer[id_ubah_buy].value = "@" + nama_buyer;
		ins_pic_buy[id_ubah_buy].value = "@" + pic_buy;
		ins_lama_hubungan_buy[id_ubah_buy].value = "@" + lama_hubungan_buy;
		ins_pembelian_perbulan_buy[id_ubah_buy].value = "@" + pembelian_perbulan_buy;
		ins_sistem_perbulan_buy[id_ubah_buy].value = "@" + sistem_perbulan_buy;
	}

	$("#ubah_buy").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();
}


// 
// ENABLE TOMBOL TAMBAH PEMBELI
// 

$(document).ready(function(){
	$(".add-buy").bind("change", check_pembeli);
});

function check_pembeli() {
	var nama_buyer = $("#nama_buyer").val();
	var pic_buy = $("#pic_buy").val();
	var lama_hubungan_buy = $("#lama_hubungan_buy").val();
	var pembelian_perbulan_buy = $("#pembelian_perbulan_buy").val();
	var sistem_perbulan_buy = $("#sistem_perbulan_buy").val();

	if (nama_buyer != "" && pic_buy != "" && lama_hubungan_buy != ""
		&& pembelian_perbulan_buy != "" && sistem_perbulan_buy != "") {
		$("#btnAddPembeli").removeAttr("disabled");
		document.getElementById("btnAddPembeli").classList.remove("btn-custom-dis");
		document.getElementById("btnAddPembeli").classList.add("btn-custom-ad");
	} else {
		$("#btnAddPembeli").attr("disabled", "disabled");
		document.getElementById("btnAddPembeli").classList.remove("btn-custom-ad");
		document.getElementById("btnAddPembeli").classList.add("btn-custom-dis");
	}
} 



// 
// ENABLE TOMBOL UBAH PEMBELI
// 

$(document).ready(function(){
	$(".ubah-buy").bind("change", check_ubahPembeli);
});

function check_ubahPembeli() {
	var nama_buyer = $("#ubah_nama_buyer").val();
	var pic_buy = $("#ubah_pic_buy").val();
	var lama_hubungan_buy = $("#ubah_lama_hubungan_buy").val();
	var pembelian_perbulan_buy = $("#ubah_pembelian_perbulan_buy").val();
	var sistem_perbulan_buy = $("#ubah_sistem_perbulan_buy").val();

	if (nama_buyer != "" && pic_buy != "" && lama_hubungan_buy != ""
		&& pembelian_perbulan_buy != "" && sistem_perbulan_buy != "") {
		$("#btnAddPembeli").removeAttr("disabled");
		document.getElementById("btnAddPembeli").classList.remove("btn-custom-dis");
		document.getElementById("btnAddPembeli").classList.add("btn-custom-ad");
	} else {
		$("#btnAddPembeli").attr("disabled", "disabled");
		document.getElementById("btnAddPembeli").classList.remove("btn-custom-ad");
		document.getElementById("btnAddPembeli").classList.add("btn-custom-dis");
	}
} 



// 
// Hanya Huruf
// 

function alphaOnlyNS(evt) {
	evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        return false;
    }

	return true;
}

function alphaOnly(evt) {
	evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
	if (charCode > 32 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        return false;
    }

	return true;
}

// 
// Hanya Angka tanpa koma
// 

function numOnly(evt) {
	var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
	if (iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
		return false;
	}

	return true;
} 

// 
// Hanya angka dengan koma
// 

function isNumber(evt) {
	var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
	if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
		return false;
	}

	return true;
} 



// 
// Huruf dan Angka
// 

function alphaNumeric(evt) {
	evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
	if ((charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)
		&& charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }

	return true;
}



// 
// VAIDASI NIK
// 

function cekNik() {
	if (document.getElementById("nik").value.length < 16) {
		swal({
			title: 'Oops...',
			text: 'NIK anda kurang dari 16 karakter'
		}).then(function() {
	        swal.close();
	        $("#nik").focus();
	        document.getElementById("nik").value = "";
		});
	}
}



// 
// VALIDASI USIA
// 

$(".datepicker-dso").datepicker({
	uiLibrary: "bootstrap4",
	format: "mm/dd/yyyy",
	// startDate: "-66y",
	endDate: "-17y"
});

$("#tanggal_lahir").on("change", function() {
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
});



// 
// Validasi No Telp dan HP
// 

document.getElementById("no_telp").addEventListener("keyup",function(evt){
	var no_telp = document.getElementById("no_telp");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	no_telp.value = phoneFormat(no_telp.value);
});

document.getElementById("no_hp").addEventListener("keyup",function(evt){
	var no_hp = document.getElementById("no_hp");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	no_hp.value = phoneFormat(no_hp.value);
});

document.getElementById("kd_no_telp").addEventListener("keyup",function(evt){
	var kd_no_telp = document.getElementById("kd_no_telp");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	kd_no_telp.value = phoneFormat(kd_no_telp.value);
});

document.getElementById("no_telp_perusahaan").addEventListener("keyup",function(evt){
	var no_telp_perusahaan = document.getElementById("no_telp_perusahaan");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	no_telp_perusahaan.value = phoneFormat(no_telp_perusahaan.value);
});

document.getElementById("no_telp_perusahaan_gaji").addEventListener("keyup",function(evt){
	var no_telp_perusahaan_gaji = document.getElementById("no_telp_perusahaan_gaji");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	no_telp_perusahaan_gaji.value = phoneFormat(no_telp_perusahaan_gaji.value);
});

document.getElementById("pic_sup").addEventListener("keyup",function(evt){
	var pic_sup = document.getElementById("pic_sup");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	pic_sup.value = phoneFormat(pic_sup.value);
});

document.getElementById("pic_buy").addEventListener("keyup",function(evt){
	var pic_buy = document.getElementById("pic_buy");
	var charCode = (evt.which) ? evt.which : evt.keyCode;
	pic_buy.value = phoneFormat(pic_buy.value);
});

function phoneFormat(input) {
	input = input.replace(/\D/g,'');

	input = input.substring(0,13);

	var size = input.length;
	if (size == 0) {
		input = input;
	} else if (size < 5) {
		input = input;
	} else if (size < 9) {
		input = input.substring(0,4) + " - " + input.substring(4,8);
	}else{
		input = input.substring(0,4) + " - " + input.substring(4,8) + " - " + input.substring(8,13);
	}
	return input; 
}



// 
// Validasi Email
// 

function cekEmail() {
	var email = $("#email").val();

	if (!validateEmail(email)) {
		swal({
			title: 'Oops...',
			text: 'Email yang anda masukkan salah'
		}).then(function() {
			swal.close();
			document.getElementById("email").value = "";
			$("#email").focus();
		});
	}
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}




// 
// Validasi URL
// 

var valid = "";
function cekFb() {
	var link = document.getElementById("sm_facebook").value;
	var regex = /^(http|https)\:\/\/www.facebook.com\/.*/i;

	if (link.length != 0) {
		ValidURL(link, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
		        swal.close();
		        document.getElementById("sm_facebook").value = "";
		        $("#sm_facebook").focus();
			});
		}
	}
}

function cekTw() {
	var link = document.getElementById("sm_twitter").value;
	var regex = /^(http|https)\:\/\/www.twitter.com\/.*/i;

	if (link.length != 0) {
		ValidURL(link, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
		        swal.close();
		        document.getElementById("sm_twitter").value = "";
		        $("#sm_twitter").focus();
			});
		}
	}
}

function cekIg() {
	var link = document.getElementById("sm_instagram").value;
	var regex = /^(http|https)\:\/\/www.instagram.com\/.*/i;

	if (link.length != 0) {
		ValidURL(link, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
		        swal.close();
		        document.getElementById("sm_instagram").value = "";
		        $("#sm_instagram").focus();
			});
		}
	}
}

function cekLi() {
	var link = document.getElementById("sm_linkedin").value;
	var regex = /^(http|https)\:\/\/www.linkedin.com\/.*/i;

	if (link.length != 0) {
		ValidURL(link, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
		        swal.close();
		        document.getElementById("sm_linkedin").value = "";
		        $("#sm_linkedin").focus();
			});
		}
	}
}

function cekBlog() {
	var link = document.getElementById("sm_blog").value;
	var regex_fb = /^(http|https)\:\/\/www.facebook.com\/.*/i;
	var regex_tw = /^(http|https)\:\/\/www.twitter.com\/.*/i;
	var regex_ig = /^(http|https)\:\/\/www.instagram.com\/.*/i;
	var regex_li = /^(http|https)\:\/\/www.linkedin.com\/.*/i;
	var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

	if (link.length != 0) {
		if (!regex_fb.test(link) && !regex_tw.test(link) && !regex_ig.test(link) && !regex_li.test(link)) {
			ValidURL(link, regex);
			if (valid == false) {
				swal({
					title: 'Oops...',
					text: 'Link yang anda masukkan salah'
				}).then(function() {
			        swal.close();
			        document.getElementById("sm_blog").value = "";
			        $("#sm_blog").focus();
				});
			}
		} else {
			swal({
				title: 'Oops...',
				text: 'Silakan masukkan link selain Facebook, Twitter, Instagram dan LinkedIn'
			}).then(function() {
				swal.close();
				document.getElementById("sm_blog").value = "";
				$("#sm_blog").focus();
			});
		}
	}
}

function cekLinkLain() {
	var link = document.getElementById("sm_lainnya").value;
	var regex_fb = /^(http|https)\:\/\/www.facebook.com\/.*/i;
	var regex_tw = /^(http|https)\:\/\/www.twitter.com\/.*/i;
	var regex_ig = /^(http|https)\:\/\/www.instagram.com\/.*/i;
	var regex_li = /^(http|https)\:\/\/www.linkedin.com\/.*/i;
	var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

	if (link.length != 0) {
		if (!regex_fb.test(link) && !regex_tw.test(link) && !regex_ig.test(link) && !regex_li.test(link)) {
			ValidURL(link, regex);
			if (valid == false) {
				swal({
					title: 'Oops...',
					text: 'Link yang anda masukkan salah'
				}).then(function() {
			        swal.close();
			        document.getElementById("sm_lainnya").value = "";
			        $("#sm_lainnya").focus();
				});
			}
		} else {
			swal({
				title: 'Oops...',
				text: 'Silakan masukkan link selain Facebook, Twitter, Instagram dan LinkedIn'
			}).then(function() {
				swal.close();
				document.getElementById("sm_lainnya").value = "";
				$("#sm_lainnya").focus();
			});
		}
	}
}

function cekWebsite() {
	var link = document.getElementById("website_perusahaan").value;
	var link1 = document.getElementById("website_perusahaan_gaji").value;
	var regex = /(http|https):\/\/(\w+:{0,1}\w*)?(\S+)(:[0-9]+)?(\/|\/([\w#!:.?+=&%!\-\/]))?/;

	if (link.length != 0) {
		ValidURL(link, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
				swal.close();
				document.getElementById("website_perusahaan").value = "";
				$("#website_perusahaan").focus();
			});
		}
	}

	if (link1.length != 0) {
		ValidURL(link1, regex);
		if (valid == false) {
			swal({
				title: 'Oops...',
				text: 'Link yang anda masukkan salah'
			}).then(function() {
				swal.close();
				document.getElementById("website_perusahaan_gaji").value = "";
				$("#website_perusahaan_gaji").focus();
			});
		}
	}
}



function ValidURL(link, regex) {
    if(!regex.test(link)) {
        valid = false;
    } else {
        valid = true;
    }
}



// 
// VALIDASI FORMAT UANG
// 

var gaji_thp = document.getElementById("gaji_thp");
gaji_thp.addEventListener("keyup", function(e){
	gaji_thp.value = formatUang(this.value, "Rp ");
});

var penghasilan_tambahan_gk = document.getElementById("penghasilan_tambahan_gk");
penghasilan_tambahan_gk.addEventListener("keyup", function(e){
	penghasilan_tambahan_gk.value = formatUang(this.value, "Rp ");
});

var omset_usaha = document.getElementById("omset_usaha");
omset_usaha.addEventListener("keyup", function(e){
	omset_usaha.value = formatUang(this.value, "Rp ");
});

var cek_omset_usaha_jasa = document.getElementById("cek_omset_usaha_jasa");
cek_omset_usaha_jasa.addEventListener("keyup", function(e){
	cek_omset_usaha_jasa.value = formatUang(this.value, "Rp ");
});

var hpp = document.getElementById("hpp");
hpp.addEventListener("keyup", function(e){
	hpp.value = formatUang(this.value, "Rp ");
});

var plafon_kredit = document.getElementById("plafon_kredit");
plafon_kredit.addEventListener("keyup", function(e){
	plafon_kredit.value = formatUang(this.value, "Rp ");
});

var rab = document.getElementById("rab");
rab.addEventListener("keyup", function(e){
	rab.value = formatUang(this.value, "Rp ");
});

var laba_kotor = document.getElementById("laba_kotor");
laba_kotor.addEventListener("keyup", function(e){
	laba_kotor.value = formatUang(this.value, "Rp ");
});

var gaji_karyawan = document.getElementById("gaji_karyawan");
gaji_karyawan.addEventListener("keyup", function(e){
	gaji_karyawan.value = formatUang(this.value, "Rp ");
});

var biaya_sewa = document.getElementById("biaya_sewa");
biaya_sewa.addEventListener("keyup", function(e){
	biaya_sewa.value = formatUang(this.value, "Rp ");
});

var biaya_umum = document.getElementById("biaya_umum");
biaya_umum.addEventListener("keyup", function(e){
	biaya_umum.value = formatUang(this.value, "Rp ");
});

var biaya_rumah_tangga = document.getElementById("biaya_rumah_tangga");
biaya_rumah_tangga.addEventListener("keyup", function(e){
	biaya_rumah_tangga.value = formatUang(this.value, "Rp ");
});

var persediaan_barang = document.getElementById("persediaan_barang");
persediaan_barang.addEventListener("keyup", function(e){
	persediaan_barang.value = formatUang(this.value, "Rp ");
});

var harga_komoditi = document.getElementById("harga_komoditi");
harga_komoditi.addEventListener("keyup", function(e){
	harga_komoditi.value = formatUang(this.value, "Rp ");
});

var biaya_pupuk = document.getElementById("biaya_pupuk");
biaya_pupuk.addEventListener("keyup", function(e){
	biaya_pupuk.value = formatUang(this.value, "Rp ");
});

var biaya_tk = document.getElementById("biaya_tk");
biaya_tk.addEventListener("keyup", function(e){
	biaya_tk.value = formatUang(this.value, "Rp ");
});

var biaya_sewa_pertanian = document.getElementById("biaya_sewa_pertanian");
biaya_sewa_pertanian.addEventListener("keyup", function(e){
	biaya_sewa_pertanian.value = formatUang(this.value, "Rp ");
});

var biaya_rt_pertanian = document.getElementById("biaya_rt_pertanian");
biaya_rt_pertanian.addEventListener("keyup", function(e){
	biaya_rt_pertanian.value = formatUang(this.value, "Rp ");
});

var gpm_pertanian = document.getElementById("gpm_pertanian");
gpm_pertanian.addEventListener("keyup", function(e){
	gpm_pertanian.value = formatUang(this.value, "Rp ");
});

var piutang_usaha = document.getElementById("piutang_usaha");
piutang_usaha.addEventListener("keyup", function(e){
	piutang_usaha.value = formatUang(this.value, "Rp ");
});

var utang_usaha = document.getElementById("utang_usaha");
utang_usaha.addEventListener("keyup", function(e){
	utang_usaha.value = formatUang(this.value, "Rp ");
});

var utang_bank = document.getElementById("utang_bank");
utang_bank.addEventListener("keyup", function(e){
	utang_bank.value = formatUang(this.value, "Rp ");
});

var penghasilan_tambahan_hu = document.getElementById("penghasilan_tambahan_hu");
penghasilan_tambahan_hu.addEventListener("keyup", function(e){
	penghasilan_tambahan_hu.value = formatUang(this.value, "Rp ");
});

var sarana_prasarana = document.getElementById("sarana_prasarana");
sarana_prasarana.addEventListener("keyup", function(e){
	sarana_prasarana.value = formatUang(this.value, "Rp ");
});

var harga_beli = document.getElementById("harga_beli");
harga_beli.addEventListener("keyup", function(e){
	harga_beli.value = formatUang(this.value, "Rp ");
});

var ubah_harga_beli = document.getElementById("ubah_harga_beli");
ubah_harga_beli.addEventListener("keyup", function(e){
	ubah_harga_beli.value = formatUang(this.value, "Rp ");
});

var harga_jual = document.getElementById("harga_jual");
harga_jual.addEventListener("keyup", function(e){
	harga_jual.value = formatUang(this.value, "Rp ");
});

var ubah_harga_jual = document.getElementById("ubah_harga_jual");
ubah_harga_jual.addEventListener("keyup", function(e){
	ubah_harga_jual.value = formatUang(this.value, "Rp ");
});

var nilai_jaminan = document.getElementById("nilai_jaminan");
nilai_jaminan.addEventListener("keyup", function(e){
	nilai_jaminan.value = formatUang(this.value, "Rp ");
});

var ubah_nilai_jaminan = document.getElementById("ubah_nilai_jaminan");
ubah_nilai_jaminan.addEventListener("keyup", function(e){
	ubah_nilai_jaminan.value = formatUang(this.value, "Rp ");
});


var lama_hubungan_sup = document.getElementById("lama_hubungan_sup");
lama_hubungan_sup.addEventListener("keyup", function(e){
	lama_hubungan_sup.value = thousands_separators_2(this.value);
});

var pembelian_perbulan_sup = document.getElementById("pembelian_perbulan_sup");
pembelian_perbulan_sup.addEventListener("keyup", function(e){
	pembelian_perbulan_sup.value = thousands_separators_2(this.value);
});

var sistem_perbulan_sup = document.getElementById("sistem_perbulan_sup");
sistem_perbulan_sup.addEventListener("keyup", function(e){
	sistem_perbulan_sup.value = thousands_separators_2(this.value);
});

var lama_hubungan_buy = document.getElementById("lama_hubungan_buy");
lama_hubungan_buy.addEventListener("keyup", function(e){
	lama_hubungan_buy.value = thousands_separators_2(this.value);
});

var pembelian_perbulan_buy = document.getElementById("pembelian_perbulan_buy");
pembelian_perbulan_buy.addEventListener("keyup", function(e){
	pembelian_perbulan_buy.value = thousands_separators_2(this.value);
});

var sistem_perbulan_buy = document.getElementById("sistem_perbulan_buy");
sistem_perbulan_buy.addEventListener("keyup", function(e){
	sistem_perbulan_buy.value = thousands_separators_2(this.value);
});


var ubah_lama_hubungan_sup = document.getElementById("ubah_lama_hubungan_sup");
ubah_lama_hubungan_sup.addEventListener("keyup", function(e){
	ubah_lama_hubungan_sup.value = thousands_separators_2(this.value);
});

var ubah_pembelian_perbulan_sup = document.getElementById("ubah_pembelian_perbulan_sup");
ubah_pembelian_perbulan_sup.addEventListener("keyup", function(e){
	ubah_pembelian_perbulan_sup.value = thousands_separators_2(this.value);
});

var ubah_sistem_perbulan_sup = document.getElementById("ubah_sistem_perbulan_sup");
ubah_sistem_perbulan_sup.addEventListener("keyup", function(e){
	ubah_sistem_perbulan_sup.value = thousands_separators_2(this.value);
});

var ubah_lama_hubungan_buy = document.getElementById("ubah_lama_hubungan_buy");
ubah_lama_hubungan_buy.addEventListener("keyup", function(e){
	ubah_lama_hubungan_buy.value = thousands_separators_2(this.value);
});

var ubah_pembelian_perbulan_buy = document.getElementById("ubah_pembelian_perbulan_buy");
ubah_pembelian_perbulan_buy.addEventListener("keyup", function(e){
	ubah_pembelian_perbulan_buy.value = thousands_separators_2(this.value);
});

var ubah_sistem_perbulan_buy = document.getElementById("ubah_sistem_perbulan_buy");
ubah_sistem_perbulan_buy.addEventListener("keyup", function(e){
	ubah_sistem_perbulan_buy.value = thousands_separators_2(this.value);
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

function formatUangClass(angka, prefix){
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
	return prefix == undefined ? rupiah : (rupiah ? "Rp " +  rupiah : '' + i);
}

// Menambahkan titik untuk ribuan
function thousands_separators(num) {
	var num_parts = num.toString().split(".");
	num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	return num_parts.join(",");
} 

function thousands_separators_2(val) {
	var val = val.replace(/[^0-9\.]/g,'');

	if(val != "") {
		valArr = val.split('.');
		valArr[0] = (parseInt(valArr[0],10)).toLocaleString();
		val = valArr.join('.');
	}

	return val;
}



// 
// Validasi Sumber Penghasilan
// 

function setPTGaji() {
	if (!document.getElementById("penghasilan_tambahan_gk").value) {
		document.getElementById("sumber_penghasilan_tambahan_gk").value = "";
		$("#penghasilan_tambahan_gk").removeAttr("required");
		$("#sumber_penghasilan_tambahan_gk").removeAttr("required");
	} else {
		$("#sumber_penghasilan_tambahan_gk").attr("required", "");
	}
}

function setPTSGaji() {
	if (!document.getElementById("sumber_penghasilan_tambahan_gk").value) {
		document.getElementById("penghasilan_tambahan_gk").value = "";
		$("#penghasilan_tambahan_gk").removeAttr("required");
		$("#sumber_penghasilan_tambahan_gk").removeAttr("required");
	} else {
		$("#penghasilan_tambahan_gk").attr("required", "");
	}
}

function setPTUsaha() {
	if (!document.getElementById("penghasilan_tambahan_hu").value) {
		document.getElementById("sumber_penghasilan_tambahan_hu").value = "";
		$("#penghasilan_tambahan_hu").removeAttr("required");
		$("#sumber_penghasilan_tambahan_hu").removeAttr("required");
	} else {
		$("#sumber_penghasilan_tambahan_hu").attr("required", "");
	}
}

function setPTSUsaha() {
	if (!document.getElementById("sumber_penghasilan_tambahan_hu").value) {
		document.getElementById("penghasilan_tambahan_hu").value = "";
		$("#penghasilan_tambahan_hu").removeAttr("required");
		$("#sumber_penghasilan_tambahan_hu").removeAttr("required");
	} else {
		$("#penghasilan_tambahan_hu").attr("required", "");
	}
}



// 
// Hitung Angsuran
// 

function cekBunga() {
	if (document.getElementById("bunga").value < 4) {
		swal({
			title: 'Oops...',
			text: 'Minimal bunga 4%'
		}).then(function() {
			swal.close();
			$("#bunga").focus();
		});
		document.getElementById("bunga").value = '';
	} else if (document.getElementById("bunga").value > 24) {
		swal({
			title: 'Oops...',
			text: 'Maksimal bunga 24%'
		}).then(function() {
			swal.close();
			$("#bunga").focus();
		});
		document.getElementById("bunga").value = '';
	} else {
		hitungAngsuran();
	}
}

function hitungAngsuran() {
	var cek = document.getElementById("plafon_kredit").value;
	var tenor = document.getElementById("tenor_debitur").value;
	var bunga = document.getElementById("bunga").value;
	var plafon = 0;
	var uang = "Rp";

	if (cek != "") {
		split = cek.split(" "),
		nominal = split[1],
		plafon = nominal.replace(/[.]+/g, '');

		if (plafon < 2000000) {
			swal({
				title: 'Oops...',
				text: 'Minimal plafon sebesar Rp 2,000,000'
			}).then(function() {
				swal.close();
				$("#plafon_kredit").focus();
			});
			document.getElementById("plafon_kredit").value = "";
		} else if (plafon > 5000000000) {
			swal({
				title: 'Oops...',
				text: 'Maksimal plafon sebesar Rp 5,000,000,000'
			}).then(function() {
				swal.close();
				$("#plafon_kredit").focus();
			});
			document.getElementById("plafon_kredit").value = "";
		}

	}

	if (bunga != "") {
		if (bunga < 4) {
			swal({
				title: 'Oops...',
				text: 'Minimal bunga 4%'
			}).then(function() {
				swal.close();
				$("#bunga").focus();
			});
			document.getElementById("bunga").value = "";
		} else if (bunga > 24) {
			swal({
				title: 'Oops...',
				text: 'Maksimal bunga 24%'
			}).then(function() {
				swal.close();
				$("#bunga").focus();
			});
			document.getElementById("bunga").value = "";
		}
	}

	if (cek != "" && tenor != "" && bunga != "") {
		var angsuran = (parseInt(plafon) / parseInt(tenor)) + (parseInt(plafon) * (parseInt(bunga) / 100 / 12));
		var tampil_angsuran = thousands_separators(angsuran.toFixed(2));

		if (isNaN(angsuran)) {
			document.getElementById("angsuran").value = '';
		} else {
			document.getElementById("angsuran").value = uang + ' ' + tampil_angsuran;
		}
	} else {
		document.getElementById("angsuran").value = '';
	}

	
}



// 
// Hitung Laba Kotor / GPM
// 

function hitungLabaKotorGpm() {
	var cek_omset_usaha = document.getElementById("omset_usaha").value;
	var cek_hpp = document.getElementById("hpp").value;
	var omset_usaha = 0;
	var hpp = 0;
	var uang = "Rp";

	if (cek_omset_usaha != "") {
		split = cek_omset_usaha.split(" "),
		nominal = split[1],
		omset_usaha = nominal.replace(/[.]+/g, '');
	}

	if (cek_hpp != "") {
		split = cek_hpp.split(" "),
		nominal = split[1],
		hpp = nominal.replace(/[.]+/g, '');
	}

	var hitung_gpm = parseInt(omset_usaha) - parseInt(hpp);
	var tampil_gpm = thousands_separators(hitung_gpm.toFixed(0));

	if (isNaN(hitung_gpm)) {
		document.getElementById("laba_kotor_gpm").value = '';
	} else {
		document.getElementById("laba_kotor_gpm").value = uang + ' ' + tampil_gpm;
	}
}



// 
// Hitung Omset Usaha Jasa
// 

function hitungOmsetJasa() {
	var cek_omset_usaha_jasa = document.getElementById("cek_omset_usaha_jasa").value;
	var cek_rac = document.getElementById("rac").value;
	var uang = "Rp";

	if (cek_omset_usaha_jasa != "") {
		split = cek_omset_usaha_jasa.split(" "),
		nominal = split[1],
		omset_usaha_jasa = nominal.replace(/[.]+/g, '');
	}

	var hitung_omset = parseInt(omset_usaha_jasa) * parseInt(cek_rac) / 100;
	var tampil_omset = thousands_separators(hitung_omset.toFixed(0));

	if (isNaN(hitung_omset)) {
		document.getElementById("omset_usaha_jasa").value = '';
	} else {
		document.getElementById("omset_usaha_jasa").value = uang + ' ' + tampil_omset;
		document.getElementById("laba_kotor").value = uang + ' ' + tampil_omset;
	}
}



// 
// Hitung Omset Usaha Pertanian
// 

function hitungOmsetPertanian() {
	var cek_harga_komoditi = document.getElementById("harga_komoditi").value;
	var cek_hasil_panen = document.getElementById("hasil_panen").value;
	var harga_komoditi = 0;
	var uang = "Rp";

	if (cek_harga_komoditi != "") {
		split = cek_harga_komoditi.split(" "),
		nominal = split[1],
		harga_komoditi = nominal.replace(/[.]+/g, '');
	}

	var hitung_omset = parseFloat(harga_komoditi) * parseFloat(cek_hasil_panen);
	var tampil_omset = thousands_separators(hitung_omset.toFixed(0));

	if (isNaN(hitung_omset)) {
		document.getElementById("omset_usaha_pertanian").value = '';
	} else {
		document.getElementById("omset_usaha_pertanian").value = uang + ' ' + tampil_omset;
	}
}




// 
// PENGAJUAN KREDIT
// 

function setTujuanKredit() {
	document.getElementById("jenis-kredit").style.display = "block";

	if (document.getElementById("tujuan_kredit").value == "Konsumtif") {
		document.getElementById("jenis-kredit-produktif").style.display = "none";
		document.getElementById("jenis-kredit-konsumtif").style.display = "block";
		document.getElementById("ki-rab").style.display = "none";
		document.getElementById("jenis_kredit_kon").value = "";
		document.getElementById("rab").value = "";

		$("#jenis_kredit_kon").attr("required", "");
		$("#jenis_kredit_pro").removeAttr("required");
		$("#rab").removeAttr("required");
	} else {
		document.getElementById("jenis-kredit-produktif").style.display = "block";
		document.getElementById("jenis-kredit-konsumtif").style.display = "none";
		document.getElementById("jenis_kredit_pro").value = "";

		cekProduktif();

		$("#jenis_kredit_pro").attr("required", "");
		$("#jenis_kredit_kon").removeAttr("required");
	}
}



// 
// Menampilkan RAB jika Kredit Investasi
// 

function cekProduktif() {
	if (document.getElementById("tujuan_kredit").value == "Kredit Produktif Investasi" 
		&& document.getElementById("sumber_penghasilan").value == "Hasil Usaha") {

		document.getElementById("ki-rab").style.display = "block";
		$("#rab").attr("required", "");
	} else {
		document.getElementById("ki-rab").style.display = "none";
		$("#rab").removeAttr("required");
		document.getElementById("rab").value = "";
	}
}




// 
// DATA JAMINAN
// 

function setJenisJaminan() {
	if (document.getElementById("jenis_jaminan").value == "Tanah") {
		document.getElementById("jaminan-atas").style.display = "block";
		document.getElementById("jenis-jaminan-tanah").style.display = "block";
		document.getElementById("jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("jenis-jaminan-mesin").style.display = "none";
		document.getElementById("luas-tanah").style.display = "block";
		document.getElementById("bangunan").style.display = "none";
		document.getElementById("jaminan-bawah").style.display = "block";

		document.getElementById("jenis-jaminan-tanah").value = "";
		document.getElementById("alamat_jaminan").value = "";
		document.getElementById("no_bukti_kepemilikan").value = "";
		document.getElementById("luas_tanah").value = "";
		document.getElementById("luas_bangunan").value = "";
		document.getElementById("imb").value = "";
		document.getElementById("tahun_pembelian").value = "";
		document.getElementById("nilai_jaminan").value = "";	

	} else if (document.getElementById("jenis_jaminan").value == "Bangunan") {
		document.getElementById("jaminan-atas").style.display = "block";
		document.getElementById("jenis-jaminan-tanah").style.display = "none";
		document.getElementById("jenis-jaminan-bangunan").style.display = "block";
		document.getElementById("jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("jenis-jaminan-mesin").style.display = "none";
		document.getElementById("luas-tanah").style.display = "block";
		document.getElementById("bangunan").style.display = "block";
		document.getElementById("jaminan-bawah").style.display = "block";

		document.getElementById("jenis-jaminan-bangunan").value = "SHGB";
		document.getElementById("alamat_jaminan").value = "";
		document.getElementById("no_bukti_kepemilikan").value = "";
		document.getElementById("luas_tanah").value = "";
		document.getElementById("luas_bangunan").value = "";
		document.getElementById("imb").value = "";
		document.getElementById("tahun_pembelian").value = "";
		document.getElementById("nilai_jaminan").value = "";
		
	} else if (document.getElementById("jenis_jaminan").value == "Tanah dan Bangunan") {
		document.getElementById("jaminan-atas").style.display = "block";
		document.getElementById("jenis-jaminan-tanah").style.display = "none";
		document.getElementById("jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-tanah-bangunan").style.display = "block";
		document.getElementById("jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("jenis-jaminan-mesin").style.display = "none";
		document.getElementById("luas-tanah").style.display = "block";
		document.getElementById("bangunan").style.display = "block";
		document.getElementById("jaminan-bawah").style.display = "block";

		document.getElementById("jenis-jaminan-tanah-bangunan").value = "";
		document.getElementById("alamat_jaminan").value = "";
		document.getElementById("no_bukti_kepemilikan").value = "";
		document.getElementById("luas_tanah").value = "";
		document.getElementById("luas_bangunan").value = "";
		document.getElementById("imb").value = "";
		document.getElementById("tahun_pembelian").value = "";
		document.getElementById("nilai_jaminan").value = "";
		
	} else if (document.getElementById("jenis_jaminan").value == "Kendaraan Bermotor") {
		document.getElementById("jaminan-atas").style.display = "block";
		document.getElementById("jenis-jaminan-tanah").style.display = "none";
		document.getElementById("jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-kendaraan").style.display = "block";
		document.getElementById("jenis-jaminan-mesin").style.display = "none";
		document.getElementById("luas-tanah").style.display = "none";
		document.getElementById("bangunan").style.display = "none";
		document.getElementById("jaminan-bawah").style.display = "block";

		document.getElementById("jenis-jaminan-kendaraan").value = "BPKB";
		document.getElementById("alamat_jaminan").value = "";
		document.getElementById("no_bukti_kepemilikan").value = "";
		document.getElementById("luas_tanah").value = "";
		document.getElementById("luas_bangunan").value = "";
		document.getElementById("imb").value = "";
		document.getElementById("tahun_pembelian").value = "";
		document.getElementById("nilai_jaminan").value = "";
		
	} else if (document.getElementById("jenis_jaminan").value == "Mesin") {
		document.getElementById("jaminan-atas").style.display = "block";
		document.getElementById("jenis-jaminan-tanah").style.display = "none";
		document.getElementById("jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("jenis-jaminan-mesin").style.display = "block";
		document.getElementById("luas-tanah").style.display = "none";
		document.getElementById("bangunan").style.display = "none";
		document.getElementById("jaminan-bawah").style.display = "block";

		document.getElementById("jenis-jaminan-mesin").value = "Sertifikat Mesin";
		document.getElementById("alamat_jaminan").value = "";
		document.getElementById("no_bukti_kepemilikan").value = "";
		document.getElementById("luas_tanah").value = "";
		document.getElementById("luas_bangunan").value = "";
		document.getElementById("imb").value = "";
		document.getElementById("tahun_pembelian").value = "";
		document.getElementById("nilai_jaminan").value = "";
	}
}

function setUbahJaminan() {
	if (document.getElementById("ubah_jenis_jaminan").value == "Tanah") {
		document.getElementById("ubah-jaminan-atas").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";
		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah-jaminan-bawah").style.display = "block";

		document.getElementById("ubah-jenis-jaminan-tanah").value = "";
		document.getElementById("ubah_alamat_jaminan").value = "";
		document.getElementById("ubah_no_bukti_kepemilikan").value = "";
		document.getElementById("ubah_luas_tanah").value = "";
		document.getElementById("ubah_luas_bangunan").value = "";
		document.getElementById("ubah_imb").value = "";
		document.getElementById("ubah_tahun_pembelian").value = "";
		document.getElementById("ubah_nilai_jaminan").value = "";	

	} else if (document.getElementById("ubah_jenis_jaminan").value == "Bangunan") {
		document.getElementById("ubah-jaminan-atas").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";
		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah-bangunan").style.display = "block";
		document.getElementById("ubah-jaminan-bawah").style.display = "block";

		document.getElementById("ubah-jenis-jaminan-bangunan").value = "SHGB";
		document.getElementById("ubah_alamat_jaminan").value = "";
		document.getElementById("ubah_no_bukti_kepemilikan").value = "";
		document.getElementById("ubah_luas_tanah").value = "";
		document.getElementById("ubah_luas_bangunan").value = "";
		document.getElementById("ubah_imb").value = "";
		document.getElementById("ubah_tahun_pembelian").value = "";
		document.getElementById("ubah_nilai_jaminan").value = "";
		
	} else if (document.getElementById("ubah_jenis_jaminan").value == "Tanah dan Bangunan") {
		document.getElementById("ubah-jaminan-atas").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";
		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah-bangunan").style.display = "block";
		document.getElementById("ubah-jaminan-bawah").style.display = "block";

		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").value = "";
		document.getElementById("ubah_alamat_jaminan").value = "";
		document.getElementById("ubah_no_bukti_kepemilikan").value = "";
		document.getElementById("ubah_luas_tanah").value = "";
		document.getElementById("ubah_luas_bangunan").value = "";
		document.getElementById("ubah_imb").value = "";
		document.getElementById("ubah_tahun_pembelian").value = "";
		document.getElementById("ubah_nilai_jaminan").value = "";
		
	} else if (document.getElementById("ubah_jenis_jaminan").value == "Kendaraan Bermotor") {
		document.getElementById("ubah-jaminan-atas").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";
		document.getElementById("ubah-luas-tanah").style.display = "none";
		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah-jaminan-bawah").style.display = "block";

		document.getElementById("ubah-jenis-jaminan-kendaraan").value = "BPKB";
		document.getElementById("ubah_alamat_jaminan").value = "";
		document.getElementById("ubah_no_bukti_kepemilikan").value = "";
		document.getElementById("ubah_luas_tanah").value = "";
		document.getElementById("ubah_luas_bangunan").value = "";
		document.getElementById("ubah_imb").value = "";
		document.getElementById("ubah_tahun_pembelian").value = "";
		document.getElementById("ubah_nilai_jaminan").value = "";
		
	} else if (document.getElementById("ubah_jenis_jaminan").value == "Mesin") {
		document.getElementById("ubah-jaminan-atas").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "block";
		document.getElementById("ubah-luas-tanah").style.display = "none";
		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah-jaminan-bawah").style.display = "block";

		document.getElementById("ubah-jenis-jaminan-mesin").value = "Sertifikat Mesin";
		document.getElementById("ubah_alamat_jaminan").value = "";
		document.getElementById("ubah_no_bukti_kepemilikan").value = "";
		document.getElementById("ubah_luas_tanah").value = "";
		document.getElementById("ubah_luas_bangunan").value = "";
		document.getElementById("ubah_imb").value = "";
		document.getElementById("ubah_tahun_pembelian").value = "";
		document.getElementById("ubah_nilai_jaminan").value = "";
	}
}



// 
// Jaminan
// 

var jml_jaminan = 0;
var jml_data_jaminan = 0;
var cek_jml_jaminan = 0;
var i_jaminan = 0;
var index_jaminan = 0;
var jns_jaminan = [];
var bkt_jaminan = [];
var bkt_data_jaminan = [];
var id_jaminan = "";

function tambahJaminan() {
	$('.table-jaminan').show();

	index_jaminan = i_jaminan;
	var jenis_jaminan = $("#jenis_jaminan").val();
	var bukti_jaminan = "";
	var alamat_jaminan = $("#alamat_jaminan").val();
	var no_bukti_kepemilikan = $("#no_bukti_kepemilikan").val();
	var luas_tanah = $("#luas_tanah").val();
	var luas_bangunan = $("#luas_bangunan").val();
	var imb = $("#imb").val();
	var tahun_pembelian = $("#tahun_pembelian").val();
	var nilai_jaminan = $("#nilai_jaminan").val();

	totalJaminan(nilai_jaminan);

	if (jenis_jaminan == "Tanah") {
		bukti_jaminan = $("#jenis-jaminan-tanah").val();
		luas_bangunan = "-";
		imb = "-";
	} else if (jenis_jaminan == "Bangunan") {
		bukti_jaminan = $("#jenis-jaminan-bangunan").val();
	} else if (jenis_jaminan == "Tanah dan Bangunan") {
		bukti_jaminan = $("#jenis-jaminan-tanah-bangunan").val();
	} else if (jenis_jaminan == "Kendaraan Bermotor") {
		bukti_jaminan = $("#jenis-jaminan-kendaraan").val();
		luas_tanah = "-";
		luas_bangunan = "-";
		imb = "-";
	} else if (jenis_jaminan == "Mesin") {
		bukti_jaminan = $("#jenis-jaminan-mesin").val();
		luas_tanah = "-";
		luas_bangunan = "-";
		imb = "-";
	}

	var source = $("#draft_jaminan").html();
	var template = Handlebars.compile(source);

	if (jenis_jaminan != "" && bukti_jaminan != "" && alamat_jaminan != "" && no_bukti_kepemilikan != ""
		&& luas_tanah != "" && luas_bangunan != "" && imb != "" && tahun_pembelian != "" && nilai_jaminan != "") {

		var data = {
			index: jml_jaminan,
			jenis_jaminan: jenis_jaminan,
			bukti_jaminan: bukti_jaminan,
			alamat_jaminan: alamat_jaminan,
			no_bukti_kepemilikan: no_bukti_kepemilikan,
			luas_tanah: luas_tanah,
			luas_bangunan: luas_bangunan,
			imb: imb,
			tahun_pembelian: tahun_pembelian,
			nilai_jaminan: nilai_jaminan
		}

		jns_jaminan.push(jenis_jaminan);
		bkt_jaminan.push(bukti_jaminan);

		bkt_data_jaminan.push({jenis: jenis_jaminan, bukti: bukti_jaminan, alamat: alamat_jaminan, 
			no: no_bukti_kepemilikan, tanah: luas_tanah, bangunan: luas_bangunan, imb: imb, 
			tahun: tahun_pembelian, nilai: nilai_jaminan});
	}

	var html = template(data);
	$("#list_jaminan").append(html);
	$("#modal_jaminan").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();

	document.getElementById("jaminan-atas").style.display = "none";
	document.getElementById("luas-tanah").style.display = "none";
	document.getElementById("bangunan").style.display = "none";
	document.getElementById("jaminan-bawah").style.display = "none";

	document.getElementById("jenis_jaminan").value = '';
	document.getElementById("jenis-jaminan-tanah").value = '';
	document.getElementById("jenis-jaminan-bangunan").value = 'SHGB';
	document.getElementById("jenis-jaminan-tanah-bangunan").value = '';
	document.getElementById("jenis-jaminan-kendaraan").value = 'BPKB';
	document.getElementById("jenis-jaminan-mesin").value = 'Sertifikat Mesin';
	document.getElementById("alamat_jaminan").value = '';
	document.getElementById("no_bukti_kepemilikan").value = '';
	document.getElementById("luas_tanah").value = '';
	document.getElementById("luas_bangunan").value = '';
	document.getElementById("imb").value = '';
	document.getElementById("tahun_pembelian").value = '';
	document.getElementById("nilai_jaminan").value = '';

	$("#btnTambahJaminan").attr("disabled", "disabled");
	document.getElementById("btnTambahJaminan").classList.remove("btn-custom-ad");
	document.getElementById("btnTambahJaminan").classList.add("btn-custom-dis");

	// bkt_jaminan.push([jenis_jaminan, bukti_jaminan, alamat_jaminan, no_bukti_kepemilikan, luas_tanah,
	// 	luas_bangunan, imb, tahun_pembelian, nilai_jaminan]);

	id_jaminan = "jaminan_" + i_jaminan;
	$('[class*="id-jaminan"]').each(function(i, ele) {
		var id = $(this).attr('class');
		$(this).attr('id', id_jaminan);
		$(this).removeClass("id-jaminan");
	});

	jml_jaminan = jml_jaminan + 1;
	jml_data_jaminan = jml_data_jaminan + 1;
	i_jaminan = i_jaminan + 1;

	cekBtnJaminan();
	// $(".berkas-jaminan").remove();
}

$(document).on("click","#hapus_jaminan",function(event){
    $(this).closest(".hapus_list_jaminan").remove();
    jml_jaminan = jml_jaminan - 1;
	var index_arr = document.getElementsByName("index[]");
	var index_arr1 = index_arr.length - 1;;
	for (var i = 0; i < jml_jaminan; i++) {
		if (index_arr[i].value > i) {
			bkt_jaminan.splice(i, 1);
			break;
		} else if (index_arr[i].value == index_arr1) {
			bkt_jaminan.splice(i + 1, 1);
		} 
	}

	var nilai_jaminan = document.getElementsByName("nilai_jaminan[]");
	total_jaminan = 0;

	for (var i = 0; i < jml_jaminan; i++) {
		index_arr[i].value = i;
		var val_nilai = nilai_jaminan[i].value;
		totalJaminan(val_nilai);
	}

	if (jml_jaminan == 0) {
		document.getElementById("total_jaminan").value = "Rp " + total_jaminan;
	}

    cekBtnJaminan();
    unggahJaminan();
    $(".berkas-jaminan").remove();
});

$(document).on("click","#cek_jaminan",function(event){
	var id_data_jaminan = $(this).closest(".hapus_list_jaminan").find('input[type="hidden"]').attr('id');
	var index_data_jaminan = document.getElementById(id_data_jaminan).value;
	document.getElementById("id_ubah").value = index_data_jaminan;

	// document.getElementById("det_jenis").textContent = bkt_data_jaminan[index_data_jaminan].jenis;
	// document.getElementById("det_bukti").textContent = bkt_data_jaminan[index_data_jaminan].bukti;
	// document.getElementById("det_alamat").textContent = bkt_data_jaminan[index_data_jaminan].alamat;
	// document.getElementById("det_nomor").textContent = bkt_data_jaminan[index_data_jaminan].no;
	// document.getElementById("det_tanah").textContent = bkt_data_jaminan[index_data_jaminan].tanah;
	// document.getElementById("det_bangunan").textContent = bkt_data_jaminan[index_data_jaminan].bangunan;
	// document.getElementById("det_imb").textContent = bkt_data_jaminan[index_data_jaminan].imb;
	// document.getElementById("det_tahun").textContent = bkt_data_jaminan[index_data_jaminan].tahun;
	// document.getElementById("det_nilai").textContent = bkt_data_jaminan[index_data_jaminan].nilai;

	det_jenis = document.getElementsByName("jenis_jaminan[]");
	val_jenis = det_jenis[index_data_jaminan].value;
	split_jenis = val_jenis.split("@");
	set_jenis = split_jenis[1];
	document.getElementById("ubah_jenis_jaminan").value = set_jenis;
	document.getElementById("ubah-jaminan-atas").style.display = "block";
	document.getElementById("ubah-jaminan-bawah").style.display = "block";

	det_bukti = document.getElementsByName("bukti_jaminan[]");
	val_bukti = det_bukti[index_data_jaminan].value;
	split_bukti = val_bukti.split("@");
	set_bukti = split_bukti[1];

	det_alamat = document.getElementsByName("alamat_jaminan[]");
	val_alamat = det_alamat[index_data_jaminan].value;
	split_alamat = val_alamat.split("@");
	set_alamat = split_alamat[1];
	document.getElementById("ubah_alamat_jaminan").value = set_alamat;

	det_nomor = document.getElementsByName("no_bukti_kepemilikan[]");
	val_nomor = det_nomor[index_data_jaminan].value;
	split_nomor = val_nomor.split("@");
	set_nomor = split_nomor[1];
	document.getElementById("ubah_no_bukti_kepemilikan").value = set_nomor;

	det_tanah = document.getElementsByName("luas_tanah[]");
	val_tanah = det_tanah[index_data_jaminan].value;
	split_tanah = val_tanah.split("@");
	set_tanah = split_tanah[1];

	det_bangunan = document.getElementsByName("luas_bangunan[]");
	val_bangunan = det_bangunan[index_data_jaminan].value;
	split_bangunan = val_bangunan.split("@");
	set_bangunan = split_bangunan[1];

	det_imb = document.getElementsByName("imb[]");
	val_imb = det_imb[index_data_jaminan].value;
	split_imb = val_imb.split("@");
	set_imb = split_imb[1];

	if (set_jenis == "Tanah") {
		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah").value = set_bukti;

		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";

		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah_luas_tanah").value = set_tanah;

		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah_luas_bangunan").value = set_bangunan;
		document.getElementById("ubah_imb").value = set_imb;

	} else if (set_jenis == "Bangunan") {
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-bangunan").value = set_bukti;

		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";

		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah_luas_tanah").value = set_tanah;

		document.getElementById("ubah-bangunan").style.display = "block";
		document.getElementById("ubah_luas_bangunan").value = set_bangunan;
		document.getElementById("ubah_imb").value = set_imb;

	} else if (set_jenis == "Tanah dan Bangunan") {
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").value = set_bukti;

		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";

		document.getElementById("ubah-luas-tanah").style.display = "block";
		document.getElementById("ubah_luas_tanah").value = set_tanah;

		document.getElementById("ubah-bangunan").style.display = "block";
		document.getElementById("ubah_luas_bangunan").value = set_bangunan;
		document.getElementById("ubah_imb").value = set_imb;

	} else if (set_jenis == "Kendaraan Bermotor") {
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-kendaraan").value = set_bukti;

		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "none";

		document.getElementById("ubah-luas-tanah").style.display = "none";
		document.getElementById("ubah_luas_tanah").value = set_tanah;

		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah_luas_bangunan").value = set_bangunan;
		document.getElementById("ubah_imb").value = set_imb;

	} else if (set_jenis == "Mesin") {
		document.getElementById("ubah-jenis-jaminan-mesin").style.display = "block";
		document.getElementById("ubah-jenis-jaminan-mesin").value = set_bukti;

		document.getElementById("ubah-jenis-jaminan-tanah").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-tanah-bangunan").style.display = "none";
		document.getElementById("ubah-jenis-jaminan-kendaraan").style.display = "none";

		document.getElementById("ubah-luas-tanah").style.display = "none";
		document.getElementById("ubah_luas_tanah").value = set_tanah;

		document.getElementById("ubah-bangunan").style.display = "none";
		document.getElementById("ubah_luas_bangunan").value = set_bangunan;
		document.getElementById("ubah_imb").value = set_imb;
	}

	det_tahun = document.getElementsByName("tahun_pembelian[]");
	val_tahun = det_tahun[index_data_jaminan].value;
	split_tahun = val_tahun.split("@");
	set_tahun = split_tahun[1];
	document.getElementById("ubah_tahun_pembelian").value = set_tahun;

	det_nilai = document.getElementsByName("nilai_jaminan[]");
	val_nilai = det_nilai[index_data_jaminan].value;
	split_nilai = val_nilai.split(" ");
	get_nilai = split_nilai[1];
	set_nilai = get_nilai.replace(/[.]+/g, '');
	document.getElementById("ubah_nilai_jaminan").value = formatUang(set_nilai, "Rp ");

	kurangi_jaminan = set_nilai;

	$("#btnUbahJaminan").removeAttr("disabled");
	document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
	document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");
});

function ubahJaminan() {
	id_ubah = document.getElementById("id_ubah").value;
	jenis_jaminan = $("#ubah_jenis_jaminan").val();
	jenis_jaminan_tanah = $("#ubah-jenis-jaminan-tanah").val();
	jenis_jaminan_bangunan = $("#ubah-jenis-jaminan-bangunan").val();
	jenis_jaminan_tanah_bangunan = $("#ubah-jenis-jaminan-tanah-bangunan").val();
	jenis_jaminan_kendaraan = $("#ubah-jenis-jaminan-kendaraan").val();
	jenis_jaminan_mesin = $("#ubah-jenis-jaminan-mesin").val();
	alamat_jaminan = $("#ubah_alamat_jaminan").val();
	no_bukti_kepemilikan = $("#ubah_no_bukti_kepemilikan").val();
	luas_tanah = $("#ubah_luas_tanah").val();
	luas_bangunan = $("#ubah_luas_bangunan").val();
	imb = $("#ubah_imb").val();
	tahun_pembelian = $("#ubah_tahun_pembelian").val();
	nilai_jaminan = $("#ubah_nilai_jaminan").val();

	if (!luas_tanah) {
		luas_tanah = "-";
	}

	if (!luas_bangunan) {
		luas_bangunan = "-";
	}

	if (!imb) {
		imb = "-";
	}

	ins_jenis = document.form_input_data_jaminan["jenis_jaminan[]"];
	ins_bukti = document.form_input_data_jaminan["bukti_jaminan[]"];
	ins_alamat = document.form_input_data_jaminan["alamat_jaminan[]"];
	ins_nomor = document.form_input_data_jaminan["no_bukti_kepemilikan[]"];
	ins_tanah = document.form_input_data_jaminan["luas_tanah[]"];
	ins_bangunan = document.form_input_data_jaminan["luas_bangunan[]"];
	ins_imb = document.form_input_data_jaminan["imb[]"];
	ins_tahun = document.form_input_data_jaminan["tahun_pembelian[]"];
	ins_nilai = document.form_input_data_jaminan["nilai_jaminan[]"];

	if (jml_jaminan == 1) {
		ins_jenis.value = "@" + jenis_jaminan;

		if (jenis_jaminan == "Tanah") {
			ins_bukti.value = "@" + jenis_jaminan_tanah;
		} else if (jenis_jaminan == "Bangunan") {
			ins_bukti.value = "@" + jenis_jaminan_bangunan;
		} else if (jenis_jaminan == "Tanah dan Bangunan") {
			ins_bukti.value = "@" + jenis_jaminan_tanah_bangunan;
		} else if (jenis_jaminan == "Kendaraan Bermotor") {
			ins_bukti.value = "@" + jenis_jaminan_kendaraan;
		} else if (jenis_jaminan == "Mesin") {
			ins_bukti.value = "@" + jenis_jaminan_mesin;
		}

		ins_alamat.value = "@" + alamat_jaminan;
		ins_nomor.value = "@" + no_bukti_kepemilikan;
		ins_tanah.value = "@" + luas_tanah;
		ins_bangunan.value = "@" + luas_bangunan;
		ins_imb.value = "@" + imb;
		ins_tahun.value = "@" + tahun_pembelian;
		ins_nilai.value = "@" + nilai_jaminan;

	} else {
		ins_jenis[id_ubah].value = "@" + jenis_jaminan;

		if (jenis_jaminan == "Tanah") {
			ins_bukti[id_ubah].value = "@" + jenis_jaminan_tanah;
		} else if (jenis_jaminan == "Bangunan") {
			ins_bukti[id_ubah].value = "@" + jenis_jaminan_bangunan;
		} else if (jenis_jaminan == "Tanah dan Bangunan") {
			ins_bukti[id_ubah].value = "@" + jenis_jaminan_tanah_bangunan;
		} else if (jenis_jaminan == "Kendaraan Bermotor") {
			ins_bukti[id_ubah].value = "@" + jenis_jaminan_kendaraan;
		} else if (jenis_jaminan == "Mesin") {
			ins_bukti[id_ubah].value = "@" + jenis_jaminan_mesin;
		}

		ins_alamat[id_ubah].value = "@" + alamat_jaminan;
		ins_nomor[id_ubah].value = "@" + no_bukti_kepemilikan;
		ins_tanah[id_ubah].value = "@" + luas_tanah;
		ins_bangunan[id_ubah].value = "@" + luas_bangunan;
		ins_imb[id_ubah].value = "@" + imb;
		ins_tahun[id_ubah].value = "@" + tahun_pembelian;
		ins_nilai[id_ubah].value = "@" + nilai_jaminan;
	}

	$("#ubah_jaminan").modal('hide');
	$('body').removeClass('modal-open'); 
	$('.modal-backdrop').remove();

	kurangJaminan(kurangi_jaminan);
	totalJaminan(nilai_jaminan);

	var nilai_jaminan = document.getElementById("nilai_jaminan");
	nilai_jaminan.addEventListener("keyup", function(e){
		nilai_jaminan.value = formatUang(this.value, "Rp ");
	});
}

function cekBtnJaminan() {
	if (jml_jaminan > 0) {
		$("#btnSimpanJaminan").removeAttr("disabled");
		document.getElementById("btnSimpanJaminan").classList.remove("btn-custom-dis");
		document.getElementById("btnSimpanJaminan").classList.add("btn-custom-ad");
	} else {
		$("#btnSimpanJaminan").attr("disabled", "disabled");
		document.getElementById("btnSimpanJaminan").classList.remove("btn-custom-ad");
		document.getElementById("btnSimpanJaminan").classList.add("btn-custom-dis");
		i_jaminan = 0;
	}
}

var total_jaminan = 0;
var kurangi_jaminan = 0;
function totalJaminan(nilai) {
	split = nilai.split(" "),
	nominal = split[1],
	jaminan = nominal.replace(/[.]+/g, '');

	total_jaminan += parseInt(jaminan);

	document.getElementById("total_jaminan").value = "Rp " + thousands_separators(total_jaminan);
}

function kurangJaminan(nilai) {
	total_jaminan -= parseInt(nilai);

	document.getElementById("total_jaminan").value = "Rp " + thousands_separators(total_jaminan);
}


// 
// Cek Tahun Pembelian (Data Jaminan)
// 

function cekTahunBeli() {
	if ((document.getElementById("tahun_pembelian").value != "" && document.getElementById("tahun_pembelian").value.length < 4) || 
		(document.getElementById("ubah_tahun_pembelian").value != "" && document.getElementById("ubah_tahun_pembelian").value.length < 4)) {

		swal({
			title: 'Oops...',
			html: 'Tahun pembelian yang anda masukkan salah <br> Pastikan menggunakan format tahun xxxx'
		}).then(function() {
			swal.close();
			document.getElementById("tahun_pembelian").value = "";
			document.getElementById("ubah_tahun_pembelian").value = "";
			$("#tahun_pembelian").focus();
			$("#ubah_tahun_pembelian").focus();
		});
	}
	
}



// 
// ENABLE TOMBOL TAMBAH DATA JAMINAN
// 

$(document).ready(function(){
	$(".jaminan").bind("change", check_dataJaminan);
});

function check_dataJaminan() {
	var jenis_jaminan = $("#jenis_jaminan").val();
	var jenis_jaminan_tanah = $("#jenis-jaminan-tanah").val();
	var jenis_jaminan_bangunan = $("#jenis-jaminan-bangunan").val();
	var jenis_jaminan_tanah_bangunan = $("#jenis-jaminan-tanah-bangunan").val();
	var jenis_jaminan_kendaraan = $("#jenis-jaminan-kendaraan").val();
	var jenis_jaminan_mesin = $("#jenis-jaminan-mesin").val();
	var alamat_jaminan = $("#alamat_jaminan").val();
	var no_bukti_kepemilikan = $("#no_bukti_kepemilikan").val();
	var luas_tanah = $("#luas_tanah").val();
	var luas_bangunan = $("#luas_bangunan").val();
	var imb = $("#imb").val();
	var tahun_pembelian = $("#tahun_pembelian").val();
	var nilai_jaminan = $("#nilai_jaminan").val();

	if (!jenis_jaminan) {
		jenis_jaminan = "";
	}

	if (!jenis_jaminan_tanah) {
		jenis_jaminan_tanah = "";
	}

	if (!jenis_jaminan_tanah_bangunan) {
		jenis_jaminan_tanah_bangunan = "";
	}

	if (alamat_jaminan != "" && no_bukti_kepemilikan != "" && tahun_pembelian != "" && nilai_jaminan != "") {
		if (jenis_jaminan == "Tanah" && jenis_jaminan_tanah != "" && luas_tanah != "") {
			$("#btnTambahJaminan").removeAttr("disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Bangunan" && jenis_jaminan_bangunan != "" && luas_tanah != "" && luas_bangunan != "" && imb != "") {
			$("#btnTambahJaminan").removeAttr("disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Tanah dan Bangunan" && jenis_jaminan_tanah_bangunan != "" && luas_tanah != "" && luas_bangunan != "" && imb != "") {
			$("#btnTambahJaminan").removeAttr("disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Kendaraan Bermotor") {
			$("#btnTambahJaminan").removeAttr("disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Mesin") {
			$("#btnTambahJaminan").removeAttr("disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-ad");

		} else {
			$("#btnTambahJaminan").attr("disabled", "disabled");
			document.getElementById("btnTambahJaminan").classList.remove("btn-custom-ad");
			document.getElementById("btnTambahJaminan").classList.add("btn-custom-dis");
		}

	} else {
		$("#btnTambahJaminan").attr("disabled", "disabled");
		document.getElementById("btnTambahJaminan").classList.remove("btn-custom-ad");
		document.getElementById("btnTambahJaminan").classList.add("btn-custom-dis");
	}
}



// 
// ENABLE TOMBOL UBAH DATA JAMINAN
// 

$(document).ready(function(){
	$(".ubah-jaminan").bind("change", check_ubahJaminan);
});

function check_ubahJaminan() {
	var jenis_jaminan = $("#ubah_jenis_jaminan").val();
	var jenis_jaminan_tanah = $("#ubah-jenis-jaminan-tanah").val();
	var jenis_jaminan_bangunan = $("#ubah-jenis-jaminan-bangunan").val();
	var jenis_jaminan_tanah_bangunan = $("#ubah-jenis-jaminan-tanah-bangunan").val();
	var jenis_jaminan_kendaraan = $("#ubah-jenis-jaminan-kendaraan").val();
	var jenis_jaminan_mesin = $("#ubah-jenis-jaminan-mesin").val();
	var alamat_jaminan = $("#ubah_alamat_jaminan").val();
	var no_bukti_kepemilikan = $("#nubah_o_bukti_kepemilikan").val();
	var luas_tanah = $("#ubah_luas_tanah").val();
	var luas_bangunan = $("#ubah_luas_bangunan").val();
	var imb = $("#ubah_imb").val();
	var tahun_pembelian = $("#ubah_tahun_pembelian").val();
	var nilai_jaminan = $("#ubah_nilai_jaminan").val();

	if (!jenis_jaminan) {
		jenis_jaminan = "";
	}

	if (!jenis_jaminan_tanah) {
		jenis_jaminan_tanah = "";
	}

	if (!jenis_jaminan_tanah_bangunan) {
		jenis_jaminan_tanah_bangunan = "";
	}

	if (alamat_jaminan != "" && no_bukti_kepemilikan != "" && tahun_pembelian != "" && nilai_jaminan != "") {
		if (jenis_jaminan == "Tanah" && jenis_jaminan_tanah != "" && luas_tanah != "") {
			$("#btnUbahJaminan").removeAttr("disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Bangunan" && jenis_jaminan_bangunan != "" && luas_tanah != "" && luas_bangunan != "" && imb != "") {
			$("#btnUbahJaminan").removeAttr("disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Tanah dan Bangunan" && jenis_jaminan_tanah_bangunan != "" && luas_tanah != "" && luas_bangunan != "" && imb != "") {
			$("#btnUbahJaminan").removeAttr("disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Kendaraan Bermotor") {
			$("#btnUbahJaminan").removeAttr("disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");

		} else if (jenis_jaminan == "Mesin") {
			$("#btnUbahJaminan").removeAttr("disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-dis");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-ad");

		} else {
			$("#btnUbahJaminan").attr("disabled", "disabled");
			document.getElementById("btnUbahJaminan").classList.remove("btn-custom-ad");
			document.getElementById("btnUbahJaminan").classList.add("btn-custom-dis");
		}

	} else {
		$("#btnUbahJaminan").attr("disabled", "disabled");
		document.getElementById("btnUbahJaminan").classList.remove("btn-custom-ad");
		document.getElementById("btnUbahJaminan").classList.add("btn-custom-dis");
	}
}