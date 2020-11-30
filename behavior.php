<?php include "header.php"; ?>

	<div class="col-lg-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#thelris" role="tab" data-toggle="tab">Thelris</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#eagle_bank" role="tab" data-toggle="tab">Eagle National Bank</a>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<!-- Thelris -->
			<div role="tabpanel" class="tab-pane active" id="thelris">
				<div class="col-lg-12">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#tprediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#tsegmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tprediction">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/1574960f-0a17-4681-bd0c-a9770c29adf0"></iframe>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="tsegmentation">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/44931a4c-f873-42b0-ab38-76926deea906"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Eagle National Bank -->
			<div role="tabpanel" class="tab-pane" id="eagle_bank">
				<div class="col-lg-12">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" href="#eprediction" role="tab" data-toggle="tab">Dashboard Prediction</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#esegmentation" role="tab" data-toggle="tab">Dashboard Segmentation</a>
						</li>
					</ul>

					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="eprediction">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/7f75000d-1bcc-476d-9339-3cfd0ba5bc68"></iframe>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="esegmentation">
							<div class="card-body embed-responsive embed-responsive-1by1">
								<iframe src="http://172.17.62.87:3000/public/dashboard/68ea90e2-90ea-46af-a18f-c3b2bcb47060"></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_bs").style.color = "#F02632";
		document.getElementById("name_bs").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>