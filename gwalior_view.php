<?php  
include('dbcon.php');
$id =$_GET['v'];
$data ="SELECT * from gwalior where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
?>
<h1><?php echo $b['id'];?></h1>
<h1><?php echo $b['name'];?></h1>
<h1><?php echo $b['email'];?></h1>
<h1><?php echo $b['password'];?></h1>
<h1><?php echo $b['city'];?></h1>
<h1><?php echo $b['college'];?></h1>
<h1><?php echo $b['address'];?></h1>
<h1><?php echo $b['phone']?></h1>
