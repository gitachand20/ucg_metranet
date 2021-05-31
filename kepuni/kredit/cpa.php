<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-10 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Customer Profiling Analysis (CPA)</h1>
		</div>

		<div class="col-lg-2 col-md-6" id="search_by_cif">
			<input class="form-control bg-light border-cus small filter-behavior-prediction" id="cif_behavior_seg"  list="cifList" name="cif_behavior_seg" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2" autocomplete="off">
			<datalist id="cifList"></datalist>
		</div>
	</div>

	<div class="col-12">
		<ul class="nav nav-tabs" role="tablist">
			<li class="nav-item">
				<a class="nav-link active" href="#cpa" role="tab" data-toggle="tab" id="dashboard" onclick="fiturAtas1()">Dashboard CPA</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#customer_360" role="tab" data-toggle="tab" id="360" onclick="fiturAtas2()">Customer 360</a>
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

	 	document.getElementById("menu_cpa").classList.add("active");
		// document.getElementById("icon_menu_dash").style.color = "#F02632";
		// document.getElementById("name_menu_dash").style.color = "#F02632";
		document.getElementById("icon_cpa").style.color = "#F02632";
		document.getElementById("name_cpa").style.color = "#F02632";	

		function fiturAtas1() {
			if ($("#search_by_cif").hasClass("d-none")) {
				$("#search_by_cif").hide().removeClass("d-none");
        		$("#search_by_cif").show();
			}
		}

		function fiturAtas2() {
			document.getElementById("search_by_cif").classList.add("d-none");
		}
		
	</script>

<?php include "footer.php"; ?>