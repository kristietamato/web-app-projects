<!doctype html>
<html>

	<head>

		<title>Learning PHP</title>

		<meta charset="utf-8" />
	 	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	 	<meta name="viewport" content="width=device-width, initial-	scale=1" />

	</head>

	<body>
		<div>
			
		<?php

			$emailTo = "nguyenkristie00@gmail.com";
			$subject = "Subject";
			$body = "Some message";
			$headers = "From: nguyenkristie@live.com";

			mail($emailTo, $subject, $body, $headers);

		?>

		</div>

	</body>

</html>