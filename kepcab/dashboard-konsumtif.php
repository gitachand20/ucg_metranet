<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Credit Risk Scoring - Dashboard Konsumtif</h1>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#prediction" role="tab" data-toggle="tab">Prediction</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#segmentation" role="tab" data-toggle="tab">Segmentation</a>
			</li>
		</ul>

		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="prediction">
				<?php include "credit-kon-pre.php"; ?>
			</div>

			<div role="tabpanel" class="tab-pane" id="segmentation">
				<?php include "credit-kon-seg.php"; ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_cs").classList.add("active");
		document.getElementById("icon_cs").style.color = "#F02632";
		document.getElementById("name_cs").style.color = "#F02632";
		document.getElementById("icon_cs_kon").style.color = "#F02632";
		document.getElementById("name_cs_kon").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>