<div>
	<h3>NOTIFICATIONS</h3>
	<form method="post" action="#">
		
<div class="form-group">
	<label>Tile</label>
	<input style="width: 60%" class="form-control" required="required" type="text" name="nt">
</div>
<div class="form-group">
	<label>Descrition</label>
	<input style="width: 60%" class="form-control" required="required" type="text" name="nb">
</div>
<button  class="btn btn-primary" name="save">Save</button>
	</form>

</div>


<?php
require_once '../db.php';
$tname=$_SESSION['username'];
$q="SELECT id from trainer where username='$tname'";
$fethed=mysqli_query($con,$q);
$r=mysqli_fetch_assoc($fethed);
 $tid=$r['id'];

if (isset($_POST['save'])) {
	
	$title=$_POST['nt'];
	$body=$_POST['nb'];
	$state=0;
	$query="INSERT INTO notifications(title,body,state,tid) VALUES ('$title','$body','$state','$tid')";
	$run=mysqli_query($con,$query);
	if ($run) {
		//echo "inserted";
		echo "<script>'Notification has been added successfully!!'</script>";
	}else{
		echo "failed";
	}
}

?>