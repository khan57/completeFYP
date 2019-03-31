<?php 

if (isset($_SESSION['username'])) {

 ?>
	

<div class="col-md-8">
	<form method="POST" action="#" class="form-group">
		<div class="form-group">
			<label>Client</label>
<select name="userid" class="form-control">
			<?php

$u=$_SESSION['username'];

require_once 'db.php';
$a="SELECT id FROM trainer where username='$u'";
$run=mysqli_query($con,$a);
$f=mysqli_fetch_array($run,MYSQLI_ASSOC);
 $id=$f['id'];

$query="SELECT uid  FROM enrolled where tid='$id' ";
$run1=mysqli_query($con,$query);
while($each=mysqli_fetch_array($run1)){


	 $x=$each['uid'];

	 $query2="SELECT uname from users where id='$x'";
	 $run3=mysqli_query($con,$query2);
	 while($single=mysqli_fetch_array($run3,MYSQLI_ASSOC))
	 {

$break=$single['uname'];	
	echo "<option class='form-control' value=$x>$break</option>";
	
}}
	?>
</select>

		</div>

<div class="form-group">
	<label>Description</label>
	<input class="form-control" type="text" name="description">

</div>
<div class="form-group">
	<label>Start date</label>
	<input class="form-control" type="date" name="sdate">

</div>
<div class="form-group">
	<label>End Date</label>
	<input class="form-control" type="date" name="edate">

</div>
<button class="btn btn-primary" name="addw">Add Workout</button>
	</form>

</div>



<?php 

if (isset($_POST['addw'])) {
require 'db.php';
	 $uiid=$_POST['userid'];
	// $tiid=$_GET[''];
	 $DES=$_POST['description'];
	 $sdate=$_POST['sdate'];
	 $enddate=$_POST['edate'];
	 $jj=$_SESSION['username'];
	 $queryy="INSERT INTO workouts (uid,tid,description,sdate,edate) VALUES
	  ('$uiid','$id','$DES','$sdate','$enddate')";
	 $loop=mysqli_query($con,$queryy);
	 //$H=mysqli_fetch_assoc($loop);
if ($loop) {
	@header("location:welcometrainer.php?sucess");
}else{
	@header("location:welcometrainer.php?failed");
}
}}
else{
	echo $_SESSION['username'];
	echo "failed";

}


?>