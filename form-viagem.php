<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms-style.css">
    <title>form</title>
  </head>
  <body>
    
    <?php
      session_start();


      $nome       = $_POST['nome'];
      $telefone   = $_POST['telefone'];
      $cidade     = $_POST['cidade'];
      $estado     = $_POST['estado'];
      $partida    = $_POST['partida'];
      $estado     = $_POST['estado'];
      $vagas      = $_POST['vagas'];
      $erro       = FALSE;

      $viagem = [
        'nome' => $nome, 
        'telefone' => $telefone,
        'cidade' => $cidade,
        'estado' => $estado,
        'partida' => $partida,
        'vagas' => $vagas,
      ];
      
      $_SESSION['viagem'] = $viagem;

      echo "<b>Nome: </b>" .$_SESSION['viagem']['nome']. "<br>";
      echo "<b>Telefone: </b>" .$_SESSION['viagem']['telefone']. "<br>";
      echo "<b>Partida: </b>" .$_SESSION['viagem']['partida']. "<br>";
      echo "<b>Cidade: </b>" .$_SESSION['viagem']['cidade']. "<br>";
      echo "<b>Estado: </b>" .$_SESSION['viagem']['estado']. "<br>";
      echo "<b>Vagas: </b>" .$_SESSION['viagem']['vagas']. "<br>";

    ?>
    <button>
      <a href="index.php">Voltar</a>
    </button>
  </body>
</html>