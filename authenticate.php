<?php
    session_start();

    $user_default     = "admin@fatec.com.br";
    $password_dafault = "fatec";

    $user_typed     = $_POST["email"];
    $password_typed = $_POST["password"];

     if($user_default == $user_typed) {
        if($password_dafault == $password_typed) {
            $_SESSION["logged_user"] = $user_typed;
            header("location: index.php");
        } else {
            header("location: login.html?failed=true");
        }
     } else {
        header("location: login.html?failed=true");
    }
?>