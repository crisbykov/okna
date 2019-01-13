<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Заказать</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Оформление</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>

            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label class="col-form-label">Имя</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Номер телефона</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">E-mail</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Город</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label class="col-form-label">Адрес</label>
                        <input type="text" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Высота окна</label>
                        <input type="text" name="product" class="form-control" value="<?= @$_GET['height'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Ширина окна</label>
                        <input type="text" name="product" class="form-control" value="<?= @$_GET['width'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Тип дома</label>
                        <input type="text" name="product" class="form-control" value="<?= @$_GET['dom'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Стеклопакет</label>
                        <input type="text" name="product" class="form-control" value="<?= @$_GET['steklopaket'] ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label>Дополнительно</label>
                        <input type="text" name="product" class="form-control" value="<?= @$_GET['dop'] ?>" readonly>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
                <button type="submit" class="btn btn-primary th">Отправить</button>
            </div>
        </div>
    </div>
</div>

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
