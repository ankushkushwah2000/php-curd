<?php 
include("dbcon.php");
$id =$_GET['v'];
$data ="SELECT * from image where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);



?>
<h1><?php echo $b['id']?></h1>
<h1><?php echo $b['name']?></h1>
<h1><?php echo $b['email']?></h1>
<img src="<?php echo $b['image']?>"width=300px; height=200px;>