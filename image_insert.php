<?php 
include('dbcon.php');
echo$a =$_POST['name'];
echo$b =$_POST['email'];
// $c =$_FILES['image'];
// echo "<pre>";
// print_r($c);
echo$c =$_FILES['image']['name'];
echo$tem_name =$_FILES['image']['tmp_name'];
$file ="upload/".$c;
move_uploaded_file($tem_name,$file);
$data ="INSERT INTO image(name,email,image)value('$a','$b','$file')";
mysqli_query($con,$data);


?>