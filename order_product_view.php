<?php 
include('dbcon.php');
$id =$_GET['v'];
$data ="SELECT * from pro_order where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$bb =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($bb);


?>
<h1><?php echo $bb['id']?></h1>
<h1><?php echo $bb['product_name']?></h1>
<h1><?php echo $bb['product_prize']?></h1>
<h1><?php echo $bb['city']?></h1>
<h1><?php echo $bb['address']?></h1>
<h1><?php echo $bb['gender']?></h1>
<h1><?php echo $bb['image']?></h1>
<img src="<?php echo $bb['image']?>" widht=200px; height=300px;>
