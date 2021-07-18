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
        <div class="shadow-sm mt-0 text-center" style="height: 80px; font-size:20;"><b>DELIVERY BOY VIEW
                PANEL</b> 
                <a href="admin_home.php"><button type="submit" class="form-control ml-4" id="button_color" style="width: 18rem;">Back To Home</button></a>
            </div>


        <div class="container">

            <div class="shadow-sm border my-4" style="overflow-x: auto;">
                <table class="table  border" style="width: 100%;" >
                    <thead>
                        <tr style="background-color:cyan;">
                            <th >Delivery Boy Id</th>
                            <th>Delivery Boy Name</th>
                            <th>Delivery Boy Age</th>
                            <th>Delivery Boy Email</th>
                            <th>Delivery Boy Phone</th>
                            <th style="width: 40%;">Delivery Boy Description</th>
                            <th>Delivery Boy Added Time</th>
                            <th>Categories Edit</th>
                            <th>Categories Delete</th>
                        </tr>


                    </thead>


                    <tbody>

                        <?php

$sql="select * from `delivery_boy`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    $date=date_create($row['delivry_boy_add_time']);
   $date_add= date_format($date,"y-m-d");
    echo '    <tr>
    <td>'.$row['delivry_boy_slno'].'</td>
    <td>'.$row['delivry_boy_name'].'</td>
    <td>'.$row['delivry_boy_age'].'</td>
    <td>'.$row['delivry_boy_email'].'</td>
    <td>'.$row['delivry_boy_phone'].'</td>
    <td style="width: 40%;">'.$row['delivry_boy_desp'].'</td>
    <td>'.$date_add.'</td>
    <td><a href="update_action_delivery_boy.php?update_id='.$row['delivry_boy_slno'].'"><button type="button" style="width:5rem; border-radius:20px;" class="form- control btn btn-info" >Edit</button></a></td>
    <td><a href="delete_action_delivery_boy.php?delete_id='.$row['delivry_boy_slno'].'"><button type="button" style="width:5rem; border-radius:20px;" class="form-control btn btn-info" >Delete</button></a></td>
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