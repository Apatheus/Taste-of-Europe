<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin=""/>
    <!-- JS Leaflet -->
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js" integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Taste of Europe - Programme</title>
</head>

<body>
    <?php
  include('header.html');
  ?>
    <nav class="nav justify-content-center bg-light p-2">
        <a class="nav-link link-dark mx-2" href="index_ang.html">Home</a>
        <a class="nav-link link-dark mx-2" href="programme_ang.html">Program</a>
        <a class="nav-link link-dark mx-2" href="index_ang.html"><img class="img-fluid" src="images/logo.png"></a>
        <a class="nav-link link-dark mx-2" href="tickets_ang.php">Tickets</a>
        <a class="nav-link link-dark mx-2" href="connection.php">Administration</a>
    </nav>
    <h1 class="d-flex justify-content-center pb-4">Animations</h1>
    <div class="row">
        <div class="col-md-4 offset-md-2">
            <div class="row">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<p>
            </div>

            <div class="row d-flex justify-content-center">
                <a class="btn btn-dark text-white rounded-pill">
                    I'm registering !
                </a>
           </div>
        </div>

        <div class="col-md-4">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="images/anim1.jpg" class="d-block w-100 img-fluid" alt="Concours de cuisine">
                  </div>
                  <div class="carousel-item">
                    <img src="images/anim2.jpeg" class="d-block w-100 img-fluid" alt="Dégustation à l'aveugle">
                  </div>
                  <div class="carousel-item">
                    <img src="images/anim3.jpg" class="d-block w-100 img-fluid" alt="Concours de nourriture">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
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
        <img class="img-fluid" src="images/activites.png">
    </div>

    <footer class="p-4 bg-dark text-white text-center">
        Designed by the MMI2 du Puy-en-Velay, year 2022-2023
    </footer>

    <!-- Script Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Mon js -->
    <script src="script.js"></script>
</body>

</html>