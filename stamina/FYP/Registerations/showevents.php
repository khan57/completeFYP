<div>
	
<table class="table table-hover table-bordered table-responsive table-striped table-condensed">
	<thead>
		<tr>
			<th class="a" >Title</th>
			<th class="a" >Description</th>
			<th class="a" >Date</th>
			<th class="a" >Organizer</th>
			<th class="a" >Image</th>
			<th class="a" ><span class="glyphicon glyphicon-trash"> </span>DELETE</th>
			<th class="a" > <span class="glyphicon glyphicon-edit"></span>EDIT</th>

		</tr>
	</thead>
	<tbody>
		<?php
		require 'db.php';
$query="SELECT * from events";
$run=mysqli_query($con,$query);
while ($row=mysqli_fetch_assoc($run)) {
	$imagee=$row['img'];

		?>
		<tr>
		<td><?php echo $row['title'];?></td>
		<td><?php echo $row['decrip'];?></td>
		<td><?php echo $row['dati'];?></td>
		<td><?php echo $row['organizer'];?></td><td>
	<?php  echo 	'<img style="width:150px;height:150px" class="img-responsive" src="uploads/'.$imagee.'" />';
						?>
					</td>
				<td style="padding: 20px"><a href="deleteevent.php?id=<?php echo $row['id']?>"><span style="color: red;font-size: 20px" class="glyphicon glyphicon-trash"></span></a></td>
				<td style="padding: 20px"><a href="editevent.php?id=<?php echo $row['id']?>"><span style="color: #428bca;font-size: 20px" class="glyphicon glyphicon-edit"></span></a></td>
</tr>
<?php } ?>
	</tbody>

</table>

</div>