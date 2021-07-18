<?php 
include '../connection.php';
$product_id1=$_GET['activate_id'];
$product_id2=$_GET['deactivate_id'];

if(isset($_GET['activate_id'])){

    $sql="update `product_list` set `action`=0 where `product_id`='$product_id1'";
    $result=mysqli_query($conn,$sql);
    $sql1="update `cart_details` set `action`=0 where `product_id`='$product_id1'";
    $resul1t=mysqli_query($conn,$sql1);
    header("location:admin_item_action.php");

}
else if(isset($_GET['deactivate_id'])){

    $sql="update `product_list` set `action`=1 where `product_id`='$product_id2'";
    $result=mysqli_query($conn,$sql);
    $sql1="update `cart_details` set `action`=1 where `product_id`='$product_id2'";
    $result1=mysqli_query($conn,$sql1);
    header("location:admin_item_action.php");

}

?>