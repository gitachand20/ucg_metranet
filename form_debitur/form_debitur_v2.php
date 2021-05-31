<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi_v2.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg"></i>
			</a>
			Form Input Debitur Sales Officer V2
		</h1>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body row">
					<div class="col-lg-3">
						<div id="menu_1" class="col-lg-12 border-left-danger mb-2">
							<button id="btn_menu_1" class="btn btn-menu active" onclick="setDataDiri()">
								Data Diri
							</button>
						</div>

						<div id="menu_2" class="col-lg-12 mb-2">
							<div id="label_menu_2" style="padding: 0.375rem 0.75rem; font-size: 1rem; display: block;">
								Sumber Penghasilan
							</div>

							<button id="btn_menu_2" class="btn btn-menu" onclick="setSumberPenghasilan()" style="display: none;">
								Sumber Penghasilan
								<span id="sk_gk" style="display: none;">Gaji Kerja</span>
								<span id="sk_hu" style="display: none;">Hasil Usaha</span>
							</button>
						</div>

						<div id="menu_3" class="col-lg-12 mb-2">
							<div id="label_menu_3" style="padding: 0.375rem 0.75rem; font-size: 1rem; display: block;">
								Pengajuan Kredit
							</div>

							<button id="btn_menu_3" class="btn btn-menu" onclick="setPengajuanKredit()" style="display: none;">
								Pengajuan Kredit
							</button>
						</div>

						<div id="menu_4" class="col-lg-12 mb-2">
							<div id="label_menu_4" style="padding: 0.375rem 0.75rem; font-size: 1rem; display: none;">
								Data Jaminan
							</div>

							<button id="btn_menu_4" class="btn btn-menu" onclick="setDataJaminan()" style="display: block;">
								Data Jaminan
							</button>
						</div>

						<div id="menu_5" class="col-lg-12 mb-2">
							<div id="label_menu_5" style="padding: 0.375rem 0.75rem; font-size: 1rem; display: block;">
								Unggah Berkas
							</div>

							<button id="btn_menu_5" class="btn btn-menu" onclick="setUnggahBerkas()" style="display: none;">
								Unggah Berkas
							</button>
						</div>
					</div>

					<div id="content_form" class="col-lg-9">
						<fieldset id="content_1" class="col-lg-12 custom-scroll">
							<?php include "v2_data_diri.php"; ?>
						</fieldset>

						<fieldset id="content_2" class="col-lg-12 d-none">
							<fieldset id="gaji_kerja" class="col-lg-12 custom-scroll d-none">
								<?php include "v2_gaji_kerja.php"; ?>
							</fieldset>
							
							<fieldset id="hasil_usaha" class="col-lg-12 custom-scroll d-none">
								<?php include "v2_hasil_usaha.php"; ?>
							</fieldset>
						</fieldset>

						<fieldset id="content_3" class="col-lg-12 custom-scroll d-none">
							<?php include "v2_pengajuan_kredit.php"; ?>
						</fieldset>

						<fieldset id="content_4" class="col-lg-12 custom-scroll d-none">
							<?php include "v2_data_jaminan.php"; ?>
						</fieldset>

						<fieldset id="content_5" class="col-lg-12 custom-scroll d-none">
							<?php include "v2_unggah_berkas.php"; ?>
						</fieldset>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("form_input_v2").classList.add("active");
		document.getElementById("icon_form_v2").style.color = "#F02632";
		document.getElementById("name_form_v2").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>

	<script src="../js/form_debitur_v2.js"></script>
  	<script src="../js/form_debitur_berkas.js"></script>
  	<script src="../js/cek_unggah_berkas.js"></script>

  	<!-- Validasi -->
  	<script src="../js/data_diri.js"></script>