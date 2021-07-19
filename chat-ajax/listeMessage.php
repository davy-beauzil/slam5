<?php

	//$dsn = "mysql:host=172.22.215.239;dbname=tchat";
	$dsn = "mysql:host=localhost;dbname=tchat";
	//$user = "tchat";
	//$passwd = "9A4eAu3kQ";
	$user = "root";
	$passwd = "";
	
	session_start();

	$pdo = new PDO($dsn, $user, $passwd);
	$stm = '';

	$stm = $pdo->query("SELECT * from messages;");
	/*
	if(null != $_SESSION["userId"]){
		$stm = $pdo->query("SELECT * from messages WHERE destinataire is null OR destinataire = " . $_SESSION["userId"] . ";");
	} else {
		if(null != $_GET["userId"]){
			$stm = $pdo->query("SELECT * from messages WHERE destinataire is null OR destinataire = " . $_GET["userId"] . ";");
		} else {
			$stm = $pdo->query("SELECT * from messages WHERE destinataire is null;");
		}
	}
	*/
	$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($rows);
?>