<?php 
include('dbcon.php');
echo$id =$_POST['id'];
echo$a =$_POST['aa'];
echo$b =$_POST['ab'];
echo$c =$_POST['ac'];
echo$d =$_POST['ad'];
$data ="update delhi set name ='$a',email ='$b',phone ='$c',city ='$d' where id =$id";
$result =mysqli_query($con,$data);
if ($result) {
	header('location:delhi dispiay.php');
}



?>