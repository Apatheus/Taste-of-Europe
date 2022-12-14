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
    <meta name="description" content="Le site web du festival Taste of Europe.">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- CSS FontAwsome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- CSS Flags Lib -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lipis/flag-icons@6.6.6/css/flag-icons.min.css"/>
    <link href="style.css" rel="stylesheet">
    <title>Taste of Europe</title>
</head>

<body class="d-flex flex-column min-vh-100" id="bodyadmin">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <?php include ('header.html');?>
 
    <h1 class="d-flex justify-content-center mt-5" id="dark">Accès à l'espace d'administration</h1>
        <div class="py-5">
            <form name="frmregister" action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center" id="rounded">
                <legend>Connexion</legend>
                <div class="form-group mt-2">
                    <label for="name">Identifiant :</label>
                    <input class="form-control" name="name" id="name" type="text" size="30" />
                
                <div class="form-group mt-2">  
                    <label for="password">Mot de passe :</label>
                    <input class="form-control" name="password" id="password" type="password" size="30" />
                </div>

                <div class="form-group mt-2">  
                    <input class="btn" type="submit" value="Submit" alt="Submit" title="Submit" />
                    <input class="btn" type="reset" value="Reset" alt="Reset" title="Reset" />
                </div>
            </form>
        </div>

    </div>
    <?php
        include ('footer.html');
    ?>

    <script src="script/darkmod.js"></script>
    <script src="script/script.js"></script>

</body>

</html>
