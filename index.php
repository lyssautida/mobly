<?php  
    session_start();
    //isset verifica se tem algo dentro e retorna true
    if(!isset($_SESSION["logged_user"])) {
        header("Location: login.html");
    }
    
    //unset desfaz 
    if(isset($_GET["exit"])) {
        unset($_SESSION["logged_user"]);
        header("Location: login.html");
    }   
    
    include 'header.php';
    @$pagina = $_GET["pagina"];
    
    if($pagina == "criar-viagem") {
        include "form-viagem.html";
    } else if($pagina == "listar-viagens") {
        include "listar-viagens.php";
    } else if($pagina == "login") {
        include "login.html";
    } else {
        include 'home.php';
    }
    
    include 'footer.php';
    
    
?>