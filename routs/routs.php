<?php

    use App\Services\Router;
    use App\Services\Trainer;

    Router::page("/main","main");
    Router::page("/guide","guide");
    Router::page("/trainerMainPage","trainerMainPage");
    Router::page("/trainerPage","trainerPage");
    Router::post("/trainer/createQuest",Trainer::class, "generateQuest", true);

    Router::enable();