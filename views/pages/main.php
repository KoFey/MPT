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
    <h1 class="display-4 mt-4 ">УмноЖ - это сайт для изучения таблицы умножения!</h1>
    <p class="lead">Хотите выучить таблицу умножения? Наш сайт поможет в этом! Вы можете узнать, что это вообще такое, как ее лучше учить и важные правила, без которых придется туго!</p>

    <hr class="my-4">
    <p>Для прочтения справочной информации о таблице умножения нажмите кнопочку ниже</p>
    <a class="btn btn-primary btn-lg" href="/guide" role="button">Узнать о таблице</a>
    <hr class="my-4">
    <p>Для проверки своих знаний или их закрепления нажмите на кнопочку ниже</p>
    <a class="btn btn-primary btn-lg" href="/trainerPage?trainer=1" role="button">Обучение</a>
</div>
</body>
</html>