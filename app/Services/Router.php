<?php

    namespace App\Services;

    class Router
    {


        private static $list = [];

        public static function page($uri, $page_name)
        {
            self::$list[] = [
                "uri" => $uri,
                "page" => $page_name
            ];
        }

        public static function post($uri, $class, $method, $formdata = false, $files = false)
        {

            self::$list[] = [
                "uri" => $uri,
                "class" => $class,
                "method" => $method,
                "post" => true,
                "formdata" => $formdata,
                "files" => $files
            ];
        }

        public static function enable()
        {
            $query = $_GET['q'];
            foreach (self::$list as $route) {
                if ($route['uri'] === '/' . $query) {
                    if ($route["post"] === true) {
                        $action = new $route["class"];
                        $method = $route['method'];
                        if ($route['formdata'] && $route['files']) {
                            $action->$method($_POST, $_FILES);
                        } elseif ($route['formdata'] && !$route['files']) {

                            $action->$method($_POST);
                        } else {
                            $action->$method();
                        }
                        die();
                    } else {
                        require_once "views/pages/" . $route['page'] . ".php";
                        die();
                    }
                }
            }
            self::not_found_page();
        }

        public static function redirect($url) {
            header("Location: ". $url);
        }

        private static function not_found_page() {
            require_once "views/errors/404.php";
        }
    }