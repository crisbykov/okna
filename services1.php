<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Наши ОКНА</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Raleway:400,300,700,900" rel="stylesheet">
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
      <a class="navbar-brand" href="index.php">Наши ОКНА</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Главная</a></li>
        <li><a href="about.html">О компании</a></li>
        <li class="active"><a href="services1.php">Калькулятор окон</a></li>
        <li><a href="works.html">Информация</a></li>
      </ul>
    </div>
  </div>
</div>

  <div id="blue">
    <div class="container">
      <div class="row centered">
        <div class="col-lg-8 col-lg-offset-2">
          <h4>КАЛЬКУЛЯТОР ДЛЯ РАСЧЕТА СТОИМОСТИ ОКНА</h4>
        </div>
      </div>
    </div>
  </div>
<br>
<section class="section">
  <div class="container">
    <div class="small-line"></div>
    <div class="row price">
      <div class="col-md-4 col-md-offset-4">
        <div class="list-group calculator">
          <div class="list-group-item box-price">
            <form class="box-filter" data-price="0.006" method="GET">
                <label>Высота и ширина окна</label>
                <div class="row">
                  <div class="col-md-4" style="padding-top: 14px;">Высота окна:</div>
                  <div class="col-md-3">
                      <input type="text" name="height" class="form-control" id="height" placeholder="<?php if ( isset($_GET['height']) ) echo $_GET['height']; else echo "0"; ?>"></div>
                    <br>
                  <div class="col-md-4" style="padding-top: 14px;">Ширина окна:</div>
                  <div class="col-md-3">
                      <input type="text" name="width" class="form-control" id="width" placeholder="<?php if ( isset($_GET['height']) ) echo $_GET['width']; else echo "0"; ?>"></div>
                </div>
                  <br>
                <label>Тип дома</label>
                <fieldset id="dom">
                    <input type="radio" name="dom" value="1.1" id="panel" checked>
                    <label for="panel">Панельный</label><br>
                    <input type="radio" name="dom" value="1.15" id="kirpich">
                    <label for="kirpich">Кирпичный</label><br>
                    <input type="radio" name="dom" value="1.25" id="stalin">
                    <label for="stalin">Сталинский</label>
                </fieldset>
                <label>Стеклопакет</label>
                <fieldset id="steklopaket">
                    <input type="radio" name="steklopaket" value="1" id="odin" checked>
                    <label for="odin">Однокамерный 1</label><br>
                    <input type="radio" name="steklopaket" value="1.2" id="dva">
                    <label for="dva">2-камерный</label><br>
                </fieldset>
                <label>Дополнительно</label>
                <fieldset>
                    <input type="checkbox" name="otliv" id="otliv" value="1.05">
                    <label for="otliv">Отлив</label><br>
                    <input type="checkbox" name="podokonnik" id="podokonnik" value="1.15">
                    <label for="podokonnik">Подоконник</label><br>
                    <input type="checkbox" name="setka" id="setka" value="1.17">
                    <label for="setka">Москитная сетка</label>
                </fieldset>

                <input type="submit" name="submit" value="Рассчитать стоимость">
            </form>
              <?php
              $names = ['width', 'height', 'dom', 'steklopaket', 'otliv', 'podokonnik', 'setka' ];
              foreach ($names as $name)
                  if ( !isset( $_GET[$name]) || $_GET[$name] <= 0 )
                      $_GET[$name] = 1;
              @ $result = 0.006 *  $_GET['width'] *  $_GET['height'] * $_GET['dom'] * $_GET['steklopaket'] * $_GET['otliv'] * $_GET['podokonnik'] * $_GET['setka'] ; ?>
              <label>Итоговая стоимость: <?=@ round($result,2); ?></label><br>

            <?php if ( isset( $result ) ) @ include('order_button.php') ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
