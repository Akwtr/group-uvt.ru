<?php
    session_start();
    $all = $_COOKIE['cookie_id'];
    $connect = new mysqli('localhost', 'r86129_Akwtr', 'Stels16500rock', 'r86129_author');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css-options/classes.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./../Java-scripts/selected.js"></script>
    <title>Успеваемость</title>
</head>
<body>
    <div class="container">
    <form method="POST">
        <select name="sem" id="sem">
            <option value="s0">Выберите семестр</option>
            <option value="s1">1 Семестр</option>
            <option value="s2">2 Семестр</option>
        </select>
    </form>
    <div id="s1" class="sem" style="display: none !important;">
        <?php $data = $connect->query("SELECT * FROM `ucs` WHERE `user_id`='$all' AND `sem` = 1 ORDER BY `datatime`"); 
        ?>
    <table class="table_sort">
        <thead>
        <tr>
            <th>Дисциплина</th>
            <th>Преподаватель</th> 
            <th>Экз/Зач</th>
            <th>Оценка</th>
            <th>Дата</th>
        </tr>
    </thead>
    <tbody>
        <?php while($result = mysqli_fetch_array($data)) {
            echo "<tr>
            <td>$result[class]</td>
            <td>$result[teacher]</td>
            <td>$result[attestation]</td>
            <td>$result[asses]</td>
            <td>$result[datatime]</td>
            </tr>";  
        }?>
    </tbody>
    </table>
    </div>
    <div id="s2" class="sem" style="display: none !important;">
    <?php $data = $connect->query("SELECT * FROM `ucs` WHERE `user_id`='$all' AND `sem` = 2 ORDER BY `datatime`") ?>
    <table class="table_sort">
        <thead>
        <tr>
            <th>Дисциплина</th>
            <th>Преподаватель</th> 
            <th>Экз/Зач</th>
            <th>Оценка</th>
            <th>Дата</th>
        </tr>
        </thead>
    <?php while($result = mysqli_fetch_array($data)) {
        echo "<tr>
        <td>$result[class]</td>
        <td>$result[teacher]</td>
        <td>$result[attestation]</td>
        <td>$result[asses]</td>
        <td>$result[datatime]</td>
        </tr>";  
    }?>
    </table>
    </div>
    </div>
</body>
</html>