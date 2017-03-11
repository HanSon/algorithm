<?php


namespace Tests;


use Hanson\Algorithm\Sort\Bubble;
use PHPUnit\Framework\TestCase;

class BubbleTest extends TestCase
{

    public function testNode()
    {
        $array = [3, 5, 2, 6, 9, 4];
        $result = Bubble::sort($array);
        print_r($result);
        $this->assertEquals([2, 3, 4, 5, 6, 9], $result);
    }

}