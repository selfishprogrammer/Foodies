

 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
include 'connection.php';
session_start();
if(isset($_SESSION['loggedin'])){

$user_id=$_GET['user_id'];
$name=$_SESSION['name'];
$phone=$_SESSION['phone'];
$email=$_SESSION['email'];

// Cart//
$total=0;
$quantity=0;
$sql="select * from `cart_details` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $product_id=$row['product_id'];
    $product_name=$row['product_name'];
    $product_price=$row['product_price'];
    $product_quantity=$row['product_quantity'];
    $total_price=$row['total_price'];
    $product_discount=$row['product_discount'];
    $product_total_price=$row['product_total_price'];
    $total +=$row['product_total_price'];
    $quantity +=$row['product_quantity'];
$product_discount_price=$row['product_discount_price'];


$sql1="select * from `address_of_user` where `user_id`='$user_id'";
$result1=mysqli_query($conn,$sql1);
while($row1=mysqli_fetch_assoc($result1)){

    $address=$row1['address'];
    $land_mark=$row1['land_mark'];
    $house_no=$row1['house_no'];
    $alternative_address=$row1['alternative_address'];
    $alternative_mobile=$row1['alternative_mobile'];






$payment=$_GET['payment_method'];
$status="Pending";
$value=1;

    $sql2="insert into `order_details_of_user` (`user_id`,`user_email`,`user_phone`,`product_id`,`product_name`,`product_per_psc_price`,`product_quantity`,`total_price`,`product_discount`,`product_discount_price`,`total_product_price`,`product_payment`,`delivery_address`,`land_mark`,`alternative_address`,`alternative_mobile`,`delivery_pincode`,`delivery_boy`,`status`,`value`) values ('$user_id','$email','$phone','$product_id','$product_name','$product_price','$product_quantity','$total_price','$product_discount','$product_discount_price','$product_total_price','$payment','$address','$land_mark','$alternative_address','$alternative_mobile','$house_no',0,'$status','$value') ";
    $result2=mysqli_query($conn,$sql2);



    if($result2){
        if($_GET['payment_method']=='Wallet'){
            $sql1="select `rs` from `wallet` where `slno` = '$user_id'";
            $result1=mysqli_query($conn,$sql1);
            $nums1=mysqli_num_rows($result1);
            if($nums1==1){
                $row1=mysqli_fetch_assoc($result1);
            $update_wallet_balance=$row1['rs']-$total;
            }
            $sql3="update `wallet` set `rs` = '$update_wallet_balance' where `slno`='$user_id'";
            $result3=mysqli_query($conn,$sql3);

            if($total >0 && $total <= 200){
$new_money=$update_wallet_balance+3;
                $sql4="update `wallet` set `rs` = '$new_money' where `slno`='$user_id'";
                $result4=mysqli_query($conn,$sql4);

            }
            else if($total >200 && $total <= 600){
                $new_money1=$update_wallet_balance+10;
                $sql5="update `wallet` set `rs` = '$new_money1' where `slno`='$user_id'";
                $result5=mysqli_query($conn,$sql5);
            }
            else if ($total >600){
                $new_money2=$update_wallet_balance+30;
                $sql6="update `wallet` set `rs` = '$new_money2' where `slno`='$user_id'";
                $result6=mysqli_query($conn,$sql6);

            }
        }
        
        
            
        
       

header("location:order_added.php?user_id=$user_id");




    }
else{

header("location:cart_view.php");

}

    

    










    
}
   
}

// Cart//




}


else{
    header("location:login_user.php");
}






?>

