<?php 
include('dbcon.php');
echo $id =$_POST['id'];
echo $a =$_POST['name'];
echo $b =$_POST['email'];
echo $c =$_POST['password'];
echo $d =$_POST['city'];
echo $e =$_POST['college'];
echo $f =$_POST['address'];
echo $g =$_POST['phone'];
$data ="update gwalior set name ='$a',email ='$b',password ='$c',city ='$d',college ='$e',address ='$f',phone ='$g' where id =$id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:gwalior_display.php');
}



?>