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
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th colspan="12" class="text-center text-white bg-dark">display data</th>
		</tr>
		<tr>
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
			<th>city</th>
			<th>college</th>
			<th>address</th>
			<th>phone</th>
		</tr>
		<?php
		include('dbcon.php');
		$data ="SELECT * FROM mpct ORDER BY ID DESC";
		$result =mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($result);
		

		// $a = mysqli_fetch_array($result);
		// echo "<pre>";
		// print_r($a);

		while ($a =mysqli_fetch_array($result)) {
			// echo "<pre>";
			// print_r($a);
	
		?>
		<tr>
			<td><?php echo $a['id'];?></td>
			<td><?php echo $a['name'];?></td>
			<td><?php echo $a['email'];?></td>
			<td><?php echo $a['password'];?></td>
			<td><?php echo $a['city'];?></td>
			<td><?php echo $a['college'];?></td>
			<td><?php echo $a['address'];?></td>
			<td><?php echo $a['phone'];?></td>
			<td>
				<a href="mpct view.php?a=<?php echo $a['id'];?>" class="btn btn-info">view</a>
				<a href="" class="btn btn-danger">edit</a>
				<a href="" class="btn btn-success">delet</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
</div>
</body>
</html>