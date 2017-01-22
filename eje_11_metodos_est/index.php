<?php

class Person
{
    protected $name;

    public function __construct($firstName)
    {
        $this->name = $firstName;
    }

    public function getFirstName()
    {
        return $this->name;
    }
}

$david = new Person('David Rivero');
$miguel = new Person('Miguel Rivero');

echo "Hola Sr(a). {$david->getFirstName()} <br>";
echo "Hola Sr(a). {$miguel->getFirstName()} <br>";