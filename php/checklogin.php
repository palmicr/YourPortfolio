	<?php
 			session_start(); 
			include ("connection.php");

			// username and password sent from form 
			$myID = null;
			$myusername = null;
			$myname = null;

			$myusermail=$_POST['usermail']; 
			$mypassword=$_POST['password']; 

			$sql="SELECT userID,firstName,userName,userEmail,userPassword FROM `users` WHERE userEmail = '$myusermail' AND userPassword = '$mypassword'";
			$result = $pdo->query($sql);
				if ($result -> rowCount() == 1) {
						foreach($result as $row){

                        $_SESSION ['ID'] = $row['userID'];

                        $_SESSION ['Username'] = $row['userName'];;

                        $_SESSION ['Name'] = $row['firstName'];

                        header("Location:user.html.php");
						}
					}	
				else{
					echo "Username or Password is Wrong!";
				}

			/*if() {

			header("Location:index.html");
			}
			else {
			echo "Username or Password is Wrong!";
			}
			//$result=mysql_query($sql);

			// Mysql_num_row is counting table row
			//$count=mysql_num_rows($result);*/

			// If result matched $myusername and $mypassword, table row must be 1 row
		?>
		<form action="../index.html.php#login">
        <input type="submit" value="Try Again!">
      	</form>
