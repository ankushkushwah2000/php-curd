<?php
include('dbcon.php');
$id =$_GET['e'];
$data ="SELECT * from cart where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
$c =$b['education'];
$d =explode(',', $c);
// echo "<pre>";
// print_r($d);

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
			<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<style>
	.gap{
		margin-top: 30px;
		margin-bottom: 10px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6 shadow gap">
				<h1 class="text-center text-info">update  form</h1>
				<form method="post" action="cart_update.php">
					<input type="hidden" name="id" value="<?php echo $b['id']?>">
					<div class="mb-3">
						<label>name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $b['name']?>">
					</div>
					<div class="mb-3">
						<label>city</label>
						<select class="form-control" name="city">
							<option
							<?php
							if ($b['city']=='select city') {
							 	echo 'selected';
							 } 
						?>
						>select city</option>
							<option
							<?php
							if ($b['city']=='gwalior') {
								echo 'selected';
							}
						?>
						>gwalior</option>
							<option
							<?php 
							if ($b['city']=='delhi') {
								echo 'selected';
							}
						?>
						>delhi</option>
							<option
							<?php 
							if ($b['city']=='guna') {
								echo 'selected';
							}
						?>
						>guna</option>
							<option
							<?php 
							if ($b['city']=='agra') {
								echo 'selected';
							}
						?>
						>agra</option>
						</select>
					</div>
					<div class="mb-3">
						<label>phone</label>
						<input type="text" name="phone" class="form-control" value="<?php echo $b['phone']?>">
					</div>

					<div class="mb-3">
						<label>education</label>
						<div class="form-control">
						<input type="checkbox" name="education[]" value="10th"
						<?php
						if (in_array('10',$d)) {
							echo 'checked';
						}

					   ?>
					>10th
						<input type="checkbox" name="education[]" value="12th"
						<?php
						if (in_array('12',$d)) {
							echo 'checked';
						}

					   ?>
					   >12th
						<input type="checkbox" name="education[]" value="BCA"
						<?php
						if (in_array('BCA',$d)) {
							echo 'checked';
						}

					   ?>
					   >BCA
						<input type="checkbox" name="education[]" value="MCA"
						<?php
						if (in_array('MCA',$d)) {
							echo 'checked';
						}

					   ?>
					   >MCA
					   </div>
					</div>

					<div class="mb-3">
						<label>gender</label>
						<div class="form-control">
						<input type="radio" name="gender" value="male"
						<?php
						if ($b['gender']=='male') {
						 	echo 'checked';
						 } 
					?>
					>male
						<input type="radio" name="gender" value="female"
						<?php
						if ($b['gender']=='female') {
						 	echo 'checked';
						 } 
					?>
					>female
						<input type="radio" name="gender" value="outher"
						<?php 
						if ($b['gender']=='outher') {
						 	echo 'checked';
						 }
					?>
					>outher
					  </div>
					</div>

					<div class="mb-3">
						<label>address</label>
						<textarea class="form-control" name="address">
							<?php echo $b['address']?>
						</textarea>
					</div>

					<div class="text-center">
						<input type="submit" name="" value="update" class="btn btn-info">
					</div>

				</form>
				
			</div><!-------col-md -6---->
		</div><!--------row end------>
		
	</div><!------container end------>

</body>
</html>