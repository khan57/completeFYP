<?php

include 'db.php';
$q="SELECT name,special FROM trainer";
$run=mysqli_query($con,$q);

echo "<h3>Speciality report</h3>";
echo '<table  class="table table-condensed table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>speciality</th>
			
			
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	
	 $name=$row['name'];
	 $uname=$row['special'];
	 


	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$uname.'</td>
			
			
	</tr>';
}
echo '</tbody>';

echo '</table>';


?>'