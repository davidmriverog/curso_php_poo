<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;

class SilverArmor implements Armor 
{
    public function absorbDamage($damage)
    {
        return $damage / 3;
    }
}