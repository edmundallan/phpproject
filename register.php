
	<?php

    include "connection.php";

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="reg.css">
    <link rel="icon" type="image" href="umu2.jpg">
    <title>Register</title>
</head>
<body>

        <div class="container">

                <h1>Register</h1>
            
                <form method="post">
                    <div>
                    <input type="text" name="first_name" required autocomplete="off">
                    <label>
                    First Name
                    </label>
                    </div>
            
                    <div>
                    <input type="text" name="second_name" required autocomplete="off">
                    <label>
                    Second Name
                    </label>
                    </div>
            
                    <div>
                    <input type="email" name="email" required autocomplete="off">
                    <label>
                    Email
                    </label>
                    </div>
            
                    <div>
                    <input type="text" name="username" required autocomplete="off">
                    <label>
                    Username
                    </label>
                    </div>
            
                    <div>
                    <input type="password" name="password" required>
                    <label>
                    Password
                    </label>
                    </div>
            
                    <div>
                    <input type="password" name="repeat_password" required>
                    <label>
                    Re-Enter password
                    </label>
                    </div>
                    <input type="submit" value="Register" name="register">
                </form>


                <?php

                if (isset($_POST['register'])) {
                    
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    $repeat_password = $_POST['repeat_password'];
        
                    if ($password != $repeat_password) {
                        echo "Password do not match. Please, try again.";
                    } else {
        
                        $query = "INSERT INTO register (first_name, second_name, email, username, password)
                                                VALUES ('$first_name','$second_name','$email','$username','$password')";
        
                        $result = $connection -> query($query);
        
                        if ($result) {
        
                            echo "Successfully registered. You can now login. Wait...";
                            echo ("<meta http-equiv='refresh' content='0;URL=login.php'>");
        
                        } else {
                            echo "Sorry, we encountered a problem";
                        }
        
                    }
        
                }
        
            ?>


                <br>
                <a href="index.php">HOME</a>  
            
            </div>
            
        
    
</body>
</html>