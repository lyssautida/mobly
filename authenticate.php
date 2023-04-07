<?php
    session_set_cookie_params(['httponly' => true]);

    session_start();

    session_regenerate_id();

    $user_default     = "lyssautida";
    $password_default = "12345678";

    $user_typed     = $_POST["email"];
    $password_typed = $_POST["password"];

     if($user_default == $user_typed) {
        if($password_default == $password_typed) {
            $_SESSION["logged_user"] = $user_typed;
            header("location: index.php");
        } else {
            header("location: login.html?failed=true");
        }
     } else {
        header("location: login.html?failed=true");
    }
?>