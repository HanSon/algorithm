<?php

namespace Hanson\Algorithm\Sort;

class Insertion extends Sort
{

    public function test($array)
    {
        $this->toNode($array);
    }

    public static function sort(array $array) :array
    {
        $result = [];
        $index = 0;
        $result[0] = $array[0];
        unset($array[0]);

        foreach ($array as $key => $value) {
            foreach ($result as $k => $v) {
                if ($value > $v){
                    $index = $k + 1;
                }else {
                    $result[$index + 1] = $result[$index];
                    $result[$index] = $value;
                    $index = 0;
                }
            }
        }

        return $result;
    }

    public static function sort1(array $array) :array
    {
        $index = 0;

        foreach ($array as $key => $value) {
            foreach ($result as $k => $v) {
                if ($value > $v){
                    $index = $k + 1;
                }else {
                    $result[$index + 1] = $result[$index];
                    $result[$index] = $value;
                    $index = 0;
                }
            }
        }

        return $result;
    }
}