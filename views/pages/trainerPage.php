<?php
    if (empty($_GET['trainer'])) {
        header("Location: error");
    }
?>

<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>
<div id="preloader" class="position-fixed" style="width: 100%; height: 100%;z-index: 9999; background-color: white">
    <div class="d-flex justify-content-center h-100 align-items-center">
        <div class="spinner-border"></div>
    </div>
</div>
<?php
    require_once "views/components/navbar.php";
?>

<div class="container" style="background-color: lightgray; border-radius: 50px; overflow: hidden; padding-bottom: 20px">
    <div class="progress" id="progress">

    </div>

    <div class="container text-center mt-4" style="font-size: 100px">
        <div class="d-inline">
        <span id="x" style="color: deepskyblue">

        </span>
            x
            <span id="y" style="color: orange">

        </span>
            =
        </div>
        <div id="answer_box" class="d-inline">

        </div>
    </div>
    <div class="btn-toolbar justify-content-between" role="toolbar">
        <div class="btn-group m-auto" role="group" aria-label="First group">
            <button class="btn btn-light" id="btn_skip" onclick="next(true)">Не знаю</button>
        </div>
        <div class="input-group">
            <button type="button" class="btn btn-primary btn-lg" id="btn_next" onclick="next()">Ответить</button>
        </div>
    </div>

</div>
<br>
<div class="container" id="score" hidden
     style="background-color: whitesmoke; border-radius: 50px; overflow: hidden; padding-bottom: 20px">
    <h2 class="text-center">Статистика тренировки</h2>
    <div class="score text-center">
        <div class="rating-result text-center">
            <span class="" id="timer"></span>
            <span class="" id="spanPercent"></span>
            <span class="" id="spanCount"></span>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="d-flex flex-column justify-content-center position-relative m-4 text-center" style="background-color: #0dcaf0; width: 300px; height: 200px; border-radius: 20px">
            <div>
                <span id="count" style="font-size: 64px;font-weight: 430;">1</span>
                <span id="maxQuests" style="font-size: 44px;font-weight: 430;">из 10</span>
            </div>
            <h3>Правильных ответов</h3>
        </div>
        <div class="d-flex flex-column justify-content-center position-relative m-4 text-center" style="background-color: #3ab22d; width: 300px; height: 200px; border-radius: 20px">
            <div>
                <span id="percent" class="mainInfo" style="font-size: 64px;font-weight: 430;">50%</span>
            </div>
            <h3>Процент правильных ответов</h3>
        </div>
        <div class="d-flex flex-column justify-content-center position-relative m-4 text-center" style="background-color: orange; width: 300px; height: 200px; border-radius: 20px">
            <div>
                <span id="time" style="font-size: 64px;font-weight: 430;">5 сек</span>
            </div>
            <h3>Время выполнения квеста</h3>
        </div>
    </div>
    <div class="btn-toolbar justify-content-between" role="toolbar">
        <div class="btn-group m-auto" role="group" aria-label="First group">
            <a href="/trainerPage?trainer=<?php echo $_GET['trainer']?>" class="btn btn-warning">Заново</a>
        </div>
        <div class="input-group">
            <a class="btn-primary btn" href="/trainerMainPage">Вернуться к выбору тренажеров</a>
        </div>
    </div>
</div>

<?php
    require_once "views/components/help.php";
?>

<script src="/assets/js/trainerScripts.js"></script>

</body>
</html>