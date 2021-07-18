<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">







<?php
include '../connection.php';
$delivry_boy_slno=$_GET['delivery_boy_id'];
$status="Pending";
$sql1="select * from `order_details_of_user` where `delivery_boy`='$delivry_boy_slno' and `status`='$status'";

$result1=mysqli_query($conn,$sql1);
$nums=mysqli_num_rows($result1);
if($nums>0){
    echo '
    <div style="overflow-x:auto">
    <table class="table table-bordered">
      <thead>
        <tr>
                                <th >Order Id</th>
                                <th>User Email</th>
                                <th>User Phone</th>
                                <th>Product Name</th>
                                <th>Product Quantity</th>
                                <th>Product Total Price With Discount</th>
                                <th>Payment Method</th>
                                <th>Delivery Address</th>
                                <th>Land Mark</th>
                                <th>Alternative Address</th>
                                <th>Alternative Mobile</th>
                                <th>Pincode</th>
                                <th>Order Status</th>
                                <th>Status</th>
                             
                              
        </tr>
    
    
    
        
    
      </thead>
    ';
    while($row1=mysqli_fetch_assoc($result1)){     
echo ' <tbody>
<td>'.$row1['order_id'].'</td>
<td>'.$row1['user_email'].'</td>
<td>'.$row1['user_phone'].'</td>
<td>'.$row1['product_name'].'</td>
<td>'.$row1['product_quantity'].'</td>
<td>'.$row1['total_product_price'].'</td>
<td>'.$row1['product_payment'].'</td>
<td>'.$row1['delivery_address'].'</td>
<td>'.$row1['land_mark'].'</td>
<td>'.$row1['alternative_address'].'</td>
<td>'.$row1['alternative_mobile'].'</td>
<td>'.$row1['delivery_pincode'].'</td>
<td>'.$row1['status'].'</td>
<td><a href="../admin/update_order.php?order_id='.$row1['order_id'].'"><button type="button" style="width:5rem; " class="mb-1 form- control btn btn-warning" >Status</button></a></td>

</tbody>

';

    }
    echo '</table>
    </div>';
}


else{



include 'no_pending_order_deliver.php';


}






?>