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
	<div class="container-fluid">
		<table class="table table-bordered">
			<tr><th colspan="12" class="text-center bg-danger text-dark">DATA DISPLAY</th></tr>
			<tr>
				<th>id</th>
				<th>name</th>
				<th>email</th>
				<th>password</th>
				<th>address</th>
				<th>phone</th>
			</tr>
			<?php
			include('dbcon.php');
			$data ="SELECT * from mits order by id desc";
			$result =mysqli_query($con,$data);
			// echo "<pre>";
			// print_r($result);
			// die

			// $d =mysqli_fetch_array($result);
			// echo "<pre>";
			// print_r($d);
			// die
			while ($d =mysqli_fetch_array($result)) {
				// echo "<pre>";
				// print_r($d);
			
			?>
			<tr>
				<td><?php echo $d['id']?></td>
				<td><?php echo $d['name']?></td>
				<td><?php echo $d['email']?></td>
				<td><?php echo $d['password']?></td>
				<td><?php echo $d['address']?></td>
				<td><?php echo $d['phone']?></td>
				<td>
					<a href="mits view.php?k=<?php echo $d['id']?>" class="btn btn-info">view</a>
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