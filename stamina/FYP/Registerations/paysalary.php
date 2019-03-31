<!DOCTYPE html>
<html>
<head>
	<title>pay salary</title>
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
	<label>From</label>
<input type="date" required="required" name="from">

</div>
<div class="form-group">
	<label>To</label>
<input type="date" required="required" name="to">

</div>
<button name="pay" class="btn btn-info">Pay</button>
</form>

</div>
</body>
</html>

<?php
include 'db.php';
if (isset($_POST['pay'])) {
	$t=$_POST['trainer'];
 	$frm=$_POST['from'];
 	$to=$_POST['to'];

 	$month= date('m');

$insert="INSERT INTO pays (tid,frm,too,month)  VALUES ('$t','$frm','$to','$month')";
$check=	mysqli_query($con,$insert);
if ($check) {
	echo "payed";
}else{
	echo "failed";
}
}

?>