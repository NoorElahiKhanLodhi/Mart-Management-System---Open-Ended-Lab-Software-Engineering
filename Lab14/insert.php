<?php
	$id = $_REQUEST['ii'];
	$name = $_REQUEST['ni'];
    $price = $_REQUEST['pi'];
	$conn =mysqli_connect('localhost','root', '') or die('Unable');
	mysqli_select_db($conn,'lab9')or die('canot');	
$sql="insert into iteminfo(id, itemname, price) values('".$id."','".$name."','".$price."')";
	$result=mysqli_query($conn, $sql);
	if($result){header('location: item.php');}
	else{header('location: item.php');         }?>