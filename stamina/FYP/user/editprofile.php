<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="/js/jquery.min.js"></script>
	<script type="text/javascript" src="/js/bootstrap.min.js" ></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<title>Update profile</title>
	<style type="text/css">
		#name{
			font-family: 'Monoton', cursive;

		}
	</style>
</head>
<body>
	<div  class="container">
		<div class="row">
			<div  style="border-radius: 10px;line-height:100px;background: #428bca ;height:100px;color: white;font-size: 25px" class="col-md-12 col-sm-12 col-xs-12x">
				
				<span id="name">ISLAMABAD GYM</span>
			</div>
		</div><br><br>
	
<?php 
require_once '../db.php';
$userid=$_GET['id'];
$query="SELECT  name,uname,email,cnic,mobile,address FROM users WHERE id='$userid'";
$run=mysqli_query($con,$query);
$results=mysqli_fetch_assoc($run);
?>
<div class="col-md-12 col-lg-12 col-sm-12 ">
<form class="well" action="#" method="POST">
	


	<div class="form-group">
		<label>Name</label>
		<input type="text" class="form-control"value="<?php echo $results['name'] ?>" name="name">

	</div>

	<div class="form-group">
		<label>Username</label>
		<input class="form-control" type="text" value="<?php echo $results['uname'] ?>" name="uname" readonly="readonly">

	</div>

	<div class="form-group">
		<label>Email</label>
		<input type="email" class="form-control" value="<?php  echo $results['email'] ?>" name="email">

	</div>

	<div class="form-group">
		<label>cnic</label>
		<input type="number" class="form-control" value="<?php echo $results['cnic'] ?>" maxlength="14" name="cnic">

	</div>

	<div class="form-group">
		<label>Mobile</label>
		<input type="number" class="form-control" value="<?php echo $results['mobile'] ?>" maxlength="11" name="mobi">

	</div>

	<div class="form-group">
		<label>Address</label>
		<textarea class="form-control" name="add"><?php echo $results['address'] ?></textarea>

	</div>
	<center><button class="btn btn-lg btn-success" name="update">Update</button></center>
</form>

</div>
</div>

</body>
</html>


<?php

if (isset($_POST['update'])) {
	$name=$_POST['name'];
	$usernamee=$_POST['uname'];
	$emaill=$_POST['email'];
	$cnicc=$_POST['cnic'];
	$mobile=$_POST['mobi'];
	$addresss=$_POST['add'];


	$query="UPDATE users set name='$name',uname='$usernamee',email='$emaill',cnic='$cnicc',mobile='$mobile',address='$addresss' WHERE id='$userid'";
	$i=mysqli_query($con,$query);
	if ($i) {
		header("location:../Registerations/welcomeuser.php?p");
	}else{
		echo "failed";
	}
}

?>