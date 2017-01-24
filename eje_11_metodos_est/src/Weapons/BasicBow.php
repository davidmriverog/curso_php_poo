<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

class BasicBow extends Weapon
{
    protected $damage = 20;

    protected $description = ':unit dispara una flecha a :opponent';
}