<?php 
include('dbcon.php');
$id =$_GET['e'];
$data ="SELECT * from pn where id =$id";
$result =mysqli_query($con,$data);
// echo "<pre>";
// print_r($result);

$b =mysqli_fetch_array($result);
// echo "<pre>";
// print_r($b);
$c= $b['education'];
 $d= explode(',', $c);  //string ko array me conbort kar ta h //
//  echo "<pre>";
// print_r($d);


?>



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
				<h1 class="text-info text-center">UPDATE FORM</h1>
				<hr>
				<form method="post" action="pn_update.php">
					<input type="hidden" name="id" value="<?php echo $b['id']?>">
					<div class="mb-3 ">
						<label>name</label>
						<input type="text" name="name" class="form-control shadow" value="<?php echo $b['name']?>">
					</div>
					<div class="mb-3">
						<label>college</label>
						<select name="college" class="form-control shadow">
							<option>select college</option>
							<option
                             <?php 
                             if ($b['college']=='rjit') {
                             	echo 'selected';
                             }

                             ?>

							>rjit</option>
							<option
							<?php 
                             if ($b['college']=='mpct') {
                             	echo 'selected';
                             }

                             ?>
                             >mpct</option>
							<option
							<?php 
                             if ($b['college']=='mits') {
                             	echo 'selected';
                             }

                             ?>
                             >mits</option>
						</select>
			
					</div>
					<div class="mb-3 form-control shadow">
						<label>gender</label>
						<input type="radio" name="gender" value="male"
						<?php
						
                             if ($b['gender']=='male') {
                             	echo 'checked';
                             }

                              
					?>
					>male
						<input type="radio" name="gender" value="female"
						<?php 
                             if ($b['gender']=='female') {
                             	echo 'checked';
                             }

                             ?>
                             >female
						<input type="radio" name="gender" value="outher"
						<?php 
                             if ($b['gender']=='outher') {
                             	echo 'checked';
                             }

                             ?>
                             >outher
					</div>
					<div class="mb-3 form-control shadow">
						<label>education</label>
						<input type="checkbox" name="education[]" value="10"
						<?php 
                        if (in_array('10',$d)){
                        	echo "checked";
                        }
                        

						?>


						>10
						<input type="checkbox" name="education[]" value="12"
						<?php 
                        if (in_array('12',$d)){
                        	echo "checked";
                        
                        }

						?>


						>12
						<input type="checkbox" name="education[]" value="b.e"
						<?php 
                        if (in_array('b.e',$d)){
                        	echo "checked";
                        
                        }

						?>


						>b.e
					</div>
					<br>
					<div class="text-center">
						<input type="submit" name="" value="update" class="btn btn-danger">
					</div>
				</form>
			</div>
		</div><!-----row end----->
	</div><!-----container end----->

</body>
</html>

