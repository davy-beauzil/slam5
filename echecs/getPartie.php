<?php

$user = "root";
$pass = "root";
$getPartie = "SELECT partie.id, a.nom AS joueur1, b.nom AS joueur2 FROM partie INNER JOIN joueur AS a ON partie.joueur1 = a.id INNER JOIN joueur as b ON partie.joueur2 = b.id WHERE partie.gagnant IS NULL;";
$bdd = new PDO('mysql:host=localhost;dbname=echecs', $user, $pass);

$stmt = $bdd->query($getPartie);
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($rows);

?>