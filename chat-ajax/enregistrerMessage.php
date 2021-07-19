<?php
	$dsn = "mysql:host=172.22.215.239;dbname=tchat";
	$user = "tchat";
	$passwd = "9A4eAu3kQ";

	$auteur 	= $_GET['auteur'];
	$message  	= $_GET['message'];
	$destinataire = $_GET['destinataire'];

	$pdo = new PDO($dsn, $user, $passwd);
	$res = '';

	if( isset($_GET['destinataire']) ) {
		$req = "INSERT INTO messages (auteur, message, destinataire) VALUES (?, ?, ?);";
		$stmt= $pdo->prepare($req);
		$res = $stmt->execute([$auteur, $message, $destinataire]);

	} else {
		$req = "INSERT INTO messages (auteur, message) VALUES (?, ?);";
		$stmt= $pdo->prepare($req);
		$res = $stmt->execute([$auteur, $message]);
	}
	
    echo json_encode($res);
?>