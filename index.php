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
    include ('header.html');
    ?>

    <div class="container text-center mt-5 position-relative">
        <img class="img-fluid" id="rounded" src="images/banniere.jpg">
        <a href="#" class="btn mt-3">Je m'inscris !</a>
    </div>

    <div class="bandeaubleu mt-5 mb-5 text-white"><h2>Découvrez notre festival de tout les pays, en un seul !</h2></div>

    <h1 class="d-flex justify-content-center mb-5">Taste of Europe, c'est quoi ?</h1>
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-4">
                <img class="img-fluid" id="rounded" src="images/food1.jpg">
            </div>
            <div class="col-md-4">

                <p class="text-center"><b>Régalez vos papilles</b></p>
                <p class="text-justify">Taste of Europe est un festivale regroupant un grand nombre de pays d’Europe
                    dans le but de faire découvrir les différentes cultures des pays voisins de la France. <br>
                    Du 18 au 20, découvrez le Puy en Velay sous ses airs gourment, pour un festival réunissant plus de
                    10 pays européen pour vous faire découvrir tout un panel de saveurs inhabituels ! c’est dans une
                    ambiance de fête décontracté que vous déambulerais dans les rues de la ville a la découvertes des
                    stands, activités et diverses animation pour grand et petits.
                </p><br>
                <div class="text-center">
                    <a href="#" class="btn rounded-pill">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bandeauorange mt-5 mb-5"></div>

      <h1 class="d-flex justify-content-center">Spécialités culinaires</h1>
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
    <p class="text-center pd-5 position-relative">Le Puy en Velay, célèbre point de départ de Saint Jacque de Compostelle, capitale des
        lentilles et de la verveine constitue l’endroit idéal pour partager ces moments avec ses rues pavé et ses
        bâtiments ancien.</p>
    <div class="d-flex justify-content-center mt-5 mb-1">
        <div id="map"></div>
    </div>
    <p class="text-center fst-italic mb-5">Place du Martouret - 43000, Le Puy-en-Velay</p>

    <footer class="p-4 bg-dark text-white text-center">
        Conçu par les MMI2 du Puy-en-Velay, année 2022-2023.
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="script.js"></script>
</body>

</html>