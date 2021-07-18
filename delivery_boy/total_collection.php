<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Total Collection</title>
</head>

<body>

    <?php

include '../connection.php';
$delivery_boy_id=$_GET['delivery_boy_id'];
$total=0;
$cash="Cash On Delivery";
$status="Delivered";
$sql="select * from `order_details_of_user` where `delivery_boy`='$delivery_boy_id' and `status`='$status' and `product_payment`='$cash'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);

if($nums >0){


    ?>

    <div class="container">

        <div class="col-md-6 offset-md-3">

            <div class="shadow-sm">
                <table class="table table-striped">
                    <thead>
                        <tr class="bg-info" style="width: 100%;">
                            <th style="width:10% ;">Order Id</th>
                            <th style="width:40% ;">Product Name</th>
                            <th style="width:10% ;">Product Quantity</th>

                            <th style="width:20% ;">Method Payment</th>
                            <th style="width:20% ;">Total Price</th>
                        </tr>
                    </thead>

                    <?php
while($row=mysqli_fetch_assoc($result)){

    $total +=$row['total_product_price'];
echo '<tbody>
<tr>

  <td>'.$row['order_id'].'</td>
  <td>'.$row['product_name'].'</td>
  <td>'.$row['product_quantity'].'</td>
  <td>'.$row['product_payment'].'</td>
  <td>'.$row['total_product_price'].'/-</td>
</tr>

</tbody>';


}

?>

                </table>

                <div class="d-flex justify-content-between">

                    <div style="font-size: 20px; font-family:'Courier New', Courier, monospace; margin-bottom:5px;">
                        <b><i>Total Collection</i></b></div>
                    <div style="font-size: 20px; font-family:'Courier New', Courier, monospace; margin-bottom:5px;">
                        <b><i><?php echo $total ?>/-</i></b></div>
                </div>

            </div>

        </div>
    </div>

    <?php
}


else{

    echo 'No Collection yet';
}



?>






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