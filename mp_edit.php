<?php
include("dbcon.php");
$id =$_GET['e'];
$data ="SELECT * from mp where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$d=mysqli_fetch_array($result);
// echo "<pre>";
// print_r($d);



?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container text-center bg-info">
	<h1>update form</h1>
<form method="post" action="mp_update.php">
	<input type="hidden" name="id" value="<?php echo $d['id']?>">
	name:
	<input type="text" name="name" required value="<?php echo $d['name']?>">
	<br><br>
	roll:
	<input type="text" name="roll" required value="<?php echo $d['roll']?>">
	<br><br>
	phone:
	<input type="text" name="phone" required value="<?php echo $d['phone']?>">
	<br><br>
	city:
	<input type="text" name="city" required value="<?php echo $d['city']?>">
	<br><br>
	address:
	<input type="text" name="address" required value="<?php echo $d['address']?>">
	<br><br>
	<input type="submit" name="" value="update" class="btn btn-success">
</form>
  </div>
</body>
</html>