<?php
	session_start();
	unset($_SESSION["userId"]);
    echo '{"message":"Utilisateur Déconnecté"}';
?>