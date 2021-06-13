<?php include "connection.php" ?>
 <?php
    $name = htmlspecialchars($_POST['name']);
    $movie = htmlspecialchars($_POST['movie']);
    $select = "select * from sub_catagories where cinema= '$name' AND movie_name='$movie'";
    $res = mysqli_query($con, $select);
    $data = mysqli_fetch_array($res);
    $responseData = json_encode($data);
    echo $responseData;
    return $responseData;
    ?>
	