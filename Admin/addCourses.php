<?php  include "../db.php"; ?>

<?php session_start(); 

if(isset($_SESSION['usertype'])){

if($_SESSION['usertype']  !== 'Admin'){

header("Location:../Home/index.php");

}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>Admin Dashboard</title>

<link rel="stylesheet" href="styles.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h2> High Tech Web</h2>

    <div class="signup-form">
        <h3>Add a New Course</h3>

        <form action="addCoursesF.php" method="POST" enctype="multipart/form-data">

            <p>Course ID</p>
            <input type="text" disabled name="ID" placeholder="Course ID">

            <p>Course Name</p>
            <input type="text" name="Name" placeholder="Course Name">

            <p>Course Content</p>
            <input type="text" name="Content" placeholder="Course Content">

            <p>Course Fee</p>
            <input type="text" name="Fee" placeholder="Course Fee">

            <p>Course Duration</p>
            <input type="text" name="Duration" placeholder="Course Duration">
            <p>Image</p>
           <input type="file" name="img"> 
            <button name ="AddCourse" type="submit">Add</button>

        </form>
    </div>

<main>
    <nav id="sideNav">
        <ul>
            <li><a href="manageCourses.php">View Courses</a></li>
            <li><a href="addCourses.php">Add Courses</a></li> 
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    
    
    <img src="menu_64px.png" id="menuBtn">

    <script>
        var menuBtn = document.getElementById("menuBtn");
        var sideNav = document.getElementById("sideNav");
        
        sideNav.style.left = "-250px";
        menuBtn.onclick = function()
        {
            if(sideNav.style.left == "-250px")
            {
                sideNav.style.left = "0";
            }
            else
            {
                sideNav.style.left = "-250px";
            }
        }
        var scroll = new SmoothScroll('a[href*="#"]',{
            speed: 1000,
            speedAsDuration: true
        });

    </script>  
	  
</main>
</body>
</html>
