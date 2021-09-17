<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<title></title>
				<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th colspan="11" class="text-center bg-dark text-white">data display</th>
		</tr>
		<tr>
			<th>id</th>
			<th>product_name</th>
			<th>product_prize</th>
			<th>city</th>
			<th>address</th>
			<th>gender</th>
			<th>image</th>
			<th>action</th>
		</tr>
		<?php
		include('dbcon.php');
		$data ="SELECT * from pro_order order by id desc";
		$result =mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($result);
		// $aa =mysqli_fetch_array($result);
		// echo "<pre>";
		// print_r($aa);
		while ($aa =mysqli_fetch_array($result)) {
		 	// echo "<pre>";
		 	// print_r($aa);
		 


		?>
		<tr>
			<td><?php echo $aa['id']?></td>
			<td><?php echo $aa['product_name']?></td>
			<td><?php echo $aa['product_prize']?></td>
			<td><?php echo $aa['city']?></td>
			<td><?php echo $aa['address']?></td>
			<td><?php echo $aa['gender']?></td>
			<td><img src="<?php echo $aa['image']?>" widht=50px; height=50px;></td>
			<td>
				<a href="order_product_view.php?v=<?php echo $aa['id']?>" class="btn btn-info">view</a>
				<a href="order_product_update.php?u=<?php echo $aa['id']?>" class="btn btn-success">update</a>
				<a href="" class="btn btn-danger">delete</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
	
</div><!------container end----->
</body>
</html>