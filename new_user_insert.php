<?php 

include('dbcon.php');
$a =$_POST['name'];
$b =$_POST['email'];
$c =$_POST['password'];

$emailcheck = mysqli_query($con,"SELECT * from new_user where email ='$b'");
// echo"<pre>";
// print_r($emailcheck);
// die;
if (mysqli_num_rows($emailcheck)>0) {
	echo "email is allready use";
	header('location:new_user.php');
}
else{
	$data ="INSERT INTO new_user(name,email,password)value('$a','$b','$c')";
mysqli_query($con,$data);
header('location:new_user.php');

}

// $data ="INSERT INTO new_user(name,email,password)value('$a','$b','$c')";
// mysqli_query($con,$data);
// header('location:new_user.php');




?>