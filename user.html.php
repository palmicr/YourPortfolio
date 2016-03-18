<?php
# use keyword must be declared at the top level of a script. It cannot be nested inside a conditional statement.
use php\file_upload; # declaration, so you can refer to the class as Upload rather than using the fully qualified name

if (isset($_POST['upload'])) {
    
    echo "<pre>";
    print_r($_FILES);  # Skoðum skráarupplýsingar
    echo "</pre>";
    // define the path to the upload folder
    $destination = $_SERVER['DOCUMENT_ROOT'] . "/2t/2603982299/VEF2A3U/User/images/";  # Þú þarft að breyta slóð.
    // svo við getum notað class með t.d. move() fallið og getMessage() ogsfrv...
    require_once 'php/file_upload.php';
    // Because the object might throw an exception
    try {
        // búum til upload object til notkunar.  Sendum argument eða slóðina að upload möppunni sem á að geyma skrá
        $loader = new Upload($destination);
        // köllum á og notum move() fallið sem færir skrá í upload möppu, þurfum að gera þetta strax.
        $loader->upload();
        // köllum á getMessage til að fá skilaboð (error or not).
        $result = $loader->getMessages();

    } catch (Exception $e) {
        echo $e->getMessage();  # ef við náum ekki að nota Upload class
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
							<h1 id="title">Your Name</h1>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#upload" id="upload-link" class="skel-layers-ignoreHref"><span class="icon fa-upload">Upload</span></a></li>
								<li><a href="#" id="logout-link" class="skel-layers-ignoreHref"><span class="icon fa-sign-out">Sign Out</span></a></li>

							</ul>
						</nav>

				</div>

				<div class="bottom">
					
				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Home -->
					<section id="top" class="one dark cover" style='background-image: url("<?php include "include/randimg.php"; ?>")'>
						<?php 
							include "include/intro.php";
			 			?>
					</section>

				<!-- Portfolio -->
					<section id="portfolio" class="two">
						<div class="container">

							<header>
								<h2>Portfolio</h2>
							</header>

							<p>About You</p>

							<div class="row">
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/snu1.jpg" alt="" /></a>
										<header>
											<h3>A Quiet Night</h3>
										</header>
									</article>
								</div>

								
							</div>

						</div>
					</section>

					<!-- Contact -->

					<?php 
						include "include/upload.php";
			 		?>
					
			</div>

			
		<!-- Footer -->
			<?php 
				include "include/footer.php";
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
	</body>
</html>