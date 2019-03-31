
<div style="height: 600px;width: 100%">

<center><h3 style="color: white;padding-top: 10px">Assigned WorkOut</h3></center>

	<?php 
	
require_once '../db.php';
$unamee=$_SESSION['username'];
$select ="SELECT id from users where uname ='$unamee'";
$y=mysqli_query($con,$select);
 $fetched=mysqli_fetch_assoc($y);
$uid=$fetched['id'];

$query="SELECT tid,description,sdate,edate from workouts where uid ='$uid'";
$run=mysqli_query($con,$query);


	?>
<table style="color: white;font-weight: bolder;" class="table  table-bordered table-responsive ">
	<thead>
		
		<tr>
			<th> Assigned By</th>
			<th>Description</th>
			<th>From</th>
			<th>To</th>

		</tr>
	</thead>
	<tbody>
		<?php
while ($t=mysqli_fetch_assoc($run)) {
	$tiid=$t['tid'];

$q3="SELECT name from trainer where id='$tiid'";
$execute=mysqli_query($con,$q3);
$goten=mysqli_fetch_assoc($execute);
$tname=$goten['name'];
		?>
		<tr>
			<td><?php echo $tname?></td>
			<td><?php echo $t['description'];?></td>
			<td><?php echo $t['sdate'];?></td>
			<td><?php echo $t['edate'];?></td>

		</tr>
	<?php } ?>
	</tbody>
</table>

</div>
