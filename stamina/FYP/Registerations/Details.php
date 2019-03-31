
<?php

require 'db.php';
if (isset($_GET['iidd'])) {
$oo=$_GET['iidd'];

}
include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.css"></script>
	<script type="text/javascrip" src="../js/bootstrap.min.js"></script>
</head> 
<body>
<div class="container-fluid">

<table class="table table-bordered table-hover table-responsive table-striped">
	<thead>
		<tr>
			
			<th>Day</th>
			<th>Time</th>
			<th>Description</th>
			<th>Edit</th>
			<th>Delete</th>
			

		</tr>

	</thead>

	<tbody>
		<?php

$query="SELECT id,day,timee,des  FROM assignednutri WHERE uid ='$oo'";
$run=mysqli_query($con,$query);
while($resuts=mysqli_fetch_assoc($run)){
	$dia=$resuts['day'];
	$t=$resuts['timee'];
	$idox=$resuts['id'];
		?>
		<tr>
			<td><?php echo $resuts['day'] ?></td>
			<td><?php echo $resuts['timee'] ?></td>
			<td><?php echo $resuts['des'] ?></td>
			<td><button name="btnedit"  class="btn btn-primary"><a style="text-decoration: none;color: white"  href="editnutrition.php?iod=<?php  echo  $idox?>">Edit Nutrition</a></button></td>
			<td><button  class="btn btn-danger"   name="btndelete"><a style="text-decoration: none;color: white" href="deletenutrition.php?iod=<?php echo $idox ?>">Delete Assigned Nutrition</a></button></td>
			
		</tr>
<?php } ?>
	</tbody>

</table>

</div>


</body>
</html>


<?php


?>