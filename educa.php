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
</body>
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
$sql = ("SELECT * FROM  education");
    $results = $mysqli->query($sql);

echo '<table border="10" height="" width="">';
    echo "<tr>
            
        
            <th>AppNo</th>
            <th>Olevel school</th>
            <th>Year </th>
            <th>Index no</th>
            <th>English language</th>
            <th>English grade</th>
            <th>Biology</th>
            <th>biology grade</th>
			<th>Chemistry</th>
            <th>chemisty grade</th>
            <th>Physics</th>
            <th>physics grade</th>
            <th>Mathematics</th>
            <th>math grade</th>
            <th>Geograghy</th>
            <th>geograghy grade</th>
			<th>History</th>
            <th>history grade</th>
            <th>Religious Education</th>
            <th>Religious Education grade</th>
            <th>Agriculture principles and practices</th>
            <th>Agriculture grade</th>
            <th>Commerce </th>
            <th>commerce grade</th>
			<th>Entrepreneurship Education</th>
            <th>Entrepreneurship grade</th>
            <th>Home Economics</th>
            <th>Home Economics_grade</th>
			
			<th>Computer Studies</th>
            <th>Computer Studies_grade </th>
            <th>Fine Art</th>
            <th>fine art grade</th>
            <th>Literature in English</th>
            <th>literature grade</th>
            <th>Kiswahilli</th>
			
            <th>kiswahili grade</th>
			<th>Music</th>
			<th>music grade</th>
			<th> Techical Drawing</th>
			<th>Techical Drawing grade</th>
			<th>French</th>
			<th>french grade</th>
			<th>latine</th>
			<th>latine grade</th>
			<th>agregrade</th>
			<th>Overall grade</th>
			<th>Examining Authority</th>
			 <th>Alevel school</th>
            <th>Alevel year</th>
            <th>Alevel index</th>
            <th>combination offered</th>
            <th>subject1</th>
            <th>sub1 points</th>
			<th>subject2</th>
            <th>sub2 points</th>
            <th>subject3</th>
            <th>sub3 points</th>
            <th>Subsiduaries</th>
            <th>sub grade</th>
            <th>Points overall</th>
            <th> Examination authority</th>
			<th>Name of institute</th>
            <th>Qualifications</th>
       
          
            </tr>";

while($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['AppNo']."</td>";
    echo "<td>".$row['Olevel_school']."</td>";
    echo "<td>".$row['Olevel_year']."</td>";
    echo "<td>".$row['index_olevel']."</td>";
     echo "<td>".$row['English_language']."</td>";
     echo "<td>".$row['English_grade']."</td>";
    echo "<td>".$row['Biology']."</td>";
     echo "<td>".$row['biology_grade']."</td>";
	 echo "<td>".$row['Chemistry']."</td>";
	 echo "<td>".$row['chemisty_grade']."</td>";
	 echo "<td>".$row['Physics']."</td>";
    echo "<td>".$row['physics_grade']."</td>";
    echo "<td>".$row['Mathematics']."</td>";
    echo "<td>".$row['math_grade']."</td>";
     echo "<td>".$row['Geograghy']."</td>";
     echo "<td>".$row['geograghy_grade']."</td>";
    echo "<td>".$row['History']."</td>";
     echo "<td>".$row['history_grade']."</td>";
	 echo "<td>".$row['Religious_Education']."</td>";
	 echo "<td>".$row['Religious_Education_grade']."</td>";
	 echo "<td>".$row['Agriculture_principles_and_practices']."</td>";
    echo "<td>".$row['Agriculture_grade']."</td>";
    echo "<td>".$row['Commerce']."</td>";
    echo "<td>".$row['commerce_grade']."</td>";
     echo "<td>".$row['Entrepreneurship_Education']."</td>";
     echo "<td>".$row['Entrepreneurship_grade']."</td>";
    echo "<td>".$row['Home_Economics']."</td>";
     echo "<td>".$row['Home_Economics_grade']."</td>";
	 
	  echo "<td>".$row['Computer_Studies']."</td>";
	 echo "<td>".$row['Computer_Studies_grade']."</td>";
	 echo "<td>".$row['Fine_Art']."</td>";
    echo "<td>".$row['fine_art_grade']."</td>";
    echo "<td>".$row['Literature_in_English']."</td>";
    echo "<td>".$row['literature_grade']."</td>";
     echo "<td>".$row['Kiswahilli']."</td>";
   
	 echo "<td>".$row['kiswahili_grade']."</td>";
    echo "<td>".$row['Music']."</td>";
     echo "<td>".$row['music_grade']."</td>";
	 echo "<td>".$row['Techical_Drawing']."</td>";
	 echo "<td>".$row['Techical_Drawing_grade']."</td>";
	 echo "<td>".$row['French']."</td>";
    echo "<td>".$row['french_grade']."</td>";
    echo "<td>".$row['latine']."</td>";
    echo "<td>".$row['latine_grade']."</td>";
     echo "<td>".$row['agregrade']."</td>";
     echo "<td>".$row['Overall_grade']."</td>";
    echo "<td>".$row['Examining_Authority']."</td>";
	  echo "<td>".$row['Alevel_school']."</td>";
	 echo "<td>".$row['Alevel_year']."</td>";
	 echo "<td>".$row['Alevel_index']."</td>";
    echo "<td>".$row['combination_offered']."</td>";
    echo "<td>".$row['subject1']."</td>";
    echo "<td>".$row['sub1_points']."</td>";
     echo "<td>".$row['subject2']."</td>";
   
	 echo "<td>".$row['sub2_points']."</td>";
    echo "<td>".$row['subject3']."</td>";
     echo "<td>".$row['sub3_points']."</td>";
	 echo "<td>".$row['Subsiduaries']."</td>";
	 echo "<td>".$row['sub_grade']."</td>";
	 echo "<td>".$row['Points_overall']."</td>";
    echo "<td>".$row['Examination_authority']."</td>";
    echo "<td>".$row['Name_of_institute']."</td>";
    echo "<td>".$row['Qualifications']."</td>";

    echo "</tr>";
}  
echo '</table>';


// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();
?>
<a href="choi.php">next page</a>

<div class="lst">
<i>Uganda Martyrs University, P.O.Box, Kampala Uganda.</i><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>