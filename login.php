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
				<h1 class="text-center text-info">login form</h1>
				<form method="post" action="login_insert.php">
					<div class="mb-3">
						<label>email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="mb-3">
                            <label>password</label>
							<input type="text" name="password" class="form-control">
					

					<div class="text-center">
						<input type="submit" name="" value="submit" class="btn btn-info">
					</div>

				</form>
				<br>
				<div class="text-center">
				<a href="new_user.php" class="text-center btn btn-success">create new user</a>
			</div>
				
			</div><!-------col-md -6---->
		</div><!--------row end------>
		
	</div><!------container end------>

</body>
</html>