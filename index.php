<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="resources/css/login.css">
	<link rel="shortcut icon" href="https://iannico322.github.io/My-web-page/images/icon.png" type="image/x-icon">
	<link rel="stylesheet" href="resources/css/status.css">
	<link rel="stylesheet" href="resources/css/loader.css">
	<title>Ian Nico Caulin</title>
</head>

<body>
	<div class="loader-wrapper">
		<span class="loader"><span class="loader-inner"></span>
	</div>

	<script>
		$(window).on("load", function() {
			$(".loader-wrapper").fadeOut("slow");
		});
	</script>


	<?php include("SQLconnect.php"); ?>
	<div class="loginpage">

		<div class="boxform">

			<?php
			$myfile = fopen("resources/cache/cache.txt", "w") or die("Unable to open file!");
			fwrite($myfile, "");
			fclose($myfile);
			?>


			<br>
			<div class="boxbutton">
				<div id="btn"></div>

				<button type="button" class="tap" onclick="login()">Log In</button></a>
				<button type="button" class="tap" onclick="register()">Register</button>
			</div>

			<form id="login" class="form" method="POST" action="authentication.php">
				<input type="text" class="input" name="studID" placeholder="ID Number" required="required">
				<input type="Password" class="input" name="lastName" placeholder="Password" required="required">
				<br><br><br>
				<button type="submit" class="submit-btn">Login</button>
			</form>

			<form id="register" class="form" method="POST" action="register.php">
				<input type="text" class="input" name="studID" placeholder="Student ID" required="required">
				<input type="text" class="input" name="firstName" placeholder="First Name" required="required">
				<input type="text" class="input" name="lastName" placeholder="Last Name" required="required">
				<input type="text" class="input" name="MI" placeholder="MI" required="required">
				<input type="text" class="input" name="course" placeholder="Course" required="required">
				<input type="text" class="input" name="yearLevel" placeholder="Year Level" required="required">
				<br> <br>
				<button type="submit" class="submit-btn">Register</button>
			</form>
		</div>
	</div>
	<script type="text/javascript" src="resources/js/slider.js"></script>
</body>

</html>