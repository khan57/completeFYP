<?php

session_start();
if (isset($_SESSION['username'])) {
header("location:welcomeuser.php");}else{
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="main.js"></script>
	<!--<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> -->
	<title>USER login</title>
	<style type="text/css">
		body{

			margin :0;
			padding: 0;
		}

		#name{
			font-family: 'Monoton', cursive;
		}
	</style>
</head>
<body style="background-image:url(../images/logi.jpg);">


<div class="container-fluid" >
<div class="row" style="margin-bottom: 10px">
		<div class="col-md-12" style="background-color: #428bca;height: 100px;line-height: 100px;" >
			<span id="name" style="color: white;font-size: 25px;">IIUI  &nbsp&nbsp&nbspGYM</span>
			<button  style="margin-top: 30px;float: right;" class="btn btn-default"><a style="text-decoration: none;font-weight: bolder; color: green" href="trainerlogin.php">Login as a trainer ?</a></button>

		</div>
	</div>

	<div class="row">
		<div class="col-md-1 col-lg-1 hidden-sm hidden-xs"></div>
		<div class="col-md-10 col-lg-10 col-sm-12 col-xs-12">
	
<center>	
	<h1 style="color: white">User Login</h1>


<form  class="well" style="width: 50%" method="POST"  action="#">
	
<div class="form-group">
	<label>Username:</label>
	<input placeholder="Enter Username"   type="text"  class="form-control" name="unee" required="required">
</div>

<div class="form-group">
	<label >Password:</label>
	<input placeholder="Enter Password" id="pass" class="form-control" type="password" name="pasee" required="required">
</div>
<button name="submit" class="btn btn-primary btn-lg">Login</button><span>
	&nbsp&nbsp&nbsp&nbsp<button class="btn btn-success btn-lg"><a style="text-decoration: none;color: white" href="users.php">Signup</a></button>
	</span>
</form>
</center>
</div>
<div class="col-md-1 hidden-xs hidden-sm col-lg-1"></div>
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

	

$check="SELECT * FROM users where uname='$UN' && password='$PASS'";

$count=mysqli_query($con,$check);

 $a=mysqli_num_rows($count);
if($a==1){
$_SESSION['username']=$UN;
header('location:welcomeuser.php');

}
else{


	echo "<script>
alert('Sorry!!!Invalid username/Password')
	</script>";
}

}}
?>