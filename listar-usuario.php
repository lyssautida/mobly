<?php


  // 1- importar conexao com banco
  include "conexao.php";

  // 2- variável sql recebe um comando insert, select ou query
  // insert into precisa ter os nomes da colunas do banco, values pode passar qualquer nome  
  $buscar_cadastros = "SELECT * FROM users";

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
    <title>Listar usuário</title>
  </head>
  <body>

    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>Obrigada por se cadastrarem!</th>
          </tr>
        </thead>
        
        <tbody>
          
          <?php
            foreach($receber_cadastros as $item) {
              $id       = $item['id'];
              $nome     = $item['nome'];
              $email    = $item['email'];
              $telefone = $item['telefone'];
              $cidade   = $item['cidade'];
              $estado   = $item['estado'];

          ?>

          <tr>
            <td scope="row"><?php echo $nome; ?></td>
            <td            ><?php echo $estado; ?></td>
          </tr>

          <?php }; ?> <!-- fim do for each -->
        </tbody>
      </table>
    </div> 
  </body>
</html>