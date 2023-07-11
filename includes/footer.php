<footer>
        <div class="container">
            <ul>
                <li><a href="./main.php">Меню</a></li>
                <li><a href="http://r.sarfti.ru/g/УВТ-10В" target="_blank">Расписание</a></li>
                <li><a href="./Lesson.php">Учеба</a></li>
                <li><a href="./DOC.php">Документы</a></li>
                <?php
                if(isset($_COOKIE['cookie_user'])){
                    print '<li><a href="./Entrent.php">Участники</a></li>';
                } ?>
                <li><a href="./../php/TZ.php">Техзадание</a></li>
            </ul>
            <p>© Группа УВТ-10В<br><sup>2021г.</sup></p>
            
        </div>
    </footer>
</body>
</html>