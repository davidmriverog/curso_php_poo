<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;
use MyCommunity\Attack;

abstract class Weapon
{

    protected $damage = 0;

    protected $majical = false;

    public function createAttack()
    {
        return new Attack($this->damage,$this->majical,$this->getDescriptionKey());
    }

    protected function getDescriptionKey()
    {
        return str_replace('MyCommunity\Weapons\\', '',get_class($this)).'Attack';
    }
}