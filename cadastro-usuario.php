<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro-usuario-style.css">
    <title>cadastro usuário</title>
  </head>
  <body>
    <div class="res">

      <?php
        $email      = $_POST['email'];
        $senha      = $_POST['senha'];
        $nome       = $_POST['nome'];
        $telefone   = $_POST['telefone'];
        $cidade     = $_POST['cidade'];
        $estado     = $_POST['estado'];
        $erro       = FALSE;
        
        if(!$erro) {
          echo '<h1>Cadastro realizado com sucesso!</h1>';
          echo '<h3> Comece a usar Mobly agora.</h3>';
        }

        echo "<b>Nome: </b>" .$_POST['nome']. "<br>";
        echo "<b>Usuário: </b>" .$_POST['email']. "<br>";
        echo "<b>Telefone: </b>" .$_POST['telefone']. "<br>";
        echo "<b>Cidade: </b>" .$_POST['cidade']. "<br>";
        echo "<b>Estado: </b>" .$_POST['estado']. "<br><br>";
      ?>

      <div class='button'>
        <a href="index.php">Começar</a>
      </div class='button'>
    </div>
  </body>
</html>