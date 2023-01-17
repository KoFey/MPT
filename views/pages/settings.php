<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>
<?php
    require_once "views/components/navbar.php";
?>
</body>
<div class="container">
    <form action="/trainer/setting?url=<?php echo $_GET['url']?>" method="post">
        <div class="jumbotron mt-4 text-center">
            <h1>Настройки тестов</h1>
            <hr class="my-4">
            <div class="container">
                <h2>Настройки очереди</h2>
                <div class="text-left">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="forwardOrder"
                               value="forward" <?php echo $_COOKIE['settings']['order'] == "forward" ? "checked" : null ?>>
                        <label class="form-check-label" for="forwardOrder">
                            Прямой порядок тестов
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="backOrder"
                               value="back" <?php echo $_COOKIE['settings']['order'] == "back" ? "checked" : null ?>>
                        <label class="form-check-label" for="backOrder">
                            Обратный порядок тестов
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="order" id="randomOrder"
                               value="random" <?php echo $_COOKIE['settings']['order'] == "random" ? "checked" : null ?>>
                        <label class="form-check-label" for="randomOrder">
                            Случайный порядок тестов
                        </label>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="container">
                <h2>Изменение параметров для случайных вариантов</h2>
                <div class="form-group">
                    <label for="formGroupCountQuests" style="font-size: 26px">Количество заданий</label>
                    <input type="text" class="form-control" id="formGroupCountInput" name="count"
                           placeholder="Введите количество заданий, которое вы хотите выполнить"
                           value="<?php echo $_COOKIE['settings']['countQuest']; ?>">
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center ">
                <a type="button" class="btn btn-secondary" href="<?php echo '/'.$_GET['url']?>">Закрыть</a>
                <button type="submit" class="btn btn-primary">Сохранить
                    изменения
                </button>
            </div>
    </form>
</div>

</div>
</html>