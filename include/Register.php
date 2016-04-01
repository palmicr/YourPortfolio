<?php
$errors = [];

if (isset($_POST['register'])) {
    $firstname = trim($_POST['username']);
    $email = trim($_POST['email']);
    $username = trim($_POST['userid']);
    $password = trim($_POST['passid']);

    require_once 'php/connection.php';
    require_once 'php/Users.php';

    $dbUsers = new Users($conn);
    $status = $dbUsers->newUser($firstname,$email,$username,$password);

    if ($status) {
        $success = "$username has been registered. You may now log in.";
    }else{
        $errors[] = "$username is already in use. Please choose another username.";
    } 
}

?>

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

							<?php
							if (isset($success)) {
							    echo "<p>$success</p>";
							} elseif (isset($errors) && !empty($errors)) {
							    echo '<ul>';
							    foreach ($errors as $error) {
							        echo "<li>$error</li>";
							    }
							    echo '</ul>';
							}else{
							?>

							<header>
								<h2>Create a Free Account</h2>
							</header>

							<form name='registration' onSubmit="return formValidation();" action="" method="post" accept-charset="utf-8">  
							<ul>  
							<li>
								<label for="userid">User Name:</label>
								<input type="text" name="userid" id="userid" size="12" />
								</li>  
							<li>
								<label for="passid">Password:</label> 
								<input type="password" name="passid" id="passid" size="12" />
							</li>  
							<li>
								<label for="username">Name:</label> 
								<input type="text" name="username" id="username" size="50" />
							</li>  
							<li>
								<label for="country">Continent :</label>
							</li>  
							<li>
							<select name="country">  
								<option selected="" value="Default">▼(Please select a continent)▼</option>  
									<option value="AF">Australia</option>  
									<option value="AL">Europe</option>  
									<option value="DZ">Asia</option>    
									<option value="AD">USA</option>  
							</select>
							</li>  
							
							<li>
								<label for="email">Email:</label>  
								<input type="text" name="email" id="email" size="50" />
							</li>  
							<li>
							<label id="gender">Sex:</label>  
								<li>
									<input type="radio" name="msex" value="Male" /><span>Male</span> 
									<input type="radio" name="fsex" value="Female" /><span>Female</span>
								</li>
							</li> 
							<li>
							<li><label for="desc">About You:</label></li>  
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
<?php } ?>
</body>
</html>