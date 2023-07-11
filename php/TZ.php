<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css-options/TZ.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./../Java-scripts/main.js"></script>
    <title>Техзадание</title>
</head>
<?php include __DIR__.'./../includes/header.php';?>
<article>
    <div class="container">
        <div class="menu">
            <h2>Техническое задание</h2>
            <p class="menu-undertitle">На выполнение проекта «Электронный дневник»</p>
            <div class="quest">
                <table>
                    <tr>
                        <td> 1.</td>
                        <td>Преподаватель</td>
                        <td>Холушкин В.С.</td>
                    </tr>
                    <tr>
                        <td> 2.</td>
                        <td>Цель работы</td>
                        <td>Создать удобный и практичный "Электронный дневник"</td>
                    </tr>
                    <tr>
                        <td> 3.</td>
                        <td>Состав</td>
                        <td>
                            <ol>
                                <li>Лукьянов Роман – руководитель работ, работа с кодом;</li>
                                <li>Нознова Светлана – работа с базой данных;</li>
                                <li>Заднепряк Юлия – работа с базой данных;</li>
                                <li>Рычагов Владислав – оформление ТЗ;</li>
                                <li>Шелестова Екатерина – сбор информации;</li>
                                <li>Жаркова Дарья – отчислена.</li>
                            </ol>
                        </td>
                    </tr>
                    <tr>
                        <td> 4.</td>
                        <td>Сроки</td>
                        <td>2 семестр (18 марта - 14 июня)</td>
                    </tr>
                </table>
                <h3>Описание:</h3>
                <p>Данный сайт создан для учащихся группы УВТ-10В, в котором находиться информация:</p>
                <ol>
                    <li><a href="http://r.sarfti.ru/g/УВТ-10В" target="_blank" class="link">Расписание</a> предметов (Расписание появляется на каждую следующую учебную неделю).</li>
                    <li>Раздел: <a href="./Lesson.php" class="link">«Учёба»</a>.</li>
                    <p>В этом разделе имеется возможность узнать информацию об учителях, успеваемости абитуриентов на период их обучения, а также найти полезные ссылки для обучения.</p>
                    <li>Раздел: <a href="./DOC.php" class="link">«Документация»</a>.
                    </li>
                    <p>В этом разделе содержится информация:
                        <ul>
                            <li>Обязанности студента;</li>
                            <li>Права и обязанности студентов на дистанционном обучении;</li>
                            <li>Права студентов;</li>
                            <li>Правила поведения студентов и т.д.</li>
                        </ul>
                    </p>
                    <?php
                    if(isset($_COOKIE['cookie_user'])){
                        print '<li><a href="./Entrent.php" class="link">Участники</a> группы-разработки (Краткий блог о них самих).</li>';
                    } else{
                        print '<li><a href="./../authorisation.php" class="link">Участники</a> группы-разработки (Краткий блог о них самих).</li>';
                    }
                    ?>
                </ol>
            </div>
        </div>
    </div>
</article>
<?php include __DIR__.'./../includes/footer.php';?>