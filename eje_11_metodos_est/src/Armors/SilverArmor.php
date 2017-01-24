<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;
use MyCommunity\Attack;

class SilverArmor extends Armor 
{
    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage() / 3;
    }
}