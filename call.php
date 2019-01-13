<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <title>Наши ОКНА</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>

<div class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Наши ОКНА</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Главная</a></li>
        <li><a href="about.html">О компании</a></li>
        <li><a href="services1.php">Калькулятор окон</a></li>
        <li><a href="works.html">Информация</a></li>
      </ul>
    </div>
  </div>
</div>

<div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>Вы можете оставить заявку на замер окон заполнив форму:</h4>
        </div>
      </div>
    </div>
  </div>

<form method="POST" style="margin: 0 auto; max-width: 50%; min-width: 610px;">
  <br>
  <div class="form-group">
    <label>Ваше имя</label>
    <input name="name" type="text" class="form-control" placeholder="Имя" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ваш Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Введите email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Ваш номер телефона</label>
    <input name="number" type="number" class="form-control"  placeholder="Введите номер" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Ваш город</label>
    <select name="city" class="form-control" id="exampleFormControlSelect1">
      <option>Коряжма</option>
      <option>Котлас</option>
      <option>Архангельск</option>
      <option>Вельск</option>
    </select>
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Согласие на обработку данных</label>
  </div>
  <button type="submit" class="btn btn-primary">ОТПРАВИТЬ</button>
</form>
<br>

<?php
if (isset($_POST['name']) && isset($_POST['email']) && ($_POST['number']) && ($_POST['city'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $city = $_POST['city'];

// Параметры для подключения
    $db_host = "127.0.0.1";
    $db_user = "root"; // Логин БД
    $db_password = ""; // Пароль БД
    $db_base = "clients"; // Имя БД
    $db_table = "clients"; // Имя Таблицы БД

// Подключение к базе данных
    $mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);
    $result = $mysqli->query("INSERT INTO `clients`(`id`, `name`, `email`, `number`, `city`) VALUES (null, '". $name . "', '". $email . "', '" . $number ."', '".$city. "')");
}

?>

<div id="f">
  <div class="container">
    <div class="row centered">
      <a href="https://vk.com/oknakotlas"><img src="img/vk.png" width="50" height="50"alt=""></a>
    </div>
  </div>
</div>

<div id="copyrights">
  <div class="container">
    <p>
      &copy; Наши ОКНА 2001-2019
    </p>
  </div>
</div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/chart/chart.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
