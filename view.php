<?php 
include('dbcon.php');

echo $id = $_GET['v'];

$data ="SELECT * from user WHERE id = $id";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$a = mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);


?>
<h1><?php echo $a['id'] ?></h1>
<h1><?php echo $a['username'] ?></h1>
<h1><?php echo $a['password'] ?></h1>