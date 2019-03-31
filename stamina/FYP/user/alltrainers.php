
  <center><h2 style="color: white">Trainers and their details</h2></center>
             
  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Name</th>
        <th>Speciality</th>
        <th>Timing</th>
        <th>Mobile</th>
        <th>Enroll</th>
        <th>Video Conference </th>
      </tr>
    </thead>
    <tbody>
    	       <?php
            
include '../db.php';
$trainee=$_SESSION['username'];
$ii="SELECT id,subtype FROM users where uname='$trainee'";
$p=mysqli_query($con,$ii);

$poll=mysqli_fetch_assoc($p);
  $pl= $poll['id'];

$i="SELECT id,name,mobile,special,timing FROM trainer order by id ASC";

$runn=mysqli_query($con,$i);

while($row=mysqli_fetch_assoc($runn)){

 $ui=$row['id'];
  $oops="SELECT id from enrolled where uid='$pl' AND tid='$ui'";

$not=mysqli_query($con,$oops);
$perfect=0;
while ($confirm=mysqli_fetch_assoc($not)) {
$perfect++;
}



       ?>
      <tr>
        <td> <?php echo $row['name']; ?></td>
        <td><?php echo $row['special'] ;?></td>
        <td><?php echo $row['timing']; ?></td>
        <td><?php echo $row['mobile']; ?></td>

      <?php 

       if ($perfect==0) { ?>

        <td><button name=""  id="EN" class="btn btn-success"><a style="color:white;text-decoration: none;" href="../Registerations/enrollid.php?o=<?php echo $ui;?>">Do want to enroll?</a></button></td>
    <?php } 
   

    else {
             ?>
          <td><button type="button" name="" disabled="disabled"  id="EN" class="btn btn-danger">Enrolled</button></td>
      
          <?php } ?>

    <td><a target="_blank" href="https://test.ctsdemo.com/tm/vc/#TRNER<?php echo $row['id'];?>">Video Conference</a></td>


      </tr>
      <?php }
  
      ?>
    </tbody>
  </table>
</div>