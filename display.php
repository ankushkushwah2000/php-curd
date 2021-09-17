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
	<br><br>
<div class="container">
	<table class="table table-bordered">
		<tr>
			<th colspan="4" class="text-center text-warning bg-dark">display data</th>
		</tr>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>action</th>
		</tr>
		<?php
		include("dbcon.php");
		$data ="SELECT * FROM user order by id desc";
		$result =mysqli_query($con,$data);
		// echo "<pre>";
		// print_r($result);
		// die;

		// $a = mysqli_fetch_array($result);
		// echo "<pre>";
		// print_r($a);
		// die;
		while ($a =mysqli_fetch_array($result)) {
			  // echo "<pre>";
		   //     print_r($a);
		       
		?>
		<tr>
		
			<td><?php echo $a['id'];?></td>
			<td><?php echo $a['username'];?></td>
			<td><?php echo $a['password'];?></td>
			<td>
				<a href="view.php?v=<?php echo $a['id'];?>" class="btn btn-info">view</a>
				<a href="edit.php?e=<?php echo $a['id'];?>" class="btn btn-success">edit</a>
				<a href="delete.php?d=<?php echo $a['id']?>" class="btn btn-danger">delet</a>
			</td>
		</tr>
		<?php 
	}
	?>
	</table>
</div>
</body>
</html>