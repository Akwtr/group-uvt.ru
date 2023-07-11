<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css-options/Lesson.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./../Java-scripts/Entrent.js"></script>
    <script src="./../Java-scripts/main.js"></script>
    <title>Учеба</title>
</head>
<?php include __DIR__.'./../includes/header.php';?>
    <aside>
        <div class="menu">
            <div class="menu-title">
                <h2>Учеба</h2>
            </div>
            
            <div class="link">
                <a target="ALL_OPEN" href="./Teachers.html">Учителя</a>
            </div>
            
            <div class="link">
                <a target="ALL_OPEN" href="./Links.html">Полезные ссылки</a>
            </div>
            
            <div class="link">
                <a target="ALL_OPEN" href="./Classes.php">Успеваемость</a>
            </div>
        </div>
        <div class="button">
            <img src="./../img/nav/Shape.svg" alt="arrow">
    </div>
    </aside>

    <article>
        <div class="field_frame">
            <div class="frame">
                <iframe name="ALL_OPEN" data-src="#" frameborder="0" title="Lesson"></iframe>
            </div>
        </div>
    </article>
<?php include __DIR__.'./../includes/footer.php';?>