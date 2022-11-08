<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
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
    <!-- CSS FontAwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- CSS Flags Lib -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <title>Taste of Europe</title>
</head>

<body>
    <?php
    include ('header_ang.html');
    ?>

    <div class="container text-center mt-5 position-relative">
        <img class="img-fluid" id="rounded" src="images/banniere.png">
        <a href="#" class="btn mt-3">Register</a>
    </div>

    <div class="bandeaubleu mt-5 mb-5 text-white d-flex align-items-center"><h5>The flavors of Europe in one place!</h5></div>

    <h1 class="d-flex justify-content-center mb-5">What is Taste of Europe?</h1>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-4">
                <img class="img-fluid" id="rounded" src="images/le-poivrier.jpg">
            </div>
            <div class="col-md-4">

                <p class="text-center"><h5>Treat your taste buds</h5></p>
                <p class="text-justify">Taste of Europe is a festival gathering a great number of European countries wich the aim is to discover the different
                    cultures of the neighbouring countries of France and beyond. 
                    From the 28th to the 30th, discover Puy en Velay under its gourmet airs, for a festival gathering more than 10 European countries to make you 
                    discover a whole panel of unusual flavours! It is in a relaxed festive atmosphere that you will stroll in the streets of the city to discover 
                    stands, activities and various animation for adults and children.
                </p><br>
                <div class="text-center">
                    <a href="#" class="btn rounded-pill">Register</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bandeauorange mt-5 mb-5"></div>

      <h1 class="d-flex justify-content-center">Culinary specialties</h1>
    <div class="container" id="plat">
        <div class="row mt-5">
            <div class="offset-md-1 col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat slovaque carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat roumain carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/palt grec carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat pays bas carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat portugais carre.webp">
            </div>
        </div>

        <div class="row mt-4">
            <div class="offset-md-1 col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat finlandais carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat lituanien carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat francais carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat polonais carre.webp">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat danois carre.webp">
            </div>
        </div>
    </div>

    <div class="bandeaujaune mt-5 mb-5"></div>

    <h1 class="d-flex justify-content-center">Lieu de l'événement</h1>
    <div class="container">
        <p class="text-center offset-md-2 col-md-8">Le Puy-en-Velay, famous starting point of Saint Jacques de Compostela, capital of
        lentils and verbena is the ideal place to share these moments with its cobbled streets and its
        old buildings.</p>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-1">
        <div id="map"></div>
    </div>
    <p class="text-center fst-italic mb-5">Place du Martouret - 43000, Le Puy-en-Velay</p>

    <footer class="p-4 bg-dark text-white text-center">
        Designed by MMI2 of Puy-en-Velay, 2022-2023.
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="script/darkmod.js"></script>
    <script src="script/script.js"></script>
</body>

</html>
