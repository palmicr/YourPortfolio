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
	<body onload="document.registration.userid.focus();">
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

							<form name='registration' onSubmit="return formValidation();" action="" method="post" accept-charset="utf-8">  
							<ul>  
							<li><label for="userid">User Id:</label></li>  
							<li><input type="text" name="userid" size="12" /></li>  
							<li><label for="passid">Password:</label></li>  
							<li><input type="password" name="passid" size="12" /></li>  
							<li><label for="username">Name:</label></li>  
							<li><input type="text" name="username" size="50" /></li>  
							<li><label for="address">Address:</label></li>  
							<li><input type="text" name="address" size="50" /></li>  
							<li><label for="country">Continent :</label></li>  
							<li><select name="country">  
							<option selected="" value="Default">(Please select a continent)</option>  
							<option value="AF">Australia</option>  
							<option value="AL">Europe</option>  
							<option value="DZ">Asia</option>    
							<option value="AD">USA</option>  
							</select></li>  
							<li><label for="zip">ZIP Code:</label></li>  
							<li><input type="text" name="zip" /></li>  
							<li><label for="email">Email:</label></li>  
							<li><input type="text" name="email" size="50" /></li>  
							<li><label id="gender">Sex:</label></li>  
							<li><input type="radio" name="msex" value="Male" /><span>Male</span></li>  
							<li><input type="radio" name="fsex" value="Female" /><span>Female</span></li>  
							<li><label>Language:</label></li>  
							<li><input type="checkbox" name="en" value="en" checked /><span>English</span></li>  
							<li><input type="checkbox" name="nonen" value="noen" /><span>Non English</span></li>  
							<li><label for="desc">About:</label></li>  
							<li><textarea name="desc" id="desc"></textarea></li>  
							<div class="g-recaptcha" data-sitekey="6LfpbxgTAAAAAIWRy8__wKTkt4Ai0YcZ8kx8iHi1"></div>
							<li><input type="submit" name="submit" value="Submit" /></li>  
							</ul>  
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
			<script src="../assets/js/registration.js"></script>

</body>