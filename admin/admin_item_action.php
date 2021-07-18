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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Admin</title>
</head>

<body>
    <div class="container-fluid">
        <div class="shadow-sm mt-0 text-center" style="height: 80px; font-size:20;"><b>ITEM VIEW
                PANEL</b> 
                <a href="admin_home.php"><button type="submit" class="form-control ml-4" id="button_color" style="width: 18rem;">Back To Home</button></a>
            </div>


        <div class="container">

            <div class="shadow-sm border my-4" style="overflow-x: auto;">
                <table class="table  border" >
                    <thead>
                        <tr style="background-color:cyan;">
                            <th >Product Id</th>
                            <th>Product Name</th>
                            <th>Product Categories</th>
                            <th>Product Full Plate Price</th>
                            <th>Product Half Plate Price</th>
                            <th>Product Discount</th>
                            <th>Product Added Date</th>
                            <th>Product Image</th>
                            <th>Product Image</th>
                            <th>Product Image</th>
                            <th>Product Image</th>
                            <th>Product Action</th>
                            <th>Product Edit</th>
                            <th>Product Delete</th>
                            <th>Product Activate</th>
                            <th>Product Deactivate</th>
                         
                        </tr>


                    </thead>


                    <tbody>

                        <?php

$sql="select * from `product_list`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $date=date_create($row['date_of_insert']);
   $date_add= date_format($date,"y-m-d");
    echo '    <tr>
    <td>'.$row['product_id'].'</td>
    <td>'.$row['product_name'].'</td>
    <td>'.$row['product_categories'].'</td>
    <td>'.$row['product_full_price'].'</td>
    <td>'.$row['product_half_price'].'</td>
    <td>'.$row['product_discount'].'</td>
    <td>'.$date_add.'</td>
    <td><a href="../Product Image/'.$row['product_image1'].'"><img src="../Product Image/'.$row['product_image1'].'" width="40" height="" alt=""></a></td>
    <td><a href="../Product Image/'.$row['product_image2'].'"><img src="../Product Image/'.$row['product_image2'].'" width="40" height="" alt=""></a></td>
    <td><a href="../Product Image/'.$row['product_image3'].'"><img src="../Product Image/'.$row['product_image3'].'" width="40" height="" alt=""></a></td>
    <td><a href="../Product Image/'.$row['product_image4'].'"><img src="../Product Image/'.$row['product_image4'].'" width="40" height="" alt=""></a></td>
    <td>'.$row['action'].'</td>
    <td><a href="update_action_item.php?update_id='.$row['product_id'].'"><button type="button" style="width:5rem; " class="form- control btn btn-secondary" >Edit</button></a></td>
    <td><a href="delete_action_item.php?delete_id='.$row['product_id'].'"><button type="button" style="width:5rem; " class="form-control btn btn-warning" >Delete</button></a></td>
    <td><a href="item_action_func.php?activate_id='.$row['product_id'].'"><button type="button" style="width:5rem; " class="form-control btn btn-success" >Active</button></a></td>
    <td><a href="item_action_func.php?deactivate_id='.$row['product_id'].'"><button type="button" style="width:5rem; " class="form-control btn btn-danger" >Deactive</button></a></td>
   
    </tr>';

}














?>



                    </tbody>


                </table>

              

            </div>


        </div>



    </div>
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