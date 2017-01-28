<?php

namespace MyCommunity;

abstract class Armor
{
    public function absorbDamage(Attack $attack)
    {
        if($attack->isPhysical()){

            Log::info('Absorbing Damage...');
            return $this->absorbPhysicalDamage($attack);
        }

        return $this->absorbMagicalDamage($attack);
    }

    public function absorbPhysicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }

    public function absorbMagicalDamage(Attack $attack)
    {
        return $attack->getDamage();
    }
}
