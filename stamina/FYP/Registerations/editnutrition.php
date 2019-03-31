<?php
require 'db.php';
if (isset($_GET['iod'])) {
	
	  $iiiidd=$_GET['iod'];
	    
$q="SELECT day,timee,des from assignednutri where id='$iiiidd'";
$run=mysqli_query($con,$q);
$k=mysqli_fetch_assoc($run);

$DAY=$k['day'];
$tii=$k['timee'];
$DES=$k['des'];
}
include_once 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.css"></script>
	<script type="text/javascrip" src="../js/bootstrap.min.js"></script>
	<title>EDIT Nutrition</title>
</head>
<body>
<div class="container-fluid">
<form class="form-group" method="GET" action="nowupdateNut.php">
	
	<div class="form-group">

		
		<label>Day</label>
		<input type="text" value="<?php echo $DAY?>"  readonly="readonly" value="" class="form-control" name="">
	</div>
	


	<input type="hidden"  name="UID" value="<?php echo  $iiiidd ?>">
	
		<div class="form-group">
		
		<label>Assign new  Day</label>
		<select class="form-control" name="day">
		<option class="form-control" value="Monday">Monday</option>
		<option class="form-control" value="Tuesday">Tuesday</option>
		<option class="form-control" value="Wednesday">Wednesday</option>
		<option class="form-control" value="Thursday">Thursday</option>
		<option class="form-control" value="Friday">Friday</option>
		<option class="form-control" value="Saturday">Saturday</option>
	</select>
	</div>
		<div class="form-group">
		
		</div>
		<?php
/*
$r="SELECT des FROM assignednutri WHERE id='$last' ";
$run=mysqli_query($con,$r);
$jj=mysqli_fetch_assoc($run);
$DES=$jj['des'];
*/
		?>
		<label>Time</label>
		<input type="text"  class="form-control"  readonly="readonly" value=" <?php echo $tii ?>" class="form-control" name="">
	</div>
	
		<div class="form-group">
		
		<label>New Time</label>
		<select class="form-control" name="time">
		<option value="breakfast" class="form-control">breakfast</option>
		<option value="lunch" class="form-control">Lunch</option>
		<option value="dinner" class="form-control">Dinner</option>
	</select>
	</div>
		<div class="form-group">
		
		<label>Description</label>
		<textarea name="description" class="form-control">
			<?php

echo $DES;
			?>
		</textarea>
		<center><button class="btn btn-success">Update</button></center>
	</div>
</form>
</div>
</body>
</html>