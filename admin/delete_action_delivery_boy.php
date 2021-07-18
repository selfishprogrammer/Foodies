<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `delivery_boy` where `delivry_boy_slno`='$delete_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:admin_delivery_boy_action.php");
}



?>