<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>About Us</title>

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
            <img src="Images/girl.jpg" alt="girl" class="girl"></img>
            <div class="text-block">
              <h2 align="center">About Us</h2>
              <p align="center">Every individual has the potential to create change,<br><br>
                  whether in their life, their community, or the world.<br><br> 
                  The transformative power of education is what unlocks that potential.<br><br> 
                  Yet, access to high-quality education has been a privilege of the few.<br><br> 
                  Back in 2020, we realized it was a time for a seismic shift in learning.<br><br> 
                  From the tried and true to the leading edge. From “for some” to “for all.”<br><br> 
                  By opening the classroom through online learning, High Tech Web millions of<br><br> 
                  learners to unlock their potential and become changemakers.</p>
            </div>
          </div>

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