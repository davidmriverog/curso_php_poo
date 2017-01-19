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
        echo "<p> {$this->name} golpea  a $opponent </p>";
    }
}

class Solder extends Unit
{
    public function attack($opponent)
    {
        echo "<p> {$this->name} corta  a $opponent </p>";
    }
}

class Archer extends Unit
{
    public function attack($opponent)
    {
        echo "<p> {$this->name} dispara  a $opponent </p>";
    }
}

$solder = new Solder('Atila');
$solder->attack('El Cid Campeador');

$solder = new Archer('Robin Hood');
$solder->attack('Erick el Rojo');