<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkout</title>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1520466809213-7b9a56adcd45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="smiling-traveler-girl-on-a-large-city-avenue');
            background-repeat: no-repeat;  
        }

        .main {
            width: 100vw;
            height: 90vh;  
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        
        .button {
            border: 0;
            background: rgb(129, 36, 24);
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
            text-decoration: none;
            font-weight: 700;
            color: #fff;
            padding-left:0.5rem;
        }
    </style>
</head>
<body>
    <div class="main">
        <?php
            session_start();
            $_SESSION['viagem'];

            if(isset($_GET['travel01']) || ($_GET['travel02']) || ($_GET['travel03']) ) {
                echo '<h1>Viagem agendada com sucesso! </h1><br><br>';
                echo 'Motorista: ' .$_SESSION["viagem"]["nome"]. '<br>';
                echo 'Local de partida: ' .$_SESSION['viagem']['partida']. '<br>';
                echo 'Local de destino: ' .$_SESSION['viagem']['destino']. '<br>';
                echo 'Horário de saída: ' .$_SESSION['viagem']['horario']. '<br>';
                echo 'Cidade: ' .$_SESSION['viagem']['cidade']. '<br>';   
                echo 'Estado: ' .$_SESSION['viagem']['estado']. '<br>';  
                echo 'Telefone: ' .$_SESSION['viagem']['telefone']. '<br><br>';  
            } else {
                echo '';
            }
        ?>

        <div class='button'>
            <a href="index.php">Voltar</a>
        </div class='button'>
        </div>
</body>
</html>