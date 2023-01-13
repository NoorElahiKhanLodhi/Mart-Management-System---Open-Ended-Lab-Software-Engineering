<!DOCTYPE html>
<html lang="en">
<head>
    <title>Price</title>
    <link rel="stylesheet" href="recordStyle.css">
</head>
<body>
    <h1 class="head">VIEW PRODUCT AND PRICES</h1>
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
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
    $sql = 'SELECT id, itemname, price FROM iteminfo';
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
        echo $row[2];}} ?></td>
    </tr>
</table>
</div>
<a href="menu.html">Go to Menu</a>
</body>
</html>