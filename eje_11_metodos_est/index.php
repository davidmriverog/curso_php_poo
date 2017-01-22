<?php

class Person
{
    protected static $firstName;

    public function __construct($firstName)
    {
        static::$firstName = $firstName;
    }

    public function getFirstName()
    {
        return static::$firstName;
    }
}

$david = new Person('David Rivero');
$miguel = new Person('Miguel Rivero');

echo "Hola Sr(a). {$david->getFirstName()} <br>";
echo "Hola Sr(a). {$miguel->getFirstName()} <br>";