<?php 
                                                include 'connection.php';
                                                session_start();
                                                if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){

                                                $user_id=$_SESSION['slno'];

                                                $id=$_GET['id'];
                                                echo $id;

                                                $id1=$_POST['id1'];
                                                        
                                                echo $id1;

                                                    $sql="select * from `product_list` where `product_id`='$id'";
                                                    $result=mysqli_query($conn,$sql);
                                                    $nums=mysqli_num_rows($result);
                                                    if($nums ==1){
                                                    while($row=mysqli_fetch_assoc($result)){

                                                                $pro_name=$row['product_name'];
                                                                $pro_img=$row['product_image1'];
                                                                $pro_price=$row['product_full_price'];
                                                                $discount=$row['product_discount'];



                                                                // With off//
                                                $total_price1=($pro_price*$id1*$discount)/100;
                                                $total_price=($pro_price*$id1)-$total_price1;
                                                $total_discount_price=$pro_price*$id1;




                                                // Without off//
                                                $total_price_without_off=$pro_price*$id1;
                                                
                                                $sql2="select * from `cart_details` where `product_id`='$id'";
                                                $result2=mysqli_query($conn,$sql2);
                                                $nums=mysqli_num_rows($result2);
                                                if($nums > 0){
                                                    if($row['product_discount']==NULL){
                                                $sql3="update `cart_details` set `user_id`='$user_id' ,`product_id`='$id',`product_name`='$pro_name',`product_image`='$pro_img',`product_price`='$pro_price',`product_quantity`='$id1',`total_price`='$total_discount_price',`product_discount`='null',`product_discount_price`='00',`product_total_price`='$total_price_without_off',`action`=0 where `product_id`='$id'";
                                                $result=mysqli_query($conn,$sql3);
                                                header("location:cart_view.php");
                                               

                                                    }
                                                    else{
                                                        $sql3="update `cart_details` set `user_id`='$user_id' ,`product_id`='$id',`product_name`='$pro_name',`product_image`='$pro_img',`product_price`='$pro_price',`product_quantity`='$id1',`total_price`='$total_discount_price',`product_discount`='$discount',`product_discount_price`='$total_price1',`product_total_price`='$total_price' , `action`=0 where `product_id`='$id'";
                                                $result=mysqli_query($conn,$sql3);
                                                header("location:cart_view.php");
                                               

                                                    }
                                                }
                                                    else{                
                                                if($row['product_discount']==NULL){


                                                
                                                    $sql1="insert into `cart_details` (`user_id`,`product_id`,`product_name`,`product_image`,`product_price`,`product_quantity`,`total_price`,`product_discount`,`product_discount_price`,`product_total_price`,`action`) values ('$user_id','$id','$pro_name','$pro_img','$pro_price','$id1','$total_discount_price','null','00','$total_price_without_off',0)";
                                                    $result1=mysqli_query($conn,$sql1);
                                                    header("location:cart_view.php");
                                                }

                                                else{


                                                                $sql1="insert into `cart_details` (`user_id`,`product_id`,`product_name`,`product_image`,`product_price`,`product_quantity`,`total_price`,`product_discount`,`product_discount_price`,`product_total_price`,`action`) values ('$user_id','$id','$pro_name','$pro_img','$pro_price','$id1','$total_discount_price','$discount','$total_price1','$total_price',0)";
                                                                $result1=mysqli_query($conn,$sql1);
                                                                header("location:cart_view.php");

                                                }
                                                    }

                                                }
                                            }
                                                }

?>