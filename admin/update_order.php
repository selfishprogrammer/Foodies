<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container">
    <div class="col-md-6 offset-md-3">
     <div class="card-body border" style="margin-top: 200px;">
<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" >
        <select name="update_status_order" id="update_status_order" class="form-control">
<option value="Pending">Pending</option>
<option value="On a Way">On a Way</option>
<option value="Delivered">Delivered</option>
<option value="Cancel">Cancel</option>

        </select>

        <button type="submit" class="form-control btn btn-secondary my-4">Update Coustmer Order</button>
        </form>
            <?php 
            include '../connection.php';
            $order_id=$_GET['order_id'];
            if($_SERVER['REQUEST_METHOD']=='POST'){
$update_status_order=$_POST['update_status_order'];
$sql="update `order_details_of_user` set `status`='$update_status_order' where `order_id`='$order_id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:admin_home.php");
}
else{
    echo 'Failed';
}

            }

?>
        </div>
    </div>
</div>