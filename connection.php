<?php
require "connexion_bdd.php";
require "config.inc.php";
$connection = new BDD(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$link = $connection->connexion();
?>


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="script.js"></script>
  <link href="style.css" rel="stylesheet">
  <!-- CSS FontAwsome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- CSS Flags Lib -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>

  <title>Taste of Europe</title>

</head>

<body id="bodyadmin">
  <?php include ('header.html') ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  <h1 class="d-flex justify-content-center mt-5 ">Accès à l'espace d'administration</h1>
  <div class="py-5 fond">
    <form name="frmregister" action="admin.php" method="post" class="p-4 offset-md-4 col-md-4 justify-content-center border bg-light rounded">
      <legend>Connexion</legend>
      <div class="form-group mt-2">
        <label for="name">Identifiant :</label>
        <input class="form-control" name="name" id="name" type="text" size="30" />

        <div class="form-group mt-2">
          <label for="name">Mot de passe :</label>
          <input class="form-control" name="password" id="password" type="password" size="30" />
        </div>

        <div class="form-group mt-2">
          <input class="btn" type="submit" value="Submit" alt="Submit" title="Submit" />
          <input class="btn" type="reset" value="Reset" alt="Reset" title="Reset" />
        </div>
      </form>
    </div>

  </div>
  <footer class="p-4 bg-dark text-white text-center fixed-bottom">
    Conçu par les MMI2 du Puy-en-Velay, année 2022-2023.
  </footer>

</body>

</html>
