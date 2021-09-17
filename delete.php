<?php 
include('dbcon.php');
echo $id =$_GET['d'];
$data ="delete from user where id =$id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:display.php');
}

?>