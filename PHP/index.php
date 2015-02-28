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

			<form method="post">
				
			<label for="name">Name</label>
			<input name="name" type="text" />

			<input type="submit" name="submit" value="Submit Your Name" />


			</form>

		</div>

	</body>

		<?php

		/* using POST variables */

		$names = array("Kay", "Tee", "Don");

		if ($_POST["submit"])
		{
			if ($_POST["name"])
			{
				foreach ($names as $name)
				{
					if($_POST["name"] == $name)
					{
						echo "Welcome back, ".$name;
						$existingUser = true;
					}
				}
				if (!$existingUser)
				{
					echo "Welcome, ".$_POST['name'];
				}
			}

			else
			{
				echo "Please enter your name";
			}
		}


		/* 

		email using PHP

		$emailTo = "nguyenkristie00@gmail.com";
		$subject = "Subject";
		$body = "Some message";
		$headers = "From: nguyenkristie@live.com";

		if (mail($emailTo, $subject, $body, $headers))
		{
			echo "Mail sent successfully";
		}
		else
		{
			echo "Mail not sent";
		} 

		*/

		?>

</html>