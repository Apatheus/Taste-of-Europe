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
<!--récupération de données-->
<?php
if (isset($_POST['id_a'])) {
    $id_a = $_POST['id_a'];
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $date = $_POST['date'];
    $sql0 = "INSERT INTO activite (id_activite,nom,description,date ) VALUES ('$id_a' , '$nom', '$desc','$date')";
    $connection->exec($sql0);
}
?>
<?php
if (isset($_POST['id_anim'])) {
    $id_a2 = $_POST['id_anim'];
    $nom2 = $_POST['nom_a'];
    $desc2 = $_POST['desc_a'];
    $date2 = $_POST['date_a'];
    $sql1 = "INSERT INTO animation(description,date,nom,id_animation ) VALUES ( '$desc2','$date2','$nom2', '$id_a2' )";
    $connection->exec($sql1);
}
?>
<?php
if (isset($_POST['id_supr'])) {
    $id_supr = $_POST['id_supr'];
    $sql5 = "DELETE FROM activite WHERE id_activite=('$id_supr')";
    $connection->exec($sql5);
}
?>
<?php
if (isset($_POST['id_supr2'])) {
    $id_supr2 = $_POST['id_supr2'];
    $sql9 = "DELETE FROM animation WHERE id_animation=('$id_supr2')";
    $connection->exec($sql9);
}
?>
<?php
if (isset($_POST['id_am'])) {
    $id_am = $_POST['id_am'];
    $nomm = $_POST['nomm'];
    $descm = $_POST['descm'];
    $datem = $_POST['datem'];
    $sql10 = "UPDATE activite SET id_activite='$id_am', nom='$nomm', description='$descm', date='$datem' WHERE id_activite='$id_am' ";
    $connection->exec($sql10);
}
?>
<?php
if (isset($_POST['id_am2'])) {
    $id_am2 = $_POST['id_am2'];
    $nomm2 = $_POST['nomm2'];
    $descm2 = $_POST['descm2'];
    $datem2 = $_POST['datem2'];
    $sql11 = "UPDATE animation SET id_animation='$id_am2', nom='$nomm2', description='$descm2', date='$datem2' WHERE id_animation='$id_am2' ";
    $connection->exec($sql11);
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
    <script src="admin.js"></script>
    <title>Taste of Europe</title>
    <style>
        body {
            background-image: url(https://justbagtags.com.au/wp-content/uploads/2019/05/16-patterns-01-bright-orange-waves-46.jpg);
        }

        #form1 {
            display: none;

        }

        #form2 {
            display: none;
        }

        #form3 {
            display: none;
        }

        .btn {
            position: center;

        }
    </style>
</head>

<body>
    <nav class="nav justify-content-center bg-light p-2">
        <a class="nav-link link-dark mx-2" href="index.html">Accueil</a>
        <a class="nav-link link-dark mx-2" href="programme.html">Programme</a>
        <a class="nav-link link-dark mx-2" href="index.html"><img class="img-fluid" src="images/logo.png"></a>
        <a class="nav-link link-dark mx-2" href="tickets.php">Tickets</a>
        <a class="nav-link link-dark mx-2" href="connection.php">Administration</a>
    </nav>

    <!--connectionadmin-->
    <?php

    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST["name"];
        $password = ($_POST["password"]);
        if ($name == '' || $password == '') {
            $msg = "You must enter all fields";
        } else {
            $requete = "SELECT * FROM admin WHERE login = '$name' AND mdp = '$password'";
            $resultats = $connection->query($requete);
            $tabMembers = $resultats->fetchAll();
            $resultats->closeCursor();
            if (count($tabMembers) == 0) {
                echo "Could not successfully run query ($sql) from DB: ";
                exit;
            }
        }
    }
    ?>

    <button class="btn" onclick="myFunction1()">Ajout</button>
    <button class="btn" onclick="myFunction2()">supression</button>
    <button class="btn" onclick="myFunction3()">modifier</button>

    <!--formulaire a pas toucher-->
    <div id="form1">
        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border bg-light rounded 3">
            <legend> activités :</legend>
            <div class="form-group mt-2">
                <label for="id_a">id :</label>
                <input name="id_a" type="text" class="form-control" placeholder="id de l'activité">
            </div>

            <div class="form-group mt-2">
                <label for="nom">nom :</label>
                <input name="nom" type="text" class="form-control" placeholder="nom activité">
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="desc">description :</label>
                <input name="desc" type="text" class="form-control" placeholder="description">
            </div>
            <div>
                <label for="date">date (dd/mm/yy 00h00)</label>
                <input name="date" type="text" class="form-control" placeholder="date">
            </div>


            <div class="text-center"><br>
                <input type="submit" value="Envoyer" class="btn btn-warning">
            </div>
        </form>

        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border bg-light">
            <legend> animations :</legend>
            <div class="form-group mt-2">
                <label for="id_anim">id :</label>
                <input name="id_anim" type="text" class="form-control" placeholder="id de l'animation">
            </div>

            <div class="form-group mt-2">
                <label for="nom_a">nom :</label>
                <input name="nom_a" type="text" class="form-control" placeholder="nom animation">
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="desc_a">description :</label>
                <input name="desc_a" type="text" class="form-control" placeholder="description">
            </div>
            <div>
                <label for="date_a">date (dd/mm/yy 00h00)</label>
                <input name="date_a" type="text" class="form-control" placeholder="date">
            </div>


            <div class="text-center"><br>
                <input type="submit" value="Envoyer" class="btn btn-warning">
            </div>
        </form>

    </div>
    <div id="form2">
        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border bg-light">
            <legend> supressions de donné des activité :</legend>
            <div class="form-group mt-2">
                <label for="id_supr">id :</label>
                <input name="id_supr" type="text" class="form-control" placeholder="id de l'activité">

                <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn btn-warning">
                </div>
            </div>
        </form>

        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border bg-light">
            <legend> supressions de donné des Animation :</legend>
            <div class="form-group mt-2">
                <label for="id_supr2">id :</label>
                <input name="id_supr2" type="text" class="form-control" placeholder="id de l'animation">

                <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn btn-warning">
                </div>
            </div>
        </form>
    </div>
    <div id="form3">
        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border bg-light">
            <legend> activités modifier :</legend>
            <div class="form-group mt-2">
                <label for="id_am">id : non modifiable</label>
                <input name="id_am" type="text" class="form-control" placeholder="id de l'activité">
            </div>

            <div class="form-group mt-2">
                <label for="nomm">nom :</label>
                <input name="nomm" type="text" class="form-control" placeholder="nom activité">
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="descm">description :</label>
                <input name="descm" type="text" class="form-control" placeholder="description">
            </div>
            <div>
                <label for="datem">date (dd/mm/yy 00h00)</label>
                <input name="datem" type="text" class="form-control" placeholder="date">
            </div>


            <div class="text-center"><br>
                <input type="submit" value="Envoyer" class="btn btn-warning">
            </div>
        </form>

        <form action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border border bg-light">
            <legend> animation modifier :</legend>
            <div class="form-group mt-2">
                <label for="id_am2">id : non modifiable</label>
                <input name="id_am2" type="text" class="form-control" placeholder="id de l'activité">
            </div>

            <div class="form-group mt-2">
                <label for="nomm2">nom :</label>
                <input name="nomm2" type="text" class="form-control" placeholder="nom activité">
            </div>

            <div class="form-group mt-2 mb-2">
                <label for="descm2">description :</label>
                <input name="descm2" type="text" class="form-control" placeholder="description">
            </div>
            <div>
                <label for="datem2">date (dd/mm/yy 00h00)</label>
                <input name="datem2" type="text" class="form-control" placeholder="date">
            </div>


            <div class="text-center"><br>
                <input type="submit" value="Envoyer" class="btn btn-warning">
            </div>
        </form>
    </div>

    <footer class="p-4 bg-dark text-white text-center">
        Conçu par les MMI2 du Puy-en-Velay, année 2022-2023.
    </footer>





</body>
