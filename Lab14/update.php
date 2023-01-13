<!DOCTYPE html>
<html lang="en">
<body>
<?php
$con=mysqli_connect('localhost','root', '') or die('Unable');
mysqli_select_db($con,'lab9')or die('canot');   
   $id = $_GET['iu'];
   $p = $_GET['pu'];
	$sql="UPDATE iteminfo SET price = '".$p."' where id = '".$id."'";
	$result=mysqli_query($con, $sql);
	if($result){header('location: item.php');
	}else{header('location: item.html');}
?>  </body></html>