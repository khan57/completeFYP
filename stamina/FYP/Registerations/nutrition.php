
<?php


include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Nutrition</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>
	<center>
	<form  style="width: 50%" class="form-group" method="post" action="#">
		<div class="form-group">
			<label>Select Client</label>
<select class="form-control" name="clients">
<?php

$u=$_SESSION['username'];


$a="SELECT id FROM trainer where username='$u'";
$run=mysqli_query($con,$a);
$f=mysqli_fetch_array($run,MYSQLI_ASSOC);
 $id=$f['id'];

$query="SELECT uid  FROM enrolled where tid='$id' ";
$run1=mysqli_query($con,$query);
while($each=mysqli_fetch_array($run1)){


	 $x=$each['uid'];

	 $query2="SELECT uname from users where id='$x'";
	 $run3=mysqli_query($con,$query2);
	 while($single=mysqli_fetch_array($run3,MYSQLI_ASSOC))
	 {

$break=$single['uname'];

	 

	
	echo "<option class='form-control' value=$x>$break</option>";
	
}}
	?>
</select>
</div>
<div class="form-group">
	<label>Select day</label>
	<select class="form-control" name="day">
		<option class="form-control" value="Monday">Monday</option>
		<option class="form-control" value="Tuesday">Tuesday</option>
		<option class="form-control" value="Wednesday">Wednesday</option>
		<option class="form-control" value="Thursday">Thursday</option>
		<option class="form-control" value="Friday">Friday</option>
		<option class="form-control" value="Saturday">Saturday</option>
	</select>
</div>

<div class="form-group">
	
	<label>Select time</label>
	<select class="form-control" name="time">
		<option value="breakfast" class="form-control">breakfast</option>
		<option value="lunch" class="form-control">Lunch</option>
		<option value="dinner" class="form-control">Dinner</option>
	</select>
</div>
<div class="form-group">
	<label>Describe Nutrition</label>
	<textarea name="desc" class="form-control" rows="10" ></textarea>
</div>
<button class="btn btn-primary" name="give"> Assign nutrition</button>
</form>
</center>
</body>
</html>


<?php

if (isset($_POST['give'])) {




$day=$_POST['day'];
$time=$_POST['time'];
$des=$_POST['desc'];
  $clients=$_POST['clients'];

  //check for previous assingned nutrition
$QUERY="SELECT id,uid,tid FROM assignednutri WHERE uid='$clients' && tid='$id' && day='$day' && timee='$time'";
$jkl=mysqli_query($con,$QUERY);

$c=0;

while ($lop=mysqli_fetch_assoc($jkl)) {
	$lop['uid'];

$my=['id'];
	$c++;
}
if ($c>0) {

echo "<script>alert('already found')</script>";
}else{
	

  //end
$insert="INSERT into assignednutri (uid,tid,day,timee,des) VALUES('$clients','$id','$day','$time','$des')";
$runo=mysqli_query($con,$insert);
if ($runo) {
	echo "inserted";
}else{
	echo "failed";
}
}
}

?>