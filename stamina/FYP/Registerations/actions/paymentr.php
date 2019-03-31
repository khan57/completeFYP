
<div class="col-md-12">
<?php

include 'db.php';
$q="SELECT tid,frm,too,month FROM pays";
$run=mysqli_query($con,$q);

"<h3>Shift report</h3>";
echo '<table  class=" table table-condensed table-bordered table-striped table-responsive table-hover">
	<thead style="background-color:#428bca;color:white">
		<tr>
			<th>Name</th>
			<th>From</th>
			<th>TO</th>
			<th>Month</th>
			<th>Amount</th>
			
		</tr>
	</thead>';
	 echo '<tbody>';
	 while ($row= mysqli_fetch_assoc($run)) {
	 	$iiui=$row['tid'];

	 	$i="SELECT amount from msalary where tid='$iiui'";
	 	$runo=mysqli_query($con,$i);
	 	$fetched=mysqli_fetch_assoc($runo);
	 	$salaary=$fetched['amount'];
	 	$s="SELECT name from trainer WHERE id ='$iiui'";
	 	$IG=mysqli_query($con,$s);
	 	$show=mysqli_fetch_assoc($IG);

	 $name=$show['name'];
	 $from=$row['frm'];
	 $to=$row['too'];
	 $month=$row['month'];
	 
	echo	'<tr>
			<td>'.$name.'</td>
			<td>'.$from.'</td>
			<td>'.$to.'</td>
			<td>'.$month.'</td>
			<td>'.$salaary.'</td>
			
	</tr>';
}
echo '</tbody>';

echo '</table>';

?>
</div>