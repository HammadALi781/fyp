<?php
include "connection.php";

$userid = $_GET['uid'];

$del = "delete from catagory where id = '$userid'";//"delete from tablename where condition"
$res = mysqli_query($con, $del);
if(!$res)
{
	echo mysqli_error($con);
}
else
{
	header("location:manage_catagory.php");
}
