<?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }

  // 1- importar conexao com banco
  include "conexao.php";

  // 2- variável sql recebe um comando insert, select ou query
  // insert into precisa ter os nomes da colunas do banco, values pode passar qualquer nome  
  $buscar_cadastros = "SELECT * FROM trips
                      INNER JOIN user_trips ON user_trips.trip_id = trips.id
                      INNER JOIN users ON user_trips.user_id = users.id";

  // 3- statment vai preparar a query
  $stmt = $conexao -> prepare($buscar_cadastros);

  // 4- executar statment
  $stmt->execute();

  // 5- receber os dados do statment
  $receber_cadastros = $stmt -> fetchAll(PDO::FETCH_ASSOC);
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
              
              foreach($receber_cadastros as $item) {
                $viagem_id        = $item['trip_id'];
                $user_id          = $item['user_id'];
                $nome             = $item['nome'];
                $email            = $item['email'];
                $telefone         = $item['telefone'];
                $cidade           = $item['cidade'];
                $estado           = $item['estado'];
                $local_partida    = $item['local_partida'];
                $local_destino    = $item['local_destino'];
                $data_partida     = $item['data_partida'];
                $hora_partida     = $item['hora_partida'];
                $data_destino     = $item['data_destino'];
                $vagas            = $item['vagas'];
                $is_passenger     = $item['is_passenger'];
                
                #table
                $table='<table border="1">'; //cria tabela
                $table.='<thead>'; //abre cabeçalho
                $table.='<tr>'; // abre linha
                $table.='<th>Nome Motorista</th>'; // colunas do cabeçalho
                $table.='<th>Local de Partida</th>';
                $table.='<th>Local de Destino</th>';
                $table.='<th>Data de Partida</th>';
                $table.='<th>Data de Chegada</th>';
                $table.='<th>Selecionar</th>';
                $table.='</tr>';                //fecha linha
                $table.='</thead>';              //fecha cabeçalho
                $table.='<tbody>'; //abre corpo da tabela
                $table.='<tr>'; // abre linha
                $table.='<td>' .$nome. '</td>'; // coluna nome valor
                $table.='<td>' .$local_partida . '</td>';
                $table.='<td>' .$local_destino. '</td>';
                $table.='<td>' .$data_partida. '</td>';
                $table.='<td>' .$data_destino. '</td>';
                $table.='<td>'.'<input type="checkbox" name="travel01" />'.'</td>';
                $table.='</tr>';                //fecha linha
                $table.='</tbody>';             //fecha corpo da tabela
                $table.='</table>';             //fecha tabela
              }

              if($receber_cadastros != null) {
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
    