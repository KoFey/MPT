<?php

    namespace App\Services;

    class Page
    {
        public static function part($page_name)
        {
            require_once "views/components/" . $page_name . ".php";
        }
    }