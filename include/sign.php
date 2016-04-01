<section id="login" class="four">
						<div class="container">

							<header>
								<h2>Login</h2>
							</header>

							<form name="login" action="php/checklogin.php" method="post" accept-charset="utf-8">
				
							<ul>
								<li>
									<label for="usermail">Email</label>
									<input type="email" name="usermail" required>
								</li>
								<li>
									<label for="password">Password</label>
									<input type="password" name="password" required></li>
								
							</ul>

							<div class="g-recaptcha" data-sitekey="6LfpbxgTAAAAAIWRy8__wKTkt4Ai0YcZ8kx8iHi1"></div>


							<input type="submit" value="Login">
						</form>

						<form action="include/Register.php">
							<input type="submit" value="Dont Have an Account? Register!">
						</form>

						</div>
					</section>