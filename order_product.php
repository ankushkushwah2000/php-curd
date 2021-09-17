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
				<h1 class="text-center text-info">order form</h1>
				<form method="post" action="order_product_insert.php" enctype="multipart/form-data">
					<div class="mb-3">
						<label>product_name</label>
						<input type="text" name="pro_name" class="form-control">
					</div>
					<div class="mb-3">
						<label>product_prize</label>
						<input type="text" name="pro_prize" class="form-control">
					</div>
					<div class="mb-3">
						<label>city</label>
						<select class="form-control" name="city">
							<option>select city</option>
							<option>gwalior</option>
							<option>delhi</option>
							<option>guna</option>
							<option>agra</option>
						</select>
					</div>

					<div class="mb-3">
						<label>address</label>
						<textarea class="form-control" name="address"></textarea>
					</div>

					

					<div class="mb-3">
						<label>gender</label>
						<div class="form-control">
						<input type="radio" name="gender" value="male">male
						<input type="radio" name="gender" value="female">female
						<input type="radio" name="gender" value="outher">outher
					  </div>
					</div>

					<div class="mb-3">
						<label>image</label>
						<input type="file" name="image" class="form-control">
					</div>


					<div class="text-center">
						<input type="submit" name="" value="submit" class="btn btn-info">
					</div>

				</form>
				
			</div><!-------col-md -6---->
		</div><!--------row end------>
		
	</div><!------container end------>

</body>
</html>