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
        <div class="shadow-sm mt-0 text-center" style="height: 50px; font-size:20;"><b>USERS
                PANEL</b> </div>


        <div class="col-md-6 offset-md-3">
            <?php 
include '../connection.php';
$update_id=$_GET['update_id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
  
    


    if($password == $cpassword){

        $sql="update `users` set  `name`='$name',`email`='$email',`phone`='$phone',`password`='$password',`cpassword`='$cpassword' where `slno`='$update_id'";
        $result=mysqli_query($conn ,$sql);
        if ($result) {
            echo '<div class="alert alert-success" role="alert">
            Your Request Is Updated !
          </div>';

          header("location:admin_home.php");
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Somethings Went Wrong ! Please Check.
          </div>';
        }
        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Password Did Not Matched ! Please Check.
          </div>';
        }
}









?>

<?php 
$update_id=$_GET['update_id'];
$sql1="select * from `users` where `slno`='$update_id'";
$result1=mysqli_query($conn,$sql1);
while($row=mysqli_fetch_assoc($result1)){
?>


            <div class="shadow-sm border my-4">

                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post" class="m-3">

                    <div class="form-group">
                        <input type="text" name="name" value="<?php echo $row['name'] ?>" class="form-control" placeholder=" Name" id="">


                    </div>


                    <div class="form-group">
                        <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control" placeholder=" Email" id="">


                    </div>
                    <div class="form-group">
                        <input type="number" name="phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder=" Phone" id="">


                    </div>
                    <div class="form-group">

                        <input type="text" name="password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Password" id="">

                    </div>

                    <div class="form-group">

                        <input type="password" name="cpassword" value="<?php echo $row['cpassword'] ?>" class="form-control" placeholder=" Comform Password"
                            id="">

                    </div>

                    
                    <div class="form-group my-4">
                        <button type="submit" class="form-control " id="button_color">UPDATE USER</button>


                    </div>

                </form>

            </div>
            <?php
        }



        ?>

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