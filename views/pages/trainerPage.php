<?php
    if(!empty($_GET['trainer'])) {

    }
?>

<!doctype html>
<html lang="ru">
<?php
    require_once "../components/head.php";
?>
<body>
<?php
    require_once "../components/navbar.php";
?>


<div class="container" style="background-color: lightgray; border-radius: 50px; overflow: hidden; padding-bottom: 20px">
    <div class="progress">
        <div class="progress-bar" role="progressbar" aria-label="Segment one" style="width: 15%" aria-valuenow="15"
             aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-success" role="progressbar" aria-label="Segment two" style="width: 30%"
             aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar bg-info" role="progressbar" aria-label="Segment three" style="width: 20%"
             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="container text-center mt-4" style="font-size: 100px">
        <div class="d-inline">
        <span id="x" style="color: deepskyblue">
            5
        </span>
            x
            <span id="y" style="color: orange">
            8
        </span>
            =
        </div>
        <div id="answer_box" class="d-inline">
            1
        </div>
    </div>

    <div class="text-center">
        <button class="btn btn-light" onclick="">Не знаю</button>
    </div>
</div>

<script src="/assets/js/trainerScripts.js"></script>
</body>
</html>