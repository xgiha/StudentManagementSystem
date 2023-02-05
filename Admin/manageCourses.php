<?php  include "../db.php"; ?>
<?php $the_fshop_id = 0 ?>
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

    <div class="search">
    <form class="example" action="manageCourses.php" method="post">
        <input type="text" name="search" placeholder="Search">
        <button name="submit" type="submit"></i>Search</button>
        
    </div>
    

    <table class="table">
        <tr>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Course Content</th>
          <th>Course Fee</th>
          <th>Course Duration</th>
          <th>Image</th>
          <th>Manage</th>
        </tr>
        <?php
        if (isset($_POST['submit'])) {
          $search  = $_POST['search'];
          $query = "SELECT * FROM course WHERE name = '$search' ";
          $select_customer = mysqli_query($connection, $query);

          foreach ($select_customer as $key => $row) {
            $id = $row['id'];
            $name = $row['name'];
            $content = $row['content'];
            $fee = $row['fee'];
            $duration = $row['duration'];
            $img = $row['img'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>$content</td>";
            echo "<td>$fee</td>";
            echo "<td>$duration</td>";
            echo "<td>$img</td>";
            echo "<td><a href='edit_customer.php?edit={$id}'>Update</a><br><a href='edit_customer.php?Delete={$id}'>Delete</a></td>";
            echo "</tr>";
          }
        } else {
          $query = "select * from course";
          $select_customer = mysqli_query($connection, $query);

          while ($row = mysqli_fetch_assoc($select_customer)) {
            $id = $row['id'];
            $name = $row['name'];
            $content = $row['content'];
            $fee = $row['fee'];
            $duration = $row['duration'];
            $img = $row['img'];

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$name</td>";
            echo "<td>$content</td>";
            echo "<td>$fee</td>";
            echo "<td>$duration</td>";
            echo "<td><img width='100' src='../img/$img'></td>";
            echo "<td><a href='updateCourses.php?edit={$id}'>Update</a><br><a href='manageCourses.php?delete={$id}'>Delete</a></td>";
            echo "</tr>";
          }
        }
        ?>

      </table>
      <?php

      if (isset($_GET['delete'])) {
        $course_id = $_GET['delete'];
        $query = "delete from course where id = {$course_id}";
        $delete_query = mysqli_query($connection, $query);
      }
      ?>

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
<style>
      .search{
    width: 350px;
    top: 8%;
    left: 25%;
    transform: translate(-50%, -50%);
    position: absolute;
}

.search input{
    font-size: 10px;
    width: 50%;
    padding: 10px 10px;
    border: 0;
    outline: none;
    border-radius: 5px;
}

.searchBtn{
    width: 30px;
    position: fixed;
    left: 200px;
    top: -1px;
    z-index: 2;
    cursor: pointer;
}
    </style>
</html>
