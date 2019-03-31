<?php

include 'db.php';
$q="SELECT * FROM users";
$run=mysqli_query($con,$q);
"<h3>Users report</h3>";

echo '<table  class="table table-condensed table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>username</th>
			<th>Email</th>
			<th>Cnic</th>
			<th>Mobile</th>
			<th>Address</th>
			<th>Package type </th>
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	
	 $name=$row['name'];
	 $uname=$row['uname'];
	 $add=$row['address'];
	 $cnic=$row['cnic'];
	 $mobile=$row['mobile'];
	 $email=$row['email'];
	 $package=$row['subtype'];

	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$uname.'</td>
			<td>'.$email.'</td>
			<td>'.$cnic.'</td>
			<td>'.$mobile.'</td>
			<td>'.$add.'</td>
			<td>'.$package.'</td>
	</tr>';
}
echo '</tbody>';

echo '</table>';
?>'