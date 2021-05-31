
// 
// DATA DIRI
// 

$("#cek_ktp").on("click", function() {
	if (document.getElementById("cek_ktp").checked == true) {
		$("#berkas_ktp").removeAttr("disabled");
		$("#berkas_ktp").attr("required", "");
		$("#sup_ktp").removeClass("d-none");
		$("#sup_ktp").show();    
	} else {
		$("#sup_ktp").hide();
		$("#berkas_ktp").attr("disabled", "disabled");
		document.getElementById("berkas_ktp").value = "";
		$(".label-ktp").html("");
		$("#berkas_ktp").removeAttr("required");
		$("#dv_ktp").hide();
	}
});


$("#cek_akta_kelahiran").on("click", function() {
	if (document.getElementById("cek_akta_kelahiran").checked == true) {
		$("#berkas_akta_kelahiran").removeAttr("disabled");
		$("#berkas_akta_kelahiran").attr("required", "");
		$("#sup_akta_kelahiran").removeClass("d-none");
		$("#sup_akta_kelahiran").show();
	} else {
		$("#sup_akta_kelahiran").hide();
		$("#berkas_akta_kelahiran").attr("disabled", "disabled");
		document.getElementById("berkas_akta_kelahiran").value = "";
		$(".label-akta-kelahiran").html("");
		$("#berkas_akta_kelahiran").removeAttr("required");
		$("#dv_lahir").hide();
	}
});


$("#cek_akta_nikah").on("click", function() {
	if (document.getElementById("cek_akta_nikah").checked == true) {
		$("#berkas_akta_nikah").removeAttr("disabled");
		$("#berkas_akta_nikah").attr("required", "");
		$("#sup_akta_nikah").removeClass("d-none");
		$("#sup_akta_nikah").show();
	} else {
		$("#sup_akta_nikah").hide();
		$("#berkas_akta_nikah").attr("disabled", "disabled");
		document.getElementById("berkas_akta_nikah").value = "";
		$(".label-akta-nikah").html("");
		$("#berkas_akta_nikah").removeAttr("required");
		$("#dv_nikah").hide();
	}
});


$("#cek_kk").on("click", function() {
	if (document.getElementById("cek_kk").checked == true) {
		$("#berkas_kk").removeAttr("disabled");
		$("#berkas_kk").attr("required", "");
		$("#sup_kk").removeClass("d-none");
		$("#sup_kk").show();
	} else {
		$("#sup_kk").hide();
		$("#berkas_kk").attr("disabled", "disabled");
		document.getElementById("berkas_kk").value = "";
		$(".label-kk").html("");
		$("#berkas_kk").removeAttr("required");
		$("#dv_kk").hide();
	}
});


$("#cek_ijazah").on("click", function() {
	if (document.getElementById("cek_ijazah").checked == true) {
		$("#berkas_ijazah").removeAttr("disabled");
		$("#berkas_ijazah").attr("required", "");
		$("#sup_ijazah").removeClass("d-none");
		$("#sup_ijazah").show();
	} else {
		$("#sup_ijazah").hide();
		$("#berkas_ijazah").attr("disabled", "disabled");
		document.getElementById("berkas_ijazah").value = "";
		$(".label-ijazah").html("");
		$("#berkas_ijazah").removeAttr("required");
		$("#dv_ijazah").hide();
	}
});



// 
// SUMBER PENGHASILAN GAJI KERJA
// 

$("#cek_slip_gaji").on("click", function() {
	if (document.getElementById("cek_slip_gaji").checked == true) {
		$("#berkas_slip_gaji").removeAttr("disabled");
		$("#berkas_slip_gaji").attr("required", "");
		$("#sup_slip_gaji").removeClass("d-none");
		$("#sup_slip_gaji").show();
	} else {
		$("#sup_slip_gaji").hide();
		$("#berkas_slip_gaji").attr("disabled", "disabled");
		document.getElementById("berkas_slip_gaji").value = "";
		$(".label-slip-gaji").html("");
		$("#berkas_slip_gaji").removeAttr("required");
		$("#dv_gaji").hide();
	}
});


$("#cek_penghasilan_tambahan_gaji").on("click", function() {
	if (document.getElementById("cek_penghasilan_tambahan_gaji").checked == true) {
		$("#berkas_penghasilan_tambahan_gaji").removeAttr("disabled");
		$("#berkas_penghasilan_tambahan_gaji").attr("required", "");
		$("#sup_penghasilan_tambahan_gaji").removeClass("d-none");
		$("#sup_penghasilan_tambahan_gaji").show();
	} else {
		$("#sup_penghasilan_tambahan_gaji").hide();
		$("#berkas_penghasilan_tambahan_gaji").attr("disabled", "disabled");
		document.getElementById("berkas_penghasilan_tambahan_gaji").value = "";
		$(".label-penghasilan-tambahan-gaji").html("");
		$("#berkas_penghasilan_tambahan_gaji").removeAttr("required");
		$("#dv_ptg").hide();
	}
});



// 
// SUMBER PENGHASILAN HASIL USAHA
// 

$("#cek_siup").on("click", function() {
	if (document.getElementById("cek_siup").checked == true) {
		$("#berkas_siup").removeAttr("disabled");
		$("#berkas_siup").attr("required", "");
		$("#sup_siup").removeClass("d-none");
		$("#sup_siup").show();
	} else {
		$("#sup_siup").hide();
		$("#berkas_siup").attr("disabled", "disabled");
		document.getElementById("berkas_siup").value = "";
		$(".label-siup").html("");
		$("#berkas_siup").removeAttr("required");
		$("#dv_siup").hide();
	}
});


$("#cek_ho").on("click", function() {
	if (document.getElementById("cek_ho").checked == true) {
		$("#berkas_ho").removeAttr("disabled");
		$("#berkas_ho").attr("required", "");
		$("#sup_ho").removeClass("d-none");
		$("#sup_ho").show();
	} else {
		$("#sup_ho").hide();
		$("#berkas_ho").attr("disabled", "disabled");
		document.getElementById("berkas_ho").value = "";
		$(".label-ho").html("");
		$("#berkas_ho").removeAttr("required");
		$("#dv_ho").hide();
	}
});


$("#cek_npwp").on("click", function() {
	if (document.getElementById("cek_npwp").checked == true) {
		$("#berkas_npwp").removeAttr("disabled");
		$("#berkas_npwp").attr("required", "");
		$("#sup_npwp").removeClass("d-none");
		$("#sup_npwp").show();
	} else {
		$("#sup_npwp").hide();
		$("#berkas_npwp").attr("disabled", "disabled");
		document.getElementById("berkas_npwp").value = "";
		$(".label-npwp").html("");
		$("#berkas_npwp").removeAttr("required");
		$("#dv_npwp").hide();
	}
});


$("#cek_akta_pendirian").on("click", function() {
	if (document.getElementById("cek_akta_pendirian").checked == true) {
		$("#berkas_akta_pendirian").removeAttr("disabled");
		$("#berkas_akta_pendirian").attr("required", "");
		$("#sup_akta_pendirian").removeClass("d-none");
		$("#sup_akta_pendirian").show();
	} else {
		$("#sup_akta_pendirian").hide();
		$("#berkas_akta_pendirian").attr("disabled", "disabled");
		document.getElementById("berkas_akta_pendirian").value = "";
		$(".label-akta-pendirian").html("");
		$("#berkas_akta_pendirian").removeAttr("required");
		$("#dv_pendirian").hide();
	}
});


$("#cek_lap_keuangan").on("click", function() {
	if (document.getElementById("cek_lap_keuangan").checked == true) {
		$("#berkas_lap_keuangan").removeAttr("disabled");
		$("#berkas_lap_keuangan").attr("required", "");
		$("#sup_lap_keuangan").removeClass("d-none");
		$("#sup_lap_keuangan").show();
	} else {
		$("#sup_lap_keuangan").hide();
		$("#berkas_lap_keuangan").attr("disabled", "disabled");
		document.getElementById("berkas_lap_keuangan").value = "";
		$(".label-lap-keuangan").html("");
		$("#berkas_lap_keuangan").removeAttr("required");
		$("#dv_lap_keu").hide();
	}
});


$("#cek_rekening_koran").on("click", function() {
	if (document.getElementById("cek_rekening_koran").checked == true) {
		$("#berkas_rekening_koran").removeAttr("disabled");
		$("#berkas_rekening_koran").attr("required", "");
		$("#sup_rekening_koran").removeClass("d-none");
		$("#sup_rekening_koran").show();
	} else {
		$("#sup_rekening_koran").hide();
		$("#berkas_rekening_koran").attr("disabled", "disabled");
		document.getElementById("berkas_rekening_koran").value = "";
		$(".label-rekening-koran").html("");
		$("#berkas_rekening_koran").removeAttr("required");
		$("#dv_rek_koran").hide();
	}
});


$("#cek_kepemilikan_lahan").on("click", function() {
	if (document.getElementById("cek_kepemilikan_lahan").checked == true) {
		$("#berkas_kepemilikan_lahan").removeAttr("disabled");
		$("#berkas_kepemilikan_lahan").attr("required", "");
		$("#sup_kepemilikan_lahan").removeClass("d-none");
		$("#sup_kepemilikan_lahan").show();
	} else {
		$("#sup_kepemilikan_lahan").hide();
		$("#berkas_kepemilikan_lahan").attr("disabled", "disabled");
		document.getElementById("berkas_kepemilikan_lahan").value = "";
		$(".label-kepemilikan-lahan").html("");
		$("#berkas_kepemilikan_lahan").removeAttr("required");
		$("#dv_lahan").hide();
	}
});


$("#cek_biaya_sewa").on("click", function() {
	if (document.getElementById("cek_biaya_sewa").checked == true) {
		$("#berkas_biaya_sewa").removeAttr("disabled");
		$("#berkas_biaya_sewa").attr("required", "");
		$("#sup_biaya_sewa").removeClass("d-none");
		$("#sup_biaya_sewa").show();
	} else {
		$("#sup_biaya_sewa").hide();
		$("#berkas_biaya_sewa").attr("disabled", "disabled");
		document.getElementById("berkas_biaya_sewa").value = "";
		$(".label-biaya-sewa").html("");
		$("#berkas_biaya_sewa").removeAttr("required");
		$("#dv_sewa").hide();
	}
});


$("#cek_biaya_rt").on("click", function() {
	if (document.getElementById("cek_biaya_rt").checked == true) {
		$("#berkas_biaya_rt").removeAttr("disabled");
		$("#berkas_biaya_rt").attr("required", "");
		$("#sup_biaya_rt").removeClass("d-none");
		$("#sup_biaya_rt").show();
	} else {
		$("#sup_biaya_rt").hide();
		$("#berkas_biaya_rt").attr("disabled", "disabled");
		document.getElementById("berkas_biaya_rt").value = "";
		$(".label-biaya-rt").html("");
		$("#berkas_biaya_rt").removeAttr("required");
		$("#dv_rt").hide();
	}
});


$("#cek_nota_penjualan").on("click", function() {
	if (document.getElementById("cek_nota_penjualan").checked == true) {
		$("#berkas_nota_penjualan").removeAttr("disabled");
		$("#berkas_nota_penjualan").attr("required", "");
		$("#sup_nota_penjualan").removeClass("d-none");
		$("#sup_nota_penjualan").show();
	} else {
		$("#sup_nota_penjualan").hide();
		$("#berkas_nota_penjualan").attr("disabled", "disabled");
		document.getElementById("berkas_nota_penjualan").value = "";
		$(".label-nota-penjualan").html("");
		$("#berkas_nota_penjualan").removeAttr("required");
		$("#dv_nota").hide();
	}
});


$("#cek_tagihan").on("click", function() {
	if (document.getElementById("cek_tagihan").checked == true) {
		$("#berkas_tagihan").removeAttr("disabled");
		$("#berkas_tagihan").attr("required", "");
		$("#sup_tagihan").removeClass("d-none");
		$("#sup_tagihan").show();
	} else {
		$("#sup_tagihan").hide();
		$("#berkas_tagihan").attr("disabled", "disabled");
		document.getElementById("berkas_tagihan").value = "";
		$(".label-tagihan").html("");
		$("#berkas_tagihan").removeAttr("required");
		$("#dv_tagihan").hide();
	}
});


$("#cek_penghasilan_tambahan").on("click", function() {
	if (document.getElementById("cek_penghasilan_tambahan").checked == true) {
		$("#berkas_penghasilan_tambahan").removeAttr("disabled");
		$("#berkas_penghasilan_tambahan").attr("required", "");
		$("#sup_penghasilan_tambahan").removeClass("d-none");
		$("#sup_penghasilan_tambahan").show();
	} else {
		$("#sup_penghasilan_tambahan").hide();
		$("#berkas_penghasilan_tambahan").attr("disabled", "disabled");
		document.getElementById("berkas_penghasilan_tambahan").value = "";
		$(".label-penghasilan-tambahan").html("");
		$("#berkas_penghasilan_tambahan").removeAttr("required");
		$("#dv_pth").hide();
	}
});



// 
// PENGAJUAN KREDIT
// 

$("#cek_rab").on("click", function() {
	if (document.getElementById("cek_rab").checked == true) {
		$("#berkas_rab").removeAttr("disabled");
		$("#berkas_rab").attr("required", "");
		$("#sup_rab").removeClass("d-none");
		$("#sup_rab").show();
	} else {
		$("#sup_rab").hide();
		$("#berkas_rab").attr("disabled", "disabled");
		document.getElementById("berkas_rab").value = "";
		$(".label-rab").html("");
		$("#berkas_rab").removeAttr("required");
		$("#dv_rab").hide();
	}
});



// 
// DATA JAMINAN
// 
$(document).on("click",".cek-berkas-kepemilikan-jaminan",function(event){
	var id_input = $(this).closest(".berkas-jaminan").find('input[type="file"]').attr('id'),
	split       = id_input.split('berkas_kepemilikan_jaminan_'),
	index        = split[1];
	var cek_jaminan = "cek_kepemilikan_jaminan_" + index;
	var berkas_jaminan = "#berkas_kepemilikan_jaminan_" + index;
	var berkas_jaminan_input = "berkas_kepemilikan_jaminan_" + index;
	var label = ".label-kepemilikan-jaminan-" + index;
	var sup_jaminan = "#sup_kepemilikan_jaminan_" + index;

	if (document.getElementById(cek_jaminan).checked == true) {
		$(berkas_jaminan).removeAttr("disabled");
		$(berkas_jaminan).attr("required", "");
		$(sup_jaminan).removeClass("d-none");
		$(sup_jaminan).show();
	} else {
		$(sup_jaminan).hide();
		$(berkas_jaminan).attr("disabled", "disabled");
		document.getElementById(berkas_jaminan_input).value = "";
		$(label).html("");
		$(berkas_jaminan).removeAttr("required");
	}
});



// 
// ENABLE BUTTON SIMPAN
//

function enabledSimpan() {
 	$("#simpan_berkas").removeAttr("disabled");
	document.getElementById("simpan_berkas").classList.remove("btn-custom-dis");
	document.getElementById("simpan_berkas").classList.add("btn-custom-ad");
}

function disabledSimpan() {
 	$("#simpan_berkas").attr("disabled", "disabled");
	document.getElementById("simpan_berkas").classList.remove("btn-custom-ad");
	document.getElementById("simpan_berkas").classList.add("btn-custom-dis");
}