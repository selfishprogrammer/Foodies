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
        <div class="shadow-sm mt-0 text-center" style="height: 50px; font-size:20;"><b>ITEM
                PANEL</b> </div>

        <div class="col-md-6 offset-md-3">
            <div class="card-body border my-4">




















                <?php 
$update_id=$_GET['update_id'];
$sql="select * from `product_list` where `product_id`='$update_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){



?>


                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data" class="m-2">
                    <div class="form-group">
                        <input type="text" name="pro_name" value="<?php echo $row['product_name'] ;?>"
                            placeholder="Product Name" class="form-control" id="">

                    </div>

                    <div class="form-group">
                        <input type="number" name="pro_price_full" value="<?php echo $row['product_full_price'] ;?>"
                            placeholder="Product Price Full" class="form-control" id="">

                    </div>

                    <div class="form-group">
                        <input type="number" name="pro_price_half" value="<?php echo $row['product_half_price']; ?>"
                            placeholder="Product Price Half" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="text" name="pro_discount" value="<?php echo $row['product_discount']; ?>"
                            placeholder="Product Discount" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <select name="pro_categories" id="" class="form-control"  >
                            <option value="">--Select Product Category--</option>



                            <?php 
include '../connection.php';
$sql1="select * from `categories_of_dish` ";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result1)){
echo '<option value="'.$row['categories_id'].'" selected>'.$row['categories_name'].'</option>';
}

?>

                            <!-- Php -->




                        </select>

                    </div>

                    <div class="form-group">
                        <button type="submit" class=" form-control button_color">UPDATE PRODUCT</button>

                    </div>
                </form>

                <?php } ?>










            </div>
        </div>










    </div>


    <!-- PHP -->

    <?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $pro_name=$_POST['pro_name'];
    $pro_categories=$_POST['pro_categories'];
    $pro_price_full=$_POST['pro_price_full'];
    $pro_price_half=$_POST['pro_price_half'];
    $pro_discount=$_POST['pro_discount'];


    


    $sql="update `product_list` set  `product_name`='$pro_name',`product_categories`='$pro_categories',`product_full_price`='$pro_price_full',`product_half_price`='$pro_price_half',`product_discount`='$pro_discount' where `product_id`='$update_id'";
   $result=mysqli_query($conn,$sql);
   if($result){

    header("location:admin_item_action.php");
   }
   else{
    echo  '<div class="alert alert-danger" role="alert">
    Something Went Wrong!
    </div>';
   }
}




?>






    <!-- PHP -->



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