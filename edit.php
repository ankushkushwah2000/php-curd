<?php 
include('dbcon.php');
echo $id =$_GET['e'];
$data ="SELECT * from user where id = $id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
// echo $b['username'];



?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>get</title>
</head>
<body>
	<h1>edit form</h1>
<form method="post" action="update.php">
	<input type="hidden" name="id" value="<?php echo $b['id']?>">
	username :
	<input type="text" name="a" required value ="<?php echo $b['username'] ?>">
	<br><br>
    password:
	<input type="text" name="b" required value ="<?php echo $b['password'] ?>">
	<br><br>

	<input type="submit" name="" value="update">
</form>
</body>
</html>