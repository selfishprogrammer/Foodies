<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<div class="container">
    <div class="col-md-6 offset-md-3">
     <div class="card-body border" style="margin-top: 200px;">
<form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" >
        <select name="update_delivery_boy" id="update_delivery_boy" class="form-control">

        <?php 
         include '../connection.php';
        $sql="select * from `delivery_boy`";
        $result=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($result)){

       
        ?>
<option value="<?php echo $row['delivry_boy_slno'] ?>"><?php echo $row['delivry_boy_name'] ?></option>
        <?php } ?>

        </select>

        <button type="submit" class="form-control btn btn-secondary my-4">Update Coustmer Order</button>
        </form>
            <?php 
         
            $user_id=$_GET['user_id_id'];
            if($_SERVER['REQUEST_METHOD']=='POST'){
$update_delivery_boy=$_POST['update_delivery_boy'];
$status="Pending";
$sql="update `order_details_of_user` set `delivery_boy`='$update_delivery_boy' where `user_id`='$user_id' and `status`='$status'";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:order_view_admin.php");
}
else{
    echo 'Failed';
}

            }

?>
        </div>
    </div>
</div>