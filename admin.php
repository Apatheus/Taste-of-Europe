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
    if(isset($_POST['id_a'])){
     $id_a=$_POST['id_a'];
     $nom=$_POST['nom'];
     $desc=$_POST['desc'];
     $date=$_POST['date'];
     $sql0 ="INSERT INTO activite (id_activite,nom,description,date ) VALUES ('$id_a' , '$nom', '$desc','$date')";
     $connection->exec($sql0);
}
?>
<?php
    if(isset($_POST['id_anim'])){
     $id_a2=$_POST['id_anim'];
     $nom2=$_POST['nom_a'];
     $desc2=$_POST['desc_a'];
     $date2=$_POST['date_a'];
     $sql1 ="INSERT INTO animation(description,date,nom,id_animation ) VALUES ( '$desc2','$date2','$nom2', '$id_a2' )";
     $connection->exec($sql1);
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
    <!--connectionadmin-->  
<?php
    
    $msg = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST["name"];
        $password = ($_POST["password"]);
     if ($name == '' || $password == '') {
          $msg = "You must enter all fields";
      } else {
          $requete= "SELECT * FROM admin WHERE login = '$name' AND mdp = '$password'";
          $resultats=$connection->query($requete);
          $tabMembers=$resultats->fetchAll();
          $resultats->closeCursor();
          if (count($tabMembers)==0) {
              echo "Could not successfully run query ($sql) from DB: " ;
              exit;
          }


      }
  }
  ?>

<!--formulaire a pas toucher-->
<form  action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border">
            <legend> activités :</legend>
                <div class="form-group mt-2">
                    <label for="id_a" >id :</label>
                    <input name="id_a" type="text" class="form-control" placeholder="id de l'activité">
                </div>

                <div class="form-group mt-2">
                    <label for="nom" >nom :</label>
                    <input name="nom" type="text" class="form-control" placeholder="nom activité">
                </div>

                <div class="form-group mt-2 mb-2">
                    <label for="desc" >description :</label>
                    <input name="desc" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                <label for="date">date (dd/mm/yy  00h00)</label>
                <input name="date" type="text" class="form-control" placeholder="date">
              </div>
                

                <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn btn-warning">
                </div>
        </form>*

<form  action="admin.php" method="POST" class="p-4 offset-md-4 col-md-4 justify-content-center border">
            <legend> animations :</legend>
                <div class="form-group mt-2">
                    <label for="id_anim" >id :</label>
                    <input name="id_anim" type="text" class="form-control" placeholder="id de l'animation">
                </div>

                <div class="form-group mt-2">
                    <label for="nom_a" >nom :</label>
                    <input name="nom_a" type="text" class="form-control" placeholder="nom animation">
                </div>

                <div class="form-group mt-2 mb-2">
                    <label for="desc_a" >description :</label>
                    <input name="desc_a" type="text" class="form-control" placeholder="description">
                </div>
                <div>
                <label for="date_a">date (dd/mm/yy  00h00)</label>
                <input name="date_a" type="text" class="form-control" placeholder="date">
              </div>
                

                <div class="text-center"><br>
                    <input type="submit" value="Envoyer" class="btn btn-warning">
                </div>
        </form>
</body>