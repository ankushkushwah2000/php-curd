<?php 
include('dbcon.php');
$id= $_GET['k'];
$data ="SELECT * from student where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$call=mysqli_fetch_array($result);
// echo "<pre>";
// print_r($call);


?>
<h1><?php echo $call['id']?></h1>
<h1><?php echo $call['username']?></h1>
<h1><?php echo $call['password']?></h1>
<h1><?php echo $call['city']?></h1>
<h1><?php echo $call['phone']?></h1>
<h1><?php echo $call['dept']?></h1>
