<!DOCTYPE HTML>
<html>
	<head>
		<title>YourPortfolio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">YourPortfolio</h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Sign In/Out</span></a></li>

							</ul>
						</nav>

				</div>

				<div class="bottom">
					
				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Home -->
					<section id="top" class="one dark cover" style='background-image: url("<?php include "php/randimg.php"; ?>")'>
						<div class="container">

							<header>
								<h2 class="alt">Welcome To YourPortfolio</strong></h2>
								<p> The Online Photo Album for Artist, Students and The Average Worker</p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">▼</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Portfolio</h2>
							</header>

							<p>Mike is a student in Stanford Community College.
								He wants to be a graphics designer at his very own GFX studio.
								Be like Mike</p>

							<div class="row">
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/snu1.jpg" alt="" /></a>
										<header>
											<h3>A Quiet Night</h3>
										</header>
									</article>
								</div>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/snu2.jpg" alt="" /></a>
										<header>
											<h3>Cold Morning</h3>
										</header>
									</article>
								</div>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/snu3.jpg" alt="" /></a>
										<header>
											<h3>Misteries of the Night</h3>
										</header>
									</article>
								</div>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/sunrise1.jpg" alt="" /></a>
										<header>
											<h3>Dreamland</h3>
										</header>
									</article>
								</div>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/sunrise2.jpg" alt="" /></a>
										<header>
											<h3>Bespin Cloud City</h3>
										</header>
									</article>
								</div>

								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/sunrise3.jpg" alt="" /></a>
										<header>
											<h3>Fantasia</h3>
										</header>
									</article>
								</div>

							</div>

						</div>
					</section>

					<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Sign In / Sign Up</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

							
						</div>
					</section>


			</div>

			
		<!-- Footer -->
			<?php 
				include "php/footer.php";
			 ?>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>