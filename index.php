<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/heroes.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

	<title>PHP Script!</title>
</head>

<body>
	<main>
		<div class="px-4 py-5 my-5 text-center">
			<img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
			<h1 class="display-5 fw-bold">PHP Script!</h1>
			<div class="col-lg-6 mx-auto">
				<div class="container">
					<div class="row">
						<div class="offset-sm-3 col-6">
							<form id="leadForm" action="request.php" method="POST">
								<?php
								foreach ($_GET as $key => $val) {
									echo '<input type="hidden" name="' . htmlspecialchars($key) . '" value="' . htmlspecialchars($val) . '" />';
								}
								?>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">test_info</span>
									<input name="test_info" value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">source_name</span>
									<input name="source_name" value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">utm_term</span>
									<input name="utm_term" value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
								<div class="input-group mb-3">
									<span class="input-group-text" id="inputGroup-sizing-default">utm_content</span>
									<input name="utm_content" value="" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
								</div>
								<div>
									<hr>
								</div>
								<div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
									<button type="submit" class="btn btn-primary btn-lg px-4 gap-3" id='request'>Send</button>
									<a href="page_2.html">
										<button type="button" class="btn btn-outline-secondary btn-lg px-4">JS Script</button>
									</a>
								</div>
							</form>

						</div>
					</div>
				</div>

			</div>
		</div>
	</main>
	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

	<!-- Option 2: Separate Popper and Bootstrap JS -->
	<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>