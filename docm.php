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


                      
                </div>
            </div>
        
            <div class="home_heading">documents submited</div>
                
                <?php

                    $db = mysqli_connect("localhost", "root", "", "umuregistration");
                    $sql = "SELECT * FROM  images";
                    $result = mysqli_query($db, $sql);
                                
                    echo "
                        
                            <div class='flex-container'>";
                                
                                while ($row = mysqli_fetch_array($result)) {
                                    echo "<div id='img_div'>";
                                    echo "<img src='images/".$row['image']."'>";
                                    
                                    echo "<p><a href='detail.php?id=".$row['id']."'> View details </a> </p>";
                                    echo "</div>";
                                }
                    echo "  
                            </div>
                        
                    ";
                ?>
                
                            
            
            </div>               
<a href="decla.php">next page</a><center><a href="docm.php">next page</a></center>

<div class="lst">
<i>Uganda Martyrs University, P.O.Box, Kampala Uganda.</i><br>
Tel: +256-382 410 611 Fax: +256-382 410100
Email:umu@umu.ac.ug
Web:www.umu.ac.ug<br>
&copy; Copyright 2018 UGANDA MARTYRS UNIVERSITY
</div>
</body>
</html>