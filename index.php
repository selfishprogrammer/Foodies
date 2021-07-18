<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Foodies</title>
</head>

<?php include 'nav.php'; ?>

<body>

    <div class="conta_id">

<!-- Alternative main_image.php -->
        <?php include 'front.php'; ?>





    </div>
    <hr>






    <div style="    font-size: 33px;
    margin-left: 10px;
    font-family: cursive;
    color: grey;">OUR ITEMS</div>
    <hr>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">


                <button type="button" id="conta" class="shadow-sm form-control my-1 sticky"
                    style="border-radius: 20px;">Categories</button>

                <div class="toggle " style="display: none;">

                    <?php include 'categories.php' ?>


                </div>
            </div>

            <div class="col-md-7 my-2">
                <div class="text-center" style="    font-size: 30px;
    font-family: cursive;
    color: grey;">EXITING OFFERS</div>
                <div class="row" style="overflow-x: auto;">


                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#" class="nav-link" style="color: black;">
                                    <div class="shadow-sm  my-3"
                                        style="width: 80%;overflow: hidden;     margin-left: 34px; border-radius:20px; ">
                                        <img src="image/item.png" width="100%" height="150px" alt="" id="image"
                                            class="card-img">

                                        <div class="d-flex justify-content-center m-4">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis deleniti
                                            alias
                                            asperiores voluptatibus, quibusdam consequuntur quasi accusamus debitis modi
                                            beatae
                                            culpa ducimus iusto tempore deserunt esse, minus accusantium doloribus odit?
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>















                </div>


            </div>




        </div>

    </div>


    <div class="main_class1 mt-5">
        <?php include 'middle_sec.php' ?>

    </div>




    <style>
    #image {

        height: 400;

        transition: all 3s linear;
    }

    #image:hover {
        transform: scale(1.3);
    }
    </style>






    <script src="http://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>




    <script>
    $(function() {


        console.log("Ajax")
        $('#conta').click(function() {
            $('.toggle').slideToggle("slow")
        });
    });
    </script>



    <?php include 'footer.php' ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
</body>

</html>