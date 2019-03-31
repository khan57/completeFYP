<?php
if (isset($_SESSION['username'])) {
	


?>

 
<div>
	
	<table class="bg_white table table-striped table-responsive table-hover table-condensed table-bordered">
		
<thead>
	<tr>
		<th>Client Name</th>
		<th>Username</th>
		<th>Description</th>
		<th>From</th>
		<th>To</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>
</thead>

<tbody>
	

	<?php

require 'db.php';
$i=$_SESSION['username'];
$r="SELECT id from trainer where username='$i'";
$yo=mysqli_query($con,$r);
$search=mysqli_fetch_assoc($yo);
  $ko=$search['id'];
$q="SELECT * from workouts where tid ='$ko'";
$t=mysqli_query($con,$q);
while ($row=mysqli_fetch_assoc($t)) {
 	$jj=$row['uid'];
 	$realid=$row['id'];
$q2="SELECT name,uname from users where id='$jj' ";
$run=mysqli_query($con,$q2);
$y=mysqli_fetch_assoc($run);
$name=$y['name'];
	 ?>
	<tr>
		<td><?php echo $name ?></td>
		<td><?php echo $y['uname'];?></td>
		<td><?php echo  $row['description']; ?></td>
		<td><?php echo  $row['sdate']; ?></td>
		<td><?php echo  $row['edate']; ?></td>
		<td><a href="editworkout.php?ij=<?php echo $realid; ?>"><button class="btn btn-info">Edit</button></a></td>
		<td><a href="deletewo.php?ij=<?php echo $realid; ?>"><button class="btn btn-danger">Delete</button></a></td>

	</tr>
<?php }?>
</tbody>

	</table>

</div>
<?php
}
?>