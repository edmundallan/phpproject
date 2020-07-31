<?php

include "connection.php";

?>


<HTML>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" type="text/css" href="cont.css">
            <link rel="icon" type="image" href="umu2.jpg">
            <title>contact us</title>
    </head>
    <body>

    <div class="container">

        <h1>CONTACT US </h1>
    

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
    
        

    Date of Contact <br>
    <input type="date" name="date">
    
    Office contacted
    <select name="dropdown">
    <option value="Register's">Register's</option>
    <option value="Dean's Office">Dean's Office</option>
    <option value="Vise Chansoler">Vc</option>
    <option value="Faculty">Faculty</option>
    </select><br>
    <table>
    <tr><td></td>Message</td><td><textarea rows=9 cols=30 name="comment">Type Your Message</textarea><br></td></tr>
    </table>
   
    <input type="submit"value="send" name="contact"><br><br>
    
   
    </form>

    <?php

if (isset($_POST['contact'])) {
    
    $first_name = $_POST['first_name'];
    $second_name = $_POST['second_name'];
    $email = $_POST['email'];
    $date = $_POST['date'];
    $dropdown = $_POST['dropdown'];
    $comment = $_POST['comment'];
        $query = "INSERT INTO contact (first_name, second_name, email, date, dropdown, comment)
                                VALUES ('$first_name','$second_name','$email','$date','$dropdown','$comment')";

        $result = $connection -> query($query);

        if ($result) {

            
            echo ("<meta http-equiv='refresh' content='0;URL=index.php'>");

        } else {
            echo "Sorry, we encountered a problem";
        }

    }



?>



    </BODY>
    </HTML>