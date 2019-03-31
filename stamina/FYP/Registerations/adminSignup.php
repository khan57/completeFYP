<!DOCTYPE html>
<html>
<head>
	<title>Admin signUp||</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script  src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	

</head>
<body>
	<?php  include 'header.php' ?>

<div  class="container">
	<center>
<form class="form" style="width: 60%" >
	
<div class="form-group">
	
	<label>Name:</label>
	<input id="anamee" class="form-control" type="text" name="anamee" required="required">
</div>
<div class="form-group">
	<label>user Name:</label>
	<input id="auname" class="form-control" type="text" name="auname" required="required">
</div>
<div class="form-group">
	<label>Password:</label>
	<input id="apass" class="form-control" type="Password" name="apass" required="required">
</div>

<div class="form-group">
	<label>CNIC#:</label>
	<input id="acnic" class="form-control" type="number" name="acnic" required="required">
</div>
<div class="form-group">
	<label>MObile#:</label>
	<input id="amobile" class="form-control" type="number" name="amobile" required="required">
</div>
<div class="form-group">
	<label>Address:</label>
	<textarea id="aAdress" name="aAdress"  class="form-control" cols="6"></textarea>
</div>
<center><button type="button" onclick="insertadmin()" class="btn btn-success" name="register" >Register</button></center>
<center><p style="font-style: bold;color:green" id="result"><b></b></p></center>
</form>
</center>
</div>
<script  src="main.js"></script>
</body>
</html
