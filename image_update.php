<?php 
include('dbcon.php');
$id =$_POST['id'];
echo$a =$_POST['name'];
echo$b =$_POST['email'];
// $c =$_FILES['image'];
// echo "<pre>";
// print_r($c);
echo$c =$_FILES['image']['name'];
echo$tem_name =$_FILES['image']['tmp_name'];
$file ="upload/".$c;
move_uploaded_file($tem_name,$file);
if ($c=="") {
	$data ="update image set name ='$a',email ='$b' where id =$id";
	$result=mysqli_query($con,$data);
}
else{
	$data ="update image set name ='$a',email ='$b',image ='$file' where id =$id";
	$result =mysqli_query($con,$data);
}



?>