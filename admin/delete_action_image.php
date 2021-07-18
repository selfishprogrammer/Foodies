<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `index_image` where `slno`='$delete_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:admin_image_action.php");
}



?>