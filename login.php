<?php include "db.php"; ?>
<?php session_start(); ?>
<?php
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $DB_username = "";

    $password = md5($password);

    $query = "select * from register where email ='{$email}' ";
    $select_user_query = mysqli_query($connection, $query);
    if (!$select_user_query) {

        die("query failed" . mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
        $DB_email = $row['email'];
        $DB_username = $row['username'];
        $DB_password = $row['password'];
        $DB_usertype = $row['usertype'];
    }
    if ($email !== $DB_email && $password !== $DB_password) {
        $msg = "Username or password is not Valid";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh:0; url=login.html");
    } elseif ($email == $DB_email && $password == $DB_password) {
        $msg = "Login Succses";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh:0; url=Admin/addCourses.php");
       // header("Location:Admin/addCourses.php");
        $_SESSION['email'] = $DB_email;
        $_SESSION['username'] = $DB_username;
        $_SESSION['password'] = $DB_password;
        $_SESSION['usertype'] = $DB_usertype;
        


    }
}

?>

