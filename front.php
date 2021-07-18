<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Animated</title>

    <style>
    * {
        margin: 0px;
        padding: 0px;
    }

    .animate {



        height: 100vh;


        background-image: url(image/realbg.png);
        background-repeat: repeat-x;


        position: relative;
        animation: frontpage 1s linear infinite;
        background-position: bottom left;


    }

    .first_boy {
        position: absolute;
        left: 15px;
        bottom: 141px;

    }

    .second_boy {
        position: absolute;
        left: 195px;
        bottom: 145px;

    }

    @keyframes frontpage {

        from {

            background-position: bottom left;

        }

        to {

            background-position: bottom right;

        }


    }
    </style>
</head>

<body>
    <div class="animate">
        <div style="font-size:37px; font-family:cursive;" class="text-center my-4">FOODIES</div>

       <hr> <div style="    font-size: 25px;
    font-family: monospace;
    color: lightcoral;
    font-style: italic;" class="text-center my-4">Book Your Favriote Food At Your Door Step From Us , In Buduget Cost
            And In Less Time.</div><hr>
<div class="d-flex justify-content-center">
            <a href="food_category_wise.php?category_id=full_details"><button type="button" class="form-control btn btn bg-light mt-5" style="width:18rem ; border-radius:20px;">Start Booking</button></a>
            </div>
        <img src="image/deli.png" class="second_boy" width="100" alt="">

        <img src="image/dilevry.png" class="first_boy" width="80" alt="">



    </div>
    
</body>

</html>