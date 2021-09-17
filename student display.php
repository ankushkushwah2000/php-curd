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
			<th colspan="12" class="text-center bg-info text-white">DISPLAY DATA</th>
		</tr>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>city</th>
			<th>phone</th>
			<th>dept</th>
			<th>button</th>
		</tr>
		<?php
		include('dbcon.php');
		$data ="SELECT * from student order by id desc";
		$result =mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($result);

		// $b =mysqli_fetch_array($result);
		// echo "<pre>";
		// print_r($b); 

		while ($b =mysqli_fetch_array($result)) {
			// echo "<pre>";
		 //     print_r($b); 
		
		?>
		<tr>
			<td><?php echo $b['id']?></td>
			<td><?php echo $b['username']?></td>
			<td><?php echo $b['password']?></td>
			<td><?php echo $b['city']?></td>
			<td><?php echo $b['phone']?></td>
			<td><?php echo $b['dept']?></td>
			<td>
				<a href="student view.php?k=<?php echo $b['id']?>" class="btn btn-info">view</a>
				<a href="" class="btn btn-success">edit</a>
				<a href="" class="btn btn-danger">delet</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
</div>
</body>
</html>