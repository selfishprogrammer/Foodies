<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Order History</title>
</head>

<body style="background-color:white;">
<?php 

include 'connection.php';
session_start();
$user_id=$_SESSION['slno'];
$sql="select * from `order_details_of_user` where `user_id`='$user_id'";
$result=mysqli_query($conn,$sql);

$nums=mysqli_num_rows($result);
if($nums > 0){

  while($row=mysqli_fetch_assoc($result)){



?>
      <div class="col-md-12 my-3">
          <div class="shadow-sm border">
              <div class="card-body" style="width:100%;   background-color:white;">
                  <div class="row">
             

                      <div class="col-md-8">

                          <div class="text-center my-2" style="    font-size: 21px;
      font-family: cursive;">FOOD HOUSE</div>
                          <div class="text-center my-2" style="font-size: 24px;
      font-family: math;
      background-color: aliceblue;"><?php echo $row['product_name'] ?></div>

                          <div class="text-center my-2" style="    font-size: 23px;
      background-color: chartreuse;
      font-family: cursive;"><?php echo $row['product_discount'] ?></div>
                          <div class="text-center my-2" style="font-size: 17px;
      font-family: auto;
      background-color: cornsilk;"><?php echo $row['date_of_order'] ?></div>
                        
                      </div>


                      <div class="col-md-4">

                          <div class="mx-2 my-2" style="    font-size: 18px;
      font-family: cursive;">Food Price : &nbsp; &nbsp; &nbsp; <?php echo $row['product_per_psc_price'] ?>/-</div>
                          <div class="mx-2 my-2" style="font-size: 24px;
      font-family: math;">10% off Price :&nbsp; <?php echo $row['product_discount_price'] ?>/-</div>

                          <div class="mx-2 my-2" style="    font-size: 23px;
      font-family: cursive;">Total Price :&nbsp; <?php echo $row['total_product_price'] ?>/- </div>
                          <div class="mx-2 my-2" style="font-size: 17px;
      font-family: auto;">Mode Of Payment : &nbsp; &nbsp; <?php echo $row['product_payment'] ?></div>

<?php 

if($row['status']=='Pending'){

    echo ' <div class="text-center my-4 border" style="font-size: 27px; background-color:orange; border-radius:25px;
    font-family: auto;"><b><i>'.$row['status'].'</i></b></div>';

}

else if($row['status']=='On a Way'){

    echo ' <div class="text-center my-4 border" style="font-size: 27px; background-color:blue; border-radius:25px;
    font-family: auto;"><b><i>'.$row['status'].'</i></b></div>';

}

else if($row['status']=='Delivered'){

    echo ' <div class="text-center my-4 border" style="font-size: 27px; background-color:green; border-radius:25px;
    font-family: auto;"><b><i>'.$row['status'].'</i></b></div>';

    
    ?>
 <form action="rating_pro.php?pro_id=<?php echo $row['product_id'];?>" method="post">
<div class="input-group mb-3">
   
<select name="rating" id="">
<option value="" selected>--Rating Of Food--</option>
<option value="1">1</option>
<option value="1.5">1.5</option>
<option value="2">2</option>
<option value="2.5">2.5</option>
<option value="3">3</option>
<option value="3.5">3.5</option>
<option value="4">4</option>
<option value="4.5">4.5</option>
<option value="5">5</option>

</select>
<input type="hidden" name="order" value=<?php echo $row['order_id'] ?>>
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Button</button>
  </div>
 
</div>
</form>


<?php





}

else if($row['status']=='Cancel'){

    echo ' <div class="text-center my-4 border" style="font-size: 27px; background-color:red; border-radius:25px;
    font-family: auto;"><b><i>'.$row['status'].'</i></b></div>';

}



?>
                         



                      </div>

                  </div>

              </div>

          </div>
      </div>
      </div>



<?php 

}

}
else{
?>
<div class="container">
<div class="shadow-sm" style="margin-top:400px;">


<div class="text-center" style="font-size: 20px;">You Have Not Order Any Thing Yet</div>



</div>



</div>

    <?php
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