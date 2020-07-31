<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" type="text/css" href="docu.css">
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
                </td><td class="table"><h2><a href="document.php" class="none1">Documents</a></h2>
                </td><td><h2><a href="declara.php" class="none">Declaration</a></h2>
                  </td><td><h2><a href="com.php" class="none">Confirmation</a></h2></td></tr></table>
           </div>
        <div class="per">
        <b>Documents</b>
        </div>
        <div class="ffs">
            
        <fieldset>
        <b><h2>Please scan and upload the following documents </h2></b><br>
        <h3 class="blue">Passport Photo:
        Birth certificate:
        O.Level certificate/pass slip:
        A.Level certificate/pass slip:
        Degree/Diploma transcript:
        Identification card:</h3> <br>
        
        PLEASE REMEMBER TO INCLUDE THE YOUR NAME AND THE DOCUMENT BEING UPLOADED FOR EAZY IDENTIFICATION
        
                  <div class="contact">


                  <form method="post"  enctype="multipart/form-data">
                              
                              <?php
                                $msg = "document";
                                // if upload button is pressed
                                
                                if (isset($_POST['upload'])) {
                                  // the path to store the uploaded image
                                  $target = "images/".basename($_FILES['image']['name']);
                                   
                                   
                                  // connect to the database
                                  $db = mysqli_connect("localhost", "root", "", "vheakyfashions");
                                  
                                  //Get all the submitted data from the form
                                  $image = $_FILES['image']['name'];
                                  $message = $_POST['message'];
                                  $sql = "INSERT INTO images (image, message) VALUES ('$image','$message')";
                                  mysqli_query($db, $sql); //stores the submitted data into the database table: images
                                  
                                  //Now lets move the uploaded image into the folder: images
                                  if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
                                    echo " uploaded successfully";
                                  }else{
                                    echo "There was a problem uploading the document";
                                  }
                                  
                                  
                                }
                                 
                                
                                
                              ?>      
                    
                    <input type="hidden" name="size" value="1000000">
                    
                      <div>
                         <p><input type="file" name="image"></p>
                       </div>
                      <div>
                        <p><textarea id="message" name="message" placeholder="NAME OF DOCUMENT AND YOUR NAME....." required></textarea></p>
                      </div><hr>
                      <div>
                         <p><input type="submit" name="upload" value="Upload Post"></p>
                       </div>
            
                       
                    </form>    
                    </p>
                  </div>
                </div>
                <a href="declara.php" style="text-decoration:none"> <input type="submit"value="NEXT PAGE"></a>
              
              </div>  
               
                   <div class="clearfix"> </div>
                  
            </div> 
        
        
        
        </fieldset>
        </div><br>
        
        
        </fieldset>
        
        <div class="lst">
        <div class="center">Uganda Martyrs University, P.O.Box, Kampala Uganda.</div><br>
        <div class="center1">Tel: +256-382 410 611 Fax: +256-382 410100
        Email:umu@umu.ac.ug
        Web:www.umu.ac.ug<br>
        &copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY</div>
        </div>
</body>
</html>