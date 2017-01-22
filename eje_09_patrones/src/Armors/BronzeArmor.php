<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;
use MyCommunity\Attack;

class BronzeArmor implements Armor
{
    public function absorbDamage(Attack $attack)
    {
        return $attack->getDamage() / 2;
    }
}
