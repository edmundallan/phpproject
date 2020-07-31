
<?php

include "connection.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal_info</title>
    <link rel="stylesheet" type="text/css" href="pp.css">
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
              <table  cellpadding="2" cellspacing="2" width="100%"><tr><td class="table"><h2><a href="personal.php" class="none1">Personal_info</a></h2>
                </td><td><h2><a href="education.php" class="none">Educational_info</a></h2>
                   </td><td><h2><a href="choice.php" class="none">Program Choice</a></h2>
                      </td><td><h2><a href="document.php" class="none">Documents</a></h2>
                      </td><td><h2><a href="declara.php" class="none">Declaration</a></h2>
                        </td><td><h2><a href="com.php" class="none">Confirmation</a></h2></td></tr></table>
                 </div>
              <div class="per">
            <b>personal information</b>
            </div>
        <form method="post">
        <div class="ffs">
        <fieldset>
        <table>
        <tr><td>First Name</td><td><input type="text" name="firstname" required=""></td></tr>
        <tr><td>Second name</td><td><input type="text" name="secondname" required=""></td></tr>
        <tr><td>Other names</td><td><input type="text" name="othername"></td></tr>
    
        <tr><td>Email</td><td><input type="email" name="email"></td></tr>
        </table>
        <div class="center">
        Gender: <input type="radio" name="gender" value="male">male
                <input type="radio" name="gender" value="famale">famale
                <input type="radio" name="gender" value="others">others
        </div>
        <table>
        </select>
    Marital status
    <select name="marital_status">
    <option value="single">single</option>
    <option value="married">married</option>
    <option value="others">others</option>
    </select><br>

<tr><td><div class="center">Tel No <input type="text" value="+256" size="2"> <input type="number" name="tel_no"></div></td></tr>
</table>
<div class="center">
    Date of birth <input type="date" name="date_of_birth">
                            
</div>
            </fieldset>
            </div><br>
            <div class="nat">
                    <b>Nationality information</b>
                    </div>
                    <div class="nif">
                    <fieldset>
                    <table>
                    <tr><td width="165" height="29">Country of Residence</td><td><input type="text" name="country_of_residence"></td></tr>
                    </table>
                    <center>
                    <table>
                    <tr><td width="165" height="29">Nationality</td><td><input type="text" name="nationality"></td></tr>
                    </table>
                    <div class="center">
                    <table>
                    <tr><td width="165" height="29">District of Birth</td><td><input type="text" name="district_of_birth"></td></tr>
                    </table>
                    </div>
                    <table>
                    </select>
Religious Afliation
<select name="religious_afliation">
<option value="Roman catholic">Roman catholic</option>
<option value="Pentacostal">Pentacostal</option>
<option value="Moslem">Moslem</option>
<option value="Others">Others</option>
</select>
</table>
</center>
</fieldset>


</div><br>
<div class="add">
<b>Address</b>
</div>
<div class="ads">
<fieldset>
<table>
<tr><td  width="165" height="29">Country</td>
    <td><input type="text" name="country" required=""></td></tr>
</table>
<center>
<table>
<tr><td  width="165" height="29">County_Division</td>
    <td><input type="text" name="county_division"></td></tr>
</table>
</center>
<table>
<tr><td  width="165" height="29">Address Line 1</td>
    <td><input type="text" name="address_line1"></td></tr>
</table>
<table>
<tr><td  width="165" height="29">Address Line 2</td>
    <td><input type="text" name="address_line2"></td></tr>
</table>
<center>
<table>
<tr><td  width="165" height="29">District</td>
    <td><input type="text" name="district"></td></tr>
</table>
</center>
<table>
<tr><td  width="165" height="29">Village</td>
    <td><input type="text" name="village"></td></tr>
</table>
</fieldset>
</div><br>
<div class="par">
<b>Parent's information</b>
</div>
<div class="pat">

    
<fieldset>
<table>
<tr><td width="165" height="29">Father's Name</td>
    <td><input type="text" name="fathers_name"></td></tr>
</table>
<center><table><tr><td  width="165" height="29">Mother's Name</td>
    <td><input type="text" name="mothers_name"></td></tr></table></center>
<table>
<tr><td  width="165" height="29">Father's Mobile</td>
    <td><input type="text" name="fathers_mobile"></td></tr>
</table>
<center><table><tr><td  width="165" height="29">Mother's Mobile</td>
    <td><input type="text" name="mothers_mobile"></td></tr></table></center>
<table>
<tr><td  width="165" height="29">Father's Email</td><td><input type="email" name="fathers_email"></td></tr>
</table>
<center><table><tr><td  width="165" height="29">Mother's Email</td>
    <td><input type="email" name="mothers_email"></td></tr></table></center>
<table>
<tr><td  width="165" height="29">Guardian's Name</td>
    <td><input type="text" name="guardians_name"></td></tr>
</table>
<center><table><tr><td  width="165" height="29">Guardian's Mobile</td>
    <td><input type="text" name="guardians_mobile"></td></tr></table></center>
<table>
<tr><td  width="165" height="29">Guardian's Email</td><td><input type="text" name="guardians_email"></td></tr>
</table>
</fieldset>

</div><br>
<div class="kin">
<b>Equal Opportunity</b>
</div>
<div class="nkin">


<fieldset>
Please indicate any medical condition you may have that may require adjustments to be made to the curriculum or<br>
the teaching environment.<br><br>
<table>
<tr><td><input type="checkbox" Name='none' value="yes">None</td><td><input type="checkbox" 
    Name='unseen_disability' value="yes">Unseen disability e.g Choronic conditions</td></tr>
<tr><td><input type="checkbox" Name='dyslexia' value="yes">Dyslexia</td><td>
    <input type="checkbox" Name='blind_partially' value="yes">Blind/partially sighted</td></tr>
<tr><td><input type="checkbox" Name='deaf_hearing_impaired' value="yes">Deaf/hearing impaired</td>
    <td>Others<input type="text" name="others"></td></tr>
<tr><td><input type="checkbox" Name='wheelchair_user' value="yes">Wheelchair user/mobility difficulties</td></tr>
</table>
</fieldset>
</div><br>

<div class="kin">
<b>Source of information</b>
</div>
<div class="nkin">


<fieldset>
How did you learn about Uganda Martyrs University, and the programme(s) you are applying for?<br><br>
<table>
<tr><td><input type="checkbox" Name='print_advertisement ' value="yes">Print Advertisement</td><td>
    <input type="checkbox" Name='internet_search' value="yes">Internet search/University website</td></tr>
<tr><td><input type="checkbox" Name='radio_tv_advertisement' value="yes">Radio/TV Advertisement</td><td>
    <input type="checkbox" Name='social_media' value="yes">Social Media</td></tr>social_media
<tr><td><input type="checkbox" Name='current_student_alumni' value="yes">Current Student/Alumni</td><td>
    <input type="checkbox" Name='open_day' value="yes">Open day</td></tr>
<tr><td><input type="checkbox" Name='school_talk' value="yes">School Talk/Guidance Counsellor</td>
    <td><input type="checkbox" Name='others_state_below' value="yes">Other(state Below)</td></tr>
</table>
</fieldset>


</div><br>
<div class="kin">
<b>Next of kin/Reference</b>
</div>
<div class="nkin">


<fieldset>
<table>
<tr><td width="165" height="29">Next of kin's Name</td><td><input type="text" name="next_of_kins_name"></td></tr>
</table>
<div class="center">
<table>
Next of kin's Email <input type="email" name="next_of_kins_email">

</table>
</div>
<table>
                <tr><td width="165" height="29">Next of kin's Mobile</td><td><input type="text" name="next_of_kins_mobile"></td></tr>
                 <tr><td width="165" height="29">Next of kin's country</td><td><input type="text" name="next_of_kins_country"></td></tr>
</table>
     <div class="center"><input type="submit"  value="SUBMIT" name="continue"></div>
</fieldset>
</div><br>

</form>

<?php

    if (isset($_POST['continue'])) {
      
      $firstname = $_POST['firstname'];
      $secondname = $_POST['secondname'];
      $othername = $_POST['othername'];
      $email = $_POST['email'];
       $gender = $_POST['gender'];
        $marital_status = $_POST['marital_status'];
         $tel_no = $_POST['tel_no'];
          $date_of_birth = $_POST['date_of_birth'];
           $country_of_residence = $_POST['country_of_residence'];
            $district_of_birth = $_POST['district_of_birth'];
             $nationality = $_POST['nationality'];
              $religious_afliation = $_POST['religious_afliation'];
               $country  = $_POST['country'];
                $county_division  = $_POST['county_division'];
                 $address_line1   = $_POST['address_line1'];
                  $address_line2  = $_POST['address_line2'];
                 $district   = $_POST['district'];
                  $village   = $_POST['village'];
                   $fathers_name  = $_POST['fathers_name'];
                    $fathers_mobile  = $_POST['fathers_mobile'];
                     $fathers_email  = $_POST['fathers_email'];
                      $mothers_name  = $_POST['mothers_name'];
                       $mothers_mobile  = $_POST['mothers_mobile'];
                        $mothers_email  = $_POST['mothers_email'];
                         $guardians_name  = $_POST['guardians_name'];
                          $guardians_mobile  = $_POST['guardians_mobile'];
                           $guardians_email  = $_POST['guardians_email'];
                          $none   = $_POST['none'];
                           $dyslexia   = $_POST['dyslexia'];
                            $deaf_hearing_impaired  = $_POST['deaf_hearing_impaired'];
                             $wheelchair_user  = $_POST['wheelchair_user'];
                              $unseen_disability  = $_POST['unseen_disability'];
                               $blind_partially  = $_POST['blind_partially'];
                                $others  = $_POST['others'];
                                 $print_advertisement  = $_POST['print_advertisement'];
                                  $radio_tv_advertisement 	 = $_POST['radio_tv_advertisement'];
                                   $current_student_alumni  = $_POST['current_student_alumni'];
                                    $school_talk  = $_POST['school_talk'];
                                     $internet_search  = $_POST['internet_search'];
                                      $social_media  = $_POST['social_media'];
                                       $open_day  = $_POST['open_day'];
                                        $others_state_below  = $_POST['others_state_below'];
                                         $next_of_kins_name  = $_POST['next_of_kins_name'];
                                          $next_of_kins_mobile = $_POST['next_of_kins_mobile'];
                                           $next_of_kins_country  = $_POST['next_of_kins_country'];
                                            $next_of_kins_email  = $_POST['next_of_kins_email'];
                                           
        $query = "INSERT INTO students (firstname,
secondname,othername,email,gender,marital_status,tel_no,date_of_birth,country_of_residence,district_of_birth,nationality,religious_afliation,country,county_division,address_line1,address_line2,district,village,fathers_name,fathers_mobile,fathers_email,mothers_name,mothers_mobile,mothers_email,guardians_name,guardians_mobile,guardians_email,none,dyslexia,deaf_hearing_impaired,wheelchair_user,unseen_disability,blind_partially,others,print_advertisement,radio_tv_advertisement,current_student_alumni,school_talk,internet_search,social_media,open_day,others_state_below,next_of_kins_name,next_of_kins_mobile,next_of_kins_country,next_of_kins_email)
                    VALUES ('$firstname','$secondname','$othername','$email','$gender','$marital_status','$tel_no','$date_of_birth','$country_of_residence','$district_of_birth','$nationality','$religious_afliation','$country','$county_division','$address_line1','$address_line2','$district','$village','$fathers_name','$fathers_mobile','$fathers_email','$mothers_name','$mothers_mobile','$mothers_email','$guardians_name','$guardians_mobile','$guardians_email','$none','$dyslexia','$deaf_hearing_impaired','$wheelchair_user','$unseen_disability','$blind_partially','$others','$print_advertisement','$radio_tv_advertisement','$current_student_alumni','$school_talk','$internet_search','$social_media','$open_day','$others_state_below','$next_of_kins_name','$next_of_kins_mobile','$next_of_kins_country','$next_of_kins_email')";

        $result = $connection -> query($query);

        if ($result) {

          
          echo ("<meta http-equiv='refresh' content='0;URL=education.php'>");

        } else {
          echo "Sorry, we encountered a problem";
        }
}
  ?>
<div class="lst">
       <div class="center">Uganda Martyrs University, P.O.Box, Kampala Uganda.</div><br>
<div class="center">Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY</div>
</div>




</body>
</html>