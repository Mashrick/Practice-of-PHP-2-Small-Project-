
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Biodata</title>
</head>
<body>

	<?php

		if (isset($_POST['btn'])) {
			$username = $_POST['user_name'];

			$email = $_POST['email'];

			$phone = $_POST['phone_number'];

			$dob = $_POST['date_of_birth'];

			$age = $_POST['age'];
		}

	?>

	
	<h3> Username: <?php
		if (isset($username)) {
			echo $username;
		} ?> </h3>

	<h3> Email: <?php
		if (isset($email)) {
			echo $email;
		} ?> </h3>	

	<h3> Phone: <?php
		if (isset($phone)) {
			echo $phone;
		} ?> </h3>	

	<h3> Date of Birth: <?php
		if (isset($dob)) {
			echo $dob;
		} ?> </h3>	

	<h3> Age: <?php
		if (isset($age)) {
			echo $age;
		} ?> </h3>	

 	


</body>
</html>