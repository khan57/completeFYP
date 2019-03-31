

<?php



if (isset($_GET['iod'])) {
	require 'db.php';
	$i=$_GET['iod'];
	
$del="DELETE  FROM assignednutri WHERE id='$i' ";
$run=mysqli_query($con,$del);
if ($run) {

	echo "<script>alert('nutrition deleted')</script>";
	header("Location:welcometrainer.php?ua");
}else{
	//echo "failed";
	//echo $i;
	//echo $dii;
}

}
?>