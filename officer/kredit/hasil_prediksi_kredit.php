<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Kredit Produktif</h1>
	</div>

	<div class="mb-4" style="width: 100%; float: right;">
		<a href="form-kredit.php" class="btn btn-custom btn-icon-split" style="float: right;">
			<span class="icon1 text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data</span>
		</a>
	</div>

 	<div class="card shadow mb-4">
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-striped table-bordered" id="dataTableId" width="100%" cellspacing="0">
 					<thead style="text-align: center;">
 						<tr>
 							<th>No</th>
 							<th>Recomendation</th>
 							<th>Risk Level</th>
 							<th>Prediction</th>
 							<th>Default Probability</th>
 							<th>Ket</th>
 						</tr>
 					</thead>
 					<tbody>
 						<tr>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td style="text-align: center;">
 								<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data" onclick="format1()">
		 							<span class="text">View 1</span>
		 						</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg" role="document" style="max-width: 750px">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h5 class="modal-title judul">DETAIL DATA KREDIT PRODUKTIF</h5>
 					<a href="hasil_prediksi_kredit.php" class="close">
 						<span aria-hidden="true" style="color: #fff;">×</span>
 					</a>
 				</div>
 				<div class="modal-body">
 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-address-card" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">NIK</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_nik">6171012358378884</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_nik">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-ticket-alt" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">No Aplikasi</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_no_aplikasi">BAB3301030</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_no_aplikasi">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fa fa-bank" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Unit</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: none;" id="detail_branch">ANTAPANI</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: block;" id="n_detail_branch">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-birthday-cake" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Usia</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_umur">29 TAHUN</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_umur">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-mars" style="font-size: 16px; color: #EE2E29; display: block;" id="g_male"></i>
										<i class="fas fa-venus" style="font-size: 16px; color: #EE2E29; display: none;" id="g_female"></i>
										<i class="fas fa-venus-mars" style="font-size: 16px; color: #EE2E29; display: none;" id="g_no_data"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Jenis Kelamin</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_kelamin">LAKI - LAKI</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_kelamin">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-moon" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Agama</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_agama">ISLAM</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_agama">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-graduation-cap" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Pendidikan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_pendidikan">S1</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_pendidikan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-heart" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Status Perkawinan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_status_kawin">LAJANG</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_status_kawin">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-store" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Bidang Usaha</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_bidang_usaha">LAINNYA</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_bidang_usaha">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-people-carry" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Jenis Usaha</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_usaha">LAINNYA</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_usaha">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-money-bill-wave" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Penghasilan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_penghasilan">Rp 10,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_penghasilan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-file-invoice-dollar" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Jenis Loan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_loan">KREDIT REKENING KORAN</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_loan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-money-check-alt" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Plafon</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_plafond">Rp 30,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_plafond">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-calendar-alt" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Tenor</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_tenor">60 BULAN</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_tenor">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-donate" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Angsuran</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_angsuran">Rp 500,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_angsuran">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-percent" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Bunga</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_bunga">10%</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_bunga">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-certificate" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Jenis Jaminan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_jaminan">BPKB</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_jaminan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-dollar-sign" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Nilai Jaminan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_nilai_jaminan">Rp 50,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_nilai_jaminan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-money-bill-alt" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">KI / KMK</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_kikmk">Rp 20,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_kikmk">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

	 				<!-- <div style="float: right; margin-top: 10px;">
	 					<a href="hasil_prediksi.php" class="btn btn-tutup">Tutup</a>
	 				</div> -->
 				</div>
 			</div>
 		</div>
 	</div>

 	<script type="text/javascript">
		document.getElementById("form_input_kredit").classList.add("active");
		document.getElementById("icon_form_kredit").style.color = "#F02632";
		document.getElementById("name_form_kredit").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>