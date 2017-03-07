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
        $size = count($array);

        for ($i = 1; $i < $size; $i ++) {
            $tmp = $array[$i];
            for ($j = $i - 1; $j >= 0 && $tmp < $array[$j]; $j --) {
                $array[$j + 1] = $array[$j];
            }
            $array[$j + 1] = $tmp;
        }

        return $array;
    }

    public static function sort1(array $array) :array
    {
        $size = count($array);

        for ($i = 1; $i < $size; $i ++) {
            $array[0] = $array[$i];
            for ($j = $i - 1; $array[0] < $array[$j]; $j --) {
                $array[$j + 1] = $array[$j];
            }
            $array[$j + 1] = $array[0];
        }

        return $array;
    }
}