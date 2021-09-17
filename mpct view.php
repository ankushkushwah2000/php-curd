<?php 
include('dbcon.php');

echo $id = $_GET['a'];

$data = "SELECT * FROM mpct WHERE id =$id";
$result = mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$a =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($a);



?>
<h1><?php echo $a['id']?></h1>
<h1><?php echo $a['name']?></h1>
<h1><?php echo $a['email']?></h1>
<h1><?php echo $a['password']?></h1>
<h1><?php echo $a['city'] ?></h1>
<h1><?php echo $a['college'] ?></h1>
<h1><?php echo $a['address'] ?></h1>
<h1><?php echo $a['phone'] ?></h1>
