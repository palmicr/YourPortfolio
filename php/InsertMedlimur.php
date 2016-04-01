
  <form action="../index.html.php#login">
  <?php
  include "connection.php";

    $uname = $_POST['userid']; 
    $pass = $_POST['passid']; 
    $email = $_POST['email'];
    $fname = $_POST['username'];
    

      //fyrirspurnin2
      $sql = 'INSERT INTO users(firstName,userPassword,userEmail,userName)
              VALUES(:userid,:passid,:email,:username)';
      $q = $pdo->prepare($sql);
      try{
        $q->bindValue(':userid',$uname);
        $q->bindValue(':passid',$pass);
        $q->bindValue(':email',$email);
        $q->bindValue(':username',$fname);
        $q->execute();
        echo "Success!! You Have Created an Account";
      } 
      catch (Exception $e) {
          echo 'Error inserting record: '.$e->getMessage();   
      }
  ?>
        <input type="submit" value="Go Login!!">
      </form>

