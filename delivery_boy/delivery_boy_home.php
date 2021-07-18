<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Delivery Boy</title>
</head>

<body>
<div class="text-center my-4" style="font-size: 54px;
    font-family: fangsong;
    color: currentcolor;
    font-style: oblique;">DELIVERY BOY PANEL</div><hr>



    <div class="container">

        <div class="row">

        <?php 
        session_start();
include '../connection.php';

$email=$_SESSION['email'];

$sql="select * from `delivery_boy` where `delivry_boy_email`='$email'";
$result=mysqli_query($conn,$sql);

while($row=mysqli_fetch_assoc($result)){





    $delivry_boy_slno=$row['delivry_boy_slno'];
    


?>


        <a href="order_pending_delivery.php?delivery_boy_id=<?php echo $delivry_boy_slno; ?>" class="nav-link">   <div class="shadow-sm  ml-3 my-2 " style="
                            width: 10rem;
                            height: 10rem;
                            border-radius: 12px;
                            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                            background: ghostwhite;
                        " >

                <div class="text-center" style="    padding-top: 22px;
    font-size: 21px;
    font-family: cursive;
    color: #0008ff;">PENDING ORDER</div>

                <div class="text-center" style="    padding-top: 22px;
    font-size: 17px;
    font-family: cursive;
    color: #0008ff;">520</div>

            </div></a>





            <a href="order_history.php?delivery_boy_id=<?php echo $delivry_boy_slno; ?>" class="nav-link">  <div class="shadow-sm  ml-3 my-2 " style="
                            width: 10rem;
                            height: 10rem;
                            border-radius: 12px;
                            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                            background: antiquewhite;
                        ">

                <div class="text-center" style="    padding-top: 22px;
    font-size: 21px;
    font-family: cursive;
    color: #0d7f15;;">DELIVERED ORDER</div>

                <div class="text-center" style="    padding-top: 22px;
    font-size: 17px;
    font-family: cursive;
    color: #0d7f15;">520</div>

            </div></a>









            <a href="total_collection.php?delivery_boy_id=<?php echo $delivry_boy_slno; ?>" class="nav-link"> <div class="shadow-sm  ml-3 my-2 " style="
                            width: 10rem;
                            height: 10rem;
                            border-radius: 12px;
                            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                            background: beige
                        ">

  <div class="text-center" style="    padding-top: 22px;
    font-size: 21px;
    font-family: cursive;
    color: #e87045;">TOTAL COLLECTION</div>

                <div class="text-center" style="    padding-top: 22px;
    font-size: 17px;
    font-family: cursive;
    color: #e87045;">520</div>

            </div></a>





           <a href="order_pending_delivery.php?delivery_boy_id=<?php echo $delivry_boy_slno; ?>" class="nav-link"> <div class="shadow-sm  ml-3 my-2 " style="
                            width: 10rem;
                            height: 10rem;
                            border-radius: 12px;
                            font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
                            background: aliceblue;
                        ">





  <div class="text-center" style="    padding-top: 22px;
    font-size: 21px;
    font-family: cursive;
    color: #e87045;">DELIVERY BOY PROFILE</div>

                <div class="text-center" style="    padding-top: 22px;
    font-size: 17px;
    font-family: cursive;
    color: #e87045;">520</div>

            </div></a>



<?php
}


?>


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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlF 6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>