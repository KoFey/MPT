<?php

    namespace App\Services;

    class Trainer
    {
        static $length = 10;
        static $start = 1;
        static $end = 10;

        public static function generateQuest()
        {
            $array = array();
            while (count($array) < self::$length) {
                $array[mt_rand(self::$start, self::$end)] = "";
            }

            echo json_encode(array_keys($array));
        }

        public static function generateExam($data) {
            $array = array();

            $max = $data['max'];

            for($i = 0;$i<$max;$i++) {
                $rnd1 = rand(1,self::$length);
                $rnd2 = rand(1,self::$length);
                $array[] = [
                    $rnd1,
                    $rnd2,
                    "sum" => $rnd1 * $rnd2
                ];
            }
            echo json_encode($array);
        }
    }