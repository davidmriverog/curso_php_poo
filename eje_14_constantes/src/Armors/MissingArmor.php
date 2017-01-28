<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;
use MyCommunity\Attack;

class MissingArmor extends Armor
{
    public function absorbDamage(Attack $damage)
    {
        return $damage->getDamage();
    }
}