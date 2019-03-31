
<div>
  <h2 style="color: white">Enrolled Students and their details</h2>
             
  <table class="table table-bordered table-striped table-condensed table-responsive table-hover">
    <thead>
      <tr>
        
        <th>Client NAme</th>
        <th>Date Of enrollment</th>
         <th>Date Of Expiry</th>
         <th>Age</th>
         <th>Weight</th>
         <th>Email</th>
        

        
      </tr>
    </thead>
    <tbody>
    	       <?php
include 'db.php';
$y=$_SESSION['username'];
$control="SELECT id FROM trainer WHERE username='$y'";
$go=mysqli_query($con,$control);
$hy=mysqli_fetch_assoc($go);
  $ju=$hy['id'];

$i="SELECT uid,doj,ed FROM enrolled  WHERE tid=".$ju;

$runn=mysqli_query($con,$i);

while($row=mysqli_fetch_assoc($runn)){
  $userid=$row['uid'];
$again="SELECT age,weight,email from users where id='$userid'";
$exe=mysqli_query($con,$again);
       ?>
      <tr>
       
<?php
$zz=$row['uid'];
$fetched=mysqli_fetch_assoc($exe);

$AGE=$fetched['age'];
$WEIGHT=$fetched['weight'];
$EMAIL=$fetched['email'];

$new ="SELECT name from users where id='$zz'"; 
$now=mysqli_query($con,$new);
$result=mysqli_fetch_array($now,MYSQLI_ASSOC);
$uu=$result['name']; 
?>   

        <td> <a href="memdetails.php?ii=<?php echo $zz?>"><?php echo $uu ; ?></td>
      
        <td><?php echo $row['doj']; ?></td>
          <td><?php echo $row['ed'] ;?></td>
        
        <td><?php echo $AGE ?></td>
        <td><?php echo  $WEIGHT  ;?></td>
        <td><?php echo  $EMAIL  ;?></td>
        
      
      </tr>
      <?php
  }
      ?>
    </tbody>
  </table>
</div>