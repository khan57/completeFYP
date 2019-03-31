<!DOCTYPE html>
<html>
<head>
	<title>EDIT Event</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<!--<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> -->
	<script type="text/javascript" src="main.js"></script>

</head>
<body>
	<?php include 'header.php'; ?>
	<?php 
	require_once 'db.php';
	$id=$_GET['id'];
$t="SELECT * from events where id='$id'";
$run=mysqli_query($con,$t);
while ($i=mysqli_fetch_assoc($run)) {
	$title=$i['title'];
 	$description=$i['decrip'];
	$date=$i['dati'];
	$or=$i['organizer'];

}
	?>
<div class="container">
	<form action="#" method="POST">
		<div class="form-group">
		<label>Title</label>
		<input type="text" value="<?php echo  $title ?>"  class="form-control" name="t">
</div>
	<div class="form-group">
		<label>Description</label>
		<input value="<?php echo $description;  ?>" type="text" class="form-control" name="d">
</div>
	<div class="form-group">
		<label>Date</label>
		<input value="<?php echo $date;   ?>" type="date" class="form-control" name="da">
</div>
	<div class="form-group">
		<label>Organizer</label>
		<input value="<?php echo $or;  ?>" type="text" class="form-control" name="o">
</div>
<center>
<button class="btn btn-success" name="edit">Update</button></center>
	</form>

</div>

</body>
</html>

<?php
if (isset($_POST['edit'])) {
	
 $title=$_POST['t'];
$des=$_POST['d'];
$datee=$_POST['da'];
$organizer=$_POST['o'];
$query="UPDATE events SET title='$title',decrip='$des',dati='$datee',organizer='$organizer' WHERE id='$id'";

$run=mysqli_query($con,$query);
if ($run) {
	header("location:welcometrainer.php?sE");
}else{
	echo "sorry";
}
}

?>