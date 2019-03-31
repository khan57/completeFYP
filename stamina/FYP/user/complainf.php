<button  class="btn btn-primary btn-lg" ><a style="color: white;text-decoration: none" href="welcomeuser.php?sc">All Complaints</a></button>
<h3>Compalint Form</h3>
<form method="POST" action="#" class="form">
	
	<div class="form-group">
		<label style="color: white">
			Title
		</label>
		<input class="form-control" required="required" type="text" name="ct">


	</div>
	<div class="form-group">
		<label style="color: white">Trainers</label>

		<select class="form-control" name="tlist">
			<?php
			$query="SELECT id,name from trainer ";
			$rr=mysqli_query($con,$query);
			while($results=(mysqli_fetch_assoc($rr))){
			?>
			<option value="<?php echo $results['id'] ?>">
				<?php echo $results['name'] ?>
					
				</option>
		<?php } ?>
		</select>

	</div>
		<div class="form-group">
		<label style="color: white">
			Description
		</label>
		<textarea rows="15" name="cd" required="required" class="form-control"></textarea>

	</div>
	<center>

	<button name="save" class="btn btn-primary btn-lg">Save</button></center>

</form><br><br>
<?php
if (isset($_POST['save'])) {
	$ctitle=$_POST['ct'];
$cbody=$_POST['cd'];
$trainernom=$_POST['tlist'];
$userid=$_SESSION['username'];
$my="SELECT  id from users where uname='$userid'";
$rs=mysqli_query($con,$my);
$arr=mysqli_fetch_assoc($rs);
$UID=$arr['id'];
$qq="INSERT INTO complaints (complain_t,c_b,uid,tid) VALUES ('$ctitle','$cbody','$UID','$trainernom')";
$execute=mysqli_query($con,$qq);
if ($execute) {
	echo "<p class='bg-primary' style='font-size:18px;text-align:center'>Data inserted</p>";
}else{
	echo "failed";
}
}

?>