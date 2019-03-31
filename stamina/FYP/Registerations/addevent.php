<?php
require 'db.php';

session_start();
if (isset($_SESSION['username'])) {
	
	if (isset($_FILES['imagee'])) {
	
	
 	$image=$_FILES['imagee']['name'];
 	$tempname=$_FILES['imagee']['tmp_name'];
move_uploaded_file($tempname,"uploads/$image");

   $title=$_REQUEST['etitle'];
   $date= $_REQUEST['datee'];
  $D= $_POST['TD'];	
$u=$_SESSION['username'];
		//check for empty variables
		
  $Query="INSERT INTO  events (title,decrip,dati,organizer,img) VALUES ('$title','$D','$date','$u','$image')";
  $run=mysqli_query($con,$Query);

if ($run) {
echo "inserted";
header("location:welcometrainer.php?adt");
}else{

	echo "failed";
}}
else{

	echo "failed uploading";
}

}