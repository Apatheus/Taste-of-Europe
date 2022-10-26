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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href="style.css" rel="stylesheet">
    <title>Taste of Europe</title>
</head>

<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <nav class="nav justify-content-center bg-light p-2">
        <a class="nav-link link-dark mx-2" href="index.html">Accueil</a>
        <a class="nav-link link-dark mx-2" href="programme.html">Programme</a>
        <a class="nav-link link-dark mx-2" href="index.html"><img class="img-fluid" src="images/logo.png"></a>
        <a class="nav-link link-dark mx-2" href="tickets.php">Tickets</a>
        <a class="nav-link link-dark mx-2" href="connection.php">Administration</a>
    </nav>


        <div class="py-5 fond">
            <form name="frmregister" action="admin.php" method="post" class="p-4 offset-md-4 col-md-4 justify-content-center border bg-light rounded">
                <table class="form">

                    <tr>
                        <td></td>
                    </tr>

                    <tr>
                        <th><label for="name"><strong>Name:</strong></label></th>
                        <td><input class="inp-text" name="name" id="name" type="text" size="30" /></td>
                    </tr>
                    <tr>
                        <th><label for="name"><strong>Password:</strong></label></th>
                        <td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="submit-button-right">
                            <input class="send_btun" type="submit" value="Submit" alt="Submit" title="Submit" />

                            <input class="send_btn" type="reset" value="Reset" alt="Reset" title="Reset" />
                        </td>

                    </tr>
                </table>

            </form>
        </div>

    </div>
    <footer class="p-4 bg-dark text-white text-center fixed-bottom">
        Conçu par les MMI2 du Puy-en-Velay, année 2022-2023.
    </footer>

</body>

</html>
