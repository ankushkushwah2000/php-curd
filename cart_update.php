<?php 
include('dbcon.php');
$id =$_POST['id'];
$a =$_POST['name'];
$b =$_POST['city'];
$c =$_POST['phone'];
$d =$_POST['education'];
$e =$_POST['gender'];
$f =$_POST['address'];

$g =implode(',',$d );
 echo$g;
$data ="update cart set name ='$a',city ='$b',phone ='$c',education ='$g',gender ='$e',address ='$f' where id =$id";
$result =mysqli_query($con,$data);
// echo$data;

?>