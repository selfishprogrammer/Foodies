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
        <div class="shadow-sm mt-0 text-center" style="height: 50px; font-size:20;"><b>IMAGE
                PANEL</b> </div>

        <div class="col-md-6 offset-md-3">
            <div class="card-body border my-4">























                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data" class="m-2">
                    
          
                    <div class="form-group">
                        <input type="file" name="pro_image1" placeholder="Product Image" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="file" name="pro_image2" placeholder="Product Image" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="file" name="pro_image3" placeholder="Product Image" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="file" name="pro_image4" placeholder="Product Image" class="form-control" id="">

                    </div>

                    <div class="form-group">
                        <button type="submit" class=" form-control button_color">ADD IMAGE</button>

                    </div>
                </form>










            </div>
        </div>










    </div>


<!-- PHP -->

<?php 
if($_SERVER['REQUEST_METHOD'] == 'POST'){


    $image1=$_FILES['pro_image1']['name'];
    $image2=$_FILES['pro_image2']['name'];
    $image3=$_FILES['pro_image3']['name'];
    $image4=$_FILES['pro_image4']['name'];

    $image1_tmp=$_FILES['pro_image1']['tmp_name'];
    $image2_tmp=$_FILES['pro_image2']['tmp_name'];
    $image3_tmp=$_FILES['pro_image3']['tmp_name'];
    $image4_tmp=$_FILES['pro_image4']['tmp_name'];

    $dist='../Index Image/'.$image1;
    move_uploaded_file($image1_tmp,$dist);

    $dist1='../Index Image/'.$image2;
    move_uploaded_file($image2_tmp,$dist1);


    $dist2='../Index Image/'.$image3;
    move_uploaded_file($image3_tmp,$dist2);


    $dist3='../Index Image/'.$image4;
    move_uploaded_file($image4_tmp,$dist3);


    $sql="insert into `index_image` (`product_image1`,`product_image2`,`product_image3`,`product_image4`) values ('$image1','$image2','$image3','$image4')";
   $result=mysqli_query($conn,$sql);
   if($result){

    header("location:admin_home.php");
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