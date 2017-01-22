<?php

namespace MyCommunity;

use MyCommunity\Weapons\Sword;

class Soldier extends Unit
{
    public function __construct($name,Sword $sword)
    {
        parent::__construct($name,$sword);
    }
}
