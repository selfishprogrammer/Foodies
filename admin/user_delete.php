<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `users` where `slno`='$delete_id'";
$result=mysqli_query($conn,$sql);
$sql1="delete from `wallet` where `slno`='$delete_id'";
$result1=mysqli_query($conn,$sql1);
if($result){
header("location:view_users.php");
}



?>