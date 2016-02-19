<!DOCTYPE HTML>
<html>
	<head>
		<title>YourPortfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="shortcut icon" type="image/x-icon" href="../img/icon.ico" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="../images/avatar.jpg" alt="" /></span>
							<h1 id="title">YourPortfolio</h1>
						</div>

				</div>

				<div class="bottom">
					
				</div>

			</div>
		<!-- Main -->
			<div id="main">

					<section id="contact1" class="four">
						<div class="container">

							<header>
								<h2>Create a Free Account</h2>
							</header>

							<form name="register" action="" method="post" accept-charset="utf-8">
							<?php  

							$errors = [];
							$missing = [];

							if (isset($_POST['register'])) {
								$to = 'palmi@gmail.com';

								$expected = ['user','email','fnafn','password'];
								$required = ['user','email','fnafn','lnafn','password'];
								require 'processmail.php';
							}

							?>
							<ul>
								<li>
									<label for="username">Username 
										<?php if ($missing && in_array('user', $missing)) { ?>
										 <span class="warning">Please enter your Username</span>
										 <?php } ?>
									</label>
									<input id="user" type="text" name="username">
								</li>
								<li>
									<label for="usermail">Email </label>
									<input type="email" name="usermail">
								</li>
								<li>
									<label for="fnafn">First Name</label>
									<input type="text" name="fnafn">
								</li>
								<li>
									<label for="lnafn">Last Name</label>
									<input type="text" name="lnafn">
								</li>
								<li>
									<label for="password">Password</label>
									<input id="password" type="password" name="password"></li>
								</li>
							</ul>
							<div class="g-recaptcha" data-sitekey="6LfpbxgTAAAAAIWRy8__wKTkt4Ai0YcZ8kx8iHi1"></div>
							<?php if ($missing || $errors) { ?>
							 <p class="warning">Please fix the item(s) indicated.</p>
							 <?php } ?>

									<input name="register" type="submit" value="Register">
						</form>
						
						<form action="../index.html.php#login">
						<input type="submit" value="Already Have an Account? Login!">
						</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<?php 
				include "footer.php";
			 ?>

<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
			<script src='https://www.google.com/recaptcha/api.js'></script>
			<script src="assets/js/"></script>

</body>