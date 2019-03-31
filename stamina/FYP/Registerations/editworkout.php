
<?php
session_start();
include_once 'db.php';
$trainer=$_SESSION['username'];
$id=$_GET['ij'];
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<title>EDIT WORKOUT</title>

</head>
<body>

	<div class="container">
		<div class="row">
			<div  style="border-radius: 10px;line-height:100px;background: #428bca ;height:100px;color: white;font-size: 25px" class="col-md-12 col-sm-12 col-xs-12x">
				
				<span id="name">ISLAMABAD GYM</span>
			</div>
		</div><br><br>
	
		<?php 
$cafe="SELECT description,sdate,edate from workouts where id='$id'";
$execute=mysqli_query($con,$cafe);
while ($count=mysqli_fetch_assoc($execute)) {
	$a=$count['description'];
	$b=$count['sdate'];
	$c=$count['edate'];
}
		?>
		<form class="well" method="POST" action="#">
			
			<div class="form-group">
				<label>Description</label>
				<input class="form-control" required="required" value="<?php echo $a?>" type="text"  name="desp">
			</div>

				<div class="form-group">
				<label>FROM(old)</label>
				<input class="form-control" disabled="disabled" value="<?php echo $b ?>" type="text"  name="">
			</div>
				<div class="form-group">
				<label>FROM(new)</label>
				<input class="form-control" required="required" type="date"  name="frm">
			</div>

			<div class="form-group">
				<label>TO(old)</label>
				<input class="form-control" disabled="disabled" value="<?php echo $c?>" type="text"  name="">
			</div>
				<div class="form-group">
				<label>TO(new)</label>
				<input class="form-control" required="required" type="date"  name="to">
			</div>
<center><button class="btn btn-success btn-lg" name="update">Update</button></center>
		</form>

	</div>

</body>
</html>

<?php

if (isset($_POST['update'])) {
	
$des=$_POST['desp'];
$f=$_POST['frm'];
$t=$_POST['to'];

include 'db.php';
$query="UPDATE workouts SET description='$des',sdate='$f',edate='$t' WHERE id ='$id'";
$check=mysqli_query($con,$query);
if ($check) {
	header("Location:welcometrainer.php?Assigned");
}else{
	echo "sorry";
}
}
?>