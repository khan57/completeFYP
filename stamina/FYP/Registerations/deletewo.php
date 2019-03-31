<?php
require_once 'db.php';
$iid=$_GET['ij'];
$query="DELETE from workouts where id='$iid'";
if (mysqli_query($con,$query)) {
	header("location:welcometrainer.php?Assigned");
}else{
	echo "failed";
}
?>