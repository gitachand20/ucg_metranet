<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Cermati</h1>
	</div>

	<div class="col-lg-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#forminput" role="tab" data-toggle="tab">Form Input Debitur</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#prediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#segmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="forminput">
				<?php include "hasil_prediksi.php"; ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="prediction">
				<div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/433dc648-5f72-4096-aa1c-2e5d9dbbb9a1"></iframe>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="segmentation">
				<div class="card-body embed-responsive embed-responsive-1by1">
					<iframe src="http://172.17.62.87:3000/public/dashboard/72ca1cf1-ff45-4364-a495-90573c9eb34a"></iframe>
				</div>
			</div>
		</div>
	</div>

<?php include "footer.php"; ?>