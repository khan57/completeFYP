<div>
	<center><h3>Fee Details</h3></center>
<table class="table table-bordered">
	
	<thead>
		<th>
		Date of deposit	
		</th>

		<th>
			Amount
		</th>
		<th>
			Month
		</th>
		
			<th>
				Year

			</th>
			<th>Status</th>
		
	</thead>

	<tbody>
		<?php 

include '../db.php';
 $uname=$_SESSION['username'];
$query="SELECT id FROM users WHERE uname='$uname'";
$exe=mysqli_query($con,$query);
$fetched=mysqli_fetch_assoc($exe);
 $uid=$fetched['id'];
$check="SELECT  pdate,amount,mnth,yeaar FROM userfee WHERE uid='$uid' ";
$run=mysqli_query($con,$check);
while ($row=mysqli_fetch_assoc($run)) {

		?>
		<tr>
			<td><?php echo $row['pdate']; ?></td>
			<td><?php echo $row['amount']; ?></td>
			<td><?php echo $row['mnth']; ?></td>
			<td><?php echo $row['yeaar']; ?></td>
			<td><?php echo 'paid'; ?></td>


		</tr>
	<?php } ?>
	</tbody>
</table>
</div>