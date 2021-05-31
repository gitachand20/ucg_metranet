<?php include "header.php"; ?>
	
	<div class="row">
		<div class="d-sm-flex align-items-center justify-content-between col-lg-10 mb-4">
			<h1 class="h3 mb-0 text-gray-800">Pengelolaan Pengguna</h1>
		</div>

		<div class="col-lg-2 mb-4" style="width: 100%; float: right;">
			<a href="#" class="btn btn-custom-ad btn-icon-split" data-toggle="modal" data-target="#addAccount" data-backdrop="static" data-keyboard="false" style="float: right;">
				<span class="icon1 text-white-50">
					<i class="fas fa-plus"></i>
				</span>
				<span class="text">Tambah Akun</span>
			</a>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#perlu" role="tab" data-toggle="tab">Perlu Persetujuan</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#semua" role="tab" data-toggle="tab">Daftar Pengguna</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="perlu">
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="dataTableId1" width="100%" cellspacing="0">
								<thead style="text-align: center;">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat Email</th>
										<th>Role</th>
										<th>Status</th>
										<th>Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<center>
												<span class="status-need">Perlu Persetujuan</span>
											</center>
										</td>
										<td style="text-align: center;">
											<a href="#" class="btn-edit" data-toggle="modal" data-target="#approveAccount" data-backdrop="static" data-keyboard="false">
												<span class="icon1">
													<i class="fas fa-check fa-xs"></i>
												</span>
												<span class="text">Terima</span>
											</a>

											<a href="#" class="btn-delete" data-toggle="modal" data-target="#rejectAccount" data-backdrop="static">
												<span class="icon1">
													<i class="fas fa-times fa-xs"></i>
												</span>
												Tolak
											</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>

			<div role="tabpanel" class="tab-pane" id="semua">
				<div class="card shadow mb-4">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-striped table-bordered" id="dataTableId2" width="100%" cellspacing="0">
								<thead style="text-align: center;">
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Alamat Email</th>
										<th>Role</th>
										<th>Status</th>
										<th>Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<center>
												<span class="status-aktif">Aktif</span>
											</center>
										</td>
										<td style="text-align: center;">
											<a href="#" class="btn-edit" data-toggle="modal" data-target="#editAccount" data-backdrop="static" data-keyboard="false">
												<span class="icon1">
													<i class="fas fa-pen fa-xs"></i>
												</span>
												<span class="text">Ubah</span>
											</a>

											<a href="#" class="btn-delete" data-toggle="modal" data-target="#deleteAccount" data-backdrop="static">
												<span class="icon1">
													<i class="fas fa-trash-alt fa-xs"></i>
												</span>
												Hapus
											</a>
										</td>
									</tr>

									<tr>
										<td>2</td>
										<td></td>
										<td></td>
										<td></td>
										<td>
											<center>
												<span class="status-non">Tidak Aktif</span>
											</center>
										</td>
										<td style="text-align: center;">
											<a href="#" class="btn-edit" data-toggle="modal" data-target="#editAccount" data-backdrop="static" data-keyboard="false">
												<span class="icon1">
													<i class="fas fa-pen fa-xs"></i>
												</span>
												<span class="text">Ubah</span>
											</a>

											<a href="#" class="btn-delete" data-toggle="modal" data-target="#deleteAccount" data-backdrop="static">
												<span class="icon1">
													<i class="fas fa-trash-alt fa-xs"></i>
												</span>
												Hapus
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

	<!-- Modal Tambah -->
	<div class="modal fade" id="addAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Tambah Pengguna</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<form name="form_user" class="needs-validation" method="POST" action="hasil.php" novalidate>
					<div class="modal-body">
						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Nama</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="text" name="user_name" id="user_name" required>
								<div class="invalid-feedback">
									Nama tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Alamat Email</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="email" name="user_email" id="user_email" required>
								<div class="invalid-feedback">
									Alamat email tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Role</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Regional</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Cabang</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Unit</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Status</label>
							<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
								<div class="custom-control custom-radio mb-2">
									<input type="radio" class="custom-control-input" name="user_status" id="us_aktif" value="Aktif" required>
									<label class="custom-control-label" for="us_aktif">Aktif</label>
									<div class="invalid-feedback">Status tidak boleh kosong.</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
								<div class="custom-control custom-radio mb-2">
									<input type="radio" class="custom-control-input" name="user_status" id="us_non_aktif" value="Tidak Aktif" required>
									<label class="custom-control-label" for="us_non_aktif">Tidak Aktif</label>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
						<input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Terima -->
	<div class="modal fade" id="approveAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-success">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Terima Pengguna</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<form name="form_user" class="needs-validation" method="POST" action="hasil.php" novalidate>
					<div class="modal-body">
						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Nama</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="text" name="user_name" id="user_name" required>
								<div class="invalid-feedback">
									Nama tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Alamat Email</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="email" name="user_email" id="user_email" required>
								<div class="invalid-feedback">
									Alamat email tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Role</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row d-none">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Status</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="text" name="user_email" id="status" value="Aktif" required>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Tidak</button>
						<input type="submit" class="btn btn-custom-ad" name="simpan" onclick="cekStatus()" value="Ya">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Tolak -->
	<div class="modal fade" id="rejectAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-gradient-danger">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Apakah anda yakin akan Menolak data ini ?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<div class="modal-body">
					<table class="table table-striped" width="100%" style="color: #000;">
						<tr>
							<td width="30%">Nama</td>
							<td width="5%">:</td>
							<td></td>
						</tr>
						<tr>
							<td>Alamat Email</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Role</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td></td>
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

	<!-- Modal Edit -->
	<div class="modal fade" id="editAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header bg-info">
					<h5 class="modal-title font-weight-bold" id="exampleModalLabel" style="color: #fff;">Ubah Pengguna</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true" style="color: #fff;">×</span>
					</button>
				</div>

				<form name="form_user" class="needs-validation" method="POST" action="hasil.php" novalidate>
					<div class="modal-body">
						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Nama</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="text" name="user_name" id="user_name" required>
								<div class="invalid-feedback">
									Nama tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Alamat Email</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<input class="form-control" type="email" name="user_email" id="user_email" required>
								<div class="invalid-feedback">
									Alamat email tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Role</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Regional</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Cabang</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Unit</label>
							<div class="col-lg-8 col-xs-12 mb-3">
								<select class="form-control" name="user_role" id="user_role" required>
									<option value="" disabled="disabled" selected="selected">Pilih</option>
									<option value="Admin">Admin</option>
									<option value="Klien">Klien</option>
								</select>
								<div class="invalid-feedback">
									Role tidak boleh kosong.
								</div>
							</div>
						</div>

						<div class="row">
							<label class="col-lg-4 col-xs-12 col-form-label" style="color: #000;">Status</label>
							<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
								<div class="custom-control custom-radio mb-2">
									<input type="radio" class="custom-control-input" name="user_status" id="us_aktif" value="Aktif" required>
									<label class="custom-control-label" for="us_aktif">Aktif</label>
									<div class="invalid-feedback">Status tidak boleh kosong.</div>
								</div>
							</div>

							<div class="col-lg-4 col-sm-6 col-xs-12 mb-2">
								<div class="custom-control custom-radio mb-2">
									<input type="radio" class="custom-control-input" name="user_status" id="us_non_aktif" value="Tidak Aktif" required>
									<label class="custom-control-label" for="us_non_aktif">Tidak Aktif</label>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
						<input type="submit" class="btn btn-custom-ad" name="simpan" value="Simpan">
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Hapus -->
	<div class="modal fade" id="deleteAccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<td width="30%">Nama</td>
							<td width="5%">:</td>
							<td></td>
						</tr>
						<tr>
							<td>Alamat Email</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Role</td>
							<td>:</td>
							<td></td>
						</tr>
						<tr>
							<td>Status</td>
							<td>:</td>
							<td></td>
						</tr>
					</table>
				</div>

				<div class="modal-footer">
					<button class="btn btn-cancel-ad" type="button" data-dismiss="modal">Batal</button>
					<a href="#" class="btn btn-custom-ad">Ya</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("user").classList.add("active");
		document.getElementById("icon_user").style.color = "#F02632";
		document.getElementById("name_user").style.color = "#F02632";

		function cekStatus() {
			alert(document.getElementById("status").value);
		}
	</script>

<?php include "footer.php"; ?>