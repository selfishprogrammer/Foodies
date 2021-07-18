<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Invoice</title>
</head>

<body>
<?php






    include 'connection.php';

    $html="";
    $total="";
 $user_id=$_SESSION['slno'];

$sql="select * from `order_details_of_user` where `user_id`='$user_id' and `value`=1";
$result=mysqli_query($conn,$sql);
$html .='
<div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm">
<div class="card-header text-center"><b>ORDER INVOICE</b></div>
<div class="card-body">
    <div class="text-center"><b> FOOD HOUSE</b></div>
    <hr>
    <div style="overflow-x:auto;">
        <table class="table table-bordered">
            <thead>
                <tr style="background-color:darkgrey;">
                    <th scope="col">Order Id</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Discount</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Product Price With Discount</th>
                </tr>
            </thead>';


            while($row=mysqli_fetch_assoc($result)){
                $total +=$row['total_product_price'];
$html .='    <tbody>
<tr>
    <td>'.$row['order_id'].'</td>
    <td>'.$row['product_name'].'</td>
    <td>'.$row['product_discount'].'%</td>
    <td>'.$row['product_quantity'].'</td>
    <td>'.$row['total_product_price'].'/-</td>
</tr>
</tbody>';
            }


            $html .='</table>
            </div>
            <hr>


            <div class="d-flex justify-content-center">Total Price : '.$total.'/-</div>
            <hr>

            <small><b><i></i></b> We are Happy To help you our support team is always with you.</small>
        </div>




        <div class="card-footer">
        
   
        </div>
        
                     
        </div>



        </div>




    </div>';


echo $html;


?>

<a href="invoice_download.php" class="btn btn">Download Invoice</a>




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