<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <!-- JS Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Taste of Europe</title>
</head>

<body>
    <?php
    include ('header.html');
    ?>
    <nav class="nav justify-content-center bg-light p-2">
        <a class="nav-link link-dark active mx-2" href="#">Home</a>
        <a class="nav-link link-dark mx-2" href="programme_ang.html">Program</a>
        <a class="nav-link link-dark mx-2" href="#"><img class="img-fluid" src="images/logov1.svg"></a>
        <a class="nav-link link-dark mx-2" href="tickets_ang.php">Tickets</a>
        <a class="nav-link link-dark mx-2" href="connection.php">Administration</a>
        <a class="nav-link link-dark mx-2" href="index.html"><img class="icone_fr" src="images/fr.png"></a>
    </nav>

    <div class="container text-center mt-5 position-relative">
        <img class="img-fluid" src="images/banniere.jpg">
        <a href="#" class="btn btn-dark rounded-pill mt-3">I'm registering !</a>
    </div>

    <div class="bandeaubleu mt-5 mb-5 text-white">Slogan</div>

    <h1 class="d-flex justify-content-center mb-5">Taste of Europe, what's this ?</h1>
    <div class="container">
        <div class="row">
            <div class="border offset-md-2 col-md-4">
                <img class="img-fluid" src="images/food1.jpg">
            </div>
            <div class="border col-md-4">

                <p class="text-center">Treat your taste buds</p>
                <p class="text-justify">Taste of Europe is a festival gathering a great number of European countries wich the aim is to discover the different
                    cultures of the neighbouring countries of France and beyond. 
                    From the 18th to the 20th, discover Puy en Velay under its gourmet airs, for a festival gathering more than 10 European countries to make you 
                    discover a whole panel of unusual flavours! It is in a relaxed festive atmosphere that you will stroll in the streets of the city to discover 
                    stands, activities and various animation for adults and children.
                </p><br>
                <div class="text-center">
                    <a href="#" class="btn btn-dark rounded-pill">Register</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bandeauorange mt-5 mb-5"></div>

    <h1 class="d-flex justify-content-center">Culinary specialties</h1>
    <p class="text-justify">Each country has its specialty, and the most emblematic will be part of this weekend. 
        Discover Bulgaria, Denmark, Cyprus, Finland or a dozen countries and their most traditional dishes. 
        And possibly rediscover the France and its tasty and refined pleasures.</p>
    <div class="container">
        <div class="row mt-5">
            <div class="offset-md-1 col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>
        </div>

        <div class="row mt-4">
            <div class="offset-md-1 col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>

            <div class="col-md-2">
                <img class="img-fluid" src="images/food1.jpg">
            </div>
        </div>
    </div>

    <div class="bandeaujaune mt-5 mb-5"></div>

    <h1 class="d-flex justify-content-center">Location of the event</h1>
    <p class="text-justify">Le Puy en Velay, famous starting point of Saint Jacque de Compostelle, capital of lentils and verbena is the ideal place to share 
        these moments with its cobbled streets and old buildings.</p>
    <div class="d-flex justify-content-center mt-5 mb-1">
        <div id="map"></div>
    </div>
    <p class="text-center fst-italic mb-5">Place du Martouret - 43000, Le Puy-en-Velay</p>

    <footer class="p-4 bg-dark text-white text-center">
        Designed by the MMI2 du Puy-en-Velay, year 2022-2023
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="script.js"></script>
</body>

</html>
