<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;
use MyCommunity\Weapons\Bow;

class CrossBow extends Bow
{
    protected $damage = 40;

    public function getMessages(Unit $attacker,Unit $victim)
    {
        return showAttach($attacker->getName(),$victim->getName(),'dispara una flecha a ');
    }
}