<?php

Class BDD {

    /*
    On crée une classe qui contient les informations nécessaires pour se connecter à la BDD.
    On y ajoute une fonction "connexion" qui utilise la fonction php "mysqli" pour se connecter.
    */

    private $host;
    private $base;
    private $id;
    private $mdp1;

    public function __construct() {
        $this->host = "localhost";
        $this->base = "dabachelie_europe";
        $this->id = "dabachelie_europe";
        $this->mdp1 = "tasteofeurope";
    }

    public function connexion() {
        $connexion = new mysqli($this->host,$this->id,$this->mdp1,$this->base);
        return $connexion;

        if(mysqli_connect_error()) {
            echo 'Echec de la connexion à la BDD :<br>'.mysqli_connect_error();
            exit();
        }
        else {
            return $this->$connexion;
            echo 'Connexion à la BDD effectuée avec succès.';
        }
    }
}

?>
