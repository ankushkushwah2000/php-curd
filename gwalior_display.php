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
	<table class="table table-bordered">
		<tr>
			<th colspan="10" class="text-center bg-info text-white">DATA DISPLAY</th>
		</tr>
		<tr class="bg-dark text-white">
			<th>id</th>
			<th>name</th>
			<th>email</th>
			<th>password</th>
			<th>city</th>
			<th>college</th>
			<th>address</th>
			<th>phone</th>
			<th>action</th>
		</tr>
		<?php 
        include('dbcon.php');
        $data ="SELECT * from gwalior order by id desc";
        $result =mysqli_query($con,$data);
        // echo "<pre>";
        // print_r($result);

         // $b =mysqli_fetch_array($result);
         // echo "<pre>";
         // print_r($b);
         while ($b =mysqli_fetch_array($result)) {
         	// echo "<pre>";
         	// print_r($b);
         


		?>
		<tr class="">
			<td><?php echo $b['id']?></td>
			<td><?php echo $b['name']?></td>
			<td><?php echo $b['email']?></td>
			<td><?php echo $b['password']?></td>
			<td><?php echo $b['city']?></td>
			<td><?php echo $b['college']?></td>
			<td><?php echo $b['address']?></td>
			<td><?php echo $b['phone']?></td>
			<td>
				<a href="gwalior_view.php?v=<?php echo $b['id']?>" class="btn btn-info">view</a>
				<a href="gwalior_edit.php?e=<?php echo $b['id']?>" class="btn btn-success">edit</a>
				<a href="gwalior_delete.php?d=<?php echo $b['id']?>" class="btn btn-danger">delete</a>
			</td>
		</tr>
		<?php 
}
		?>
	</table>
</div>
</body>
</html>