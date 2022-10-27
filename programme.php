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
    <title>Taste of Europe - Programme</title>
</head>

<body>
  <?php
  include('header.html');
  ?>

  <h1 class="d-flex justify-content-center pb-4">Animations</h1>
  <div class="row">
    <div class="col-md-4 offset-md-2">
      <div class="row">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        <p>
      </div>

      <div class="row d-flex justify-content-center">
        <a class="btn rounded-pill">
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
            <img src="images/animation3.jpg" id="rounded" class="d-block w-100 img-fluid" alt="Concours de nourriture">
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

  <div class="row">
    <div class="bandeauorange col-md-4 my-5"></div>
    <div class="bandeaujaune col-md-4 my-5"></div>
    <div class="bandeaubleu col-md-4 my-5"></div>
  </div>
  <h1 class="d-flex justify-content-center pb-4">Activités</h1>
  <div class="d-flex justify-content-center pb-4">
    <img class="img-fluid" id="rounded" src="images/activitésV2.png">
  </div>

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
