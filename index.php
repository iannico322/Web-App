<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="shortcut icon" href="https://iannico322.github.io/My-web-page/images/icon.png" type="image/x-icon">
	<link rel="icon" href="images/icon.png">
	<title>Ian Nico Caulin</title>
</head>
<body>
	<div class="loginpage">

			<div class="boxform">
                <br><br>
				<div class="boxbutton">
				<div id="btn"></div>
					
                    <button type="button" class="tap" onclick="login()">Log In</button></a>
					<button type="button" class="tap" onclick="register()">Register</button>
			</div>
                
				<form id="login" class="form" action="home2.html" >
					<input type="number" class="input" placeholder="ID Number"  required="required">
					<input type="Password" class="input" placeholder="Password" required="required">
                    <br><br><br>
					<button type="submit" class="submit-btn">Login</button>
				</form>

				<form id="register" class="form" action="home.html">
					<input type="text" class="input" placeholder="Name" required="required" >
					<input type="Email" class="input" placeholder="Email" required="required">
					<input type="text" class="input" placeholder="Contact #" required="required">
					<input type="Password" class="input" placeholder="Password" required="required">
                    <br> <br>
					<button type="submit" class="submit-btn">Register</button>
				</form>
			</div>
		</div>
<script type="text/javascript" src="js/index.js"></script>
</body>
</html>