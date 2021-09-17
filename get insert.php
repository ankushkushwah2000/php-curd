<?php 


include("dbcon.php");
$u = $_POST['a'];
$p = $_POST['b'];

$data="INSERT INTO user(username,password)value('$u','$p')";
// echo $data;
mysqli_query($con,$data);
header('location:get.php');


?>