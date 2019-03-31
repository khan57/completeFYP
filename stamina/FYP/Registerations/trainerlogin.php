
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#name{
			font-family: 'Monoton', cursive;
		}
		
		
	</style>
	<title>Trainer Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script  src="js/jquery.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<!--<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet">-->
</head>
<body style="background-image:url(../images/logi.jpg);" >


<div class="container-fluid">
	<div class="row" style="margin-bottom: 10px">
		<div class="col-md-12" style="background-color: #428bca;height: 50px;line-height: 50px;" >
			<span id="name" style="color: white;font-size: 25px;">IIUI GYM</span>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
		<center>	<span><img class="img-circle" src="../images/user.png"></span></center>
			<form class="well"  style="height:300px;padding-top:30px;border-radius: 5px" method="POST"  action="#">
	
<div class="form-group">
	<label>Username:</label>
	<input class="form-control"  id="un" type="text" name="unee" required="required">
</div>

<div class="form-group">
	<label>Password:</label>
	<input class="form-control" id="pass" type="password" name="pasee" required="required">
</div>
<center><button name="submit" class="btn btn-lg btn-default">Login</button>
<span><button name="submit" class="btn btn-lg btn-success"><a style="color: white;text-decoration: none;" href="trainer.php">Signup</a></button></span></center>
</form>
		</div>

		<div class="col-md-3"></div>


	</div>


</div>

</body>
</html>


<?php

include 'db.php';


if(isset($_POST['submit']))
{

 $UN=$_POST['unee'];
  $PASS=$_POST['pasee'];

	

$check="SELECT * FROM trainer where username='$UN' && password='$PASS'";

$count=mysqli_query($con,$check);

 $a=mysqli_num_rows($count);
if($a==1){
$_SESSION['username']=$UN;
header("location:welcometrainer.php");

}
else{


	echo "invalid";
}

}
?>