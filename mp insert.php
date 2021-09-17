<?php 
include('dbcon.php');
echo$a =$_POST['name'];
echo$b =$_POST['roll'];
echo$c =$_POST['phone'];
echo$d =$_POST['city'];
echo$e =$_POST['address'];

$data ="INSERT INTO mp(name,roll,phone,city,address)value('$a','$b','$c','$d','$e')";
echo$data;
mysqli_query($con,$data);
header("location:mp.php");
?>