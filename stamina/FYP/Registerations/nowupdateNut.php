<?php
require 'db.php';


 $iu= $_GET['UID'];

 $t= $_GET['time'];
$d=$_GET['day'];
  $de= $_GET['description'];




 $gijo=$_GET['noidea'];

$y="UPDATE  assignednutri SET day='$d',timee='$t',des='$de' WHERE id='$iu'";
$run=mysqli_query($con,$y);
if ($run) {
	header("location:welcometrainer.php?updated");
}
else{
	echo "failed";
}