
<?php
if (isset($_GET['ii'])) {
 $jo=$_GET['ii'];

}
require 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Members details</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container">
	<div class="row">
			<div  style="border-radius: 10px;line-height:100px;background: #428bca ;height:100px;color: white;font-size: 25px" class="col-md-12 col-sm-12 col-xs-12x">
				
				<span id="name">ISLAMABAD GYM</span>
			</div>
		</div><br><br>
	
<table class="table table-responsive table-bordered">
	
	<thead>
		<tr>
			<th>Name</th>
			<th>Membership type</th>
			<th>Height</th>
			<th>Weight</th>
			<th>Start date</th>
			<th>End date</th>
		</tr>
	</thead>
	<tbody>
		<?php

$a="SELECT  name,subtype,height,weight from users where id='$jo'";
$j=mysqli_query($con,$a);
$feched=mysqli_fetch_assoc($j); 
$e="SELECT doj,ed from enrolled where uid='$jo'";
$run=mysqli_query($con,$e);
$row=mysqli_fetch_assoc($run);
		?>
		<tr>
			<td><?php echo $feched['name']; ?></td>
			<td><?php echo $feched['subtype']; ?></td>
			<td><?php echo $feched['height'];?></td>
			<td><?php echo $feched['weight']; ?></td>
			<td><?php echo $row['doj']; ?></td>
			<td><?php  echo $row['ed']; ?></td>

		</tr>

	</tbody>
</table>
</div>
</body>
</html>