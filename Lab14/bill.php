<!DOCTYPE html>
<html lang="en">
<head>
    <title>BILLING</title>
    <link rel="stylesheet" href="recordStyle.css">
</head>
<body>
    <h1 class="head">BILLING</h1>
    <br>
    

    <div>
<table width="100%" border="1" style="border-collapse:collapse; background-color: beige;" >
<tr> 
<th>Item ID</th> 
        <th>Item Name</th>
        <th>Price</th> 
   </tr> 
    <?php
$conn =mysqli_connect('localhost','root', '') or die('Unable');
mysqli_select_db($conn,'lab9')or die('canot');
    $sql = 'SELECT id, name, price FROM temp';
   $retval = mysqli_query( $conn, $sql);
   if(! $retval ) 
      die('Could not get data: ' . mysql_error());{
   while($row = mysqli_fetch_array($retval)) {
    ?>	<tr>
        <td>
        <?php 
        echo $row[0];
        ?>
        </td> <td><?php
        echo $row[1];
        ?>
        </td> <td><?php
        echo $row[2]; }} ?></td>
    </tr>
</table>
</div>
<br>
<div class="add">
<form action="temp.php" methode="post" class="up" name="form" >
<select name="item"><option>Select Item</option><?php
$conn =mysqli_connect('localhost','root', '') or die('Unable');
mysqli_select_db($conn,'lab9')or die('canot');
$sql = 'SELECT id,itemname FROM iteminfo';
   $retval = mysqli_query( $conn, $sql);
   if(! $retval ) 
      die('Could not get data: ' . mysql_error());{
   while($row = mysqli_fetch_array($retval)) {
    ?>	<option value="<?php echo $row[0] ?>">
        <?php 
        echo $row[1];
        ?></option>
        <?php 
$sql2= 'SELECT sum(price) FROM temp';
$res = mysqli_query( $conn, $sql2);
$rowx = mysqli_fetch_array($res);
$total=$rowx[0];
}} ?>
</select>
<button type="submit" >ADD</button>
</form>    
</div>

<label>Total Amount : Rs. <?php echo $total ?></label>
<form action="endbill.php" method=post style="margin:0 auto;">
<input type=submit value=End-Bill>
</form>
<a href="menu.html">Go to Menu</a>
</body>
</html>