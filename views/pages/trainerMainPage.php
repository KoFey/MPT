<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>
<?php
    require_once "views/components/navbar.php";
?>

<div class="container card-group row-cols-3 mr-auto ml-auto mt-4">
    <?php
        for ($i = 1; $i < 11; $i++) {
            echo <<<nnn
            <div class="col mb-4">
                <div class="card text-center">
                    <div class="card-body">
                      <h4 class="card-title">Таблица умножения на $i</h4>
                    </div>
                    <div class="card-footer text-center">
                      <a href="/trainerPage?trainer=$i" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
nnn;

        }
    ?>

</div>
<div class="container">
    <div class="col mb-4">
        <div class="card text-center">
            <div class="card-body">
                <h4 class="card-title">Случайные варианты</h4>
            </div>
            <div class="card-footer text-center">
                <a href="/examPage" class="btn btn-primary">Начать</a>
            </div>
        </div>
    </div>
</div>

</body>
</html>