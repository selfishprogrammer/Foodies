<?php 
session_start();
include 'connection.php';

$user_id=$_SESSION['slno'];


function cartItem($user_id)
{
    global $conn;
    $sql="select * from `cart_details` where `user_id`='$user_id'";
    $result =mysqli_query($conn,$sql);
    $nums=mysqli_num_rows($result);

}

?>