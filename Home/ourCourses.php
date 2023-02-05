<?php session_start();
$username = $_SESSION["username"];
?>
<?php include "../db.php"; ?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Home</title>

  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" type="text/css" href="ourcourses.css">

  <!--*********** BOXICONS ***********-->
  <link rel="stylesheet" href="boxicons-2.0.7/css/boxicons.css">
</head>

<header>
  <div class="header">
    <img src="Images/logo.png" class="logo" alt="logo" width="100" height="100"></img>
    <h2 class="name">High Tech Web</h2>
  </div>
</header>

<body background="">

  <?php include "nav.php"; ?>

  <div class="cards">
    <?php
    $query = "select * from course";
    $select_courses = mysqli_query($connection, $query);

    while ($row = mysqli_fetch_assoc($select_courses)) {

      $name = $row['name'];
      $fee = $row['fee'];
      $duration = $row['duration'];
      $img = $row['img'];


    ?>

      <div class="card">

        <div class="card">

          <img class="card__image" src="../img/<?php echo $img; ?>" alt="">
          <div class="card__content">
            <p>
              <?php echo $name  ?>
            </p>
            <p>
              <?php echo $duration ?>
            </p>
            <p>
              <?php echo $fee ?>
            </p>

          </div>

          <div class="card__info">
            <div>
              <?php
              echo "<li><a href='student.php?update={$username}'>Add</a></li>"
              ?>
            </div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>

</body>
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
      <ul>
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

</html>