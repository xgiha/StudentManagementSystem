<?php session_start(); 
$id = "";
$fullname = "";
$username = "";
$dob = "";
$course = "";
$gender = "";
$email = "";
$password = "";
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">

    <title>Student Dashboard</title>

    <link rel="stylesheet" href="student.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<?php include "../db.php"; ?>
<?php include "nav.php"; ?>

<body>
<?php if (isset($username)) {

$username = $_SESSION['username'];

$query = "SELECT * FROM `register` WHERE `username` = '{$username}' ";
$select_profile = mysqli_query($connection, $query);

while ($row = mysqli_fetch_array($select_profile)) {

    $id = $row['id'];
    $fullname = $row['fullname'];
    $username = $row['username'];
    $dob = $row['dob'];
    $course = $row['course'];
    $gender = $row['gender'];
    $email = $row['email'];
    $password = $row['password'];
}
}
?>
<?php
    if (isset($_POST['update_user'])) {
        $fullname = $_POST['Fullname'];
        $username = $_POST['Username'];
        $dob = $_POST['DOB'];
        $course = $_POST['Course'];
        $gender = $_POST['gender'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];
        $password = md5($password);


        $query = "UPDATE register set ";
        $query .= "fullname = '{$fullname}', ";
        $query .= "username = '{$username}', ";
        $query .= "dob = '{$dob}', ";
        $query .= "course = '{$course}', ";
        $query .= "gender = '{$gender}', ";
        $query .= "email   = '{$email}', ";
        $query .= "password   = '{$password}' ";
        $query .= "where id  = {$id} ";


        $update_stock = mysqli_query($connection, $query);

        if (!$update_stock) {
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }

    ?>
    <h2> High Tech Web</h2>

    <div class="signup-form">
        <h3>Account Details</h3>

        <form action="#"method="post" enctype="multipart/form-data">
            
            <p>Full Name</p>
            <input value="<?php echo $fullname; ?>" type="text" name="Fullname" placeholder="">

            <p>Username</p>
            <input value="<?php echo $username; ?>" type="text" name="Username" placeholder="">

            <p>DOB</p>
            <input value="<?php echo $dob; ?>" type="text" name="DOB" placeholder="">
            <br>
            <br>
            <label for="Gender">Course:</label>
            <?php
            $query = "select * from course";
          $select_customer = mysqli_query($connection, $query);
          ?>
          <select name="Course" >
              <?php
          while ($row = mysqli_fetch_assoc($select_customer)) {
              ?>
              <option> <?php echo $row['name']; ?></option>
              <?php 
          }
          ?>
          </select>
            <br>
            <br>
            <label for="Gender">Gender:</label>
            <select name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
                <br>
                <p>Email</p>
                <input value="<?php echo $email; ?>" type="email" name="Email" placeholder="">

                <p>Password</p>
                <input value="<?php echo $password; ?>" type="password" name="Password" placeholder="">

                <button name="update_user" type="submit">Update Details</button>

        </form>
    </div>

    <main>
        <nav id="sideNav">
            <ul>
                <li><a href="#">View Account Details</a></li>

                <li><a href="#">Logout</a></li>
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