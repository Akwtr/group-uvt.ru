<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css-options/main.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <title>Главная</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="./../Java-scripts/main.js"></script>
</head>
    <?php include __DIR__.'./../includes/header.php';?>
    <article>
        <div class="container">
            <h2 class="article-menu">Меню</h2>
            <nav>
                <a href="http://r.sarfti.ru/g/УВТ-10В" target="_blank" class="link">
                    <img src="./../img/nav/Главная.png" alt="">
                    <div class="link-title">Расписание</div>
                    <div class="gradient-nav">
                    </div>
                </a>

                <a href="./Lesson.php" class="link">
                    <img src="./../img/nav/Учеба.png" alt="">
                    <div class="link-title">Учеба</div>
                    <div class="gradient-nav">
                    </div>
                </a>

                <a href="./DOC.php" class="link">
                    <img src="./../img/nav/Документы.png" alt="">
                    <div class="link-title">Документация</div>
                    <div class="gradient-nav">
                    </div>
                </a>

                <?php 
                session_start();
                if(isset($_COOKIE['cookie_user'])){
                    print '<a href="./Entrent.php" class="link">
                        <img src="./../img/nav/Участники.png" alt="">
                        <div class="link-title">Участники</div>
                        <div class="gradient-nav">
                        </div>
                    </a>';
                } 
                else print '<a href="./../authorisation.php" class="link" title="У-ХА-ДИ">
                <img src="./../img/nav/Участники.png" alt="">
                <div class="link-title" style="color: red;">Нет прав!<br>
                </div>
                <div class="gradient-nav"></div>
                </a>';
                session_destroy();?>
            </nav>
        </div>
    </article>
<?php include __DIR__.'./../includes/footer.php';?>