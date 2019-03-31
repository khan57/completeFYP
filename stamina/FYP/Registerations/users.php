<!DOCTYPE html>
<html>
<head>
	<title>USERS signUp||</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script  src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript"  src="main.js"></script>
	<link rel="stylesheet" type="text/css" href="css/fontawesome.css">

</head>
<body>
	<?php include 'header.php'?>
<div  class="container-fluid">

<div class="row">

	<div class="col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
<form  enctype="multipart/form-data" method="POST"  >
	
<div class="form-group">
	<label> Full Name:</label>
	<input class="form-control" type="text" name="ufnamee" required="required">
</div>
<div class="form-group">
	<label> Username:</label><span style="color: red" id="mssg"></span>
	<input id="un" onkeyup="check();"  class="form-control" type="text" name="unamee" required="required">
</div>
<div class="form-group">
	<label>Password:</label>
	<input class="form-control" type="Password" name="upass" required="required">
</div>
<div class="form-group">
	<label>Email:</label>
	<input class="form-control" type="email" name="uemail" required="required">
</div>
<div class="form-group">
	<label>CNIC#:</label>
	<input class="form-control" type="number" name="ucnic" required="required">
</div>
<div class="form-group">
	<label>MObile#:</label>
	<input  class="form-control" type="text" name="umobile" required="required">
</div>
<div class="form-group">
	<label>Address:</label>
	<input class="form-control" type="text" name="uadd" required="required">
</div>
<div class="form-group">
	<label>Subscription Type</label>
	<select class="form-control" name="sub">
		<option value="3">3 Months</option>
		<option value="6">6 Months</option>
		<option value="12">1 year</option>
		
	</select>

</div>
<div class="form-inline">
	
	<label>Height</label><br>
	<input placeholder="feet ..." style="width: 45%"   class="form-control form-inline" min="1" max="8" type="number" name="feet" >
	<input placeholder="inches ..." style="width: 45%"   class="form-control" min="1" max="12" type="number" name="inches">
</div><br>
<div class="form-group">
	<label>Weight</label>
	<input type="number"  name="weight" class="form-control">
</div>
<div class="form-group">
	<label>Age:</label>
	<input id="amobile" class="form-control" type="number" name="age" required="required">
</div>
<div class="form-group">
	<label> Image </label>
	<input type="file" class="form-control" name="uimg">

</div>
<center><button class="btn btn-success" id="regbtn"  name="register">Register</button><span><button style="margin-left: 6px; color: white; text-decoration: none;" class="btn btn-primary"><a style="text-decoration: none;color: white;" href="userlogin.php">Login</a></button></span></center>

</form>
</div>
</div>
</div>
</body>
</html


<?php
if (isset($_POST['register'])) {
	include 'db.php';
$unamee=$_POST['unamee'];
  $namee=$_POST['ufnamee'];
  $passi=$_POST['upass'];
  $cnici=$_POST['ucnic'];
    $add=$_POST['uadd'];
   $mobi=$_POST['umobile'];
  $email=$_POST['uemail'];
  $SUB=$_POST['sub'];
  $feet=   $_POST['feet'];
  $inches=$_POST['inches'];
  $weight=$_POST['weight'];
  $AG=$_POST['age'];
     $imgname=$_FILES['uimg']['name'];
     $tempname=$_FILES['uimg']['tmp_name'];

    move_uploaded_file($tempname, "uploads/$imgname");

  
/*if ($unamee= ' ' || $namee =' '|| $passi=' ' || $mobi='  ' || $add=' '|| $cnici=' ' || $email = ' ') {
	echo "Please fill all fields";
	exit();
}*/


$tot=$feet."\'".$inches."\'\'";

	
$query="INSERT INTO users (name,uname,password,email,cnic,mobile,address,subtype,height,weight,img,age)  VALUES ('$namee','$unamee','$passi','$email','$cnici','$mobi','$add','$SUB','$tot','$weight','$imgname',$AG)";
@$u=mysqli_query($con,$query);
if ($u) {
	echo "<script><alert>You have been registered successfully</script>";
}
else{

	echo "record failed";
}
//}

}
?>