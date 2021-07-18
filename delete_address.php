<?php 
include 'connection.php';
$user_id=$_GET['user_id'];
$sql="delete from `address_of_user` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);

header("location:order_item.php?user_id=$user_id");
?>