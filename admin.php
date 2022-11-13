<?php
require "connexion_bdd.php";
require "config.inc.php";
$connection = new BDD(DB_SERVER, DB_USER, DB_PASS, DB_DATABASE);
$link = $connection->connexion();
?>

<!--récupération de données-->
<?php
if (isset($_POST['id_a'])) {
  $id_a = $_POST['id_a'];
  $nom = $_POST['nom'];
  $desc = $_POST['desc'];
  $date = $_POST['date'];
  $sql0 = "INSERT INTO activite (id_activite,nom,description,date ) VALUES ('$id_a' , '$nom', '$desc','$date')";
  mysqli_query($link, $sql0);
}
?>
<?php
if (isset($_POST['id_anim'])) {
  $id_a2 = $_POST['id_anim'];
  $nom2 = $_POST['nom_a'];
  $desc2 = $_POST['desc_a'];
  $date2 = $_POST['date_a'];
  $sql1 = "INSERT INTO animation(description,date,nom,id_animation ) VALUES ( '$desc2','$date2','$nom2', '$id_a2' )";
  mysqli_query($link, $sql1);
}
?>
<?php
if (isset($_POST['id_supr'])) {
  $id_supr = $_POST['id_supr'];
  $sql5 = "DELETE FROM activite WHERE id_activite=('$id_supr')";
  mysqli_query($link, $sql5);
}
?>
<?php
if (isset($_POST['id_supr2'])) {
  $id_supr2 = $_POST['id_supr2'];
  $sql9 = "DELETE FROM animation WHERE id_animation=('$id_supr2')";
  mysqli_query($link, $sql9);
}
?>
<?php
if (isset($_POST['id_am'])) {
  $id_am = $_POST['id_am'];
  $nomm = $_POST['nomm'];
  $descm = $_POST['descm'];
  $datem = $_POST['datem'];
  $sql10 = "UPDATE activite SET id_activite='$id_am', nom='$nomm', description='$descm', date='$datem' WHERE id_activite='$id_am' ";
  mysqli_query($link, $sql10);
}
?>
<?php
if (isset($_POST['id_am2'])) {
  $id_am2 = $_POST['id_am2'];
  $nomm2 = $_POST['nomm2'];
  $descm2 = $_POST['descm2'];
  $datem2 = $_POST['datem2'];
  $sql11 = "UPDATE animation SET id_animation='$id_am2', nom='$nomm2', description='$descm2', date='$datem2' WHERE id_animation='$id_am2' ";
  mysqli_query($link, $sql11);
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="script.js"></script>
  <link href="style.css" rel="stylesheet">
  <!-- CSS FontAwsome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- CSS Flags Lib -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css" />

  <title>Taste of Europe</title>

</head>

<body class="d-flex flex-column min-vh-100" id="bodyadmin">
  <?php
  include('header.html');
  ?>

  <!--connectionadmin-->
  <?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $password = ($_POST["password"]);
    $requete = "SELECT * FROM admin WHERE login = '$name' AND mdp = '$password'";
    $resultats = mysqli_query($link, $requete);
    $tabMembers = mysqli_fetch_all($resultats, MYSQLI_ASSOC);
    if (count($tabMembers) == 0) {
      echo "Identifiants erronnés.";
      exit;
    }
  }

  ?>
  <div class="fond2 text-center my-4 offset-md-2 col-md-8">
    <div class="row text-center my-4">
      <h5>Cette page sert à ajouter, supprimer ou modifier les activités présentes dans la base de données.</h5>
    </div>

    <div class="accordion" id="accordionExample">


      <div class="accordion-item">
        <!-- Début section 1 -->
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <strong>Ajouter une activité</strong>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
          <div class="accordion-body bg-secondary">

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border">
                <legend> Ajout d'une activité</legend>
                <div class="form-group mt-2">
                  <label for="id_a">ID :</label>
                  <input name="id_a" type="text" class="form-control" placeholder="id de l'activité">
                </div>

                <div class="form-group mt-2">
                  <label for="nom">Nom :</label>
                  <input name="nom" type="text" class="form-control" placeholder="nom activité">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label for="desc">Description :</label>
                  <input name="desc" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                  <label for="date">Date (jj/mm/aa 00h00) :</label>
                  <input name="date" type="text" class="form-control" placeholder="date">
                </div>


                <div class="text-center"><br>
                  <input type="submit" value="Envoyer" class="btn">
                </div>
              </form></br>

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border">
                <legend> Ajout d'une animation</legend>
                <div class="form-group mt-2">
                  <label for="id_anim">ID :</label>
                  <input name="id_anim" type="text" class="form-control" placeholder="id de l'animation">
                </div>

                <div class="form-group mt-2">
                  <label for="nom_a">Nom :</label>
                  <input name="nom_a" type="text" class="form-control" placeholder="nom animation">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label for="desc_a">Description :</label>
                  <input name="desc_a" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                  <label for="date_a">Date (jj/mm/aa 00h00) :</label>
                  <input name="date_a" type="text" class="form-control" placeholder="date">
                </div>

                <div class="text-center"><br>
                  <input type="submit" value="Envoyer" class="btn">
                </div>
              </form>

          </div>
        </div>
      </div> <!-- Fin section 1 -->





      <div class="accordion-item">
        <!-- Début section 2 -->
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <strong>Supprimer une activité</strong>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
          <div class="accordion-body bg-secondary">

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border">
                <legend>Supprimer une activité</legend>
                <div class="form-group mt-2">
                  <label for="id_supr">ID de l'activité :</label>
                  <input name="id_supr" type="text" class="form-control" placeholder="id de l'activité">

                  <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn">
                  </div>
                </div>
              </form></br>

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border ">
                <legend>Supprimer une animation</legend>
                <div class="form-group mt-2">
                  <label for="id_supr2">ID de l'animation :</label>
                  <input name="id_supr2" type="text" class="form-control" placeholder="id de l'animation">

                  <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn">
                  </div>
                </div>
              </form>

          </div>
        </div>
      </div> <!-- Fin section 2 -->





      <div class="accordion-item">
        <!-- Début section 3 -->
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <strong>Modifier une activité</strong>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
          <div class="accordion-body bg-secondary">

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border">
                <legend> Modifier une activité</legend>
                <div class="form-group mt-2">
                  <label for="id_am">ID de l'activité à modifier :</label>
                  <input name="id_am" type="text" class="form-control" placeholder="id de l'activité">
                </div>

                <div class="form-group mt-2">
                  <label for="nomm">Nom :</label>
                  <input name="nomm" type="text" class="form-control" placeholder="nom activité">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label for="descm">Description :</label>
                  <input name="descm" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                  <label for="datem">Date (jj/mm/aa 00h00) :</label>
                  <input name="datem" type="text" class="form-control" placeholder="date">
                </div>


                <div class="text-center"><br>
                  <input type="submit" value="Envoyer" class="btn">
                </div>
              </form></br>

              <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border">
                <legend>Modifier une animation</legend>
                <div class="form-group mt-2">
                  <label for="id_am2">ID de l'animation à modifier</label>
                  <input name="id_am2" type="text" class="form-control" placeholder="id de l'animation">
                </div>

                <div class="form-group mt-2">
                  <label for="nomm2">Nom :</label>
                  <input name="nomm2" type="text" class="form-control" placeholder="nom animation">
                </div>

                <div class="form-group mt-2 mb-2">
                  <label for="descm2">Description :</label>
                  <input name="descm2" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                  <label for="datem2">Date (jj/mm/aa 00h00) :</label>
                  <input name="datem2" type="text" class="form-control" placeholder="date">
                </div>


                <div class="text-center"><br>
                  <input type="submit" value="Envoyer" class="btn">
                </div>
              </form>

          </div>
        </div>
      </div>
    </div> <!-- Fin section 3 -->

  </div>
  <?php
    include ('footer.html');
  ?>

  <!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Mes scripts -->
  <script src="script/darkmod.js"></script>
  <script src="script/script.js"></script>



</body>