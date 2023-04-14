<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro usuário</title>
    <style>
        body {
          background-image: url('https://images.unsplash.com/photo-1520466809213-7b9a56adcd45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="smiling-traveler-girl-on-a-large-city-avenue');
          background-repeat: no-repeat;  
        }

        .res {
          width: 100vw;
          height: 90vh;  
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }

        
        .button {
        border: 0;
        background: rgb(92, 132, 132);
        padding: 9px 18px;
        border-radius: 15px;
        vertical-align: middle;
        width: 4rem;
        }

        .button:hover {
        border-top-color: #8b80b8;
        background: #8b80b8;
        color: #75959c;
        }

        .button a {
        text-decoration: underline;
        font-weight: 700;
        color: #604e79;
        }
    </style>
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