<?php 
    session_start();
    if(isset($_COOKIE['cookie_user'])){
        header("Location: ./php/main.php"); exit;
    }
    else{
        header("Location: ./authorisation.php"); exit;
    }
    session_destroy();
?>