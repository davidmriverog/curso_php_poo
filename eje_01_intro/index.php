<?php

/**
 * class Person
 *
 * @author  David Rivero <[<davidmriverog@gmail.com>]>
 */
class Person
{
    var $firstName;
    var $lastName;

    /**
     * class Person construct.
     * 
     * @param string $firstName 
     * @param string $lastnName 
     */
    public function __construct($firstName,$lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * This function obtain fullname.
     * 
     * @return string
     */
    public function obtainFullName()
    {
        return $this->firstName." ".$this->lastName;
    }
}

$person = new Person('David','Rivero');

echo "Hola Sr(a). {$person->obtainFullName()}";