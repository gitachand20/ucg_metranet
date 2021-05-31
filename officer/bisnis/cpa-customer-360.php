<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Customer Profiling Analysis</h1>
		</div>
	</div>

	<div class="card shadow mb-4">
 		<div class="card-body">
 			<table class="table table-striped table-bordered" id="tabel-data-cpa" width="100%" cellspacing="0">
 				<thead style="text-align: center;">
 					<tr>
 						<!-- <th>No</th> -->
 						<th>CIF</th>
 						<th>Nomor Identitas</th>
 						<th>Nama</th>
 						<th>Aksi</th>
 					</tr>
 				</thead>
 				<tbody>
 					<tr>
 						<!-- <td></td> -->
 						<td>KAB02775</td>
 						<td>6171012358378884</td>
 						<td>Muhammad Iqbal Zulkifli</td>
 						<td style="text-align: center;">
 							<a class="btn btn-custom" href="#" data-toggle="modal" data-target="#data_diri">lihat</a>
 						</td>
 					</tr>
 				</tbody>
 			</table>
 		</div>
 	</div>

 	<div class="modal fade" id="data_diri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header" style="background-color: #EF7A48;">
 					<h3 class="modal-title judul">DETAIL DATA</h3>
 					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
 				</div>
 				<div class="modal-body">
 					<table width="100%">
 						<tr>
 							<td width="25%" align="center" valign="middle">
 								<i class="fas fa-user" style="font-size: 60px; color: #EE2E29"></i>
 							</td>
 							<td>
 								<span style="font-size: 1.2em; font-weight: bold; color: #000;">Muhammad Iqbal Zulkifli</span><br>
 								<span style="color: #000;">KAB02775</span>
 							</td>
 						</tr>
 					</table>

 					<hr style="border-bottom: 1px solid #AEB3B7;">

 					<table width="100%" style="color: #000;">
 						<tr>
 							<td colspan="3"><b>Informasi Umum</b></td>
 						</tr>
 						<tr>
 							<td width="40%" style="text-indent: 15px;" valign="top">Nomor Identitas</td>
 							<td width="5%" valign="top">:</td>
 							<td>6171012358378884</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Jenis Kelamin</td>
 							<td valign="top">:</td>
 							<td>Laki-Laki</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Tempat Lahir</td>
 							<td valign="top">:</td>
 							<td>Pontianak</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Tanggal Lahir</td>
 							<td valign="top">:</td>
 							<td>28 Maret 1998</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Nomor Ponsel</td>
 							<td valign="top">:</td>
 							<td>082374635282</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Nomor Telepon</td>
 							<td valign="top">:</td>
 							<td>0749284738</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Status Perkawinan</td>
 							<td valign="top">:</td>
 							<td>Lajang</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Agama</td>
 							<td valign="top">:</td>
 							<td>Islam</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Pendidikan</td>
 							<td valign="top">:</td>
 							<td>Sarjana</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Pekerjaan</td>
 							<td valign="top">:</td>
 							<td>-</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">NPWP</td>
 							<td valign="top">:</td>
 							<td>0828392739</td>
 						</tr>
 						<tr>
 							<td colspan="3"><br></td>
 						</tr>
 						<tr>
 							<td colspan="3"><b>Alamat</b></td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Alamat Identitas</td>
 							<td valign="top">:</td>
 							<td>Jl. Iskandar Martadhinata</td>
 						</tr>
 						<tr>
 							<td style="text-indent: 15px;" valign="top">Alamat Domisili</td>
 							<td valign="top">:</td>
 							<td>Jl. Pancoran Barat 3</td>
 						</tr>
 					</table>
 				</div>
 			</div>
 		</div>
 	</div>

	<script type="text/javascript">
	 	document.getElementById("menu_cpa").classList.add("active");
		document.getElementById("icon_cpa").style.color = "#F02632";
		document.getElementById("name_cpa").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>