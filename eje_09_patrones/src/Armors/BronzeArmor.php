<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;

class BronzeArmor implements Armor
{
    public function absorbDamage($damage)
    {
        return $damage / 2;
    }
}
