
<?php

if (isset($_SESSION['username'])) {

	$u=$_SESSION['username'];
	require 'db.php';
	$q="SELECT id from trainer where username='$u'";
	$run=mysqli_query($con,$q);
	$row=mysqli_fetch_assoc($run);
	  $tid=$row['id'];
	

$query="SELECT * FROM enrolled where tid ='$tid'";
$run2=mysqli_query($con,$query);

}

  ?>
<!DOCTYPE html>
<html>
<head>
	<title>
		MembrshipType
	</title>
</head>
<body>

<div class="container">
	<div class="row">
			<div class="col-lg-8 col-sm-12">
				
				<table class="table table-bordered table-hover table-responsive">
					

		<thead>
			
			<tr>
				<th>Sr.#</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Membership type</th>
				<th>Starting date</th>
				<th>Expiry date</th>
				

			</tr>
		</thead>
		<tbody>
			<?php 
			$j=1;
while ($Fetch=mysqli_fetch_assoc($run2)) {
	
	   $usrid=$Fetch['uid'];
	 
$q2="SELECT name,subtype,uname,email from users where id='$usrid'";
$run3=mysqli_query($con,$q2);

while($r=mysqli_fetch_assoc($run3)){
	$tt="SELECT doj,ed from enrolled where uid='$usrid' && tid='$tid'";
	$Run=mysqli_query($con,$tt);
		while ( $single=mysqli_fetch_assoc($Run)) {
		

			?>
			<tr>
				
				<td><?php echo $j;?></td>
				<td><?php echo $r['name'];?></td>
				<td><?php echo $r['uname'];?></td>
				<td><?php echo $r['email'];?></td>
				<td><?php echo $r['subtype']." months";?></td>
				<td><?php  echo $single['doj'];?></td>
				<td><?php echo $single['ed'];?></td>
				
			</tr>
			<?php  }
			

		}
		++$j;} ?>
		

		</tbody>

				</table>

			</div>
	</div>
</div>

</body>
</html>