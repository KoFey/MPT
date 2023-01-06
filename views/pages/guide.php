<!doctype html>
<html lang="ru">
<?php
    require_once "views/components/head.php";
?>
<body>

<?php
    require_once "views/components/navbar.php";
?>

<div>
    <div id="carouselExampleIndicators" class="carousel slide w-75 ml-auto mr-auto"
         style="min-width: 1280px;min-height: 720px" data-ride="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="9"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="10"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="11"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Что такое таблица умножения?</h3>
                    <p style="font-size:20px">Таблица умножения - это десять столбиков, в которых поочередно
                        перемножаются все числа от 1 до 10 и зафиксирован
                        результат действия.</p>
                </div>

            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-75">
                    <h3>Обычно таблица умножения выглядит вот так:</h3>
                    <img src="/photo/multiplication-table.jpg" class="d-block" style="margin-left: 200px" alt="">
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Однако по нему учить таблицу умножения немного долго и сложно!</h3>
                    <p style="font-size:20px">Мы предложим вам иной способ запоминания таблицы умножения.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-90">
                    <h3>Используем таблицу Пифагора</h3>
                    <p style="font-size:20px">Здесь 100 сочетаний из предыдущей таблицы сокращены до 55.</p>
                    <img src="/photo/tablePif.png" alt="" class="d-block"
                         style="margin-left: 200px;width: 634px;height: 480px">
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Используем таблицу Пифагора</h3>
                    <p style="font-size:20px">Таблица Пифагора устроена легче, чем может показаться. Берем числа из
                        левого столбика и умножаем на числа из верхней строки. Правильный ответ — на месте их
                        пересечения.

                        Не стоит торопиться и ожидать молниеносных результатов. Начните изучение с колонок 1,
                        2, 3..</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Используем таблицу Пифагора</h3>
                    <p style="font-size:20px">Вот как можно потренироваться прямо сейчас:
                        нарисуйте таблицу и заполните ее. Проговаривайте счет вслух — это поможет
                        запоминанию.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Важные правила при изучении таблицы умножения</h3>
                    <p style="font-size:20px">1.До изучения этой темы вы уже наверняка знаете, как складывать
                        числа. Значит, можно привести простой пример, поясняющий, что такое умножение и для чего
                        нужна таблица.<br>
                        2 × 5 — это то же самое, что 2 + 2 + 2 + 2 + 2, то есть пять раз по 2.<br>

                        2 × 5 = 10<br>

                        2 + 2 + 2 + 2 + 2 = 10 <br>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Важные правила при изучении таблицы умножения</h3>
                    <p style="font-size:20px">2.Любое число при умножении на 1 остается тем же.<br>

                        5 × 1 = 5 <br>

                        1 × 9 = 9 <br>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Важные правила при изучении таблицы умножения</h3>
                    <p style="font-size:20px">3. При умножении на 5 полученное число оканчивается либо на 5, либо на 0.
                        Если число четное, результат будет с 0, если нечетное — с 5.<br>

                        5 × 3 = 15<br>

                        6 × 5 = 30<br>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Важные правила при изучении таблицы умножения</h3>
                    <p style="font-size:20px">4. При умножении на 10 результат будет всегда оканчиваться на 0, а
                        начинаться со второго числа в примере.<br>

                        10 × 6 = 60<br>

                        9 × 10 = 90<br>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Важные правила при изучении таблицы умножения</h3>
                    <p style="font-size:20px">5. Результаты умножения на 5 в два раза меньше результатов на 10. <br>

                        5 × 4 = 20<br>

                        10 × 4 = 40<br>
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/photo/greyback.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption h-50">
                    <h3>Попробуйте наш тренажер устного счета, чтобы проверить свои знания :)</h3>
                    <a class="btn btn-primary" href="#" role="button">Тренажер</a>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators"
                data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators"
                data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.js"></script>
</div>
</body>
</html>