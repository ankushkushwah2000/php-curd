<?php 


include("dbcon.php");
echo$j = $_POST['a'];
echo$k = $_POST['b'];
echo$l = $_POST['c'];
echo$m = $_POST['d'];
echo$n = $_POST['e'];

$data ="INSERT INTO student(username,password,city,phone,dept)value('$j','$k','$l','$m','$n')";
// echo $data;
mysqli_query($con,$data);
header('location:student.php');

?>