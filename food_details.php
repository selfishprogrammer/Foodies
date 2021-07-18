<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Details Food</title>
</head>

<body>
    <?php include 'nav.php' ?>

    <div class="cont_ids">
        <div class="shadow-sm">






            <?php 
include 'connection.php';

$product_id=$_GET['product_id'];
$sql="select * from `product_list` where `product_id`='$product_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){





?>


            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="Product Image/<?php echo $row['product_image1'] ?>" width="100%" height="450px"
                            class="card-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Product Image/<?php echo $row['product_image2'] ?>" width="100%" height="450px"
                            class="card-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Product Image/<?php echo $row['product_image3'] ?>" width="100%" height="450px"
                            class="card-img" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Product Image/<?php echo $row['product_image4'] ?>" width="100%" height="450px"
                            class="card-img" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="container">
                <div class="card my-4">
                    <div class="card-footer" style="background-color:red;"></div>

                    <div class="card-body">
                        <div class="shop_name my-3 text-center" style="font-size: 26px;
                        font-family: fantasy;">FOODS SHOPS</div>

                        <div class="Dish_name my-3 text-center" style="    font-size: 26px;
                            font-family: monospace;
                            background-color: gainsboro;"><?php echo $row['product_name'] ?></div>


                        <div class="Dish_name my-3" style="    font-size: 14px;
                            font-family: ui-monospace;
                            color: currentcolor;"><?php echo $row['product_desp'] ?></div>

                        <div class="Dish_name my-3 text-center" style="    background-color: #ffdf22;
                            font-size: 21px;
                            font-family: math;"><?php echo $row['product_full_price'] ?>.00</div>

                        <div class="Dish_name my-3 text-center" style="       background-color: #67ff22;
                                font-size: 21px;
                                font-family: cursive;"><?php echo $row['product_discount'] ?>%</div>
                    </div>

                    <div class="card-footer" style="background-color:white;">
                        <a href="food_category_wise.php?category_id=<?php echo $row['product_categories'] ?>"
                            class="btn btn-outline-danger form-control">Order Now</a>
                    </div>

                </div>




            </div>



            <?php } ?>



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