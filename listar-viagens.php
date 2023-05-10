<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  // 1- importar conexao com banco
  include "conexao.php";

  // 2- variável sql recebe um comando insert, select ou query
  // insert into precisa ter os nomes da colunas do banco, values pode passar qualquer nome  
  $buscar_cadastros = "SELECT * FROM trips, user_trips, users 
                      WHERE user_trips.user_id = user.id
                      WHERE user_trips.trip_id = trip.id"

  // 3- statment vai preparar a query
  $stmt = $conexao -> prepare($buscar_cadastros);

  // 4- executar statment
  $stmt->execute();

  // 5- receber os dados do statment
  $receber_cadastros = $stmt -> fetchAll(PDO::FETCH_ASSOC);
  var_dump($receber_cadastros);
?>
 
<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>listar viagem</title>
      <style>
        body {
          background-image: url('https://images.unsplash.com/photo-1520466809213-7b9a56adcd45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="smiling-traveler-girl-on-a-large-city-avenue');
          background-repeat: no-repeat;
          background-color: aliceblue;
        }

        .all {
          width: 50%;
          margin-left: 50%;
          padding: 1rem;
        }

        .lista {
          align-content: end;
          padding: 2rem;
        }

        form input[type="submit"] {
          margin-top: 2rem;
          border: 0;
          background: rgb(92, 132, 132);
          padding: 1rem 3rem;
          border-radius: 20px;
          vertical-align: middle;
        }
        
      </style>
    </head>
    <body>
      <div class="all">
        <h1>Listagem de viagens</h1>
        <h3>Selecione a viagem que gostaria de fazer</h3>
        <div class="empty"></div>
        <div class="lista">
          <form action="checkout.php" method="get" >


            <?php
              
              $_SESSION['viagem'];
              //require 'form-viagem.php';

              foreach($receber_cadastros as $item) {
                $id       = $item['id'];
                $nome     = $item['nome'];
                $email    = $item['email'];
                $telefone = $item['telefone'];
                $cidade   = $item['cidade'];
                $estado   = $item['estado'];
                
                #table
                $table='<table border="1">'; //cria tabela
                $table.='<thead>'; //abre cabeçalho
                $table.='<tr>'; // abre linha
                $table.='<th>Nome</th>'; // colunas do cabeçalho
                $table.='<th>Partida</th>';
                $table.='<th>Horário</th>';
                $table.='<th>Destino</th>';
                $table.='<th>Vagas</th>';
                $table.='<th>Selecionar</th>';
                $table.='</tr>';                //fecha linha
                $table.='</thead>';              //fecha cabeçalho
                $table.='<tbody>'; //abre corpo da tabela
                $table.='<tr>'; // abre linha
                $table.='<td>' .$_SESSION["viagem"]["nome"]. '</td>'; // coluna nome valor
                $table.='<td>' .$_SESSION['viagem']['partida']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['destino']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['horario']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['vagas']. '</td>';
                $table.='<td>'.'<input type="checkbox" name="travel01" />'.'</td>';
                $table.='</tr>';                //fecha linha
                $table.='<tr>'; // abre linha
                $table.='<td>' .$_SESSION["viagem"]["nome"]. '</td>'; // coluna nome valor
                $table.='<td>' .$_SESSION['viagem']['partida']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['destino']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['horario']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['vagas']. '</td>';
                $table.='<td>'.'<input type="checkbox" name="travel02" />'.'</td>';
                $table.='</tr>';                //fecha linha
                $table.='<tr>'; // abre linha
                $table.='<td>' .$_SESSION["viagem"]["nome"]. '</td>'; // coluna nome valor
                $table.='<td>' .$_SESSION['viagem']['partida']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['destino']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['horario']. '</td>';
                $table.='<td>' .$_SESSION['viagem']['vagas']. '</td>';
                $table.='<td>'.'<input type="checkbox" name="travel03" />'.'</td>';
                $table.='</tr>';                //fecha linha
                $table.='</tbody>';             //fecha corpo da tabela
                $table.='</table>';             //fecha tabela
              }

              if($_SESSION['viagem'] != null) {
                echo $table;
              } else {
                echo "Não há viagens na lista ainda.";
              }
            
            ?>
          <input type="submit" value="Escolher">
        </form>
        </div>
      </div>
    </body>
    
    </html>
    