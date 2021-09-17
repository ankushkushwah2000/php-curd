<?php 
include('dbcon.php');
echo$id =$_POST['id'];
echo$a =$_POST['name'];
echo$b =$_POST['roll'];
echo$c =$_POST['phone'];
echo$d =$_POST['city'];
echo$e =$_POST['address'];
$data ="update mp set name ='$a',roll ='$b',phone ='$c',city ='$d',address ='$e' where id = $id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:mp_display.php');
}


?>