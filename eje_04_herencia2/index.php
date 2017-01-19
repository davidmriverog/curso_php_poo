<?php

abstract class Unit 
{
    /**
     * Alive.
     * 
     * @var boolean
     */
    protected $hp = 40;
    
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

    public function getName()
    {
        return $this->name;
    }

    public function move($direction)
    {
        echo "<p>{$this->name} avanca hacia $direction </p>";
    }

    public function dead()
    {
        echo "<p> {$this->name} muere</p>";
    }

    abstract public function attack(Unit $opponent);
}

class Solder extends Unit
{
    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a {$opponent->getName()} </p>";

        // die opponent
        $opponent->dead();
    }
}

$atila = new Solder('Atila el Huno');
$cid = new Solder('El Cid Campeador');
$atila->attack($cid);