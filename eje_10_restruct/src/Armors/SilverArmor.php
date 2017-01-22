<?php

namespace MyCommunity\Armors;

use MyCommunity\Armor;
use MyCommunity\Attack;

class SilverArmor implements Armor 
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isPhysical()){
            return $attack->getDamage() / 3;
        }

        return $attack->getDamage();
    }
}