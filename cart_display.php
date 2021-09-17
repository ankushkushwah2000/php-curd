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
</head>
<body>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th colspan="11" class="text-center bg-info text-white">DATA DISPLAY</th>
		</tr>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>city</th>
			<th>phone</th>
			<th>education</th>
			<th>gender</th>
			<th>address</th>
			<th>action</th>
		</tr>
		<?php
		include('dbcon.php');
		$data ="SELECT * from cart order by id desc";
		$pro =mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($pro);
		// $b =mysqli_fetch_array($pro);
		// echo "<pre>";
		// print_r($b);
		while ($b =mysqli_fetch_array($pro)) {
		       // echo "<pre>";
		       // print_r($b);
		

		?>
		<tr>
			<td><?php echo $b['id']?></td>
			<td><?php echo $b['name']?></td>
			<td><?php echo $b['city']?></td>
			<td><?php echo $b['phone']?></td>
			<td><?php echo $b['education']?></td>
			<td><?php echo $b['gender']?></td>
			<td><?php echo $b['address']?></td>
			<td>
				<a href="cart_view.php?v=<?php echo $b['id']?>" class="btn btn-info">view</a>
				<a href="cart_edit.php?e=<?php echo $b['id']?>" class="btn btn-success">edit</a>
				<a href="" class="btn btn-danger">delete</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
</div>
</body>
</html>