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
    <title>Taste of Europe - Programme</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php
  include('header.html');
  ?>

  <h1 class="d-flex justify-content-center py-4">Animations</h1>
  <div class="row">
    <div class="col-md-4 offset-md-2">
      <div class="row d-flex items-align-center">
        <p>
          Vous aimez les défis ? Taste of Europe a ce qu'il vous faut.<br> 
          Si vous ne vous satisfaisez pas des activités classiques, participez à nos animations ! Au programme :
          <ul>
            <li> Des sessions de dégustation à l'aveugle.
            <li> Un concours du meilleur cuisinier.
            <li> Un concours du meilleur mangeur.
          </ul>
          À la clé, de superbes récompenses offertes par notre sponsor : Tefal.<br>
          Intéressés ? Inscrivez-vous !
        <p>
      </div>

      <div class="d-flex justify-content-center">
        <a href="tickets.php" class="btn rounded-pill">
          Je m'inscris !
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="row carousel-inner">
          <div class="carousel-item imgcarou active">
            <img src="images/animation1.png" id="rounded" class="d-block w-100 img-fluid" alt="Concours de cuisine">
          </div>
          <div class="carousel-item imgcarou">
            <img src="images/animation2.png" id="rounded" class="d-block w-100 img-fluid" alt="Dégustation à l'aveugle">
          </div>
          <div class="carousel-item imgcarou">
            <img src="images/animation3.png" id="rounded" class="d-block w-100 img-fluid" alt="Concours de nourriture">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Suivant</span>
        </button>
      </div>
    </div>
  </div>

  <div class="row" id="bandeau">
    <div class="bandeauorange col-md-4 my-5"></div>
    <div class="bandeaujaune col-md-4 my-5"></div>
    <div class="bandeaubleu col-md-4 my-5"></div>
  </div>
  <h1 class="d-flex justify-content-center pb-4">Activités</h1>
  <div class="d-flex justify-content-center pb-4">
    <img class="img-fluid" id="rounded" src="images/activitésV2.png">
  </div>

  <?php
    include ('footer.html');
  ?>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- Mes scripts -->
    <script src="script/darkmod.js"></script>
    <script src="script/script.js"></script></body>

</html>
