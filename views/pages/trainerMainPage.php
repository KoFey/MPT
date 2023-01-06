<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>
<?php
    require_once "views/components/navbar.php";
?>

<div class="container card-group row-cols-3 mr-auto ml-auto">
    <?php
        for ($i = 1; $i < 11; $i++) {
            echo <<<nnn
            <div class="col mb-4">
                <div class="card text-center">
                    <div class="card-body">
                      <h4 class="card-title">Таблица умножения на $i</h4>
                    </div>
                    <div class="card-footer text-center">
                      <a href="/views/pages/trainerPage.php?trainer=$i" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
nnn;

        }
    ?>

</div>
<div class="col mb-4">
    <div class="card text-center">
        <div class="card-body">
            <h4 class="card-title">В перемешку</h4>
        </div>
        <div class="card-footer text-center">
            <a href="#" class="btn btn-primary">Начать</a>
        </div>
    </div>
</div>
</body>
</html>