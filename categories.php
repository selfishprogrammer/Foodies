<ul id="myMenu" class="shadow-sm bg-white " style="border-radius:20px;">

<li><a class="text-center" href="food_category_wise.php?category_id=full_details">All</a></li>
<?php 
include 'connection.php';
$sql="select * from `categories_of_dish`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo '<li><a class="text-center" href="food_category_wise.php?category_id='.$row['categories_id'].'">'.$row['categories_name'].'</a></li>';

}

?>
                        
                  
</ul>
