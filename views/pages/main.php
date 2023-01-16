<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>

<?php
    require_once "views/components/navbar.php";
?>

<div class="jumbotron text-center container">
    <h1 class="display-4 mt-4 ">Multiplication table - это сайт для изучения таблицы умножения!</h1>
    <p class="lead">Этот сайт посвящен изучению таблицы умножения, здесь вы можете прочитать о том, что она из себя
        представляет, как ее учить и проверить своим знания.</p>
    <hr class="my-4">
    <p>Для прочтения справочной информации о таблице умножения нажмите кнопку ниже</p>
    <a class="btn btn-primary btn-lg" href="/guide" role="button">Узнать о таблице</a>
    <hr class="my-4">
    <p>Для проверки своих знаний или их закрепления нажмите на кнопочку ниже</p>
    <a class="btn btn-primary btn-lg" href="/trainerMainPage" role="button">Проверь себя!</a>
</div>
</body>
</html>