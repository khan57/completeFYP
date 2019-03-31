
<?php 

require_once 'db.php';
if (isset($_SESSION['username']) ){
	
	$yt=$_SESSION['username'];
	$e="SELECT id FROM users where uname='$yt' ";
	$f=mysqli_query($con,$e);
	$found=mysqli_fetch_assoc($f);
	 $uuiid=$found['id'];

	//check either found in enrolled too
	$r="SELECT * FROM notifications where  state =1";
	$run=mysqli_query($con,$r);
	
	while ( $ro=mysqli_fetch_assoc($run)) {
		$toid=$ro['tid'];
		$Nid=$ro['nid'];
		$ti=$ro['title'];
		 	$body=$ro['body'];
		$io="SELECT id from enrolled where uid='$uuiid' AND tid='$toid' ";
		$u=mysqli_query($con,$io);
		 $count=mysqli_num_rows($u);
		 if ($count>0) {
		 	
		 	
		echo $body;

	
		 }
	}
 	

 	
 		
 	
 	}

?>

			
	