<?php

class Person
{
    protected $name;

    protected static $database = 'mysql';

    public static $table = 'person';

    public function __construct($firstName)
    {
        $this->name = $firstName;
    }

    public function getFirstName()
    {
        return $this->name;
    }

    public function save()
    {
        echo "Saving {$this->name} in the table ". static::$table . "<br>";
    }
}

$david = new Person('David Rivero');
$david->save();

Person::$table = 'personas';

$miguel = new Person('Miguel Rivero');
$miguel->save();
