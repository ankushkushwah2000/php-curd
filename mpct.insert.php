<?php 
include("dbcon.php");
echo$a =$_POST['aa'];
echo$b =$_POST['ab'];
echo$c =$_POST['ac'];
echo$d =$_POST['ad'];
echo$e =$_POST['ae'];
echo$f =$_POST['af'];
echo$g =$_POST['ag'];

$data ="INSERT INTO mpct(name,email,password,city,college,address,phone)value('$a','$b','$c','$d','$e','$f','$g')";
echo$data;
mysqli_query($con,$data);
header('location:mpct.php');


?>