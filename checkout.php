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

    echo '<button><a href="index.php">Voltar</a> </button>';

?>