
<?php
  $email             = $_POST['email'];
  $senha             = $_POST['senha'];
  $senhaConfirmacao  = $_POST['senhaConfirmacao'];
  $nome              = $_POST['nome'];
  $telefone          = $_POST['telefone'];
  $cidade            = $_POST['cidade'];
  $estado            = $_POST['estado'];
  $erro              = FALSE;

  if(empty($nome)) {
    echo "<b>Nome</b> é obrigatório"; 
    $erro = TRUE;
  }

  if(empty($email)) {
    echo "<b>Email</b> é obrigatório"; 
    $erro = TRUE;
  }

  if(empty($telefone)) {
    echo "<b>telefone</b> é obrigatório"; 
    $erro = TRUE;
  }

  if(empty($cidade)) {
    echo "<b>Cidade</b> é obrigatório"; 
    $erro = TRUE;
  }
  
  if(empty($estado)) {
    echo "<b>Estado</b> é obrigatório"; 
    $erro = TRUE;
  }

  if(!strstr($senha, $senha2)) {
    echo "As senhas devem ser iguais";
    $erro = TRUE;
  }

  if(strstr($senha, ' ')) {
    echo "<b>Senha</b> não pode conter espaços";
    $erro = TRUE;
  }

  if(!strstr($email, '@')) {
    echo "<b>Email</b> inválido. Deve conter '@'";
    $erro = TRUE;
  }


  if(!$erro) {
    include "conexao.php";

    $host     = "localhost:3308";
    $database = "mobly";
    $user     = "root";
    $password = "";

    // 2- variável sql recebe um comando insert, select ou query
    // insert into precisa ter os nomes da colunas do banco, values pode passar qualquer nome  
    $sql = "INSERT INTO users (nome, email, senha, telefone, cidade, estado)
            VALUES (:nome, :email, :senha, :telefone, :cidade, :estado)";

    // 3- statment vai preparar a query
    $stmt = $conexao -> prepare($sql);


    // 4- statment vai relacionar os parâmetros com os valores dinâmicos da variáveis do form
    $stmt -> bindValue(':nome', $nome);
    $stmt -> bindValue(':email', $email);
    $stmt -> bindValue(':senha', $senha);
    $stmt -> bindValue(':telefone', $telefone);
    $stmt -> bindValue(':cidade', $cidade);
    $stmt -> bindValue(':estado', $estado);

    // 5- executar statment
    $stmt->execute();

    header("Location: sucesso.html");

    // 6- fecha conexão
    exit;
  }

?>
