<?php


namespace Tests;


use Hanson\Algorithm\Sort\Insertion;
use PHPUnit\Framework\TestCase;

class InsertionTest extends TestCase
{

    public function testNode()
    {
        $array = [3, 5, 2, 6, 9, 4];
        $result = Insertion::sort($array);
        print_r($result);
    }

}