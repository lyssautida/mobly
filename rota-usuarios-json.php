<?php
	//SERVIR API COM DADOS VINDO DO BANCO DE DADOS
	
	include_once "conexao.php";
	
	$buscar_cadastros = "SELECT * FROM users";
		

    $stmt = $conexao->prepare($buscar_cadastros);

    $stmt->execute();

    $receber_cadastros = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($receber_cadastros, JSON_PRETTY_PRINT);
    header('Content-Type: application/json'); 