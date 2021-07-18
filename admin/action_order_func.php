<?php 
include '../connection.php';
$order_id=$_GET['activate_id'];
$order_id1=$_GET['deactivate_id'];

if(isset($_GET['activate_id'])){

    $sql="update `order_details_of_user` set `value`=1 where `order_id`='$order_id'";
    $result=mysqli_query($conn,$sql);

    header("location:order_view_admin.php");

}
else if(isset($_GET['deactivate_id'])){

    $sql="update `order_details_of_user` set `value`=0 where `order_id`='$order_id1'";
    $result=mysqli_query($conn,$sql);

    header("location:order_view_admin.php");

}

?>