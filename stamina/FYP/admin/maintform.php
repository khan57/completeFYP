<div>
	<form method="post" action="#">
		
		<div>
			<label>Maintainence For</label>
			<input required="required" class="form-control" type="text" name="mf">
		</div>

<div>
			<label>Maintainer Name</label>
			<input required="required" class="form-control" type="text" name="mn">
		</div>
		<div>
			<label>Date</label>
			<input required="required" class="form-control" type="date" name="d">
		</div>
		<div>
			<label>Cost</label>
			<input class="form-control" required="required" type="number" name="c">
		</div>
		<button name="save">Save</button>
	</form>

</div>

<?php
require_once '../db.php';
if (isset($_POST['save'])) {
$MF=$_POST['mf'];
$MN=$_POST['mn'];
$MD=$_POST['d'];
$MC=$_POST['c'];
$month = date("m",strtotime($MD));
$insert="INSERT INTO websitem ( mfor,mname, mdate, mcost,month )VALUES('$MF','$MN','$MD','$MC','$month')";
if (mysqli_query($con,$insert)) {
	echo "paid";


}else{
	echo "failed to pay";
}
}
?>