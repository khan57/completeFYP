<?php



include 'db.php';


$name=$_GET['name'];
$uname=$_GET['uname'];
$password=$_GET['password'];
$mobile=$_GET['mobile'];
$adress=$_GET['address'];
$cnic=$_GET['cnic'];
if ($name= ' ' || $uname =' '|| $password=' ' || $mobile='  ' || $address=' '|| $cnic=' ' ) {
	echo "Please fill all fields";
	exit();
}
else{
$query="INSERT INTO admin (name,uname,pass,mobile,cnic,address)  VALUES ('$name','$uname','$password','$mobile','$cnic','$adress')";

@$x=mysqli_query($con,$query);
if ($x) {
	echo "You have been registered successfully";
}else{

	echo "record failed";
}
}