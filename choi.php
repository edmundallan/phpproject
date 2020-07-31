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
$sql = ("SELECT * FROM  choices");
    $results = $mysqli->query($sql);

echo '<table border="10" height="" width="1000">';
    echo "<tr>
            
        
            <th>AppNo</th>
            <th>Certificate choice1</th>
            <th>Certificate choice2</th>
            <th>Certificate choice3</th>
            <th>Certificate choice4</th>
            <th>Certificate choice5</th>
            <th>Certificate choice6</th>
            <th>Diploma choice1</th>
			<th>Diploma choice2</th>
            <th>Diploma choice3</th>
            <th>Diploma choice4</th>
            <th>Diploma choice5</th>
            <th>Diploma choice6</th>
            <th>Bachelor choice1</th>
            <th>Bachelor choice2</th>
            <th>Bachelor choice3</th>
			<th>Bachelor choice4</th>
            <th>Bachelor choice5</th>
            <th>Bachelor choice6</th>
            <th>Diplong1</th>
            <th>Diplong2</th>
            <th>Diplong3</th>
            <th>Bachelorlong1</th>
            <th>Bachelorlong2</th>
			<th>Bachelorlong3</th>
           
            </tr>";

while($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['AppNo']."</td>";
    echo "<td>".$row['Certificate_choice1']."</td>";
    echo "<td>".$row['Certificate_choice2']."</td>";
    echo "<td>".$row['Certificate_choice3']."</td>";
     echo "<td>".$row['Certificate_choice4']."</td>";
     echo "<td>".$row['Certificate_choice5']."</td>";
    echo "<td>".$row['Certificate_choice6']."</td>";
     echo "<td>".$row['Diploma_choice1']."</td>";
	 echo "<td>".$row['Diploma_choice2']."</td>";
	 echo "<td>".$row['Diploma_choice3']."</td>";
	 echo "<td>".$row['Diploma_choice4']."</td>";
    echo "<td>".$row['Diploma_choice5']."</td>";
    echo "<td>".$row['Diploma_choice6']."</td>";
    echo "<td>".$row['Bachelor_choice1']."</td>";
     echo "<td>".$row['Bachelor_choice2']."</td>";
     echo "<td>".$row['Bachelor_choice3']."</td>";
    echo "<td>".$row['Bachelor_choice4']."</td>";
     echo "<td>".$row['Bachelor_choice5']."</td>";
	 echo "<td>".$row['Bachelor_choice6']."</td>";
	 echo "<td>".$row['Diplong1']."</td>";
	 echo "<td>".$row['Diplong2']."</td>";
    echo "<td>".$row['Diplong3']."</td>";
    echo "<td>".$row['Bachelorlong1']."</td>";
    echo "<td>".$row['Bachelorlong2']."</td>";
     echo "<td>".$row['Bachelorlong3']."</td>";
  
}  
echo '</table>';


// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();
?>
<a href="docm.php">next page</a>

<div class="lst">
<i>Uganda Martyrs University, P.O.Box, Kampala Uganda.</i><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>