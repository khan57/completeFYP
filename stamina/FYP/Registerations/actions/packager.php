
<div class="col-md-8"><?php

include 'db.php';
$q="SELECT * FROM users";
$run=mysqli_query($con,$q);

$six=0;
$three=0;
$year=0;
"<h3>package report</h3>";
echo '<table  class="table  table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>package type</th>
			
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	
	 $name=$row['name'];
	 $package=$row['subtype'];
	 if ($package==3) {
	 	$six;
	 }else if($package==6){

	 	$six++;
	 }else if ($package==12) {
	 	$year++;
	 }

	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$package.' months</td>
	</tr>';
}
echo '</tbody>';

echo '</table>';

echo "<h4>Number of clients entrolled in different packages</h4>";

echo '<table class="table-bordered table-striped table-responsive table-hover">
<thead>
<tr>
<th>3 months</th>
<th>6 months</th>
<th>1 year</th>
</tr></thead>
<tbody>
<tr>
	<td>'.$three.'</td>
	<td>'.$six.'</td>
	<td>'.$year.'</td>
</tr>
</tbody>;
</table>';
?>
</div>