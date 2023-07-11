<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css-options/index.css">
    <title>Вход</title>
</head>
<body>
    <div class="container">
        <div class="title">
            <h1><a href="./authorisation.php">Сайт группы УВТ-10В</a></h1>
        </div>
        <div class="enter">
            <h2>ВХОД:</h2>
            <form action="./includes/auth-form.php" method="POST">
                <p>
                    <label>Логин<br/><input type="text" name="login" id="login" size="16" required autofocus></label>
                </p>

                <p>
                    <label>Пароль<br/><input type="password" id="password" name="password" size="32" required></label>
                    <span>
                        <a href="./php/lost_pass.php">Не помню свой пароль!</a>
                    </span>
                </p>
                <strong>Извините, нет соединения к Базе данных!</strong>
                <input class="button" type="submit" value="ВХОД" name="submit">
            </form>
        </div>
    </div>
    <footer>
        <p>© Группа УВТ-10В<br>
            <sup>2021г.</sup>
        </p>
    </footer>
</body>
</html>