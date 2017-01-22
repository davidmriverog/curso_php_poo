<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;
use MyCommunity\Weapons\Bow;

class BasicBow extends Bow
{
    protected $damage = 20;

    public function getMessages(Unit $attacker,Unit $victim)
    {
        return showAttach($attacker->getName(),$victim->getName(),'dispara una flecha a ');
    }
}