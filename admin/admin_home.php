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
        <div class="shadow-sm bg-white text-center " style="height: 50px; font-size:20;"><b> <h4 class="mt-4">ADMIN
                PANEL</h4> </b> </div>
        <div class="main_admin">
            <div class="row">
                <div class="col-md-3">



                    <div class="shadow-sm mx-1">
                        <button type="button" class="shadow-sm form-control mt-3" id="nav_conta">Admin
                            Categories</button>
                        <div class="my_admin sticky-top" style="display: none;">

                            <?php include 'admin_nav.php'; ?>


                        </div>



                    </div>

                </div>

                <div class="col-md-9">
                    <div class="shadow bg-white mt-3 mb-4">
                        <div class="d-flex justify-content-center">
                            <div class="row">


                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/cat.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD CATEGORY</div>
                                    <div class="d-flex justify-content-center">
                                        <a href="categories_admin.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD CATEGORY</button></a>
                                    </div>
                                </div>


                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/coupon.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD COUPONS</div>
                                    <div class="d-flex justify-content-center">
                                    <a href="coupon_admin.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD COUPON</button></a>
                                    </div>
                                </div>




                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/dilevry.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD DILEVRY</div>
                                    <div class="d-flex justify-content-center">
                                        <a href="delivry_boy_admin.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD DELIVRY BOY</button></a>
                                    </div>
                                </div>



                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/item.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD ITEM</div>
                                    <div class="d-flex justify-content-center">
                                        <a href="item_admin.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD ITEM</button></a>
                                    </div>
                                </div>

                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/user.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD USERS</div>
                                    <div class="d-flex justify-content-center">
                                    <a href="add_user.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD USERS</button></a>
                                    </div>
                                </div>

                                <div class="shadow-sm mx-4 my-3" style="width: 18rem; ">
                                    <img src="../image/user.png" width="100%" height="250px" alt="" class="card-img">
                                    <div class="main_name mt-3 text-center">ADD IMAGES</div>
                                    <div class="d-flex justify-content-center">
                                    <a href="admin_add_images.php"><button type="button" id="button_color"
                                                class=" mt-3 mb-3 btn form-control  mr-5"
                                                style="background-color:greenyellow;">ADD IMAGE</button></a>
                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>








    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script>
    $(function() {


        console.log("Ajax")
        $('#nav_conta').click(function() {
            $('.my_admin').slideToggle("slow")
        })
    })
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
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