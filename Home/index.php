<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Home</title>

        <link rel = "stylesheet" type = "text/css" href = "index.css">

        <!--*********** BOXICONS ***********-->
        <link rel="stylesheet" href="boxicons-2.0.7/css/boxicons.css">
    </head>
        
    <header>
        <div class="header">
        <img src= "Images/logo.png" class="logo" alt="logo" width="100" height="100"></img>
        <h2 class="name">High Tech Web</h2>
        </div>
    </header>

    <body background = "">

    <?php include "nav.php";?>

        <div class="container">
            <img src="Images/boy.jpg" class="boy" alt="image"></img>

            <div class="text-block">
              <h2 align="center">Welcome</h2>
              <p align="center">We Are Here to Give You The Best Online Courses<br><br>
                  to Improve your Knowledge About Programming<br><br> 
                  </p>
            </div>
        </div>

        <style>
        .text-block {
            position: absolute;
            bottom: 25rem;
            right: -34rem;
            
            color: white;
            padding-left: 15px;
            padding-right: 20px;
        }
        </style>

            <footer class="footer">

                <div class="inner-footer">

                    <div class="social-links">
                        <ul>
                            <li class="social-items"><a href="#"><i class="bx-fw bx bxl-facebook-square"></i></a></li>
                            <li class="social-items"><a href="#"><i class='bx-fw bx bxl-instagram'></i></a></li>
                            <li class="social-items"><a href="#"><i class='bx-fw bx bxl-twitter'></i></a></li>
                            <li class="social-items"><a href="#"><i class='bx-fw bx bxl-linkedin-square'></i></a></li>
                        </ul>
                    </div>

                    <div class="quick-links">
                        <ul >
                            <li class="quick-items"><a href="index.php">Home</a></li>
                            <li class="quick-items"><a href="aboutUs.php">About us</a></li>
                            <li class="quick-items"><a href="ourCourses.php">Our Courses</a></li>
                            <li class="quick-items"><a href="privacyPolicy.php">Prvacy Policy</a></li>
                            <li class="quick-items"><a href="contactUs.php">Contact us</a></li>
                        </ul>
                    </div>
                </div>

                <div class="outer-footer">
                    copyright &copy; High Tech Web 2021. All Right Reserved
                </div>

            </footer>
    </body>
</html>