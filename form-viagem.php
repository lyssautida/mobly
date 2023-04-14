<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="forms-style.css">
    <title>cadastro viagem</title>
    <style>
        body {
          background-image: url('https://images.unsplash.com/photo-1520466809213-7b9a56adcd45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="smiling-traveler-girl-on-a-large-city-avenue');
          background-repeat: no-repeat;  
        }

        .res {
          width: 100vw;
          height: 100vh;  
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
        }

        
        .button {
          margin-top: 2rem;
          border: 0;
          background: rgb(92, 132, 132);
          padding: 1rem 3rem;
          border-radius: 20px;
          vertical-align: middle;
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
        session_start();

        $nome       = $_POST['nome'];
        $telefone   = $_POST['telefone'];
        $cidade     = $_POST['cidade'];
        $estado     = $_POST['estado'];
        $partida    = $_POST['partida'];
        $horario    = $_POST['horario'];
        $destino    = $_POST['destino'];
        $vagas      = $_POST['vagas'];
        $erro       = FALSE;

        if(!$erro) {
          echo '<h1>Viagem Cadastrada com sucesso!</h1>';
          echo '<h3> Agora é só esperar passageiros Mobly juntar-se a você.</h3>';
        }

        $viagem = [
          'nome'      => $nome,
          'telefone'  => $telefone,
          'cidade'    => $cidade,
          'estado'    => $estado,
          'partida'   => $partida,
          'vagas'     => $vagas,
          'horario'   => $horario,
          'destino'   => $destino,
        ];
        
        $_SESSION['viagem'] = $viagem;

        echo "Nome: " .$_SESSION['viagem']['nome']. "<br>";
        echo "Telefone: " .$_SESSION['viagem']['telefone']. "<br>";
        echo "Horário: " .$_SESSION['viagem']['horario']. "<br>";
        echo "Partida: " .$_SESSION['viagem']['partida']. "<br>";
        echo "Destino: " .$_SESSION['viagem']['destino']. "<br>";
        echo "Cidade: " .$_SESSION['viagem']['cidade']. "<br>";
        echo "Estado: " .$_SESSION['viagem']['estado']. "<br>";
        echo "Vagas: " .$_SESSION['viagem']['vagas']. "<br>";
      ?>

      <div class='button'>
        <a href="index.php">Voltar</a>
      </div class='button'>
    </div>
  </body>
</html>