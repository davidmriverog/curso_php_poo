<?php

namespace MyCommunity;

require '../vendor/autoload.php';


class OneClass
{
    public function __call($method,array $args)
    {
        var_dump($method,$args);
    }
}


$oneClass = new OneClass;

$oneClass->oneFunction();