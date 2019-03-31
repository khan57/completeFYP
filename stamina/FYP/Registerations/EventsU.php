<div style="height: 600px ;font-size: 20px;background-position: right bottom;">
	
<table class="table  table-bordered table-responsive table-condensed">
	<thead style="background-color: black;color: white">
		<tr>
			<th class="a" >Title</th>
			<th class="a" >Description</th>
			<th class="a" >Date</th>
			<th class="a" >Organizer</th>
			<th class="a" >Image</th>
		

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
				
</tr>
<?php } ?>
	</tbody>

</table>

</div>