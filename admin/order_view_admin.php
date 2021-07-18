<?php 
include '../connection.php';
session_start();


if(!isset($_SESSION['loggedin'])){

header("location:../login_user.php");
    

}
else if(isset($_SESSION['loggedin']) && $_SESSION['user']==null){


    header("location:../index.php");

}
else if(isset($_SESSION['loggedin']) && $_SESSION['user']=='admin'){


  







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
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="shadow-sm mt-0 text-center" style="height: 80px; font-size:20;"><b>ORDER VIEW
                PANEL</b> 
                <a href="admin_home.php"><button type="submit" class="form-control ml-4" id="button_color" style="width: 18rem;">Back To Home</button></a>
            </div>


        <div class="container">

            <div class="shadow-sm border my-4" style="overflow-x: auto;">
                <table class="table  border" >
                    <thead>
                        <tr style="background-color:cyan;">
                            <th >Order Id</th>
                            <th>User Id</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>Product Id</th>
                            <th>Product Name</th>
                            <th>Product Price / Psc</th>
                            <th>Product Quantity</th>
                            <th>Product Total Price</th>
                            <th>Product Discount</th>
                            <th>Product Discount Price</th>
                            <th>Product Total Price With Discount</th>
                            <th>Payment Method</th>
                            <th>Delivery Address</th>
                            <th>Land Mark</th>
                            <th>Alternative Address</th>
                            <th>Alternative Mobile</th>
                            <th>Pincode</th>
                           
                            <th>Delivery Boy</th>
                            <th>Order Status</th>
                            <th>value</th>
                            <th>Date Of Order</th>
                            <th>Status</th>
                            <th>Action Activate</th>
                            <th>Action Deactivate</th>
                            <th>Assign Delivery Boy</th>
                        </tr>


                    </thead>


                    <tbody>

                        <?php

$sql="select * from `order_details_of_user`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

    echo '    <tr>
    <td>'.$row['order_id'].'</td>
    <td>'.$row['user_id'].'</td>
    <td>'.$row['user_email'].'</td>
    <td>'.$row['user_phone'].'</td>
    <td>'.$row['product_id'].'</td>
    <td>'.$row['product_name'].'</td>
    <td>'.$row['product_per_psc_price'].'</td>
    <td>'.$row['product_quantity'].'</td>
    <td>'.$row['total_price'].'</td>
    <td>'.$row['product_discount'].'</td>
    <td>'.$row['product_discount_price'].'</td>
    <td>'.$row['total_product_price'].'</td>
 
    <td>'.$row['product_payment'].'</td>
    <td>'.$row['delivery_address'].'</td>
    <td>'.$row['land_mark'].'</td>
    <td>'.$row['alternative_address'].'</td>
    <td>'.$row['alternative_mobile'].'</td>
    <td>'.$row['delivery_pincode'].'</td>
    <td>'.$row['delivery_boy'].'</td>
    <td>'.$row['status'].'</td>
    <td>'.$row['value'].'</td>
    <td>'.$row['date_of_order'].'</td>
    <td><a href="update_order.php?order_id='.$row['order_id'].'"><button type="button" style="width:5rem; " class="mb-1 form- control btn btn-warning" >Status</button></a></td>
    <td><a href="action_order_func.php?activate_id='.$row['order_id'].'"><button type="button" style="width:5rem; " class="mb-1 form- control btn btn-success" >1 &nbsp; Active</button></a></td>
    <td><a href="action_order_func.php?deactivate_id='.$row['order_id'].'"><button type="button" style="width:5rem; " class="mb-1 form- control btn btn-danger" >0 &nbsp; Deactive</button></a></td>
    <td><a href="asign_delivery_boy.php?user_id_id='.$row['user_id'].'"><button type="button" style="width:5rem; " class="mb-1 form- control btn btn-primary" > Delivery</button></a></td>

    </tr>';

}














?>



                    </tbody>


                </table>

              

            </div>


        </div>



    </div>
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
<?php } ?>