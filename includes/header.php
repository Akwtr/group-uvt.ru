<body>
    <?php  ?>
    <header>
        <h1>
            <a href="./main.php">Сайт группы УВТ-10В</a>
        </h1>
        <div class="button-name">
            <?php
                session_start();
                if(isset($_COOKIE['cookie_user'])){
                    echo $_COOKIE['cookie_user'];
                }
                session_destroy();
            ?>
            <div class="submenu">
                <a href="./options.php" class="configuration">Настройки</a><hr>
                <a href="./logout.php" class="EXIT">Выход</a>
            </div>
        </div>
    </header>