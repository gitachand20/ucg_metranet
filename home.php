<?php include "header.php"; ?>

	<!-- Page Heading -->
	<!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Home</h1>
	</div> -->

	<div class="row">
		<!-- Credit Approval Rate -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-primary text-uppercase mb-1" style="font-size: 11pt;">
								Credit Approval Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								???
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
				<div class="card-footer" style="padding-top: 0.2em; padding-bottom: 0em">
					<a href="#" style="text-decoration: none;" onclick="creditApproval()">
						Semua Credit Approval Rate
					</a>
				</div>
			</div>
		</div>

		<!-- Credit Achievement Rate -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-success text-uppercase mb-1" style="font-size: 11pt;">
								Credit Achievement Rate
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								???
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
				<div class="card-footer" style="padding-top: 0.2em; padding-bottom: 0em">
					<a href="#" style="text-decoration: none;" onclick="creditAchievement()">
						Semua Credit Achievement Rate
					</a>
				</div>
			</div>
		</div>

		<!-- Credit Performance Rate -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-info text-uppercase mb-1" style="font-size: 11pt;">
								Credit Performance Rate
							</div>
							<div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
								???
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
				<div class="card-footer" style="padding-top: 0.2em; padding-bottom: 0em">
					<a href="#" style="text-decoration: none;" onclick="creditPerformance()">
						Semua Credit Performance Rate
					</a>
				</div>
			</div>
		</div>

		<!-- Total Saving -->
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="font-weight-bold text-warning text-uppercase mb-1" style="font-size: 11pt;">
								Total Saving
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800">
								???
							</div>
						</div>
						<div class="col-auto">
							<i class="fas fa-comments fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
				<div class="card-footer" style="padding-top: 0.2em; padding-bottom: 0em">
					<a href="#" style="text-decoration: none;" onclick="totalSaving()">
						Semua Total Saving
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="sk-circle d-none" id="load" style="margin-top: 10%;">
		<div class="sk-circle1 sk-child"></div>
		<div class="sk-circle2 sk-child"></div>
		<div class="sk-circle3 sk-child"></div>
		<div class="sk-circle4 sk-child"></div>
		<div class="sk-circle5 sk-child"></div>
		<div class="sk-circle6 sk-child"></div>
		<div class="sk-circle7 sk-child"></div>
		<div class="sk-circle8 sk-child"></div>
		<div class="sk-circle9 sk-child"></div>
		<div class="sk-circle10 sk-child"></div>
		<div class="sk-circle11 sk-child"></div>
		<div class="sk-circle12 sk-child"></div>
	</div>

	<div class="card d-none" id="credit_approval">
		<div class="card-header bg-gradient-primary text-white font-weight-bold text-uppercase">
			Credit Approval Rate
		</div>
		<div class="card-body">
			Test isi
		</div>
	</div>

	<div class="card d-none" id="credit_achievement">
		<div class="card-header bg-gradient-success text-white font-weight-bold text-uppercase">
			Credit Achievement Rate
		</div>
		<div class="card-body">
			Test isi
		</div>
	</div>

	<div class="card d-none" id="credit_performance">
		<div class="card-header bg-gradient-info text-white font-weight-bold text-uppercase">
			Credit Performance Rate
		</div>
		<div class="card-body">
			Test isi
		</div>
	</div>

	<div class="card d-none" id="total_saving">
		<div class="card-header bg-gradient-warning text-white font-weight-bold text-uppercase">
			Total Saving
		</div>
		<div class="card-body">
			Test isi
		</div>
	</div>


	<script type="text/javascript">
		document.getElementById("home").classList.add("active");
		document.getElementById("icon_home").style.color = "#F02632";
		document.getElementById("name_home").style.color = "#F02632";

		function creditApproval() {
			if ($("#load").hasClass("d-none")){
				$("#load").hide().removeClass("d-none");
				$("#load").show();

				setTimeout(function(){
					$("#load").hide();
					$("#credit_approval").hide().removeClass("d-none");
					$("#credit_approval").show();
				},3000);
			} else {
				$("#credit_approval").hide();
				$("#credit_achievement").hide();
				$("#credit_performance").hide();
				$("#total_saving").hide();
				$("#load").show();

				if ($("#credit_approval").hasClass("d-none")) {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_approval").hide().removeClass("d-none");
						$("#credit_approval").show();
					},3000);
				} else {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_approval").show();
					},3000);
				}	
			}
		}

		function creditAchievement() {
			if ($("#load").hasClass("d-none")){
				$("#load").hide().removeClass("d-none");
				$("#load").show();

				setTimeout(function(){
					$("#load").hide();
					$("#credit_achievement").hide().removeClass("d-none");
					$("#credit_achievement").show();
				},3000);
			} else {
				$("#credit_approval").hide();
				$("#credit_achievement").hide();
				$("#credit_performance").hide();
				$("#total_saving").hide();
				$("#load").show();

				if ($("#credit_achievement").hasClass("d-none")) {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_achievement").hide().removeClass("d-none");
						$("#credit_achievement").show();
					},3000);
				} else {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_achievement").show();
					},3000);
				}
			}
		}

		function creditPerformance() {
			if ($("#load").hasClass("d-none")){
				$("#load").hide().removeClass("d-none");
				$("#load").show();

				setTimeout(function(){
					$("#load").hide();
					$("#credit_performance").hide().removeClass("d-none");
					$("#credit_performance").show();
				},3000);
			} else {
				$("#credit_approval").hide();
				$("#credit_achievement").hide();
				$("#credit_performance").hide();
				$("#total_saving").hide();
				$("#load").show();

				if ($("#credit_performance").hasClass("d-none")) {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_performance").hide().removeClass("d-none");
						$("#credit_performance").show();
					},3000);
				} else {
					setTimeout(function(){
						$("#load").hide();
						$("#credit_performance").show();
					},3000);
				}
			}
		}

		function totalSaving() {
			if ($("#load").hasClass("d-none")){
				$("#load").hide().removeClass("d-none");
				$("#load").show();

				setTimeout(function(){
					$("#load").hide();
					$("#total_saving").hide().removeClass("d-none");
					$("#total_saving").show();
				},3000);
			} else {
				$("#credit_approval").hide();
				$("#credit_achievement").hide();
				$("#credit_performance").hide();
				$("#total_saving").hide();
				$("#load").show();

				if ($("#total_saving").hasClass("d-none")) {
					setTimeout(function(){
						$("#load").hide();
						$("#total_saving").hide().removeClass("d-none");
						$("#total_saving").show();
					},3000);
				} else {
					setTimeout(function(){
						$("#load").hide();
						$("#total_saving").show();
					},3000);
				}
			}
		}
	</script>

<?php include "footer.php"; ?>