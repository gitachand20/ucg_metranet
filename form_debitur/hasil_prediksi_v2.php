<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Form Input Debitur Sales Officer V2</h1>
	</div>

	<div class="mb-4" style="width: 100%; float: right;">
		<a href="form_debitur_v2.php" class="btn btn-custom btn-icon-split" style="float: right;">
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
 								<a href="form_debitur_v1.php" class="btn btn-warning">
		 							<i class="fas fa-fw fa-edit"></i>
		 						</a>

		 						<button class="btn btn-danger" data-toggle="modal" data-target="#hapus_calon" data-backdrop="static" onclick="setHapus()">
		 							<i class="fas fa-trash-alt"></i>
		 						</button>
 							</td>
 						</tr>
 					</tbody>
 				</table>
 			</div>
 		</div>
 	</div>

 	<!-- Modal Hapus -->
	<div class="modal fade" id="hapus_calon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-gradient-danger">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Apakah anda yakin akan menghapus data ini ?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<table class="table table-striped" width="100%" style="color: #000;">
						<tr>
							<td width="30%">NIK</td>
							<td width="5%">:</td>
							<td id="nik"></td>
						</tr>
						<tr>
							<td>Nama</td>
							<td>:</td>
							<td id="nama"></td>
						</tr>
						<tr>
							<td>Jenis Kredit</td>
							<td>:</td>
							<td id="jenis"></td>
						</tr>
					</table>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Tidak</button>
					<a href="#" class="btn btn-custom-ad">Ya</a>
				</div>
			</div>
		</div>
	</div>

	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat taf@" data-whatever_1="@fat 1 taf@">Open modal for @fat</button>
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap batd@">Open modal for @getbootstrap</button>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New message</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label">Recipient:</label>
							<input type="text" class="form-control" id="recipient-name">
							<input type="text" class="form-control" id="recipient-name-1">
							<br>
							<table width="100%">
								<tr>
									<td id="recipient-td"></td>
								</tr>
								<tr>
									<td id="recipient-td-1"></td>
								</tr>
							</table>
						</div>
						<div class="form-group">
							<label for="message-text" class="col-form-label">Message:</label>
							<textarea class="form-control" id="message-text"></textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Send message</button>
				</div>
			</div>
		</div>
	</div>

 	<script type="text/javascript">
		document.getElementById("form_input_v2").classList.add("active");
		document.getElementById("icon_form_v2").style.color = "#F02632";
		document.getElementById("name_form_v2").style.color = "#F02632";

		function setHapus() {
			document.getElementById("nik").textContent = "1234567890123456";
			document.getElementById("nama").textContent = "Purnando Gita Chandra";
			document.getElementById("jenis").textContent = "Kredit Investasi";
		}
	</script>

<?php include "footer.php"; ?>
	
	<script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
			var button = $(event.relatedTarget);
			var recipient = button.data('whatever');
			var recipient1 = button.data('whatever_1');
			var modal = $(this);
			modal.find('.modal-title').text('New message to ' + recipient);
			modal.find('.modal-body #recipient-name').val(recipient);
			modal.find('.modal-body #recipient-name-1').val(recipient1);
			modal.find('.modal-body #recipient-td').append(recipient);
			modal.find('.modal-body #recipient-td-1').append(recipient1);
		})
	</script>