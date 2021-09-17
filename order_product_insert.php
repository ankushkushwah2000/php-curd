<?php 
include('dbcon.php');
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
echo$data ="INSERT INTO pro_order(product_name,product_prize,city,address,gender,image)value('$a','$b','$c','$d','$e','$file')";
mysqli_query($con,$data);
header("location:order_product.php");







?>