<?php

    session_start();

    require_once __DIR__."/vendor/autoload.php";

    \App\Services\Trainer::start();

    require_once __DIR__. "/routs/routs.php";

