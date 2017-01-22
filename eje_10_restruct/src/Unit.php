<?php

namespace MyCommunity;

use MyCommunity\Weapons\Weapon;
use MyCommunity\Armors\MissingArmor;

class Unit 
{

    protected $hp = 40;
    
    protected $name;

    protected $armor;

    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;
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

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        show($this->weapon->getDescription($this,$opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

        if($this->hp <= 0){
            // die opponent
            $this->dead();
        }else{
            echo "{$this->name} posee una cantidad de {$this->hp} pts de vida";
        }
    }
}
