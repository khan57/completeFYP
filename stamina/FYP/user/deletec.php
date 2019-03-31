<?php
require_once '../db.php';
$cid=$_GET['id'];
$query="DELETE  FROM complaints where id='$cid'";
$t=mysqli_query($con,$query);
if ($t) {
	header("location:../Registerations/welcomeuser.php?sc");
}else{
	echo "failed";
}
?>