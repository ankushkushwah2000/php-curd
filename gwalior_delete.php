<?php 
include('dbcon.php');
$id =$_GET['d'];
$data ="delete from gwalior where id =$id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:gwalior_display.php');
}



?>