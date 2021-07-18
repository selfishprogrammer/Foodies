<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Your Order</title>
</head>

<body>

    <div class="shadow-sm mt-0 text-center sticky-top" style="height: 50px; font-size:20;"><b>ORDER DETAILS
        </b> </div>
    <div class="container">
        <div class="shadow-sm border" style="margin-top:250px;    background-color: #eeeadd;">
           
<?php 
session_start();
    include 'connection.php';
    $html;
 $user_id=$_GET['user_id'];

$sql="select * from `order_details_of_user` where `user_id`='$user_id' and `status`='pending' and `value`=1";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums>0){
 

?>

<?php
$to=$_SESSION['email'];

$subject="Order Conformation";
$message="Your Order Has Been Confirmed , Our Delivery Agent Will Reach To You Soon";
$headers=[
"MIME-Version: 1.0",
"Content-type: text/plain; charset=utf-8",
"From: bishwasoraon716@gmail.com"
];

$headers=implode("\r\n",$headers);

if(mail($to,$subject,$message,$headers)){




$sql="delete from `cart_details` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);

header("location:order_placed.php?user_id=$user_id");

}
}
else{
?>
 <script>
swal("Order Failed", "Something Went Wrong", "error");
</script>
<?php

}

?>

      





        </div>
    </div>

  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>