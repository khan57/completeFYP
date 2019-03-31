<?php


session_start();
function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}
$jo= $_GET['o'];
include 'db.php';
  $trainee=$_SESSION['username'];
$ii="SELECT id,subtype FROM users where uname='$trainee'";
$p=mysqli_query($con,$ii);

$poll=mysqli_fetch_assoc($p);
  $pl= $poll['id'];
  echo $ll=$poll['subtype'];

$select="SELECT subtype FROM users where '$pl'";
$lp=mysqli_query($con,$select);
$countss=mysqli_fetch_array($lp,MYSQLI_ASSOC);
 //echo  $kl=$countss['subtype'];
$query="INSERT INTO enrolled (uid,tid,doj,ed) VALUES('$pl','$jo',CURDATE(),DATE_ADD(CURDATE(), INTERVAL $ll MONTH))";
$run= mysqli_query($con,$query);
if ($run) {
	
phpAlert("success");
header("location:welcomeuser.php?at");
	
}else{

echo "failed";
}
?>