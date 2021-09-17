<?php 
include('dbcon.php');
echo $a =$_POST['name'];
echo $b =$_POST['email'];
echo $c =$_POST['password'];
echo $d =$_POST['city'];
echo $e =$_POST['college'];
echo $f =$_POST['address'];
echo $g =$_POST['phone'];
$data ="INSERT INTO gwalior(name,email,password,city,college,address,phone)value('$a','$b','$c','$d','$e','$f','$g')";
echo$data;
mysqli_query($con,$data);
header('location:gwalior.php');



?>