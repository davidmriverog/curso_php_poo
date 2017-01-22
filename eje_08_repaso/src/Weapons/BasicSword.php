<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

class BasicSword extends Weapon
{
    protected $damage = 40;

    public function getMessages(Unit $attacker,Unit $victim)
    {
        showAttach($attacker->getName(),$victim->getName(),'ataca con la espada');
    }
}
