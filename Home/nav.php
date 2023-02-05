
<link rel = "stylesheet" type = "text/css" href = "index.css">


<ul class="nav">
            <li><a href="index.php" class="home">Home</a></li>
            <li><a href="aboutUs.php" class="about-us">About us</a></li>
            <li><a href="ourCourses.php" class="our-courses">Our Courses</a></li>
            <?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
?>
       <li> <a href="student.php">Profile</a> </li>
       <li> <a href="logout.php">Logout</a> </li>
     <?php }else{ ?>
      
        <li><a href="../login.html" class="sign-in">Sign in</a></li>
        <li><a href="../register.html" class="sign-up">Sign up</a></li>
    
         </div>
          </div>
     
     <?php } ?>
			
        </ul>