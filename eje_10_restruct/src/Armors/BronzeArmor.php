<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;
use MyCommunity\Attack;

class BronzeArmor extends Armor
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }

    public function absorbMagicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
