<?php
include 'db.php';
$q="SELECT * FROM trainer";
$run=mysqli_query($con,$q);

"<h3>Trainers report</h3>";
echo '<table class="table table-condensed table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>username</th>
			<th>Adress</th>
			<th>Cnic</th>
			<th>Mobile</th>
			<th>Speciality</th>
			<th>Timing</th>
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	
	 $name=$row['name'];
	 $uname=$row['username'];
	 $add=$row['address'];
	 $cnic=$row['cnic'];
	 $mobile=$row['mobile'];
	 $special=$row['special'];
	 $time=$row['timing'];

	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$uname.'</td>
			<td>'.$add.'</td>
			<td>'.$cnic.'</td>
			<td>'.$mobile.'</td>
			<td>'.$special.'</td>
			<td>'.$time.'</td>
	</tr>';
}
echo '</tbody>';

echo '</table>';
?>'