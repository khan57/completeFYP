<?php

require_once '../db.php';
?>
<div>
	<center><h3> <span class="glyphicon  glyphicon-calendar"></span> Class Schedule</h3></center>
<table class="table table-bordered table-responsive table-condensed table-hover table-striped">
	
<thead style="font-size: 28px">
	<th>TIME</th>
	<th>DATE</th>
	<th>SESSION</th>
	<th>Description</th>
	<th>Instructor</th>
</thead>
<tbody style="font-size: 19px">
	<?php

	$un=$_SESSION['username'];
$query1="SELECT id from users where uname='$un'";
$id=mysqli_query($con,$query1);
$fetchedid=mysqli_fetch_assoc($id);
 $userid=$fetchedid['id'];
$select="SELECT tid from enrolled where uid='$userid'";
$tids=mysqli_query($con,$select);
while($ki=mysqli_fetch_assoc($tids)){
 $io=$ki['tid'];
 $new="SELECT name from trainer where id='$io'";
$trainername=mysqli_fetch_assoc(mysqli_query($con,$new));
$tname=$trainername['name'];
	$you="SELECT *  from schedule where instructor='$io'";
	$ran=mysqli_query($con,$you);
	while($row=mysqli_fetch_assoc($ran)){
$a=$row['timee'];
$b=$row['too'];

echo  "

<tr>
		<td>".$a."  -  ".$b."</td>
		<td>". $row['datee']."</td>
		<td>". $row['session']." </td>
		<td>".$row['description']."</td>
		<td> ".$tname."</td>
	</tr>
";
	}


}
	?>
	
</tbody>

</table>
</div>