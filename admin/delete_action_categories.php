<?php 
include '../connection.php';
$delete_id=$_GET['delete_id'];
$sql="delete from `categories_of_dish` where `categories_id`='$delete_id'";
$result=mysqli_query($conn,$sql);
if($result){
header("location:admin_categories_action.php");
}



?>