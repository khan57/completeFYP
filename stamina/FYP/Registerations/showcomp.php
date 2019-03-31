<div>
	<table class="table table-bordered">
		

<thead>
	<th>UserName</th>
	<th>Name</th>
	<th>Complain Title</th>
	<th>Complain description</th>

</thead>
<tbody>
	<tr>

		<?php 
		$trainername=$_SESSION['username'];
		$q1="SELECT id from trainer where username='$trainername'";
		$exe=mysqli_fetch_assoc(mysqli_query($con,$q1));
		$TID=$exe['id'];
$select="SELECT * FROM complaints WHERE tid='$TID'";
$exee=mysqli_query($con,$select);
while($exel=mysqli_fetch_assoc($exee)){
	$got=$exel['uid'];
	$q2="SELECT name,uname from users where id='$got'";
	$fetched= mysqli_fetch_assoc(mysqli_query($con,$q2));

		?>
		<td><?php echo $fetched['uname']?></td>
		<td><?php echo $fetched['name']?></td>
		<td><?php echo $exel['complain_t'];?></td>
		<td><?php echo $exel['c_b'];?></td>
	<?php } ?>
	</tr>
</tbody>

	</table>

</div>