<?php 
include("dbcon.php");
echo$a = $_POST['aa'];
echo$b = $_POST['ab'];
echo$c = $_POST['ac'];
echo$d = $_POST['ad'];
echo$e = $_POST['ae'];

$data ="INSERT INTO mits(name,email,password,address,phone)value('$a','$b','$c','$d','$e')";
echo $data;

mysqli_query($con,$data);
header('location:mits.php');






?>