<?php
require_once 'db.php';
$id=$_GET['id'];
$q="DELETE from events where id='$id'";
$run=mysqli_query($con,$q);
if ($run) {
	header("location:welcometrainer.php?del");
}else{
	echo "failed";
}

?>