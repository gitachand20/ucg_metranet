<?php include "header.php"; ?>

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">
			<a href="hasil_prediksi.php" class="btn btn-back">
				<i class="fas fa-arrow-left text-lg" style="color: "></i>
			</a>
			Form Input Debitur
		</h1>
	</div>
	
	<div class="row">
		<div class="container1 col-lg-12">
			<div class="progress-bar1">
				<div class="step" style="background-color: yellow;">
					<div class="bullet" style="background-color: red;">
						<span>1</span>
					</div>
					<div class="check fas fa-check"></div>
				</div>
				<div class="step" style="background-color: red;">
					<div class="bullet" style="background-color: yellow;">
						<span>2</span>
					</div>
					<div class="check fas fa-check"></div>
				</div>
			</div>

			<div class="form-outer">
				<form name="form_input" class="needs-validation" method="POST" action="hasil.php" novalidate>
					
				</form>
			</div>
		</div>
	</div>

<?php include "footer.php"; ?>