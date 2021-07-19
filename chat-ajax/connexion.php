<?php

	//$dsn = "mysql:host=172.22.215.239;dbname=tchat";
	$dsn = "mysql:host=localhost;dbname=tchat";
	//$user = "tchat";
	//$passwd = "9A4eAu3kQ";
	$user = "root";
	$passwd = "";

	$login = $_POST['login'];
	$pass  = $_POST['password'];

	$pdo = new PDO($dsn, $user, $passwd);

	$req = "SELECT COUNT(*) as nb, id FROM utilisateurs WHERE login = '$login' && pass = PASSWORD('$pass') GROUP BY id;";
	$stm = $pdo->query($req);
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
	if ($rows[0]['nb'] == 1 ) {
		session_start();
		$_SESSION["userId"]=$rows[0]['id'];
	};
    echo json_encode($rows);
?>