<?php

include "connection.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="icon" type="image" href="umu2.jpg">
</head>
<body>
   
    <div class="login-box">
        <img src="umu2.jpg" class="uganda">
        <h1>Login Here</h1>
    
        <form method="post">
    
          <p>Username</p>
          <input type="text" name="username" placeholder="Enter Username" autocomplete="off">
    
          <P>Password</p>
          <input type="password" name="password" placeholder="Enter Password" autocomplete="off">
    
          <input type="submit" name="login" value="Login" >
    
         
          <a href="register.php">Create account</a>
    
        </form>

        <?php

if (isset($_POST['login'])) {
        
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
  $result = $connection -> query($query);

  $exist = mysqli_num_rows($result);

  if ($exist == true) {
    echo ("<meta http-equiv='refresh' content='0;URL=welcome.php'>");
  } else {
    echo "Wrong username or password. Try again..";
  }

}

?>

</div>
</body>
</html>