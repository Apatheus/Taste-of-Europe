<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
    <meta name="description" content="Le site web du festival Taste of Europe.">
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

<body class="d-flex flex-column min-vh-100">
    <?php
    include ('header.html');
    ?>

    <div class="container text-center mt-5 position-relative">
        <img class="img-fluid" id="rounded" src="images/banniere.png">
        <a href="tickets.php" class="btn rounded-pill mt-3">Je m'inscris !</a>
    </div>

    <div class="bandeaubleu mt-5 mb-5 text-black">Les saveurs de l'Europe en une seule et même place !</div>

    <h1 class="d-flex justify-content-center mb-5">Taste of Europe, c'est quoi ?</h1>
    <div class="container">
        <div class="row align-items-center">
            <div class="offset-md-2 col-md-4 d-flex align-items-center">
                    <img class="img-fluid" id="rounded" src="images/le-poivrier.jpg">
            </div>
            <div class="col-md-4">

                <p class="text-center"><h5>Régalez vos papilles</h5></p>
                <p class="text-justify">Taste of Europe est un événement ayant pour but de faire découvrir les nombreuses
                    spécialités culinaires du Vieux Continent. <br>
                    Du 28 au 30 juillet, découvrez le Puy-en-Velay sous ses airs gourmands, dans un festival réunissant plus de
                    10 pays européens pour vous faire découvrir tout un panel de saveurs inhabituelles ! C’est dans une
                    ambiance de fête décontractée que vous déambulerez dans les rues de la ville à la découvertes des
                    stands, activités et diverses animations pour grands et petits.
                </p>
                <div class="text-center">
                    <a href="tickets.php" class="btn rounded-pill">S'inscrire</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bandeauorange mt-5 mb-5"></div>

      <h1 class="d-flex justify-content-center">Spécialités Culinaires</h1>
    <div class="container" id="plat">
        <div class="row mt-5">
            <div class="offset-md-1 col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat slovaque carre.webp" alt="Bryndzové halušky">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat roumain carre.webp" alt="Sarmale">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/palt grec carre.webp" alt="Souvlakis">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat pays bas carre.webp" alt="Bitterballen">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid " src="image site/plat portugais carre.webp" alt="Cabrado asado">
            </div>
        </div>

        <div class="row mt-4">
            <div class="offset-md-1 col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat finlandais carre.webp" alt="Kalakukko">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat lituanien carre.webp" alt="Cepelinai">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat francais carre.webp" alt="Escargots de Bourgogne">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat polonais carre.webp" alt="Goulash de porc">
            </div>

            <div class="col-md-2 img-hover-zoom">
                <img class="img-fluid" src="image site/plat danois carre.webp" alt="Stegt flaesk">
            </div>
        </div>
    </div>

    <div class="bandeaujaune mt-5 mb-5"></div>

    <h1 class="d-flex justify-content-center">Lieu de l'événement</h1>
    <div class="container text-center offset-md-2 col-md-8">
        <p>Le Puy-en-Velay, célèbre point de départ de Saint Jacques de Compostelle ainsi que capitale des
        lentilles et de la verveine, est le lieu que nous avons choisi pour vous donner rendez-vous.</p>
        <p>Ci-dessous les différentes zones du festival dans lesquelles se tiendront les activités !</p>
    </div>
    <div class="d-flex justify-content-center mt-5 mb-1">
        <div id="map"></div>
    </div>
    <p class="text-center fst-italic mb-5">Place du Martouret - 43000, Le Puy-en-Velay</p>

    <?php
    include ('footer.html');
    ?>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="script/darkmod.js"></script>
    <script src="script/script.js"></script>
</body>

</html>
