<?php
    session_start();
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $connect = new mysqli('localhost', 'r86129_Akwtr', 'Stels16500rock', 'r86129_author');
    // if (!$conn) {
    //     die("Connection failed: " . mysqli_connect_error());
    // }
    if (mysqli_connect_errno()) {
        header('Location: ./../error_bd.php'); exit;
    } else {
    $password = md5($password);
    $data = $connect->query("SELECT * FROM `userdb` WHERE `user_login` ='$login' AND `user_password`='$password'");
    $user = $data -> fetch_assoc();
    if(isset($_POST['submit'])){
        if($user == ($password && $login)){
            setcookie('cookie_user', $user['full_name'], time() + 3600, "/");
            setcookie('cookie_id', $user['user_id'], time() +3600, "/");
            header('Location: ./../php/main.php'); exit;
        } 
            header('Location: ./../error.php');
        } 
    $connect -> close();
    session_destroy();
    }
?>