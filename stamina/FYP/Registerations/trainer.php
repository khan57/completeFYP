<!DOCTYPE html>
<html>
<head>
	<title>Trainer signUp||</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script  src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<style type="text/css">
	input{

			width: 50%;
		}

</style>
</head>
<body>
	<?php
include 'header.php';
	?>
<div  class="container-fluid">
	

	<center>
	<h1>Trainer Registeration</h1>
<div class="well well-lg">
<form style="width: 60%" class="form-group form" method="POST"  enctype="multipart/form-data" >
	
<div class="form-group">
	<label>Name:</label>
	<input class="form-control" type="text" name="tnamee" required="required">
</div>
<div class="form-group">
	<label>User name:</label>
	<input class="form-control" type="text" name="tunamee" required="required">
</div>
<div class="form-group">
	<label> password:</label>
	<input class="form-control" type="password" name="tpass" required="required">
</div>
<div class="form-group">
	<label>CNIC#:</label>
	<input class="form-control" type="number" name="tcnic" required="required">
</div>
<div class="form-group">
	<label>MObile#:</label>
	<input class="form-control" type="number" name="tmobile" required="required">
</div>
<div class="form-group">
	<label>Address:</label>
	<input class="form-control" type="text" name="tAddress" required="required">
</div>
<div class="form-group">
	<label> Shift:</label>
	<select class="form-control" name="tshift">
		<option>Morning</option>
		<option>Evening</option>
	</select>
</div>
<div class="form-group">
	<label> Speciality:</label>
	<select class="form-control" name="special">
		<option>Strength Training </option>
		<option>Pilates</option>
		<option>HIIT</option> 
		<option>Cardiovascular</option>
		<option>Yoga / Flexibility</option>
		<option>Low Impact </option>
		<option>Toning</option>
	</select>
</div>
<div class="form-group">
	<label>Profile Image</label>
	<input class="form-control" type="file" name="imge">

</div>
<center><button class="btn btn-success" name="register" >Register</button></center>
</form></div>
</center>
</div>
</body>
</html>


<?php

if (isset($_POST['register'])) {
	
  $unamee=$_POST['tunamee'];
  $namee=$_POST['tnamee'];
  $passi=$_POST['tpass'];
  $cnici=$_POST['tcnic'];
    $add=$_POST['tAddress'];
   $mobi=$_POST['tmobile'];
  $specialiity=$_POST['special'];
  $time=$_POST['tshift'];
 $imgname=$_FILES['imge']['name'];
  $tempname=$_FILES['imge']['tmp_name'];
    move_uploaded_file($tempname, "uploads/$imgname");

include 'db.php';
$Q="INSERT INTO trainer (name,username,password,address,cnic,mobile,special,timing,img) VALUES('$namee','$unamee','$passi','$add','$cnici','$mobi','$specialiity','$time','$imgname')";
$run=mysqli_query($con,$Q);
if ($run) {
	echo "inserted";
}else{
	echo "failed";
}
}

?>