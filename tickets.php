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
    if(isset($_POST['nom'])){
     $nom=$_POST['nom'];
     $prenom=$_POST['prenom'];
     $mail=$_POST['mail'];
     $animation=$_POST['animation'];
     $sql0 ="INSERT INTO inscrit (nom, prenom, mail, animation) VALUES ('$nom' , '$prenom', '$mail','$animation')";
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
</head>

<body>
    <nav class="nav justify-content-center bg-light p-2 ">
        <a class="nav-link active" href="index.html">Accueil</a></li>
        <a class="nav-link" href="programme.html">Programme</a></li>
        <a class="nav-link" href="index.html"><img src="">(Logo)</a></li>
        <a class="nav-link" href="tickets.php">Tickets</a></li>
        <a class="nav-link" href="connection.php">Administration</a></li>
    </nav>

    <div class="grid"> <!-- Début Grille -->
        <h1 class="d-flex justify-content-center mt-5">Tickets</h1>


        <!--formulaire a pas toucher-->
        <form  action="tickets.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border">
            <legend>Inscription aux activités :</legend>
                <div class="form-group mt-2">
                    <label for="nom" >Nom :</label>
                    <input name="nom" type="text" class="form-control" placeholder="Votre nom">
                </div>

                <div class="form-group mt-2">
                    <label for="prenom" >Prénom :</label>
                    <input name="prenom" type="text" class="form-control" placeholder="Votre prénom">
                </div>

                <div class="form-group mt-2 mb-2">
                    <label for="mail" >Adresse mail :</label>
                    <input name="mail" type="mail" class="form-control" placeholder="Votre adresse mail">
                </div>
                <div>
                <label for="animation">animation</label>
              <select name="animation"  >
                <option value="concour de cuisine">concour de cuisine</option>
                <option value="concour de mangeur"> concour de mangeur</option>
              </select><br></div>
                

                <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn btn-warning">
                </div>
        </form>
    </div> <!-- Fin Grille -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>