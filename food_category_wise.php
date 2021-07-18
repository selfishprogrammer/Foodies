





<?php

include 'connection.php';
$action="OPEN";
$sql="select * from `action_website` where `action`='$action'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums > 0){




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
    <link rel="stylesheet" href="css/style.css">

    <title>Categories wise Food</title>

</head>
<?php include 'nav.php';
    ?>
<body>


  

    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-md-2 my-4">

                <div class="shadow-sm ">


                    <?php include 'categories.php'; ?>


                </div>




            </div>
            <div class="col-md-10">
                <div class="shadow bg-white mt-3 mr-1">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <?php 
                            
if($_GET['category_id']=='full_details'){

                                $sql = "select * from `product_list` where `action`=0";
                                $result = mysqli_query($conn, $sql);
                                $nums=mysqli_num_rows($result);
                               
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                            <div class="shadow-sm "
                                style="width: 18rem;     margin-left: 22px; margin-top: 10px; margin-bottom: 10px; ">
                                <!-- Image -->

                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="Product Image/<?php echo $row['product_image1'] ?> " width="100%"
                                                height="250px" alt="" class="card-img">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Product Image/<?php echo  $row['product_image2'] ?>" width="100%"
                                                height="250px" alt="" class="card-img">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Product Image/<?php echo $row['product_image3'] ?>" width="100%"
                                                height="250px" alt="" class="card-img">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Product Image/<?php echo  $row['product_image4'] ?>" width="100%"
                                                height="250px" alt="" class="card-img">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>


                                <!-- Image -->

                                <div class="main_name mt-3 text-center" id="p_name">FOOD HOUSE</div>
                                <div class="main_name mt-2 text-center" id="s_name">
                                    <b><?php echo $row['product_name'] ?></b>
                                </div>



                                <div class="text-center mb-2" id="price"> <b><?php echo $row['product_full_price'] ?> /-
                                        per
                                        person</div></b>

                                <?php
                                            if ($row['product_discount'] == NULL) {
                                            } else {
                                            ?>


                                <div class="main_name text-center" id="dis" style="    background-color: #bf7979;
                                                                            font-style: italic;
                                                                            font-size: 25px;
                                                                            font-family: initial;">




                                    <span id="n_dis"><?php echo  $row['product_discount'] ?>%</span>Discont , Hurry Up!!
                                </div> <?php } ?>

                                <form action="add_to_cart.php?id=<?php echo $row['product_id']; ?>" method="post">

                                    <select name="id1" id="id1" class=" m-3" value="" style="width:16rem;">

                                        <?php
                                                    for ($i = 1; $i < 25; $i++) {

                                                        echo "<option>$i</option>";
                                                    }

                                                    ?>



                                    </select>

                                    <div class="d-flex justify-content-center">
                                        <a href="food_details.php?product_id=<?php echo  $row['product_id'] ?>"><button
                                                type="button" id="button_color" class=" mt-1 mb-1 btn form-control"
                                                style="background-color:gray; width:8rem;">DETAILS</button></a>

                                        <?php
                                                    if (isset($_SESSION['loggedin'])) {
                                                    ?>
                                        <button type="submit" id="button_color" class=" mt-1 mb-1 btn  form-control"
                                            style="background-color:orange; width:8rem;">ORDER</button></a>
                                    </div>
                                    <button type="submit" class=" ml-3 mb-1 btn form-control"
                                        style="background-color:greenyellow; width:16rem;">ADD TO CART</button>
                            </div>

                            <?php } else {

                                    ?>



                            <a href=""><button type="button" id="button_color" class=" mt-1 mb-1 btn  form-control"
                                    style="background-color:orange; width:8rem;" disabled>ORDER</button></a>
                        </div>
                        <button type="submit" id="button_colordsifji1" class=" ml-3 mb-1 btn form-control"
                            style="background-color:greenyellow; width:16rem;" disabled>ADD TO CART</button>
                    </div>
                    <?php
                                                    } ?>




                    </form>




                    <?php } 
                
                
              
                
         




                                

                            }
                            
                            
                            
                            else{

                                ?>


                    <?php
                                        include 'connection.php';

                                        $category_id = $_GET['category_id'];

                                        $sql = "select * from `product_list` where `product_categories` = '$category_id' and `action`=0";
                                        $result = mysqli_query($conn, $sql);
                                        $nums=mysqli_num_rows($result);
                                        if($nums>0){
                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                    <div class="shadow-sm "
                        style="width: 18rem;     margin-left: 26px; margin-top: 10px; margin-bottom: 10px; ">
                        <!-- Image -->

                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="Product Image/<?php echo $row['product_image1'] ?> " width="100%"
                                        height="250px" alt="" class="card-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="Product Image/<?php echo  $row['product_image2'] ?>" width="100%"
                                        height="250px" alt="" class="card-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="Product Image/<?php echo $row['product_image3'] ?>" width="100%"
                                        height="250px" alt="" class="card-img">
                                </div>
                                <div class="carousel-item">
                                    <img src="Product Image/<?php echo  $row['product_image4'] ?>" width="100%"
                                        height="250px" alt="" class="card-img">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" style="color: black;"
                                    aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>


                        <!-- Image -->

                        <div class="main_name mt-3 text-center" id="p_name">FOOD HOUSE</div>
                        <div class="main_name mt-2 text-center" id="s_name">
                            <b><?php echo $row['product_name'] ?></b>
                        </div>



                        <div class="text-center mb-2" id="price"> <b><?php echo $row['product_full_price'] ?> /-
                                per
                                person</div></b>

                        <?php
                                                if ($row['product_discount'] == NULL) {
                                                } else {
                                                ?>


                        <div class="main_name text-center" id="dis" style="    background-color: #bf7979;
                                                                                font-style: italic;
                                                                                font-size: 25px;
                                                                                font-family: initial;">




                            <span id="n_dis"><?php echo  $row['product_discount'] ?>%</span>Discont , Hurry Up!!
                        </div> <?php } ?>

                        <form action="add_to_cart.php?id=<?php echo $row['product_id']; ?>" method="post">

                            <select name="id1" id="id1" class=" m-3" value="" style="width:16rem;">

                                <?php
                                                        for ($i = 1; $i < 25; $i++) {

                                                            echo "<option>$i</option>";
                                                        }

                                                        ?>



                            </select>

                            <div class="d-flex justify-content-center">
                                <a href="food_details.php?product_id=<?php echo  $row['product_id'] ?>"><button
                                        type="button" id="button_color" class=" mt-1 mb-1 btn form-control"
                                        style="background-color:gray; width:8rem;">DETAILS</button></a>

                                <?php
                                                        if (isset($_SESSION['loggedin'])) {
                                                        ?>
                                <button type="submit" id="button_color" class=" mt-1 mb-1 btn  form-control"
                                    style="background-color:orange; width:8rem;">ORDER</button>
                            </div>
                            <button type="submit" class=" ml-3 mb-1 btn form-control"
                                style="background-color:greenyellow; width:16rem;">ADD TO CART</button>
                    </div>

                    <?php } else {

                                        ?>



                    <a href=""><button type="button" id="button_color" class=" mt-1 mb-1 btn  form-control"
                            style="background-color:orange; width:8rem;" disabled>ORDER</button></a>
                </div>
                <button type="submit" id="button_colordsifji1" class=" ml-3 mb-1 btn form-control"
                    style="background-color:greenyellow; width:16rem;" disabled>ADD TO CART</button>
            </div>
            <?php
                                                        } ?>




            </form>




            <?php } }
                    
                    
                    else{
                        include 'no_item_found.php';
                    }
                    
                    ?>

            <?php } ?>


        </div>

    </div>


    </div>




    </div>












    <style>
    #p_name {
        font-size: 22px;
        font-family: cursive;
    }

    #s_name {
        font-size: 19px;
        font-family: math;
        color: darkslategray;
    }

    #price {
        background-color: #F1F8E9;
        font-style: italic;
        font-size: 28px;
        font-family: initial;
    }
    </style>
<?php } 

else{
    include 'shop_close.php';
}

?>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    
</body>

</html>