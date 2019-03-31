
<?php 


include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>


	

	<title>Assigned</title>
</head>
<body>
	<div class="col-md-12 col-sm-12">


<table class="table table-bordered table-responsive table-striped">
	<thead>
		<tr>
			
		<th>SR.#</th>
		<th>Name</th>
		<th>Username</th>
		<th>Email</th>
		<th>Action</th>
		</tr>
	</thead>
<tbody>
	<?php
	$i=$_SESSION['username'];
	$p="SELECT id from trainer where username='$i'";
	$o=mysqli_query($con,$p);
	$check=mysqli_fetch_assoc($o);
	  $r=$check['id'];
	$count=1;

$query="SELECT DISTINCT uid FROM assignednutri where tid='$r' ORDER by uid ASC ";
$run=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($run)){
	?>
	<tr>

		<?php 
	
		
		$yii=$row['uid'];

$runo="SELECT name,uname,email FROM users WHERE id='$yii'";
$runo=mysqli_query($con,$runo);
$tt=mysqli_fetch_array($runo,MYSQLI_ASSOC);
$aa=$tt['name'];
		?>
		<td><?php echo $count ; ?></td>
		<td><?php echo $aa; ?></td>
		<td><?php echo $tt['uname'] ?></td>
		<td><?php echo $tt['email'] ?></td>

		<td><button  class="btn btn-success"><a style="text-decoration: none;color: white" href="Details.php?iidd=<?php echo $yii  ?>">Check details</a></button></td>
	</tr>
<?php 
$count++;
} ?>
</tbody>
</table>

</div>
</body>
</html>