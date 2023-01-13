<?php
session_start();
$name = $_REQUEST['user'];
$pass = $_REQUEST['pass'];
$_SESSION['name']=$name;
$con=mysqli_connect('localhost','root', '') or die('Unable');
mysqli_select_db($con,'lab9')or die('canot');
$sql="SELECT * FROM login WHERE user = '".$name."' AND pass = '".$pass."'";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_array($result);
    {header('location: menu.html');}}
else {header ('location: index.html');}
mysqli_close();
?>