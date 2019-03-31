<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	
<form method="POST"  class="form-group">
	<div class="form-group">
		
		<label>Trainers</label>
		<select required="required" class="form-control" name="trainer">

			<?php
include 'db.php';
			$query="SELECT id,name from trainer";
			$rn=mysqli_query($con,$query);
			while ($row=mysqli_fetch_assoc($rn)) {
			$tid=$row['id'];
			 echo "<option value='$tid'>".$row['name']."</option>";
}
			?>
		</select>
	</div>
<div class="form-group">
	<label>Salary</label>
<input type="number" name="valo">

</div>
<button name="save" class="btn btn-info">Save</button>
</form>

</div>

</body>
</html>

<?php

if (isset($_POST['save'])) {
	include 'db.php';
	$t=$_POST['trainer'];
	$S=$_POST['valo'];

	$insert="INSERT INTO msalary (tid,amount) VALUES ('$t','$S')";
	$run=mysqli_query($con,$insert);
	if ($run) {
		echo "inserted";
	}else{
		echo "failed";
	}
}

?>