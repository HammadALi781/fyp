<?php
ob_start();
session_start();
$con = mysqli_connect("localhost" , "root" , "" , "php_ticketbooking");//"hostname", "db username", "db password", "db name"
if(!$con)
{
    echo mysqli_error($con);
}
?>
 <?php
 $name = htmlspecialchars($_POST['name']);
 $movie = htmlspecialchars($_POST['movie']);
	$select="select * from sub_catagories where cinema= '$name' AND movie_name='$movie'";
	$res=mysqli_query($con,$select);
    $data = mysqli_fetch_array($res);
    $responseData = json_encode($data);
    echo $responseData;
    return $responseData;
	?>
	