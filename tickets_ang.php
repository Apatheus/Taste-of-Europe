<?php
require "connexion_bdd.php";
require "config.inc.php";
$connection = new BDD(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$link = $connection->connexion();
?>

<!--récupération et envoie de donées-->
<?php
if (isset($_POST['nom'])) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $animation = $_POST['animation'];
  $sql0 = "INSERT INTO inscrit (nom, prenom, mail, animation) VALUES ('$nom' , '$prenom', '$mail','$animation')";
  mysqli_query($link, $sql0);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
  <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
  <meta name="description" content="Le site web du festival Taste of Europe.">
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

<body class="d-flex flex-column min-vh-100" id="bodytickets">
  <?php include ('header_ang.html') ?>



  <div class="grid">
    <!-- Début Grille -->
    <h1 class="d-flex justify-content-center my-5" id="dark">Registration for animations</h1>


    <!--formulaire a pas toucher-->
    <form action="tickets_ang.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center" id="rounded">
      <legend>Register to an animation</legend>
      <div class="form-group mt-2">
        <label for="nom">Name: </label>
        <input name="nom" type="text" class="form-control" placeholder="Your name">
      </div>

      <div class="form-group mt-2">
        <label for="prenom">First name: </label>
        <input name="prenom" type="text" class="form-control" placeholder="Your first name">
      </div>

      <div class="form-group mt-2 mb-2">
        <label for="mail">E-mail address: </label>
        <input name="mail" type="mail" class="form-control" placeholder="Your e-mail address">
      </div>
      <div>
        <label for="animation">Animation: </label>
        <select name="animation">
          <option value="concour de cuisine">Cooking contest</option>
            <option value="concour de mangeur">Eating contest</option>
          <option value="degustation à l'aveugle">Blind testing</option>
        </select>
      </div>

      <div class="text-center">
        <input type="submit" value="Submit" class="btn">
      </div>
      <?php
      if (!empty($_POST['mail'] && $_POST['nom'] && $_POST['prenom'])) {
        echo "<p class='text-success text-center'>Successfully registered.</p>";
      } elseif (isset($_POST['nom'])) {  
        echo "<p class='text-danger text-center'>Please fill every text area.</p>";
      }
      ?>
    </form></br>
  </div> <!-- Fin Grille -->

  <?php
    include ('footer_ang.html');
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
