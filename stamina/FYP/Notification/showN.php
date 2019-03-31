<div>
	<table class="table table-responsive table-condensed table-bordered">
		<thead>
			<th>Title</th>
			<th>description</th>
		</thead>
		<tbody>
<?php 

require_once 'db.php';
if (isset($_SESSION['username']) ){
	$tot=0;
	$yt=$_SESSION['username'];
	$e="SELECT id FROM users where uname='$yt' ";
	$f=mysqli_query($con,$e);
	$found=mysqli_fetch_assoc($f);
	 $uuiid=$found['id'];

	//check either found in enrolled too
	$r="SELECT * FROM notifications where  state =0";
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
		 	
		 	
		 	$tot++;
		echo '<tr>
				<td>'.$ti.'</td>
				<td>'.$body.'</td>
			</tr>';

			$update="UPDATE notifications SET state=1 WHERE nid='$Nid'";
			$checko=mysqli_query($con,$update);
		
		 }
	}
 	

 	
 		
 	
 	}

?>

			
		</tbody>
	</table>
</div>