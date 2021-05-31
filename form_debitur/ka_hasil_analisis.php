<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Input Debitur Kredit Analisis</h1>
	</div>

 	<div class="card shadow mb-4">
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-striped table-bordered" id="dataTableId" width="100%" cellspacing="0">
 					<thead style="text-align: center;">
 						<tr>
 							<th>No</th>
 							<th>NIK</th>
 							<th>Nama Calom Debitur</th>
 							<th>Sumber Penghasilan</th>
 							<th>Jenis Kredit</th>
 							<th>Tindakan</th>
 						</tr>
 					</thead>
 					<tbody>
 						<tr>
 							<td align="center">1</td>
 							<td>1234567890123456</td>
 							<td>Purnando Gita Chandra</td>
 							<td>Gaji Kerja</td>
 							<td>Kredit Investasi</td>
 							<td style="text-align: center;">
 								<a href="ka_form_analisis.php" class="btn btn-warning">
		 							<i class="fas fa-fw fa-edit"></i>
		 						</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<script type="text/javascript">
		document.getElementById("form_analisis").classList.add("active");
		document.getElementById("icon_analisis").style.color = "#F02632";
		document.getElementById("name_analisis").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>