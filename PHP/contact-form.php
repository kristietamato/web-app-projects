<!doctype html>
<html>

	<head>

		<title>Creating a Contact Form with PHP</title>

		<meta charset="utf-8" />
	 	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 	<meta name="viewport" content="width=device-width, initial-	scale=1" />

	 	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	
		<style>
		.emailForm
		{
			border: 1px solid grey;
			border-radius: 10px;
			margin-top: 20px;
		}

		form
		{
			padding-bottom: 20px;
		}

		</style>


		<?php

			$error1 = !$_POST["name"];
			$error2 = !$_POST["email"];
			$error3 = !$_POST["comment"];

			if ($_POST["submit"])
			{
				$result = '<div class="alert alert-success">Form submitted</div>';
			}

			if (!$_POST["name"])
			{
				$error = "<br />Please enter your name";
			}

			if (!$_POST["email"])
			{
				$error .= "<br />Please enter your email";
			}

			if (!$_POST["comment"])
			{
				$error .= "<br />Please enter a comment";
			}	

			if ($error)
			{
				$result = '<div class="alert alert-danger"><strong>There were error(s) in your form: </strong>'.$error.'</div>';
			}	
	
		?>

	</head>

	<body>

		<div class="container">

			<div class="row">

				<div class="col-md-6 col-md-offset-3 emailForm">

					<h1>Email Form</h1>

					<?php
						echo $result;
					?>

					<p class="lead">Please email us your questions or comments.</p>
						
					<!-- contact form that emails -->
					<form method="post">
						
						<div class="form-group">

						<label for="name">Your Name:</label>
						<input type="text" class="form-control" placeholder="Your name" />

						<label for="email">Your Email:</label>
						<input type="email" class="form-control" placeholder="Your email" />

						<label for="comment">Your Comment:</label>
						<textarea class="form-control"></textarea>

						</div>

						<input type="submit" name="submit" class="btn btn-success btn-lg" value="Submit" />

					</form>

				</div>

			</div>

		</div>

	</body>

</html>