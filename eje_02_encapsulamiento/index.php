<?php

/**
 * class Person
 *
 * @author  David Rivero <[<davidmriverog@gmail.com>]>
 */
class Person
{
    /**
     * First Name
     * 
     * @var string
     */
    protected $firstName;
    
    /**
     * Last Name
     * 
     * @var string
     */
    protected $lastName;

    /**
     * class Person construct.
     * 
     */
    public function __construct()
    {

    }

    /**
     * Getter FirstName.
     * 
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Setter FirstName.
     * 
     * @return string
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
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

$person = new Person;

$person->setFirstName('David Miguel');

echo " {$person->getFirstName()} ";