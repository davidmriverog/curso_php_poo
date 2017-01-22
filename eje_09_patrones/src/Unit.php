<?php

namespace MyCommunity;

use MyCommunity\Weapons\Weapon;

class Unit 
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


    protected $armor;

    protected $weapon;

    public function __construct($name, Weapon $weapon)
    {
        $this->name = $name;

        $this->weapon = $weapon;
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
        if($this->armor){
            $damage = $this->armor->absorbDamage($damage);
        }

        return $damage;
    }
}
