<?php

namespace MyCommunity;

use MyCommunity\Weapons\Weapon;
use MyCommunity\Armors\MissingArmor;
use MyCommunity\Weapons\BasicSword;
use MyCommunity\Armors\BronzeArmor;

class Unit 
{
    const MAX_DAMAGE = 100;

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

    public function createSoldier()
    {
        $soldier = new Unit('Atila el H',new BasicSword);

        return $soldier;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setHp($damage)
    {

        if($damage > static::MAX_DAMAGE){
            $damage = static::MAX_DAMAGE;
        }

        $this->hp = $this->hp - $damage;
    }

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;

        return $this;
    }

    public function setWeapon(Weapon $weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    public function setShield()
    {
        return $this;
    }

    public function move($direction)
    {
        Log::info("{$this->name} avanca hacia $direction ");
    }

    public function dead()
    {
        Log::info("{$this->name} muere Fin del juego...");
        
        exit();
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        Log::info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {

        $this->setHp(
            $this->armor->absorbDamage($attack)
        );

        if($this->hp <= 0){
            // die opponent
            $this->dead();
        }else{
            Log::info("{$this->name} posee una cantidad de {$this->hp} pts de vida");
        }
    }
}
