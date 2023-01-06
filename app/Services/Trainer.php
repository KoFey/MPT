<?php

    namespace App\Services;

    class Trainer
    {
        public static function generateQuest()
        {
            $length=10;
            $start=1;
            $end=10;
            $array=array();
            while (count($array)<$length) {
                $array[mt_rand($start,$end)]="";
            }

            echo json_encode(array_keys($array));
        }
    }