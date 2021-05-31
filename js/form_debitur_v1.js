var sp = "";
var pt_gk = "";
var pt_hu = "";

// Variabel Jaminan
var jml_jaminan = 0;
var cek_jml_jaminan = 0;
var i_jaminan = 0;
var index_jaminan = 0;
var bkt_jaminan = [];

function selanjutnya1() {
	document.querySelector("#page2").classList.add("active");
	document.querySelector(".f1-progress-line").style.width = "37.5%";
	document.getElementById("ket-2").style.color = "#F02632";

	if (document.getElementById("sumber_penghasilan").value == "Gaji Kerja") {
		sp = "Gaji Kerja";
		document.getElementById("form-2-gaji").style.display = "block";
		document.getElementById("form-2-usaha").style.display = "none";
		document.getElementById("level-gaji").style.display = "block";
		document.getElementById("level-usaha").style.display = "none";
		document.getElementById("form-2").style.height = "340px";

		document.getElementById("omset-usaha").style.display = "none";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "none";
		document.getElementById("form-2-usaha-manufaktur").style.display = "none";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "none";
		document.getElementById("penghasilan-tambahan").style.display = "none";
		document.getElementById("sarana-prasarana").style.display = "none";
		document.getElementById("suplier-buyer").style.display = "none";
		document.getElementById("btn-sup").style.display = "none";
		document.getElementById("btn-buy").style.display = "none";
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";

		if ($("#ket-21").hasClass("d-none")){
			$("#ket-21").removeClass("d-none");
			$("#ket-21").show();
			document.getElementById("ket-21").style.color = "#F02632";
		} else {
			$("#ket-21").show();
			document.getElementById("ket-21").style.color = "#F02632";
		}

		$("#ket-22").hide();
	} else if (document.getElementById("sumber_penghasilan").value == "Hasil Usaha") {
		sp = "Hasil Usaha";
		document.getElementById("form-2-gaji").style.display = "none";
		document.getElementById("form-2-usaha").style.display = "block";
		document.getElementById("level-gaji").style.display = "none";
		document.getElementById("level-usaha").style.display = "block";
		document.getElementById("suplier-buyer").style.display = "block";
		document.getElementById("btn-sup").style.display = "block";
		document.getElementById("btn-buy").style.display = "block";
		document.getElementById("form-2").style.height = "300px";

		if ($("#ket-22").hasClass("d-none")){
		    $("#ket-22").removeClass("d-none");
		    $("#ket-22").show();
		    document.getElementById("ket-22").style.color = "#F02632";
		} else {
			$("#ket-22").show();
			document.getElementById("ket-22").style.color = "#F02632";
		}

		$("#ket-21").hide();
	}

	document.getElementById("form-1").style.display = "none";
	document.getElementById("form-2").style.display = "block";
	document.getElementById("form-3").style.display = "none";
	document.getElementById("form-4").style.display = "none";
	document.getElementById("form-5").style.display = "none";
}

function selanjutnya2() {
	document.querySelector("#page3").classList.add("active");
	document.querySelector(".f1-progress-line").style.width = "62.5%";
	document.getElementById("ket-3").style.color = "#F02632";

	document.getElementById("form-1").style.display = "none";
	document.getElementById("form-2").style.display = "none";
	document.getElementById("form-3").style.display = "block";
	document.getElementById("form-4").style.display = "none";
	document.getElementById("form-5").style.display = "none";
	document.getElementById("suplier-buyer").style.display = "none";
	document.getElementById("btn-sup").style.display = "none";
	document.getElementById("btn-buy").style.display = "none";
	document.getElementById("btn-observasi").style.display = "none";
}

function selanjutnya3() {
	document.querySelector("#page4").classList.add("active");
	document.querySelector(".f1-progress-line").style.width = "100%";
	document.getElementById("ket-4").style.color = "#F02632";

	document.getElementById("btn-jaminan").style.display = "block";

	document.getElementById("form-1").style.display = "none";
	document.getElementById("form-2").style.display = "none";
	document.getElementById("form-3").style.display = "none";
	document.getElementById("form-4").style.display = "block";
	document.getElementById("form-5").style.display = "none";
}

function sebelumnya1() {
	document.querySelector("#page2").classList.remove("active");
	document.querySelector(".f1-progress-line").style.width = "12.5%";
	document.getElementById("ket-2").style.color = "#ddd";

	if (document.getElementById("sumber_penghasilan").value == "Gaji Kerja") {
		document.getElementById("ket-21").style.color = "#ddd";
		$("#ket-22").hide();
	} else if (document.getElementById("sumber_penghasilan").value == "Hasil Usaha") {
		document.getElementById("ket-22").style.color = "#ddd";
		$("#ket-21").hide();
		document.getElementById("suplier-buyer").style.display = "none";
		document.getElementById("btn-sup").style.display = "none";
		document.getElementById("btn-buy").style.display = "none";
		document.getElementById("btn-observasi").style.display = "none";
	}

	document.getElementById("form-1").style.display = "block";
	document.getElementById("form-2").style.display = "none";
	document.getElementById("form-3").style.display = "none";
	document.getElementById("form-4").style.display = "none";
	document.getElementById("form-5").style.display = "none";	
}

function sebelumnya2() {
	document.querySelector("#page3").classList.remove("active");
	document.querySelector(".f1-progress-line").style.width = "37.5%";
	document.getElementById("ket-3").style.color = "#ddd";

	if (document.getElementById("sumber_penghasilan").value == "Gaji Kerja") {
		document.getElementById("suplier-buyer").style.display = "none";
		document.getElementById("btn-sup").style.display = "none";
		document.getElementById("btn-buy").style.display = "none";
		document.getElementById("btn-observasi").style.display = "none";
	} else if (document.getElementById("sumber_penghasilan").value == "Hasil Usaha") {
		document.getElementById("suplier-buyer").style.display = "block";
		document.getElementById("btn-sup").style.display = "block";
		document.getElementById("btn-buy").style.display = "block";

		if (document.getElementById("jenis_usaha").value == "Perdagangan") {
			document.getElementById("btn-observasi").style.display = "block";
		} else {
			document.getElementById("btn-observasi").style.display = "none";
		}
	}

	document.getElementById("form-1").style.display = "none";
	document.getElementById("form-2").style.display = "block";
	document.getElementById("form-3").style.display = "none";
	document.getElementById("form-4").style.display = "none";
	document.getElementById("form-5").style.display = "none";
}

function sebelumnya3() {
	document.querySelector("#page4").classList.remove("active");
	document.querySelector(".f1-progress-line").style.width = "62.5%";
	document.getElementById("ket-4").style.color = "#ddd";

	document.getElementById("btn-jaminan").style.display = "none";

	document.getElementById("form-1").style.display = "none";
	document.getElementById("form-2").style.display = "none";
	document.getElementById("form-3").style.display = "block";
	document.getElementById("form-4").style.display = "none";
	document.getElementById("form-5").style.display = "none";
}



function setStatusPerkawinan() {
	if (document.getElementById("status_perkawinan").value == "Menikah") {
		$("#btnFinish").attr("disabled", "disabled");
		document.getElementById("btnFinish").classList.remove("btn-custom-ad");
		document.getElementById("btnFinish").classList.add("btn-custom-dis");
	} else {
		$("#btnFinish").removeAttr("disabled");
		document.getElementById("btnFinish").classList.remove("btn-custom-dis");
		document.getElementById("btnFinish").classList.add("btn-custom-ad");
	}

	document.getElementById("berkas_akta_nikah").value = "";
}

function setSumberPenghasilan(pilihSP) {
	document.getElementById("nama_perusahaan").value = "";
	document.getElementById("level_perusahaan_gaji").value = "";
	document.getElementById("level_perusahaan_usaha").value = "";
	document.getElementById("alamat_perusahaan").value = "";
	document.getElementById("no_telp_perusahaan").value = "";
	document.getElementById("ext").value = "";
	document.getElementById("website_perusahaan").value = "";
	document.getElementById("tahun_kerja").value = "";
	document.getElementById("bulan_kerja").value = "";
	document.getElementById("jenis_usaha_gaji").value = "";
	document.getElementById("status_kepegawaian").value = "";
	document.getElementById("jabatan").value = "";
	document.getElementById("level_jabatan").value = "";
	document.getElementById("gaji_thp").value = "";
	document.getElementById("penghasilan_tambahan_gk").value = "";
	document.getElementById("sumber_penghasilan_tambahan_gk").value = "";
	document.getElementById("tahun_usaha").value = "";
	document.getElementById("bulan_usaha").value = "";
	document.getElementById("status_tempat_usaha").value = "";
	document.getElementById("jumlah_karyawan").value = "";
	document.getElementById("jenis_usaha").value = "";
	document.getElementById("omset_usaha").value = "";
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

	if (pilihSP.value == "Gaji Kerja") {
		document.getElementById("rab").value = "";
		document.getElementById("ki-rab").style.display = "none";
	} else {
		if (document.getElementById("jenis_kredit_pro").value == "Kredit Investasi") {
			document.getElementById("ki-rab").style.display = "block";
			document.getElementById("rab").value = "";
		}
	}

	document.getElementById("omset-usaha").style.display = "none";
	document.getElementById("form-2-usaha-perdagangan").style.display = "none";
	document.getElementById("laba-kotor").style.display = "none";
	document.getElementById("biaya-biaya").style.display = "none";
	document.getElementById("form-2-usaha-manufaktur").style.display = "none";
	document.getElementById("form-2-usaha-pertanian").style.display = "none";
	document.getElementById("utang-piutang").style.display = "none";
	document.getElementById("penghasilan-tambahan").style.display = "none";
	document.getElementById("sarana-prasarana").style.display = "none";	

	// $("#btnNext2").attr("disabled", "disabled");
	// document.getElementById("btnNext2").classList.remove("btn-custom-ad");
	// document.getElementById("btnNext2").classList.add("btn-custom-dis");
}

function setJenisUsaha() {
	if (document.getElementById("jenis_usaha").value == "Perdagangan") {
		document.getElementById("btn-observasi").style.display = "block";
		document.getElementById("observasi-gpm").style.display = "block";
		document.getElementById("omset-usaha").style.display = "block";
		document.getElementById("form-2-usaha-perdagangan").style.display = "block";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "block";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";

	} else if (document.getElementById("jenis_usaha").value == "Jasa") {
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";
		document.getElementById("omset-usaha").style.display = "block";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "block";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "none";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "none";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");

	} else if (document.getElementById("jenis_usaha").value == "Manufaktur") {
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";
		document.getElementById("omset-usaha").style.display = "block";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "block";
		document.getElementById("biaya-biaya").style.display = "block";
		document.getElementById("form-2-usaha-manufaktur").style.display = "block";
		document.getElementById("form-2-usaha-pertanian").style.display = "none";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "none";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");

	} else {
		document.getElementById("btn-observasi").style.display = "none";
		document.getElementById("observasi-gpm").style.display = "none";
		document.getElementById("omset-usaha").style.display = "none";
		document.getElementById("form-2-usaha-perdagangan").style.display = "none";
		document.getElementById("laba-kotor").style.display = "none";
		document.getElementById("biaya-biaya").style.display = "none";
		document.getElementById("form-2-usaha-manufaktur").style.display = "none";
		document.getElementById("form-2-usaha-pertanian").style.display = "block";
		document.getElementById("utang-piutang").style.display = "block";
		document.getElementById("penghasilan-tambahan").style.display = "block";
		document.getElementById("sarana-prasarana").style.display = "block";
		$("#omset_usaha").removeAttr("onchange");
	} 


	document.getElementById("omset_usaha").value = "";
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

	document.getElementById("berkas_rekening_koran").value = "";
	document.getElementById("berkas_kepemilikan_lahan").value = "";
	document.getElementById("berkas_biaya_sewa").value = "";
	document.getElementById("berkas_biaya_rt").value = "";
	document.getElementById("berkas_nota_penjualan").value = "";
	document.getElementById("berkas_tagihan").value = "";
	document.getElementById("berkas_penghasilan_tambahan").value = "";
}

function setTujuanKredit() {
	document.getElementById("jenis-kredit").style.display = "block";

	if (document.getElementById("tujuan_kredit").value == "Produktif") {
		document.getElementById("jenis-kredit-produktif").style.display = "block";
		document.getElementById("jenis-kredit-konsumtif").style.display = "none";
		document.getElementById("jenis_kredit_pro").value = "";
	} else if (document.getElementById("tujuan_kredit").value == "Konsumtif") {
		document.getElementById("jenis-kredit-produktif").style.display = "none";
		document.getElementById("jenis-kredit-konsumtif").style.display = "block";
		document.getElementById("jenis_kredit_kon").value = "";
	}
}

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



// Observasi GPM
function tambahObservasi() {
	$('.table-gpm').show();

	var nama_barang = $("#nama_barang").val();
	var harga_beli = $("#harga_beli").val();
	var harga_jual = $("#harga_jual").val();
	var source = $("#draft_gpm").html();
	var template = Handlebars.compile(source);

	var data = {
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
}

$(document).on("click","#hapus_gpm",function(event){
    $(this).closest(".hapus_list_gpm").remove();
});

// function hapusObservasi() {
// 	$("#hapus_gpm").closest('.hapus_list_gpm').remove();
// }


// Suplier
function tambahSuplier() {
	$('.table-sup').show();

	var nama_suplier = $("#nama_suplier").val();
	var pic_sup = $("#pic_sup").val();
	var lama_hubungan_sup = $("#lama_hubungan_sup").val();
	var pembelian_perbulan_sup = $("#pembelian_perbulan_sup").val();
	var sistem_perbulan_sup = $("#sistem_perbulan_sup").val();
	var source = $("#draft_sup").html();
	var template = Handlebars.compile(source);

	var data = {
		nama_suplier: nama_suplier,
		pic_sup: pic_sup,
		lama_hubungan_sup: lama_hubungan_sup,
		pembelian_perbulan_sup: pembelian_perbulan_sup,
		sistem_perbulan_sup: sistem_perbulan_sup
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
}

$(document).on("click","#hapus_sup",function(event){
    $(this).closest(".hapus_list_sup").remove();
});

// function hapusSuplier() {
// 	$("#hapus_sup").closest('.hapus_list_sup').remove();
// }


// Buyer
function tambahBuyer() {
	$('.table-buy').show();

	var nama_buyer = $("#nama_buyer").val();
	var pic_buy = $("#pic_buy").val();
	var lama_hubungan_buy = $("#lama_hubungan_buy").val();
	var pembelian_perbulan_buy = $("#pembelian_perbulan_buy").val();
	var sistem_perbulan_buy = $("#sistem_perbulan_buy").val();
	var source = $("#draft_buyer").html();
	var template = Handlebars.compile(source);

	var data = {
		nama_buyer: nama_buyer,
		pic_buy: pic_buy,
		lama_hubungan_buy: lama_hubungan_buy,
		pembelian_perbulan_buy: pembelian_perbulan_buy,
		sistem_perbulan_buy: sistem_perbulan_buy
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
}

$(document).on("click","#hapus_buy",function(event){
    $(this).closest(".hapus_list_buy").remove();
});

// function hapusBuyer() {
// 	$("#hapus_buy").closest('.hapus_list_buy').remove();
// }

// Jaminan
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

	var data = {
		index: i_jaminan,
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

	jml_jaminan = jml_jaminan + 1;
	i_jaminan = i_jaminan + 1;
	bkt_jaminan.push(bukti_jaminan);
	cekBtnJaminan();
	$(".berkas-jaminan").remove();
}

$(document).on("click","#hapus_jaminan",function(event){
    $(this).closest(".hapus_list_jaminan").remove();
    jml_jaminan = jml_jaminan - 1;
	var index_arr = document.getElementsByName("index[]");
	var index_arr1 = index_arr.length - 1;
	for (var i = 0; i < jml_jaminan; i++) {
		if (index_arr[i].value > i) {
			bkt_jaminan.splice(i, 1);
			break;
		} else if (index_arr[i].value == index_arr1) {
			bkt_jaminan.splice(i + 1, 1);
		} 
	}

    cekBtnJaminan();
    $(".berkas-jaminan").remove();
});

function cekBtnJaminan() {
	if (jml_jaminan > 0) {
		$("#btnNext4").removeAttr("disabled");
		document.getElementById("btnNext4").classList.remove("btn-custom-dis");
		document.getElementById("btnNext4").classList.add("btn-custom-ad");
	} else {
		$("#btnNext4").attr("disabled", "disabled");
		document.getElementById("btnNext4").classList.remove("btn-custom-ad");
		document.getElementById("btnNext4").classList.add("btn-custom-dis");
		i_jaminan = 0;
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

var harga_jual = document.getElementById("harga_jual");
harga_jual.addEventListener("keyup", function(e){
	harga_jual.value = formatUang(this.value, "Rp ");
});

var harga_jual1 = document.getElementsByClassName("harga-jual");
for (var i = 0; i < harga_jual1.length; i++) {
	(function(i) {
		harga_jual1[i].addEventListener("keyup", function(e){
			harga_jual1.value = formatUangClass(this.value, "Rp " + i);
		})
	})(i);
}

var nilai_jaminan = document.getElementById("nilai_jaminan");
nilai_jaminan.addEventListener("keyup", function(e){
	nilai_jaminan.value = formatUang(this.value, "Rp ");
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



// 
// Validasi Sumber Penghasilan
// 

function setPTGaji() {
	if (!document.getElementById("penghasilan_tambahan_gk").value) {
		document.getElementById("sumber_penghasilan_tambahan_gk").value = "";
	}
}

function setPTSGaji() {
	if (!document.getElementById("sumber_penghasilan_tambahan_gk").value) {
		document.getElementById("penghasilan_tambahan_gk").value = "";
	}
}

function setPTUsaha() {
	if (!document.getElementById("penghasilan_tambahan_hu").value) {
		document.getElementById("sumber_penghasilan_tambahan_hu").value = "";
	}
}

function setPTSUsaha() {
	if (!document.getElementById("sumber_penghasilan_tambahan_hu").value) {
		document.getElementById("penghasilan_tambahan_hu").value = "";
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
// Menampilkan RAB jika Kredit Investasi
// 

function cekProduktif() {
	if (document.getElementById("jenis_kredit_pro").value == "Kredit Investasi" && sp == "Hasil Usaha") {
		document.getElementById("ki-rab").style.display = "block";

		$("#btnFinish").attr("disabled", "disabled");
		document.getElementById("btnFinish").classList.remove("btn-custom-ad");
		document.getElementById("btnFinish").classList.add("btn-custom-dis");
	} else {
		document.getElementById("ki-rab").style.display = "none";
	}
}



// 
// Cek Tahun Pembelian (Data Jaminan)
// 

function cekTahunBeli() {
	if (document.getElementById("tahun_pembelian").value.length < 4) {

		swal({
			title: 'Oops...',
			html: 'Tahun pembelian yang anda masukkan salah <br> Pastikan menggunakan format tahun xxxx'
		}).then(function() {
			swal.close();
			document.getElementById("tahun_pembelian").value = "";
			$("#tahun_pembelian").focus();
		});
	}
	
}



// 
// ENABLE TOMBOL SELANJUTNYA => SUMBER PENGHASILAN
// 

$(document).ready(function(){
	// $(".data-diri").bind("change", check_dataDiri);
});

function check_dataDiri() {
	var nama_depan = $("#nama_depan").val();
	var nama_tengah = $("#nama_tengah").val();
	var nama_belakang = $("#nama_belakang").val();
	var nama_ibu = $("#nama_ibu").val();
	var nik = $("#nik").val();
	var jenis_kelamin = $("input[name=jenis_kelamin]:checked").val();
	var tanggal_lahir = $("#tanggal_lahir").val();
	var status_perkawinan = $("#status_perkawinan").val();
	var jumlah_tanggungan = $("#jumlah_tanggungan").val();
	var alamat_ktp = $("#alamat_ktp").val();
	var alamat_domisili = $("#alamat_domisili").val();
	var no_hp = $("#no_hp").val();
	var status_tempat_tinggal = $("#status_tempat_tinggal").val();
	var lama_tinggal = $("#lama_tinggal").val();
	var pendidikan = $("#pendidikan").val();
	var kd_nama = $("#kd_nama").val();
	var kd_hubungan = $("#kd_hubungan").val();
	var kd_no_telp = $("#kd_no_telp").val();
	var kd_alamat = $("#kd_alamat").val();
	var sumber_penghasilan = $("#sumber_penghasilan").val();

	if (!status_perkawinan) {
		status_perkawinan = "";
	}

	if (!jumlah_tanggungan) {
		jumlah_tanggungan = "";
	}

	if (!status_tempat_tinggal) {
		status_tempat_tinggal = "";
	}

	if (!lama_tinggal) {
		lama_tinggal = "";
	}

	if (!pendidikan) {
		pendidikan = "";
	}

	if (!sumber_penghasilan) {
		sumber_penghasilan = "";
	}

	if (nama_depan != "" && nama_tengah != "" && nama_belakang != "" && nama_ibu != "" && nik != "" 
		&& jenis_kelamin != "" && tanggal_lahir != "" && status_perkawinan != "" && jumlah_tanggungan != "" 
		&& alamat_ktp != "" && alamat_domisili != "" && no_hp != "" && status_tempat_tinggal != "" 
		&& lama_tinggal != "" && pendidikan != "" && kd_nama != "" && kd_hubungan != ""
		&& kd_no_telp != "" && kd_alamat != "" && sumber_penghasilan != "") {
		$("#btnNext1").removeAttr("disabled");
		document.getElementById("btnNext1").classList.remove("btn-custom-dis");
		document.getElementById("btnNext1").classList.add("btn-custom-ad");
	} else {
		$("#btnNext1").attr("disabled", "disabled");
		document.getElementById("btnNext1").classList.remove("btn-custom-ad");
		document.getElementById("btnNext1").classList.add("btn-custom-dis");
	}
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
// ENABLE TOMBOL SELANJUTNYA => PENGAJUAN KREDIT
// 

$(document).ready(function(){
	// $(".sp-all").bind("change", check_sumberPenghasilan);
});

function check_sumberPenghasilan() {
	var nama_perusahaan = $("#nama_perusahaan").val();
	var alamat_perusahaan = $("#alamat_perusahaan").val();
	var no_telp_perusahaan = $("#no_telp_perusahaan").val();
	var website_perusahaan = $("#website_perusahaan").val();

	// Gaji Kerja
	var level_gaji = $("#level_perusahaan_gaji").val();
	var tahun_kerja = $("#tahun_kerja").val();
	var bulan_kerja = $("#bulan_kerja").val();
	var jenis_usaha_gaji = $("#jenis_usaha_gaji").val();
	var status_kepegawaian = $("#status_kepegawaian").val();
	var jabatan = $("#jabatan").val();
	var level_jabatan = $("#level_jabatan").val();
	var gaji_thp = $("#gaji_thp").val();

	// Hasil Usaha
	var level_usaha = $("#level_perusahaan_usaha").val();
	var tahun_usaha = $("#tahun_usaha").val();
	var bulan_usaha = $("#bulan_usaha").val();
	var status_tempat_usaha = $("#status_tempat_usaha").val();
	var jumlah_karyawan = $("#jumlah_karyawan").val();
	var jenis_usaha = $("#jenis_usaha").val();

	var omset_usaha = $("#omset_usaha").val();
	var hpp = $("#hpp").val();
	var laba_kotor_gpm = $("#laba_kotor_gpm").val();
	var laba_kotor = $("#laba_kotor").val();
	var gaji_karyawan = $("#gaji_karyawan").val();
	var biaya_sewa = $("#biaya_sewa").val();
	var biaya_umum = $("#biaya_umum").val();
	var biaya_rumah_tangga = $("#biaya_rumah_tangga").val();
	var persediaan_barang = $("#persediaan_barang").val();
	var harga_komoditi = $("#harga_komoditi").val();
	var hasil_panen = $("#hasil_panen").val();
	var luas_lahan = $("#luas_lahan").val();
	var biaya_pupuk = $("#biaya_pupuk").val();
	var biaya_tk = $("#biaya_tk").val();
	var channel_penjualan = $("#channel_penjualan").val();
	var cara_bayar = $("#cara_bayar").val();
	var piutang_usaha = $("#piutang_usaha").val();
	var utang_usaha = $("#utang_usaha").val();
	var utang_bank = $("#utang_bank").val();
	var sarana_prasarana = $("#sarana_prasarana").val();

	var penghasilan_tambahan_gk = $("#penghasilan_tambahan_gk").val();
	var sumber_penghasilan_tambahan_gk = $("#sumber_penghasilan_tambahan_gk").val();
	var penghasilan_tambahan_hu = $("#penghasilan_tambahan_hu").val();
	var sumber_penghasilan_tambahan_hu = $("#sumber_penghasilan_tambahan_hu").val();

	if (!level_gaji) {
		level_gaji = "";
	}

	if (!level_usaha) {
		level_usaha = "";
	}

	if (!bulan_kerja) {
		bulan_kerja = "";
	}

	if (!jenis_usaha_gaji) {
		jenis_usaha_gaji = "";
	}

	if (!status_kepegawaian) {
		status_kepegawaian = "";
	}

	if (!level_jabatan) {
		level_jabatan = "";
	}

	if (!bulan_usaha) {
		bulan_usaha = "";
	}

	if (!status_tempat_usaha) {
		status_tempat_usaha = "";
	}

	if (!jumlah_karyawan) {
		jumlah_karyawan = "";
	}

	if (!jenis_usaha) {
		jenis_usaha = "";
	}

	if (!channel_penjualan) {
		channel_penjualan = "";
	}

	if (!cara_bayar) {
		cara_bayar = "";
	}

	if (!sumber_penghasilan_tambahan_gk) {
		sumber_penghasilan_tambahan_gk = "";
	}

	if (!sumber_penghasilan_tambahan_hu) {
		sumber_penghasilan_tambahan_hu = "";
	}

	if (sp == "Gaji Kerja") {
		if (nama_perusahaan != "" && level_gaji != "" && alamat_perusahaan != "" && no_telp_perusahaan != "" 
			&& website_perusahaan != "" && tahun_kerja != "" && bulan_kerja != "" && jenis_usaha_gaji != "" 
			&& status_kepegawaian != "" && jabatan != "" && level_jabatan != "" && gaji_thp != "") {

			if (penghasilan_tambahan_gk != "" && sumber_penghasilan_tambahan_gk != "") {

				$("#btnNext2").removeAttr("disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-dis");
				document.getElementById("btnNext2").classList.add("btn-custom-ad");

				pt_gk = true;
			} else if (penghasilan_tambahan_gk == "" && sumber_penghasilan_tambahan_gk == "") {

				$("#btnNext2").removeAttr("disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-dis");
				document.getElementById("btnNext2").classList.add("btn-custom-ad");

				pt_gk = false;
			} else {
				$("#btnNext2").attr("disabled", "disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-ad");
				document.getElementById("btnNext2").classList.add("btn-custom-dis");

				pt_gk = false;
			}

			
		} else {
			$("#btnNext2").attr("disabled", "disabled");
			document.getElementById("btnNext2").classList.remove("btn-custom-ad");
			document.getElementById("btnNext2").classList.add("btn-custom-dis");
		}
		
		
	} else if (sp == "Hasil Usaha") {
		if (jenis_usaha == "Perdagangan") {
			if (nama_perusahaan != "" && level_usaha != "" && alamat_perusahaan != "" && no_telp_perusahaan != "" 
				&& website_perusahaan != "" && tahun_usaha != "" && bulan_usaha != "" && status_tempat_usaha != "" 
				&& jumlah_karyawan != "" && omset_usaha != "" && hpp != "" && laba_kotor_gpm != "" 
				&& gaji_karyawan != "" && biaya_sewa != "" && biaya_umum != "" && biaya_rumah_tangga != "" 
				&& persediaan_barang != "" && piutang_usaha != "" && utang_usaha != "" && utang_bank != "" 
				&& sarana_prasarana != "") {

				if (penghasilan_tambahan_hu != "" && sumber_penghasilan_tambahan_hu != "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = true;
				} else if (penghasilan_tambahan_hu == "" && sumber_penghasilan_tambahan_hu == "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = false;
				} else {
					$("#btnNext2").attr("disabled", "disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-ad");
					document.getElementById("btnNext2").classList.add("btn-custom-dis");

					pt_hu = false;
				}
				
			} else {
				$("#btnNext2").attr("disabled", "disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-ad");
				document.getElementById("btnNext2").classList.add("btn-custom-dis");
			}
		} else if (jenis_usaha == "Jasa") {
			if (nama_perusahaan != "" && level_usaha != "" && alamat_perusahaan != "" && no_telp_perusahaan != "" 
				&& website_perusahaan != "" && tahun_usaha != "" && bulan_usaha != "" && status_tempat_usaha != "" 
				&& jumlah_karyawan != "" && omset_usaha != "" && laba_kotor != "" && gaji_karyawan != "" 
				&& biaya_sewa != "" && biaya_umum != "" && biaya_rumah_tangga != "" && sarana_prasarana != "") {
				
				if (penghasilan_tambahan_hu != "" && sumber_penghasilan_tambahan_hu != "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = true;
				} else if (penghasilan_tambahan_hu == "" && sumber_penghasilan_tambahan_hu == "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = false;
				} else {
					$("#btnNext2").attr("disabled", "disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-ad");
					document.getElementById("btnNext2").classList.add("btn-custom-dis");

					pt_hu = false;
				}

			} else {
				$("#btnNext2").attr("disabled", "disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-ad");
				document.getElementById("btnNext2").classList.add("btn-custom-dis");
			}
		} else if (jenis_usaha == "Manufaktur") {
			if (nama_perusahaan != "" && level_usaha != "" && alamat_perusahaan != "" && no_telp_perusahaan != "" 
				&& website_perusahaan != "" && tahun_usaha != "" && bulan_usaha != "" && status_tempat_usaha != "" 
				&& jumlah_karyawan != "" && omset_usaha != "" && laba_kotor != "" && gaji_karyawan != "" 
				&& biaya_sewa != "" && biaya_umum != "" && biaya_rumah_tangga != "" && persediaan_barang != "" 
				&& piutang_usaha != "" && utang_usaha != "" && utang_bank != "" && sarana_prasarana != "") {

				$("#btnNext2").removeAttr("disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-dis");
				document.getElementById("btnNext2").classList.add("btn-custom-ad");

			} else {
				$("#btnNext2").attr("disabled", "disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-ad");
				document.getElementById("btnNext2").classList.add("btn-custom-dis");
			}
		} else {
			if (nama_perusahaan != "" && level_usaha != "" && alamat_perusahaan != "" && no_telp_perusahaan != "" 
				&& website_perusahaan != "" && tahun_usaha != "" && bulan_usaha != "" && status_tempat_usaha != "" 
				&& jumlah_karyawan != "" && harga_komoditi != "" && hasil_panen != "" && luas_lahan != "" 
				&& biaya_pupuk != "" && biaya_tk != "" && channel_penjualan != "" && cara_bayar != "" 
				&& piutang_usaha != "" && utang_usaha != "" && utang_bank != "" && sarana_prasarana != "") {
				
				if (penghasilan_tambahan_hu != "" && sumber_penghasilan_tambahan_hu != "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = true;
				} else if (penghasilan_tambahan_hu == "" && sumber_penghasilan_tambahan_hu == "") {
					
					$("#btnNext2").removeAttr("disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-dis");
					document.getElementById("btnNext2").classList.add("btn-custom-ad");

					pt_hu = false;
				} else {
					$("#btnNext2").attr("disabled", "disabled");
					document.getElementById("btnNext2").classList.remove("btn-custom-ad");
					document.getElementById("btnNext2").classList.add("btn-custom-dis");

					pt_hu = false;
				}

			} else {
				$("#btnNext2").attr("disabled", "disabled");
				document.getElementById("btnNext2").classList.remove("btn-custom-ad");
				document.getElementById("btnNext2").classList.add("btn-custom-dis");
			}
		}
	}
}  



// 
// ENABLE TOMBOL SELANJUTNYA => DATA JAMINAN
// 

$(document).ready(function(){
	// $(".pengajuan").bind("change", check_pengajuanKredit);
});

function check_pengajuanKredit() {
	var plafon_kredit = $("#plafon_kredit").val();
	var tenor_debitur = $("#tenor_debitur").val();
	var bunga = $("#bunga").val();
	var tujuan_kredit = $("#tujuan_kredit").val();
	var jenis_kredit_pro = $("#jenis_kredit_pro").val();
	var jenis_kredit_kon = $("#jenis_kredit_kon").val();
	var rab = $("#rab").val();

	if (!tenor_debitur) {
		tenor_debitur = "";
	}

	if (!tujuan_kredit) {
		tujuan_kredit = "";
	}

	if (!jenis_kredit_pro) {
		jenis_kredit_pro = "";
	}

	if (!jenis_kredit_kon) {
		jenis_kredit_kon = "";
	}

	if (plafon_kredit != "" && tenor_debitur != "" && bunga != "" && jenis_kredit_pro != "" && tujuan_kredit == "Produktif") {

		if (sp == "Hasil Usaha") {
			if (jenis_kredit_pro == "Kredit Investasi" && rab != "") {
				$("#btnNext3").removeAttr("disabled");
				document.getElementById("btnNext3").classList.remove("btn-custom-dis");
				document.getElementById("btnNext3").classList.add("btn-custom-ad");
			} else if (jenis_kredit_pro != "Kredit Investasi") {
				$("#btnNext3").removeAttr("disabled");
				document.getElementById("btnNext3").classList.remove("btn-custom-dis");
				document.getElementById("btnNext3").classList.add("btn-custom-ad");
			}
		} else if (sp == "Gaji Kerja") {
			$("#btnNext3").removeAttr("disabled");
			document.getElementById("btnNext3").classList.remove("btn-custom-dis");
			document.getElementById("btnNext3").classList.add("btn-custom-ad");
		} else {
			$("#btnNext3").attr("disabled", "disabled");
			document.getElementById("btnNext3").classList.remove("btn-custom-ad");
			document.getElementById("btnNext3").classList.add("btn-custom-dis");
		}

	} else if (plafon_kredit != "" && tenor_debitur != "" && bunga != "" && jenis_kredit_kon != "" && tujuan_kredit == "Konsumtif") {
		$("#btnNext3").removeAttr("disabled");
		document.getElementById("btnNext3").classList.remove("btn-custom-dis");
		document.getElementById("btnNext3").classList.add("btn-custom-ad");
	} else {
		$("#btnNext3").attr("disabled", "disabled");
		document.getElementById("btnNext3").classList.remove("btn-custom-ad");
		document.getElementById("btnNext3").classList.add("btn-custom-dis");
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
