<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

abstract class Weapon
{
    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }

    abstract public function getMessages(Unit $attacker,Unit $victim);
}