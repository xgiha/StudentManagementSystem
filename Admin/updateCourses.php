<?php include "../db.php"; ?>
<?php $Cid = 0 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php
if (isset($_GET['edit'])) {
    $Cid = $_GET['edit'];
}
$query = "select * from course where id = $Cid ";
$select_update_course = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($select_update_course)) {
    $id = $row['id'];
    $name = $row['name'];
    $content = $row['content'];
    $fee = $row['fee'];
    $duration = $row['duration'];
    $img = $row['img'];
}

if (isset($_POST['update_courses'])) {
    $name = $_POST['Name'];
    $content = $_POST['Content'];
    $fee = $_POST['Fee'];
    $duration = $_POST['Duration'];

    $img= $_FILES['img']['name'];
    $img_temp= $_FILES['img']['tmp_name'];

    move_uploaded_file($img_temp, "../img/$img");


    $query = "UPDATE course set ";
    $query .= "name = '{$name}', ";
    $query .= "content = '{$content}', ";
    $query .= "fee = '{$fee}', ";
    $query .= "duration   = '{$duration}', ";
    $query .= "img   = '{$img}' ";
    $query .= "where id  = {$Cid} ";


    $update_stock = mysqli_query($connection, $query);

    if (!$update_stock) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
}
?>

<body>
    <h2> High Tech Web</h2>

    <div class="signup-form">
        <h3>Update Course</h3>

        <form action="" method="POST" enctype="multipart/form-data">

            <p>Course ID</p>
            <input value="<?php echo $id; ?>" type="text" disabled name="ID" placeholder="">

            <p>Course Name</p>
            <input value="<?php echo $name; ?>" type="text" name="Name" placeholder="">

            <p>Course Content</p>
            <input value="<?php echo $content; ?>" type="text" name="Content" placeholder="">

            <p>Course Fee</p>
            <input value="<?php echo $fee; ?>" type="text" name="Fee" placeholder="">

            <p>Course Duration</p>
            <input value="<?php echo $duration; ?>" type="text" name="Duration" placeholder="">

            <p>Image</p>
            <img width="50" src="../img/<?php echo $img; ?>" alt="" name ="img">
            <input  type="file" name="img">

            <button name="update_courses" type="submit">Update</button>
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
            menuBtn.onclick = function() {
                if (sideNav.style.left == "-250px") {
                    sideNav.style.left = "0";
                } else {
                    sideNav.style.left = "-250px";
                }
            }
            var scroll = new SmoothScroll('a[href*="#"]', {
                speed: 1000,
                speedAsDuration: true
            });
        </script>

    </main>
</body>

</html>