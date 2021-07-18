<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
</head>

<body>
    
    <div class="container-fluid">

<?php   

include 'connection.php';
$action="OPEN";
$sql="select * from `action_website` where `action`='$action'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums > 0){




?>


        <?php  

session_start();

if(isset($_SESSION['loggedin'])){


?>
        <div class="shadow-sm mt-0 text-center" style="height: 50px; font-size:20;"><b>CART
                PANEL</b> </div>
        <div class="row">
            <div class="col-md-9">

                <!-- Main CART -->

                <?php 
                                                                                    include 'connection.php';
                                                                                    $user_id=$_SESSION['slno'];
                                                                                    $sql="select * from `cart_details` where `user_id` = '$user_id' and `action`=0";
                                                                                    $result=mysqli_query($conn,$sql);
                                                                                    $nums=mysqli_num_rows($result);
                                                                                    if($nums>0){
                                                                                        while($row=mysqli_fetch_assoc($result)){
                                                                                    if($row['product_discount']=='null'){

                                                                                    echo '  <div class="shadow-sm my-4">
                                                                                    <div class="card-footer" style="background-color: greenyellow;"></div>
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-3">
                                                                                                <img src="Product Image/'.$row['product_image'].'" style="margin-left: 68px; margin-bottom: 30px;"
                                                                                                    height="160px" width="160px" alt="">
                                                                                            </div>

                                                                                            <div class="col-md-9">

                                                                                                <div class="text-center my-2"
                                                                                                    style="    font-size: 25px; font-family: -webkit-pictograph; font-style: unset; color: red;">
                                                                                                    FOOD SHOPS</div>
                                                                                                <div class="mx-4 "
                                                                                                    style="font-size: 16px; font-family: cursive; color: darkolivegreen;">'.$row['product_name'].'</div>
                                                                                                <div class="mx-4 my-2"
                                                                                                    style="font-size: 12px; font-family: cursive; color: darkolivegreen;">
                                                                                                    Qnty:&nbsp;'.$row['product_quantity'].'Psc</div>
                                                                                                <div class="my-2 text-center"
                                                                                                    style="font-size: 20px; font-family: cursive; background-color:yellow; color: darkolivegreen;">
                                                                                                    '.$row['product_price'].'/- Per Psc</div>

                                                                                        


                                                                                                <div class="d-flex justify-content-end">

                                                                                                    <div class="mt-4" style="    font-size: 21px; font-family: monospace;">Total Price :
                                                                                                        &nbsp; '.$row['total_price'].'.00</div>



                                                                                                </div>
                                                                                                <div class="d-flex justify-content-end">
                                                                                                    <div class="mt-2" style="    font-size: 21px; color:red; font-family: monospace;">
                                                                                                    Discount : &nbsp; '.$row['product_discount_price'].'.00</div>
                                                                                                </div>
                                                                                                <hr>
                                                                                                <div class="d-flex justify-content-end">
                                                                                                    <div class="mt-2"
                                                                                                        style="font-size: 22px; color: initial; font-family: monospace; background-color: beige;">
                                                                                                        Grand Total Price : &nbsp; '.$row['product_total_price'].'.00</div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="card-header" style="background-color: greenyellow;">

                                                                                        <div class="d-flex justify-content-center">

                                                                                        <a href="delete_cart_item.php?product_id='.$row['product_id'].'" ><button type="button" id="button_color1" class="form-control btn"
                                                                                                style="background-color:red; color:white; width:10rem;">REMOVE ITEM</button></a>

                                                                                             

                                                                                        </div>



                                                                                    </div>

                                                                                    </div>
                                                                                    ';


                                                                                    }
                                                                                    else{
                                                                                        echo ' <div class="shadow-sm my-4">
                                                                                        <div class="card-footer" style="background-color: greenyellow;"></div>
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-3">
                                                                                                    <img src="Product Image/'.$row['product_image'].'" style="margin-left: 68px; margin-bottom: 30px;"
                                                                                                        height="160px" width="160px" alt="">
                                                                                                </div>

                                                                                                <div class="col-md-9">

                                                                                                    <div class="text-center my-2"
                                                                                                        style="    font-size: 25px; font-family: -webkit-pictograph; font-style: unset; color: red;">
                                                                                                        FOOD SHOPS</div>
                                                                                                    <div class="mx-4 "
                                                                                                        style="font-size: 16px; font-family: cursive; color: darkolivegreen;">'.$row['product_name'].'</div>
                                                                                                    <div class="mx-4 my-2"
                                                                                                        style="font-size: 12px; font-family: cursive; color: darkolivegreen;">
                                                                                                        Qnty:&nbsp;'.$row['product_quantity'].'Psc</div>
                                                                                                    <div class="my-2 text-center"
                                                                                                        style="font-size: 20px; font-family: cursive; background-color:yellow; color: darkolivegreen;">
                                                                                                        '.$row['product_price'].'/- Per Psc</div>

                                                                                                    <div class="my-2 text-center"
                                                                                                        style="font-size: 20px; font-family: cursive;     background-color: #00ff03;  color: darkolivegreen;">
                                                                                                        '.$row['product_discount'].'% Discount Hurry Up</div>


                                                                                                    <div class="d-flex justify-content-end">

                                                                                                        <div class="mt-4" style="    font-size: 21px; font-family: monospace;">Total Price :
                                                                                                            &nbsp; '.$row['total_price'].'.00</div>



                                                                                                    </div>
                                                                                                    <div class="d-flex justify-content-end">
                                                                                                        <div class="mt-2" style="    font-size: 21px; color:red; font-family: monospace;">
                                                                                                        Discount('.$row['product_discount'].'%) : &nbsp; '.$row['product_discount_price'].'.00</div>
                                                                                                    </div>
                                                                                                    <hr>
                                                                                                    <div class="d-flex justify-content-end">
                                                                                                        <div class="mt-2"
                                                                                                            style="font-size: 22px; color: initial; font-family: monospace; background-color: beige;">
                                                                                                            Grand Total Price : &nbsp; '.$row['product_total_price'].'.00</div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="card-header" style="background-color: greenyellow;">

                                                                                            <div class="d-flex justify-content-center">

                                                             

                                                                                                    <a class="btn btn-danger" href="delete_cart_item.php?product_id='.$row['product_id'].'"><i class="fa fa-trash-o fa-lg"></i>&nbsp; REMOVE ITEM</a>
                                                                                                   

                                                                                            </div>



                                                                                        </div>

                                                                                    </div>
                                                                                    ';
                                                                                    }
                                                                                        }




                                                                                    ?>






            </div>



            <div class="col-md-3">
                <div class="shadow-sm mx-4 my-4 border sticky-top" style="width: 18rem; ">



                    <!-- Total Count Of Cart -->
                    <div class="my-2 text-center">CARD DETAILS</div>
                    <hr>

                    <div class="">
                        <?php 
                                                                                    $total="";
                                                                                    $user_id=$_SESSION['slno'];
                                                                                    $sql="select * from `cart_details` where `user_id` = '$user_id' and `action`=0";
                                                                                    $result=mysqli_query($conn,$sql);
                                                                                    $nums=mysqli_num_rows($result);
                                                                                    if($nums>0){
                                                                                        while($row=mysqli_fetch_assoc($result)){


                                                                                            echo '<div class="card-footer border" style="background-color: whitesmoke;"></div>
                                                                                            <div class="card-body ">
                                                                    
                                                                                                <div class="d-flex justify-content-between">
                                                                                                    <img src="Product Image/'.$row['product_image'].'" width="60px" height="60px" alt="">
                                                                                                    <div class="mx-1 mt-3"
                                                                                                        style="    font-size: 18px; font-family: cursive; color: currentcolor;">'.$row['product_name'].'</div>
                                                                    
                                                                    
                                                                                                </div>
                                                                                                <div class="d-flex justify-content-between">
                                                                                                    <div class="ml-2" style="font-size: 14px; font-family: cursive;">qnty: '.$row['product_quantity'].'p</div>
                                                                                                    <div style="    font-size: 22px; font-family: math; color: darkslategrey;"><b>Total
                                                                                                            Price : '.$row['product_total_price'].'.00</b> </div>
                                                                                                </div>


                                                                                                
                                                                                            </div>
                                                                                            <hr>';


                                                                                           

                                                                                        }
                                                                                    }

                                                                                
                                                                                                            ?>

                    </div>
                    <?php 
                                                                                    $total=0;
                                                                                    $user_id=$_SESSION['slno'];
                                                                                    $sql="select * from `cart_details` where `user_id` = '$user_id'";
                                                                                    $result=mysqli_query($conn,$sql);
                                                                                    while( $row=mysqli_fetch_assoc($result)){
                                                                                      
                                                                                     $total += $row['product_total_price'];
                                                                                  

           

               
                                                                                     }?>
                    <div class="card-header" style="background-color:cornsilk;">

                        <div class="text-center" style="    font-size: 20px;
                                    font-family: serif;
                                    color: unset;">Total Price In Cart : <span style="    font-size: 25px;
                                    font-family: fantasy;"><?php echo $total; ?>.00</span></div>
                        <div class="d-flex justify-content-center">


                            <a class="btn btn-secondary" href="order_item.php?user_id=<?php echo  $user_id ?>"><i
                                    class="fa fa-hand-o-right" aria-hidden="true"></i>&nbsp; ORDER ITEM</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Count Of Cart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php

}



else{

include 'no_item_found.php';

}



// <!-- Main CART -->












} 


else{

header("location:login_user.php");



}

?>




<?php } 

else{

include 'shop_close.php';
}
?>