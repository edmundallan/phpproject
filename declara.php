<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Declaration</title>
    <link rel="stylesheet" type="text/css" href="declara.css">
    <link rel="icon" type="image" href="umu2.jpg">
</head>
<body>
    <div class="main">
        <img src="umu2.jpg" class="im"><h1 class="fo">Uganda Martyrs University</h1>
 
            
        <div class="rightdiv">
    <ol>
    
        <li><a href="index.php" class="none">Home</a></li>
        <li><a href="about.php" class="none">About us</a></li>
        <li><a href="contact.php" class="none">Contact us</a></li>
        <li><a href="login.php" class="none">Login</a></li>
                  
    
    </ol>
    </div>
    </div>
    <div class="mak">
        <marquee><h2>UMU-Nkozi main branch,   UMU-Nsambya,   UMU-Rubaga,   UMU-Masaka,   UMU-Fortportal,   UMU-Mbale,   UMU-Kabaale </h2></marquee>
        </div>
        <div class="ppt">
            <table cellpadding="2" cellspacing="2" width="100%"><tr><td><h2><a href="personal.php" class="none">Personal_info</a></h2>
              </td><td><h2><a href="education.php" class="none">Educational_info</a></h2>
                 </td><td><h2><a href="choice.php" class="none">Program Choice</a></h2>
                    </td><td><h2><a href="document.php" class="none">Documents</a></h2>
                    </td><td class="table"><h2><a href="declara.php" class="none1">Declaration</a></h2>
                      </td><td><h2><a href="com.php" class="none">Confirmation</a></h2></td></tr></table>
               </div>
        <div class="per">
        <b>declaration</b>
        </div>
        <div class="ffs">
            <form method="post">
        <fieldset>
        <h3>I confirm that the information given  above is to the best of my knowledge true, correct and accurate.</h3><br><br>
        Full Name:<input type="text" name="fullname" size="40"><div class="center">Date:<input type="date" name="date"></div><br>
        Email:   <input type="Email" name="email" size="40">
        <div class="center"><input type="submit" name="continue"  value="SUBMIT"></div>
        </fieldset>
        </form>
        
        <?php


$connection = new mysqli("localhost","root","","umuregistration");

if (isset($_POST['continue'])) {

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$date = $_POST['date'];


$query = "INSERT INTO declaration (fullname,email,date)
                                  VALUES ('$fullname','$email','$date')";



  $result = $connection -> query($query);

  if ($result) {

    
    echo ("<meta http-equiv='refresh' content='0;URL=com.php'>");

  } else {
    echo "Sorry, we encountered a problem";
  }
}
?>



        </div><br>
        <div class="lst">
        <div class="center">Uganda Martyrs University, P.O.Box, Kampala Uganda.</div><br>
        <div class="center1">Tel: +256-382 410 611 Fax: +256-382 410100
        Email:umu@umu.ac.ug
        Web:www.umu.ac.ug<br>
        &copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY</div>
        </div>
</body>
</html>