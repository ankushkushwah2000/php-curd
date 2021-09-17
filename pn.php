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
	.margin{
		    margin-top: 51px;
         padding-bottom: 20px;
         border-radius: 20px;
         padding-top: 30px;
         font-family: font-awsome;
             margin-bottom: 50px;
	}
</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				
			</div>
			<div class="col-md-6 shadow margin">
				<h1 class="text-info text-center">FORM</h1>
				<hr>
				<form method="post" action="pn_insert.php">
					<div class="mb-3">
						<label>name</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="mb-3">
						<label>college</label>
						<select name="college" class="form-control">
							<option>select college</option>
							<option>rjit</option>
							<option>mpct</option>
							<option>mits</option>
						</select>
			
					</div>
					<div class="mb-3">
						<label>gender</label>
						<input type="radio" name="gender" value="male">male
						<input type="radio" name="gender" value="female">female
						<input type="radio" name="gender" value="outher">outher
					</div>
					<div class="mb-3">
						<label>education</label>
						<input type="checkbox" name="education[]" value="10">10
						<input type="checkbox" name="education[]" value="12">12
						<input type="checkbox" name="education[]" value="b.e">b.e
					</div>
					<br>
					<div class="text-center">
						<input type="submit" name="" value="submit" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div><!-----row end----->
	</div><!-----container end----->

</body>
</html>