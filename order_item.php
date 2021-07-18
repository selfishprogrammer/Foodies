<?php
session_start();
if (isset($_SESSION['loggedin'])) {















?>



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
        <div class="shadow-sm border my-1" style="    background-color: #eeeadd;">


            <?php
        include 'connection.php';

        $user_id = $_SESSION['slno'];

        $sql = "select * from `cart_details` where `user_id`='$user_id'";
        $result = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($result)) {

          $user_id = $row['user_id'];
          $product_id = $row['product_id'];
          $product_name = $row['product_name'];
          $product_image = $row['product_image'];
          $product_total_price = $row['product_total_price'];
          $product_quantity = $row['product_quantity'];


        ?>


            <div class="row">

                <div class="col-md-3">
                    <img src="Product Image/<?php echo $row['product_image'] ?>" width="150" height="80" alt="">
                </div>

                <div class="col-md-9 my-2">
                    <div class="text-center" style="font-size: 26px; font-family: none;">
                        <?php echo $row['product_name'] ?></div>

                    <div class="" style="  font-size: 18px; font-family: cursive;">Quantity:
                        <?php echo $row['product_quantity'] ?></div>
                    <div class="d-flex justify-content-end" style="        font-size: 26px;
                    font-family: fantasy;
                    color: inherit;">Price : <?php echo $row['product_total_price'] ?>/-</div>
                </div>








            </div>
            <hr>

            <?php   } ?>







            <?php 
                                                                                    $total=0;
                                                                                    $quantity=0;
                                                                                    $user_id=$_SESSION['slno'];
                                                                                    $sql="select * from `cart_details` where `user_id` = '$user_id'";
                                                                                    $result=mysqli_query($conn,$sql);
                                                                                    while( $row=mysqli_fetch_assoc($result)){
                                                                                      
                                                                                     $total += $row['product_total_price'];
                                                                                     $quantity += $row['product_quantity'];

           

               
            }?>


            <div class="card-footer" style="background-color: black;"></div>

            <div class="card-body" style="background-color: white;">

                <div class="d-flex justify-content-between">

                    <div class=" mx-1" style="       font-size: 21px;
                      font-family: cursive;
                      color: darkslategrey;">Total Quantity : <span
                            style="color:red; font-size:25px;"><?php echo $quantity ?></span>
                    </div>
                    <div style="       font-size: 21px;
                      font-family: cursive;
                      color: darkslategrey;">Total Price : <span
                            style="color:red; font-size:25px;"><?php echo $total ?>/-</span></div>

                </div>


            </div>

            <div class="card-footer" style="background-color: black;"></div>
        </div>
    </div>



    <div class="container">

        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm mt-4 mb-4">
                <div class="card-header text-center">
                    ORDER DETAILS(ADDRESS AND PAYMENT)
                </div>




                <div class="card-body">
                    <!-- Address Fetching -->


                    <?php


$user_id=$_SESSION['slno'];

$sql="select * from `address_of_user` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums==1){
  while ($row=mysqli_fetch_assoc($result)){




?>




                    <div class="mx-2"><?php echo $row['address'] ?></div>
                    <div class="mx-2"><?php echo $row['land_mark'] ?></div>
                    <div class="mx-2"><?php echo $row['house_no'] ?></div>
                    <div class="mx-2"><?php echo $row['alternative_address'] ?></div>
                    <hr>

                    <a href="delete_address.php?user_id=<?php echo $user_id?>"><button type="button"
                            class="form-control my-4 btn btn-danger">ADD NEW ADDRESS</button></a>

<form action="order_conformation.php">
                   <?php 
                      
                   $sql1="select `rs` from `wallet` where `slno` = '$user_id'";
                   $result1=mysqli_query($conn,$sql1);
                   $nums1=mysqli_num_rows($result1);
                   if($nums1==1){
                       $row1=mysqli_fetch_assoc($result1);
                       if($row1['rs'] < $total){


                        ?>
<select name="payment_method" class="form-control" id="">

<option value="Cash On Delivery">Cash On Delivery</option>
</select>
<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
                        <?php

                       }
                       else{
?>


<select name="payment_method" class="form-control" id="">

<option value="Cash On Delivery">Cash On Delivery</option>
<option value="Wallet">Wallet</option>
</select>
<input type="hidden" name="user_id" value="<?php echo $user_id ?>">
<?php

                       }
                   }
                   
                   ?>
                    <div class="box border" style="background-color: yellowgreen;">


                        <div class="d-flex justify-content-center">
                           <button type="submit"
                                    class=" my-4 btn btn-outline-success mr-3">Confirm Order</button>


                            <a href="cart_view.php?user_id=<?php echo $user_id?>"><button type="button"
                                    class=" my-4 btn btn-outline-warning ml-3">Cancel Now</button></a>
                                  
                        </div>
                        </form>
                    </div>
                    <?php } ?>
                    <?php
} 


else{



?>
                    <!-- Address Fetching -->

                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">

                        <div class="form-group">
                            <input type="text" name="address" class="form-control" placeholder="Full Address" id="">

                        </div>
                        <div class="form-group">
                            <input type="text" name="land_mark" class="form-control" placeholder="Land Mark" id="">

                        </div>
                        <div class="form-group">
                            <input type="number" name="house_no" class="form-control" placeholder="House Number" id="">

                        </div>

                        <div class="form-group">
                            <input type="text" name="address1" class="form-control" placeholder="Alternative Address"
                                id="">

                        </div>

                        <div class="form-group">
                            <input type="number" name="alt_phone" placeholder="Alternative Phone" class="form-control"
                                id="">

                        </div>
                        <div class="form-group">

                            <button type="submit" class="form-control btn btn-outline-info">Add Address</button>

                        </div>
                    </form>
                    <?php
$user_id=$_SESSION['slno'];
if($_SERVER['REQUEST_METHOD']=='POST'){

$address=$_POST['address'];
$land_mark=$_POST['land_mark'];
$house_no=$_POST['house_no'];
$address1=$_POST['address1'];
$alt_phone=$_POST['alt_phone'];



$sql="insert into `address_of_user` (`user_id`,`address`,`land_mark`,`house_no`,`alternative_address`,`alternative_mobile`) values ('$user_id','$address','$land_mark','$house_no','$address1','$alt_phone')";
$result=mysqli_query($conn,$sql);

?>

                    <?php
}



?>
                    <script>
                    window.location.href
                    </script>
                    <?php } ?>

                </div>



            </div>


        </div>
    </div>





    <?php  } ?>


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