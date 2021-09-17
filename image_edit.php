<?php 
include('dbcon.php');
$id =$_GET['e'];
$data ="SELECT * from image where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);
$vv =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($vv);



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
				<h1 class="text-center text-info">update form</h1>
				<form method="post" action="image_update.php" enctype="multipart/form-data">
					<input type="hidden" name="id" value="<?php echo $vv['id']?>">
					<div class="mb-3">
						<label>name</label>
						<input type="text" name="name" class="form-control" value="<?php echo $vv['name']?>">
					</div>
					<div class="mb-3">
                            <label>email</label>
							<input type="text" name="email" class="form-control" value="<?php echo $vv['email']?>">
					<div class="mb-3">
						<label>image</label>
						<input type="file" name="image" class="form-control">
						<img src="<?php echo $vv['image']?>"width=50px; height=50px;>
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