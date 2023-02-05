<?php session_start(); ?>
<?php 

$_SESSION['username'] = null;
$_SESSION['user_type'] = null;

header("Location:index.php")
?>
