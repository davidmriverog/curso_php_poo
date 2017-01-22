<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;

    public function getMessages(Unit $attacker,Unit $victim)
    {
        return showAttach($attacker->getName(),$victim->getName(),'dispara una flecha a ');
    }
}