<div class="container">
	<table class="table table-bordered table-responsive table-condensed">
		<thead>
			<?php

require_once '../db.php';
			$username=$_SESSION['username'];
$run="SELECT id,name,uname,email,cnic,mobile,address,img FROM users where uname='$username'";
$l=mysqli_query($con,$run);
			 ?>
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Username</th>
				<th>Email</th>
				<th>Cnic</th>
				<th>Mobile</th>
				<th>Address</th>
				<th>Action</th>

				
			</tr>
		</thead>
		<tbody>
			<?php 
while ($row=mysqli_fetch_assoc($l)) {
	$id=$row['id'];
	$img=$row['img'];
						?>
			<tr>

				<td><?php echo  '<img style="height:50px;width:50px" class="img-rounded" src="../Registerations/uploads/'.$img.'">'; ?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['uname'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['cnic'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['address'];?></td>
				<td><button class="btn btn-primary" ><a style="color: white" href="../user/editprofile.php?id=<?php echo $id ?>">Edit</a></button></td>
			
			</tr>
		<?php } ?>
		</tbody>

	</table>

</div>