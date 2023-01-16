<?php

    namespace App\Services;

    class Trainer
    {
        static $length = 10;
        static $start = 1;
        static $end = 10;

        public static function sessionPerem($data = null)
        {
            $countQuest = empty($data["formGroupCountInput"]) ? 15 : $data["formGroupCountInput"];
            $_SESSION['countQuest'] = $countQuest;
        }

        public static function generateQuest()
        {
            $array = array();
            while (count($array) < self::$length) {
                $array[mt_rand(self::$start, self::$end)] = "";
            }

            echo json_encode(array_keys($array));
        }

        public static function generateExam($data)
        {
            $array = array();

            $max = $data['max'];

            for($i = 1;$i<=self::$end;$i++) {
                for ($ii = 1; $ii <= self::$end;$ii++) {
                    $array[] = [
                        $i,
                        $ii,
                        "sum" => $i * $ii
                    ];
                }

            }
            $s = array();
            for($i=0;$i<$max;$i++) {
                $rnd1 = mt_rand(0,count($array)-1);
                $s[] = $array[$rnd1];
                unset($rnd1);
            }
            echo json_encode($s);
        }


    }