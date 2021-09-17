<?php
include('dbcon.php');
$id =$_GET['e']; 
$data ="SELECT * from delhi where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
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
<div class="container-fluid text-center">
	<form method="post" action="delhi_update.php">
		<input type="hidden" name="id" value="<?php echo $b['id']?>">
		name:
		<input type="text" name="aa" value="<?php echo $b['name']?>">
		<br><br>
		email:
		<input type="text" name="ab" value="<?php echo $b['email']?>">
		<br><br>
		phone:
		<input type="text" name="ac" value="<?php echo $b['phone']?>">
		<br><br>
		city:
		<input type="text" name="ad" value="<?php echo $b['city']?>">
		<br><br>
		<input type="submit" name="" value="update">
	</form>
</div>
</body>
</html>