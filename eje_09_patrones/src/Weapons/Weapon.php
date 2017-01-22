<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;
use MyCommunity\Attack;

abstract class Weapon
{

    protected $damage = 0;

    protected $majical = false;

    protected $description = ":unit ataca a :opponent";

    public function createAttack()
    {
        return new Attack($this->damage,$this->majical,$this->description);
    }

    public function getDescription(Unit $attacker,Unit $victim)
    {
        return str_replace(
            [':unit',':opponent'],
            [$attacker->getName(),$victim->getName()],
            $this->description
        );
    }
}