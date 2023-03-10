<?php

    use App\Services\Router;
    use App\Services\Trainer;

    Router::page("/main","main");
    Router::page("/","main");
    Router::page("/guide","guide");
    Router::page("/trainerMainPage","trainerMainPage");
    Router::page("/trainerPage","trainerPage");
    Router::page("/examPage","examPage");
    Router::page("/aboutProject","aboutProject");
    Router::page("/settings","settings");


    Router::post("/trainer/createQuest",Trainer::class, "generateQuest");
    Router::post("/trainer/createExam",Trainer::class, "generateExam", true);
    Router::post("/trainer/setting",Trainer::class, "changeSettings", true);

    Router::enable();