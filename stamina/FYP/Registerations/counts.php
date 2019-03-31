<?php

include 'db.php';

$record= $_GET['j'];

$qq="SELECT * FROM users WHERE uname='$record'";
$l=mysqli_query($con,$qq);
$num=0;
while(@$i=mysqli_fetch_array($l)){

if ($record==$i['uname']) {
	$num++;
}
	
}

if ($num>0) {
	
	echo "Sorry!This user name has been taken.";
}else{
	//echo "ok";


}


?>