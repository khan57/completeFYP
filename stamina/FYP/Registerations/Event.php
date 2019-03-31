<!DOCTYPE html>
<html>
<head>
	<title>EVENTS</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</head>
<body>



<div >

<form class="form-group" method="POST" action="addevent.php" enctype="multipart/form-data">

<div class="form-group">
<label>Title</label>
<input  class="form-control" type="text" required="required" name="etitle">

</div>

<div class="form-group">
<label>Date</label>
<input  class="form-control" type="date" required="required" name="datee">
</div>

<div class="form-group">
<label>Description</label>
<input   class="form-control" type="text" required="required" name="TD">
</div>
<div class="form-group">
	<label>Image</label>
	<input class="form-control" type="file" name="imagee"> 

</div>
<center><button type="submit" name="aevent" class="btn btn-primary">ADD Event</button></center>
</form>

</div>

</body>
</html>