<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<title>Hello, PHP!</title>
</head>

<body>
	<div class="text-center">
		<h1>PHP Script!</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="offset-md-4 col-4">
				<form id="leadForm" action="request.php" method="POST">
					<?php 
						foreach($_GET as $key => $val) {
							echo '<input type="hidden" name="'.htmlspecialchars($key).'" value="'.htmlspecialchars($val).'" />';
						}
					?>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">test_info</span>
						<input name="test_info" value="1" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">source_name</span>
						<input name="source_name" value="2" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">utm_term</span>
						<input name="utm_term" value="3" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="input-group mb-3">
						<span class="input-group-text" id="inputGroup-sizing-default">utm_content</span>
						<input name="utm_content" value="4" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
					</div>
					<div class="d-flex justify-content-center">
						<button type="submit" id='request' class="btn btn-primary">Send</button>
					</div>
				</form>
				<div>
					<hr>
				</div>
				<div class="d-flex justify-content-center">
					<a href="page_2.html">
						<button type="button" id='request' class="btn btn-info">
							JS Script
						</button>
					</a>
				</div>
			</div>
		</div>
	</div>

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