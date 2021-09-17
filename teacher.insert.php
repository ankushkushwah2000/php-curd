<?php 

include("dbcon.php");
$k = $_POST['a'];
$l = $_POST['b'];
$m = $_POST['c'];
$n = $_POST['d'];
$o = $_POST['e'];
$p = $_POST['f'];
$q = $_POST['g'];
$r = $_POST['h'];

$data = "INSERT INTO teacher(name,email,phone,city,address,college,salary,dept)value('$k','$l','$m','$n','$o','$p','$q','$r')";

// echo $data;
mysqli_query($con,$data);
header('location:teacher.php');




?>