function isNumber(evt) {
	var iKeyCode = (evt.which) ? evt.which : evt.keyCode;
	if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57)){
		return false;
	}

	return true;
}  

function cekNik() {
	if (document.getElementById("nik").value.length < 16) {
		swal({
			title: 'Oops...',
			text: 'NIK anda kurang dari 16 karakter'
		}).then(function() {
	        swal.close();
	        $("#nik").focus();
		});
	}
}

$(".datepicker_v5").datepicker({
	uiLibrary: "bootstrap4",
	format: "mm/dd/yyyy",
	startDate: "-72y",
	endDate: "-17y"
});

var plafon = document.getElementById("plafon");
plafon.addEventListener("keyup", function(e){
	plafon.value = formatUang(this.value, "Rp ");
});

var penghasilan = document.getElementById("penghasilan");
penghasilan.addEventListener("keyup", function(e){
	penghasilan.value = formatUang(this.value, "Rp ");
});

var nilai_jaminan = document.getElementById("nilai_jaminan");
nilai_jaminan.addEventListener("keyup", function(e){
	nilai_jaminan.value = formatUang(this.value, "Rp ");
});

var kikmk = document.getElementById("kikmk");
kikmk.addEventListener("keyup", function(e){
	kikmk.value = formatUang(this.value, "Rp ");
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

// Menambahkan titik untuk ribuan
function thousands_separators(num) {
	var num_parts = num.toString().split(".");
	num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
	return num_parts.join(",");
}

function cekPenghasilan() {
	var cek = document.getElementById("penghasilan").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	penghasilan = nominal.replace(/[.]+/g, '');

	if (penghasilan < 280000) {
		swal({
			title: 'Oops...',
			text: 'Minimal penghasilan sebesar Rp 280,000'
		}).then(function() {
			swal.close();
			$("#penghasilan").focus();
		});
		document.getElementById("penghasilan").value = '';
	} else if (penghasilan > 200000000) {
		swal({
			title: 'Oops...',
			text: 'Maksimal penghasilan sebesar Rp 200,000,000'
		}).then(function() {
			swal.close();
			$("#penghasilan").focus();
		});
		document.getElementById("penghasilan").value = '';
	}
}

function hitungAngsuran() {
	var cek = document.getElementById("plafon").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	plafon = nominal.replace(/[.]+/g, '');

	if (plafon < 2000000) {
		swal({
			title: 'Oops...',
			text: 'Minimal plafon sebesar Rp 2,000,000'
		}).then(function() {
			swal.close();
			$("#plafon").focus();
		});
		document.getElementById("plafon").value = '';
	} else if (plafon > 4650000000) {
		swal({
			title: 'Oops...',
			text: 'Maksimal plafon sebesar Rp 4,650,000,000'
		}).then(function() {
			swal.close();
			$("#plafon").focus();
		});
		document.getElementById("plafon").value = '';
	} else {
		// Hitung angsuran => plafon / tenor
		var hasil_angsuran = parseInt(plafon) / parseInt(document.getElementById("tenor").value);
		var tampil_angsuran = thousands_separators(hasil_angsuran.toFixed(2));

		// Untuk memberikan nilai blank pada angsuran saat hasil_angsuran bernilai NaN
		if (isNaN(hasil_angsuran)) {
			document.getElementById("angsuran").value = '';
		} else {
			document.getElementById("angsuran").value = uang + ' ' + tampil_angsuran;
		}
	}
}

function cekBunga() {
	if (document.getElementById("bunga").value < 7) {
		swal({
			title: 'Oops...',
			text: 'Minimal bunga 7%'
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
	}
}

function cekNilaiJaminan() {
	var cek = document.getElementById("nilai_jaminan").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	nilai_jaminan = nominal.replace(/[.]+/g, '');

	if (nilai_jaminan > 5421000000) {
		swal({
			title: 'Oops...',
			text: 'Maksimal nilai jaminan sebesar Rp 5,421,000,000'
		}).then(function() {
			swal.close();
			$("#nilai_jaminan").focus();
		});
		document.getElementById("nilai_jaminan").value = '';
	}
}



// 
// CREDIT PREDIKTIF
// 

$(".datepicker_kredit").datepicker({
	uiLibrary: "bootstrap4",
	format: "mm/dd/yyyy",
	startDate: "-79y",
	endDate: "-17y"
});

function cekPenghasilanKredit() {
	var cek = document.getElementById("penghasilan").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	penghasilan = nominal.replace(/[.]+/g, '');

	if (penghasilan < 2300000) {
		swal({
			title: 'Oops...',
			text: 'Minimal penghasilan sebesar Rp 2,300,000'
		}).then(function() {
			swal.close();
			$("#penghasilan").focus();
		});
		document.getElementById("penghasilan").value = '';
	} else if (penghasilan > 1912082979.9898245) {
		swal({
			title: 'Oops...',
			text: 'Maksimal penghasilan sebesar Rp 1,912,082,979.9898245'
		}).then(function() {
			swal.close();
			$("#penghasilan").focus();
		});
		document.getElementById("penghasilan").value = '';
	}
}

function hitungAngsuranKredit() {
	var cek = document.getElementById("plafon").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	plafon = nominal.replace(/[.]+/g, '');

	if (plafon < 20000000) {
		swal({
			title: 'Oops...',
			text: 'Minimal plafon sebesar Rp 20,000,000'
		}).then(function() {
			swal.close();
			$("#plafon").focus();
		});
		document.getElementById("plafon").value = '';
	} else if (plafon > 4416061209.351464) {
		swal({
			title: 'Oops...',
			text: 'Maksimal plafon sebesar Rp 4,416,061,209.351464'
		}).then(function() {
			swal.close();
			$("#plafon").focus();
		});
		document.getElementById("plafon").value = '';
	} else {
		// Hitung angsuran => plafon / tenor
		var hasil_angsuran = parseInt(plafon) / parseInt(document.getElementById("tenor").value);
		var tampil_angsuran = thousands_separators(hasil_angsuran.toFixed(2));

		// Untuk memberikan nilai blank pada angsuran saat hasil_angsuran bernilai NaN
		if (isNaN(hasil_angsuran)) {
			document.getElementById("angsuran").value = '';
		} else {
			document.getElementById("angsuran").value = uang + ' ' + tampil_angsuran;
		}
	}
}

function cekBungaKredit() {
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
	}
}

function cekNilaiJaminanKredit() {
	var cek = document.getElementById("nilai_jaminan").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	nilai_jaminan = nominal.replace(/[.]+/g, '');

	if (nilai_jaminan < 27800000) {
		swal({
			title: 'Oops...',
			text: 'Minimal nilai jaminan sebesar Rp 27,800,000'
		}).then(function() {
			swal.close();
			$("#nilai_jaminan").focus();
		});
		document.getElementById("nilai_jaminan").value = '';
	} else if (nilai_jaminan > 5549023217.614475) {
		swal({
			title: 'Oops...',
			text: 'Maksimal nilai jaminan sebesar Rp 5,549,023,217.614475'
		}).then(function() {
			swal.close();
			$("#nilai_jaminan").focus();
		});
		document.getElementById("nilai_jaminan").value = '';
	}
}

function cekNilaiKikmk() {
	var cek = document.getElementById("kikmk").value,
	split = cek.split(" "),
	uang = split[0],
	nominal = split[1],
	kikmk = nominal.replace(/[.]+/g, '');

	if (kikmk < 16600000) {
		swal({
			title: 'Oops...',
			text: 'Minimal KIKMK sebesar Rp 16,600,000'
		}).then(function() {
			swal.close();
			$("#kikmk").focus();
		});
		document.getElementById("kikmk").value = '';
	} else if (kikmk > 6052690739.035006) {
		swal({
			title: 'Oops...',
			text: 'Maksimal KIKMK sebesar Rp 6,052,690,739.035006'
		}).then(function() {
			swal.close();
			$("#kikmk").focus();
		});
		document.getElementById("kikmk").value = '';
	}
}