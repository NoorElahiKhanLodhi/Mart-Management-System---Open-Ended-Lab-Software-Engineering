    <?php
$id=$_GET['item'];
$conn =mysqli_connect('localhost','root', '') or die('Unable');
	mysqli_select_db($conn,'lab9')or die('canot');	
$sql="INSERT INTO temp (id, name, price) SELECT id, itemname, price FROM iteminfo WHERE id='".$id."'";
	$result=mysqli_query($conn, $sql);
if($result){header('location: bill.php');}
	else{header('location: menu.php');         }
?>