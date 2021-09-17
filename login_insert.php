<?php 
include('dbcon.php');
$ema =$_POST['email'];
$pass =$_POST['password'];
$data ="SELECT * from new_user where email ='$ema' && password ='$pass'";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_num_rows($result);
// echo "<pre>";
// print_r($b);
if ($b ==1) {
	header('location:dashboard.php');
}
else{
	header('location:login.php');
}



?>