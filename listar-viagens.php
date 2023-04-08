<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Carona</title>
      <style>
        body {
          background-image: url('https://images.unsplash.com/photo-1520466809213-7b9a56adcd45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80" alt="smiling-traveler-girl-on-a-large-city-avenue');
          background-repeat: no-repeat;
        }

        .all {
          display: flex;

        }

        .lista {
          align-content: end;
          padding-left: 40%;

        }
      </style>
    </head>
    <body>
      <div class="all">
        <div class="empty"></div>
        <div class="lista">
        <?php
          if (session_status() == PHP_SESSION_NONE) {
            session_start();
          }

          $_SESSION['viagem'];
          //require 'form-viagem.php';
          
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
          $table.='<td><input type="checkbox" name="travel" /></td>';
          $table.='</tr>';                //fecha linha
          $table.='</tbody>';             //fecha corpo da tabela
          $table.='</table>';             //fecha tabela
          echo $table;
        ?>
        </div>
      </div>
    </body>
    
    </html>
    