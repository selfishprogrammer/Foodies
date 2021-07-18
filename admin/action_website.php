<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Website Setting</title>
</head>

<body>


    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="shadow-sm" style="width: 100%; margin-top: 200px;">


                <div class="text-center m-4" style="    font-size: 28px;
    font-family: monospace;">WEBSITE SETTING</div>
                <hr>
                <div class="text-center m-4" style="font-size: 23px;
    font-family: none;
    color: blue;">CURRENTLY WEBSITE STATUS ( Open Or Close )</div>
                <div class="d-flex justify-content-center">

                    <?php 
include '../connection.php';
    $sql="select * from `action_website`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){

   
     ?>
                    <div class="text-center m-4" style="    font-size: 20px;
    background: blanchedalmond;">Status : <?php echo $row['action'] ?></div>

                </div>
                <?php } ?>
                <form action="<?php $_SERVER['REQUEST_URI'] ?>" method="post">
                    <div class="d-flex justify-content-between">

                        <button type="submit" name="open" class="btn btn-success form-control mx-2 mb-3">OPEN</button>
                        <button type="submit" name="close" class="btn btn-danger form-control mx-2 mb-3">CLOSE</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php

if(isset($_POST['open'])){
$on="OPEN";
    $sql="update `action_website` set `action`='$on'";
    $result=mysqli_query($conn,$sql);
    header("location:action_website.php");

}

else if(isset($_POST['close'])){
    $off="CLOSE";
    $sql1="update `action_website` set `action`='$off'";
        $result1=mysqli_query($conn,$sql1);
        header("location:action_website.php");
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