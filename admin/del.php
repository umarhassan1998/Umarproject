<?php
require("../connection.php");
$productid=$_GET["id"];

$query="SELECT * FROM products WHERE id=$productid;";
$result=mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);
 
 $query2="DELETE FROM products WHERE id=$productid;";
 $result2=mysqli_query($conn, $query2);
 echo 'Record is deleted. Click <a href="viewproducts.php">ok</a> to continue';
?>