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

    public function getHp()
    {
        return $this->hp;
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

    public function takeDamage($damage)
    {
       
        $this->hp = $this->hp - $damage;

        if($this->hp <= 0){
            // die opponent
            $this->dead();
        }else{
            echo "posee una cantidad de {$this->hp} pts de vida";
        }
    }
}

class Solder extends Unit
{
    /**
     * Damage Solder
     * 
     * @var integer
     */
    protected $damage = 30;

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}

class Archer extends Unit
{
    /**
     * Damage Solder
     * 
     * @var integer
     */
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if(rand(0,1)){
            return parent::takeDamage($damage);
        }
    }
}

$atila = new Solder('Atila el Huno');
$robin = new Archer('Robin Hood');

// Atila ataca a robin
$atila->attack($robin);

// Robin ataca a Atila
$robin->attack($atila);

// Atila vuelve a atacar
$atila->attack($robin);