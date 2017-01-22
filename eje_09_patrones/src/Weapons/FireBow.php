<?php

namespace MyCommunity\Weapons;

use MyCommunity\Unit;

class FireBow extends Weapon
{
    protected $damage = 30;

    protected $majical = true;

    protected $description = ':unit dispara una flecha de  fuego a :opponent';
}