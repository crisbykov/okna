<?php
if (isset($_POST['name']) && isset($_POST['email']) && ($_POST['number']) && ($_POST['city'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];

// Параметры для подключения
    $db_host = "localhost";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = 'clients'; // Имя БД
    $db_table = "clients"; // Имя Таблицы БД

// Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
    if ($mysqli->connect_error) {
        echo "Нет доступа к БД";
    }

    $mysqli->autocommit(FALSE);

    $result = $mysqli->query("INSERT INTO " . $db_table . " (name, email, number, city) VALUES (" . $name . " " . $email . " " . $number . " " . $city . ")");

if (!$mysqli->commit()) {
    echo("Не удалось зафиксировать транзакцию\n");
    exit();
}

    if ($result == true) {
        echo "Информация занесена в базу данных";
    } else {
        echo "Информация не занесена в базу данных";
    }
}