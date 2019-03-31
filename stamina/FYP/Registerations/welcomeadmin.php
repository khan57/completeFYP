<?php

session_start();
if (isset($_SESSION['admin']) ){
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="main.js"></script>

	<style type="text/css">
	.modal-header {
    padding: 2px 16px;
    background-color: #5cb85c;
    color: white;
}

	.a{
		background-color: #428bca;
		color: white;
	}
	*{

		margin: 0;
		padding: 0;
	}
	
.wrapper{

	width: 100%;
	height: auto;
}



		#myy{


			width: 100%;
			height: 150px;
			background-color: #428bca;
			border: 1px solid white;
			line-height: 150px;
		}
	</style>
	<title>Welcome|ABC GYM</title>
</head>
<body>
<div>
	<div class="row" id="myy">
			<div class="col-md-12 col-sm-12">
	<img style="width: 130px;height: 130px" src="../images/logo.JPG">
	<b style="float: right;color: white;" >
		<?php 
 $ui= $_SESSION['admin'];

echo ' <span>
	<li style="list-style:none;" class="dropdown">
        <a style="color:white" class="dropdown-toggle" data-toggle="dropdown" href="#">'.$ui.'
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Logout</a></li>
          <li><a href="welcomeadmin.php?profile">profile</a></li>
          
        </ul>
      </li></span>';
//echo "<span><a href='logout.php'>Logout</span>"
		?>
	</b>
	

</div>
	</div></div><br><br>
	<div class="container">
	
	
	<div class="row" style="clear: both;">
		<div class="col-md-4">
	
		<ul class="nav nav-pills nav-stacked">
			
			<li id="1" class="active" onclick="gotid(this.id)" style="text-align: center;" ><a href="welcomeadmin.php?r">Reports</a>
			</li>

			<li><a href="welcomeadmin.php?psf">Pay Fee</a>
			</li>
			<li><a href="welcomeadmin.php?main">Maintainence</a>
			</li>
			<li><a href="welcomeadmin.php?fr">Financial Report</a>
			</li>

<li><a href="welcomeadmin.php?schedule">Class schedule</a>
			</li>

<li><a href="welcomeadmin.php?">D</a>
			</li>

<li><a href="welcomeadmin.php?">D</a>
			</li>

				</ul>

	

</div>
<div  class="col-md-8">
	<?php
if (isset($_GET['r'])) {
	include 'reports.php';
}else if (isset($_GET['profile'])) {
	include '../admin/profile.php';
}
else if (isset($_GET['psf'])) {
	include '../user/payfee.php';
}
else if (isset($_GET['fr'])) {
	include '../admin/financialdetails.php';
}
else if (isset($_GET['schedule'])) {
	include '../admin/schedule.php';
}
else if (isset($_GET['main'])) {
	include '../admin/maintform.php';
}


	?>
</div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>

<?php

}else{


	header("location:wel.php");
}

?>