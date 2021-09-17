<?php 
include('dbcon.php');
$id =$_GET['e'];
$data ="SELECT * from gwalior where id =$id";
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
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6 shadow">
				<h1 class="text-info text-center">UPDATE FORM</h1>
				<form method="post" action="gwalior_update.php">
					<input type="hidden" name="id" value="<?php echo $b['id']?>">
					<div class="mb-3">
						<label>name</label>
						<input type="text" name="name" class="form-control" required value="<?php echo $b['name']?>">
					</div>
					<div class="mb-3">
						<label>email</label>
						<input type="text" name="email" class="form-control" required value="<?php echo $b['email']?>">
					</div>
					<div class="mb-3">
						<label>password</label>
						<input type="text" name="password" class="form-control" required value="<?php echo $b['password']?>">
					</div>
					<div class="mb-3">
						<label>city</label>
						<input type="text" name="city" class="form-control" required value="<?php echo $b['city']?>">
					</div>
					<div class="mb-3">
						<label>college</label>
						<input type="text" name="college" class="form-control" required value="<?php echo $b['college']?>">
					</div>
					<div class="mb-3">
						<label>address</label>
						<input type="text" name="address" class="form-control" required value="<?php echo $b['address']?>">
					</div>
					<div class="mb-3">
						<label>phone</label>
						<input type="text" name="phone" class="form-control" required value="<?php echo $b['phone']?>">
					</div>
					<div class="text-center">
						<input type="submit" name="" value="update" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div><!-----row end----->
	</div><!-----container end----->
	

</body>
</html>