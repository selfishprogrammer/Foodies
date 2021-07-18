<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `product_list` where `product_id`='$delete_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:admin_item_action.php");
}



?>