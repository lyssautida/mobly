
<?php
session_start();
$_SESSION['logged_user'];

$user_id          = $_SESSION['logged_user']['id'];
$local_partida    = $_POST['local_partida'];
$local_destino    = $_POST['local_destino'];
$data_partida     = $_POST['data_partida'];
$hora_partida     = $_POST['hora_partida'];
$data_destino     = $_POST['data_destino'];
$vagas            = $_POST['vagas'];
$is_passenger     = FALSE;
$erro             = FALSE;

if(empty($user_id )) {
  echo "<b>Motorista</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($local_partida )) {
  echo "<b>Local de partida</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($local_destino )) {
  echo "<b>Local destino</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($data_partida )) {
  echo "<b>data_partida</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($hora_partida )) {
  echo "<b>hora_partida</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($data_destino )) {
  echo "<b>data_destino</b> é obrigatório"; 
  $erro = TRUE;
}

if(empty($vagas )) {
  echo "<b>Vagas</b> é obrigatório"; 
  $erro = TRUE;
}

$viagem = [
  'user_id'         => $user_id,
  'local_partida '  => $local_partida ,
  'local_destino'   => $local_destino,
  'data_partida'    => $data_partida,
  'hora_partida'    => $hora_partida,
  'data_destino'    => $data_destino,
  'is_passenger'    => $is_passenger,
  'vagas'           => $vagas,
];

var_dump($viagem);

$_SESSION['viagem'] = $viagem;

if(!$erro) {
  $host     = "localhost:3308";
  $database = "mobly";
  $user     = "root";
  $password = "";

  // 1- função PDO instancia do banco de dados
  //verificar user em explorer>phpmyadmin>config.inc
  //url do banco, nome do banco, user, password
  $conexao =  new PDO(
      "mysql:host=$host;
      dbname=$database",
    $user,
    $password
  );

  //to-do lançar exceção no erro de conexão


  // 2- variável sql recebe um comando insert, select ou query
  // insert into precisa ter os nomes da colunas do banco, values pode passar qualquer nome  
  $sql_trip = "INSERT INTO trips (local_partida, local_destino, data_partida, hora_partida, data_destino, vagas)
          VALUES (:local_partida, :local_destino, :data_partida, :hora_partida, :data_destino, :vagas);
          INSERT INTO user_trips (user_id, trip_id, is_passenger)
          VALUES (:user_id, :trip_id, :is_passenger)";

// 3- statment vai preparar a query
  $stmt = $conexao -> prepare($sql_trip);


  // 4- statment vai relacionar os parâmetros com os valores dinâmicos da variáveis do form
  $stmt -> bindValue(':user_id', $user_id);
  $stmt -> bindValue(':local_partida', $local_partida);
  $stmt -> bindValue(':local_destino', $local_destino);
  $stmt -> bindValue(':data_partida', $data_partida);
  $stmt -> bindValue(':hora_partida', $hora_partida);
  $stmt -> bindValue(':data_destino', $data_destino);
  $stmt -> bindValue(':vagas', $vagas);
  $stmt -> bindValue(':trip_id', $trip_id);
  $stmt -> bindValue(':is_passenger', $is_passenger);
  $stmt -> bindValue(':vagas', $vagas);

  // 5- executar statment
  $stmt->execute();

  //pegar ultimo id criado
  $trip_id =  $conexao-> lastInsertId();

  header("Location: sucesso.html");

  // 6- fecha conexão
  exit;
}

  