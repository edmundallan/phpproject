<html>
<head>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UMU</title>
    <link rel="stylesheet" type="text/css" href="courses.css">
    <link rel="icon" type="image" href="umu2.jpg">

</head>

<body>
<div class="main">
            <img src="umu2.jpg" class="im"><h1 class="fo"><b>U</b>ganda <b>M</b>artyrs <b>U</b>niversity</h1>
                     
            <div class="rightdiv">
        <ol>
        
        <li><a href="admin.php" class="none">Home</a></li>
                             
        </ol>
        </div>
        </div>
    </div>

<?php
//Open a new connection to the MySQL server
$mysqli = new mysqli('Localhost','root','','umuregistration');

//Output any connection error
if ($mysqli->connect_error) {
  die("Not connected to the Mysql server :" .$connection->connect_error) ;
}
else{
    // echo" not connected to the database";
}
//MySqli Select Query
$sql = ("SELECT * FROM  declaration");
    $results = $mysqli->query($sql);

echo '<table border="10" height="" width="1000">';
    echo "<tr>
            
        
            <th>AppNo</th>
            <th>Full name</th>
            <th>Email</th>
            <th>Date</th>
           
            </tr>";

while($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['AppNo']."</td>";
    echo "<td>".$row['fullname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['date']."</td>";
  
 
  
}  
echo '</table>';


// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();
?>
<a href="admin.php">lOGOUT</a>

<div class="lst">
<i>Uganda Martyrs University, P.O.Box, Kampala Uganda.</i><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>