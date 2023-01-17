<?php

    namespace App\Services;

    class Trainer
    {
        static $length = 10;
        static $start = 1;
        static $end = 10;

        public static function start()
        {
            if (empty($_COOKIE['settings'])) {
                setcookie("settings[order]", "random");
                setcookie("settings[countQuest]", "15");
            }
        }

        public static function changeSettings($data)
        {
            setcookie("settings[order]", $data['order'], 0, "/");
            setcookie("settings[countQuest]", $data['count'], 0, "/");
            Router::redirect("/".$_GET['url']);
        }

        public static function generateQuest()
        {
            $array = array();
            for ($i = self::$start; $i <= self::$end; $i++) $array[] = $i;
            switch ($_COOKIE['settings']['order']) {
                case "forward":
                    echo json_encode($array);
                    break;
                case "back":
                    $array = array_reverse($array);
                    echo json_encode($array);
                    break;
                case "random":
                    shuffle($array);
                    echo json_encode($array);
                    break;
            }

        }

        public static function generateExam($data)
        {
            $array = array();

            $max = $_COOKIE['settings']['countQuest'];

            for ($i = 1; $i <= self::$end; $i++) {
                for ($ii = 1; $ii <= self::$end; $ii++) {
                    $array[] = [
                        $i,
                        $ii,
                        "sum" => $i * $ii
                    ];
                }
            }
            switch ($_COOKIE['settings']['order']) {
                case "forward":
                    echo json_encode(array_slice($array,0,$max));
                    break;
                case "back":
                    $array = array_reverse($array);
                    echo json_encode(array_slice($array,0,$max));
                    break;
                case "random":
                    $s = array();
                    for ($i = 0; $i < $max; $i++) {
                        $rnd1 = mt_rand(0, count($array) - 1);
                        $s[] = $array[$rnd1];
                        unset($rnd1);
                    }
                    echo json_encode($s);
                    break;
            }
        }


    }