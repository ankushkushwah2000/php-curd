<?php 
include('dbcon.php');
$a =$_POST['name'];
$b =$_POST['city'];
$c =$_POST['phone'];
$d =$_POST['education'];
$e =$_POST['gender'];
$f =$_POST['address'];

$g =implode(',',$d );
 echo$g;
$data ="INSERT INTO cart (name,city,phone,education,gender,address)value('$a','$b','$c','$g','$e','$f')";
mysqli_query($con,$data);
echo$data;
header('location:cart.php');


?>