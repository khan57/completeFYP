<?php

include 'db.php';
$q="SELECT name,special,timing FROM trainer";
$run=mysqli_query($con,$q);
$morning=0;
$evening=0;
"<h3>Shift report</h3>";
echo '<table  class="table table-condensed table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>speciality</th>
			<th>Shift</th>
			
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	
	 $name=$row['name'];
	 $uname=$row['special'];
	 $add=$row['timing'];
	 if ($add=="Morning") {
	 	$morning++;
	 }else if ($add=="evening") {
	 	$evening++;
	 }


	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$uname.'</td>
			<td>'.$add.'</td>
			
	</tr>';
}
echo '</tbody>';

echo '</table>';

echo "<h4>Number of clients entrolled in different packages</h4>";

echo '<table class="table-bordered table-striped table-responsive table-hover">
<thead>
<tr>
<th>Morning shift</th>
<th>Evening shift</th>

</tr></thead>
<tbody>
<tr>
	<td>'.$morning.'</td>
	<td>'.$evening.'</td>
	
</tr>
</tbody>;
</table>';
?>'