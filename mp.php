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
<style>
	.mg{
		    margin-top: 20px;
            padding-top: 11px;
            padding-bottom: 15px;
	}
</style>
</head>
<body>
	<div class="container  text-dark">
		<div class="row">
			<div class="col-md-3"></div>

			<div class="col-md-6 bg-dark text-white mg">
				<h1 class="text-info text-center">FORM</h1>
				<hr>
<form method="post" action="mp insert.php">
	<div class="mb-3">
	<label>name:</label>
	<input type="text" name="name" class="form-control">
    </div>
	<div class="mb-3">
	<label>roll</label>
	<input type="text" name="roll" class="form-control">
    </div>
	<div class="mb-3">
	<label>phone:</label>
	<input type="text" name="phone" class="form-control">
    </div>
	<div class="mb-3">
		<label>city:</label>
	<input type="text" name="city" class="form-control">
    </div>
	<div class="mb-3">
	<label>address:</label>
	<input type="text" name="address" class="form-control">
    </div>
    <div class="text-center">
	<input type="submit" name="" value="submit" class="btn btn-danger text-center">
    </div>
  </form>
   </div>
   <div class="col-md-3"></div>
 </div>
</div>
</body>
</html>