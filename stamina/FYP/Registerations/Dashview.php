
<?php
include_once 'db.php';
$students="SELECT id from users";
$tt=mysqli_query($con,$students);
$tstudents=mysqli_num_rows($tt);

//members
$mem="SELECT id from trainer";
$t=mysqli_query($con,$mem);
$tmem=mysqli_num_rows($t);

//admins
$admins="SELECT id from admin";
$ta=mysqli_query($con,$admins);
$tadmins=mysqli_num_rows($ta);


?>
<div class="row">
	<div class="col-md-5">
<div class="card text-center text-white bg-warning" style="height: 150px;border-radius: 15px;">
  <div class="card-header bg-success" >Total members</div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 80px;font-weight: bolder;"><?php 
    echo $tmem?></h5>
    
  </div>
</div>
</div>
	<div class="col-md-5">
<div class="card text-center text-white bg-success" style="height: 150px;border-radius: 15px;">
  <div class="card-header bg-danger" >Students</div>
  <div class="card-body">
    <h5 class="card-title" style="font-size: 80px;font-weight: bolder;"><?php 
    echo $tstudents?></h5>
    
  </div>
</div>
</div>
</div>
<br><br>
<div class="row">
	<div class="col-md-5">
<div class="card text-center text-white bg-danger" style="height: 150px;border-radius: 15px;">
  <div class="card-header bg-primary" >Owners</div>
  <div class="card-body  ">
    <h5 class="card-title" style="font-size: 80px;font-weight: bolder;"><?php 
    echo $tadmins?></h5>
      </div>
</div>
</div>
	<div class="col-md-5">
<div class="card text-center text-white bg-primary " style="height: 150px;border-radius: 15px;">
  <div class="card-header bg-danger" >Profit</div>
  <div class="card-body ">
    <h5 class="card-title" style="font-size: 80px;font-weight: bolder;">08%</h5>
  
  </div>
</div>
</div>
</div>
<br><br>
<div class="row">
  <div class="col-md-10 col-sm-12 col-xs-12">
    <?php
include_once 'include/index.php';
    ?>

  </div>
</div>



