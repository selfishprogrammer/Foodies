<?php 
include 'connection.php';
$product_id=$_GET['product_id'];

$sql="delete from `cart_details` where `product_id`='$product_id'";
$result=mysqli_query($conn,$sql);
header("location:cart_view.php");


?>