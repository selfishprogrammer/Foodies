<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&family=Lato:wght@900&display=swap"
        rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <style>
    body {
        background-image: url('image/login_back1.jpg');

         background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;   }
    </style>
    <div class="container">

        <div class="col-md-6 offset-md-3">

            <div class="card" style="margin-top: 150px; background-color:#76ffff; border-radius:20px;">
                <div class="shadow">
                    <div class="card-header">


                        <?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $password=$_POST['password'];
    $email=$_POST['email'];

$sql="select * from `users` where `email`='$email' and `password` ='$password'";
$result=mysqli_query($conn,$sql);
$nums=mysqli_num_rows($result);
if($nums==1){
    $row=mysqli_fetch_assoc($result);

    session_start();

    $_SESSION['loggedin']=true;
    $_SESSION['slno']=$row['slno'];
    $_SESSION['name']=$row['name'];
    $_SESSION['phone']=$row['phone'];
    $_SESSION['user']=$row['user'];
    $_SESSION['email']=$row['email'];
    if(isset($_POST['rememberme'])){
setcookie("email_me",$email,time()+855555555);
setcookie("password_me",$password,time()+855555555);

    

    
    

    if($row['user']=='admin'){
        header("location:admin/admin_home.php");
    }
    else if($row['user']=='delivery'){
        header("location:delivery_boy/delivery_boy_home.php");
    }
    else{
    header("location:index.php");
    }

}

else{

    if($row['user']=='admin'){
        header("location:admin/admin_home.php");
    }
    else if($row['user']=='delivery'){
        header("location:delivery_boy/delivery_boy_home.php");
    }
    else{
    header("location:index.php");
    }
    
}





}


else{
    echo '<div class="alert alert-danger" role="alert">
    Login Failed ! Check Email and Password.
  </div>';
}


}



?>










                        <div class="d-flex justify-content-start">
                            <img src="image/lock.png" height="60" width="60" class="mx-3" alt="">
                            <h2 style="font-family: 'Comfortaa', cursive;" class="mt-3">Login</h2>
                        </div>

                    </div>

                    <div class="card-body" style="background-color: white;">
                        <form action="" class="mt-4 mx-4" method="post">
                            <div class="form-group">

                                <input type="email"
                                    value="  <?php if(isset($_COOKIE['email_me'])){ echo $_COOKIE['email_me']; } ?>"
                                    id="form_email" name="email" placeholder="Email" class="form-control" id="">

                            </div>
                            <div class="form-group">

                                <input type="password" name="password"
                                    value="<?php if(isset($_COOKIE['password_me'])){ echo $_COOKIE['password_me']; } ?>"
                                    id="form_email" placeholder="Password" class="form-control" id="">

                            </div>
                            <div class="form-group">

                                <input type="checkbox" name="rememberme" class="mx-1"> Remember Me

                            </div>

                            <div class="form-group">
                                <div class="d-flex justify-content-center">

                                    <button type="submit" id="btn_design_submit"
                                        class="btn btn-outline-success mx-2 mt-4">Login</button>
                                    <button type="reset" id="btn_design"
                                        class="btn btn-outline-danger mx-2 mt-4">Reset</button>
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="card-footer">
                        <div class="d-flex justify-content-between">

                            <a href="register_user.php"><button type="button" id="btn_design_submit"
                                    class="btn btn-outline-info mx-3">Register</button></a>
                            <a href="forgot_password.php" class="nav-link">Forgot Password?</a>

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