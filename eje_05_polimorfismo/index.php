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
        echo "<p> {$this->name} muere Fin del juego...</p>";
        exit();
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->hp = $this->hp - $this->absorbDamage($damage);

        if($this->hp <= 0){
            // die opponent
            $this->dead();
        }else{
            echo "{$this->name} posee una cantidad de {$this->hp} pts de vida";
        }
    }

    protected function absorbDamage($damage)
    {
        return $damage;
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

    protected $armor;

    public function __construct($name,Armor $armor = null)
    {
        $this->setArmor($armor);
        parent::__construct($name);
    }

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a con la espada a el oponente {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
    }

    protected function absorbDamage($damage)
    {
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
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
        echo "<p> {$this->name} Dispara una flecha al oponente {$opponent->getName()} </p>";

        $opponent->takeDamage($this->damage);
    }
}

class Armor 
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}

$armor = new Armor;

$robin = new Archer('Robin Hood');
$atila = new Solder('Atila el Huno');


// Atila ataca a robin
// $atila->attack($robin);

// Robin ataca a Atila
$robin->attack($atila);

$atila->setArmor($armor);

$robin->attack($atila);
