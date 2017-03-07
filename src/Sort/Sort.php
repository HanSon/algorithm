<?php


namespace Hanson\Algorithm\Sort;


use Hanson\Algorithm\Structure\Node;

class Sort
{

    public function toNode(array $array) :Node
    {
        $next = null;
        foreach (array_reverse($array) as $item) {
            $node = new Node($item, $next);
            $next = $node;
        }

        print_r($node);

    }

    public function toArray(Node $node) :array
    {

    }

}