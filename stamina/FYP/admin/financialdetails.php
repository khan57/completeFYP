<?php
$texpence=0;
	$tincome=0;
	$month=0;
	$yr=0;
?>

<div>
	<form action="#" method="post">
		<div>
<label>Date of Report</label>
<input  required="required" class="form-control" type="Date" name="d">
</div>
<label>Type of Report</label>
<select required="required" name="type" class="form-control">
	<option value="1">Monthly</option>
	<option value="2">Yearly</option>
</select>
</div><br>
<button class="btn btn-primary" name="check">Check</button>
</form>
<br><br>
	
	<table class="table table-bordered">
		
<thead>
	<th>T.Expenses</th>
	<th>T.Income</th>
	<th>Month</th>
	<th>Year</th>
	<th>Profit</th>
	<th>Loss</th>
</thead>

<tbody>
	
	<?php
include '../db.php';
if (isset($_POST['check'])) {
	 $date=$_POST['d'];
	 $ty=$_POST['type'];
	 $yr=date("y",strtotime($date));
	 $month = date("m",strtotime($date));
	 if ($ty==1) {
	 	
	 
$month = date("m",strtotime($date));
	

	$select="SELECT amount from pays where month='$month'";
	$exe=mysqli_query($con,$select);
while($col=mysqli_fetch_assoc($exe)){
$texpence+=$col['amount'];

}

$s="SELECT amount from userfee where mnth='$month'";
	$e=mysqli_query($con,$s);
while($c=mysqli_fetch_assoc($e)){
$tincome+=$c['amount'];

}//end of while


$ss="SELECT mcost from websitem where month='$month'";
	$ed=mysqli_query($con,$ss);
while($cc=mysqli_fetch_assoc($ed)){
$texpence+=$cc['mcost'];


}}
//end of while
else if ($ty==2) {
	


$s="SELECT amount from userfee where yeaar='$yr'";
	$e=mysqli_query($con,$s);
while($c=mysqli_fetch_assoc($e)){
$tincome+=$c['amount'];
}
$years="SELECT mdate,mcost FROM websitem";
$to=mysqli_query($con,$years);

while ($cols=mysqli_fetch_assoc($to)) {
$ab=$cols['mdate'];
$datee=date("y",strtotime($ab));
 $yr=date("y",strtotime($date));//selected 
if ($datee==$yr) {
	$texpence+=$cols['mcost'];
		}
}//end of while
//trainer part start here !!!!!!!!!!!!!!!!!!!

$query="SELECT frm,amount FROM pays";
$execute=mysqli_query($con,$query);
while($rows=mysqli_fetch_assoc($execute)) {
	$ab=$rows['frm'];
$datee=date("y",strtotime($ab));
 $yr=date("y",strtotime($date));//selected 
if ($datee==$yr) {
	$texpence+=$rows['amount'];
}
											}

// tariner ends here!!!!!!!!!!!!!!!!!!!!!!!!!!!!
}//end of else
}//end of isset


?>
	<tr>
		<td><?php echo $texpence ?></td>
		<td><?php echo $tincome ?></td>
		<td><?php echo $month ?></td>
		<td><?php echo $yr ?></td>
		<td>
			<?php 

			 if($texpence-$tincome>0)
		{echo $texpence-$tincome;}
		else{echo '0';} ?></td>
		<td>
			<?php  if($texpence-$tincome<0)
		{echo (-1)*($texpence-$tincome);}
		else{echo '0';} ?>
		</td>
	</tr>
</tbody>

	</table>
</div>

