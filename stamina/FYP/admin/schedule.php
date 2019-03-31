<?php 
include '/db.php';

//echo "_Post "; print_r($_POST); 
$post = $_POST; 
if(isset($post) && !empty($post) && isset($post['day']) ){

// insert the records
	// connection to the database

$sql = "INSERT INTO admin_shecdule (day, name, stime,description) VALUES (:day, :name, :stime, :description )";
$q = $pdo->prepare($sql);
$q->execute(array(':day' => $post['day'], ':name' => $post['name'], ':stime' => $post['stime'], ':description' => $post['description']));
}


?>


<div class="col-md-8">
   <form method="POST" action="#" class="form-group">
      <div class="form-group">
         <label>Day</label>
         <select name="day" class="form-control">
         	<option class="form-control" value="1">Sunday</option>
            <option class="form-control" value="2">Monday</option>
            <option class="form-control" value="3">Tuesday</option>
            <option class="form-control" value="4">Wed</option>
            <option class="form-control" value="5">Thursday</option>
            <option class="form-control" value="6">Friday</option>
            <option class="form-control" value="7">Saturday</option>
            
         </select>
      </div>
      <div class="form-group">
         <label>Name</label>
         <input class="form-control" type="text" name="name">
      </div>
      
      <div class="form-group">
         <label>Time</label>
         <input class="form-control" type="text" name="stime">
      </div>

      <div class="form-group">
         <label>Description</label>
         <input class="form-control" type="text" name="description">
      </div>
      
      <button type="submit" class="btn btn-primary" name="addw">Add Schedule</button>
   </form>
</div>