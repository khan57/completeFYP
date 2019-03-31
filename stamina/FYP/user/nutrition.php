
<?php 

require_once '../db.php';
$userid=$_SESSION['username'];
$UName="SELECT id from users where uname='$userid'";
$runo=mysqli_query($con,$UName);
$fetched=mysqli_fetch_assoc($runo);
$USERID=$fetched['id'];
$query="SELECT tid,day,timee,des FROM assignednutri where uid='$USERID'";
$run=mysqli_query($con,$query);
@$num=mysqli_num_rows($run);
if ($num==0) {
	echo "<h1>NUtrition not assigned</h1>";
}else{
?>
<div style="height: 600px">
	<center><h3>Assigned Nutrition</h3></center>
	
	<table class="table table-bordered table-condensed table-responsive " >
		<thead >
			
			<tr >
				<th>Sr.#</th>
				<th>By</th>
				<th>Day</th>
				<th>Time</th>
				<th>Description</th>
			</tr>
		</thead>
		<tbody style="font-size: 15px">
			<?php 
			$count=1;
while ($row=mysqli_fetch_assoc($run)) {
	$tid=$row['tid'];
$q="SELECT name from trainer where id='$tid'";
$ii=mysqli_query($con,$q);
$tname=mysqli_fetch_assoc($ii);
$namee=$tname['name'];
			?>
			<tr>
				<td><?php echo $count ;?></td>
				<td><?php echo $namee;?></td>
				<td><?php echo $row['day'];?></td>
				<td><?php echo $row['timee'];?></td>
				<td><?php echo $row['des'];?></td>

			</tr>
			<?php
$count++;
}
			?>
		</tbody>

	</table>

</div>
<?php } ?>