<?php

echo '<section id="login" class="four">
						<div class="container">

							<header>
								<h2>Login</h2>
							</header>

							<form name="login" action="checklogin.php" method="post" accept-charset="utf-8">
				
							<ul>
								<li>
									<label for="usermail">Email</label>
									<input type="email" name="usermail" required>
								</li>
								<li>
									<label for="password">Password</label>
									<input type="password" name="password" required></li>
								
							</ul>

							<input type="submit" value="Login">
							</form>

						<form action="Register.php">
							<input type="submit" value="Dont Have an Account? Register!">
						</form>

						</div>
					</section>';


?>