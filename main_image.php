<?php 
                                            include 'connection.php';
                                            $sql="select * from `index_image`";
                                            $result=mysqli_query($conn,$sql);

                                            while($row=mysqli_fetch_assoc($result)){






                                        ?>



        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Index Image/<?php echo $row['product_image1'] ?>" class="d-block w-100" alt="...">
                    <div class="carousel-caption" style="    color:  floralwhite;
                                                font-size: 18px;
                                                font-family: ui-serif;">
                        <h5>FOODIES</h5>
                        <p>THE FIRST AND FUN FOOD ORDERING WEBSITE</p>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Index Image/<?php echo $row['product_image2'] ?>" height="550px" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption" style="    color:  floralwhite;
                                                font-size: 18px;
                                                font-family: ui-serif;">
                        <h5>FOODIES</h5>
                        <p>THE FIRST AND FUN FOOD ORDERING WEBSITE</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Index Image/<?php echo $row['product_image3'] ?>" height="550px" class="d-block w-100"
                        alt="...">
                    <div class="carousel-caption" style="    color:  floralwhite;
                                                font-size: 18px;
                                                font-family: ui-serif;">
                        <h5>FOODIES</h5>
                        <p>THE FIRST AND FUN FOOD ORDERING WEBSITE</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <?php }?>
