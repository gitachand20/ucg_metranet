<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Debitur</h1>
	</div>

	<div class="mb-4" style="width: 100%; float: right;">
		<a href="#" class="btn btn-custom btn-icon-split" data-toggle="modal" data-target=".bd-example-modal-lg" data-backdrop="static" data-keyboard="false" style="float: right;">
			<span class="icon1 text-white-50">
				<i class="fas fa-plus"></i>
			</span>
			<span class="text">Tambah Data</span>
		</a>
	</div>

 	<div class="card shadow mb-4">
 		<div class="card-body">
 			<div class="table-responsive">
 				<table class="table table-striped table-bordered" id="dataTable" width="100%" cellspacing="0">
 					<thead>
 						<tr>
 							<th>No</th>
 							<th>Default Probability</th>
 							<th>Prediction</th>
 							<th>Prediction Level</th>
 							<th></th>
 						</tr>
 					</thead>
 					<tfoot>
 						<tr>
 							<th>No</th>
 							<th>Default Probability</th>
 							<th>Prediction</th>
 							<th>Prediction Level</th>
 							<th></th>
 						</tr>
 					</tfoot>
 					<tbody>
 						<tr>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td></td>
 							<td style="text-align: center;">
 								<a href="#" class="btn btn-detail">
		 							<span class="text">Detail</span>
		 						</a>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<script type="text/javascript">
		document.getElementById("form_input").classList.add("active");
		document.getElementById("icon_form").style.color = "#F02632";
		document.getElementById("name_form").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>