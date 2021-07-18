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
    <title>Order Status</title>
</head>

<body>
    <?php
session_start();
$user_id=$_SESSION['slno'];
include 'connection.php';
?>
    <div class="container">

        <div class="col-md-6 offset-md-3">

            <div class="shadow-sm">
                <script>
                swal("Congratulatiuon", "Your Order Has Been Placed", "success");
                </script>
                



              



<?php 
$status_of_food="Delivered";
$sql="select * from `order_details_of_user` where `user_id`='$user_id'  and `value`=1 and `status`='$status_of_food'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums>0){



$to=$_SESSION['email'];

$subject="Order Conformation";
$message="Your Order Has Been Delivered , Hope You Are Enjoying It";
$headers=[
"MIME-Version: 1.0",
"Content-type: text/plain; charset=utf-8",
"From: bishwasoraon716@gmail.com"
];

$headers=implode("\r\n",$headers);

if(mail($to,$subject,$message,$headers)){

?>
    <div class="my-4">

<?php include 'invoice.php' ;?>


    </div>
<?php
}

}


?>

<?php 
$status_of_food1="Cancel";
$sql="select * from `order_details_of_user` where `user_id`='$user_id'  and `value`=1 and `status`='$status_of_food1'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums>0){



$to=$_SESSION['email'];

$subject="Order Cancel";
$message="Your Order Has Been Canceled , Your Order is Cancelled due to Some reason. ";
$headers=[
"MIME-Version: 1.0",
"Content-type: text/plain; charset=utf-8",
"From: bishwasoraon716@gmail.com"
];

$headers=implode("\r\n",$headers);

if(mail($to,$subject,$message,$headers)){

?>
    <div class="my-4">

<?php include 'invoice.php' ;?>


    </div>
<?php
}

}


?>


            </div>
        </div>



    </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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