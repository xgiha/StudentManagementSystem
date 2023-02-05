<?php  include "../db.php"; ?>
<?php

    if(isset($_POST['AddCourse'])){

        $name = $_POST['Name'];
        $content = $_POST['Content'];
        $fee = $_POST['Fee'];
        $duration = $_POST['Duration'];
        $img = $_FILES['img']['name'];
        $img_temp = $_FILES['img']['tmp_name'];
    
        move_uploaded_file($img_temp, "../img/$img");

        $query = "insert into course(name, content, fee, duration, img)";
        $query.= "VALUES('{$name}','{$content}','{$fee}','{$duration}','{$img}')";

        $add_course = mysqli_query($connection, $query);
        header("refresh:1; url=index.php");
        if(!$add_course){
            $msg = "Courses couldn't be Added ";
            echo "<script type='text/javascript'>alert('$msg');</script>"; 
            die("Query Failed ." . mysqli_error($connection));
            header("refresh:1; url=addCourses.php");
        }
        else{
            $msg = "Courses  Added ";
            echo "<script type='text/javascript'>alert('$msg');</script>"; 
            header("refresh:1; url=addCourses.php");
        }

    }
?>
