<?php

	//$dsn = "mysql:host=172.22.215.239;dbname=tchat";
	$dsn = "mysql:host=localhost;dbname=tchat";
	//$user = "tchat";
	//$passwd = "9A4eAu3kQ";
	$user = "root";
	$passwd = "";
	

	$pdo = new PDO($dsn, $user, $passwd);

	$stm = $pdo->query("SELECT * from utilisateurs;");

	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($rows);
?>