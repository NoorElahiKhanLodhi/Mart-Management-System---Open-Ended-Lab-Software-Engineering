<?php
$conn =mysqli_connect('localhost','root', '') or die('Unable');
	mysqli_select_db($conn,'lab9')or die('canot');
  $sql="Delete from temp";
$result=mysqli_query($conn,$sql);
header('location: bill.php');
$msg="Bill Ended";
echo "<script>alert(".$msg.")<script>";
?>
