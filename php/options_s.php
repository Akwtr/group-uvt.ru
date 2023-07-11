<?php
    $pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $connect = new mysqli('localhost', 'r86129_Akwtr', 'Stels16500rock', 'r86129_author');

    $pass = md5($pass);
    $data = $connect->query("SELECT * FROM `userdb`");
    $update = $connect -> query("UPDATE `userdb` SET `user_password` = '$pass' WHERE `user_id`='".$_COOKIE['cookie_id']."'");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css-options/options.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Настройка</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="./../Java-scripts/main.js"></script>
</head>
    <?php include __DIR__.'./../includes/header.php';?>
    <article>
        <div class="container">
            <h2 class="article-menu">Настройки</h2>
            <div class="article-options">
                <form action="./options_s.php" method="POST">
                <div class="article-options__pass">
                    <p>Изменить пароль</p>
                    <input type="password" name="password" id="password" required autocomplete="off">
                </div>
                <strong>Пароль изменен!</strong>
                <input type="submit" value="Изменить">
                </form>
            </div> 
        </div>
    </article>
<?php include __DIR__.'./../includes/footer.php';?>