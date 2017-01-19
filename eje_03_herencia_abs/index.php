<?php

class Unit 
{
    /**
     * Alive.
     * 
     * @var boolean
     */
    protected $alive = true;
    
    /**
     * Name Unit.
     *  
     * @var string
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move($direction)
    {
        echo "<p>{$this->name} avanca hacia $direction </p>";
    }

    public function attack($opponent)
    {
        echo "<p> {$this->name} ataca a $opponent </p>";
    }
}

class Solder extends Unit
{

}

class Archer extends Unit
{

}