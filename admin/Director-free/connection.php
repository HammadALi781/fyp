<?php
ob_start();
session_start();
if(empty($_SESSION['id'])) {
	echo "error";
  header("location:login.php");
}

$con = mysqli_connect("localhost" , "root" , "" , "php_ticketbooking");//"hostname", "db username", "db password", "db name"
if(!$con)
{
	echo mysqli_error($con);
}
$userid = $_SESSION['id'];
$selectuser = "select * from login where id = '$userid'";
$runuser = mysqli_query($con,$selectuser);
$datauser = mysqli_fetch_array($runuser);
?>
