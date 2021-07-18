<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Profile</title>
</head>

<body>
    <div class="container">
        <div class="col-md-12">
            <div class="shadow-sm border " style="margin: 20px;">
                <div class="card">

                    <div class="card-header text-center" style="font-size: 25px; font-family:'Courier New', Courier, monospace; background-color:aquamarine;">
                   <b>DELIVERY BOY PROFILE</b> </div>
                    <div class="card-body bg-white">
<?php 
include '../connection.php';
$delivery_boy_id=$_GET['delivery_boy_id'];
$sql="select * from `delivery_boy` where `delivry_boy_slno`='$delivery_boy_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){




?>
                        <div class="d-flex justify-content-center">

                            <img src="../Delivery Boy/<?php echo $row['delivry_boy_migratio_image'] ?>" width="140px" height="140px" alt="" class="rounded-circle">

                        </div>
                        <div class="border my-4">

                            <h5 class="text-center my-2"
                                style="font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;">
                                Name : &nbsp; <span
                                    style="font-size: 18px; color:black; font-family:'Times New Roman', Times, serif;"><?php echo $row['delivry_boy_name'] ?></span>
                            </h5>
                            <h5 class="text-center my-2"
                                style="font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;">
                                Email : &nbsp; <span
                                    style="font-size: 18px; color:black; font-family:'Times New Roman', Times, serif;"><?php echo $row['delivry_boy_email'] ?></span>
                            </h5>
                            <h5 class="text-center my-2"
                                style="font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;">
                                Phone : &nbsp; <span
                                    style="font-size: 18px; color:black; font-family:'Times New Roman', Times, serif;"><?php echo $row['delivry_boy_phone'] ?></span>
                            </h5>
                            <h5 class="text-center my-2"
                                style="font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;">
                                Age : &nbsp; <span
                                    style="font-size: 18px; color:black; font-family:'Times New Roman', Times, serif;"><?php echo $row['delivry_boy_age'] ?></span>
                            </h5>
                            <h5 class="text-center my-2"
                                style="font-size:20px; font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; color:red;">
                                Description : &nbsp; <span
                                    style="font-size: 18px; color:black; font-family:'Times New Roman', Times, serif;"><?php echo $row['delivry_boy_desp'] ?></span>
                            </h5>


                        </div>
                        <div class="d-flex justify-content-center my-3">
                         <button type="button" class="btn btn-success form-control" data-toggle="modal" data-target="#updatedelivery"
                                style="width: 18rem; border-radius:10px; ">Update</button>
                        </div>
<?php

include 'update_profile_delivery_boy.php';

} ?>
                    </div>

                    <div class="card-footer" style="background-color: aquamarine;"></div>
                </div>




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