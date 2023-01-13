<?php
session_start();
    $id = $_REQUEST['id'];
    $conn =mysqli_connect('localhost','root', '') or die('Unable');
	mysqli_select_db($conn,'lab9')or die('canot');
  $sql="Delete from iteminfo where id = '".$id."'";
$result=mysqli_query($conn,$sql);
if($result){header('location: item.php');}
else{header('location: item.php');}?>