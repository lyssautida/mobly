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

        .lista {
          display: flex;
          align-content: flex-end;
        }
      </style>
    </head>
    <body>
      <div class="lista">
      <?php
        
        #table
        $table='<table border="1">'; //cria tabela
        $table.='<thead>'; //abre cabeçalho
        $table.='<tr>'; // abre linha
        $table.='<th>Nome</th>'; // colunas do cabeçalho
        $table.='<th>Saída</th>';
        $table.='<th>Chegada</th>';
        $table.='<th>Telefone</th>';
        $table.='</tr>';                //fecha linha
        $table.='</thead>';              //fecha cabeçalho
        $table.='<tbody>'; //abre corpo da tabela
        $table.='<tr>'; // abre linha
        $table.='<td>Hideo</td>'; // coluna nome valor
        $table.='<td>Cuiabá</td>';
        $table.='<td>Londrina</td>';
        $table.='<td>(65) 99812-5267</td>';
        $table.='</tr>';                //fecha linha
        $table.='</tbody>';             //fecha corpo da tabela
        $table.='</table>';             //fecha tabela
        echo $table;
      ?>
      </div>
    </body>

</html>
