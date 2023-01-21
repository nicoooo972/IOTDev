<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "db.php";

if (isset($_POST['forminscription'])) {


    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = $_POST['mdp'];
    $mdp2 = $_POST['mdp2'];


    if (!empty($_POST['pseudo']) and !empty($_POST['mail']) and !empty($_POST['mail2']) and !empty($_POST['mdp']) and !empty($_POST['mdp2'])) {

        $pseudolength = strlen($pseudo);        //pseudo inf à 255 caractère        

        if ($pseudolength <= 255) {            //verification que le mail correspond     

            if ($mail == $mail2) {

                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {                    //verification que le mail n'existe pas déjà dans la bdd         

                    $query = "SELECT * FROM Membres WHERE mail = '" . $mail . "'";

                    if ($mdp == $mdp2) {

                        //req sql pour ajouter les informations rentrées dans la bdd   
                        echo $query;


                        $encmdp = password_hash($mdp, PASSWORD_DEFAULT);

                        $sql = "INSERT INTO Membres (pseudo, mail, motdepasse) VALUES ('" . $pseudo . "','" . $mail . "','" . $encmdp . "')";

                        $_SESSION['comptecree'] = "Votre compte a bien été crée !";
                        header('Location : index.php');
                    } else {
                        $erreur = "Vos mot de passe ne correspondent pas !";
                    }
                } else {
                    $erreur = "ERROR";
                }
                //verification que le mdp correspond         
            } else {
                $erreur = "Votre mail n'est pas conforme";
            }
        } else {
            $erreur = "Vos adresse mail ne correspondent pas !";
        }
    } else {
        echo "Votre pseudo ne doit pas dépasser 255 caratères ! ";
    }
} else {
    $erreur = "Tous les champs doivent être complétés !";
}
