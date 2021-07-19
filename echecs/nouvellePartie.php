<?php

use Illuminate\Session\Middleware\StartSession;

    // base de données
    $user = "root";
    $pass = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=echecs', $user, $pass);

    // requêtes
    $insertJoueur = "INSERT INTO joueur (nom) VALUES (?);";
    $insertPartie = "INSERT INTO partie (joueur1, joueur2) VALUES (?, ?);";
    $getIdPartie = "SELECT id FROM partie ORDER BY id DESC LIMIT 1;";

    if(isset($_POST['joueur1']) && isset($_POST['joueur2'])){
        $joueur1 = $_POST['joueur1'];
        $joueur2 = $_POST['joueur2'];
        try{
            // On créé le joueur 1
            $stmt = $bdd->prepare($insertJoueur);
            $stmt->bindParam(1, $joueur1);
            $stmt->execute();
            $idJoueur1 = $bdd->lastInsertId();
            try{
                // On créé le joueur 2
                $stmt = $bdd->prepare($insertJoueur);
                $stmt->bindParam(1, $joueur2);
                $stmt->execute();
                $idJoueur2 = $bdd->lastInsertId();
                try{
                    // On créé la partie entre les deux joueurs
                    $stmt = $bdd->prepare($insertPartie);
                    $stmt->bindParam(1, $idJoueur1);
                    $stmt->bindParam(2, $idJoueur2);
                    $stmt->execute();
                    $idPartie = $bdd->lastInsertId();

                    // Je stocke les id de mes joueurs et de la partie
                    session_start();
                    $_SESSION['idJoueur1'] = $idJoueur1;
                    $_SESSION['idJoueur2'] = $idJoueur2;
                    $_SESSION['idPartie'] = $idPartie;
                
                    // Je renvoi sur la page de jeu
                    header('Location: game.php?joueur1='.$joueur1.'&joueur2='.$joueur2);
                    exit();
        
                }catch(Exception $e){
                    die('Erreur : '.$e->getMessage());
                }
            }catch(Exception $e){
                die('Erreur : '.$e->getMessage());
            }
        }catch(Exception $e){
            die('Erreur : '.$e->getMessage());
        }   
    }

?>