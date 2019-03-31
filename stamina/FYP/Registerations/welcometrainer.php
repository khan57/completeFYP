<?php

session_start();
if (isset($_SESSION['username']) ){
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<!--<link href="https://fonts.googleapis.com/css?family=Monoton" rel="stylesheet"> -->
	<script type="text/javascript" src="main.js"></script>

	<style type="text/css">
	body{background-image: url(../images/logi.jpg);}
	div#calendar { background: white;}
	.bg_white{ background: white;   }
	.right_content table{ background: white;  }
	.right_content h3{ color: white;  }
	form label{ color: white; }
	
	.video_conf_link  {   }
	.video_conf_link  a{   }
	.video_conf_link  a:focus,
	.video_conf_link  a:hover{ 
		background-color: inherit !important;  
		color: inherit !important; 
		    color: #337ab7 !important; 
	}
	.nav-pills>li>a{
		font-size: 16px;
		font-weight: bold;
	}
	.a{
		background-color: #428bca;
		color: white;
	}
	*{

		margin: 0;
		padding: 0;
	}

	#content{


		background-color: #dee5e2;
		width: 85%;
		float: right;
	}	
.wrapper{

	width: 100%;
	height: auto;
}

body,html{
	margin:0px;
}

#myy{
	margin-top:0;
	margin-bottom: 9px;
	border-radius: 8px;
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
<div class="container-fluid">
	
		<div  class="row">
			<div id="myy" class="col-md-12 col-sm-12">

	<span>

		<img style="padding-top: 9px;float: left;width: 130px;height: 130px;" src="../images/logo.JPG"></span>
	<img src="" style="float: left;">
	<b style="float: right;color: white;margin-right: 10px;" >
		<?php 
 $ui= $_SESSION['username'];

echo ' <span>
	<li style="list-style:none;" class="dropdown">
        <a style="color:white" class="dropdown-toggle" data-toggle="dropdown" href="#">'.$ui.'
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="logout.php">Logout</a></li>
          <li><a href="welcometrainer.php?profile">profile</a></li>
          
        </ul>
      </li></span>';
//echo "<span><a href='logout.php'>Logout</span>"
		?>
	</b>
	
<?php
//echo "<pre> _GET = "; print_r($_GET); echo "</pre>";

 $ui= $_SESSION['username'];
$trainer_id = ''; 
//echo "<pre> ui = "; print_r($ui); echo "</pre>"; exit; 
 if(!empty($ui)){
	include 'db.php';
	$control="SELECT id FROM trainer WHERE username='$ui'";
	$go=mysqli_query($con,$control);
	$trander_data = mysqli_fetch_assoc($go);
	//print_r($trander_data);  exit; 
	$trainer_id = $trander_data['id'];  
 }

 ?>
<br><br>
</div>
	</div>
	<div  class="row">
		<div  class="col-md-3">
	
		<ul class="nav nav-pills nav-stacked">
			
			<li id="1"   onclick="gotid(this.id)" style="text-align: center;" ><a href="../../index.php">Home</a></li>
			
			<li class="<?php echo (isset($_GET['dash']))?'active':'';?>"  onclick="gotid(this.id)" id="2"  style="text-align: center;"><a href="welcometrainer.php?dash">Dashboard</a></li>
			
			<li class="<?php echo (isset($_GET['members']))?'active':'';?>" onclick="gotid(this.id)" id="3" style="text-align: center;"><a href="welcometrainer.php?members">members</a></li>
			
			<li class="<?php echo (isset($_GET['Assigned']))?'active':'';?>" id="4" style="text-align: center;"><a href="welcometrainer.php?Assigned">Assigned workouts</a></li>
			
			<li class="<?php echo (isset($_GET['ua']))?'active':'';?>" onclick="gotid(this.id)" id="5" style="text-align: center;"><a href="welcometrainer.php?ua">Nutrition plan</a></li>
			
			<li class="<?php echo (isset($_GET['mem']))?'active':'';?>" style="text-align: center;"><a href="welcometrainer.php?mem">Membership type</a></li>
			
			<li class="<?php echo (isset($_GET['awo']))?'active':'';?>" id="6"  style="text-align: center;"><a href="welcometrainer.php?awo">Add workout</a></li>
			
			<li class="<?php echo (isset($_GET['sE']))?'active':'';?>" id="7" style="text-align: center;"><a href="welcometrainer.php?sE">Notice/Events</a></li>
			
			<li class="<?php echo (isset($_GET['profile']))?'active':'';?>" id="8" style="text-align: center;"><a href="welcometrainer.php?profile">Account</a></li>
			
			<li class="<?php echo (isset($_GET['cs']))?'active':'';?>" id="8" style="text-align: center;"><a href="welcometrainer.php?cs">Class Schedule</a></li>
				<li class="<?php echo (isset($_GET['comp']))?'active':'';?>" id="8" style="text-align: center;"><a href="welcometrainer.php?comp">Users Complaints</a></li>
			<li class="<?php echo (isset($_GET['N']))?'active':'';?>" id="8" style="text-align: center;"><a href="welcometrainer.php?N">Notifications</a></li>
			
			<li class="video_conf_link <?php echo (isset($_GET['members']))?'active':'';?>" id="9" style="text-align: center;"><a target="_blank"  href="https://test.ctsdemo.com/tm/vc/#TRNER<?php echo $trainer_id; ?>">Video Conference</a></li> 
		</ul>

	

</div>
<div class="col-md-1"></div>
<div  class="col-md-7 right_content">
	<?php

if (isset($_GET['ua'])) {


	include 'usernuAssigned.php';
	echo '<a href="welcometrainer.php?addw"><button class="btn btn-info">Add Nutrition plan</button></a>';
}else if (isset($_GET['profile'])){
		include 'tprofile.php';
		
	}
	else if (isset($_GET['members'])){
		include 'members.php';
	}
	else if (isset($_GET['sE'])){
		echo '<a href="welcometrainer.php?adt"><button class="btn btn-info">Add new Event</button></a>';
		include 'showevents.php';
	}else if (isset($_GET['adt'])) {
		include 'event.php';
	}
	else if (isset($_GET['awo'])) {
		include 'addworkout.php';
		//echo '<a href="welcometrainer.php?SWO"><button class="btn btn-info">Add workouts</button>';
	}

	else if (isset($_GET['sucess'])) {
		echo "<script>alert('Workout Assigned Successfully')</script>";
	
	}
else if (isset($_GET['SWO'])) {
	include 'addworkout.php';
}
else if (isset($_GET['addw'])) {
	include 'nutrition.php';
}
else if (isset($_GET['adt'])) {
	include 'addevent.php';
}
else if (isset($_GET['Assigned'])) {
	include 'showworkouts.php';
}
else if (isset($_GET['status'])) {
	echo "<script>alert('Failed')</script>";
	include 'nutrition.php';
}
else if (isset($_GET['updated'])) {
	
	include 'usernuAssigned.php';
	echo "<script>alert('Nutrition updated successfully')</script>";

}
else if (isset($_GET['del'])) {
	include 'showevents.php';
	echo "<script>alert('EVENT has been deleted successfully')</script>";

}
else if (isset($_GET['mem'])) {
	include 'membershipt.php';
	

}
else if (isset($_GET['dash'])) {
	include 'dashview.php';
	

}
else if (isset($_GET['N'])) {
	include '../Notification/AddN.php';
	

}
else if (isset($_GET['cs'])) {
	include '../trainer/schedule.php';

}

else if (isset($_GET['comp'])) {
	include 'showcomp.php';

}

	?>
</div>
</div>

</div><br><br><br><br><br><br><br><br><br><br>
<?php include 'footer.php' ?>
</body>
</html>

<?php

}else{


	header("location:userlogin.php");
}

?>