<!--connection BDD-->
<?php
//définition connection et requete
$servername = 'localhost';
$username = 'root';
$password = '';
//connexion bdd et requete
//On établit la connexion
$connection = new PDO("mysql:host=$servername;port=3306;dbname=tasteofeurope", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<!--récupération et envoie de donées-->
<?php
if (isset($_POST['nom'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $mail = $_POST['mail'];
    $animation = $_POST['animation'];
    $sql0 = "INSERT INTO inscrit (nom, prenom, mail, animation) VALUES ('$nom' , '$prenom', '$mail','$animation')";
    $connection->exec($sql0);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Taste of Europe</title>
    <style>
        body {
            background-image: url(https://dbdzm869oupei.cloudfront.net/img/vinylrugs/preview/29739.png);


        }
    </style>
</head>

<body>
    <?php
  include('header.html');
  ?>


    <div class="grid">
        <!-- Début Grille -->
        <h1 class="d-flex justify-content-center mt-5 ">Tickets</h1>


        <!--formulaire a pas toucher-->
        <form action="tickets.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border bg-light rounded ">
            <legend>Registration for activities :</legend>
            <div class="form-group mt-2">
                <label for="nom">Name :</label>
                <input name="nom" type="text" class="form-control" placeholder="Votre nom">
            </div>

            <div class="form-group mt-2">
                <label for="prenom">First name :</label>
                <input name="prenom" type="text" class="form-control" placeholder="Votre prénom">
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="mail">E-mail address :</label>
                <input name="mail" type="mail" class="form-control" placeholder="Votre adresse mail">
            </div>
            <div>
                <label for="animation">Animation</label>
                <select name="animation">
                    <option value="concour de cuisine">Cooking contest</option>
                    <option value="concour de mangeur">Blind tasting</option>
                </select><br>
            </div>


            <div class="text-center"><br>
                <input type="submit" value="Envoyer" class="btn btn-warning">
            </div>
        </form></br></br></br>
    </div> <!-- Fin Grille -->


    <footer class="p-4 bg-dark text-white text-center">
        Designed by the MMI2 du Puy-en-Velay, year 2022-2023
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
