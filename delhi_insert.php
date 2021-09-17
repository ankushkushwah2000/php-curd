<?php 
include('dbcon.php');
echo$a =$_POST['aa'];
echo$b =$_POST['ab'];
echo$c =$_POST['ac'];
echo$d =$_POST['ad'];

$data ="INSERT INTO delhi(name,email,phone,city)value('$a','$b','$c','$d')";
echo$data;
mysqli_query($con,$data);
header("location:delhi.php");




?>