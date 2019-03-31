
<!DOCTYPE html>
<html>
<head>
	<title>Reports||Admin</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="r.js"></script>
</head>
<body>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
<form class="form-group">
	<div class="form-group">
		
<label>Type of reports</label>
<select id="repo" onchange="got(this.value);" class="form-control">
	<option disabled="disabled" selected="selected">Select option</option>
	<option>Trainer report</option>
	<option>user report</option>
	<option>package report</option>
	<option>shift report</option>
	<option>Payment</option>
	<option>Speciality report</option>
</select>
	</div>
</form>
</div>
</div>
<div class="row">
	<div id="content" class="col-md-12 col-sm-12">
		

	</div>
</div>
</div>

</body>
</html>
