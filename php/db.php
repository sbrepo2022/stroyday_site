<?php
    // header("Content-Type: text/html; charset=utf-8");

    $servername = "localhost";
    $username = "id13372900_admin";
    $password = "[Pc-Bb4tnm(l14%0";
    $database = "id13372900_stroyday";
    $dbport = 3306;

    // Создаем подключение
    $db = new mysqli($servername, $username, $password, $database, $dbport);

    // Проверяем подключение
    if ($db->connect_error) {
        die("Соединение не удалось: " . $db->connect_error);
    }

    mysqli_query($db,"SET NAMES utf8");

    //echo "Успешно подключились (".$db->host_info.")";
?>
