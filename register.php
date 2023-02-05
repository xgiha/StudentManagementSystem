<?php include "db.php";
if(isset($_POST['submit']))  {

    $fullname = $_POST['Fullname'];
    $username = $_POST['Username'];
    $dob = $_POST['DOB'];
    $course = "Null";
    $gender = $_POST['gender'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $cpassword = $_POST['CPassword'];

    
    $user_type = "User";

    
    if ($cpassword !== $password) {

        $msg = "Passwords are not same";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header("refresh:0; url=Signup.php");

    } else {
        $password = md5($password);
        $query = "insert into register(fullname,username,dob,course,gender,email,password,usertype) ";
   $query .="values ('{$fullname}', '{$username}','{$dob}','{$course}','{$gender}','{$email}','{$password}','{$user_type}' )";

   $result = mysqli_query($connection, $query);
   header("Location:Home/index.php");
   if(!$result) {
   
       die('Query Failed' . mysqli_error($connection));
   }
    }
}

?>