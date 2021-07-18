<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php 
session_start();
include 'connection.php';
?>

<nav class="navbar navbar-expand-lg navbar-light shadow bg-white sticky-top">
   
        <a class="navbar-brand" href="index.php"><i><b>Foodies</b></i></a>
        <?php 
if(isset($_SESSION['loggedin'])  && $_SESSION['loggedin']==true){
    $user_id=$_SESSION['slno'];
    $sql="select * from `cart_details` where `user_id`='$user_id'";
        $result =mysqli_query($conn,$sql);
        $nums=mysqli_num_rows($result);
    echo '
    <li class="nav-item " style="list-style-type:none;">
    <a class="btn btn-secondary" href="cart_view.php">
      <i class="fa fa-shopping-cart"></i> '.$nums.'</a>
    </li>
    ';
}
else{
   echo ' <li class="nav-item " style="list-style-type:none;">
  <a class="btn btn-secondary" href="cart_view.php">
    <i class="fa fa-shopping-cart"></i></a>
  </li>';
}
?>
        <!-- <form class="form-inline">
            <input class="form-control mx-3" type="search" placeholder="Search" aria-label="Search">
        </form> -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon ml-auto"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
                <ul class="navbar-nav mr-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link" style="font-size: 15px; font-family:cursive;" href="about.php"><b> About Us</b></a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION['loggedin'])  && $_SESSION['loggedin']==true){

$user_id=$_SESSION['slno'];
$sql1="select * from `wallet` where `slno`='$user_id'";
$result1=mysqli_query($conn,$sql1);
$nums=mysqli_num_rows($result1);
if($nums==1){

  $row1=mysqli_fetch_assoc($result1);

echo '
<li class="nav-item">
<a class="nav-link" href="#"><button class="btn btn "><i class="fa fa-sign-out" aria-hidden="true" ></i>
Wallet &nbsp; '.$row1['rs'].'/-</button>  </a>
</li>';
}

echo ' 

<li class="nav-item">
<a class="nav-link" href="order_history.php"><button class="btn btn-warning "><i class="fa fa-sign-out" aria-hidden="true"></i>
Order History</button>  </a>
</li>

<li class="nav-item">
<a class="nav-link" href="logout.php"><button class="btn btn-danger "><i class="fa fa-sign-out" aria-hidden="true"></i>
Logout</button>  </a>
</li>
<li class="nav-item">
<button class="btn btn-danger  my-2" href="logout.php" disabled><i class="fa fa-user" aria-hidden="true"></i>
'.$_SESSION['name'].'</button> 
</li>

';

    } 
    
    else{
      echo ' <li class="nav-item">
      <a class="nav-link" href="register_user.php"><button class="btn btn-danger"><i class="fa fa-user" aria-hidden="true"></i>
      Register</button>  </a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="login_user.php"><button class="btn btn-danger"><i class="fa fa-sign-in" aria-hidden="true"></i>
      Login</button>  </a>
      </li>
  
 ';
    }
    ?>



                </ul>
           
    
    </div>
</nav>