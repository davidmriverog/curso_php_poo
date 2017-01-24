<?php

class Person
{
    protected $name;

    protected static $database = 'mysql';

    public $table = 'person';

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
        echo "Saving {$this->name} in the table ". $this->table . "<br>";
    }
}

// Person::$table = 'personas';

$david = new Person('David Rivero');
$david->table = 'people';
$david->save();



$miguel = new Person('Miguel Rivero');
$miguel->save();
