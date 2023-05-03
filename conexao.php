<?php
  // 1- função PDO instancia do banco de dados
  //verificar user em explorer>phpmyadmin>config.inc
  //url do banco, nome do banco, user, password
  $conexao =  new PDO(
    "mysql:host=$host;
    dbname=$database",
  $user,
  $password
);
?>