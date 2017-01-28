<?php

namespace MyCommunity;

use MyCommunity\Weapons\Weapon;
use MyCommunity\Armors\MissingArmor;
use MyCommunity\Weapons\BasicSword;
use MyCommunity\Armors\BronzeArmor;

class Unit 
{

    protected $hp = 40;
    
    protected $name;

    protected $armor;

    protected $weapon;

    protected $logger;

    public function __construct($name, Weapon $weapon,$logger=null)
    {
        $this->name = $name;
        $this->weapon = $weapon;
        $this->armor = new MissingArmor;
        $this->logger = $logger;
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

    public function setArmor(Armor $armor = null)
    {
        $this->armor = $armor;

        return $this;
    }

    public function setLogger($logger)
    {
        $this->logger = $logger;

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
        $this->logger->info("{$this->name} avanca hacia $direction ");
    }

    public function dead()
    {
        $this->logger->info("{$this->name} muere Fin del juego...");
        
        exit();
    }

    public function attack(Unit $opponent)
    {
        $attack = $this->weapon->createAttack();

        $this->logger->info($attack->getDescription($this, $opponent));

        $opponent->takeDamage($attack);
    }

    public function takeDamage(Attack $attack)
    {
        $this->hp = $this->hp - $this->armor->absorbDamage($attack);

        if($this->hp <= 0){
            // die opponent
            $this->dead();
        }else{
            $this->logger->info("{$this->name} posee una cantidad de {$this->hp} pts de vida");
        }
    }
}
