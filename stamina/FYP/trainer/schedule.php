<?php


?>

<div>

	<h3>Add Schedule</h3>
<form method="post" action="#">
	
<div class="form-group">
<label>Time(From)</label>
<input class="form-control" type="time" name="t">
</div>
<div class="form-group">
<label>Time(To)</label>
<input  class="form-control" type="time" name="tt">
</div>
<div class="form-group">
<label>Date</label>
<input class="form-control" type="date" name="d">
</div>
<div class="form-group">
<label>Session</label>
<input class="form-control" type="text" name="s">
</div>
<div class="form-group">
<label> Session Description</label>
<input class="form-control" type="" name="de">
</div>
<button name="save" class="btn btn-primary">Add</button>
</form>
</div>

<?php
require_once '../db.php';
if (isset($_POST['save'])) {
$time=$_POST['t'];
$tto=$_POST['tt'];
$dato=$_POST['d'];
$session=$_POST['s'];
$sdes=$_POST['de'];
$ins=$_SESSION['username'];
$check="SELECT id from  trainer where username='$ins'";
$to=mysqli_query($con,$check);
$result=mysqli_fetch_assoc($to);
$usrname=$result['id'];

$query="INSERT INTO schedule (timee,datee,session,description,instructor,too) VALUES('$time','$dato','$session','$sdes','$usrname','$tto') ";

$run=mysqli_query($con,$query);
if ($run) {
	echo "<script>alert('Schedule Added')</script>";
	echo "saved";
}
}


?>