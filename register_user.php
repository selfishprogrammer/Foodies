<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>New User</title>
</head>

<body>
    <style>
    body {
        background-image: url('image/login_back3.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
    </style>

    <div class="container">

        <div class="col-md-6 offset-md-3">

            <div class="card" style="margin-top: 100px; background-color:#76ffff; border-radius:20px;">
                <div class="shadow">
                    <div class="card-header">







                    <?php 
include 'connection.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $walet_money=30;
$sql1="select * from `users` where `email`='$email' and `phone`='$phone'";
$result1=mysqli_query($conn,$sql1);
$nums=mysqli_num_rows($result1);
if($nums==1){
    echo '<div class="alert alert-danger" role="alert">
    Email or Phone Already Exists!
  </div>';

   

}
else{

    if($password == $cpassword){

        $sql="insert into `users` (`name`,`email`,`phone`,`password`,`cpassword`) values ('$name','$email','$phone','$password','$cpassword')";
        $result=mysqli_query($conn ,$sql);
        if ($result) {
            $sql1="insert into `wallet` (`rs`) values ('$walet_money')";
            $result1=mysqli_query($conn,$sql1);
            echo '<div class="alert alert-success" role="alert">
            You Have Successfully registered !
          </div>';

        
          header("location:login_user.php");
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

}







?>










                        <div class="d-flex justify-content-start">
                            <img src="image/lock.png" height="60" width="60" class="mx-3" alt="">
                            <h2 style="font-family: 'Comfortaa', cursive;" class="mt-3">SignUp/Register</h2>
                        </div>

                    </div>

                    <div class="card-body" style="background-color: white;">
                        <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" class="mt-4 mx-4" method="post">
                            <div class="form-group">

                                <input type="text" id="form_email" name="name" placeholder="Full Name"
                                    class="form-control" id="">

                            </div>
                            <div class="form-group">

                                <input type="email" id="form_email" name="email" placeholder="Email"
                                    class="form-control" id="">

                            </div>
                            <div class="form-group">

                                <input type="number" id="form_email" name="phone" placeholder="Phone"
                                    class="form-control" id="">

                            </div>
                            <div class="form-group">

                                <input type="text" name="password" id="form_email" placeholder="Password"
                                    class="form-control" id="">

                            </div>

                            <div class="form-group">

                                <input type="password" id="form_email" name="cpassword" placeholder="Conform Password"
                                    class="form-control" id="">

                            </div>


                            <div class="form-group">
                                <div class="d-flex justify-content-center">

                                    <button type="submit" id="btn_design_submit"
                                        class="btn btn-outline-success mx-2 mt-4">Register</button>
                                    <button type="reset" id="btn_design"
                                        class="btn btn-outline-danger mx-2 mt-4">Reset</button>
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-between">

                            <a href="login_user.php"><button type="button" id="btn_design_submit"
                                    class="btn btn-outline-info mx-3">Alrady A User</button></a>


                        </div>

                    </div>
                </div>

            </div>


        </div>





    </div>





  




    <style>
    #form_email {
        border-radius: 40px;
    }

    #btn_design {
        border-radius: 25px;
        width: 8rem;

    }

    #btn_design_submit {
        border-radius: 25px;
        width: 8rem;
    }
    </style>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>