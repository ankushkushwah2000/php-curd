<?php 
include('dbcon.php');
$id =$_POST['id'];
echo$a =$_POST['pro_name'];
echo$b =$_POST['pro_prize'];
echo$c =$_POST['city'];
echo$d =$_POST['address'];
echo$e =$_POST['gender'];
// $f =$_FILES['image'];
// echo "<pre>";
// print_r($f);
echo$f =$_FILES['image']['name'];
echo$tem_name =$_FILES['image']['tmp_name'];
$file ="upload/".$f;
move_uploaded_file($tem_name,$file);
if ($f =="") {
   $data ="update pro_order set product_name ='$a',product_prize ='$b',city ='$c',address ='$d',gender ='$e' where id =$id";
$result =mysqli_query($con,$data);
header('location:product_display.php');
}
else{
	$data ="update pro_order set product_name ='$a',product_prize ='$b',city ='$c',address ='$d',gender ='$e',image ='$file' where id =$id";
	$result =mysqli_query($con,$data);
	header('location:product_display.php');
}


