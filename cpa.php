<?php include "header.php"; ?>
	
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Customer Profiling Analysis</h1>
	</div> -->

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#cpa" role="tab" data-toggle="tab" id="dashboard">Dashboard CPA</a>
				<li class="nav-item">
				<a class="nav-link" href="#customer_360" role="tab" data-toggle="tab" id="360">Customer 360</a>
			</li>
			</li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="cpa">
				<?php include "dashboard_cpa.php"; ?>
			</div>
			<div role="tabpanel" class="tab-pane" id="customer_360">
				<?php include "customer_360.php" ?>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		// function inputCif() {
	 //    	swal({
		//         icon: 'error',
		//         title: 'Oops...',
		//         text: 'Input CIF Number'
	 //      	})
	 //    }

	 	document.getElementById("menu_dash").classList.add("active");
		document.getElementById("icon_menu_dash").style.color = "#F02632";
		document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_cpa").style.color = "#F02632";
		document.getElementById("name_cpa").style.color = "#F02632";
	</script>

<?php include "footer.php"; ?>