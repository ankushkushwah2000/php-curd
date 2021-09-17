<?php 
include('dbcon.php');
echo$a =$_POST['name'];
echo$b =$_POST['college'];
echo$c =$_POST['gender'];
$d =$_POST['education'];
// echo "<pre>";
// print_r($d);
$g = implode(',',$d); //array ko string me change//
echo $g;

$data ="INSERT INTO pn (name,college,gender,education)value('$a','$b','$c','$g')";
// echo$data;
mysqli_query($con,$data);
// header('location:pn.php');


?>