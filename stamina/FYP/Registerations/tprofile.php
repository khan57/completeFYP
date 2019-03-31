<?php


require 'db.php';
if (isset($_SESSION['username'])) {
  	$jojo=$_SESSION['username'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Trainer profile</title>
</head>
<body>
	<div>
		
<table  class="table  table-bordered table-responsive table-striped table-hover">
	
	<thead>
		<tr>

			<th>Name</th>
			<th>Username</th>
			<th>Address</th>
			<th>cnic</th>
			<th>Mobile</th>
			<th>speciality</th>
			<th>Timing</th>

		</tr>

	</thead>
	<tbody>
		<?php

$query="SELECT name,username,address,cnic,mobile,special,timing FROM trainer where username='$jojo'";
$o=mysqli_query($con,$query);
while ($single=mysqli_fetch_assoc($o)) {


		?>
		
		<tr>
			
			<td><?php echo $single['name']; ?></td>
			<td><?php echo $single['username']; ?></td>
			<td><?php echo $single['address']; ?></td>
			<td><?php echo $single['cnic']; ?></td>
			<td><?php echo $single['mobile']; ?></td>
			<td><?php echo $single['special']; ?></td>
			<td><?php echo $single['timing']; ?></td>

		</tr>
<?php }?>
	</tbody>
</table>

	</div>

</body>
</html>
<?php
}else{

	header("location:welcometrainer.php");
}
?>