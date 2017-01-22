<?php

namespace MyCommunity\Weapons;

abstract class Weapon
{
    protected $damage = 0;

    public function getDamage()
    {
        return $this->damage;
    }
}