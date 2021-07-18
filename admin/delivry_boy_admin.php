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
        <div class="shadow-sm mt-0 text-center" style="height: 50px; font-size:20;"><b>DELIVRY BOY
                PANEL</b> </div>


        <div class="col-md-6 offset-md-3">

            <div class="shadow-sm border my-4">

                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data" class="m-3">

                    <div class="form-group">
                        <input type="text" name="d_name" class="form-control" placeholder="Delivery Boy Name" id="">


                    </div>

                    <div class="form-group">

                        <input type="number" name="d_age" class="form-control" placeholder="Delivery Boy Age" id="">


                    </div>
                    <div class="form-group">
                        <input type="email" name="d_email" class="form-control" placeholder="Delivery Boy Email" id="">


                    </div>
                    <div class="form-group">
                        <input type="number" name="d_phone" class="form-control" placeholder="Delivery Boy Phone" id="">


                    </div>
                    <div class="form-group">
                        <textarea name="d_desp" id="" placeholder="Delivery Boy Description"
                            style="height: 250px; width:100%;"></textarea>


                    </div>

                    <div class="form-group">
                        <label for="">Delivery Boy Image</label>
                        <input type="file" name="d_img" class="form-control" placeholder="Delivery Boy Image" id="">

                    </div>
                    <div class="form-group my-4">
                        <button type="submit" class="form-control " id="button_color">ADD DELIVERY</button>


                    </div>

                </form>

            </div>


        </div>











    </div>


    <!-- PHP Code -->

    <?php 
include '../connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){


    $d_name=$_POST['d_name'];
    $d_email=$_POST['d_email'];
    $d_age=$_POST['d_age'];
    $d_phone=$_POST['d_phone'];
    $d_desp=$_POST['d_desp'];


    $d_img=$_FILES['d_img']['name'];
    $d_img_tmp=$_FILES['d_img']['tmp_name'];

    $dist='../Delivery Boy/'.$d_img;
    move_uploaded_file($d_img_tmp,$dist);
$sql="insert into `delivery_boy`(`delivry_boy_name`,`delivry_boy_age`,`delivry_boy_email`,`delivry_boy_phone`,`delivry_boy_desp`,`delivry_boy_migratio_image`) values ('$d_name','$d_age','$d_email','$d_phone','$d_desp','$d_img')";
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


    <!-- PHP Code -->





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