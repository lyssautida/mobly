<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms-style.css">
    <title>cadastro usuário</title>
  </head>
  <body>
    
    <?php

    $nome       = $_POST['nome'];
    $telefone   = $_POST['telefone'];
    $cidade     = $_POST['cidade'];
    $estado     = $_POST['estado'];
    $senha    = $_POST['senha'];
    $estado     = $_POST['estado'];
    $erro       = FALSE;

    echo "<b>Nome: </b>" .$_POST['nome']. "<br>";
    echo "<b>Telefone: </b>" .$_POST['telefone']. "<br>";
    echo "<b>Partida: </b>" .$_POST['partida']. "<br>";
    echo "<b>Cidade: </b>" .$_POST['cidade']. "<br>";
    echo "<b>Estado: </b>" .$_POST['estado']. "<br>";

    ?>
    <button>
      <a href="index.php">Voltar</a>
    </button>
  </body>
</html>