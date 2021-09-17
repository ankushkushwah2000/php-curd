<?php
include('dbcon.php');
echo$id =$_POST['id'];
echo$u =$_POST['a'];
echo$p =$_POST['b'];
$data ="update user set username ='$u', password ='$p' where id = $id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:display.php');
}

?>