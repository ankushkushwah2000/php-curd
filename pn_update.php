<?php 
include('dbcon.php');
$id =$_POST['id'];
$a =$_POST['name'];
$b =$_POST['college'];
$c =$_POST['gender'];
$d =$_POST['education'];
// echo "<pre>";
// print_r($d);
$g = implode(',',$d); //array ko string me change//
echo $g;

$data ="update pn set name ='$a', college ='$b',gender ='$c',education ='$g' where id =$id";
// echo$data;
$result =mysqli_query($con,$data);
if ($result) {
	header('location:pn_display.php');
}




?>