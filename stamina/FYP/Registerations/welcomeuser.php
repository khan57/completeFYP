<?php
require_once 'db.php';
$total=0;
session_start();
if (isset($_SESSION['username']) ){
	$yt=$_SESSION['username'];
	$e="SELECT id FROM users where uname='$yt' ";
	$f=mysqli_query($con,$e);
	$found=mysqli_fetch_assoc($f);
	$uuiid=$found['id'];
	//check either found in enrolled too
	$r="SELECT * FROM notifications where state=0";
	$run=mysqli_query($con,$r);
	while ( $ro=mysqli_fetch_assoc($run)) {
		$toid=$ro['tid'];
		$io="SELECT id from enrolled where uid='$uuiid' AND tid='$toid' ";
		$u=mysqli_query($con,$io);
		 $count=mysqli_num_rows($u);
		 if ($count>0) {
		$total++;
		 }
	}
 	$total;
 	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="main.js"></script>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
	}
	body{ background-image: url(../images/logi.jpg);  }
	.nav-stacked>li{ margin: 21px 0px;}
	.nav-stacked>li.active { background-color: #ff5722d1; }
	.nav-stacked>li.active a { color: white; }
	.nav-stacked>li{ padding: 6px 4px;  }
	.nav-stacked>li span{ padding: 8px 6px;   }
	.nav-stacked>li span a{  font-size: 16px; font-weight: bold; color: white; }
	.left_nav{ background: #428bca;  }
	 
	 .table.table-bordered tbody tr:nth-of-type(odd){ background-color: inherit !important;  }

	#content{
		background-color: #dee5e2;
		width: 85%;
		float: right;
	}	
	.wrapper{
		width: 100%;
		height: auto;
	}
	.right_cont table th{ font-weight: bold; font-size: 16px;   }
	.right_cont table td,
	.right_cont table th,
	.right_cont h3,
	.right_cont table td a{ color: white;   }
nav ul li {
padding: 15px;
	list-style: none;
	
	
}
nav ul li  a{

	
	text-decoration: none;
	color: white;
}

.none li a{

text-decoration: none;
font-style: italic;

}
.none li a:hover{
	color:white;

}
		
		

		#myy{
			margin-top:0;
			margin-bottom: 15px;
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
	<div class="row" >
		<div class="col-md-12" id="myy">
	
	
	<span style="position: absolute;" >
		        <a style="color:white;right: 1100px" class="dropdown-toggle" data-toggle="dropdown" href="#">

		        	<span style="color: white;font-size: 25px;left: 1450px;" class="glyphicon glyphicon-bell"><sup></sup></span>
		        	
        </a>
        <ul style="left: 990px;top: 90px" class="dropdown-menu">
          
<?php 

require_once 'db.php';
if (isset($_SESSION['username']) ){
	
	$yt=$_SESSION['username'];
	$e="SELECT id FROM users where uname='$yt' ";
	$f=mysqli_query($con,$e);
	$found=mysqli_fetch_assoc($f);
	 $uuiid=$found['id'];

	//check either found in enrolled too
	$r="SELECT * FROM notifications where  state =1";
	$run=mysqli_query($con,$r);
	
	while ( $ro=mysqli_fetch_assoc($run)) {
		$toid=$ro['tid'];
		$Nid=$ro['nid'];
		$ti=$ro['title'];
		 	$body=$ro['body'];
		$io="SELECT id from enrolled where uid='$uuiid' AND tid='$toid' ";
		$u=mysqli_query($con,$io);
		 $count=mysqli_num_rows($u);
		 if ($count>0) {
		 	
		 	echo '<li><a href="#">'.$body.'</a></li>';
		

	
		 }
		}
	}
	?>
 	
          
          
          
        </ul></span>


		<img style="padding-top: 9px;float: left;width: 130px;height: 130px" src="../images/logo.JPG"></span>
	<b style="float: right;color: white;margin-right: 10px;" >
		<?php 
		
 $ui= $_SESSION['username'];
 $yahoo="SELECT img from users where uname='$ui'";
 $lii=mysqli_query($con,$yahoo);
$gotimg=mysqli_fetch_assoc($lii);
$profileimg=$gotimg['img'];

echo ' <span>
	<li style="list-style:none;" class="dropdown">
	<img class="img-circle" style="height:40px;width:40px;" src="uploads/'.$profileimg.'">
        <a style="color:white" class="dropdown-toggle" data-toggle="dropdown" href="#">'.$ui.'
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><a href="logout.php">Logout</a></li>
          <li><a href="#"><a href="#">profile</a></a></li>
          
        </ul>
      </li></span>';
//echo "<span><a href='logout.php'>Logout</span>"
		?>
	</b>
	
</div></div>


<div  class="row"><div class="col-md-2 col-sm-12 col-xs-12 left_nav">
	
		<ul class="nav nav-pills nav-stacked">
			
			
			<li class=""><span style="color: white;font-size: 25px" class="glyphicon glyphicon-home "> <a style="text-decoration:none " href="../../index.php">Home</a></li></span>
			
			
			<li class="<?php echo (isset($_GET['at']))?'active':'';?>"><span style="color: white;font-size: 25px;" class="glyphicon glyphicon-tower "> <a style="text-decoration:none " href="welcomeuser.php?at">Trainers</a></span></li>
			
			<li class="<?php echo (isset($_GET['c']))?'active':'';?>"><span style="color: white;font-size: 25px;" class="glyphicon glyphicon-time "> <a style="text-decoration:none " href="welcomeuser.php?c">Class schedule</a></span></li>
		
			
			<li class="<?php echo (isset($_GET['sho']))?'active':'';?>"><span style="color: white;font-size: 25px" class="glyphicon glyphicon-ok-circle "> <a style="text-decoration:none " href="welcomeuser.php?sho"> Assigned Workouts</a></li>
			
			<li class="<?php echo (isset($_GET['fee']))?'active':'';?>"> <span style="color: white;font-size: 25px" class="glyphicon glyphicon-transfer"> <a style="text-decoration:none " href="welcomeuser.php?fee">Fee Payment</a></span></li>
			<li class="<?php echo (isset($_GET['comp']))?'active':'';?>"> <span style="color: white;font-size: 25px;"  class="glyphicon glyphicon-transfer"> <a style="text-decoration:none " href="welcomeuser.php?comp">Compaint</a></span></li>
			
			<li class="<?php echo (isset($_GET['EEE']))?'active':'';?>"><span style="color: white;font-size: 25px;" class="glyphicon glyphicon-tags"> <a href="welcomeuser.php?EEE"> Notice/Events</a></span></li>
			
			<li class="<?php echo (isset($_GET['an']))?'active':'';?>"><span style="color: white;font-size: 25px" class="glyphicon glyphicon-cutlery"> <a style="text-decoration:none " href="welcomeuser.php?an">Nutrition Schedule</a></span></li>
			
			<li class="<?php echo (isset($_GET['sn']))?'active':'';?>"><span style="color: white;font-size: 25px"; class="glyphicon glyphicon-bell"> <a style="text-decoration:none " href="welcomeuser.php?sn">Notifications <span style="color: red;border:1px solid black"><?php echo $total ?></span></a></span></li>
			
			<li class="<?php echo (isset($_GET['p']))?'active':'';?>"><span style="color: white;font-size: 25px" class="glyphicon glyphicon-user"> <a  style="text-decoration:none "href="welcomeuser.php?p">Account</a></span></li>
		</ul>

	
</div>
<div class="col-md-1"></div>
<div   class="col-md-8 col-sm-12 col-xs-12 right_cont">
		
<?php
if (isset($_GET['at'])) {
	include '../user/alltrainers.php';
}
else if (isset($_GET['an'])) {
	include '../user/nutrition.php';
}
else if (isset($_GET['sho'])) {
	include '../user/showWO.php';
}
else if (isset($_GET['p'])) {
	include '../user/profile.php';
}
else if (isset($_GET['c'])) {
	include '../user/classS.php';
}
else if (isset($_GET['sn'])) {
	include '../Notification/showN.php';
}
else if (isset($_GET['EEE'])) {
	include 'EventsU.php';
}
else if (isset($_GET['fee'])) {
	include '../user/showfee.php';
}
else if (isset($_GET['comp'])) {
	include '../user/complainf.php';
}
else if (isset($_GET['sc'])) {
	include '../user/showcomp.php';
}

?>
	</div>




</div>
</div>
<br><br><br><br><br><br>

<?php include 'footer.php'?>
	

	
</body>
</html>

<?php

}else{


	header("location:userlogin.php");
}

?>