<?php

session_start();
if (isset($_SESSION['admin'])) {
	header("location:welcomeadmin.php");
}else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>ADmin login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
</head>
<body>

<?php include 'header.php'; ?>
<div class="container-fluid">
	<div class="row"><div class="col-md-12 col-sm-12">
	<div class="well">
	<center><h2>Admin Login</h2>
<form style="width: 50%" class="form-group" method="POST"  action="#">
	
<div class="form-group">
	<label>Username:</label>
	<input class="form-control" id="uni" type="text" name="unee" required="required">
</div>

<div class="form-group">
	<label>Password:</label>
	<input id="pass" class="form-control" type="password" name="pasee" required="required">
</div>
<button name="submit" class="btn btn-primary btn-lg">Login</button>
<button class="btn btn-success btn-lg"><a style="text-decoration: none;color: white" href="adminsignup.php">Register</a></button>
</form>
</div>
</center>
</div>
</div></div>

</body>
</html>


<?php

include 'db.php';


if(isset($_POST['submit']))
{

 $UN=$_POST['unee'];
  $PASS=$_POST['pasee'];

	

$check="SELECT * FROM admin where uname='$UN' && pass='$PASS'";

$count=mysqli_query($con,$check);

 $a=mysqli_num_rows($count);
if($a==1){

$_SESSION['admin']=$UN;
header("location:welcomeadmin.php");

}
else{


	echo "invalid";
}

}
?>
<?php } ?>
