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

							<form name="register" action="InsertMedlimur.php" method="post" accept-charset="utf-8">
			
							<ul>
								<li>
									<label for="username">Username</label>
									<input type="text" name="username" placeholder="" required>
								</li>
								<li>
									<label for="usermail">Email</label>
									<input type="email" name="usermail" placeholder="" required>
								</li>
								<li>
									<label for="nafn">Full Name</label>
									<input type="text" name="nafn" placeholder="" required>
								</li>
								<li>
									<label for="password">Password</label>
									<input type="password" name="password" required></li>
								</li>
							</ul>
									<input type="submit" value="Register">

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