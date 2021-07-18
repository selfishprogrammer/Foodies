<?php 
include 'connection.php';
session_start();

$pro_id = $_GET['pro_id'];

$rating= $_POST['rating'];
$order=$_POST['order'];

$user_id= $_SESSION['slno'];
$sql1="select * from `rating` where `order_id`='$order'";
$result1=mysqli_query($conn,$sql1);
$nums=mysqli_num_rows($result1);
if($nums==1){
    $sql="update `rating` set  `pro_id`='$pro_id',`order_id`='$order',`user_id`='$user_id',`rating`='$rating'";
    $result=mysqli_query($conn,$sql);
    header("location:order_history.php"); 

}
else{

$sql2="insert into `rating` (`pro_id`,`order_id`,`user_id`,`rating`) values ('$pro_id','$order','$user_id','$rating')";
$result2=mysqli_query($conn,$sql2);
header("location:order_history.php");
}
?>