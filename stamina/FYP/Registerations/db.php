<?php
 
$hostname="localhost";
$dbname="fyp";
$pass='';
$user='root';
$pdo=null;

$con=mysqli_connect($hostname,$user,$pass,$dbname);



try {
	

	$pdo=new PDO("mysql:host=localhost;dbname=fyp",'root','');
} catch (Exception $e) {
	echo "ERROR::".$e->getMessage();
}