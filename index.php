<?php
    session_start();

    include 'header.php';
    
    @$pagina = $_GET["pagina"];
    
    if($pagina == "criar-viagem") {
        include "form-viagem.html";
    } else if($pagina == "listar-viagens") {
        include "listar-viagens.php";
    } else if($pagina == "login") {
        include "login.html";
    } else if($pagina == "criar-usuario") {
        include "cadastro-usuario.html";
    } else {
        include 'home.php';
    }
    
    include 'footer.php';
    
    
?>