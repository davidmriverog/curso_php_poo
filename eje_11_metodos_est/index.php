<?php

class Person
{
    protected static $firstName;

    public static $name = 'Invitado';

    public function __construct($firstName)
    {
        static::$firstName = $firstName;
    }

    public function getFirstName()
    {
        return static::$firstName;
    }

    public static function name()
    {
        return static::$name;
    }
}

// exit(Person::$name);
exit(Person::name());

$david = new Person('David Rivero');
$miguel = new Person('Miguel Rivero');

echo "Hola Sr(a). {$david->getFirstName()} <br>";
echo "Hola Sr(a). {$miguel->getFirstName()} <br>";