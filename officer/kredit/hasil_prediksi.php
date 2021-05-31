<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Debitur</h1>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#konsumtif" role="tab" data-toggle="tab">Konsumtif</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#produktif" role="tab" data-toggle="tab">Produktif</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="konsumtif">
				<div class="mb-4" style="width: 100%; float: right; margin-top: 10px;">
					<a href="form-input.php" class="btn btn-custom btn-icon-split" style="float: right;">
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
											<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data-konsumtif">
												<span class="text">View</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>


			<div role="tabpanel" class="tab-pane" id="produktif">
				<div class="mb-4" style="width: 100%; float: right; margin-top: 10px;">
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
							<table class="table table-striped table-bordered" id="dataTableId1" width="100%" cellspacing="0">
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
											<a href="#" class="btn btn-detail" data-toggle="modal" data-target="#detail-data-produktif">
												<span class="text">View</span>
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


 	<div class="modal fade" id="detail-data" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h3 class="modal-title judul">DETAIL DATA</h3>
 					<a href="hasil_prediksi.php" class="close">
 						<span aria-hidden="true" style="color: #fff;">×</span>
 					</a>
 				</div>
 				<div class="modal-body" style="background-color: #DCDCDC;">
 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_umur">Umur</label>
 							<input type="text" class="form-control" id="detail_umur" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_jenis_kelamin">Jenis Kelamin</label>
 							<input type="text" class="form-control" id="detail_jenis_kelamin" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_dom_provinsi">Provinsi</label>
 							<input type="text" class="form-control" id="detail_dom_provinsi" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_pendidikan">Pendidikan</label>
 							<input type="text" class="form-control" id="detail_pendidikan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_status_kawin">Status Perkawinan</label>
 							<input type="text" class="form-control" id="detail_status_kawin" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_pekerjaan">Pekerjaan</label>
 							<input type="text" class="form-control" id="detail_pekerjaan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_sumber_dana">Sumber Dana</label>
 							<input type="text" class="form-control" id="detail_sumber_dana" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_penghasilan">Penghasilan</label>
 							<input type="text" class="form-control" id="detail_penghasilan" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_angsuran">Angsuran</label>
 							<input type="text" class="form-control" id="detail_angsuran" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_tenor">Tenor</label>
 							<input type="text" class="form-control" id="detail_tenor" readonly>
 						</div>
 					</div>

 					<div class="row">
 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_plafon">Plafon</label>
 							<input type="text" class="form-control" id="detail_plafon" readonly>
 						</div>

 						<div class="col-lg-6 col-sm-12 mb-3">
 							<label class="label1" for="detail_admin_fee">Biaya Admin</label>
 							<input type="text" class="form-control" id="detail_admin_fee" readonly>
 						</div>
 					</div>		
 				</div>
 				<div class="modal-footer">
 					<a href="hasil_prediksi.php" class="btn btn-secondary">Tutup</a>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade" id="detail-data1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h3 class="modal-title judul">DETAIL DATA</h3>
 					<a href="hasil_prediksi.php" class="close">
 						<span aria-hidden="true" style="color: #fff;">×</span>
 					</a>
 				</div>
 				<div class="modal-body">
 					<center>
	 					<table width="60%" class="tabel">
	 						<tbody>
	 							<tr>
	 								<td class="font-weight-bold" width="40%">Umur</td>
	 								<td width="13%">:</td>
	 								<td>48</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Jenis Kelamin</td>
	 								<td>:</td>
	 								<td>Not Defined</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Provinsi</td>
	 								<td>:</td>
	 								<td>KALIMANTAN SELATAN</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Pendidikan</td>
	 								<td>:</td>
	 								<td>SMK</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Status Perkawinan</td>
	 								<td>:</td>
	 								<td>Single</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Pekerjaan</td>
	 								<td>:</td>
	 								<td>PNS</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Sumber Dana</td>
	 								<td>:</td>
	 								<td>7</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Penghasilan</td>
	 								<td>:</td>
	 								<td>Rp 9,900,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Angsuran</td>
	 								<td>:</td>
	 								<td>Rp 4,500,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Tenor</td>
	 								<td>:</td>
	 								<td>12</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Plafon</td>
	 								<td>:</td>
	 								<td>Rp 54,000,000</td>
	 							</tr>
	 							<tr>
	 								<td class="font-weight-bold">Biaya Admin</td>
	 								<td>:</td>
	 								<td>Rp 540,000</td>
	 							</tr>
	 						</tbody>
	 					</table>
	 				</center>

	 				<div style="float: right; margin-top: 30px;">
	 					<a href="hasil_prediksi.php" class="btn btn-tutup">Tutup</a>
	 				</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade" id="detail-data-konsumtif" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg" role="document" style="max-width: 750px">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h5 class="modal-title judul">DETAIL DATA DEBITUR KONSUMTIF</h5>
 					<a href="hasil_prediksi.php" class="close">
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: none;" id="detail_branch">Antapani</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_umur">29 Tahun</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_kelamin">Laki - laki</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_agama">Islam</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_status_kawin">Lajang</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_status_kawin">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-hand-holding-usd" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Sumber Dana</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_sumber_dana">Gaji Kerja</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_sumber_dana">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
 						<div class="col-lg-4">
 							<table width="100%">
 								<tr>
 									<td valign="top" width="13%">
 										<i class="fas fa-briefcase" style="font-size: 16px; color: #EE2E29;"></i>
 									</td>
 									<td style="font-size: .85em; font-family: 'Lucida Console';">Pekerjaan</td>
 								</tr>
 								<tr>
 									<td></td>
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_pekerjaan">Karyawan</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_pekerjaan">Tidak Ada</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_bidang_usaha">Lainnya</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_bidang_usaha">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_usaha">Lainnya</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_usaha">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_penghasilan">Rp 5,000,000</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_jenis_loan">Kartu Kredit</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_jenis_loan">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_plafond">Rp 3,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_plafond">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>
 					</div>

 					<div class="row mb-4">
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_tenor">12 Bulan</td>
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_angsuran">Rp 250,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_angsuran">Tidak Ada</td>
 								</tr>
 							</table>
 						</div>

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
 					</div>

 					<div class="row mb-4">
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
 									<td class="font-weight-bold" style="font-size: .85em; color: #000; display: block;" id="detail_nilai_jaminan">Rp 5,000,000</td>
									<td class="font-weight-bold" style="font-size: .85em; color: #FF0000; display: none;" id="n_detail_nilai_jaminan">Tidak Ada</td>
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

 	<div class="modal fade" id="detail-data-produktif" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
 		<div class="modal-dialog modal-lg" role="document" style="max-width: 750px">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h5 class="modal-title judul">DETAIL DATA DEBITUR PRODUKTIF</h5>
 					<a href="hasil_prediksi.php" class="close">
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
		document.getElementById("form_input").classList.add("active");
		document.getElementById("icon_form").style.color = "#F02632";
		document.getElementById("name_form").style.color = "#F02632";

		function rubah(angka){
			var reverse = angka.toString().split('').reverse().join(''),
			ribuan = reverse.match(/\d{1,3}/g);
			ribuan = ribuan.join(',').split('').reverse().join('');
			return ribuan;
		}

		function format() {
			var gender = "M";

			if (gender === "M") {
				gender = "Male";
			} else {
				gender = "Female";
			}

			document.getElementById("detail_approved_credit").value = "Rp. " + rubah(15000000);
			document.getElementById("detail_ext_score_2").value = "0.12";
			document.getElementById("detail_days_work").value = "-" + rubah(1000);
			document.getElementById("detail_education").value = "Higher education";
			document.getElementById("detail_day_age").value = "-" + rubah(7944);
			document.getElementById("detail_gender").value = gender;
			document.getElementById("detail_family_status").value = "Single / not married";
			document.getElementById("detail_organization_type").value = "Restaurant";
			document.getElementById("detail_days_id_change").value = "0";
			document.getElementById("detail_contract_type").value = "Cash loans";
			document.getElementById("detail_income").value = "Rp. " + rubah(10000000);
			document.getElementById("detail_housing_type").value = "House / apartment";
			document.getElementById("detail_annuity").value = "Rp. " + rubah(416667);
			document.getElementById("detail_price").value = "Rp. " + rubah(15000000);
			document.getElementById("detail_days_registration").value = "0";
		}

		function format1() {
			var jenis_kelamin = "";

			if (jenis_kelamin === "Male") {
				jenis_kelamin = "Laki - laki";
			} else if (jenis_kelamin === "Female") {
				jenis_kelamin = "Perempuan";
			} else {
				jenis_kelamin = "Tidak Diketahui";
			}

			document.getElementById("detail_jenis_kelamin").value = jenis_kelamin;
			document.getElementById("detail_penghasilan").value = "Rp " + rubah(12000000);
			document.getElementById("detail_angsuran").value = "Rp " + rubah(12000000);
			document.getElementById("detail_plafon").value = "Rp " + rubah(12000000);
			document.getElementById("detail_admin_fee").value = "Rp " + rubah(12000000);
		}
	</script>

<?php include "footer.php"; ?>