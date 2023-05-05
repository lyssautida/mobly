<?php
// 0-Criar a sessão
session_set_cookie_params(['httponly' => true]);

session_start();

session_regenerate_id();

// 1-Importar conexão bd
include 'conexao.php';

// 2-Receber variável do input de login
   $input_email     = $_POST["email"];
   $input_password = $_POST["password"];

// 3-Query de busca de dados
    $buscar_usuario = "SELECT * FROM users WHERE email = '$input_email'";

// 4-Statment prepara a query
    $stmt = $conexao -> prepare($buscar_usuario);
    
// 5-Executar statment
    $stmt->execute();

// 6-Receber os dados do statment e armazenar em variáveis
    $receber_cadastros = $stmt -> fetch(PDO::FETCH_ASSOC);
    #var_dump($receber_cadastros);

    $id        = $receber_cadastros['id'];
    $email     = $receber_cadastros['email'];
    $senha     = $receber_cadastros['senha'];
    $nome      = $receber_cadastros['nome'];
    $telefone  = $receber_cadastros['telefone'];
    $cidade    = $receber_cadastros['cidade'];
    $estado    = $receber_cadastros['estado'];

// 7-Armazenar em um array sem a senha
    $found_user = [
        'id'       => $id,
        'email'    => $email,
        'nome'     => $nome,
        'telefone' => $telefone,
        'cidade'   => $cidade,
        'estado'   => $estado,
    ];

    if($email == $input_email) {
        if($senha == $input_password) {
            $_SESSION["logged_user"] = $found_user;
            header("location: index.php");
        } else {
            header("location: login.html?failed=true");
        }
    } else {
        header("location: login.html?failed=true");
    }
?>