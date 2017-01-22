<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

class CrossBow extends Weapon
{
    protected $damage = 40;

    public function getMessages(Unit $attacker,Unit $victim)
    {
        return showAttach($attacker->getName(),$victim->getName(),'dispara una flecha a ');
    }
}