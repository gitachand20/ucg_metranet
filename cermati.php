<?php include "header.php"; ?>
	
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Cermati</h1>
	</div>

	<div class="col-lg-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#prediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#segmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="prediction">
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

	<script type="text/javascript">
		document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>