<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `coupon_code` where `coupon_slno`='$delete_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:admin_coupon_action.php");
}




?>