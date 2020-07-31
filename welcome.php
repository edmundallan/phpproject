
 <?php

    include "connection.php";

  ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>umuportal</title>
    <link rel="stylesheet" type="text/css" href="welcome.css">
    <link rel="icon" type="image" href="umu2.jpg">
</head>
<body>
   
    <div class="main">
        <img src="umu2.jpg" class="im"><h1 class="fo">Uganda Martyrs University</h1>
 
    </div>

<div class="ppt">
<b>WELCOME TO THE UGANDA MARTYRS UNIVERSITY ONLINE APPLICATION PORTAL</b>
</div>

<div class="fil">
<fieldset>
<b><h3>Create application.</h3></b>
<div class="md">
	 <form method="post">
<b>Application type:</b>
<select name="application_type">
<option value="select">select</option>
<option value="certificate">certificate</option>
<option value="Diploma">Diploma</option>
<option value="Bachelors Degree">Bachelors</option>
<option value="masters Degree">masters</option>
<option value="postgraduate diploma">postgraduate diploma</option></br>
</select></br><br>
<b>select intake:</b>
<select name="select_intake">
<option value="select">select</option>
<option value="jan-feb">jan-feb</option>
<option value="may-june">may-june</option>
<option value="august-september">august-september</option></br>
</select><br><br>
<b>select Branch:</b>
<select name="select_branch">
<option value="Nkozi">Nkozi</option>
<option value="Rubaga">Rubaga</option>
<option value="fortportal">fortportal</option>
<option value="Nsambya">Nsambya</option>
<option value="Kabaale">kabaale</option>
<option value="Mbaale">Mbaale</option>
<option value="Masaka">Masaka</option></br>
</select><br><br>
<input type="submit" name="apply" value="Apply">
</div>

<?php

    if (isset($_POST['apply'])) {
      
      $application_type = $_POST['application_type'];
      $select_intake = $_POST['select_intake'];
      $select_branch = $_POST['select_branch'];
     
        $query = "INSERT INTO select_table (application_type, select_intake, select_branch)
                    VALUES ('$application_type','$select_intake','$select_branch')";

        $result = $connection -> query($query);

        if ($result) {

    
          echo ("<meta http-equiv='refresh' content='0;URL=personal.php'>");

        } else {
          echo "Sorry, we encountered a problem";
        }
}
  ?>
</form>
 

Application Fee is 50,000 UGX (Excluding bank Fee.)<br>
Application start date<br><br><br>

Please make sure that you have below mentioned scanned documents before filling in the application forms<br>
Documents List:<br>
<ol> <li>Passport Size photo(100kb)</li> <li>Birth Certificate(500kb)</li> <li>O Level Certificate/Pass slip Or Equivalent(500kb)</li> <li>Degree/Diploma/Certificate/Pass slip(if required)(500kb)</li><li>
Previous institution/school identification card(500kb)</li> </ol><br>
</fieldset>
</div><br>
<div class="lst">
<b>Uganda Martyrs University, P.O.Box, Kampala Uganda.</b><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>