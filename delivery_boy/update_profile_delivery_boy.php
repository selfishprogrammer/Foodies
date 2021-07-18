<?php 
          session_start();


          include '../connection.php';
          
          
          
          
          ?>

<!-- Modal -->
<div class="modal fade" id="updatedelivery" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel" style="font-family:cursive;">
                    <?php echo $_SESSION['name'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card-body border">
                    <?php
                    $email=$_SESSION['email'];
                    $sql="SELECT * FROM `delivery_boy` where `delivry_boy_email`='$email'";
                    $result=mysqli_query($conn,$sql);
                    $nums=mysqli_num_rows($result);
                    if($nums){
                        $row=mysqli_fetch_assoc($result);
                        
                    ?>
                    <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                        <div class="form-group">
                            <input type="text" name="delivry_boy_name" value="<?php echo $row['delivry_boy_name'] ?>"
                                placeholder="Delivery Boy Name" class="form-control" id="">
                        </div>

                        <div class="form-group">
                            <input type="number" name="delivry_boy_phone"
                                value="<?php echo $row['delivry_boy_phone'] ?>" placeholder="Delivery Boy Phone"
                                class="form-control" id="">
                        </div>
                        <div class="form-group">
                            <input type="number" name="delivry_boy_age" value="<?php echo $row['delivry_boy_age'] ?>"
                                placeholder="Delivery Boy Age" class="form-control" id="">
                        </div>
                        <!-- <div class="form-group">
                            <textarea name="delivry_boy_desp" class="form-control" placeholder="<?php echo $row['delivry_boy_desp'] ?>" 
                                id="" style="width:100%; height:250px;"></textarea>
                        </div> -->
                        <button type="button" class="btn btn-danger">Close</button>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    <?php } 
                    if($_SERVER['REQUEST_METHOD']=="POST"){
                    $name=$_POST['delivry_boy_name'];
                    $phone=$_POST['delivry_boy_phone'];
                    $age=$_POST['delivry_boy_age'];

                $sql3="select * from `delivery_boy` where `delivry_boy_phone`='$phone'";
                $result3=mysqli_query($conn,$sql3);
                $nums3=mysqli_num_rows($result3);
                if($nums3==1){
                   
                }
                else{
                    $sql1="update `delivery_boy` set `delivry_boy_name`='$name' , `delivry_boy_phone`='$phone', `delivry_boy_age`='$age' where `delivry_boy_email`='$email'";
                    
                    $result1=mysqli_query($conn,$sql1);
                }
                $sql4="select * from `users` where `phone`='$phone'";
                $result4=mysqli_query($conn,$sql4);
                $nums4=mysqli_num_rows($result4);
                if($nums3==1){
                   
                }
                else{
                    $sql2="update `users` set `phone`='$phone' where `email`='$email'";
                    
                    $result2=mysqli_query($conn,$sql2);
                    
                }   
                    }
                    
                    
                    
                    
                    
                    ?>
                </div>
            </div>
            <div class="modal-footer">

            </div>


        </div>
    </div>
</div>

