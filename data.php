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
$sql = ("SELECT * FROM  students");
    $results = $mysqli->query($sql);

echo '<table border="10" height="" width="">';
    echo "<tr>
            
        
            <th>AppNo</th>
            <th>FIRST NAME</th>
            <th> SECOND NAME </th>
            <th> OTHER NAME</th>
            <th> EMAIL</th>
            <th> GENDER</th>
            <th> MARITAL STATUS</th>
            <th> TEL NO</th>
			<th>DATE OF BIRTH</th>
            <th>COUNTRY OF RESIDENCE</th>
            <th> DISTRICT OF BIRTH </th>
            <th>NATIONALITY </th>
            <th> RELIGIOUS AFLIATION</th>
            <th>COUNTRY </th>
            <th>COUNTY/DIVISION </th>
            <th>ADDRESS LINE1 </th>
			<th>ADDRESS LINE2 </th>
            <th>DISTRICT </th>
            <th>VILLAGE  </th>
            <th> FATHERS NAME</th>
            <th> FATHERS MOBILE</th>
            <th>FATHERS EMAIL </th>
            <th>MOTHERS NAME </th>
            <th>MOTHERS MOBILE </th>
			<th>MOTHERS EMAIL </th>
            <th>GUARDIANS NAME </th>
            <th>GUARDIANS MOBILE </th>
            <th>GUARDIANS EMAIL </th>
			
			<th>NONE </th>
            <th>DYSLEXIA</th>
            <th> DEAF HEARING IMPAIRED </th>
            <th> WHEELCHAIR USER</th>
            <th> UNSEEN DISABILITY</th>
            <th>BLIND PARTIALLY </th>
            <th>OTHERS </th>
			
            <th>PRINT ADVERTISEMENT </th>
			<th>RADIO/TV ADVERTISEMENT </th>
			<th>CURRENT STUDENT/ALUMNI </th>
			<th> SCHOOL TALKS</th>
			<th>INTERNET SEARCH </th>
			<th>SOCIAL MEDIA </th>
			<th>OPEN DAY </th>
			<th>OTHER STATE BELOW </th>
			<th> NEXT OF KINS NAME </th>
			<th>NEXT OF KINS MOBILE </th>
			<th>NEXT OF KINS COUNTRY </th>
			<th> NEXT OF KINS EMAIL </th>
          
            
            </tr>";

while($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td>".$row['AppNo']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['secondname']."</td>";
    echo "<td>".$row['othername']."</td>";
     echo "<td>".$row['email']."</td>";
     echo "<td>".$row['gender']."</td>";
    echo "<td>".$row['marital_status']."</td>";
     echo "<td>".$row['tel_no']."</td>";
	 echo "<td>".$row['date_of_birth']."</td>";
	 echo "<td>".$row['country_of_residence']."</td>";
	 echo "<td>".$row['district_of_birth']."</td>";
    echo "<td>".$row['nationality']."</td>";
    echo "<td>".$row['religious_afliation']."</td>";
    echo "<td>".$row['country']."</td>";
     echo "<td>".$row['county_division']."</td>";
     echo "<td>".$row['address_line1']."</td>";
    echo "<td>".$row['address_line2']."</td>";
     echo "<td>".$row['district']."</td>";
	 echo "<td>".$row['village']."</td>";
	 echo "<td>".$row['fathers_name']."</td>";
	 echo "<td>".$row['fathers_mobile']."</td>";
    echo "<td>".$row['fathers_email']."</td>";
    echo "<td>".$row['mothers_name']."</td>";
    echo "<td>".$row['mothers_mobile']."</td>";
     echo "<td>".$row['mothers_email']."</td>";
     echo "<td>".$row['guardians_name']."</td>";
    echo "<td>".$row['guardians_mobile']."</td>";
     echo "<td>".$row['guardians_email']."</td>";
	 
	  echo "<td>".$row['none']."</td>";
	 echo "<td>".$row['dyslexia']."</td>";
	 echo "<td>".$row['deaf_hearing_impaired']."</td>";
    echo "<td>".$row['wheelchair_user']."</td>";
    echo "<td>".$row['unseen_disability']."</td>";
    echo "<td>".$row['blind_partially']."</td>";
     echo "<td>".$row['others']."</td>";
   
	 echo "<td>".$row['print_advertisement']."</td>";
    echo "<td>".$row['radio_tv_advertisement']."</td>";
     echo "<td>".$row['current_student_alumni']."</td>";
	 echo "<td>".$row['school_talk']."</td>";
	 echo "<td>".$row['internet_search']."</td>";
	 echo "<td>".$row['social_media']."</td>";
    echo "<td>".$row['open_day']."</td>";
    echo "<td>".$row['others_state_below']."</td>";
    echo "<td>".$row['next_of_kins_name']."</td>";
     echo "<td>".$row['next_of_kins_mobile']."</td>";
     echo "<td>".$row['next_of_kins_country']."</td>";
    echo "<td>".$row['next_of_kins_email']."</td>";
   
    echo "</tr>";
}  
echo '</table>';


// Frees the memory associated with a result
$results->free();

// close connection 
$mysqli->close();
?>
<a href="educa.php">next page</a>

<div class="lst">
<i>Uganda Martyrs University, P.O.Box, Kampala Uganda.</i><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>