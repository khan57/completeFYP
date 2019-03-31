
<?php 

require_once 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Fee||Admin</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
</head>
<body>
<div class="container-fluid">
	<center><h3>Add Fee</h3></center>
	<form method="get" action="#" class="form-group">
		
		<div class="form-group">
			<label>Package type(months)</label>
			<select name="package" class="form-control">
				<option>3</option>
				<option>6</option>
				<option>12</option>
			</select>
		</div>
		<div class="form-group">
		
			<label>Name of exercise</label>
			<select name="extype" class="form-control">
					<?php

$query="SELECT special from trainer";
$run=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($run)) {
	$i=$row['special'];
			
			echo "<option class='form-control' value=$i>$i</option>";
				 } ?>
			</select>
		</div>
		<div class="form-group">
			<label>Enter Fee</label>
			<input class="form-control" type="number" name="feea">
		</div>
		<button name="save" class="btn btn-info">Save</button>
	</form>

</div>
</body>
</html>

<?php

if (isset($_GET['save'])) {
  $special=$_GET['extype'];
  $fee=$_GET['feea'];
  $pkge=$_GET['package'];

$insert="INSERT INTO fees (package,fees,speciality) VALUES ('$pkge','$fee','$special')";
$o=mysqli_query($con,$insert);
if ($o) {
	echo "inserted";
}else{
	echo "failed";
}

}
?>