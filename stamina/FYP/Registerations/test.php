<?php

require 'db.php';
global $conn;
try {
	
	$conn= new PDO("mysql:host=localhost;dbname=fyp",'root','');

} catch (Exception $e) {
	
}
$query=$conn->query("SELECT * FROM events");
$query->setFetchMode(PDO :: FETCH_ASSOC);

while($row=$query->fetch())
{

	echo "<b>".$row['id']."</b> ".$row['organizer']."</br>";
}
echo "<form method='GET' action=''>

<input type='text' name='val'><button >Update</button>
<input type='text' name='in'><button>Insert</button>
</form>";
if (isset($_GET['val'])) {
	
	$i=$_GET['val'];
$update=$conn->query("UPDATE events SET decrip='$i' WHERE id =27 ");
}

if (isset($_GET['in'])) {
	insert($_GET['in'],$conn);
}


 function insert($D,$k)
{
$t=$k->prepare("INSERT INTO events(title,decrip,dati,organizer,img) VALUES ('weight lifting','$D','july','Adnan','profile.jpg')");
$t->execute();
if ($t) {
echo " event INSERTED";
}else{

	echo "failed";
}

}

?>