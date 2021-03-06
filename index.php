<!DOCTYPE html>
<html >
	<head>
		<meta charset="UTF-8">
		<title>Krusty Kookies</title>

		<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

		<link rel="stylesheet" href="css/reset.css">

		<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
		<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

		<link rel="stylesheet" href="css/style.css">

	</head>
	<body>


		<!-- Mixins-->
		<!-- Pen Title-->
		<div class="pen-title">
			<h1>Krusty Kookies</h1>
		</div>
		<div class="container">
			<div class="card"></div>
			<div class="card">
				<h1 class="title">Login</h1>
				<form method="post" id="form-login">
					<div class="input-container">
						<input type="text" name="username" required="required"/>
						<label for="username">Username</label>
						<div class="bar"></div>
					</div>
					<div class="input-container">
						<input type="password" name="password" required="required"/>
						<label for="password">Password</label>
						<div class="bar"></div>
					</div>
					<div class="button-container">
						<button id="btn-login"><span>Go</span></button>
						<div style="margin-top: 10px; display: none;" id="login-error" class="alert alert-danger"></div>
					</div>
				</form>
			</div>
			<div class="card alt">
				<div class="toggle"></div>
				<h1 class="title">Register
					<div class="close"></div>
				</h1>
				<form method="post" id="form-register">
					<div class="input-container">
						<input type="text" id="Username" name="username" required="required"/>
						<label for="Username">Username</label>
						<div class="bar"></div>
					</div>
					<div class="input-container">
						<input type="password" id="password" name="password" required="required"/>
						<label for="password">Password</label>
						<div class="bar"></div>
					</div>
					<div class="input-container">
						<input type="password" id="repeat password" name="rep_password" required="required"/>
						<label for="repeat password">Repeat Password</label>
						<div class="bar"></div>
					</div>
					<div class="button-container">
						<button id="btn-register"><span>Register</span></button>
						<div style="margin-top: 10px; display: none;" id="register-error" class="alert alert-danger"></div>
						<div style="margin-top: 10px; display: none;" id="register-success" class="alert alert-success"></div>
					</div>
				</form>
			</div>
		</div>
		<!--
	  <a id="portfolio" href="http://andytran.me/" title="View my portfolio!"><i class="fa fa-link"></i></a>
	  <a id="codepen" href="http://codepen.io/andytran/" title="Follow me!"><i class="fa fa-codepen"></i></a>
		-->

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src="js/index.js"></script>
	</body>
</html>
