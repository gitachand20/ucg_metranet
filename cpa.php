<?php include "header.php"; ?>
	
	<div class="row">
		<div class="col-lg-7 col-md-12 d-sm-flex align-items-center justify-content-between mb-4">
			<h1 class="h3 mb-0 text-gray-800">Customer Profiling Analysis (CPA)</h1>
		</div>

		<div class="col-lg-3 col-md-6 mb-4" id="search_by_branch">
			<input class="form-control bg-light border-cus small" list="datalistOptions" id="exampleDataList" placeholder="Pilih Branch">
			<datalist id="datalistOptions">
				<option value="Op1">Op1</option>
				<option value="Op2"></option>
				<option value="Ap1"></option>
				<option value="Ap2"></option>
			</datalist>
		</div>

		<div class="input-group col-lg-2 col-md-6 mb-4" id="search_by_cif">
			<input type="text" class="form-control bg-light border-cus small" placeholder="Cari CIF" aria-label="Search" aria-describedby="basic-addon2">
			<div class="input-group-append">
				<button class="btn btn-detail" type="button">
					<i class="fas fa-search fa-sm"></i>
				</button>
			</div>
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
			if ($("#search_by_branch").hasClass("d-none")) {
				$("#search_by_branch").hide().removeClass("d-none");
        		$("#search_by_branch").show();
        		$("#search_by_cif").hide().removeClass("d-none");
        		$("#search_by_cif").show();
			}
		}

		function fiturAtas2() {
			document.getElementById("search_by_branch").classList.add("d-none");
			document.getElementById("search_by_cif").classList.add("d-none");
		}
		
	</script>

<?php include "footer.php"; ?>