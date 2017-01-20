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

    public function setHp($hp)
    {
        $this->hp = $hp;
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
    /**
     * Damage Solder
     * 
     * @var integer
     */
    protected $damage = 30;

    public function attack(Unit $opponent)
    {
        echo "<p> {$this->name} ataca a {$opponent->getName()} </p>";

        if($opponent instanceof Solder){
            $damage = $this->damage / 2;
        }else{
            $damage = $this->damage;
        }

        $opponent->setHp($opponent->getHp() -  $damage);

        if($opponent->getHp() <= 0){
            // die opponent
            $opponent->dead();
        }else{
            echo "posee una cantidad de {$opponent->getHp()} pts de vida";
        }
        
    }
}

$atila = new Solder('Atila el Huno');
$cid = new Solder('El Cid Campeador');
$atila->attack($cid);
$atila->attack($cid);