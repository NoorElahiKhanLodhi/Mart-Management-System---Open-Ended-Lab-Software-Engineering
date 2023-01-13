<!DOCTYPE html>
<html lang="en">
<head>
    <title>Records</title>
    <link rel="stylesheet" href="recordStyle.css">
</head>
<body>
    <h1 class="head">VIEW RECORDS</h1>
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
        echo $row[2]; }} ?></td>
    </tr>
</table>
</div>
<br>
<div class="in">
<form action="insert.php" methode="post" class="in" name="form" >
Item ID:<br><input type="text" name="ii"><br>
Item Name:<br><input type="text" name="ni"><br>
Price:<br><input type="text" name="pi"><br>
<button type="submit">Insert</button>
</form>    
</div>
<div class="del">
<form action="delete.php" methode="post" class="de" name="form" >
Item ID:<br>
<input type="text" name="id"><br>
<button type="submit">Delete</button>
</form>    
</div><br><br><br><br><br>
<div class="up">
<form action="update.php" methode="post" class="up" name="form" >
Item ID: <input type="text" name="iu"><br>
Price: <input type="text" name="pu"><br><br>
<button type="submit">Update</button>
</form>    
</div>
<a href="menu.html">Go to Menu</a>
</body>
</html>