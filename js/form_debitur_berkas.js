var valid = '';
var error_msg = "";

// DATA DIRI
$(".berkas-ktp").on("change", function() {
	var display_error = document.getElementById('file_error_ktp');
	cekFile(document.getElementById("berkas_ktp"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-ktp").addClass("selected").html(fileName);
		document.getElementById("file_error_ktp").style.display = "none";
		document.getElementById("invalid_ktp").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_ktp").value = "";
		$(this).siblings(".label-ktp").addClass("selected").html("");
		document.getElementById("file_error_ktp").style.display = "block";
        document.getElementById("invalid_ktp").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-akta-kelahiran").on("change", function() {
	var display_error = document.getElementById('file_error_akta_kelahiran');
	cekFile(document.getElementById("berkas_akta_kelahiran"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-akta-kelahiran").addClass("selected").html(fileName);
		document.getElementById("file_error_akta_kelahiran").style.display = "none";
		document.getElementById("invalid_akta_kelahiran").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_akta_kelahiran").value = "";
		$(this).siblings(".label-akta-kelahiran").addClass("selected").html("");
		document.getElementById("file_error_akta_kelahiran").style.display = "block";
        document.getElementById("invalid_akta_kelahiran").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-akta-nikah").on("change", function() {
	var display_error = document.getElementById('file_error_akta_nikah');
	cekFile(document.getElementById("berkas_akta_nikah"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-akta-nikah").addClass("selected").html(fileName);
		document.getElementById("file_error_akta_nikah").style.display = "none";
		document.getElementById("invalid_akta_nikah").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_akta_nikah").value = "";
		$(this).siblings(".label-akta-nikah").addClass("selected").html("");
		document.getElementById("file_error_akta_nikah").style.display = "block";
        document.getElementById("invalid_akta_nikah").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-kk").on("change", function() {
	var display_error = document.getElementById('file_error_kk');
	cekFile(document.getElementById("berkas_kk"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-kk").addClass("selected").html(fileName);
		document.getElementById("file_error_kk").style.display = "none";
		document.getElementById("invalid_kk").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_kk").value = "";
		$(this).siblings(".label-kk").addClass("selected").html("");
		document.getElementById("file_error_kk").style.display = "block";
        document.getElementById("invalid_kk").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-ijazah").on("change", function() {
	var display_error = document.getElementById('file_error_ijazah');
	cekFile(document.getElementById("berkas_ijazah"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-ijazah").addClass("selected").html(fileName);
		document.getElementById("file_error_ijazah").style.display = "none";
		document.getElementById("invalid_ijazah").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_ijazah").value = "";
		$(this).siblings(".label-ijazah").addClass("selected").html("");
		document.getElementById("file_error_ijazah").style.display = "block";
        document.getElementById("invalid_ijazah").style.margin = "-5px 0 0 0";
        return false;
	}
});



// SUMBER PENGHASILAN GAJI KERJA
$(".berkas-slip-gaji").on("change", function() {
	var display_error = document.getElementById('file_error_slip_gaji');
	cekFile(document.getElementById("berkas_slip_gaji"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-slip-gaji").addClass("selected").html(fileName);
		document.getElementById("file_error_slip_gaji").style.display = "none";
		document.getElementById("invalid_slip_gaji").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_slip_gaji").value = "";
		$(this).siblings(".label-slip-gaji").addClass("selected").html("");
		document.getElementById("file_error_slip_gaji").style.display = "block";
        document.getElementById("invalid_slip_gaji").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-penghasilan-tambahan-gaji").on("change", function() {
	var display_error = document.getElementById('file_error_penghasilan_tambahan_gaji');
	cekFile(document.getElementById("berkas_penghasilan_tambahan_gaji"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-penghasilan-tambahan-gaji").addClass("selected").html(fileName);
		document.getElementById("file_error_penghasilan_tambahan_gaji").style.display = "none";
		document.getElementById("invalid_penghasilan_tambahan_gaji").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_penghasilan_tambahan_gaji").value = "";
		$(this).siblings(".label-penghasilan-tambahan-gaji").addClass("selected").html("");
		document.getElementById("file_error_penghasilan_tambahan_gaji").style.display = "block";
        document.getElementById("invalid_penghasilan_tambahan_gaji").style.margin = "-5px 0 0 0";
        return false;
	}
});



// SUMBER PENGHASILAN HASIL USAHA
$(".berkas-siup").on("change", function() {
	var display_error = document.getElementById('file_error_siup');
	cekFile(document.getElementById("berkas_siup"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-siup").addClass("selected").html(fileName);
		document.getElementById("file_error_siup").style.display = "none";
		document.getElementById("invalid_siup").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_siup").value = "";
		$(this).siblings(".label-siup").addClass("selected").html("");
		document.getElementById("file_error_siup").style.display = "block";
        document.getElementById("invalid_siup").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-ho").on("change", function() {
	var display_error = document.getElementById('file_error_ho');
	cekFile(document.getElementById("berkas_ho"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-ho").addClass("selected").html(fileName);
		document.getElementById("file_error_ho").style.display = "none";
		document.getElementById("invalid_ho").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_ho").value = "";
		$(this).siblings(".label-ho").addClass("selected").html("");
		document.getElementById("file_error_ho").style.display = "block";
        document.getElementById("invalid_ho").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-npwp").on("change", function() {
	var display_error = document.getElementById('file_error_npwp');
	cekFile(document.getElementById("berkas_npwp"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-npwp").addClass("selected").html(fileName);
		document.getElementById("file_error_npwp").style.display = "none";
		document.getElementById("invalid_npwp").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_npwp").value = "";
		$(this).siblings(".label-npwp").addClass("selected").html("");
		document.getElementById("file_error_npwp").style.display = "block";
        document.getElementById("invalid_npwp").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-akta-pendirian").on("change", function() {
	var display_error = document.getElementById('file_error_akta_pendirian');
	cekFile(document.getElementById("berkas_akta_pendirian"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-akta-pendirian").addClass("selected").html(fileName);
		document.getElementById("file_error_akta_pendirian").style.display = "none";
		document.getElementById("invalid_akta_pendirian").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_akta_pendirian").value = "";
		$(this).siblings(".label-akta-pendirian").addClass("selected").html("");
		document.getElementById("file_error_akta_pendirian").style.display = "block";
        document.getElementById("invalid_akta_pendirian").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-lap-keuangan").on("change", function() {
	var display_error = document.getElementById('file_error_lap_keuangan');
	cekFile(document.getElementById("berkas_lap_keuangan"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-lap-keuangan").addClass("selected").html(fileName);
		document.getElementById("file_error_lap_keuangan").style.display = "none";
		document.getElementById("invalid_lap_keuangan").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_lap_keuangan").value = "";
		$(this).siblings(".label-lap-keuangan").addClass("selected").html("");
		document.getElementById("file_error_lap_keuangan").style.display = "block";
        document.getElementById("invalid_lap_keuangan").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-rekening-koran").on("change", function() {
	var display_error = document.getElementById('file_error_rekening_koran');
	cekFile(document.getElementById("berkas_rekening_koran"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-rekening-koran").addClass("selected").html(fileName);
		document.getElementById("file_error_rekening_koran").style.display = "none";
		document.getElementById("invalid_rekening_koran").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_rekening_koran").value = "";
		$(this).siblings(".label-rekening-koran").addClass("selected").html("");
		document.getElementById("file_error_rekening_koran").style.display = "block";
        document.getElementById("invalid_rekening_koran").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-kepemilikan-lahan").on("change", function() {
	var display_error = document.getElementById('file_error_kepemilikan_lahan');
	cekFile(document.getElementById("berkas_kepemilikan_lahan"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-kepemilikan-lahan").addClass("selected").html(fileName);
		document.getElementById("file_error_kepemilikan_lahan").style.display = "none";
		document.getElementById("invalid_kepemilikan_lahan").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_kepemilikan_lahan").value = "";
		$(this).siblings(".label-kepemilikan-lahan").addClass("selected").html("");
		document.getElementById("file_error_kepemilikan_lahan").style.display = "block";
        document.getElementById("invalid_kepemilikan_lahan").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-biaya-sewa").on("change", function() {
	var display_error = document.getElementById('file_error_biaya_sewa');
	cekFile(document.getElementById("berkas_biaya_sewa"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-biaya-sewa").addClass("selected").html(fileName);
		document.getElementById("file_error_biaya_sewa").style.display = "none";
		document.getElementById("invalid_biaya_sewa").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_biaya_sewa").value = "";
		$(this).siblings(".label-biaya-sewa").addClass("selected").html("");
		document.getElementById("file_error_biaya_sewa").style.display = "block";
        document.getElementById("invalid_biaya_sewa").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-biaya-rt").on("change", function() {
	var display_error = document.getElementById('file_error_biaya_rt');
	cekFile(document.getElementById("berkas_biaya_rt"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-biaya-rt").addClass("selected").html(fileName);
		document.getElementById("file_error_biaya_rt").style.display = "none";
		document.getElementById("invalid_biaya_rt").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_biaya_rt").value = "";
		$(this).siblings(".label-biaya-rt").addClass("selected").html("");
		document.getElementById("file_error_biaya_rt").style.display = "block";
        document.getElementById("invalid_biaya_rt").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-nota-penjualan").on("change", function() {
	var display_error = document.getElementById('file_error_nota_penjualan');
	cekFile(document.getElementById("berkas_nota_penjualan"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-nota-penjualan").addClass("selected").html(fileName);
		document.getElementById("file_error_nota_penjualan").style.display = "none";
		document.getElementById("invalid_nota_penjualan").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_nota_penjualan").value = "";
		$(this).siblings(".label-nota-penjualan").addClass("selected").html("");
		document.getElementById("file_error_nota_penjualan").style.display = "block";
        document.getElementById("invalid_nota_penjualan").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-tagihan").on("change", function() {
	var display_error = document.getElementById('file_error_tagihan');
	cekFile(document.getElementById("berkas_tagihan"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-tagihan").addClass("selected").html(fileName);
		document.getElementById("file_error_tagihan").style.display = "none";
		document.getElementById("invalid_tagihan").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_tagihan").value = "";
		$(this).siblings(".label-tagihan").addClass("selected").html("");
		document.getElementById("file_error_tagihan").style.display = "block";
        document.getElementById("invalid_tagihan").style.margin = "-5px 0 0 0";
        return false;
	}
});

$(".berkas-penghasilan-tambahan").on("change", function() {
	var display_error = document.getElementById('file_error_penghasilan_tambahan');
	cekFile(document.getElementById("berkas_penghasilan_tambahan"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-penghasilan-tambahan").addClass("selected").html(fileName);
		document.getElementById("file_error_penghasilan_tambahan").style.display = "none";
		document.getElementById("invalid_penghasilan_tambahan").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_penghasilan_tambahan").value = "";
		$(this).siblings(".label-penghasilan-tambahan").addClass("selected").html("");
		document.getElementById("file_error_penghasilan_tambahan").style.display = "block";
        document.getElementById("invalid_penghasilan_tambahan").style.margin = "-5px 0 0 0";
        return false;
	}
});



// Pengajuan Kredit
$(".berkas-rab").on("change", function() {
	var display_error = document.getElementById('file_error_rab');
	cekFile(document.getElementById("berkas_rab"));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(".label-rab").addClass("selected").html(fileName);
		document.getElementById("file_error_rab").style.display = "none";
		document.getElementById("invalid_rab").style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById("berkas_rab").value = "";
		$(this).siblings(".label-rab").addClass("selected").html("");
		document.getElementById("file_error_rab").style.display = "block";
        document.getElementById("invalid_rab").style.margin = "-5px 0 0 0";
        return false;
	}
});



// Data Jaminan
$(document).on("change",".berkas-kepemilikan-jaminan",function(event){
	var id_input = $(this).closest(".berkas-jaminan").find('input[type="file"]').attr('id'),
	split       = id_input.split('berkas_kepemilikan_jaminan_'),
	index        = split[1];

	var id_validation = $(this).closest(".berkas-jaminan").find('.invalid-feedback-custom').attr('id');
	var id_validation_null = $(this).closest(".berkas-jaminan").find('.invalid-feedback').attr('id');
	var label = ".label-kepemilikan-jaminan-" + index;

	var display_error = document.getElementById(id_validation_null);
	cekFile(document.getElementById(id_input));
	if (valid == true) {
		var fileName = $(this).val().split("\\").pop();
		$(this).siblings(label).addClass("selected").html(fileName);
		document.getElementById(id_validation_null).style.display = "none";
		document.getElementById(id_validation).style.margin = "-10px 0 0 0";
		return true;
	} else {
		display_error.innerHTML = error_msg;
		document.getElementById(id_input).value = "";
		$(this).siblings(label).addClass("selected").html("");
		document.getElementById(id_validation_null).style.display = "block";
        document.getElementById(id_validation).style.margin = "-5px 0 0 0";
        return false;
	}
});



function cekFile(file) {
    var file_name = "";
    var file_type = "";
    var file_size = "";
    var valid_size = 5*1024*1024;

    if (file.files.length != 0) {
        file_name = file.files[0].name;
        file_size = file.files[0].size;
        file_type = file.files[0].type;
         
        if (file_type != "application/pdf" && file_type != "image/jpeg") {
            valid = false;
            error_msg = "Hanya mendukung tipe file 'PDF' dan 'JPG/JPEG'"; 
        } else {
        	if (file_size > valid_size) {
	            valid = false;
	            error_msg = "Ukuran file lebih dari 5MB.";
	        } else {
	        	valid = true; 
	        }
        }	
    }
 
}
