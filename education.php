
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education</title>
    <link rel="stylesheet" type="text/css" href="educ.css">
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
        <table  cellpadding="2" cellspacing="2" width="100%"><tr><td><h2><a href="personal.php" class="none">Personal_info</a></h2>
          </td><td class="table"><h2><a href="education.php" class="none1">Educational_info</a></h2>
             </td><td><h2><a href="choice.php" class="none">Program Choice</a></h2>
                </td><td><h2><a href="document.php" class="none">Documents</a></h2>
                </td><td><h2><a href="declara.php" class="none">Declaration</a></h2>
                  </td><td><h2><a href="com.php" class="none">Confirmation</a></h2></td></tr></table>
           </div>
        <div class="edd">
        <b>Educational info</b>
        </div>
        <form method="post">
        <div class="ffs">
        <fieldset>
        <b><h2>Ordinary Level.</h2></b>
        School Name:<input type="text" name="Olevel_school" required="">     Year of sitting:<input type="text" name="Olevel_year" required=""> Index Number:<input type="text" name="index_olevel" required=""><br>
        <b><h2>Subjects offered.</h2></b><br>
        <div class="ord">
        <fieldset>
        <table>
        <tr><td><b>Subject</b></td><td><b>Grade</b></td><td><b>Subject</b></td><td><b>Grade</b></td></tr>
        <tr><td><input type="checkbox" Name='English_language' value="yes">English Language</td><td><input type="text" name="English_grade"size="2"></td><td>
          <input type="checkbox" Name='Entrepreneurship_Education' value="yes">Entrepreneurship Education</td><td>
            <input type="text" name="Entrepreneurship_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Biology' value="yes">Biology</td><td><input type="text" name="biology_grade" size="2"></td><td>
          <input type="checkbox" Name='Home_Economics' value="yes">Home Economics</td><td>
            <input type="text" name="Home_Economics_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Chemistry' value="yes">Chemistry</td><td><input type="text" name="chemisty_grade" size="2"></td><td>
          <input type="checkbox" Name='Computer_Studies' value="yes">Computer Studies</td><td>
            <input type="text" name="Computer_Studies_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Physics' value="yes">Physics</td><td><input type="text" name="physics_grade" size="2"></td><td>
          <input type="checkbox" Name='Fine_Art' value="yes">Fine Art</td><td>
            <input type="text" name="fine_art_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Mathematics' value="yes">Mathematics</td><td><input type="text" name="math_grade" size="2"></td><td>
          <input type="checkbox" Name='Literature_in_English' value="yes">Literature</td><td>
            <input type="text" name="literature_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Geograghy' value="yes">Geograghy</td><td><input type="text" name="geograghy_grade" size="2"></td><td>
          <input type="checkbox" Name='Kiswahilli' value="yes">kiswahilli</td><td>
            <input type="text" name="kiswahili_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='History' value="yes">History</td><td><input type="text" name="history_grade" size="2"></td><td>
          <input type="checkbox" Name='Music' value="yes">Music</td><td>
            <input type="text" name="music_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Religious_Education' value="yes">Religious Education</td><td><input type="text" name="Religious_Education_grade" size="2"><td>
          <input type="checkbox" Name='Techical_Drawing' value="yes">Techical Drawing</td><td>
            <input type="text" name="Techical_Drawing_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Agriculture_principles_and_practices' value="yes">Agriculture principles and practices</td><td>
          <input type="text" name="Agriculture_grade" size="2"></td><td>
            <input type="checkbox" Name='French' value="yes">French</td><td><input type="text" name="french_grade" size="2"></td></tr>
        
        <tr><td><input type="checkbox" Name='Commerce' value="yes">Commerce</td><td><input type="text" name="commerce_grade" size="2">
        </td><td><input type="checkbox" Name='latine' value="yes">latine</td><td>
          <input type="text" name="latine_grade" size="2"></td></tr>
        </table><br>
        Overall grade:<input type="text" name="agregrade" size="2"> <select name="Overall_grade">
        <option value="select">select</option>
        <option value="first grade(1)">first grade</option>
        <option value="second grade(2)">second grade</option>
        <option value="third grade(3)">third grade</option>
        <option value="forth grade(4)">forth grade</option>
        </select>
        <div class="center">Examining Authority:<input type="text" name="Examining_Authority"></div>
        </fieldset>
        </div>
        <b><h2>Advanced Level.</h2></b><br>
        School Name:<input type="text" name="Alevel_school" required="">     Year of sitting:<input type="text" name="Alevel_year" required=""> Index Number:<input type="text" name="Alevel_index" required=""><br>
        <b><h2>Subjects/combination offered.</h2></b>
        <div class="add">
        <fieldset>
        <b>Select:</b>
        <select name="combination_offered">
        <option value="select">select</option>
        <option value="sciences">sciences</option>
        <option value="Arts">Arts</option>
        </select><br>
        <b>Combination/subjects in full:</b>
        <table>
        <tr><td>Subjects</td><td>Grade(A-O)</td></tr>
        <tr><td><input type="text" name="subject1" required=""></td><td><input type="text" name="sub1_points" size="2"></td></tr>
        <tr><td><input type="text" name="subject2" required=""></td><td><input type="text" name="sub2_points" size="2"></td></tr>
        <tr><td><input type="text" name="subject3" required=""></td><td><input type="text" name="sub3_points" size="2"></td></tr>
        </table>
        <table>
        <b>Subsiduaries:</b>
        <select name="Subsiduaries">
        <option value="select">select</option>
        <option value="sub computer">sub computer</option>
        <option value="sub mathmatics">sub mathmatics</option>
        </select> <input type="text" name="sub_grade" size="2">
        
        </table>
        <div class="center"><b>Points overall:<input type="text" name="Points_overall" size="2"></div></b><br>
        <div class="center">Examining Authority:<input type="text" name="Examination_authority" ></div><br>
        </fieldset>
        </div>
        <b><h2>Institute/Collage.</h2></b>
        <table>
        <tr><td><b>Name of institute/collage:</b></td><td><input type="text" name="Name_of_institute"></td></tr>
        <div class="center"><b>Qualifications:<input type="text" name="Qualifications"></b></div>
        </table>
        </fieldset>
        </div><br>
        
        <div class="kin">
        <b>English Language Competency</b>
        </div>
        <div class="nkin">
        <fieldset>
        English is the language of instruction at Uganda Martyrs University.It is therefore imperative that all students have a<br>
        good command of the English Language. Students who do not have a good command of English may be required to undertake<br>
        a remedial English course (given by the University every July) prior to enrolling in the University.<br><br>
        Please indicate your level of competency in English.<br><br>
        <table>
        <tr><td></td><td>Speaking</td><td>Reading</td><td>Writing</td></tr>
        <tr><td>Fluent</td><td><input type="text" name="Fluent_Speaking"></td><td><input type="text" name="Fluent_Reading"></td><td><input type="text" name="Fluent_Writing"></td></tr>
        <tr><td>Adequate</td><td><input type="text" name="Adequate_Speaking"></td><td><input type="text" name="Adequate_Reading"></td><td><input type="text" name="Adequate_Writing"></td></tr>
        <tr><td>Basic</td><td><input type="text" name="Basic_Speaking"></td><td><input type="text" name="Basic_Reading"></td><td><input type="text" name="Basic_Writing"></td></tr>
        </table><br>
        Do you have any English Language Qualification?<br>
        (such as TOEFL or University degree in which instruction was in English)<input type="checkbox" Name='yes'>Yes
        <input type="checkbox" Name='No'>No<br><br>
        If yes, which Qualification?<input type="text" name="English_Qualification"><br><br>
        Date of Final Examination:<input type="text" name="Examination_date"><br>

        <div class="center"><input type="submit" value="SUBMIT" name="continue"></fieldset></div>
        </fieldset>
        </div><br>
       
        </form>


        <?php

$connection = new mysqli("localhost","root","","umuregistration");

    if (isset($_POST['continue'])) {
      
      $Olevel_school = $_POST['Olevel_school'];
      $Olevel_year = $_POST['Olevel_year'];
    $index_olevel = $_POST['index_olevel'];
      $English_language = $_POST['English_language'];
      $English_grade = $_POST['English_grade'];
       $Biology = $_POST['Biology'];
        $biology_grade = $_POST['biology_grade'];
         $Chemistry = $_POST['Chemistry'];
          $chemisty_grade = $_POST['chemisty_grade'];
           $Physics = $_POST['Physics'];
            $physics_grade = $_POST['physics_grade'];
             $Mathematics = $_POST['Mathematics'];
              $math_grade = $_POST['math_grade'];
               $Geograghy  = $_POST['Geograghy'];
                $geograghy_grade  = $_POST['geograghy_grade'];
                 $History   = $_POST['History'];
         $history_grade  = $_POST['history_grade'];
                 $Religious_Education   = $_POST['Religious_Education'];
                  $Religious_Education_grade   = $_POST['Religious_Education_grade'];
                   $Agriculture_principles_and_practices  = $_POST['Agriculture_principles_and_practices'];
                    $Agriculture_grade  = $_POST['Agriculture_grade'];
                     $Commerce  = $_POST['Commerce'];
                      $commerce_grade  = $_POST['commerce_grade'];
                       $Entrepreneurship_Education  = $_POST['Entrepreneurship_Education'];
                        $Entrepreneurship_grade  = $_POST['Entrepreneurship_grade'];
                         $Home_Economics  = $_POST['Home_Economics'];
                          $Home_Economics_grade  = $_POST['Home_Economics_grade'];
                           $Computer_Studies  = $_POST['Computer_Studies'];
                          $Computer_Studies_grade   = $_POST['Computer_Studies_grade'];
                           $Fine_Art   = $_POST['Fine_Art'];
                            $fine_art_grade  = $_POST['fine_art_grade'];
                             $Literature_in_English  = $_POST['Literature_in_English'];
                              $literature_grade  = $_POST['literature_grade'];
                               $Kiswahilli  = $_POST['Kiswahilli'];
                                $kiswahili_grade  = $_POST['kiswahili_grade'];
                                 $Music  = $_POST['Music'];
                                  $music_grade   = $_POST['music_grade'];
                                   $Techical_Drawing  = $_POST['Techical_Drawing'];
                                    $Techical_Drawing_grade  = $_POST['Techical_Drawing_grade'];
                                     $French  = $_POST['French'];
                                      $french_grade  = $_POST['french_grade'];
                                       $latine  = $_POST['latine'];
                                        $latine_grade  = $_POST['latine_grade'];
                                         $agregrade  = $_POST['agregrade'];
                                          $Overall_grade = $_POST['Overall_grade'];
                                           $Examining_Authority  = $_POST['Examining_Authority'];
                                            $Alevel_school  = $_POST['Alevel_school'];
                  $Alevel_year  = $_POST['Alevel_year'];
                 $Alevel_index   = $_POST['Alevel_index'];
                  $combination_offered   = $_POST['combination_offered'];
                   $subject1  = $_POST['subject1'];
           $sub1_points  = $_POST['sub1_points'];
                    $subject2  = $_POST['subject2'];
           $sub2_points  = $_POST['sub2_points'];
                     $subject3  = $_POST['subject3'];
           $sub3_points  = $_POST['sub3_points'];
                      $Subsiduaries  = $_POST['Subsiduaries'];
                       $sub_grade  = $_POST['sub_grade'];
                        $Points_overall  = $_POST['Points_overall'];
                         $Examination_authority  = $_POST['Examination_authority'];
                          $Name_of_institute  = $_POST['Name_of_institute'];
                           $Qualifications  = $_POST['Qualifications'];
                          $Fluent_Speaking   = $_POST['Fluent_Speaking'];
                           $Fluent_Reading   = $_POST['Fluent_Reading'];
                            $Fluent_Writing  = $_POST['Fluent_Writing'];
                             $Adequate_Speaking  = $_POST['Adequate_Speaking'];
                              $Adequate_Reading  = $_POST['Adequate_Reading'];
                               $Adequate_Writing  = $_POST['Adequate_Writing'];
                                $Basic_Speaking  = $_POST['Basic_Speaking'];
                                 $Basic_Reading  = $_POST['Basic_Reading'];
                                  $Basic_Writing   = $_POST['Basic_Writing'];
                                   $yes  = $_POST['yes'];
                                    $No  = $_POST['No'];
                                     $English_Qualification  = $_POST['English_Qualification'];
                                      $Examination_date  = $_POST['Examination_date'];
                                    
                                           
        $query = "INSERT INTO education ( Olevel_school,Olevel_year,index_olevel,English_language,English_grade,Biology,biology_grade,Chemistry,chemisty_grade,Physics, 
            physics_grade,Mathematics,math_grade,Geograghy,geograghy_grade,History,history_grade,Religious_Education,Religious_Education_grade,Agriculture_principles_and_practices,  
           Agriculture_grade,Commerce,commerce_grade,Entrepreneurship_Education,Entrepreneurship_grade,Home_Economics,Home_Economics_grade,Computer_Studies,  
           Computer_Studies_grade,Fine_Art,fine_art_grade,Literature_in_English,literature_grade,Kiswahilli,kiswahili_grade,Music,music_grade,Techical_Drawing,Techical_Drawing_grade, 
           French,french_grade,latine,latine_grade,agregrade,Overall_grade,Examining_Authority,Alevel_school,Alevel_year,Alevel_index,combination_offered,subject1,  
       sub1_points,subject2,sub2_points,subject3,sub3_points,Subsiduaries,sub_grade,Points_overall,Examination_authority,Name_of_institute,Qualifications,  
           Fluent_Speaking,Fluent_Reading,Fluent_Writing,Adequate_Speaking,Adequate_Reading,Adequate_Writing,Basic_Speaking,Basic_Reading,Basic_Writing,yes,No,  
           English_Qualification,Examination_date)
    VALUES ('$Olevel_school','$Olevel_year','$index_olevel','$English_language','$English_grade','$Biology','$biology_grade','$Chemistry','$chemisty_grade',
 '$Physics','$physics_grade','$Mathematics','$math_grade','$Geograghy','$geograghy_grade','$History','$history_grade','$Religious_Education',
 '$Religious_Education_grade','$Agriculture_principles_and_practices','$Agriculture_grade','$Commerce','$commerce_grade','$Entrepreneurship_Education',
 '$Entrepreneurship_grade','$Home_Economics','$Home_Economics_grade','$Computer_Studies','$Computer_Studies_grade','$Fine_Art','$fine_art_grade','$Literature_in_English',
 '$literature_grade','$Kiswahilli','$kiswahili_grade','$Music','$music_grade','$Techical_Drawing','$Techical_Drawing_grade','$French','$french_grade','$latine',
 '$latine_grade','$agregrade','$Overall_grade','$Examining_Authority','$Alevel_school','$Alevel_year','$Alevel_index','$combination_offered','$subject1',
 '$sub1_points','$subject2','$sub2_points','$subject3','$sub3_points','$Subsiduaries','$sub_grade','$Points_overall','$Examination_authority','$Name_of_institute',
 '$Qualifications','$Fluent_Speaking','$Fluent_Reading','$Fluent_Writing','$Adequate_Speaking','$Adequate_Reading','$Adequate_Writing','$Basic_Speaking','$Basic_Reading',
 '$Basic_Writing','$yes','$No','$English_Qualification','$Examination_date')";

        $result = $connection -> query($query);

        if ($result) {

          
          echo ("<meta http-equiv='refresh' content='0;URL=choice.php'>");

        } 
}
?>
        
        <div class="lst">
        <div class="center">Uganda Martyrs University, P.O.Box, Kampala Uganda.</div><br>
        <div class="center1">Tel: +256-382 410 611 Fax: +256-382 410100
        Email:umu@umu.ac.ug
        Web:www.umu.ac.ug<br>
        &copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY</div>
        </div>
    

</body>
</html>