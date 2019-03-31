<div>
	<center><h3>All Complaints</h3></center>
	<table class="table table-bordered ">
		<thead style="font-size: 22px">
			
		<th>Sr.#</th>
		<th>Title</th>
		<th>Description</th>
		<th>Complaint to</th>
		<th>Delete</th>
		</thead>
		<tbody style="font-size: 15px">
			<?php 

$uid=$_SESSION['username'];
$qq="SELECT id from users where uname='$uid'";

$got=mysqli_fetch_assoc(mysqli_query($con,$qq));
$UID=$got['id'];

$query="SELECT * FROM complaints where uid='$UID'";
$execute=mysqli_query($con,$query);
$count=1;
while($fetched=mysqli_fetch_assoc($execute)){
$cid=$fetched['id'];

			?>
			<tr>
				<td><?php echo  $count;  ?></td>
				<td><?php echo $fetched['complain_t']; ?></td>
				<td><?php echo $fetched['c_b']; ?></td>
				<td><?php echo $fetched['tid']; ?></td>
				<td><a style="text-decoration: none" href="../user/deletec.php?id=<?php echo $cid?>"><span class=" glyphicon glyphicon-trash" style="font-size: 20px;color: white"></span></a></td>
			</tr>
<?php $count++; } ?>
		</tbody>
	</table>

</div>